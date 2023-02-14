<?php

namespace App\Http\Controllers;

use App\Models\Vendor;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index(){


        $vendor = Vendor::all();

        $search = request()->query('search');

        if($search){
            $vendor=Vendor::where('VendorID', 'LIKE',"%{$search}%")->simplePaginate(3);
        }else{
            $vendor=Vendor::simplePaginate(3);
        }


        return view('vendors.index', ['vendor'=>$vendor]);

    }

    public function create() {
        return view('vendors.create');
    }

    public function store(Request $request)
    {
        $vendors = new Vendor();
        $vendors->VendorID = request('VendorID');
        $vendors->save();
        return redirect('vendors/index');
    }

    public function update($id, Request $request)
    {
        $vendor = Vendor::find($id);
        $vendor->VendorID=$request->input('vendorID');
        $vendor->update();
        return redirect('/admin/vendors/index')->with('status','Data updated successfully');

    }
    public function details(Request $request, Vendor $post)
    {
        return view('vendors.details',compact('post'));

    }
    public function edit(Request $request, Vendor $post)
    {
        return view('vendors.edit', compact('post'));

    }
    public function delete(Request $request, Vendor $post)
    {
        $post->delete();
        session()->flash('vendor-delete', 'Vendor has been deleted');
        return back();
    }

}
