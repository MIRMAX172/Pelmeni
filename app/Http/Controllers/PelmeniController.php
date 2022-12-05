<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelmeniController extends Controller
{
  
  public function GetData() {

    $data = DB::table('pelmeni')->get();
    return view('menu', ['data' => $data]);
  }
}
