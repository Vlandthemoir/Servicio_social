<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    use HasFactory;

    protected $fillable = [
		'titulo',
		'imagen',
		'fecha',
    'autor',
    'descripcion',
	];

	protected $table = 'galeria';
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
