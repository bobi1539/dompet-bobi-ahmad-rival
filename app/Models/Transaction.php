<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'description',
        'date',
        'value',
        'pocket_id',
        'category_id',
        'transaction_status_id'
    ];

    public function pocket()
    {
        return $this->belongsTo(Pocket::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function transactionStatus()
    {
        return $this->belongsTo(TransactionStatus::class);
    }
}
