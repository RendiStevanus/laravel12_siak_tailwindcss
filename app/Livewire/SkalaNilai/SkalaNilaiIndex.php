<?php

namespace App\Livewire\SkalaNilai;

use Livewire\Component;
use App\Models\SkalaNilai;
use Livewire\Attributes\Title;

class SkalaNilaiIndex extends Component
{
    #[Title('Skala Nilai')]
    public $title = 'Skala Nilai';

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
