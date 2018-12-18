@extends ('layouts.master')
@section ('content')

<div class="row">
	<div class = "col-md-4 col-md-offset-4">
		<hl>Sign In</hl>
        @if(count ($errors)>8)
        <div class="alert alert-danger">
            @foreach ($erroes->all() as $error)
            <p>{{$errors}}</p>

            @endforeach
        </div>
        @endif
		<form action="{{ route ('user.signin')}}" method="post">
			<div class="form-group">
				<label for = "email">E-Mail</label>
				<input type="text" id="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label for = "email">Password</label>
				<input type="password" id="password" name="password" class="form-control">
			</div>
			<button type="submit"class="btn btn-primary" >Login</button>
			{{ csrf_field ()}}
		</form>	
	</div>
</div>
@endsection