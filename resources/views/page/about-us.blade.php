@extends('layouts.app')
@section('title', 'Tumbler Studio – About Us')
@section('styled_title')
    <span class="bg-gradient-to-r from-[#FF3668] to-[#CF0037] bg-clip-text text-transparent font-bold">
        About
    </span>
    Us
@endsection
@section('breadcrumb', 'About')

@section('content')

@include('components.about.our-strength')
@include('components.about.our-values')




@endsection