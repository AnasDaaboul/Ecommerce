@extends('Web.Layouts.dashbord')
@section('title','Category')

@section('content')
<div class="container-fluid">

    <div class="row">
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">{{ __('locale.Category') }}</h5>
            <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">{{ __('locale.Id') }}</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">{{ __('locale.Name') }}</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">{{ __('locale.NumberOfProducts') }}</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Action</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">{{$category->id}}</h6>
                            </td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1">{{$category->name}}</h6>
                            </td>

                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{count($category->products)}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <form action="{{ route('categories.show', [$category->id]) }}" method="GET">
                                    @csrf
                                    <button class="badge bg-info rounded-5" type="submit">{{ __('locale.Show') }}</button>
                                </form>
                                <form action="{{ route('categories.edit', [$category->id]) }}" method="GET">
                                    @csrf
                                    <button class="badge bg-success rounded-5" type="submit">{{ __('locale.Update') }}</button>
                                </form>
                                {{-- <form action="{{ route('categories.destroy', [$category->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="badge bg-danger rounded-5" type="submit">Delete</button>
                                </form> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
                <div class="d-flex">
                    {!! $categories->links() !!}
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
