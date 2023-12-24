@extends('Web.Layouts.dashbord')
@section('title','Update')

@section('content')
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
        <div class="col-lg-8 d-flex align-items-strech">
            <div class="card w-100">
            <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                    <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold">{{ __('locale.Update') }}:</h5>
                    </div>
                </div>
                <div>
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                    @endif
                    <form action="{{ route('options.update', ['option' => $id ]) }}" method="Post">
                        @csrf
                        @method('Put')
                        @foreach ($options as $option)
                        <div class="mb-3">
                            <input type="hidden" name="option" value="{{ $option->id }}">
                            <label for="exampleFormControlInput1" class="form-label"> {{ __('locale.Name') }}:</label>
                            <input type="text" class="form-control" name="name_{{app()->getLocale() }}" value="{{$option->name}}" id="exampleFormControlInput1" placeholder="Name">
                        </div>
                        <div>
                            <label for="exampleFormControlInput1" class="form-label"> {{ __('locale.Category') }}:</label>
                            <select name="category_id" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                                <option value="{{$option -> category_id}}"selected >{{$option->category->name}}</option>
                                @foreach ($categories as $category )
                                    <option value="{{$category -> id}}">{{$category->name}}</option>
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
