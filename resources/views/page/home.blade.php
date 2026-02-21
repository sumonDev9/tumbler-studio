@extends('layouts.app')
@section('title', 'Tumbler Studio – Home')

@section('content')

@include('components.home.story-tellers')
@include('components.home.home-service')
@include('components.home.home-portfolio')
@include('components.home.acurious-section')
@include('components.home.home-contact')
@include('partials.trusted-brands') 
@include('components.home.our-team')
@include('components.home.testimonial-section')
@include('components.home.home-blog')



@endsection