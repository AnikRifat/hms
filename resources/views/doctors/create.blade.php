@extends('layouts.app')
@section('title')
    {{ __('messages.doctor.new_doctor') }}
@endsection
@section('header_toolbar')
    <div class="container-fluid">
        <div class="d-md-flex align-items-center justify-content-between mb-7">
            <h1 class="mb-0">@yield('title')</h1>
            <a href="{{ route('doctors.index') }}"
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
                {{Form::hidden('isEdit',false,['class'=>'isEdit'])}}
                {{Form::hidden('defaultAvatarImageUrl',asset('public/assets/img/avatar.png'),['class'=>'defaultAvatarImageUrl'])}}

                <div class="card-body">
                    {{ Form::open(['route' => 'doctors.store', 'files' => 'true', 'id' => 'createDoctorForm']) }}
                    @include('doctors.fields')
                    {{ Form::close() }}
                </div>
            </div>
        </div>

    </div>
@endsection
{{--
assets/js/doctors/create-edit.js
assets/js/custom/add-edit-profile-picture.js
assets/js/custom/phone-number-country-code.js
--}}
