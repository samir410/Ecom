@extends('admin.layout.master')
@section('titel')
Add product
@endsection
@section('content')

@if(session('Product_add_succesfull'))

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{session('Product_add_succesfull')}}</strong> 
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

<form action="{{route('product_save')}}" method="post" name="product_form" enctype="multipart/form-data">
@csrf
<div class="col-lg-6">
         <div class="card" style="width: 700px;">
        <div class="card-header">
         <strong>Add Product</strong> 
        </div>
        <div class="card-body card-block" style="width: 700px;">


  <div class="form-group row">
    <label for="product_name" class="col-sm-2 col-form-label">product name</label>
    <div class="col-sm-10">
      <input type="text" value="{{old('product_name')}}" name="product_name" class="form-control" id="product_name" >
      @foreach ($errors->get('product_name') as $massage)
      <span class="text-danger">{{ $massage }}</span>
       @endforeach
    </div>
  </div>
  
  <div class="form-group row">
    <label for="catagory_id" class="col-sm-2 col-form-label">Category name</label>
    <div class="col-sm-10">
      <select name="catagory_id" id="catagory_id" class="form-control">
         <option value="">select a catagory</option>
          @foreach($catagories as $catagory)
          <option value="{{$catagory->id}}">{{$catagory->mcatagory_name}}</option>
          @endforeach
      </select>
      @foreach ($errors->get('catagory_id') as $massage)
           <span class="text-danger">{{ $massage }}</span>
         @endforeach
         
    </div>
  </div>

  <div class="form-group row">
    <label for="product_short_describtion"  class="col-sm-2 col-form-label">Product short describtion</label>
    <div class="col-sm-10">
    <textarea class="form-control" id="product_short_describtion" name="product_short_describtion">{{old('product_short_describtion')}}</textarea>
    @foreach ($errors->get('product_short_describtion') as $massage)
           <span class="text-danger">{{ $massage }}</span>
         @endforeach
    </div>
  </div>

  <div class="form-group row">
    <label for="summary-ckeditor" class="col-sm-2 col-form-label">Product long describtion</label>
    <div class="col-sm-10">
    <textarea class="form-control" id="summary-ckeditor" name="product_long_describtion">{{old('product_long_describtion')}}</textarea>
    @foreach ($errors->get('product_long_describtion') as $massage)
           <span class="text-danger">{{ $massage }}</span>
         @endforeach
    </div>
  </div>

  
  <div class="form-group row">
    <label for="product_price" class="col-sm-2 col-form-label">Product price</label>
    <div class="col-sm-10">
      <input type="text" value="{{old('product_price')}}" name="product_price" class="form-control" id="product_price" >
      @foreach ($errors->get('product_price') as $massage)
           <span class="text-danger">{{ $massage }}</span>
         @endforeach
    </div>
  </div>

  <div class="form-group row">
    <label for="product_image" class="col-sm-2 col-form-label">Product Image</label>
    <div class="col-sm-10">
      <input type="file"  name="product_image" class="form-control" id="product_image" >
      @foreach ($errors->get('product_image') as $massage)
           <span class="text-danger">{{ $massage }}</span>
         @endforeach
    </div>
  </div>

  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Publication status</legend>
      <div class="col-sm-10">

        <div class="form-check">
          <input class="form-check-input" type="radio" name="publication_status" id="publication_status" value="1">
         
          <label class="form-check-label" for="publication_status">
            published
          </label>
          @foreach ($errors->get('publication_status') as $massage)
           <span class="text-danger">{{ $massage }}</span>
         @endforeach
        </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="publication_status" id="publication_status" value="0">
         
          <label class="form-check-label" for="publication_status">
           unpublished
          </label>
          @foreach ($errors->get('publication_status') as $massage)
           <span class="text-danger">{{ $massage }}</span>
           @endforeach
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
<script>
   document.forms['product_form'].elements['catagory_id'].value = {{old('catagory_id')}};
</script>

  @endsection