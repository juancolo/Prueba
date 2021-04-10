@extends('partials.layout')

@section('middle-page')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <form action="{{route('empleados.update', $empleado)}}" method="post" id="create_user">
                    @csrf()
                    @method('PUT')
                    <div class="form-group row col-sm-10">
                        <label for="nombre" class="col-sm-2 col-form-label">@lang('Nombre Completo')</label>
                        <div class="col-sm-10">
                            <input type="text"
                                   class="form-control"
                                   id="nombre"
                                   name="nombre"
                                   placeholder="{{'Nombre Completo'}}"
                                   value="{{old('nombre', $empleado->nombre)}}">
                        </div>
                    </div>
                    <div class="form-group row col-sm-10">
                        <label for="email" class="col-sm-2 col-form-label">@lang('Email')</label>
                        <div class="col-sm-10">
                            <input type="text"
                                   class="form-control"
                                   id="email"
                                   name="email"
                                   placeholder="{{'Email'}}"
                                   value="{{old('email', $empleado->email)}}">
                        </div>
                    </div>
                    <div class="form-group row col-sm-10">
                        <label for="sexo" class="col-2 col-form-label">@lang('Gender')</label>
                        <div class="form-check col-sm-10">
                            <div class="form-check col-sm-10">
                                <input class="form-check-input" type="radio" id="sexo" name="sexo" value=0
                                       @if($empleado->sexo == 0)
                                       checked
                                    @endif
                                >
                                <label class="form-check-label" for="flexRadioDefault1">
                                    @lang('Mujer')
                                </label>
                            </div>
                            <div class="form-check col-sm-10">
                                <input class="form-check-input" type="radio" id="sexo" name="sexo" value=1
                                       @if($empleado->sexo == 1)
                                       checked
                                    @endif
                                >
                                <label class="form-check-label" for="flexRadioDefault1">
                                    @lang('Hombre')
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row col-sm-10">
                        <label for="area_id" class="col-2 col-form-label">@lang('Area')</label>
                        <div class="form-check col-sm-10">
                            <select class="form-control" name="area_id" id="area_id">
                                <option value="" selected>{{""}}</option>
                                @foreach($areas as $area)
                                    <option value="{{old('area', $area->id)}}"
                                            @if($empleado->area->id == $area->id)
                                            selected
                                        @endif
                                    >{{$area->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row col-sm-10">
                        <label for="descripcion" class="col-sm-2 col-form-label">@lang('Descripción')</label>
                        <div class="col-sm-10">
                            <textarea
                                class="form-control"
                                id="descripcion"
                                name="descripcion"
                                placeholder="{{'Descripción'}}"
                            >{{$empleado->descripcion}}</textarea>
                        </div>
                    </div>

                    <div class="form-group row col-sm-10">
                        <label for="gender" class="col-2 col-form-label">@lang('Boletín')</label>
                        <div class="form-check col-sm-10">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="boletin" name="boletin"
                                       @if($empleado->boletin == 1)
                                       checked
                                    @endif()>
                                <label class="form-check-label" for="boletin">
                                    @lang('Recibir boletín informativo')
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row col-sm-10">
                        <label for="roles" class="col-2 col-form-label">@lang('Roles')</label>
                        <div class="form-check col-sm-10">

                            @foreach($roles as $rol)
                                <div class="col-sm-10">
                                    <label class="checkbox-inline " for="roles[]">
                                        <input name="roles[]" type="checkbox" value="{{ $rol->id }}"
                                        @if(count($empleado->roles)> 0)
                                            @foreach($empleado->roles->all() as $empleado_roles => $id)
                                                @if($id['id'] == $rol->id)
                                                checked
                                                @endif
                                            @endforeach
                                        @endif
                                        > {{ $rol->name }}
                                    </label>
                                </div>

                            @endforeach
                        </div>
                    </div>

                </form>

                <div class="d-grid gap-2 col-4 mx-auto">
                    <button class="btn btn-primary" type="submit"
                            form="create_user"> @lang('Actualizar Empleado')</button>
                </div>
            </div>
        </div>
    </div>
@endsection
