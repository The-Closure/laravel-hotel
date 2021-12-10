<div class="sidebar" data-color="orange" data-background-color="white"
    data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <div class="simple-text logo-normal">
            {{ __('Laravel Hotel') }}
        </div>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li class="nav-item active {{ $activePage == 'users' ? ' active' : '' }}">
                <a class="nav-link collapsed" data-toggle="collapse" href="#users" aria-expanded="false">
                    <i class="material-icons">persons</i>
                    <p>Staffs
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="users">
                    <ul class="nav">
                        <li class="nav-item {{ $activePage == 'my-profile' ? ' active' : '' }} ">
                            <a class="nav-link" href="{{ route('admin.profile.edit') }}">
                                <i class="material-icons"> account_circle</i>
                                <span class="sidebar-normal">my profile </span>
                            </a>
                        </li>
                        <li class="nav-item {{ $activePage == 'All-staffs' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.users.index') }}">
                                <i class="material-icons"> manage_accounts </i>
                                <span class="sidebar-normal"> Staffs Management </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item{{ $activePage == 'Review' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('admin.reviews.index') }}">
                    <i class="material-icons">stars</i>
                    <p>{{ __('Review') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('language') }}">
                    <i class="material-icons">language</i>
                    <p>{{ __('RTL Support') }}</p>
                </a>
            </li>
            <li class="nav-item active {{ $activePage == 'room-services' ? ' active' : '' }}">
                <a class="nav-link collapsed" data-toggle="collapse" href="#room-services" aria-expanded="false">
                    <i class="material-icons">live_help</i>
                    <p>Room Services
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="room-services">
                    <ul class="nav">
                        <li class="nav-item {{ $activePage == 'room-services' ? ' active' : '' }} ">
                            <a class="nav-link" href="{{ route('admin.room-services.index') }}">
                                <i class="material-icons"> live_help</i>
                                <span class="sidebar-normal">all services</span>
                            </a>
                        </li>
                        <li class="nav-item {{ $activePage == 'create-room-service' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.room-services.create') }}">
                                <i class="material-icons"> add </i>
                                <span class="sidebar-normal"> new service </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item{{ $activePage == 'offers' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('admin.offers.index') }}">
                    <i class="material-icons">percent</i>
                    <p>{{ __('offers') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'setting' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('admin.settings.index') }}">
                    <i class="material-icons">settings</i>
                    <p>{{ __('settings') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
