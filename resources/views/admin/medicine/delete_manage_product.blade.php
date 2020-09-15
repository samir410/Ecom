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
<h1 style="background-color:DodgerBlue;">Delete product</h1>


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
                                     <th scope="col">Created date</th>
                                     <th scope="col">Publication status</th>
                                     <th scope="col">Action</th>
                                    </tr>
                                  </thead>
                         <tbody>
                    @foreach($softDeleteproducts as $softDeleteproduct)
                           <tr>
                              <th scope="row">{{$softDeleteproduct->id}}</th>
                              <td>{{$softDeleteproduct->product_name}}</td>
                              <td>{{$softDeleteproduct->catagory_id}}</td>
                              <td>{{$softDeleteproduct->product_short_describtion}}</td>
                              <td>{{$softDeleteproduct->product_long_describtion}}</td>
                              <td>{{$softDeleteproduct->product_price}}</td>
                              <td>{{$softDeleteproduct->created_at}}</td>
                              <td>{{$softDeleteproduct->publication_status==1? 'published':'unpublished'}}</td>  
                              <td>
                               <div class="btn-group" role="group" aria-label="Button group">
                
                               <a class="btn btn-outline-danger" href="{{route('restore_product',['pro_id'=>$softDeleteproduct->id])}}">Restore</a>
                                <a class="btn btn-outline-warning" href="{{route('force_delete',['pro_id'=>$softDeleteproduct->id])}}">Force Delete</a>
                                
                                 </div>
                               </td>
                           </tr>
                          @endforeach
                      </tbody>
                </table>
                  {{$softDeleteproducts->links()}}
               
                        </div>
                    </div>
                </div>

                </div>
            </div><!-- .animated -->
        </div>
     
@endsection