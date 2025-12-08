<?php

namespace App\Livewire\PerguruanTinggi;

use Livewire\Component;
use App\Models\PerguruanTinggi;

class PerguruanTinggiIndex extends Component
{
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
