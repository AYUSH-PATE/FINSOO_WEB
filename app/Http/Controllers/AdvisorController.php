<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Leads;
use PHPUnit\Framework\Constraint\IsEmpty;

class AdvisorController extends Controller
{
    public function index(){
        return view('advisor-dashboard');
    }
   public function create(){
    return view('add-lead');
   }

   // this method will store a product/data in db
   public function store (Request $request){

    // echo"<pre>";
    // print_r($request->all());
      $lead = new Leads();
      $lead->name= $request['proposerName'];
      $lead->name_slug= $request['titleSlug'];
      $lead->dob= $request['doB'];
      $lead->mobile1= $request['mobile1'];
      $lead->mobile2= $request['mobile2'];
      $lead->reference_by= $request['refby'];
      $lead->interested_product= $request['intrpr'];
      $lead->attended_by= $request['attby'];
      $lead->status= $request['status'];
      $lead->remarks= $request['remarks'];
      $lead->save();
     return redirect()->route('view-lead')->with('1','Lead Added Successfully');
   }

   public function viewlead(){
    $lead = Leads::all();
    $data=compact('lead');
      return view('view-lead')->with($data);
   }
//    this method will show a edit product/data page
   public function editlead($id){
     $lead= Leads::find($id);
      $data=compact('lead');
      return view('edit-lead')->with($data);

   }

//  this method will update product/data page

   public function updatelead($id){
     echo "yes";
   }

   // this method will delete product/data page
   public function destroy(){

   }
}
