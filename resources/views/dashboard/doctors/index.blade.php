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
    <!--Internal   Notify -->
    <link href="{{ asset('dashboard') }}/assets/plugins/notify/css/notifIt.css" rel="stylesheet" />



    {{-- Start Row --}}
    <div class="row">
        <div class="col-12">
            @include('dashboard.messages_alert')
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
                    <div class="text-center coming-soon-search-form pt-4">
                        <form action="#">
                            <input type="text" placeholder="email, name, phone, section">
                            <button type="submit" class="btn btn-primary">Search<i class="fas fa-search mx-2"></i></button>
                        </form>
                        <!-- end form -->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">

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
                                                            <a class="modal-effect btn btn-sm btn-info"
                                                                data-bs-toggle="modal" href="#edit{{ $doctor->id }}"><i
                                                                    class="fas fa-edit"></i></a>

                                                            <a class="modal-effect btn btn-sm btn-danger"
                                                                data-bs-toggle="modal" href="#delete{{ $doctor->id }}"><i
                                                                    class="fas fa-trash-alt"></i></a>
                                                            {{-- @include('dashboard.doctors.delete') --}}
                                                        </td>
                                                    </tr>
                                                    {{-- @include('dashboard.doctors.edit') --}}
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                {{ $doctors->render('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div> <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
        </div>
    </div>
    <!-- End Page-content -->

    @include('dashboard.layouts.scripts')

    <!--Internal  Notify js -->
    <script src="{{ asset('dashboard') }}/assets/plugins/notify/js/notifIt.js"></script>
    <script src="{{ asset('dashboard') }}/assets/plugins/notify/js/notifit-custom.js"></script>
@endsection
