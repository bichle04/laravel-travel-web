<!--
    HEADER
-->
<header class="header">
    @if(!$isDetail)
        <nav class="navbar">
    @else 
        <nav class="navbar__detail">
    @endif
        <div class="grid wide">
            <div class="navbar-wrap row">
                <div class="col l-2 m-6 c-6">
                    <a href="/" class="header__logo-link">
                        <img src="/assets/user/img/LogoTravel.png" alt="" class="header__logo-img">
                    </a>
                </div>

                <!-- NAVIGATION BAR -->
                <div class="col l-8 m-0 c-0">
                    <ul class="navbar__list ">
                        <li class="navbar__item">
                            <a href="/trang-chu" class="navbar__item-link">Trang chủ</a>
                        </li>
                        <li class="navbar__item">
                            <a href="/diem-den" class="navbar__item-link">Điểm đến</a>
                        </li>
                        <li class="navbar__item">
                            <a href="/tour" class="navbar__item-link">Tour</a>
                        </li>
                        <li class="navbar__item">
                            <a href="/gioi-thieu" class="navbar__item-link">Giới thiệu</a>
                        </li>
                        {{-- <li class="navbar__item navbar__item--booking">
                            <a href="/dat-ve" class="navbar__item-link" target="_blank">Đặt ngay</a>
                        </li> --}}
                        <!-- <li class="navbar__item">
                                    <a href="./LOGIN/login.html" class="navbar__item-link" target="_blank" >
                                        <i class="fas fa-user" style="color: #ffffff; transition: transform 0.3s ease;"></i>
                                    </a>
                                </li> -->
                    </ul>
                    <!-- <div style="margin-inline-end: 5%;" >
                                <a href="./LOGIN/login.html" class="navbar__item-link navbar__item" id="User" target="_blank" >
                                    <i class="fas fa-user" style="color: #ffffff; transition: transform 0.3s ease;"></i>
                                </a>
                            </div> -->

                </div>

                <!-- MENU -->
                <div class="col l-1 l-o-1 m-0 m-o-4 c-0">
                    <div class="navbar__menu-wrapper" style="display: flex; justify-content: space-between;">
                        <label for="navbar__menu-input" class="navbar__menu-icon fas fa-bars"
                            data-nav-toggle-btn></label>
                        <input type="checkbox" name="" id="navbar__menu-input" hidden>
                        {{-- Icon Login --}}
                        <div class="dropdown">
                            <div class="user__icon" style="margin-left: 130px;">
                                <a href="/dang-nhap" class="navbar__item-link navbar__item" id="user">
                                    <i class="fas fa-user" style="color: #ffffff; transition: transform 0.3s ease;"></i>
                                </a>
                            </div>
                            @if (Auth::check())
                                <div class="dropdown-content">
                                    <div class="bg-primary pt-3" id="border-drop">
                                        <h5 class="mb-0 line-height text-drop" style="text-align: center">
                                            <span style="font-weight: normal">Chào bạn </span>
                                            {{ Auth::user()->name }}
                                        </h5>
                                    </div>
                                    <a href="profile-edit.html" class="txt-drop">
                                        <div class="align-items-center">
                                            <div class="ml-3">
                                                <h6 class="mb-0">Tài khoản của tôi</h6>
                                            </div>
                                        </div>
                                    </a>
                                    {{-- <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                        <div class="rounded iq-card-icon iq-bg-primary">
                                            <i class="ri-profile-line"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="mb-0 ">Sổ địa chỉ</h6>
                                        </div>
                                    </div>
                                    </a> --}}
                                    <a href="#" class="txt-drop">
                                        <div class="align-items-center">
                                            <div class="ml-3">
                                                <h6 class="mb-0">Thông tin đơn hàng</h6>
                                            </div>
                                        </div>
                                    </a>
                                    {{-- <a href="#" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                        <div class="rounded iq-card-icon iq-bg-primary">
                                            <i class="ri-heart-line"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="mb-0 ">Yêu Thích</h6>
                                        </div>
                                    </div>
                                    </a> --}}
                                    <div class="d-inline-block w-100 text-center p-3" style="text-align: center">
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="bg-primary iq-sign-btn">
                                                Thoát <i class="ri-login-box-line ml-2"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        </div>
                        {{-- <div class="user__icon" style="margin-left: 130px;">
                            <a href="/login" class="navbar__item-link navbar__item" id="User"
                                target="_blank">
                                <i class="fas fa-user" style="color: #ffffff; transition: transform 0.3s ease;"></i>
                            </a>
                        </div> --}}
                        @include('user.sidebar')
                    </div>
                </div>


                <!-- MENU FOR MOBILE (Show narbar)-->
                <div class="col l-0 m-2 m-o-4 c-o-4">
                    <div class="mobile-menu__wrapper">
                        <input hidden type="checkbox" name="" id="mobile-menu__input">
                        <label for="mobile-menu__input" class="mobile-menu__overlay"></label>
                        <label for="mobile-menu__input" class="mobile-menu__icon fas fa-bars"></label>
                        <div class="mobile-menu">
                            <label for="mobile-menu__input" class="fas fa-times mobile-menu__close"></label>
                            <ul class="mobile-menu__list">
                                <li class="mobile-menu__item">
                                    <a href="/trang-chu" class="mobile-menu__item-link">Trang chủ</a>
                                </li>
                                <li class="mobile-menu__item">
                                    <a href="/diem-den" class="mobile-menu__item-link">Điểm đến</a>
                                </li>
                                <li class="mobile-menu__item">
                                    <a href="/tour" class="mobile-menu__item-link">Tour</a>
                                </li>
                                <li class="mobile-menu__item">
                                    <a href="/gioi-thieu" class="mobile-menu__item-link">Về chúng tôi</a>
                                </li>
                                <li class="mobile-menu__item">
                                    <a href="/dat-ve" class="mobile-menu__item-link">Đặt ngay</a>
                                </li>
                                <li class="navbar__item">
                                    <a href="/dang-nhap" class="mobile-menu__item-link">Đăng nhập/Đăng ký</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @if(!$isDetail)
        @include('user.search')
    @endif

</header>
