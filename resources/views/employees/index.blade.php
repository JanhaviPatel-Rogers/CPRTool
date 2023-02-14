<x-_AdminLayout>
    @section('content')

        <head>

            <script type="text/javascript"
                    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">


            <script type="text/javascript" charset="utf8"
                    src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js" defer></script>


            <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

        </head>


        <h2 class="py-4">Employees</h2>
        <body>
        <div>


            <p>
                <a asp-action="Create" class="btn btn-secondary" href="{{route('employees.create')}}">
                    Create New
                </a>
            </p>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">All Employees</h6>
                </div>

                <div class="table-responsive" style="white-space: nowrap">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                        <tr>

                            <th>
                                EmployeeID
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Delete
                            </th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($employee as $post)
                            <tr>

                                <td>
                                    {{$post->EmployeeID}}
                                </td>
                                <td>
                                    {{$post->Name}}
                                </td>
                                <td>
                                    <a asp-action="Delete" asp-route-id="@employee.EmployeeID">
                                        <span style="font-size: 1em; color: red;">
                                            <i class="fas fa-trash-alt"></i>
                                        </span>
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

        </body>

    @endsection



</x-_AdminLayout>
