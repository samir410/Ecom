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


<div class="content mt-3" style="width: 700px;">
            <div class="animated fadeIn" >
                <div class="row" >
                <div class="col-lg-6">
                    <div class="card" style="width: 800px;">
                        <div class="card-header" >
                            <strong class="card-title">Manage catagory</strong>
                        </div>
                        <div class="card-body" style="width: 700px;">
                            <table class="table" style="width: 700px;">
                              <thead>
                                <tr>
                                  <th scope="col">Catagory ID</th>
                                  <th scope="col">Catagory name</th>
                                  <th scope="col">Catagory describtion</th>
                                  <th scope="col">Current date</th>
                                  <th scope="col">Publication status</th>
                                  <th scope="col">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                        @foreach($catagoris as $catagory)
                           <tr>
                              <th scope="row">{{$catagory->id}}</th>
                              <td>{{$catagory->mcatagory_name}}</td>
                              <td>{{$catagory->mcatagory_describtion}}</td>
                              <td>{{$catagory->created_at}}</td>
                              <td>{{$catagory->mpublication_status==1? 'published':'unpublished'}}</td>     
                               <td>
                               <div class="btn-group" role="group" aria-label="Button group">
                                @if($catagory->mpublication_status == 1)
                                 <a class="btn btn-outline-danger" href="{{route('unpublish_catagory',['cat_id'=>$catagory->id])}}">Unpublish</a>
                                @else
                                 <a class="btn btn-outline-success" href="{{route('publish_catagory',['cat_id'=>$catagory->id])}}">Publish</a>
                                @endif
                                <a class="btn btn-outline-primary" href="{{route('edit_catagory',['cat_id'=>$catagory->id])}}">Edit</a>
                                <a class="btn btn-outline-warning" href="{{route('delete_catagory',['cat_id'=>$catagory->id])}}">Delete</a>
                                
                               </div>
                               </td>
                           </tr>
                          @endforeach
                      </tbody>
                  </table>
                  {{$catagoris->links()}}
                        </div>
                    </div>
                </div>

                </div>
            </div><!-- .animated -->
        </div>
     
@endsection