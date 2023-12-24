
@extends('Layouts.main')
@section('title','edit project')
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
    Edit & Update
  </div>
  <div class="card-body">
 <Web.Components.error>
      <form  method="post"  action="{{ route('product.update',$product->id) }}">
          <div class="form-group">
              @csrf
                @method('PATCH')

            <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="{{ $product->name }}"/>
          </div>
          <div class="form-group">
              <label for="price">Price</label>
              <input type="text" class="form-control" name="price" value="{{ $product->price }}"/>
          </div>
          <div class="form-group">
            <label for="category_id">category_id</label>
            <input type="text" class="form-control" name="category_id" value="{{ $product->category_id }}"/>
        </div>



          <button type="submit" class="btn btn-block btn-danger">Update Product</button>
      </form>
  </div>
</div>
@endsection
