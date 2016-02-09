@extends('layouts.main')

@section('content')

  <h1> Category Admin panel </h1> <hr>
 

 
 <a href="{{url('/categories/create')}}" class="btn btn-primary"> Create Category </a>

	
 <hr>

<table class="table table-striped table-bordered table-hover">
   
   <thead>
     <tr class="br-info">
	 <th> Id <hr></th> 
	 <th> Name:<hr></th> 
	 
     <th colspan="3"> Actions <hr></th>
	 </tr>
   </thead>   

   
   
   <tbody>
     @foreach ($categories as $category)
         <tr>
             <td>{{ $category->id  }}  </td>
             <td>{{ $category->name }}  </td>
              
             
             <td><a href="{{url('categories',$category->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('categories.edit',$category->id)}}" class="btn btn-primary">Update</a></td> 
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['categories.destroy', $category->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

     </tbody>

 </table>
@endsection
   