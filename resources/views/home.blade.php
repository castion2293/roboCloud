@extends('master')

@section('title', '| Home')

@section('styles')

@endsection

@section('content')
    <h1>dashboard User:{{  Auth::user()->name }}</h1>
    <example></example>
@endsection

@section('scripts')

@endsection
