<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cawnavisita
 *
 * @property $id
 * @property $tipo_documento
 * @property $documento
 * @property $visitante
 * @property $telefono
 * @property $institucion_del_visitante
 * @property $area_destino
 * @property $persona_a_contactar
 * @property $razon_de_visita
 * @property $hora_de_ingreso
 * @property $hora_de_salida
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cawnavisita extends Model
{
    use SoftDeletes;

    static $rules = [
		'tipo_documento' => 'required',
		'documento' => 'required',
		'visitante' => 'required',
		'telefono' => 'required',
		'institucion_del_visitante' => 'required',
		'area_destino' => 'required',
		'persona_a_contactar' => 'required',
		'razon_de_visita' => 'required',
		'hora_de_ingreso' => 'required',
		'hora_de_salida' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo_documento','documento','visitante','telefono','institucion_del_visitante','area_destino','persona_a_contactar','razon_de_visita','hora_de_ingreso','hora_de_salida'];



}
