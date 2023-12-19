<!-- Sidebar  -->
<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="/" class="header-logo">
            <img src="/assets/user/img/logo.png" class="img-fluid rounded-normal" alt="">
            <div class="logo-title">
                <span class="text-primary text-uppercase">TravelWithU</span>
            </div>
        </a>
        <div class="iq-menu-bt-sidebar">
            <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="las la-bars"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="active active-menu">
                    <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false">
                        <span class="ripple rippleEffect"></span><i class="ri-bar-chart-2-fill iq-arrow-left"></i>
                        <span>Thống kê</span><i class="ri-arrow-right-s-line iq-arrow-right"></i>
                    </a>
                    <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li>
                            <a href="/admin/dashboard"><i class="ri-money-dollar-circle-line"></i>Doanh Thu</a>
                        </li>
                        <li>
                            <a href="/admin/dashboard/number-tour"><i class="ri-function-line"></i>Số lượt đặt Tour</a>
                        </li>
                    </ul>
                </li>                
                <li>
                    <a href="#destination" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false">
                        <span class="ripple rippleEffect"></span><i class="ri-earth-line iq-arrow-left"></i>
                        <span>Điểm đến</span><i class="ri-arrow-right-s-line iq-arrow-right"></i>
                    </a>
                    <ul id="destination" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li>
                            <a href="/admin/destinations/add-destination">
                                <i class="las la-plus-circle"></i>Thêm điểm đến
                            </a>
                        </li>
                        <li>
                            <a href="/admin/destinations/list-destination">
                                <i class="las la-th-list"></i>Danh sách các điểm đến
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#tours" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false">
                        <span class="ripple rippleEffect"></span><i class="ri-flight-takeoff-fill iq-arrow-left"></i>
                        <span>Tour</span><i class="ri-arrow-right-s-line iq-arrow-right"></i>
                    </a>
                    <ul id="tours" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="/admin/tours/add-tour"><i class="las la-plus-circle"></i>Thêm Tour</a></li>
                        <li><a href="/admin/tours/list-tour"><i class="las la-th-list"></i>Danh sách các Tour</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#schedule" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false">
                        <span class="ripple rippleEffect"></span><i class="ri-calendar-event-fill iq-arrow-left"></i>
                        <span>Lịch trình</span><i class="ri-arrow-right-s-line iq-arrow-right"></i>
                    </a>
                    <ul id="schedule" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="/admin/schedules/add-schedule"><i class="ri-function-line"></i>Thêm lịch trình</a>
                        </li>
                        <li>
                            <a href="/admin/schedules/list-schedule"><i class="ri-function-line"></i>Danh sách lịch trình</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false">
                        <span class="ripple rippleEffect"></span><i class="las la-user-tie iq-arrow-left"></i>
                        <span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
                        <li><a href="/admin/users/add-user"><i class="las la-plus-circle"></i>Thêm User</a></li>
                        <li><a href="/admin/users/list-user"><i class="las la-th-list"></i>Danh sách User</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/admin/order/list-order" class="iq-waves-effect">
                        <span class="ripple rippleEffect"></span><i class="ri-shopping-cart-2-line iq-arrow-left"></i>
                        <span>Danh sách đơn hàng</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                </li>
            </ul>
        </nav>
    </div>
</div>
