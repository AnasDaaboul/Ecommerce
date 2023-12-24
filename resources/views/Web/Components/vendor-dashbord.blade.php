<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
    <ul id="sidebarnav">
      <li class="sidebar-item">
          <a class="sidebar-link" href={{ route('information.index') }} aria-expanded="false">
            <span>
              <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">{{ __('locale.Profile') }}</span>
          </a>
      </li>
      <li class="sidebar-item">
          <a class="sidebar-link" href={{ route('categories.index') }} aria-expanded="false">
            <span>
              <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">{{ __('locale.Category') }}</span>
          </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href={{ route('vproduct.index') }} aria-expanded="false">
          <span>
            <i class="ti ti-layout-dashboard"></i>
          </span>
          <span class="hide-menu">{{ __('locale.Products') }}</span>
        </a>
      </li>
      <li class="sidebar-item">
          <a class="sidebar-link" href={{ route('options.index') }} aria-expanded="false">
            <span>
              <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">{{ __('locale.Options') }}</span>
          </a>
      </li>
      <li class="sidebar-item">
          <a class="sidebar-link" href={{ route('value_option.index') }} aria-expanded="false">
            <span>
              <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">{{ __('locale.ValueOption') }}</span>
          </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href={{ route('categories.create') }} aria-expanded="false">
          <span>
            <i class="ti ti-file-description"></i>
          </span>
          <span class="hide-menu">{{ __('locale.AddCategory') }}</span>
        </a>
      </li>
      <li class="sidebar-item">
          <a class="sidebar-link" href={{ route('vproduct.create') }} aria-expanded="false">
            <span>
              <i class="ti ti-file-description"></i>
            </span>
            <span class="hide-menu">{{ __('locale.AddProduct') }}</span>
          </a>
      </li>
      <li class="sidebar-item">
          <a class="sidebar-link" href={{ route('options.create') }} aria-expanded="false">
            <span>
              <i class="ti ti-file-description"></i>
            </span>
            <span class="hide-menu">{{ __('locale.AddOption') }}</span>
          </a>
      </li>
     <li class="sidebar-item">
          <a class="sidebar-link" href={{ route('value_option.create') }} aria-expanded="false">
            <span>
              <i class="ti ti-file-description"></i>
            </span>
            <span class="hide-menu">{{ __('locale.AddValue') }}</span>
          </a>
      </li>
    </ul>
</nav>
