<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pocket extends Model
{
    use HasFactory;

    public function pocketStatus()
    {   
        return $this->belongsTo(PocketStatus::class);
    }
}
