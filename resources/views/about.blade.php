@extends('layouts.main')

@section('container')    
<h3>{{ $name }}</h3>
<h3>{{ $email }}</h3>
<img src="img/{{ $img }}" alt="{{ $name }}" width="100">
@endsection
