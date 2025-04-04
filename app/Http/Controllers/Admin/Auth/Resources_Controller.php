<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resources_;
use App\Mail\Venue_Approval;
use Illuminate\Support\Facades\Mail;

class Resources_Controller extends Controller
{
    function sum(Request $request){

        $resource = new Resources_();
        $resource->resource_brand = $request->resource_brand;
        $resource->resource_type = $request->resource_type;
        $resource->resource_sn = $request->resource_sn;

        $result= $resource->save();
        if($request){

            flash()->success('Resource Added!!');

            return redirect('admin/addresource');
        }else{

            flash()->error('Resource Not added!!');

        return back();
    }
}
function bookresource(){

  $resourceData = Resources_::all();
  return view('admin.bookresource',['stud'=>$resourceData]);

}

function del($id){
 $idDelete = Resources_::destroy($id);
 if($idDelete){

    flash()->warning('Resource Deleted!!');

    return back();
 }
 else{

    flash()->infor('Resources not found');

    return back();

 }

}

function app($id){

    $resource =Resources_::find($id);

    $resource->status = 'Approved';

    $resource->save();

   /* Mail::to(auth()->user()->email)->send(new Venue_Approval());*/

    flash()->success('Resource Request Approved');

    return redirect('admin/bookresource');


}

function repairs(){
     $resourceData = Resources_::all();
     return view('admin.repairs',['rep'=>$resourceData]);
 }

 function cur($id){

    $resource =Resources_::find($id);

    $resource->status = 'Undergoing repairs';

    $resource->save();

    flash()->warning('Repairs underway');

    return back();

 }

}
