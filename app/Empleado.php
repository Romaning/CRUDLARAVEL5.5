<?php

namespace RomSys;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable=['ci',
						'nombres',
						'apellidos',
						'fechanac',
						'genero',
						'direccion',
						'celular',
						'cargo'];
	public $timestamps=false;
}
