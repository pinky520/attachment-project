<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Suppliers;
use Barryvdh\DomPDF\Facade\Pdf;

class SuppliersController extends Controller
{
    function add(Request $request){

        $supplier = new Suppliers();
        $supplier->supplier_name= $request->supplier_name;
        $supplier->product_type= $request->product_type;
        $supplier->quantity= $request->quantity;

        $result= $supplier->save();
        if($request){
            return "booking made successfully";
        }else{

        return "booking not made";
    }
}

function list_s(){
 $supplierData = Suppliers::all();
 return view('admin.supps',['list'=>$supplierData]);


}
 function print_pdf(){

    $list=Suppliers::all();
    $pdf = Pdf::loadView('admin.supps', compact('list'));
    return $pdf->download('supps.pdf');
 }
}
