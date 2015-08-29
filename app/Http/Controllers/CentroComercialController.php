<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\CentroComercial;
use Illuminate\Routing\Route;

class CentroComercialController extends Controller
{

    public function __construct() 
    {
        $this->beforeFilter('@find', ['only' => ['show','edit','update','destoy']]);
    }

    public function find(Route $route) 
    {
        $this->centro_comercial = CentroComercial::find($route->getParameter('centro-comercial'));
    }

    public function index()
    {
        $centros_comerciales = CentroComercial::all();

        // retornamos los centros comerciales a una vista
        return $centros_comerciales;
    }

    public function create()
    {
        // retornamos la vista para crear el centro comercial
    }

    public function store(Request $request)
    {
        CentroComercial::create($request->all());

        // retornamos respuesta de confirmación o de fallo
    }

    public function show()
    {
        //  retornamos centro comercial a mostrar

        return $this->centro_comercial;
    }

    public function edit()
    {
        // retornamos centro comercial a editar
        
        return $this->centro_comercial;
    }

    public function update(Request $request)
    {
        $this->centro_comercial->fill($request->all());

        $this->centro_comercial->save();

        // retornamos respuesta de confirmacion o fallo
    }

    public function destroy()
    {
        $this->centro_comercial->delete();

        // retornamos respuesta de confirmacion o fallo
    }
}
