<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consola extends Model
{
    use HasFactory;

    public function videojuegos() {
        return $this->belongsToMany(
            Videojuego::class,
            'consolas_videojuegos',
            //  Primero va consola_id porque estamos en el modelo Consola
            'consola_id',
            //  Luego va videojuego_id que es el id del modelo con el que se relaciona
            'videojuego_id'
        );
    }
}
