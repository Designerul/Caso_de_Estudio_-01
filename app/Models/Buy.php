<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'update_at'];

    /* Relacion inversa de Uno a Muchos de Usuario con Compras */
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    /* Relacion inversa Uno a Uno de Libro con Compra */
    public function book(){
        return $this->belongsTo('App\Models\Book');
    }
}
