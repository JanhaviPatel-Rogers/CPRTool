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
                    <h6 class="m-0 font-weight-bold text-primary">All Budget Entries</h6>
                </div>

                <div class="table-responsive" style="white-space: nowrap">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                        <tr>

                            <th>
                                Date
                            </th>
                            <th>
                                Change Type
                            </th>
                            <th>
                                Table
                            </th>
                            <th>
                                Person
                            </th>
                            <th>
                                Old Value
                            </th>
                            <th>
                                New Values
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($audit as $post)
                            <tr>
                                <td>
                                    @Html.DisplayFor(modelItem => item.DateTime.Date)
                                </td>

                                <td>
                                    @Html.DisplayFor(modelItem => item.Type)
                                </td>
                                <td>
                                    @Html.DisplayFor(modelItem => item.TableName)
                                </td>
                                <td>
                                    @Html.DisplayFor(modelItem => item.UserId)
                                </td>
                                <td>
{{--                                    @if (item.Type == "Update")--}}
                                        {
                                        @Html.DisplayFor(modelItem => item.OldValues)
                                        }
                                </td>
                                <td>
{{--                                    @if (item.Type == "Update")--}}
                                        {
                                        @Html.DisplayFor(modelItem => item.NewValues)
                                        }
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
                <script>
                    $(document).ready(function () {
                        var table = $('#dataTable').DataTable({
                            orderCellsTop: true, fixedHeader: true
                        });

                        $('#dataTable thead tr').clone(true).appendTo('#dataTable thead');

                        $('#dataTable thead tr:eq(1) th').each(function (i) {
                            if (i == 1) {
                                var title = $(this).text();


                                $(this).html('<input type="text" placeholder="Search ' + title + '" />');


                                $('input', this).on('keyup change', function () {
                                    if (table.column(i).search() !== this.value) {
                                        table.column(i).search(this.value).draw();
                                    }
                                });
                            }
                            else {
                                var title = $(this).text();


                                $(this).html('');

                            }

                        });

                    });


                </script>
            </div>
        </div>

        </body>





    @endsection



</x-_AdminLayout>
