<?php

namespace App\Livewire\Roles;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Spatie\Permission\Models\Role;
use SweetAlert2\Laravel\Traits\WithSweetAlert;

#[Title('Roles')]

class RoleIndex extends Component
{
    use WithPagination, WithSweetAlert;
    public $title = 'Role List';
    public $deleteId;
    protected $listeners = ['deleteConfirmed' => 'deleteRole'];

    public function render()
    {
        return view('livewire.roles.role-index', [
            'roles' => Role::latest()->paginate(10)
        ]);
    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $role = Role::find($id);
        if ($role->name === 'super-admin') {
            $this->dispatch(
                'swal-toast',
                [
                    'icon' => 'error',
                    'message' => 'Super-admin role cannot be deleted'
                ]
            );
            return;
        }

        $this->dispatch(
            'show-confirm-delete',
            [
                'text' => 'Are you sure you want to delete this role?'
            ]
        );
    }

    public function deleteRole()
    {
        Role::find($this->deleteId)->delete();

        $this->dispatch(
            'swal-toast',
            [
                'icon' => 'success',
                'message' => 'Role deleted successfully'
            ]
        );
    }
}
