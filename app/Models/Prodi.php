<?php

namespace App\Models;

use App\Models\Dosen;
use App\Models\Penelitian;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prodi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function dosen()
    {
        return $this->hasMany(Dosen::class);
    }

    public function penelitian()
    {
        return $this->hasMany(Penelitian::class);
    }
}
