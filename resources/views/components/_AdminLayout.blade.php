<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Capital Program Reporting Tool</title>
{{--    <link rel="stylesheet" href="~/lib/bootstrap/dist/css/bootstrap.min.css" />--}}
    <link rel="stylesheet" href="{{asset('asset/lib/bootstrap/dist/css/bootstrap.min.css')}}" >
{{--    <link href="~/lib/font-awesome/css/all.css" rel="stylesheet" />--}}
    <link href="{{asset('asset/lib/font-awesome/css/all.css')}}" rel="stylesheet">
{{--    <link rel="stylesheet" href="~/css/site.css" />--}}
    <link rel="stylesheet" href="{{asset('asset/css/site.css')}}">
{{--    <link rel="stylesheet" href="~/css/sb-admin-2.css" />--}}
    <link rel="stylesheet" href="{{asset('asset/css/sb-admin-2.css')}}">
{{--    <link rel="stylesheet" href="~/css/app.css">--}}
    <link rel="stylesheet" href="{{asset('asset/css/app.css')}}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body id="page-top">

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav navbar-dark bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.index')}}">
            <div class="sidebar-brand-icon rotate-n-15">


                <img src="{{url('/asset/img/logo2.png')}}" width="40" height="40" alt="">
            </div>
            <div class="sidebar-brand-text mx-3">Welcome</div>

        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBudget" aria-expanded="true" aria-controls="collapseBudget">
                <i class="fas fa-fw fa-file"></i>
                <span>Budget</span>
            </a>
            <div id="collapseBudget" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('projects.index')}}">View Budget Entries</a>
                    <a class="collapse-item" href="{{route('vendors.index')}}">View Vendors</a>
                    <a class="collapse-item" href="{{route('projects.create')}}">Create New Submission</a>
                    {{--                    <div class="collapse-divider"></div>--}}

                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseCA" aria-expanded="true" aria-controls="collapseCA">
                <i class="fas fa-fw fa-folder"></i>
                <span>CA Tracker</span>
            </a>
            <div id="collapseCA" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">

                    <a class="collapse-item" text-dark href="{{ route('CA.index') }}">Projects List</a>

                    <div class="collapse-divider"></div>

                </div>
            </div>
        </li>


{{--        @if(auth()->user()->userHasRole('admin'))--}}
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Admin Only
        </div>
        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseForecast" aria-expanded="true" aria-controls="collapseForecast">
                <i class="fas fa-fw fa-folder"></i>
                <span>All Projects</span>
            </a>
            <div id="collapseForecast" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">

                    <a class="collapse-item" text-dark href="{{ route('projects.pending') }}">Projects List</a>

                    <div class="collapse-divider"></div>

                </div>
            </div>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Users</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Admin:</h6>

                    <a class="collapse-item" text-dark href="/Admin/users">Users</a>
                    <a class="collapse-item" text-dark href="/roles/index">Edit Roles</a>

                    <div class="collapse-divider"></div>

                </div>
            </div>
        </li>
{{--        @endif--}}
        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseEmployee" aria-expanded="true" aria-controls="collapseEmployee">
                <i class="fas fa-fw fa-folder"></i>
                <span>Employees</span>
            </a>
            <div id="collapseEmployee" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" text-dark href="{{route('employees.index')}}">All Employees</a>
                    <a class="collapse-item" text-dark href="{{route('employees.create')}}">Create New Employee</a>


                    <div class="collapse-divider"></div>

                </div>
            </div>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseLogs" aria-expanded="true" aria-controls="collapseLogs">
                <i class="fas fa-fw fa-folder"></i>
                <span>
                        Audit Trail
                    </span>
            </a>
            <div id="collapseLogs" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Admin:</h6>
                    <a class="collapse-item"  text-dark href="{{route('audit.index')}}">Audit Trail</a>


                    <div class="collapse-divider"></div>

                </div>
            </div>
        </li>
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>


    </ul>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">

            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

{{--                <!-- Topbar Search -->--}}
{{--                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">--}}
{{--                    <div class="input-group">--}}
{{--                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">--}}
{{--                        <div class="input-group-append">--}}
{{--                            <button class="btn btn-secondary" type="button">--}}
{{--                                <i class="fas fa-search fa-sm"></i>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
{{--                            "If a user is logged in, display their name"--}}
                                    @if(Auth::check())
                                        {{auth()->user()->email}}
                                    @endif
                                </span>



                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <a class="dropdown-item" href="">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Help
                            </a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>

                        </div>
                    </li>

                    <!-- Logout Modal-->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <form class="form-inline">
                                        @csrf
                                        <button type="submit" class="nav-link btn btn-link">Logout</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </ul>

            </nav>
            <!-- Begin Page Content -->
            <div class="container-fluid">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <!-- Page Heading -->
                @yield('content')


            </div>
        </div>

        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Rogers 2021</span>
                </div>
            </div>
        </footer>

    </div>


</div>






<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


{{--<script src="~/js/sb-admin-2.js"></script>--}}
<script src="{{asset('asset/js/sb-admin-2.js')}}"></script>
{{--<script src="~/lib/jquery/dist/jquery.min.js"></script>--}}
<script src="{{asset('asset/lib/jquery/dist/jquery.min.js')}}"></script>
{{--<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>--}}

<!-- Core plugin JavaScript-->
{{--<script src="~/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>--}}
<script src="{{asset('asset/lib/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
{{--<script src="~/js/site.js"></script>--}}
<script src="{{asset('asset/js/site.js')}}"></script>

@yield('scripts')
</body>
</html>
