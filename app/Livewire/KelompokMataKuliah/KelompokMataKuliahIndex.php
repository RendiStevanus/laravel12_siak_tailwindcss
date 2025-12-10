<?php

namespace App\Livewire\KelompokMataKuliah;

use App\Models\KelompokMataKuliah;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Kelompok Mata Kuliah')]

class KelompokMataKuliahIndex extends Component
{
    public $title = 'Daftar Kelompok Mata Kuliah';

    public function render()
    {
        return view('livewire.kelompok-mata-kuliah.kelompok-mata-kuliah-index', [
            'kelompokMataKuliah' => KelompokMataKuliah::latest()->paginate(10)
        ]);
    }
}
