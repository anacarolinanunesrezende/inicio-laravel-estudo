@extends('layouts.main')
@section('title', 'Rota')
@section('content')

{{--
<p>Layout-route. ID: {{ $id }}</p>
--}}

@if($search != null)
<p>Dado na url: {{ $search }}</p>
@else
    <p>Dado na url: {{ $search }}</p>
@endif
@endsection