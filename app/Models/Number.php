<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'update_at'];

    /* Relacion uno a uno de ecuadernacion con libros */
    public function book(){
        return $this->hasOne('App\Models\Book');
    }
}
