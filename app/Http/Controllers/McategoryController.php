<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use session;
use App\Mcategory;



class McategoryController extends Controller
{
    public function mcatagory_form(){
        return view('admin.medicine.mcatagory');
    }
    public function mcatagory_save(Request $request){
        //return view('admin.medicine.mcatagory');
        //dd($request);
        $validatedData = $request->validate([
            'mcatagory_name' => 'required|unique:mcategories,mcatagory_name',
            'mcatagory_describtion' => 'required',
            'mpublication_status' => 'required',
        ]);

        $catagory = new Mcategory;
        $catagory->mcatagory_name = $request->mcatagory_name;
        $catagory->mcatagory_describtion = $request->mcatagory_describtion;
        $catagory->mpublication_status = $request->mpublication_status;
        $catagory->save();
        return redirect('mcatagoy/view')->with('Catagory_add_succesfull','successfully added');
    }
    public function manage_catagory(){
        $catagoris = Mcategory::paginate(5);
       // dd($catagoris);
        return view('admin.medicine.manage_catagory')->with('catagoris',$catagoris);
    }
    public function unpublish_catagory($cat_id){
        //dd($cat_id);
        $catagory = Mcategory::find($cat_id);
        //dd($catagory);
       $catagory->mpublication_status=0;
       $catagory->save();
       return back()->with('Status','unpublish successfully ');

    }
    public function publish_catagory($cat_id){
        //dd($cat_id);
       $catagory = Mcategory::find($cat_id);
        //dd($catagory);
       $catagory->mpublication_status=1;
       $catagory->save();
       return back()->with('Status','publish successfully');
    }
    public function delete_catagory($cat_id){
        //dd($cat_id);
       $catagory = Mcategory::find($cat_id);
        //dd($catagory);
       $catagory->delete();
       return back()->with('Status','Delete successfully');
    }
    public function edit_catagory($cat_id){
        //dd($cat_id);
       $catagory = Mcategory::find($cat_id);
       return view('admin.medicine.edit_catagory',['catagory'=>$catagory]);     //with('catagoris',$catagoris);
       return back()->with('Status','Delete successfully');
    }
    public function mcatagory_update(Request $request){
         //dd($request);
         $validatedData = $request->validate([
            'mcatagory_name' => 'required|unique:mcategories,mcatagory_name',
            'mcatagory_describtion' => 'required',
            'mpublication_status' => 'required',
        ]);
         $catagory = Mcategory::find($request->mcatagory_id);
         $catagory->mcatagory_name = $request->mcatagory_name;
         $catagory->mcatagory_describtion = $request->mcatagory_describtion;
         $catagory->mpublication_status = $request->mpublication_status;
         $catagory->save();
         //return back()->with('update_Status','update successfully');
         return redirect('mcatagoy/catagory')->with('Status','update succesfull');
    }
}
