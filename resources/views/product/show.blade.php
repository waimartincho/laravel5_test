@extends('layouts.app')
@section('content')

    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    @if (Route::has('login'))
                        <div class="top-right links">
                            @if (Auth::check())
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ url('/login') }}">Login</a>
                                <a href="{{ url('/register') }}">Register</a>
                            @endif
                        </div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <a href="{{ url('product/') }}" class="btn btn-primary pull-right" style="margin-top:4px;margin-right:5px;">List</a>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Detail Product List
                        </div>
                        <div class="panel-body">
                            <title>Product {{ $products->id }}</title>
                            <h1>Product {{ $products->title }}</h1>
                            <ul>
                              <li>Description: {{ $products->description }}</li>
                              <li>Price: {{ $products->price }}</li>
                            </ul>
                        </div>
                    </div> <!-- panel-default -->
                </div>
            </div>
        </div>
    </div>

@endsection
