@extends('home.app.content')
@section('content')
@foreach ($content as $b)
    @include('home.welcome.' . $b)
@endforeach
    
@endsection