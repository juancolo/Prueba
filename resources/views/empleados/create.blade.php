@extends('partials.layout')

@section('middle-page')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-group row col-sm-10">
                        <label for="full_name" class="col-sm-2 col-form-label">@lang('Full Name')</label>
                        <div class="col-sm-10">
                            <input type="text"
                                   class="form-control"
                                   id="full_name"
                                   name="full_name"
                                   placeholder="{{'Full Name'}}"
                                    value="{{old('full_name')}}">
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
                    <label for="gender" class="col-2 col-form-label">@lang('Gender')</label>
                        <div class="form-check row col-sm-10">
                            <div class="form-check row col-sm-10">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Default radio
                                </label>
                            </div>
                            <div class="form-check row col-sm-10">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Default radio
                                </label>
                            </div>
                        </div>
                    </div>
                </form>

                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
@endsection
