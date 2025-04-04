<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Venues_;
use App\Models\Resources_;

class Venues_Controller extends Controller
{
    function num(Request $request){

        $venue = new Venues_();
        $venue->venue_name= $request->venue_name;
        $venue->region= $request->region;
        $venue->Description= $request->Description;
        $venue->capacity= $request->capacity;

        $result= $venue->save();

        return back();
         flash()->sucess('Venue Added!!');
}

function bookvenue(){
      $venueData = Venues_::all();
   return view('admin.bookvenue',['students'=> $venueData]);
}

function delete($id){
    $idDelete = Venues_::destroy($id);
    if($idDelete){
        flash()->warning('Venue Deleted!!');
       return redirect('admin/bookvenue');
    } else{
       echo "record not found";
    }

   }

   function ask($id){

    $venue =Venues_::find($id);

    $venue->status = 'Occupied';
    $venue->save();
    flash()->success('Venue is now Occupied');
    return redirect('admin/bookvenue');

}

}
