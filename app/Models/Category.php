<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category_status_id'
    ];

    public function categoryStatus()
    {
        return $this->belongsTo(CategoryStatus::class);
    }
}
