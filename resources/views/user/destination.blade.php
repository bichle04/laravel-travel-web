@extends('user.main')

@section('content')
    <div class="web-content">

        <!--
            DESTINATIONS
        -->
        <div class="package-menu grid wide">
            <div class="package-menu__head">
                <p id="Destination">Khám phá</p>
                <h3 class="package-menu__heading"> <span class="green-underline">Điểm đến nổi bật</span></h3>
            </div>


            <div class="row">
                @foreach ($destinations as $destination)
                    <div class="col l-4 m-6 c-12">
                        <div class="package">
                            <div class="package-img" style="background-image: url({{ $destination->file }});"></div>
                            <div class="package-overlay">
                                {{-- <img src="/assets/user/img/thailand-icon.png" alt="" class="package-icon"> --}}
                                <div class="package-info">
                                    <h3 class="package-heading"> {{ $destination->name }} </h3>
                                    {{-- <span class="package-desc">3 Packages</span> --}}
                                </div>
                            </div>

                            <a href="/diem-den/{{ $destination->id }}/{{ $destination->url }}.html" class="mobile-package__link"></a>
                            <div class="package-cover hide-on-mobile-tablet">
                                <h4 class="package-cover-head">{{ $destination->name }}</h4>
                                {{-- <ul class="package-list">
                                <li class="package-item">
                                    <a href="./DETAILS/thailand-bangkok.html" class="package-link">Bangkok</a>
                                </li>
                                <li class="package-item">
                                    <a href="./DETAILS/thailand-phuket.html" class="package-link">Phuket</a>
                                </li>
                                <li class="package-item">
                                    <a href="./DETAILS/thailand-pattaya.html" class="package-link">Pattaya</a>
                                </li>
                            </ul> --}}
                                {{-- <h4>Gói tour HOT 2023</h4> --}}
                                <div class="package-btn">
                                    <a href="/diem-den/{{ $destination->id }}/{{ $destination->url }}.html" class="package-btn-link">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col l-4 m-6 c-12">
                <div class="package">
                    <div class="package-img" style="background-image: url(/assets/user/img/malaysia.png);">
                    </div>
                    <div class="package-overlay">
                        <img src="/assets/user/img/malaysia-icon.png" alt="" class="package-icon">
                        <div class="package-info">
                            <h3 class="package-heading">Malaysia</h3>
                            <span class="package-desc">1 Package</span>
                        </div>
                    </div>

                    <a href="#" class="mobile-package__link"></a>
                    <div class="package-cover hide-on-mobile-tablet">

                        <h4 class="package-cover-head">Package</h4>
                        <ul class="package-list">
                            <li class="package-item">
                                <a href="./DETAILS/malaysia-kuala-lumpur.html" class="package-link">Kuala
                                    Lumpur</a>
                            </li>
                        </ul>
                        <div class="package-btn">
                            <a href="./PACKAGES/malaysia.html" class="package-btn-link">View</a>

                        </div>
                    </div>
                </div>
                </div>
                <div class="col l-4 m-6 c-12">
                    <div class="package">
                        <div class="package-img" style="background-image: url(/assets/user/img/maldives.png);">
                        </div>
                        <div class="package-overlay">
                            <img src="/assets/user/img/maldives-icon.png" alt="" class="package-icon">
                            <div class="package-info">
                                <h3 class="package-heading">Maldives</h3>
                            </div>
                        </div>

                        <a href="#" class="mobile-package__link"></a>
                        <div class="package-cover hide-on-mobile-tablet">
                            <div class="package-btn">
                                <a href="./DETAILS/maldives.html" class="package-btn-link">View</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l-4 m-6 c-12">
                    <div class="package">
                        <div class="package-img" style="background-image: url(/assets/user/img/italy.png);">
                        </div>
                        <div class="package-overlay">
                            <img src="/assets/user/img/italy-icon.png" alt="" class="package-icon">
                            <div class="package-info">
                                <h3 class="package-heading">Italy</h3>
                                <span class="package-desc">4 Packages</span>
                            </div>
                        </div>

                        <a href="#" class="mobile-package__link"></a>
                        <div class="package-cover hide-on-mobile-tablet">

                            <h4 class="package-cover-head">Packages</h4>
                            <ul class="package-list">
                                <li class="package-item">
                                    <a href="./DETAILS/italy-rome.html" class="package-link">Rome</a>
                                </li>
                                <li class="package-item">
                                    <a href="./DETAILS/italy-venice.html" class="package-link">Venice</a>
                                </li>
                                <li class="package-item">
                                    <a href="./DETAILS/italy-milan.html" class="package-link">Milan</a>
                                </li>
                                <li class="package-item">
                                    <a href="./DETAILS/italy-pisa.html" class="package-link">Pisa</a>
                                </li>
                            </ul>
                            <div class="package-btn">
                                <a href="./PACKAGES/italy.html" class="package-btn-link">View</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l-4 m-6 c-12">
                    <div class="package">
                        <div class="package-img" style="background-image: url(/assets/user/img/japan.png);">
                        </div>
                        <div class="package-overlay">
                            <img src="/assets/user/img/japan-icon.png" alt="" class="package-icon">
                            <div class="package-info">
                                <h3 class="package-heading">Japan</h3>
                                <span class="package-desc">5 Packages</span>
                            </div>
                        </div>

                        <a href="#" class="mobile-package__link"></a>
                        <div class="package-cover hide-on-mobile-tablet">

                            <h4 class="package-cover-head">Packages</h4>
                            <ul class="package-list">
                                <li class="package-item">
                                    <a href="./DETAILS/japan-tokyo.html" class="package-link">Tokyo</a>
                                </li>
                                <li class="package-item">
                                    <a href="./DETAILS/japan-kyoto.html" class="package-link">Kyoto</a>
                                </li>
                                <li class="package-item">
                                    <a href="./DETAILS/japan-himeji.html" class="package-link">Himeji</a>
                                </li>
                                <li class="package-item">
                                    <a href="./DETAILS/japan-gifu.html" class="package-link">Gifu</a>
                                </li>
                                <li class="package-item">
                                    <a href="./DETAILS/japan-hokaido.html" class="package-link">Hokaido</a>
                                </li>
                            </ul>
                            <div class="package-btn">
                                <a href="./PACKAGES/japan.html" class="package-btn-link">View</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l-4 m-6 c-12">
                    <div class="package">
                        <div class="package-img" style="background-image: url(/assets/user/img/greece.png);">
                        </div>
                        <div class="package-overlay">
                            <img src="/assets/user/img/greece-icon.png" alt="" class="package-icon">
                            <div class="package-info">
                                <h3 class="package-heading">Greece</h3>
                                <span class="package-desc">1 Package</span>
                            </div>
                        </div>

                        <a href="#" class="mobile-package__link"></a>
                        <div class="package-cover hide-on-mobile-tablet">

                            <h4 class="package-cover-head">Package</h4>
                            <ul class="package-list">
                                <li class="package-item">
                                    <a href="./DETAILS/greece-santorini.html" class="package-link">Santorini</a>
                                </li>
                            </ul>
                            <div class="package-btn">
                                <a href="./PACKAGES/greece.html" class="package-btn-link">View</a>

                            </div>
                        </div>
                    </div>
                </div> --}}
                @endforeach
            </div>
            <div class="pagination-des">
                {!! $destinations->links() !!}
            </div>
        </div>
    </div>
@endsection
