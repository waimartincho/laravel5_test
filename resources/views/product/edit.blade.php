@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Product Form</div>

                {!! Form::model($data,['route' => ['product.update',$data->id],'method' => 'patch','files' => true]) !!}
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
                        <br>
                        @if ( $data->photo != '')
                            <img src="{{asset('files/products/'.$data->photo) }}" width="50px" height="50px"></img>
                        @else
                            {{ $data->photo }} 
                        @endif
                        
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
                    {!! Form::submit('Submit',['class'=>'btn btn-primary','value'=>'submit']); !!}

                    {!! Form::submit('Cancel',['route'=>'product.index','class'=>'btn btn-danger pull-right','value'=>'cancel']); !!}  
                </div>
                {!! Form::close() !!}
            </div> <!-- panel-default -->
        </div>
    </div>
</div>
@endsection
