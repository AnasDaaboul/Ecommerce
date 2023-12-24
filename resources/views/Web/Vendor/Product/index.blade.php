@extends('Web.Layouts.dashbord')
@section('title','Products')

@section('content')
<div class="container-fluid">

    <div class="row">
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">{{ __('locale.Products') }}</h5>
            <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">{{ __('locale.Id') }}</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">{{ __('locale.Images') }}</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">{{ __('locale.Name') }}</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">{{ __('locale.Description') }}</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">{{ __('locale.Price') }}</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">{{ __('locale.NumberOfOrders') }}</h6>
                      </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">{{ __('locale.Category') }}</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">{{ __('locale.Discount') }}</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">{{ __('locale.dis_amount') }}</h6>
                      </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Action</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">{{$product->id}}</h6>
                            </td>
                            <td class="border-bottom-0">
                                @foreach ($product->media as $image)
                                    <img src="{{$image->getUrl('thumb')}}" alt="product">
                                @endforeach
                                {{-- <img src="{{$product->getFirstMediaUrl('cover')}}" alt="product" width="100" height="100"> --}}
                            </td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1">{{$product->name}}</h6>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{$product->description}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{$product->price}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{count($product->orders)}}</p>
                            </td>
                            <td class="border-bottom-0">
                            @foreach ($product->categories as $category)
                                <p class="mb-0 fw-normal">{{$category->name}}</p>
                            @endforeach
                            </td>

                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{$product->discount}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{$product->dis_amount}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <form action="{{ route('image', [$product->id]) }}" method="GET">
                                    @csrf
                                    <button class="badge bg-primary rounded-5" type="submit">{{ __('locale.AddImages') }}</button>
                                </form>
                                <form action="{{ route('vproduct.show', [$product->id]) }}" method="GET">
                                    @csrf
                                    <button class="badge bg-info rounded-5" type="submit">{{ __('locale.Show') }}</button>
                                </form>
                                <form action="{{ route('vproduct.edit', [$product->id]) }}" method="GET">
                                    @csrf
                                    <button class="badge bg-success rounded-5" type="submit">{{ __('locale.Update') }}</button>
                                </form>
                                <form action="{{ route('vproduct.destroy', [$product->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="badge bg-danger rounded-5" type="submit">{{ __('locale.Delete') }}</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
                <div class="d-flex">
                    {!! $products->links() !!}
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
