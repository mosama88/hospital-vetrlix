@extends('dashboard.layouts.master')
@section('title', 'Sections')
@section('page-title', trans('page-title.sections'))
@section('page-link-back')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">{{ trans('page-title.dashboard') }}</a>
    </li>
@endsection
@section('current-page', trans('page-title.sections'))
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
                                <button type="button" class="btn btn-primary btn-lg waves-effect waves-light"
                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    {{ trans('sections_trans.add_section') }}
                                </button>
                            </div>
                            @include('dashboard.sections.add')
                            <!-- /.modal -->
                        </div>

                    </div>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">#</th>
                                <th class="wd-15p border-bottom-0">{{ trans('sections_trans.section_name') }}
                                </th>
                                <th class="wd-20p border-bottom-0">{{ trans('sections_trans.created_at') }}
                                </th>
                                <th class="wd-20p border-bottom-0">{{ trans('sections_trans.transaction') }}
                                </th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($sections as $section)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><a href="#">{{ $section->name }}</a> </td>
                                    <td>{{ $section->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a class="modal-effect btn btn-sm btn-info" data-bs-toggle="modal"
                                            href="#edit{{ $section->id }}"><i class="fas fa-edit"></i></a>

                                        <a class="modal-effect btn btn-sm btn-danger" data-bs-toggle="modal"
                                            href="#delete{{ $section->id }}"><i class="fas fa-trash-alt"></i></a>
                                        @include('dashboard.sections.delete')
                                    </td>
                                </tr>
                                @include('dashboard.sections.edit')
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{ $sections->render('pagination::bootstrap-5') }} --}}

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    {{-- End Row --}}




    @include('dashboard.layouts.scripts')
    {{-- Datatable --}}
    <!-- Required datatable js -->
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/jszip/jszip.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js">
    </script>

    <!-- Datatable init js -->
    <script src="{{ asset('dashboard') }}/assets/js/pages/datatables.init.js"></script>


    <!--Internal  Notify js -->
    <script src="{{ asset('dashboard') }}/assets/plugins/notify/js/notifIt.js"></script>
    <script src="{{ asset('dashboard') }}/assets/plugins/notify/js/notifit-custom.js"></script>
@endsection
