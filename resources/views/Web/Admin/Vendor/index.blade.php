@extends('Web.Layouts.dashbord')
@section('title','Vendors')

@section('search')
    <form action="/admin/vendor" method="get">
        <input type="search" class="form-control" placeholder="Search.." name="search">
        <button type="submit" class="form-control badge bg-info rounded-5">Search</button>
    </form>
@endsection

@section('content')
<div class="container-fluid">

    <div class="row">
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">{{ __('locale.Vendors') }}</h5>
            <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">{{ __('locale.Id') }}</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">{{ __('locale.Image') }}</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">{{ __('locale.Name') }}</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">{{ __('locale.email') }}</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">{{ __('locale.Phone') }}</h6>
                    </th>
                     <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">{{ __('locale.City') }}</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Action</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($vendors as $vendor)
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">{{$vendor->id}}</h6>
                            </td>
                            <td class="border-bottom-0">
                                <img src="{{$vendor->getFirstMediaUrl('profile')}}" alt="profile" width="100" height="100" class="rounded-circle">
                            </td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1">{{$vendor->name}}</h6>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{$vendor->email}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{$vendor->phone}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{$vendor->city->name ?? null}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <form action="{{ route('vendors.show', [$vendor->id]) }}" method="GET">
                                    @csrf
                                    <button class="badge bg-info rounded-5" type="submit">Show</button>
                                </form>
                                <form action="{{ route('vendors.edit', [$vendor->id]) }}" method="GET">
                                    @csrf
                                    <button class="badge bg-success rounded-5" type="submit">Update</button>
                                </form>
                                <form action="{{ route('vendors.destroy', [$vendor->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="badge bg-danger rounded-5" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
                <div class="d-flex">
                    {!! $vendors->links() !!}
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
