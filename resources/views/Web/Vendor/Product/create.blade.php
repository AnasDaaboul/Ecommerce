@extends('Web.Layouts.dashbord')
@section('title' , 'Create')
@section('content')

<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
      <div class="col-lg-8 d-flex align-items-strech">
        <div class="card w-100">
          <div class="card-body">
            <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
              <div class="mb-3 mb-sm-0">
                <h5 class="card-title fw-semibold">{{ __('locale.Create') }}:</h5>
              </div>

            </div>
            <div>
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
                @endif
                <form action="{{ route('product.store') }}" method="Post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"> {{ __('locale.Name') }}(en):</label>
                        <input type="text" class="form-control" name="name_en" id="exampleFormControlInput1" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"> {{ __('locale.Title') }}(en):</label>
                        <input type="text" class="form-control" name="title_en" id="exampleFormControlInput1" placeholder="Title">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{ __('locale.Description') }}(en):</label>
                        <input type="text" class="form-control" name="description_en" id="exampleFormControlInput1" placeholder="Description">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"> {{ __('locale.Name') }}(ar):</label>
                        <input type="text" class="form-control" name="name_ar" id="exampleFormControlInput1" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"> {{ __('locale.Title') }}(ar):</label>
                        <input type="text" class="form-control" name="title_ar" id="exampleFormControlInput1" placeholder="Title">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{ __('locale.Description') }}(ar):</label>
                        <input type="text" class="form-control" name="description_ar" id="exampleFormControlInput1" placeholder="Description">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"> {{ __('locale.Image') }}:</label>
                        <input type="file" class="form-control" name="images[]" id="exampleFormControlInput1" multiple>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"> {{ __('locale.Price') }}:</label>
                        <input type="number" class="form-control" name="price" id="exampleFormControlInput1" placeholder="price">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"> {{ __('locale.Discount') }}:</label>
                        <input type="number" class="form-control" name="discount" id="exampleFormControlInput1" placeholder="discount">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"> {{ __('locale.dis_amount') }}:</label>
                        <input type="number" class="form-control" name="dis_amount" id="exampleFormControlInput1" placeholder="dis_amount">
                    </div>
                    <div>
                        <label for="exampleFormControlInput1" class="form-label"> {{ __('locale.Category') }}:</label>
                        <select name="category_id[]" class="form-select form-select-sm" aria-label=".form-select-sm example" multiple required>
                            @foreach ($gategories as $gategory )
                                <option value="{{$gategory -> id}}">{{$gategory->name}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="text-center m-3">
                        <button type="submit" class="btn btn-outline-success">Create</button>
                    </div>

                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
