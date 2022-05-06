<?php

namespace App\Models;

use App\Models\Dosen;
use App\Models\Prodi;
use App\Models\Skema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penelitian extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function dosen()
    {
        return $this->belongsToMany(Dosen::class);
    }

    public function skema()
    {
        return $this->belongsTo(Skema::class);
    }

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
}
