<x-_AdminLayout>
    @section('content')




        <head>

            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">


            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js" defer></script>

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


        <p>
            <a class="btn btn-secondary" href="{{route('projects.create')}}">
                Create New
            </a>
{{--            @*            <a asp-action="ExportToCSV" class="btn btn-secondary">--}}
{{--                <i class="far fa-file-excel"></i> Export To CSV--}}
{{--            </a>*@--}}
        </p>
        <p>

        </p>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Budget Entries</h6>
            </div>

            <div class="table-responsive" style="white-space: nowrap">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                    <tr>
                        <th></th>
                        <th>
                            KTwoNumber
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Submitter
                        </th>
                        <th>
                            Delivery Owner
                        </th>
                        <th>
                            Total CA Value
                        </th>
                        <th>
                            Budget Start Year
                        </th>
                        <th>
                            Priority
                        </th>
                        <th>
                            Status
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($project as $post)
                        <tr>



                            <td>
                                <a href="{{ route('projects.edit',$post->id) }}">
                                        <span style="font-size: 1em; color: grey;">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                </a> |
                                <a href="{{ route('projects.details',$post->id) }}">
                                        <span style="font-size: 1em; color: grey;">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                </a> |
                                <a href="{{ route('projects.delete',$post->id) }}">
                                        <span style="font-size: 1em; color: red;">
                                            <i class="fas fa-trash-alt"></i>
                                        </span>
                                </a>
                            <td>{{$post->KTwoNumber}}</td>
                            <td>{{$post->ProjectName}}</td>
                            <td>{{$post->Submitter}}</td>
                            <td>{{$post->DeliveryOwner}}</td>
                            <td>{{$post->created_at->diffForHumans()}}</td>
                            <td>{{$post->BudgetStartYear}}</td>
                            <td>{{$post->Priority}}</td>
                            <td>{{$post->Status}}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <script>
            $(document).ready(function () {
                var table = $('#dataTable').DataTable({
                    orderCellsTop: true, fixedHeader: true, bPaginate: false
                });

                $('#dataTable thead tr').clone(true).appendTo('#dataTable thead');

                $('#dataTable thead tr:eq(1) th').each(function (i) {
                    if (i == 1) {
                        var title = $(this).text();


                        $(this).html('<input type="text" placeholder="Search" />');


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


        </body>

    @endsection



</x-_AdminLayout>
