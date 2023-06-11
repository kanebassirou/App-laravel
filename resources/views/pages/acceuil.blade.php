@extends('base')
@section('title')
hello | city
@endsection
@section('content')
<img src="/images/drapeauSenegal.png" alt="drapeau du senegal">
        <h1> hello from SENEGAL !</h1>
        <p>l'heure actuel est {{date('H:i A')}}. </p>
        
  @endsection
