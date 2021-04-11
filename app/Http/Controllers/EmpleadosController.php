<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Roles;
use App\Models\Empleados;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use App\Http\Requests\UpdateEmpleadosRequest;
use App\Http\Requests\CreateEmpleadosRequest;
use Illuminate\Contracts\Foundation\Application;

class EmpleadosController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): View
    {
        return view('empleados.index')->with([
            'empleados' => Empleados::with('area')
                ->select(['nombre', 'email', 'sexo', 'area_id', 'boletin', 'id' ])->get()
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

    /**
     * @param CreateEmpleadosRequest $request
     * @return RedirectResponse
     */
    public function store(CreateEmpleadosRequest $request): RedirectResponse
    {
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

    public function edit(Empleados $empleado)
    {
        return view('empleados.edit')
            ->with([
                'empleado' => $empleado->load('roles'),
                'areas' => Area::select(['id', 'name'])->get(),
                'roles' => Roles::select(['id', 'name'])->get()
            ]);
    }

    /**
     * @param Empleados $empleado
     * @param UpdateEmpleadosRequest $request
     * @return RedirectResponse
     */
    public function update(Empleados $empleado, UpdateEmpleadosRequest $request): RedirectResponse
    {
        $empleado->update([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'sexo' => $request->sexo,
            'area_id' => $request->area_id,
            'descripcion' => $request->descripcion,
            'boletin' => $request->has('boletin') ? 1: 0,
        ]);
        $empleado->roles()->sync($request->roles);
        return redirect()->route('empleados.index')
        ->with('success', 'el empleado '. $empleado->nombre.' ha actualizado correctamente');
    }

    /**
     * @param Empleados $empleado
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Empleados $empleado): RedirectResponse
    {
        $empleado->delete();
        return redirect()->route('empleados.index')
            ->with('success', 'Se ha eliminado correctamente a '.$empleado->nombre );
    }
}
