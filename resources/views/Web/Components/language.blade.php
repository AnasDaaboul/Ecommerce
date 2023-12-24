<ul class="nav navbar-nav align-items-center ms-auto">
    <li class="nav-item dropdawn dropdown-language">
        <a class="nav-link dropdown-toggle" id="dropdown-flag" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @if (app()->getLocale() == 'ar')
                <i class="flag-icon flag-icon-sa"></i><span class="selected-language">AR</span>
            @else
                <i class="flag-icon flag-icon-us"></i><span class="selected-language">EN</span>
            @endif
        </a>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-flag">
            <a class="dropdown-item"
                @if (app()->getLocale() == 'ar')
                    href="{{route(\Illuminate\Support\Facades\Route::currentRouteName(), ['id?','locale'=>'en'])}}"
                @endif
                >
                <i class="flag-icon flag-icon-us"></i>
                English
            </a>
            <a class="dropdown-item"
            @if (app()->getLocale() == 'en')
                href="{{route(\Illuminate\Support\Facades\Route::currentRouteName(), ['id?','locale'=>'ar'])}}"
            @endif
            >
            <i class="flag-icon flag-icon-sa"></i>
            العربية
            </a>
        </div>
    </li>
</ul>
