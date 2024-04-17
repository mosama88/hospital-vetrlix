@extends('dashboard.layouts.master')
@section('title', 'Doctors')
@section('page-title', trans('doctors.doctors'))
@section('page-link-back')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">{{ trans('page-title.dashboard') }}</a>
    </li>
@endsection
@section('current-page', trans('doctors.doctors'))
@section('content')
    @include('dashboard.layouts.page-link')

    {{-- Start Row --}}




    @include('dashboard.layouts.scripts')


@endsection
