<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pevac;
use App\Models\Nastup;

class Bend extends Model
{
    use HasFactory;

    public function pevaci()
    {
        return $this->hasMany(Pevac::class);
    }

    public function nastupi()
    {
        return $this->hasMany(Nastup::class);
    }
}
