<x-admin-master>
    @section('content')



        <head>

            <script type="text/javascript"
                    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">


            <script type="text/javascript" charset="utf8"
                    src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js" defer></script>


            <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

        </head>
        {{--        <div class="alert alert-primary" role="alert">--}}

        {{--        Networks Available to Search for: cSDE, dSDE, WGR, CGW, DGW, IGW, MX, WAS, SIGR, SAR,WPR, WRS</div>--}}

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Submissions</h6>
            </div>


            <div class="table-responsive" style="white-space: nowrap">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    @if(session()->has('message.level'))
                        <div class="alert alert-{{ session('message.level') }}">
                            {!! session('message.content') !!}
                        </div>
                    @endif
                    <thead>
                    <tr>

                        <th>KPI Name</th>
                        <th>Submission Date</th>
                        <th>Stage</th>
                        <th>Modify</th>


                    </tr>
                    </thead>

                    <tbody>

                    @foreach($forms as $post)

                        <tr>
                            <td>{{$post->kpi_name}}</td>
                            <td>{{$post->created_at->diffForHumans()}}</td>
                            <td>{{$post->stage}}</td>


                            <td>


                                <a type="button" class="btn btn-primary" href="{{route('forms.edit',$post->id)}}">
                                    Modify
                                </a>

                            </td>
                        </tr>
                    @endforeach


                    </tbody>

                </table>

            </div>


        </div>
        {{ $forms->links() }}
        <script>
            $(document).ready(function () {
                var table = $('#dataTable').DataTable({
                    orderCellsTop: true, fixedHeader: true, paginate: false
                });

                $('#dataTable thead tr').clone(true).appendTo('#dataTable thead');

                $('#dataTable thead tr:eq(1) th').each(function (i) {
                    if( i==0) {
                        var title = $(this).text();


                        $(this).html('<input type="text" placeholder="Search ' + title + '" />');


                        $('input', this).on('keyup change', function () {
                            if (table.column(i).search() !== this.value) {
                                table.column(i).search(this.value).draw();
                            }
                        });
                    }
                    else{
                        var title = $(this).text();


                        $(this).html('');

                    }

                });

            });


        </script>
    @endsection



</x-admin-master>
