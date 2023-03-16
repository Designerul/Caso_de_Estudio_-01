<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'update_at'];

    /* Relacion de uno a muchos de categoria con libros */
    public function books(){
        return $this->hasMany('App\Models\Book');
    }
}
