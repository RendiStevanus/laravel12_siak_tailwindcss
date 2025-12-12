<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkalaNilai extends Model
{
    protected $table = 'nilai_skala';
    protected $guarded = [];


    public function programStudi()
    {
        return $this->belongsTo(ProgramStudi::class, 'prodi_id');
    }
}
