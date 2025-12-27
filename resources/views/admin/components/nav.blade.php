<header class="page-header row">
    <div class="logo-wrapper d-flex align-items-center col-auto">
        <a href="index.html"><img class="light-logo img-fluid" src="{{ asset('images/favicon.ico') }}" alt="logo" /><img
                class="dark-logo img-fluid" src="{{ asset('images/favicon.ico') }}" alt="logo" /></a>
        <a class="close-btn toggle-sidebar" href="javascript:void(0)">
            <svg class="svg-color">
                <use href="{{ asset('assets/svg/iconly-sprite.svg#Category') }}"></use>
            </svg></a>
    </div>
    <div class="page-main-header col">
        <div class="header-left">
            <h3 style="font-size: 1.4rem" class="text-truncate text-dark font-weight-medium mb-1">
                @php
                    // I'm India so my timezone is Asia/Calcutta
                    date_default_timezone_set('Australia/Sydney');

                    // 24-hour format of an hour without leading zeros (0 through 23)
                    $Hour = date('G');

                    if ($Hour >= 5 && $Hour <= 11) {
                        echo 'Good Morning ';
                    } elseif ($Hour >= 12 && $Hour <= 18) {
                        echo 'Good Afternoon ';
                    } elseif ($Hour >= 19 || $Hour <= 4) {
                        echo 'Good Evening ';
                    } else {
                        echo 'Good Morning ';
                    }
                @endphp
                {{-- {{ Auth::user()->first_name }} --}}
            </h3>
        </div>
        <div class="nav-right">
            <ul class="header-right">
                <li class="custom-dropdown">
                </li>
                <li class="search d-lg-none d-flex">
                    <a href="javascript:void(0)">
                        <svg>
                            <use href="{{ asset('assets/svg/iconly-sprite.svg#Search') }}"></use>
                        </svg></a>
                </li>
                <li>
                    <a class="dark-mode" href="javascript:void(0)">
                        <svg>
                            <use href="{{ asset('assets/svg/iconly-sprite.svg#moondark') }}"></use>
                        </svg></a>
                </li>

                <li>
                    <a class="full-screen" href="javascript:void(0)">
                        <svg>
                            <use href="{{ asset('assets/svg/iconly-sprite.svg#scanfull') }}"></use>
                        </svg></a>
                </li>

                <li class="profile-nav custom-dropdown">
                    {{-- <div class="user-wrap">
                        <div class="user-img">
                            <img src="https://ui-avatars.com/api/?name={{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}&background=134D80&color=fff"
                                width="20" alt="" />
                        </div>
                        <div class="user-content">
                            <h6>{{ Auth::user()->first_name }}</h6>
                            <p class="mb-0">{{ Session::get('tickets_director_user_type') }}<i
                                    class="fa-solid fa-chevron-down"></i></p>
                        </div>
                    </div> --}}
                    <div class="custom-menu overflow-hidden">
                        <ul class="profile-body">
                            <li class="d-flex">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Login') }}"></use>
                                </svg><a class="ms-2" href="">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <style>
        .page-header .logo-wrapper {
            padding: 5px 10px;
            width: 253px;
        }
    </style>
</header>
