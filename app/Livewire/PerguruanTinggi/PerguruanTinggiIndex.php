<?php

namespace App\Livewire\PerguruanTinggi;

use Livewire\Component;
use App\Models\PerguruanTinggi;
use SweetAlert2\Laravel\Traits\WithSweetAlert;

class PerguruanTinggiIndex extends Component
{
    use WithSweetAlert;
    public function render()
    {
        return view(
            'livewire.perguruan-tinggi.perguruan-tinggi-index',
            [
                'perguruan_tinggi' => PerguruanTinggi::first()->get()
            ]
        );
    }
}
