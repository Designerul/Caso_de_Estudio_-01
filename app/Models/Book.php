<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'update_at'];

    /* Relacion uno a muchso inversa de autor con libros */
    public function author(){
        return $this->belongsTo('App\Models\Author');
    }

    /* Relacion uno a muchos inversa de categoria con libros */
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}
