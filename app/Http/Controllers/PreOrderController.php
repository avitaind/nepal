<?php

//DynamicDepdendent.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PreOrderController extends Controller
{
    function index()
    {
     $country_list = DB::table('model_list')
         ->groupBy('name')
         ->get();
     return view('pre-order')->with('model_list', $model_list);
    }

    function fetch(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('model_processor')
       ->where($select, $value)
       ->groupBy($dependent)
       ->get();
     $output = '<option value="">Select '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }
}

?>
