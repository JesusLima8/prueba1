<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;

    // Si necesitas especificar la tabla o los campos asignables, puedes hacerlo aquí
    protected $table = 'sensores'; // Asegúrate de que el nombre de la tabla sea correcto
    protected $fillable = ['nombre', 'tipo', 'ubicacion']; // Ajusta los atributos según tu esquema de base de datos
}
