@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Product List') }}</div>

                    <div class="card-body">

                        @if($products->isEmpty())
                            <div>
                                No Products!
                            </div>
                        @else
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Value</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td><a href="{{route('view-product', ['id' => $product->id])}}">{{$product->name}}</a></td>
                                        <td>{{$product->value}}</td>
                                        <td><a class="btn btn-outline-dark" href="{{route('edit-product', ['id' => $product->id])}}">Edit</a></td>
                                        <td><a class="btn btn-outline-dark" href="{{route('delete-product', ['id' => $product->id])}}">Delete</a></td>
                                    </tr>
                                    <div>
                                    </div>
                                @endforeach
                                </tbody>
                            </table>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
