<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Product;
use DB;
use Image;


class ProductController extends Controller
{
    public function product_form(){
        $catagories=DB::table('mcategories')->where('mpublication_status',1)->get();

        return view('admin.medicine.productform',['catagories'=>$catagories]);
    }
    public function product_save(Request $request){
        // $validatedData = $request->validate([
        //     'product_name' => 'required',
        //     'catagory_id' => 'required',
        //     'product_short_describtion' => 'required',
        //     'product_long_describtion' => 'required',
        //     'product_price' => 'required|integer',
        //     'publication_status' => 'required',
    //     // ]);
    //   $present_id =  DB::table('products')->insertGetId([
    //        'product_name' => $request->product_name,
    //        'catagory_id' => $request->catagory_id,
    //        'product_short_describtion' => $request->product_short_describtion,
    //        'product_long_describtion' => $request->product_long_describtion,
    //        'product_price' => $request->product_price,
    //        'publication_status' => $request->publication_status,
    //    ]);
     $product = new Product;
     $product->product_name = $request->product_name;
     $product->catagory_id = $request->catagory_id;
     $product->product_short_describtion = $request->product_short_describtion;
     $product->product_long_describtion = $request->product_long_describtion;
     $product->product_price = $request->product_price;
     $product->publication_status = $request->publication_status;
 

     if($request->hasFile('product_image')){
         //$file_name=$present_id.'.'.$request->product_image->getClientOriginalExtension();
         $product_image = $request->file('product_image');
         $filename = time() . '.' . $product_image->getClientOriginalExtension();
         $location = public_path('uploads/' . $filename);
         Image::make($product_image)->resize(800, 400)->save($location);
         $product->product_image = $filename; 
     }
     $product->save();
     
    return back()->with('Product_add_succesfull','successfully added');
     
    }
    public function product_manage(){
        $products=Product::paginate(4);
        return view('admin.medicine.manage_product',['products'=>$products]);
    }
    ///////
    public function unpublish_product($pro_id){
        //dd($cat_id);
        $product = Product::find($pro_id);
        //dd($catagory);
       $product->publication_status=0;
       $product->save();
       return back()->with('Status','unpublish successfully ');

    }
    public function publish_product($pro_id){
        //dd($cat_id);
       $product = Product::find($pro_id);
        //dd($catagory);
       $product->publication_status=1;
       $product->save();
       return back()->with('Status','publish successfully');
    }

    public function delete_product($pro_id){
        //dd($cat_id);
       $product = Product::find($pro_id);
        //dd($catagory);
       $product->delete();
       return back()->with('Status','Delete successfully');
    }

    public function edit_product($pro_id){
        //dd($cat_id);
       $catagories=DB::table('mcategories')->where('mpublication_status',1)->get();
       $product = Product::find($pro_id);
       return view('admin.medicine.edit_product',['product'=>$product,'catagories'=>$catagories]);     //with('catagoris',$catagoris);
       return back()->with('Status','Edit successfully');
    }
    public function product_update(Request $request){
         //dd($request);
        //return $request->all();
         $validatedData = $request->validate([
            'product_name' => 'required',
            'catagory_id' => 'required',
            'product_short_describtion' => 'required',
            'product_long_describtion' => 'required',
            'product_price' => 'required|integer',
            'publication_status' => 'required',
        ]);
         $product = Product::find($request->product_id);
         $product->product_name = $request->product_name;
         $product->catagory_id = $request->catagory_id;
         $product->product_short_describtion = $request->product_short_describtion;
         $product->product_long_describtion = $request->product_long_describtion;
         $product->product_price = $request->product_price;
         $product->publication_status = $request->publication_status;
         $product->save();
         //return back()->with('update_Status','update successfully');
         return redirect('/product/manage')->with('Status','update succesfull');
    }

    public function delete_product_manage(){
        $softDeleteproducts = Product::onlyTrashed()->paginate(4);
        return view('admin.medicine.delete_manage_product',['softDeleteproducts'=>$softDeleteproducts]);
    }
    public function restore_product_manage($pro_id)
    {
      Product::withTrashed()->where('id',$pro_id)->restore();
        return back()->with('Status','restore succesfull');
    }
    public function force_delete($pro_id){
        Product::withTrashed()->where('id',$pro_id)->forceDelete();
        return back()->with('Status','delete succesfull');
    }
}

