<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table = 'mata_kuliah';
    protected $guarded = [];

    public function kelompok()
    {
        return $this->belongsTo(KelompokMataKuliah::class, 'kelompok_id');
    }

    public function programStudi()
    {
        return $this->belongsTo(ProgramStudi::class, 'prodi_id');
    }
}
