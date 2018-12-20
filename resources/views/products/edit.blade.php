@extends('layout')

@section('content')

<hl class="item">Edit Test </h1>

<form method="POST" action="/tests/{{ $tests->id}}" style="margin-bottom:lem;">
 {{ method_field ('PATCH')}}
 {{ csrf_field ()}}

  <div class ="field">
     <label class ="label" for="title">Title</label>

     <div class="control">
     <input type="text" class="input" name="title" placeholder="Title" value="{{ $products->title}}">
     </div>

 </div>

  <div class="field">
  	<label class="label" for="description">Description</label>
  	<div class="control">   
  		<textarea name="description" class="textarea"> {{ $products ->description}} </textarea>
  		
  	</div>
  </div>

  <div class ="field">
     <label class ="label" for="price">Price</label>

     <div class="control">
     <input type="text" class="input" name="price" placeholder="Title" value="{{ $products->price}}">
     </div>

 </div>
 <div class ="field">
     <label class ="label" for="imagePath">Image</label>

     <div class="control">
     <input type="text" class="input" name="imagePath" placeholder="imagePaths" value="{{ $products->imagePath}}">
     </div>

 </div>
   <div class="field">
   	<div class="control">
   		<button type="submit" class="button is-link">Update Test</button>
 
   	</div>
   </div>
</form>

<form method="POST" action="/tests/{{$tests->id}}">
	{{ method_field ('DELETE')}}
	{{ csrf_field()}}

	<div class="field">
		<div class="control">
			<button type="submit" class="button">Delete Test </button>
			
		</div>
		
	</div>
</form>

@endsection