<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ordery extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'comment',
        'sum',
        'delivery_method_id',
        'payment_type_id',
        'products',
        'address'
    ];

    protected $casts = [
        'products' => 'array',
        'address' => 'array',
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
