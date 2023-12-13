<!doctype html>
<html lang="en">

<head>
    @include('admin.head')
</head>

<body>
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Sidebar  -->
        @include('admin.sidebar')
        <!-- TOP Nav Bar -->
        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="iq-menu-bt d-flex align-items-center">
                        <div class="wrapper-menu">
                            <div class="main-circle"><i class="las la-bars"></i></div>
                        </div>
                        <div class="iq-navbar-logo d-flex justify-content-between">
                            <a href="index.html" class="header-logo">
                                <img src="/assets/admin/images/logo.png" class="img-fluid rounded-normal"
                                    alt="">
                                <div class="logo-title">
                                    <span class="text-primary text-uppercase">TravelWithU</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="navbar-breadcrumb">
                        <h5 class="mb-0" style="margin-top: 5px">Admin</h5>
                    </div>
                    {{-- <div class="iq-search-bar">
                        <form action="#" class="searchbox">
                            <input type="text" class="text search-input" placeholder="Tìm kiếm sản phẩm...">
                            <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                        </form>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-label="Toggle navigation">
                        <i class="ri-menu-3-line"></i>
                    </button> --}}
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-list">
                            {{-- <li class="nav-item nav-icon search-content">
                                <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                                    <i class="ri-search-line"></i>
                                </a>
                                <form action="#" class="search-box p-0">
                                    <input type="text" class="text search-input"
                                        placeholder="Type here to search...">
                                    <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                </form>
                            </li>
                            <li class="nav-item nav-icon">
                                <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                                    <i class="ri-notification-2-line"></i>
                                    <span class="bg-primary dots"></span>
                                </a>
                                <div class="iq-sub-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                        <div class="iq-card-body p-0">
                                            <div class="bg-primary p-3">
                                                <h5 class="mb-0 text-white">Thông Báo<small
                                                        class="badge  badge-light float-right pt-1">4</small></h5>
                                            </div>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded"
                                                            src="/assets/admin/images/user/01.jpg" alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Đơn hàng giao thành công</h6>
                                                        <small class="float-right font-size-12">Just Now</small>
                                                        <p class="mb-0">95.000đ</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded"
                                                            src="/assets/admin/images/user/02.jpg" alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Đơn hàng giao thành công</h6>
                                                        <small class="float-right font-size-12">5 days ago</small>
                                                        <p class="mb-0">255.000đ</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded"
                                                            src="/assets/admin/images/user/03.jpg" alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Đơn hàng giao thành công</h6>
                                                        <small class="float-right font-size-12">2 days ago</small>
                                                        <p class="mb-0">79.000đ</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded"
                                                            src="/assets/admin/images/user/04.jpg" alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Đơn hàng #7979 giao không thành công</h6>
                                                        <small class="float-right font-size-12">3 days ago</small>
                                                        <p class="mb-0">100.000đ</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}
                            <li class="line-height">
                                <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                                    <div class="caption">
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="bg-primary iq-sign-btn" style="margin-top: -10px">
                                                Đăng xuất <i class="ri-login-box-line ml-2"></i>
                                            </button>
                                        </form>
                                    </div>
                                </a>
                                {{-- <div class="iq-sub-dropdown iq-user-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                        <div class="iq-card-body p-0 ">
                                            <div class="bg-primary p-3">
                                                <h5 class="mb-0 text-white line-height">Admin</h5>
                                            </div>
                                            <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                                <div class="media align-items-center">
                                                    <div class="rounded iq-card-icon iq-bg-primary">
                                                        <i class="ri-file-user-line"></i>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Tài khoản của tôi</h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="d-inline-block w-100 text-center p-3">
                                                <a class="bg-primary iq-sign-btn" href="sign-in.html"
                                                    role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- TOP Nav Bar END -->
        <!-- Page Content  -->
        <div id="content-page" class="content-page">
            @yield('content')
            {{-- <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-body">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle iq-card-icon bg-primary"><i class="ri-user-line"></i>
                                    </div>
                                    <div class="text-left ml-3">
                                        <h2 class="mb-0"><span class="counter">7900</span></h2>
                                        <h5 class="">Người dùng</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-body">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle iq-card-icon bg-danger"><i class="ri-book-line"></i>
                                    </div>
                                    <div class="text-left ml-3">
                                        <h2 class="mb-0"><span class="counter">4.8</span>K</h2>
                                        <h5 class="">Sách</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-body">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle iq-card-icon bg-warning"><i
                                            class="ri-shopping-cart-2-line"></i></div>
                                    <div class="text-left ml-3">
                                        <h2 class="mb-0"><span class="counter">1.2</span>K</h2>
                                        <h5 class="">Đơn Hàng</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-body">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle iq-card-icon bg-info"><i class="ri-radar-line"></i>
                                    </div>
                                    <div class="text-left ml-3">
                                        <h2 class="mb-0"><span class="counter">690</span></h2>
                                        <h5 class="">Chờ Duyệt</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-header d-flex justify-content-between align-items-center">
                                <div class="iq-header-title">
                                    <h4 class="card-title mb-0">Doanh số hàng ngày</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <div id="iq-sale-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-header d-flex justify-content-between align-items-center">
                                <div class="iq-header-title">
                                    <h4 class="card-title mb-0">Tóm lược</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <ul class="list-inline p-0 mb-0">
                                    <li>
                                        <div class="iq-details mb-2">
                                            <span class="title">Thu nhập</span>
                                            <div class="percentage float-right text-primary">95 <span>%</span></div>
                                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                                <div class="iq-progress-bar iq-bg-primary">
                                                    <span class="bg-primary" data-percent="90"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="iq-details mb-2">
                                            <span class="title">Lợi nhuận</span>
                                            <div class="percentage float-right text-warning">72 <span>%</span></div>
                                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                                <div class="iq-progress-bar iq-bg-warning">
                                                    <span class="bg-warning" data-percent="75"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="iq-details mb-2">
                                            <span class="title">Chi phí</span>
                                            <div class="percentage float-right text-info">75 <span>%</span></div>
                                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                                <div class="iq-progress-bar iq-bg-info">
                                                    <span class="bg-info" data-percent="65"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-body">
                                <h4 class="text-uppercase text-black mb-0">Phiên (Bây giờ)</h4>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="font-size-80 text-black">12</div>
                                    <div class="text-left">
                                        <p class="m-0 text-uppercase font-size-12">1 giờ</p>
                                        <div class="mb-1 text-black">1500<span class="text-danger"><i
                                                    class="ri-arrow-down-s-fill"></i>3.25%</span></div>
                                        <p class="m-0 text-uppercase font-size-12">1 ngày</p>
                                        <div class="mb-1 text-black">1890<span class="text-success"><i
                                                    class="ri-arrow-down-s-fill"></i>1.00%</span></div>
                                        <p class="m-0 text-uppercase font-size-12">1 tuần</p>
                                        <div class="text-black">1260<span class="text-danger"><i
                                                    class="ri-arrow-down-s-fill"></i>9.87%</span></div>
                                    </div>
                                </div>
                                <div id="wave-chart-7"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Mở hóa đơn</h4>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle text-primary" id="dropdownMenuButton5"
                                            data-toggle="dropdown">
                                            <i class="ri-more-fill"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuButton5">
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-eye-fill mr-2"></i>Xem</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-delete-bin-6-fill mr-2"></i>Xoá</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-pencil-fill mr-2"></i>Sửa</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-printer-fill mr-2"></i>In</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="ri-file-download-fill mr-2"></i>Tải xuống</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Khách hàng</th>
                                                <th scope="col">Ngày</th>
                                                <th scope="col">Hóa đơn</th>
                                                <th scope="col">Số tiền</th>
                                                <th scope="col">Tình trạng</th>
                                                <th scope="col">Hoạt động</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Ông Trần Thuận</td>
                                                <td>18/10/2019</td>
                                                <td>20156</td>
                                                <td>150.000đ</td>
                                                <td>
                                                    <div class="badge badge-pill badge-success">Đã thanh toán</div>
                                                </td>
                                                <td>Sao chép</td>
                                            </tr>
                                            <tr>
                                                <td>Hoàng Vũ</td>
                                                <td>26/10/2019</td>
                                                <td>7859</td>
                                                <td>200.000đ</td>
                                                <td>
                                                    <div class="badge badge-pill badge-success">Đã thanh toán</div>
                                                </td>
                                                <td>Gửi Email</td>
                                            </tr>
                                            <tr>
                                                <td>QT shop</td>
                                                <td>18/11/2019</td>
                                                <td>6396</td>
                                                <td>250.000đ</td>
                                                <td>
                                                    <div class="badge badge-pill badge-danger">Chưa thanh toán</div>
                                                </td>
                                                <td>Trước hạn</td>
                                            </tr>
                                            <tr>
                                                <td>Quang Minh</td>
                                                <td>14/12/2019</td>
                                                <td>7854</td>
                                                <td>500.000đ</td>
                                                <td>
                                                    <div class="badge badge-pill badge-success">Đã thanh toán</div>
                                                </td>
                                                <td>Sao chép</td>
                                            </tr>
                                            <tr>
                                                <td>QT Store</td>
                                                <td>24/12/2019</td>
                                                <td>568569</td>
                                                <td>10000đ</td>
                                                <td>
                                                    <div class="badge badge-pill badge-success">Đã thanh toán</div>
                                                </td>
                                                <td>Gửi Email</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- Wrapper END -->
    <!-- Footer -->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12" style="text-align: right">
                    Copyright 2023 - <a href="#">TravelWithU</a> - Bich & Diem
                </div>
            </div>
        </div>
    </footer>

    @include('admin.footer')
</body>

</html>
