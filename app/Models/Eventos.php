<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    use HasFactory;
    protected $fillable = [
		'nombre',
		'imagen',
		'fecha',
    'lugar',
    'hora_inicio',
    'hora_fin',
    'descripcion',
	];
  protected $table = 'eventos';
	   /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = 'fecha_creado';
     /**
     * The name of the "updated at" column.
     *
     * @var string
     */
		 const UPDATED_AT = 'fecha_modificado';
}
