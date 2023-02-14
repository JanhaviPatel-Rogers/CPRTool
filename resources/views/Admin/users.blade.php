<x-_AdminLayout>
    @section('content')

        <div class="container-fluid container-fluid-max">
            <div class="row py-2">
                <div class="col-12 pb-4">
                    <h2 class="bg-danger p-1 text-white text-center">All Users</h2>





                    <table class="table table-sm table-bordered">
                        <tr><th>ID</th><th>Name</th><th>Email</th></tr>
                        @foreach($users as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->email}}</td>
                                <td>{{$post->email}}</td>
                                <td>
                                    <form asp-action="Delete" asp-route-id="@user.Id" method="post">
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <a href="{{ route('users.delete',$post->id) }}" style="color: white;">Delete</a>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>


    @endsection


</x-_AdminLayout>
