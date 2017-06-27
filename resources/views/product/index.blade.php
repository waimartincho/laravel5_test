@extends('layouts.app')
@section('content')
<!-- <!doctype html>
<html lang="{{ config('app.locale') }}"> -->
    <!-- <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> -->

        <!-- Styles -->
        <!--style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style-->
    <!-- </head>
    <body> -->
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

                        <br>

                        @if(Session::has('flash_message'))
                            <div class="alert alert-success">
                                {{ Session::get('flash_message') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Product List
                                <a href="{{ url('product/create') }}" class="btn btn-primary pull-right">Add</a>
                            </div>
                            <div class="clear-div"></div>
                            <div class="panel-body">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Photo</th>
                                        <th>Use For</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th colspan="2">Actions</th>
                                    </thead>
                                    <tbody>
                                        @foreach($products as $data)
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->title }}</td>
                                            <td>{{ $data->description }}</td>
                                            <td>{{ $data->price }}</td>
                                            <td>
                                                @if ( $data->photo != '')
                                                <img src="files/products/{{ $data->photo }}" width="50px" height="50px"></img>
                                                @else
                                                
                                                @endif
                                            </td>
                                            <td>
                                            @if ( $data->home_office === 1)
                                                Home
                                            @else
                                                -
                                            @endif
                                            </td>
                                            <td>
                                            @if ( $data->type === '1' )
                                                Kitchen Product
                                            @else
                                                Funiture Product
                                            @endif
                                            </td>
                                            <td>
                                            @if ( $data->status === 1 )
                                                Active
                                            @else
                                                Disable
                                            @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('product.edit', $data->id) }}" class="btn btn-primary">Edit</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('product.delete', $data->id) }}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="pull-right">
                                    {!!$products->links();!!}
                                </div>
                            </div>
                        </div> <!-- panel-default -->
                    </div>
                </div>
            </div>
        </div>
        
<!--     </body>
</html> -->
@endsection
