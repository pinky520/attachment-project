<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Venues_;
use App\Mail\Venue_Approval;
use Illuminate\Support\Facades\Mail;

class Venues_Controller extends Controller
{
function bookvenue(){
     $venueData= Venues_::all();
   return view('bookvenue',['ven'=>$venueData]);
}
function pro($id){

    $venue =Venues_::find($id);

    $venue->status = 'Pending';

    $venue->save();

    Mail::to('tadiwa@gmail.com')->send(new Venue_Approval());

    flash()->success('Awaiting decision');

    return back();

}

function con($id){

    $venue =Venues_::find($id);

    $venue->status = 'Vacant';

    $venue->save();

    /*$venue->notify(new bookrereq());

    return $venue;*/

    flash()->success('Venue is now vacant');

    return back();

}

}
