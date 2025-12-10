<?php

namespace App\Livewire\Gedung;

use App\Models\Gedung;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Gedung')]

class GedungIndex extends Component
{
    public $title = 'Daftar Gedung';

    public function render()
    {
        return view(
            'livewire.gedung.gedung-index',
            [
                'gedung' => Gedung::latest()->paginate(5)
            ]
        );
    }
}
