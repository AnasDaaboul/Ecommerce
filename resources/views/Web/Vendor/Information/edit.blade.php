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
                <form action="{{ route('information.update' , ['information' => $id ]) }}" method="Post" enctype="multipart/form-data">
                    @csrf
                    @method('Put')
                    @foreach ($vendor as $v)
                    <input type="hidden" name="user" value="{{ $v?->id }}">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"> {{ __('locale.Name') }}:</label>
                        <input type="text" class="form-control" name="name" value="{{$v -> name}}"  id="exampleFormControlInput1" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"> {{ __('locale.Image') }}:</label>
                        <input type="file" class="form-control" name="image" value="{{$v->getFirstMediaUrl('profile')}}" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"> {{ __('locale.email') }}:</label>
                        <input type="email" class="form-control" name="email" value="{{$v -> email}}"  id="exampleFormControlInput1" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"> {{ __('locale.Phone') }}:</label>
                        <input type="number" class="form-control" name="phone" value="{{$v -> phone}}"  id="exampleFormControlInput1" placeholder="Mobile Number">
                    </div>
                    <div>
                        <label for="exampleFormControlInput1" class="form-label"> {{ __('locale.City') }}:</label>
                        <select name="city_id" class="form-select form-select-sm" aria-label=".form-select-sm example"required>
                            <option value="{{$v -> city_id}}"selected>{{$v->city->name}}</option>
                            @foreach ($cities as $city )
                                <option value="{{$city -> id}}">{{$city->name}}</option>
                            @endforeach
                        </select>
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
