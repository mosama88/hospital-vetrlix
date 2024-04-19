@extends('dashboard.layouts.master')
@section('title', trans('doctors.doctors'))
@section('page-title', trans('doctors.doctors'))
@section('page-link-back')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">{{ trans('page-title.dashboard') }}</a>
    </li>
@endsection
@section('current-page', trans('doctors.doctors'))
@section('content')
    @include('dashboard.layouts.page-link')
    <!--Internal   Notify -->
    <link href="{{ asset('dashboard') }}/assets/plugins/notify/css/notifIt.css" rel="stylesheet" />

    {{-- Start Row --}}
    @include('dashboard.messages_alert')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-12 ">
                        <div class="col-sm-12 col-md-12 col-xl-12 text-end">
                            <div class="my-4">
                                <!-- Satic modal -->
                                <a href="{{ route('dashboard.doctors.create') }}"
                                    class="btn btn-primary btn-lg waves-effect waves-light">
                                    {{ trans('doctors.add_doctor') }}
                                </a>
                            </div>
                        </div>

                    </div>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ trans('doctors.name') }}</th>
                                <th>{{ trans('doctors.email') }}</th>
                                <th>{{ trans('doctors.phone') }}</th>
                                <th>{{ trans('doctors.price') }}</th>
                                <th>{{ trans('doctors.section') }}</th>
                                <th>{{ trans('doctors.Status') }}</th>
                                <th>{{ trans('doctors.Processes') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($doctors as $doctor)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><a href="#">{{ $doctor->name }}</a> </td>
                                    <td>{{ $doctor->email }}</td>
                                    <td>{{ $doctor->phone }}</td>
                                    <td>{{ $doctor->price }}</td>
                                    <td>{{ $doctor->section->name }}</td>
                                    <td>
                                        {{ $doctor->status }}
                                    </td>
                                    <td>
                                        <a class="modal-effect btn btn-sm btn-info" data-bs-toggle="modal"
                                            href="#edit{{ $doctor->id }}"><i class="fas fa-edit"></i></a>

                                        <a class="modal-effect btn btn-sm btn-danger" data-bs-toggle="modal"
                                            href="#delete{{ $doctor->id }}"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->



    @include('dashboard.layouts.scripts')

    <!--Internal  Notify js -->
    <script src="{{ asset('dashboard') }}/assets/plugins/notify/js/notifIt.js"></script>
    <script src="{{ asset('dashboard') }}/assets/plugins/notify/js/notifit-custom.js"></script>
@endsection
