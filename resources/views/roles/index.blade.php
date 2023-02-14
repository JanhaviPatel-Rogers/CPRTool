<x-_AdminLayout>
    @section('content')

        <div class="container-fluid container-fluid-max">
            <div class="row py-2">
                <div class="col-12 pb-4">
                    <h2 class="bg-danger p-1 text-white text-center">All Roles</h2>

                    <a class="btn btn-secondary py-2" href="{{route('roles.create')}}" style="color: white;">Create a Role</a>

                    <table class="table table-sm table-bordered">
                        <tr><th>ID</th><th>Role</th><th>Update</th><th>Delete</th><th>Test</th></tr>
                        @foreach($roles as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->name}}</td>

                                <td><a class="btn btn-sm btn-primary" href="{{route('roles.update')}}" style="color: white;">Update</a></td>
                                <td>
                                    <form asp-action="Delete" asp-route-id="@role.Id" method="post">
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <a href="{{ route('roles.delete',$post->id) }}" style="color: white;">Delete</a>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>



    @endsection


</x-_AdminLayout>
