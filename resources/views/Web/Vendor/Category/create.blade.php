@extends('Web.Layouts.dashbord')
@section('title','Create')

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
                    <form action="{{ route('categories.store') }}" method="Post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"> Name(en):</label>
                            <input type="text" class="form-control" name="name_en" id="exampleFormControlInput1" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"> {{ __('locale.Name') }}(ar):</label>
                            <input type="text" class="form-control" name="name_ar" id="exampleFormControlInput1" placeholder="Name">
                        </div>
                        <div class="text-center m-3">
                            <button type="submit" class="btn btn-outline-success">{{ __('locale.Send') }}</button>
                        </div>

                    </form>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection
