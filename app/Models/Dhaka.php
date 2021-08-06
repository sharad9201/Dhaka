<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Cart;

class Dhaka extends Model
{
    use HasFactory;

    // protected $table = "dhaka";

    // public $timestamps = false;

    protected $fillable = [
        'design',
        'materials',
        'items',
        'stocks',
        'prices'
    ];
    // public $primaryKey = 'dhaka_id';

    // public function carts(){

    //     return $this->hasOne(Cart::class);

    // }

    // public function users(){
    //     return $this->belongsTo(User::class,'foreign_key');
    // }

}
