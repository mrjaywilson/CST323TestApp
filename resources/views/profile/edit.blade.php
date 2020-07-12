@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card">
                    <div class="card-header"><h3>{{ __('Edit Profile') }}</h3></div>

                    <div class="card-body">

                        <div class="row" style="padding-left: 30px;">

                            <form method="POST" action="{{ route('save-profile') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="street_address" class="col-sm-3 col-form-label text-sm-right">{{ __('Street') }}</label>

                                    <div class="col-md-9">
                                        <input id="street_address" type="text" class="form-control" name="street_address" value="{{ old('street_address', $profile->street_address) }}" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="city" class="col-sm-3 col-form-label text-sm-right">{{ __('City') }}</label>

                                    <div class="col-md-9">
                                        <input id="city" type="text" class="form-control" name="city" value="{{ old('city', $profile->city) }}" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="state" class="col-sm-3 col-form-label text-sm-right">{{ __('State') }}</label>

                                    <div class="col-md-9">
                                        <input id="state" type="text" class="form-control" name="state" value="{{ old('state', $profile->state) }}" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="zipcode" class="col-sm-3 col-form-label text-sm-right">{{ __('Zip') }}</label>

                                    <div class="col-md-9">
                                        <input id="zipcode" type="text" class="form-control" name="zipcode" value="{{ old('street_address', $profile->zipcode) }}" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10 offset-md-4">
                                        <button type="submit" class="btn btn-outline-dark">
                                            {{ __('Save Profile Info') }}
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
