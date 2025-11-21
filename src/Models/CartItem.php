<?php

namespace Mario1515\LaravelCart\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CartItem extends Model
{
    protected $table = 'cart_items';

    protected $guarded = [];
    
    protected $casts = [
        'price'    => 'decimal:2',
        'quantity' => 'integer',
        'payload'  => 'array',
    ];

    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class);
    }
}
