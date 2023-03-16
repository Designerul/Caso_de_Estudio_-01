<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'update_at'];

    /* Relacion uno a muchos de tipo de libro con libros */
    public function books(){
        return $this->hasMany('App\Models\Book');
    }
}
