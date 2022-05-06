<?php

namespace App\Models;

use App\Models\Penelitian;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skema extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function penelitian()
    {
        return $this->hasMany(Penelitian::class);
    }
}
