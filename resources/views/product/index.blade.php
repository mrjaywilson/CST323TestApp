@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="font-size: large;"><strong>{{ __($product->name) }} - {{ __($product->value) }}</strong></div>

                    <div class="card-body">
                        <div class="row" style="padding-left: 30px;">
                            {{$product->description}}
                        </div>
                        <hr />
                        <div class="row justify-content-center">
                            <div class="col">
                                <a class="btn btn-outline-dark" href="{{route('edit-product', ['id' => $product->id])}}">Edit</a>
                            </div>
                            <div class="col">
                                <a class="btn btn-outline-dark" href="{{route('delete-product', ['id' => $product->id])}}">Delete</a>
                            </div>
                            <div class="col"><a class="btn btn-outline-dark" href="{{route('product-list')}}">Back To List</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
