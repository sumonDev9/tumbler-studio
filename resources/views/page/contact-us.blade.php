@extends('layouts.app')
@section('title', 'Tumbler Studio – contact Us')
@section('styled_title')
    <span class="bg-gradient-to-r from-[#FF3668] to-[#CF0037] bg-clip-text text-transparent font-bold">
        Contact
    </span>
    Us
@endsection
@section('breadcrumb', 'contact Us')

@section('content')

@include('components.contact.contact-section')



@endsection