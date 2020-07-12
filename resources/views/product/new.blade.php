@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card">
                    <div class="card-header"><h3>{{ __('New Product') }}</h3></div>

                    <div class="card-body">

                        <div class="row" style="padding-left: 30px;">

                            <form method="POST" action="{{ route('create-product') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label text-sm-right">{{ __('Name') }}</label>

                                    <div class="col-md-8">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="description" class="col-sm-4 col-form-label text-sm-right">{{ __('Description') }}</label>

                                    <div class="col-md-8">
                                        <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="value" class="col-sm-4 col-form-label text-sm-right">{{ __('Value') }}</label>

                                    <div class="col-md-8">
                                        <input id="value" type="text" class="form-control" name="value" value="{{ old('value') }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10 offset-md-4">
                                        <button type="submit" class="btn btn-outline-dark">
                                            {{ __('Add New Product') }}
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


@endsection
