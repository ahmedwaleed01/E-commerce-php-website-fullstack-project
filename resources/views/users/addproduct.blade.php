@extends('layouts.navbar')


@section('content')

<div class="container">
<h1 class="text-center">ADD PRODUCT</h1>
<form action="{{route('users.store')}}" method="post">
    <!-- <div class="form-row align-items-center"> -->
    @csrf 
        <div class="col-md-4 mb-3">
            <h3><label for="validationTooltip01">Product name</label></h3>
            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Product name" name='name'>
            @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-4 mb-3">
           <h3> <label for="validationTooltip02">Price</label></h3>
            <input type="text" class="form-control @error('price') is-invalid @enderror"  placeholder="Price"  name='price'>
            @error('price')
                 <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
            <div class="form-group my-5">
              <label for="exampleFormControlFile1">Product Image</label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1" name='filename'>
            <!-- @error('image')
                 <div class="alert alert-danger w-50">{{ $message }}</div>
            @enderror -->
            </div>
      
      <div class="col-auto my-5">
        <label class="mr-sm-2" for="inlineFormCustomSelect">Category</label>
        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name='category'>
          <option selected>Choose...</option>
          <option value="womenproduct">womenproduct</option>
          <option value="menproduct">menproduct</option>
          <option value="feetwear">feetwear</option>
          <option value="accessories">accessories</option>
        </select>
      </div>
    

      <div class="col-auto my-5">
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
    <!-- </div> -->
  </form>
</div>
@endsection