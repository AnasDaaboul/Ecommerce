@extends('Web.Layouts.dashbord')
@section('title','Admin')

@section('content')
<div class="container-fluid">

    <div class="row">
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">{{ __('locale.Admin') }}</h5>
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
                    @foreach ($admins as $admin)
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">{{$admin->id}}</h6>
                            </td>
                            {{session()->put('user', $admin->getFirstMediaUrl('profile','profile_image'))}}
                            <td class="border-bottom-0">
                                <img src="{{$admin->getFirstMediaUrl('profile','profile_image')}}" alt="profile" width="100" height="100" class="rounded-circle">
                            </td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1">{{$admin->name}}</h6>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{$admin->email}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{$admin->phone}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{$admin->city->name}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <form action="{{ route('profile.edit', [$admin->id]) }}" method="GET">
                                    @csrf
                                    <button class="badge bg-success rounded-5" type="submit">{{ __('locale.Update') }}</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
