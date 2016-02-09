@extends('layouts.main')

@section('content')

<div class="login-group">

<form method="POST" action="/auth/login">
{!! csrf_field() !!}
<div class="form-group">
  <label for="email"> Email: </label>
  
  <input type="email" name="email" id="email" class="form-control" value="{{ old('email')}}">
  </div>
  
  <div class="form-group">
    <label for="password"> Password: </label>
	<input type="password" name="password" id="password" class="form-control">
	</div>
	
	<div class="form-control">
	 <input type="checkbox" name="remenber"> Remember me 
	  </div>
	  
	  <div class="form-group">
	   <button type="submit" class="btn btn-default"> Login </button>
	   </div>
	   </form>

</div>

@stop