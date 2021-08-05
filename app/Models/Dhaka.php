<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dhaka extends Model
{
    use HasFactory;

    protected $table = "dhaka";

    // public $timestamps = false;

    protected $fillable = [
        'design',
        'materials',
        'items',
        'stocks'
    ];
}
