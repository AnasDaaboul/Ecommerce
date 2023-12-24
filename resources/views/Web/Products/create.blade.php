
@extends('Layouts.main')
@section('title',)
@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>
<div class="card push-top">
  <div class="card-header">
    Add Product
  </div>
  <div class="card-body">
 <Web.Components.error>
     <form method="POST" action="{{ route('product.store') }}">
      @csrf
        {{-- <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name"/>
        </div> --}}
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" name="price"/>
        </div>
        <div class="form-group">
          <label for="category_id">Category_ID</label>
          <input type="text" class="form-control" name="category_id"/>
      </div>

      <div class="form-group">
        <label for="dis_amount">Disamount</label>
        <input type="text" class="form-control" name="dis_amount"/>
    </div>

    <div class="form-group">
      <label for="discount">Discount</label>
      <input type="text" class="form-control" name="discount"/>
   </div>

     <div class="form-group">
    <label for="vendor_id">Vendor_id</label>
    <input type="text" class="form-control" name="vendor_id"/>
   </div>

   {{-- <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" name="description"/>
   </div> --}}
      <div class="mb-3">
        <label>Image:</label>
        <input type="file" name="image" class="form-control">
    </div>
      {{-- <form method="POST" action="{{ route('image.upload'),$product->id }}" enctype="multipart/form-data">
        @csrf
        <div class="sm:col-span-6">
          <label for="title" class="block text-sm font-medium text-gray-700">Product Image</label>
          <div class="nt-1">
            <input type="file" id="image" name="image" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-6">
          </div>
        </div>
        <div class="sm:col-span-6 pt-5">
          <button class="bg-green-500">Upload</button>
        </div>
      </form> --}}


        <button type="submit" class="btn btn-block btn-danger">Create Product</button>
    </form>
  </div>
</div>
@endsection
