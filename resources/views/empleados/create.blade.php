@extends('partials.layout')

@section('middle-page')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>@lang('Creación de Empleados')</h5>
            </div>
            <div class="card-body">
                <form action="{{route('empleados.store')}}" method="post" id="create_user">
                    @csrf()
                    @method('POST')
                    <div class="form-group row col-sm-10">
                        <label for="nombre" class="col-sm-2 col-form-label">@lang('Nombre Completo')</label>
                        <div class="col-sm-10">
                            <input type="text"
                                   class="form-control"
                                   id="nombre"
                                   name="nombre"
                                   placeholder="{{'Nombre Completo'}}"
                                    value="{{old('nombre')}}">
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
                                   value="{{old('email')}}">
                        </div>
                    </div>
                    <div class="form-group row col-sm-10">
                    <label for="sexo" class="col-2 col-form-label">@lang('Gender')</label>
                        <div class="form-check col-sm-10">
                            <div class="form-check col-sm-10">
                                <input class="form-check-input" type="radio" id="sexo" name="sexo" value=0>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    @lang('Mujer')
                                </label>
                            </div>
                            <div class="form-check col-sm-10">
                                <input class="form-check-input" type="radio" id="sexo" name="sexo" value=1>
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
                                    <option value="{{old('area', $area->id)}}">{{$area->name}}</option>
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
                                   ></textarea>
                        </div>
                    </div>

                    <div class="form-group row col-sm-10">
                        <label for="gender" class="col-2 col-form-label">@lang('Boletín')</label>
                        <div class="form-check col-sm-10">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="boletin" name="boletin">
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
                                        > {{ $rol->name }}
                                    </label>
                                </div>

                            @endforeach
                        </div>
                    </div>

                </form>

                <div class="d-grid gap-2 col-4 mx-auto">
                    <button class="btn btn-primary" type="submit" form="create_user"> @lang('Crear Empleado')</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function (){

            $('#create_user').validate({
                rules:{
                    nombre:{
                        required: true,
                        maxlength: 124
                    },
                    email:{
                        required: true,
                        maxlength: 124,
                        email: true
                    },
                    boletin:{
                        required: true,
                    },
                    sexo:{
                        required: true,
                    },
                    area_id:{
                        required: true,
                    },
                    descripcion:{
                        required: true,
                    },
                    roles:{
                        required: true,
                    },
                },
            });
        })
    </script>
@endsection
