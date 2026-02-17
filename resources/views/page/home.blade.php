@extends('layouts.app')
@section('title', 'Tumbler Studio – Home')

@section('content')

@include('components.home.story-tellers')
@include('components.home.home-service')
@include('components.home.home-portfolio')
@include('components.home.acurious-section')
@include('components.home.home-contact')
@include('partials.trusted-brands') 



@endsection