<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videojuego extends Model
{
    use HasFactory;

    public function compania() {
        return $this->belongsTo(Compania::class);
    }
    //  pivot table
    public function consolas() {
        return $this->belongsToMany(
            Consola::class,
            'consolas_videojuegos',
            //  Primero va videojuego_id porque estamos en el modelo Videojuego
            'videojuego_id',
            //  Luego va consola_id que es el id del modelo con el que se relaciona
            'consola_id'
        );
    }
}
