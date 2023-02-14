<?php

namespace App\Http\Controllers;
use App\Models\Audit;

use Illuminate\Http\Request;


class AuditController extends Controller
{
    public function index(){
        $audit = Audit::all();

        return view('audit.index', ['audit'=>$audit]);
    }
}
