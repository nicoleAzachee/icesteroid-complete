<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    use HasFactory;

    // Define fillable fields
    protected $fillable = [
        'name',
        'email',
        'description',
    ];
}
