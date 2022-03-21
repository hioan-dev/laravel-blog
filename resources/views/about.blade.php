@extends('layouts.main')

@section('container')
<h1>About</h1>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="img/{{ $image }}" alt="{{ $name }}" height="150px" width="150px"  class=" rounded-circle border-radius-50%">
@endsection