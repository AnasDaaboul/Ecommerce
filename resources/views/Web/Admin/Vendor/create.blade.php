@extends('Web.Layouts.dashbord')
@section('title','Add Vendor')

@section('content')

<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row mt-5">
        <div class="col-lg-8 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
            <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                <div class="mb-3 mb-sm-0">
                <h5 class="card-title fw-semibold">{{ __('locale.AddVendor') }}</h5>
                </div>

            </div>
            <div>
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
                @endif
                <form action="{{ route('vendors.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{ __('locale.CompanyName') }}:</label>
                        <input type="text" class="form-control"  name="company_name" id="exampleFormControlInput1" placeholder="Company Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{ __('locale.Name') }}:</label>
                        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{ __('locale.Image') }}:</label>
                        <input type="file" class="form-control" name="image" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{ __('locale.email') }}:</label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{ __('locale.Password') }}:</label>
                        <input type="password" class="form-control" name="password" id="exampleFormControlInput1" placeholder="******">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{ __('locale.Phone') }}:</label>
                        <input type="number" class="form-control" name="phone" id="exampleFormControlInput1" placeholder="Mobile Number">
                    </div>

                    <div>
                        <label for="exampleFormControlInput1" class="form-label">{{ __('locale.City') }}:</label>
                        <select name="city_id" class="form-select form-select-sm" aria-label=".form-select-sm example"required>
                            <option selected disabled>Select your city</option>
                            @foreach ($cities as $city )
                                <option value="{{$city -> id}}">{{$city -> name}}</option>
                            @endforeach
                            </select>
                    </div>
                    <div class="text-center m-3">
                        <button type="submit" class="btn btn-outline-primary">{{ __('locale.Add') }}</button>
                    </div>

                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection

