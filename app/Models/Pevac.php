<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bend;

class Pevac extends Model
{
    use HasFactory;

    public function bend()
    {
        return $this->belongsTo(Bend::class);
    }
}
