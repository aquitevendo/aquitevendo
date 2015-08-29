<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Establecimiento;
use Illuminate\Routing\Route;

class EstablecimientoController extends Controller
{

    public function __construct() 
    {
        $this->beforeFilter('@find', ['only' => ['show','edit','update','destoy']]);
    }

    public function find(Route $route) 
    {
        $this->establecimiento = Establecimiento::find($route->getParameter('establecimiento'));
    }
    
    public function index()
    {
        $establecimientos = Establecimiento::all();

        // retornamos establecimientos a la vista
        return $establecimientos;
    }

    public function create()
    {
        // retornamos la vista para crear nuevo establecimiento
    }

    public function store(Request $request)
    {
        Establecimiento::create($return->all());

        //  retornamos respuesta de confirmacion o de fallo
    }

    public function show()
    {
        //  retornamos establecimiento a mostrar

        return $this->establecimiento;
    }

    public function edit()
    {
        //  retornamos establecimiento a editar

        return $this->establecimiento;
    }

    public function update(Request $request)
    {
        $this->establecimiento->fill($request->all());

        $this->establecimiento->save();

        //  retornamos respuesta de confirmacion o fallo
    }

    public function destroy()
    {
        $this->establecimiento->delete();

        // retornamos respuesta de confirmacion o fallo
    }
}
