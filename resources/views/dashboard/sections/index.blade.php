@extends('dashboard.layouts.master')
@section('title', 'Sections')
@section('page-title', 'Sections')
@section('page-link-back')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
@endsection
@section('current-page', 'Sections')
@section('content')
    @include('dashboard.layouts.page-link')



    {{-- Start Row --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    @include('dashboard.messages_alert')

                    <div class="col-sm-6 col-md-4 col-xl-3">
                        <div class="my-4">
                            <!-- Satic modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                                {{ trans('Dashboard/sections_trans.add_section') }}
                            </button>
                        </div>
                        @include('dashboard.sections.add')
                        <!-- /.modal -->
                    </div>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">#</th>
                                <th class="wd-15p border-bottom-0">{{ trans('Dashboard/sections_trans.section_name') }}
                                </th>
                                <th class="wd-20p border-bottom-0">{{ trans('Dashboard/sections_trans.created_at') }}
                                </th>
                                <th class="wd-20p border-bottom-0">{{ trans('Dashboard/sections_trans.transaction') }}
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

                                        <a class="modal-effect btn btn-sm btn-danger"  data-bs-toggle="modal"
                                            href="#delete{{ $section->id }}"><i class="fas fa-trash-alt"></i></a>
                                            @include('dashboard.sections.delete')
                                    </td>
                                </tr>
                                @include('dashboard.sections.edit')
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    {{-- End Row --}}





    <!-- JAVASCRIPT -->
    <script src="{{ asset('dashboard') }}/assets/libs/jquery/jquery.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/node-waves/waves.min.js"></script>
    <!-- Peity chart-->
    <script src="{{ asset('dashboard') }}/assets/libs/peity/jquery.peity.min.js"></script>

    <!-- Plugin Js-->
    <script src="{{ asset('dashboard') }}/assets/libs/chartist/chartist.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js"></script>

    <script src="{{ asset('dashboard') }}/assets/js/pages/dashboard.init.js"></script>

    <script src="{{ asset('dashboard') }}/assets/js/app.js"></script>



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


@endsection
