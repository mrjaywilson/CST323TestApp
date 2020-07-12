@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card">
                    <div class="card-header"><h3>{{ __('My Profile') }}</h3></div>

                    <div class="card-body">

                        <div class="row" style="padding-left: 25px">
                            Name: {{Auth::user()->name}}
                        </div>
                        <div class="row" style="padding-left: 25px">
                            Email: {{ Auth::user()->email }}
                        </div>

                        <hr />

                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="row" style="padding-left: 25px">
                                    Street: {{$profile->street_address}}
                                </div>
                                <div class="row" style="padding-left: 25px">
                                    City: {{$profile->city}}
                                </div>
                                <div class="row" style="padding-left: 25px">
                                    State: {{$profile->state}}
                                </div>
                                <div class="row" style="padding-left: 25px">
                                    Zip: {{$profile->zipcode}}
                                </div>
                                <div>
                                    <a class="btn btn-outline-dark" href="{{ route('edit-profile') }}">Edit Profile Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


@endsection
