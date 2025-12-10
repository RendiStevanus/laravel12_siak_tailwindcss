<?php

namespace App\Livewire\KelompokMataKuliah;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use App\Models\KelompokMataKuliah;
use SweetAlert2\Laravel\Traits\WithSweetAlert;

#[Title('Kelompok Mata Kuliah')]

class KelompokMataKuliahIndex extends Component
{
    use WithPagination, WithSweetAlert;
    public $title = 'Daftar Kelompok Mata Kuliah';

    public function render()
    {
        return view('livewire.kelompok-mata-kuliah.kelompok-mata-kuliah-index', [
            'kelompokMataKuliah' => KelompokMataKuliah::latest()->paginate(10)
        ]);
    }
}
