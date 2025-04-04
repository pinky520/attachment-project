<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resources_;
use App\Mail\Resource_Approval;
use Illuminate\Support\Facades\Mail;

class Resources_Controller extends Controller
{

function bookresource(){
      $resData = Resources_::all();
      return view('bookresource',['res'=>$resData]);
}


function pop($id){

    $resource =Resources_::find($id);

    $resource->status = 'Pending';

    $resource->save();

    Mail::to('tadiwa@gmail.com')->send(new Resource_Approval());

flash()->success('Resource Request Sent');

    return back();


}

function nev($id){

    $resource =Resources_::find($id);

    $resource->status = 'Available';

    $resource->save();

    flash()->success('Resource Returned');

    return back();

}


}
