@extends('base')
@section('title')
hello | city
@endsection
@section('content')
<img src="{{asset('/images/drapeauSenegal.png')}}" alt="drapeau du senegal" class="mt-12 rouded shadow-md h-32">
        <h1 class="mt-5 text-3xl sm:text-5xl font-senibold text-indigo-600"> hello from SENEGAL !</h1>
        <p class="text-lg text-gray-800">l'heure actuel est {{date('H:i A')}}. </p>
        
  @endsection
