<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacto extends Model
{
    use HasFactory;

    //Definimos nuestro modelo:
    protected $table='contactos';   //Especificamos el nombre de la tabla en la base de datos a la que esta asociado este modelo
    protected $primary='id';    //Establecemos el nombre de la columna que actua como clave primaria en la tabla
    protected $filltable=['nombre','telefono','direccion']; //Se define a traves de un array el nombre de las columnas de la tabla
    protected $guarded=[];  //Esta propiedad indica que colmnas no se pueden asignar masivamente 
    public $timestamps=false;   //Con esta linea se especifica si el modelo debe tener columnas de "create_ad" y "update_ad" que registren automaticamente la fecha de creacion y actualizacion de los registros. En este caso el false indica que el modelo no incluira estas columnas en la tabla

}
