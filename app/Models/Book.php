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

    /* Relacion uno a muchos inversa de ecuadernacion con libros */
    public function bookbinding(){
        return $this->belongsTo('App\Models\Bookbinding');
    }

    /* Relacion uno a muchos inversa de editorial con libros */
    public function editorial(){
        return $this->belongsTo('App\Models\Editorial');
    }

    /* Relacion uno a muchos inversa de tipo de libros con libros */
    public function type(){
        return $this->belongsTo('App\Models\Type');
    }

    /* Relacion uno a uno inversa de numero de ejemplares con libros */
    public function number(){
        return $this->belongsTo('App\Models\Number');
    }

    /* Relacion uno a muchos de compras con libro */
    public function buy(){
        return $this->hasOne('App\Models\Buy');
    }
}
