<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Casts\Attribute;
class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected function casts(): array { // Lo que hago es transformar el campo published_at a un datetime (cuando lo creo yo manualmente se guarda como string y no puedo formatear la fecha)
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean',
        ];
    }

    protected function title(): Attribute
    {
        return Attribute::make(
            set: function($value){ // Metodo SET es un mutador (muta el valor antes de almacenarlo en las tablas)
                return strtolower($value);
            },
            get: function($value) { // Metodo GET es un accesor (modifica el valor cuando accedemos a el registro)
                return ucfirst($value);
            }
        );
    }
}
