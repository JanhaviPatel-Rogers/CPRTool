<x-_AdminLayout>
    @section('content')


        <head>

            <script type="text/javascript"
                    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">


            <script type="text/javascript" charset="utf8"
                    src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js" defer></script>

            <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
            <style>
                .card-bg-4 {
                    background: #DA291C;
                }
            </style>


        </head>

        <h2 class="py-4">Projects</h2>
        <body>
        <div>



        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Pending Edits</h6>
            </div>

            <div class="table-responsive" style="white-space: nowrap">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                    <tr>

                        <th>
                            User
                        </th>
                        <th>
                            Type
                        </th>
                        <th>
                            Date
                        </th>
                        <th>
                            Stage
                        </th>
                        <th>
                            Table Name
                        </th>
                        <th>
                            Column Name
                        </th>
                        <th>
                            Old Value
                        </th>
                        <th>
                            New Value
                        </th>
                        <th>
                            Approve
                        </th>
                        <th>
                            Decline
                        </th>
                    </tr>
                    </thead>
                    <tbody>

{{--                    @for (var i = 0; i < Model.AuditTrails?.Count; i++)--}}
{{--                        {--}}
{{--                        @if (Model.AuditTrails[i].Stage == "Pending" && Model.AuditTrails[i].ColumnName != "CreateAt")--}}
{{--                            {--}}
{{--                            if (Model.AuditTrails[i].Section == "Budget" || Model.AuditTrails[i].Section == "Both" || Model.AuditTrails[i].Section == "CA")--}}
{{--                            {--}}
                            <tr>

                                <td class="input1 text-center align-self-center">
                                    Username
                                </td>
                                <td class="input1 text-center align-self-center">
                                    OperationType
                                </td>
                                <td class="input1 text-center align-self-center">
                                    CreatedAt
                                </td>
                                <td class="input1 text-center align-self-center">
                                    Stage
                                </td>
                                <td class="input1 text-center align-self-center">
                                    TableName
                                </td>
                                <td class="input1 text-center align-self-center">
                                    ColumnName
                                </td>
                                <td class="input1 text-center align-self-center">
                                    OldValues
                                </td>
                                <td class="input1 text-center align-self-center">
                                    NewValues
                                </td>
                                <td class="input1 text-center align-self-center">
                                    <a asp-action="Approve" asp-route-projectPassed ="@Model.ProjectID" asp-route-auditPassed="@Model.AuditTrails[i].AuditTrailID" class="btn btn-success">
                                        Approve
                                    </a>
                                </td>
                                <td class="input1 text-center align-self-center">
                                    <a  class="btn btn-danger">
                                        Decline
                                    </a>
                                </td>



                            </tr>
{{--                            }--}}

{{--                            }--}}
{{--                            }--}}
                    </tbody>

                </table>
            </div>
        </div>
        </div>

        </body>


    @endsection


</x-_AdminLayout>
