@extends('layouts.main')
@section('title', 'Rota')
@section('content')


{{ @if($id != null)
<p>Layout-route. ID da rota: {{ $id }}</p>
@else
    <p>Layout-route. ID da rota: null</p>
@endif }}

@endsection