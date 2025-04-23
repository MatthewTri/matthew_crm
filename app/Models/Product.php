<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    // Product.php
    public function subscriptions() {
        return $this->hasMany(Subscription::class);
    }

    public function leads() {
        return $this->hasMany(Lead::class);
    }

}
