<?php

namespace App\Http\Controllers;

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
            'empleados' => Empleados::select(['nombre', 'email', 'sexo', 'area_id', 'boletin' ])->get()
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

    public function store(Request $request)
    {
        dd($request->has('boletin'));
        Empleados::create($request->all());
        return redirect()->route('empleados.index');
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
