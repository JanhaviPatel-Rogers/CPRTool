@extends('layouts.app')

@section('content')
        <br>
        <br>
        <h1>Create</h1>

        <h4>Vendor</h4>
        <hr />
        <div class="row">
            <div class="col-md-4">
                <form method="post" action="{{ route('vendors.store') }}" enctype='multipart/form-data'>
                    @csrf
                    <div asp-validation-summary="ModelOnly" class="text-danger"></div>
                    <div class="form-group">
                        <label for="VendorID" class="control-label"></label>
                        <input for="VendorID" class="form-control" name="VendorID" id="VendorID" />
                        <span class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" id="VendorID" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>

        <div>
            <a asp-action="Index">Back to List</a>
        </div>
@endsection


