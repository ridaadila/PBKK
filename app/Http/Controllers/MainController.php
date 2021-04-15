<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index() {
        $data = DB::table('sales.customers')->whereBetween('customer_id',[10,20])->get();
        return view('tampil', compact('data'));
    }
}
