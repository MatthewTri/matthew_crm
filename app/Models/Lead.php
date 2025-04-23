<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    /** @use HasFactory<\Database\Factories\LeadFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    // Lead.php
    public function user() {
        return $this->belongsTo(User::class); // diinput oleh sales
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    
    public function project() {
        return $this->hasOne(Project::class); // setiap lead hanya bisa diajukan 1 kali
    }

}
