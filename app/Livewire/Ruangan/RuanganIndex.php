<?php

namespace App\Livewire\Ruangan;

use App\Models\Ruangan;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Ruangan')]

class RuanganIndex extends Component
{
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
