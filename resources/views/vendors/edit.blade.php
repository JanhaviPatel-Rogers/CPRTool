<x-_AdminLayout>
    @section('content')
<h1>Edit</h1>

<h4>Vendor</h4>
<hr />
<div class="row">
    <div class="col-md-4">
        <form action="{{route('vendors.update',$post)}}" method="POST">
            {{csrf_field()}}
            @method('PUT')
            <div class="text-danger"></div>
            <input type="hidden" />
            <div class="form-group">
                <label>Vendor ID</label>
                <input  class="form-control" value="{{$post->VendorID}}" name="vendorID" />
                <span  class="text-danger"></span>
            </div>
            <div class="form-group">
                <input type="submit" value="Save" class="btn btn-primary" />
            </div>
        </form>
    </div>
</div>

<div>
    <button type="button" onclick="window.location='{{ url("vendors/index") }}'" class="btn btn-default">Back to list</button>
</div>
    @endsection



</x-_AdminLayout>
