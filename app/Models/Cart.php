<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Dhaka;

class Cart extends Model
{
    use HasFactory;

    public $primaryKey = 'card_id';

    public function users(){

        return $this->belongsTo(User::class,'foreign_key');

    }
    // public function dhakas(){
    //     return $this->belongsToMany(Dhaka::class, 'id');
    // }

}
