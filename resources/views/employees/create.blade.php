<x-_AdminLayout>
    @section('content')

    <head>
            <meta name="viewport" content="width=device-width" />
            <title>Index</title>
            <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        </head>
        <h1>Create</h1>


{{--        @section Scripts{--}}
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            // $(function () {
            //     $("#tags").autocomplete({
            //         source: '/Employee/Test'
            //     });
            // });
        </script>
{{--        }--}}
        <div class="row">
            <form method="post" action="{{ route('employees.store') }}" enctype='multipart/form-data'>
                @csrf
                <div asp-validation-summary="ModelOnly" class="text-danger"></div>
                <div class="card">
                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Create Employee</h3>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col">
                                <label for="EmployeeID" class="control-label">EmployeeID</label>
                                <input type="number" for="EmployeeID" class="form-control" name="EmployeeID" id="EmployeeID"/>
                                <span class="text-danger"></span>
                            </div>
                            <div class=" form-group col">
                                <label for="Name" class="control-label">Name</label>
                                <input for="Name" class="form-control" name="Name" id="Name"/>
                                <span class="text-danger" />
                            </div>
                        </div>


                    </div>
                </div>


                <div class="form-group">
                    <input type="submit" id="EmployeeID" class="btn btn-primary" />
                </div>
            </form>
        </div>

        <div>
            <a asp-action="Index">Back to List</a>
        </div>

        @endsection



</x-_AdminLayout>

