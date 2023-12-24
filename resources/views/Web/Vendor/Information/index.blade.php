@extends('Web.Layouts.dashbord')
@section('title','Vendor')

@section('content')
<div class="container-fluid">

    <div class="row">
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">{{ __('locale.Profile') }}</h5>
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
                        <h6 class="fw-semibold mb-0">{{ __('locale.CompanyName') }}</h6>
                      </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Action</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($user as $v)
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">{{$v->id}}</h6>
                            </td>
                            {{session()->put('user', $v->getFirstMediaUrl('profile'))}}
                            <td class="border-bottom-0">
                                <img src="{{$v->getFirstMediaUrl('profile')}}" alt="profile" width="100" height="100" class="rounded-circle">
                            </td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1">{{$v->name}}</h6>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{$v->email}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{$v->phone}}</p>

                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{$v->city->name}}</p>
                            </td>
                            @foreach ($vendor as $company)
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{$company -> company_name}}</p>
                            </td>
                            @endforeach
                            <td class="border-bottom-0">
                                <form action="{{ route('information.edit', [$v->id]) }}" method="GET">
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
