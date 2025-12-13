<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use App\Models\ProgramStudi;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserForm extends Component
{
    public $userId = null;

    public $name;
    public $username;
    public $email;
    public $role;
    public $prodi_id;
    public $password;
    public $password_confirmation;


    public function mount($userId = null)
    {
        $this->userId = $userId;

        if ($this->userId) {
            $user = User::findOrFail($this->userId);

            $this->name     = $user->name;
            $this->username = $user->username;
            $this->email    = $user->email;

            // 🔑 load role user
            $this->role = $user->roles->first()?->name;

            // 🎓 load prodi jika admin-prodi
            $this->prodi_id = $this->role === 'admin-prodi'
                ? $user->prodi_id
                : null;
        }
    }

    public function updatedRole($value)
    {
        if ($value !== 'admin-prodi') {
            $this->prodi_id = null;
        }
    }

    public function createNewUser()
    {
        $this->validate([
            'name'     => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $this->userId,
            'email'    => 'required|email|unique:users,email,' . $this->userId,
            'role'     => 'required',

            'prodi_id' => $this->role === 'admin-prodi'
                ? 'required|exists:program_studi,id'
                : 'nullable',

            'password' => $this->userId
                ? 'nullable|min:6|confirmed'
                : 'required|min:6|confirmed',
        ]);

        if ($this->userId) {
            // Update user
            $user = User::findOrFail($this->userId);


            $user->update([
                'name'      => $this->name,
                'username'  => $this->username,
                'email'     => $this->email,
                'password'  => $this->password ? Hash::make($this->password) : $user->password,
                'prodi_id'  => $this->role === 'admin-prodi'
                    ? $this->prodi_id
                    : null
            ]);

            // sync role
            $user->syncRoles([$this->role]);

            session()->flash('toast', [
                'icon'    => 'success',
                'message' => 'User updated successfully',
            ]);
        } else {
            // Create user baru
            $user = User::create([
                'name'      => $this->name,
                'username'  => $this->username,
                'email'     => $this->email,
                'prodi_id' => $this->role === 'admin-prodi'
                    ? $this->prodi_id
                    : null,
                'password'  => Hash::make($this->password)
            ]);

            $user->assignRole($this->role);


            session()->flash('toast', [
                'icon'    => 'success',
                'message' => 'User created successfully',
            ]);
        }

        return $this->redirect('/users', navigate: true);
    }

    public function render()
    {
        return view(
            'livewire.users.user-form',
            [
                'roles' => Role::all(),
                'program_studi' => ProgramStudi::all()
            ]
        );
    }
}
