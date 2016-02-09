@extends('layouts.main')


@section('content')

<hr>




<h1>Create category</h1>
    {!! Form::open(['url' => 'categories']) !!}
    

    <div class="form-group">
        {!! Form::label('Image', 'Image:') !!}
        {!! Form::file('image',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}





@stop
