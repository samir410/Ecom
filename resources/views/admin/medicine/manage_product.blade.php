@extends('admin.layout.master')
@section('title')
Manage catagory
@endsection

@section('content')

@if(session('Status'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{session('Status')}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


<div class="content mt-3" style="width: 1000px;">
            <div class="animated fadeIn" >
                <div class="row" >
                <div class="col-lg-6">
                    <div class="card" style="width: 1000px;">
                        <div class="card-header" >
                            <strong class="card-title">Manage product</strong>
                        </div>
                        <div class="card-body" style="width: 1000px;">
                <table class="table table-responsive" style="width: 900px;">
                              <thead>
                                <tr>
                                  <th scope="col">Product ID</th>
                                 
                                  <th scope="col">Product name</th>
                                  <th scope="col">Category id</th>
                                  <th scope="col">Product short describtion</th>
                                  <th scope="col">Product long describtion</th>
                                  <th scope="col">Product price</th>
                                  <th scope="col">Product Image</th>
                                  <th scope="col">Created date</th>
                                  <th scope="col">Publication status</th>
                                  <th scope="col">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                    @foreach($products as $product)
                           <tr>
                              <th scope="row">{{$product->id}}</th>
                              <td>{{$product->product_name}}</td>
                              <td>{{$product->catagory_id}}</td>
                              <td>{{$product->product_short_describtion}}</td>
                              <td>{{$product->product_long_describtion}}</td>
                              <td>{{$product->product_price}}</td>
                              <td>
                              <img src="{{asset('uploads')}}/{{$product->product_image}}" class="img-fluid w-100">
                              </td>
                              <td>{{$product->created_at}}</td>
                              <td>{{$product->publication_status==1? 'published':'unpublished'}}</td>  
                              <td>
                               <div class="btn-group" role="group" aria-label="Button group">
                                @if($product->publication_status == 1)
                                 <a class="btn btn-outline-danger" href="{{route('unpublish_product',['pro_id'=>$product->id])}}">Unpublish</a>
                                @else
                                 <a class="btn btn-outline-success" href="{{route('publish_product',['pro_id'=>$product->id])}}">Publish</a>
                                @endif
                                <a class="btn btn-outline-primary" href="{{route('edit_product',['pro_id'=>$product->id])}}">Edit</a>
                                <a class="btn btn-outline-warning" href="{{route('delete_product',['pro_id'=>$product->id])}}">Delete</a>
                                
                                 </div>
                               </td>
                           </tr>
                          @endforeach
                      </tbody>
                </table>
                  {{$products->links()}}
               
                        </div>
                    </div>
                </div>

                </div>
            </div><!-- .animated -->
        </div>
     
@endsection