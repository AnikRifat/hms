@extends('layouts.app')
@section('title')
    {{ __('messages.ambulance.edit_ambulance') }}
@endsection
@section('header_toolbar')
    <div class="container-fluid">
        <div class="d-md-flex align-items-center justify-content-between mb-7">
            <h1 class="mb-0">@yield('title')</h1>
            <a href="{{ route('ambulances.index') }}"
               class="btn btn-outline-primary">{{ __('messages.common.back') }}</a>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <div class="row">
                <div class="col-12">
                    @include('layouts.errors')
                </div>
            </div>
            <div class="card">
                {{Form::hidden('utilsScript',asset('public/assets/js/int-tel/js/utils.min.js'),['class'=>'utilsScript'])}}
                {{Form::hidden('isEdit',true,['class'=>'isEdit'])}}
                <div class="card-body p-12">
                    {{ Form::model($ambulance, ['route' => ['ambulances.update', $ambulance->id], 'method' => 'patch', 'id' => 'editAmbulanceForm']) }}

                    @include('ambulances.edit_fields')

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
{{--
    JS File :- assets/js/ambulances/create-edit.js
               assets/js/custom/phone-number-country-code.js
--}}
