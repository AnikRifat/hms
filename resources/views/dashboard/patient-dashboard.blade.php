@extends('layouts.app')
@section('title')
    {{ __('messages.dashboard.dashboard') }}
@endsection
@section('page_css')
    {{--        <link rel="stylesheet" href="{{ asset('public/css/bootstrap-datetimepicker.css') }}"> --}}
    {{--        <link rel="stylesheet" href="{{ asset('public/assets/css/daterangepicker.css') }}"> --}}
@endsection
@section('css')
    {{--    <link rel="stylesheet" href="{{ asset('public/assets/css/detail-header.css') }}"> --}}
@endsection

@section('content')
<div class="container-fluid">
    <div class="d-flex flex-column">
        <livewire:patient-dashboard />
    </div>
</div>
@endsection
