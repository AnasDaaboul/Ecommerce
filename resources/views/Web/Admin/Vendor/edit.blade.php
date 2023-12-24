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
                <h5 class="card-title fw-semibold">Update Vendor</h5>
              </div>

            </div>
            <div>
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
                @endif
                <form action="{{ route('vendors.update' , ['vendor' => $id ]) }}" method="Post">
                    @csrf
                    @method('Put')
                    @foreach ($vendor as $p)
                    <input type="hidden" name="user" value="{{ $p?->id }}">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"> Name:</label>
                        <input type="text" class="form-control" name="name" value="{{$p -> name}}"  id="exampleFormControlInput1" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"> Email:</label>
                        <input type="email" class="form-control" name="email" value="{{$p -> email}}"  id="exampleFormControlInput1" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"> Mobile Number:</label>
                        <input type="number" class="form-control" name="phone" value="{{$p -> phone}}"  id="exampleFormControlInput1" placeholder="Mobile Number">
                    </div>
                    <div>
                        <label for="exampleFormControlInput1" class="form-label"> City:</label>
                        <select name="city_id" class="form-select form-select-sm" aria-label=".form-select-sm example"required>
                            <option value="{{$p -> city_id}}"selected>{{$p->city->name}}</option>
                            @foreach ($cities as $city )
                                <option value="{{$city -> id}}">{{$city->name}}</option>
                            @endforeach
                            </select>
                    </div>
                    @endforeach
                    <div class="text-center m-3">
                        <button type="submit" class="btn btn-outline-success">Update</button>
                    </div>

                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
