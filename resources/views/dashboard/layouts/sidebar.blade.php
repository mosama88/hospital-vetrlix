<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <h5 class="text-center text-white">{{ Auth::user()->name }}</h5>
                <h6 class="text-center text-white">{{ trans('sidebar.hospital_management') }}</h6>

                <li>
                    <a href="{{ route('dashboard.index') }}" class="waves-effect">
                        <i class="ti-home"></i><span class="badge rounded-pill bg-primary float-end">1</span>
                        <span>{{ trans('sidebar.dashboard') }}</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('dashboard.sections.index') }}" class=" waves-effect">
                        <i class="fas fa-layer-group"></i>
                        <span>{{ trans('sidebar.section') }}</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('dashboard.doctors.index') }}" class=" waves-effect">
                        <i class="fas fa-user-md"></i>
                        <span>{{ trans('sidebar.doctor') }}</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-email"></i>
                        <span>Email</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox.html">Inbox</a></li>
                        <li><a href="email-read.html">Email Read</a></li>
                        <li><a href="email-compose.html">Email Compose</a></li>
                    </ul>
                </li>


                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
