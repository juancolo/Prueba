@extends('partials.layout')

@section('middle-page')
    <body>
    <div class="container">
        <div class="card-header">
            <h5>@lang('Tabla de Empleados')</h5>
        </div>
        <div class="card-body">
            <div class="column container">
                <!-- Button trigger modal -->
                <div class="form-group row">
                    <div class="column">
                        <a type="button"
                           href="{{route('empleados.create')}}"
                           class="btn btn-secondary"><i class="fas fa-user-plus">@lang(' Crear')</i>
                        </a>
                    </div>
                </div>
                <span>
                <div class="container">
                    <table class="table table-bordered table-dark">
                        <table class="table table-bordered align-middle">
                            <thead class="table-dark">
                            <tr>
                                <th><i class="fas fa-user"></i></i>@lang(' Nombre')</th>
                                <th><i class="fas fa-at"></i>@lang(' Email')</th>
                                <th><i class="fas fa-venus-mars"></i>@lang(' Sexo')</th>
                                <th><i class="fas fa-warehouse"></i>@lang(' Área')</th>
                                <th><i class="far fa-newspaper"></i>@lang(' Boletín')</th>
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
                                <td align="center">
                                    <a type="button" class="btn btn-primary" href="{{route('empleados.edit', compact('empleado'))}}">
                                        <i class="fas fa-user-edit"></i></a></td>
                                <td align="center">
                                    <form action="{{route('empleados.destroy', $empleado)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('¿Seguro desea elminar a {{$empleado->nombre}} ?')">
                                           <i class="fas fa-trash-alt"></i>
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
