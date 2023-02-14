<x-_AdminLayout>
    @section('content')
<h1>Details</h1>

<div>
    <h4>Vendor</h4>
    <hr />
    <dl class="row">
        <dt class = "col-sm-2">
            Name

        </dt>
        <dd class = "col-sm-10">
            {{$post->VendorID}}
        </dd>
    </dl>
</div>
<div>
    <button type="button" onclick="window.location='{{ URL::route('vendors.edit',$post->id) }}'" class="btn btn-default">Edit</button>|
    <button type="button" onclick="window.location='{{ url("vendors/index") }}'" class="btn btn-default">Back to list</button>
</div>
    @endsection



</x-_AdminLayout>
