<x-_AdminLayout>
    @section('content')


        <h1>Create Role</h1>
        <hr />
        <div class="row">
            <div class="col-md-4">
                <form method="post" action="{{ route('roles.store') }}" enctype='multipart/form-data'>
                    @csrf
                    <div class="text-danger"></div>
                    <div class="form-group">
                        <label for="name" class="control-label"></label>
                        <input for="name" class="form-control" name="name" id="name" />
                        <span class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" id="name" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>
        <div>
            <a asp-action="Index">Back to List</a>
        </div>


    @endsection


</x-_AdminLayout>
