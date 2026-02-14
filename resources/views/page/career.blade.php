@extends('layouts.app')
@section('title', 'Tumbler Studio – Career')
@section('breadcrumb', 'Career')

@section('content')

@include('components.career.open-positions')
@include('components.career.job-details')



@endsection