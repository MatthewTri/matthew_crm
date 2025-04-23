<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    /** @use HasFactory<\Database\Factories\SubscriptionFactory> */
    use HasFactory;
    
    protected $guarded = ['id'];
    
    // Subscription.php
    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }

}
