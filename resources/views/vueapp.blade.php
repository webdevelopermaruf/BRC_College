@push('inertiaHead')
    @vite('resources/js/app.js')
    @inertiaHead
@endpush

@extends('layouts.app')
@section('title', 'আবেদন অবস্থা - ')


@section('content')
@inertia
@endsection
