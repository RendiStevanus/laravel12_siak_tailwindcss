<?php

namespace App\Livewire\Gedung;

use App\Models\Gedung;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use SweetAlert2\Laravel\Traits\WithSweetAlert;

#[Title('Gedung')]

class GedungIndex extends Component
{
    use WithPagination, WithSweetAlert;
    public $title = 'Daftar Gedung';

    public function render()
    {
        return view(
            'livewire.gedung.gedung-index',
            [
                'gedung' => Gedung::latest()->paginate(10)
            ]
        );
    }
}
