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
                    <form action="{{ route('value_option.update', ['value_option' => $id ]) }}" method="Post">
                        @csrf
                        @method('Put')
                        @foreach ($value_option as $value)
                        <div class="mb-3">
                            <input type="hidden" name="value" value="{{ $value->id }}">
                            <label for="exampleFormControlInput1" class="form-label">{{ __('locale.Name') }}:</label>
                            <input type="text" class="form-control" name="name_{{app()->getLocale() }}" value="{{$value->name}}" id="exampleFormControlInput1" placeholder="Name">
                        </div>
                        <div>
                            <label for="exampleFormControlInput1" class="form-label">{{ __('locale.Option') }}:</label>
                            <select name="option_id" class="form-select form-select-sm" aria-label=".form-select-sm example"required>
                                <option value="{{$value -> option_id}}"selected>{{$value->option->name}}</option>
                                @foreach ($options as $option )
                                    <option value="{{$option -> id}}">{{$option->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="exampleFormControlInput1" class="form-label">{{ __('locale.Product') }}:</label>
                            <select name="product_id" class="form-select form-select-sm" aria-label=".form-select-sm example"required>
                                <option value="{{$value -> product_id}}"selected>{{$value->product->name}}</option>
                                @foreach ($products as $product )
                                    <option value="{{$product -> id}}">{{$product->name}}</option>
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
