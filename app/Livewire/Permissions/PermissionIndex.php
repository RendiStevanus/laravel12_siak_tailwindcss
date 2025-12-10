<?php

namespace App\Livewire\Permissions;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Spatie\Permission\Models\Permission;
use SweetAlert2\Laravel\Traits\WithSweetAlert;

#[Title('Permissions')]

class PermissionIndex extends Component
{
    use WithPagination, WithSweetAlert;
    public $title = 'Permission List';
    public $deleteId;
    protected $listeners = ['deleteConfirmed' => 'deletePermission'];
    public function render()
    {
        return view(
            'livewire.permissions.permission-index',
            [
                'permissions' => Permission::latest()->paginate(10)
            ]
        );
    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $this->dispatch(
            'show-confirm-delete',
            [
                'text' => 'Are you sure you want to delete this permission?'
            ]
        );
    }

    public function deletePermission()
    {
        Permission::find($this->deleteId)->delete();

        $this->dispatch(
            'swal-toast',
            [
                'icon' => 'success',
                'message' => 'Permission deleted successfully'
            ]
        );
    }
}
