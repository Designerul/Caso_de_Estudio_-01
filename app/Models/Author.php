<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'update_at'];

    /* Relacion de uno a muchos de autor con libros */
    public function books(){
        return $this->hasMany('App\Models\Book');
    }
}

