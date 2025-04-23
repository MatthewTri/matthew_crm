<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    // Project.php
    public function lead() {
        return $this->belongsTo(Lead::class);
    }

    public function approvedBy() {
        return $this->belongsTo(User::class, 'approved_by'); // jika sudah di-approve manager
    }

}
