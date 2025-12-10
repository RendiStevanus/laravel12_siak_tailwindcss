<?php

namespace App\Livewire\Gedung;

use App\Models\Gedung;
use Livewire\Component;
use Livewire\Attributes\Title;

class GedungIndex extends Component
{
    #[Title('Program Studi')]
    public $title = 'Gedung';

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
