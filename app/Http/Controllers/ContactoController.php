<?php

namespace App\Http\Controllers;

use App\Models\contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /*
     * La funcion index se encarga de obtener todos los contactos de la base de datos utilizando el modelo "contacto" y pasarlos a la
     * vista "contacto.index" para mostrarlos en la interfaz de usuario
     */
    public function index()
    {
        $contactos=contacto::all(); 
        /*
         * Aqui se hace una consulta a la bd utilizando el modelo "contacto". El modelo all() se utiliza para obtener todos los registros
         * de la tabla asociada al modelo "contacto" y se asigna a la variable "$contactos"
         */
        return view('contacto.index',compact('contactos'));
        /*
        * Aqui retornamos una vista llamada "contacto.index", y pasa la variable "$contactos" a la vista como un parametro llamado
        * 'contactos'. view() se usa para cargar la vista y el metodo compact() se utiliza para cargar un array asociado que contiene el
        * nombre de la variable y su valor
        */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    /*
     *La funcion store la uilizamos para guardar datos
     */
    public function store(Request $request)
    {
        $contactos = new contacto;
        $contactos->nombre=$request->input('nombre');
        $contactos->telefono=$request->input('telefono');
        $contactos->direccion=$request->input('direccion');
        $contactos->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(contacto $contacto)
    {
        $contactos=contacto::find($id);
        return view('contacto.modal-info',compact('contactos'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    /**
     * La siguiente funcion la utilizamos para llamar a un dato de nuestra base de datos a traves de su id, para luego retornar
     * a la vista llamada 'contacto.modal-info' con los datos del contacto para su edicion
     */
    public function edit($id)//A traves del nombre de la funcion , le establecemos un parametro, que es el id del contacto que de va a editar
    {
        $contactos=contacto::find($id);//Utilizamos el metodo find del modelo contacto para buscar el contacto que en bd utilizando su ID
        return view('contacto.modal-info',compact('contactos'));//Regresamos a nuestra vista, pero con los datos del ID seleccionado
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $contactos=contacto::find($id);
        $contactos->nombre=$request->input('nombre');
        $contactos->telefono=$request->input('telefono');
        $contactos->direccion=$request->input('direccion');
        $contactos->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contactos=contacto::find($id);//Utilizamos el metodo find del modelo contacto para buscar el contacto que en bd utilizando su ID
        $contactos->delete();
        return redirect()->back();
        //
    }
}
