<?php

namespace App\Livewire\MataKuliah;

use Livewire\Component;
use App\Models\MataKuliah;
use Livewire\Attributes\Title;

#[Title('Mata Kuliah')]

class MataKuliahIndex extends Component
{
    public $title = 'Daftar Mata Kuliah';
    public function render()
    {
        return view(
            'livewire.mata-kuliah.mata-kuliah-index',
            [
                'mataKuliah' => MataKuliah::with('programStudi', 'kelompok')->latest()->paginate(10),
            ]
        );
    }
}
