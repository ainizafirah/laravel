@extends ('layouts.master')
@section ('content')

<div class="row">
	<div class = "col-md-4 col-md-offset-4">
		<hl>Sign Up</hl>
        @if(count ($errors)>8)
        <div class="alert alert-danger">
            @foreach ($erroes->all() as $error)
            <p>{{$errors}}</p>

            @endforeach
        </div>
        @endif
		<form action="{{ route ('user.signup')}}" method="post">
			<div class="form-group">
				<label for = "email">E-Mail</label>
				<input type="text" id="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label for = "email">Password</label>
				<input type="password" id="password" name="password" class="form-control">
			</div>
			<!-- <div class="form-group">
				<label for = "age">Age</label>
				<input type="age" id="age" name="age" class="form-control">
			</div>
			<div class="form-group">
				<label for = "phone number">Phone Number</label>
				<input type="phone number" id="phonenumber" name="phone number" class="form-control">
			</div>
			<div class="form-group">
				<label for = "address">Address</label>
				<input type="address" id="address" name="address" class="form-control">
			</div> -->
			<button type="submit"class="btn btn-primary" >Sign Up</button>
			{{ csrf_field ()}}
		</form>	
	</div>
</div>
@endsection
