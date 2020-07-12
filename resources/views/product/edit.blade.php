@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card">
                    <div class="card-header"><h3>{{ __('Edit Product') }}</h3></div>

                    <div class="card-body">

                        <div class="row" style="padding-left: 30px;">

                            <form method="POST" action="{{ route('update-product') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-sm-4 col-form-label text-sm-right">{{ __('Name') }}</label>

                                    <div class="col-md-8">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name', $product->name) }}" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="description" class="col-sm-4 col-form-label text-sm-right">{{ __('Description') }}</label>

                                    <div class="col-md-8">
                                        <textarea id="description" type="text" class="form-control" name="description">{{ old('description', $product->description) }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="value" class="col-sm-4 col-form-label text-sm-right">{{ __('Value') }}</label>

                                    <div class="col-md-8">
                                        <input id="value" type="text" class="form-control" name="value" value="{{ old('value', $product->value) }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-8">
                                        <input id="id" type="hidden" class="form-control" name="id" value="{{ old('value', $product->id) }}">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <div class="col-md-5">
                                        <button type="submit" class="btn btn-outline-dark">
                                            {{ __('Update') }}
                                        </button>
                                    </div>
                                    <div class="col-md-5">
                                        <a class="btn btn-outline-dark" href="{{route('product-list')}}">
                                            {{ __('Cancel') }}
                                        </a>
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
