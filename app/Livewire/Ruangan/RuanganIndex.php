<?php

namespace App\Livewire\Ruangan;

use App\Models\Ruangan;
use Livewire\Component;
use Livewire\Attributes\Title;

class RuanganIndex extends Component
{
    #[Title('Ruangan')]
    public $title = 'Ruangan';

    public function render()
    {
        return view(
            'livewire.ruangan.ruangan-index',
            [
                'ruangan' => Ruangan::with('gedung')->latest()->paginate(5)
            ]
        );
    }
}
