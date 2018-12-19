<!doctype html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title>@yield('title')</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href= " {{ URL::to('src/css/app.css') }}">
     

     @yield('styles')
</head>
<body>

@include('partials.header')
<div class="container">
	@yield ('content')
</div>


<script
  src="https://code.jquery.com/jquery-1.12.3.js"
  integrity="sha256-1XMpEtA4eKXNNpXcJ1pmMPs8JV+nwLdEqwiJeCQEkyc="
  crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@yield ('scripts')
</body>
</html>