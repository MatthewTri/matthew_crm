<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    // Customer.php
    public function subscriptions() {
        return $this->hasMany(Subscription::class);
    }

    public function lead()
    {
        return $this->hasOne(Lead::class);
    }

}
