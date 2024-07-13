@extends('home.app.content')
@section('content')
@foreach ($content as $b)
    @include('home.booking.' . $b)
@endforeach
    
@endsection