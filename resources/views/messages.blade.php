@extends('layouts.app')

@section('content')
    @if (session()->has('message'))
        <p class="alert alert-success">{{ session()->get('message') }}</p>
    @endif
    <div class="header-violet d-flex flex-column justify-content-center align-items-center mb-5">

{{-- @foreach ($messages as $message)

@endforeach --}}


PAGE MESSAGE

@endsection
