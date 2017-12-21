@extends('layouts.master')

@section('title')
   cars
@endsection

@section('content')
        <h1>cars</h1>
    <ul>
          @foreach($cars as $car)
          <li><a href="{{route('single_car',['id'=>$car->id])}}">{{$car->name}}</a></li>
          @endforeach
   </ul>
@endsection
