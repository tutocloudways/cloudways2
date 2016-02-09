@extends('layouts.main')

@section('content')

 <h1>Category Show</h1>

  

<form class="form-horizontal">
        
        
        <div class="form-group">
            <label for="id" class="col-sm-2 control-label">Id</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="id" placeholder={{$category->id}} readonly>
            </div>
        </div>
        

        <!--<div class="form-group">
            <label for="author" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder={{$category->name}} readonly>
            </div>
        </div>
        
        -->
     
        <div class="form-group">
            <label for="image" class="col-sm-2 control-label">Cover</label>
            <div class="col-sm-10">
                <img src="{{asset('img/'.$category->name.'.jpg')}}" height="180" width="150" class="img-rounded">
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('categories')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>




@stop