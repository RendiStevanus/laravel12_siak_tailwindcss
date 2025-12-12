<?php

namespace App\Livewire\SkalaNilai;

use Livewire\Component;
use App\Models\SkalaNilai;
use Livewire\Attributes\Title;

#[Title('Skala Nilai')]

class SkalaNilaiIndex extends Component
{
    public $title = 'Daftar Skala Nilai';

    public function render()
    {
        return view(
            'livewire.skala-nilai.skala-nilai-index',
            [
                'skalaNilai' => SkalaNilai::with('programStudi')->latest()->paginate(10)
            ]
        );
    }
}
