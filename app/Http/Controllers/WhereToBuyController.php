<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;


class WhereToBuyController extends Controller
{
    public function searchWhereToBuy(Request $request)
    {
        if($request->ajax())
            {
                $output="";
                $shops = DB::table('new_where_to_buys')->where('name', 'LIKE', '%'.$request->search.'%')
                                                       ->where('address', 'LIKE', '%'.$request->search.'%')
                                                       ->orWhere('city','LIKE','%'.$request->search.'%')
                                                       ->orWhere('state','LIKE','%'.$request->search.'%')
                                                       ->orWhere('pin','LIKE','%'.$request->search.'%')->get();
                                                       
                      if($shops)
                          {
                    foreach($shops as $key => $shop)
                    {   
                        
                        $output.='<div class="col-md-6">

                                        <div class=""><i class="fa fa-map icon"></i><span></span>  '
                                            .$shop->name.
                                        '</div>

                                        <div><i class="fa fa-clock-o icon"></i>  '
                                            .$shop->address.
                                        '</div>

                                        <div>
                                            <i class="fa fa-phone icon"></i>    '
                                            .$shop->phone.
                                        '</div> 
                                </div>';
                                
                                            
                       }
                    return Response($output);
                                             
              }
       
            }
    }
}
