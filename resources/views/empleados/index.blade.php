@extends('partials.layout')

@section('middle-page')
    <body>

    <div class="container">
        <div class="card-header">
            @lang('Tabla de empleados')
        </div>
        <div class="card-body">
            <div class="column container">
                <!-- Button trigger modal -->
                <div class="form-group row">
                    <div class="column">
                        <a      type="button"
                                href="{{route('empleados.create')}}"
                                class="btn btn-secondary">
                            @lang('Crear empleado')
                        </a>
                    </div>
                </div>
                <div class="container">
                    <table class="table table-bordered table-dark">
                        <table class="table table-bordered align-middle">
                            <thead class="table-dark">
                            <tr>
                                <th>{{"Nombre"}}</th>
                                <th>{{"Email"}}</th>
                                <th>{{"Sexo"}}</th>
                                <th>{{"Área"}}</th>
                                <th>{{"Boletín"}}</th>
                                <th>{{"Modificar"}}</th>
                                <th>{{"Eliminar"}}</th>
                            </tr>
                            </thead>
                            @foreach($empleados as $empleado)
                                <tbody>
                                </tr>
                                <td>{{$empleado->nombre}}</td>
                                <td>{{$empleado->email}}</td>
                                <td>{{\App\Constants\GenderConstants::GENDERS[$empleado->sexo]}}</td>
                                <td>{{$empleado->area->name}}</td>
                                <td>{{\App\Constants\BoletinStatus::BOLETIN_STATUSES[$empleado->boletin]}}</td>
                                <td><a type="button" class="btn btn-primary" href="{{route('empleados.edit', compact('empleado'))}}"> @lang('Editar')</a> </td>
                                <td>
                                    <form action="{{route('empleados.destroy', $empleado)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('¿Seguro desea elminar a {{$empleado->nombre}} ?')">
                                            @lang('Eliminar')
                                        </button>
                                    </form>
                                </td>

                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </table>
                </div>
                @include('partials.__alert')
            </div>
        </div>
    </div>
    @yield('script')
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
@endsection
