<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
    <ul id="sidebarnav">
      <li class="sidebar-item">
          <a class="sidebar-link" href={{ route('profile.index') }} aria-expanded="false">
            <span>
              <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">{{__('locale.Home') }}</span>
          </a>
        </li>

      <li class="sidebar-item">
        <a class="sidebar-link" href={{ route('vendors.index') }} aria-expanded="false">
          <span>
            <i class="ti ti-layout-dashboard"></i>
          </span>
          <span class="hide-menu">{{ __('locale.Vendors') }}</span>
        </a>
      </li>
      <li class="sidebar-item">
          <a class="sidebar-link" href={{ route('user.index') }} aria-expanded="false">
            <span>
              <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">{{ __('locale.Users') }}</span>
          </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href={{ route('vendors.create') }} aria-expanded="false">
          <span>
            <i class="ti ti-file-description"></i>
          </span>
          <span class="hide-menu">{{ __('locale.AddVendor') }}</span>
        </a>
      </li>
      <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('orders') }}" aria-expanded="false">
            <span>
              <i class="ti ti-article"></i>
            </span>
            <span class="hide-menu">{{ __('locale.ShowOrders') }}</span>
          </a>
      </li>
      <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('products') }}" aria-expanded="false">
            <span>
              <i class="ti ti-article"></i>
            </span>
            <span class="hide-menu">{{ __('locale.ShowProducts') }}</span>
          </a>
      </li>
    </ul>
</nav>
