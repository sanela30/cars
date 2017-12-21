@extends('layouts.master')
@section('title')
    cars
@endsection  

@section('content')
        <h1>{{$car->name}}</h1>
        <p>{{$car->producer}}</p>
       
@endsection
