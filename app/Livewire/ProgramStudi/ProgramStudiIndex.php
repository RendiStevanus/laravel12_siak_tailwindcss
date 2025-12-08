<?php

namespace App\Livewire\ProgramStudi;

use Livewire\Component;
use App\Models\ProgramStudi;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use SweetAlert2\Laravel\Traits\WithSweetAlert;

class ProgramStudiIndex extends Component
{
    use WithPagination, WithSweetAlert;
    #[Title('Program Studi')]
    public $title = 'Program Studi';
    public $deleteId;
    protected $listeners = ['deleteConfirmed' => 'deleteProgramStudi'];

    public function render()
    {
        return view(
            'livewire.program-studi.program-studi-index',
            [
                'program_studi' => ProgramStudi::latest()->paginate(5)
            ]
        );
    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $this->dispatch(
            'show-confirm-delete',
            [
                'title' => 'Hapus Program Studi',
                'text' => 'Apakah anda yakin ingin menghapus data ini?'
            ]
        );
    }

    public function deleteProgramStudi()
    {
        ProgramStudi::find($this->deleteId)->delete();

        $this->dispatch(
            'swal-toast',
            [
                'icon' => 'success',
                'message' => 'Program Studi berhasil dihapus'
            ]
        );
    }
}
