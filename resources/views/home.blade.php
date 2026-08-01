@extends('layouts.app')

@section('title', 'HIMASIF - Beranda')

@section('content')
    @include('components.hero')
    @include('components.about')
    @include('components.program')
    @include('components.news')
@endsection
