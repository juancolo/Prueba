<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmpleadosRequest;
use App\Models\Area;
use App\Models\Empleados;
use App\Models\Roles;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): View
    {
        return view('empleados.index')->with([
            'empleados' => Empleados::with('area')
                ->select(['nombre', 'email', 'sexo', 'area_id', 'boletin' ])->get()
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function create(): View
    {
        return view('empleados.create')
            ->with([
                'areas' => Area::select(['id', 'name'])->get(),
                'roles' => Roles::select(['id', 'name'])->get()
            ]);
    }

    public function store(CreateEmpleadosRequest $request)
    {
        //dd($request->all());
        $empleado = Empleados::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'sexo' => $request->sexo,
            'area_id' => $request->area_id,
            'descripcion' => $request->descripcion,
            'boletin' => $request->has('boletin') ? 1: 0,
        ]);

        $empleado->roles()->attach($request->roles);
        $empleado->save();

        return redirect()->route('empleados.index')
            ->with('success', 'el empleado '. $empleado->nombre.' ha sido creado');
    }

    public function update()
    {
        return view('empleados.create');
    }

    public function delete()
    {
        return view('empleados.create');
    }
}
