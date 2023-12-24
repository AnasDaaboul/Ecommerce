@extends('Web.Layouts.dashbord')
@section('title' , 'Add Images')
@section('content')

<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
      <div class="col-lg-8 d-flex align-items-strech">
        <div class="card w-100">
          <div class="card-body">
            <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
              <div class="mb-3 mb-sm-0">
                <h5 class="card-title fw-semibold">{{ __('locale.AddImages') }}:</h5>
              </div>

            </div>
            <div>
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
                @endif
                <form action="{{ route('add_image' , ['id' => $id ]) }}" method="Post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" class="form-control" name="id" value="{{$products->id}}" id="exampleFormControlInput1">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"> {{ __('locale.Image') }}:</label>
                        <input type="file" class="form-control" name="images[]" id="exampleFormControlInput1" multiple>
                    </div>
                    <div class="text-center m-3">
                        <button type="submit" class="btn btn-outline-success">{{ __('locale.Add') }}</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
