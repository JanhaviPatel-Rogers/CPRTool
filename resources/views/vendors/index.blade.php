<x-_AdminLayout>
    @section('content')



        <h1>Vendor</h1>

        <p>
            <a href="{{route('vendors.create')}}">Create New</a>
        </p>

        <form method="get" action="{{route('vendors.index')}}">
            @csrf
            <div class="form-actions no-color">
                <p>
                    Find by name: <input type="text" name="search" value="{{request()->query('search')}}"/>
                    <input type="submit" value="Search" class="btn btn-default" /> |
                    <button type="button" onclick="window.location='{{ url("vendors/index") }}'" class="btn btn-default">Back to list</button>
            </div>
        </form>

        <table class="table">
            @csrf
            <thead>
            <tr>
                <th>
                    <a>Name</a>

                </th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($vendor as $post)
            <tr>
                <td>
                    {{$post->VendorID}}
                </td>
                <td>
{{--                    <a href="{{route('vendors.edit'),$post->id}}">Edit</a> |--}}
{{--                    <a href="{{ route ('vendors.details',$post->id) }}">Details</a> |--}}
                    <a href="{{ route('vendors.details',$post->id) }}">Details</a> |
                    <a href="{{ route('vendors.edit',$post->id) }}">Edit</a> |
                    <a href="{{ route('vendors.delete',$post->id) }}">Delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

    @endsection



</x-_AdminLayout>
