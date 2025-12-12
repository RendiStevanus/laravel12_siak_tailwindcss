<?php

namespace App\Livewire\Ruangan;

use App\Models\Ruangan;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use SweetAlert2\Laravel\Traits\WithSweetAlert;

#[Title('Ruangan')]

class RuanganIndex extends Component
{
    use WithPagination, WithSweetAlert;
    public $title = 'Daftar Ruangan';

    public function render()
    {
        return view(
            'livewire.ruangan.ruangan-index',
            [
                'ruangan' => Ruangan::with('gedung')->latest()->paginate(10)
            ]
        );
    }
}
