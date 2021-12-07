<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pocket extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'reference',
        'description',
        'pocket_status_id'
    ];

    public function pocketStatus()
    {   
        return $this->belongsTo(PocketStatus::class);
    }
}
