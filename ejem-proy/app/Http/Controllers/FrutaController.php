<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FrutaController extends Controller
{
   public function index(){
      $frutas = DB::select('select * from frutas');

      return view('fruta.index',[ 'frutas' => $frutas ]);
 }

}
