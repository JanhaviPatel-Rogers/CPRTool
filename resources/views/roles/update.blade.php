<x-_AdminLayout>
    @section('content')


        <div class="container-fluid container-fluid-max">
            <div class="row text-center py-2">
                <div class="col-12 pb-2">
                    <h1 class="font-weight-bold text-danger">Update Role</h1>
                </div>
            </div>
        </div>

        <a asp-action="Index" class="btn btn-secondary">Back</a>
        <div asp-validation-summary="All" class="text-danger"></div>

        <form method="post" action="{{route('roles.index')}}">
            <input type="hidden" name="roleName" value="@Model.Role.Name" />
            <input type="hidden" name="roleId" value="@Model.Role.Id" />
            <div class="container-fluid container-fluid-max">
                <div class="row text-center py-5">
                    <div class="col-12 pb-4">

                        <h2 class="bg-danger p-1 text-white">Add To Admin</h2>
                    </div>
                </div>

                <table class="table table-bordered table-sm">
                    @csrf
                    @if ($users->isEmpty())

                        <tr><td colspan="2">All Users Are Members</td></tr>
                    @else
                    @foreach($users as $post)
                            <tr>
                                <td>{{$post->email}}</td>
                                <td>
                                    <input type="checkbox" name="AddIds" value="@user.Id">
                                </td>
                            </tr>
                    @endforeach
                   @endif
                </table>
            </div>
            <div class="container-fluid container-fluid-max">
                <div class="row text-center py-5">
                    <div class="col-12 pb-4">
                    </div>
                </div>

                <h2 class="bg-danger p-1 text-white">Remove From Admin</h2>
                <table class="table table-bordered table-sm">
                    @if ($users->isEmpty())
                        <tr><td colspan="2">No Users Are Members</td></tr>
                    @else
                        @foreach($users as $post)
                            <tr>
                                <td>{{$post->email}}</td>
                                <td>
                                    <input type="checkbox" name="DeleteIds" value="@user.Id">
                                </td>
                            </tr>
                         @endforeach
                    @endif
                </table>


                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>


    @endsection


</x-_AdminLayout>
