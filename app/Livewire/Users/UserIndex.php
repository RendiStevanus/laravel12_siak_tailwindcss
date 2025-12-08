<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use SweetAlert2\Laravel\Traits\WithSweetAlert;

class UserIndex extends Component
{
    use WithPagination, WithSweetAlert;
    #[Title('User List')]
    
    public $deleteId;
    protected $listeners = ['deleteConfirmed' => 'deleteUser'];

    public function render()
    {
        return view('livewire.users.user-index', [
            'users' => User::with('roles')->latest()->paginate(5)
        ]);
    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $this->dispatch(
            'show-confirm-delete',
            [
                'text' => 'Are you sure you want to delete this user?'
            ]
        );
    }

    public function deleteUser()
    {
        if ($this->deleteId == 1) {
            $this->dispatch(
                'swal-toast',
                [
                    'icon' => 'error',
                    'message' => 'You cannot delete this user'
                ]
            );
            return;
        }

        User::find($this->deleteId)->delete();

        $this->dispatch(
            'swal-toast',
            [
                'icon' => 'success',
                'message' => 'User deleted successfully'
            ]
        );
    }
}
