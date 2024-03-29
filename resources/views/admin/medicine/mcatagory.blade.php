@extends('admin.layout.master')
@section('content')

@if(session('Catagory_add_succesfull'))

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{session('Catagory_add_succesfull')}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('mcatagory_save')}}" method="post">
@csrf
<div class="col-lg-6">
         <div class="card" style="width: 700px;">
        <div class="card-header">
         <strong>Add catagory</strong> 
        </div>
        <div class="card-body card-block" style="width: 700px;">




  <div class="form-group row">
    <label for="mcatagory_name" class="col-sm-2 col-form-label">Catagory name</label>
    <div class="col-sm-10">
      <input type="text" name="mcatagory_name" class="form-control" id="mcatagory_name" >
    </div>
  </div>

  <div class="form-group row">
    <label for="mcatagory_describtion" class="col-sm-2 col-form-label">Catagory describtion</label>
    <div class="col-sm-10">
    <textarea class="form-control" id="mcatagory_describtion" name="mcatagory_describtion"></textarea>
    </div>
  </div>

  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Publication status</legend>
      <div class="col-sm-10">

        <div class="form-check">
          <input class="form-check-input" type="radio" name="mpublication_status" id="mpublication_status" value="1">
          <label class="form-check-label" for="mpublication_status">
            published
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="mpublication_status" id="mpublication_status" value="0">
          <label class="form-check-label" for="mpublication_status">
           unpublished
          </label>
        </div>

      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>

  </div>
                     
</div>
 </div>

</form>
  @endsection