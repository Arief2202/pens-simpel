<?php

namespace App\Models;

use App\Models\Prodi;
use App\Models\Penelitian;
use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dosen extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }

    public function penelitian()
    {
        return $this->belongsToMany(Penelitian::class);
    }

    public function pengumuman()
    {
        return $this->hasMany(Announcement::class);
    }
}
