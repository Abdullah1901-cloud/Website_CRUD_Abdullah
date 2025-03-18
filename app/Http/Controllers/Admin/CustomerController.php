<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index(){
        $customers = DB::table('customers')->get();
        return view('pages.customer.index',[
            "customers" => $customers,
        ]);
    }
}
