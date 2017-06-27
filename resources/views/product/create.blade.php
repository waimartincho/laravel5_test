@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create Product Form
                    <a href="{{ url('product/') }}" class="btn btn-primary pull-right">Back</a>
                </div>

                {!! Form::open([ 'route' => 'product.store','method' => 'post','files' => true]) !!}

                <div class="panel-body">
                    <div class="form-group">
                        {!! Form::label('Title', 'Title', ['class' => 'control-label']); !!}
                        {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Product Title']); !!}
                    </div>
                    <div class="form-group"> 
                        {!! Form::select('type', ['1' => 'Kitchen', '2' => 'Funiture'], null, ['class'=>'form-control','placeholder' => 'Select Product Type']); !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Description', 'Description', ['class' => 'control-label']); !!}
                        {!! Form::textarea('description',null,['class'=>'form-control','rows'=>'3','placeholder'=>'Product Description...']); !!}
                    </div> 
                    <div class="form-group">
                        {!! Form::label('Image Upload', 'Image Upload', ['class' => 'control-label']); !!}
                        {!! Form::file('photo',['class'=>'form-control-file']); !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Price', 'Price', ['class' => 'control-label']); !!}
                        {!! Form::text('price',null,['class'=>'form-control','placeholder'=>'Product Price']); !!}
                    </div>
                    <div class="form-group">
                        {!! Form::checkbox('home_office'); !!}
                        {!! Form::label('For Home', 'For Home', ['class' => 'control-label']); !!}
                    </div>

                    <div class="form-group">
                        {!! Form::radio('status', 1, true,['class' => 'control-label']) !!}
                        {!! Form::label('Active', 'Active', ['class' => 'control-label']); !!}

                        {!! Form::radio('status', 0, false,['class' => 'control-label']) !!}
                        {!! Form::label('Disable', 'Disable', ['class' => 'control-label']); !!}
                    </div>
                    {!! Form::submit('Submit',['class'=>'btn btn-primary']); !!} 
                </div>
                {!! Form::close() !!}
            </div> <!-- panel-default -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
