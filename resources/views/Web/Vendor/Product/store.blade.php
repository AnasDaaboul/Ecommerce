@extends('Web.Layouts.dashbord')
@section('title' , 'Update')
@section('content')

<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
      <div class="col-lg-8 d-flex align-items-strech">
        <div class="card w-100">
          <div class="card-body">
            <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
              <div class="mb-3 mb-sm-0">
                <h5 class="card-title fw-semibold">{{ __('locale.Update') }}</h5>
              </div>

            </div>
            <div>
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
                @endif
                <form action="{{ route('product.update' , ['product' => $id ]) }}" method="Post" enctype="multipart/form-data">
                    @csrf
                    @method('Put')
                    @foreach ($products as $product)
                    <input type="hidden" name="product" value="{{ $product?->id }}">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{ __('locale.Name') }}:</label>
                        <input type="text" class="form-control" name="name_{{app()->getLocale() }}" value="{{$product?->name}}"  id="exampleFormControlInput1" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{ __('locale.Title') }}:</label>
                        <input type="text" class="form-control" name="title_{{app()->getLocale() }}" value="{{$product?->title}}"  id="exampleFormControlInput1" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{ __('locale.Image') }}:</label>
                        <input type="file" class="form-control" name="images[]" value="{{$product?->getFirstMediaUrl('cover')}}" id="exampleFormControlInput1" multiple>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{ __('locale.Description') }}:</label>
                        <input type="text" class="form-control" name="description_{{app()->getLocale() }}" value="{{$product?->description}}"  id="exampleFormControlInput1" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{ __('locale.Price') }}:</label>
                        <input type="number" class="form-control" name="price" value="{{$product?->price}}"  id="exampleFormControlInput1" placeholder="Mobile Number">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{ __('locale.Discount') }}:</label>
                        <input type="number" class="form-control" name="discount" value="{{$product?->discount}}"  id="exampleFormControlInput1" placeholder="Mobile Number">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{ __('locale.dis_amount') }}:</label>
                        <input type="number" class="form-control" name="dis_amount" value="{{$product?->dis_amount}}"  id="exampleFormControlInput1" placeholder="Mobile Number">
                    </div>

                    @endforeach
                    <div class="text-center m-3">
                        <button type="submit" class="btn btn-outline-success">{{ __('locale.Update') }}</button>
                    </div>

                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
