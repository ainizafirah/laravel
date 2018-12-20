@extends ('layout')

@section ('content')

<div class="title">{{ $products ->title }}</div>
<div class="price">RM {{ $products ->price }}</div>
<div class="description">{{ $products ->description }}</div> 


@endsection