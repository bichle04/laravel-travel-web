@extends('user.main')

@section('content')
    <!--
                    ABOUT
                -->
    <div class="web-content web__wrap">
        <div class="special" style="margin-top: -10px">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-4 m-12 c-12">
                        <div class="special-info">
                            <div class="special__head">
                                <span class="special__location" id="About">Giới thiệu về chúng tôi</span>
                                <h3 class="special__heading" style="color: black">Explore all tour <span class="blue-underline">world</span>
                                </h3>
                            </div>
                            <div class="special__desc" style="margin-top: 20px">
                                <p class="special__desc-paragraph" style="text-align: justify;">
                                    Chào mừng đến với <span
                                        style="font-weight: bold; color: var(--blue-color)">TravelWithU</span> - nơi hội tụ
                                    những chuyến phiêu lưu không giới hạn!
                                </p>
                                <p class="special__desc-paragraph" style="text-align: justify;">
                                    Hãy đồng hành cùng chúng tôi để khám phá những chuyến đi tuyệt vời và tạo nên những kỷ
                                    niệm
                                    vô song trên bản đồ của cuộc sống!
                                </p>
                                <p class="special__desc-paragraph" style="text-align: justify;">
                                    <b>Thông tin liên hệ:</b><br>
                                    - Email: <a href="mailto:bichltn.22it@vku.udn.vn">bichltn.22it@vku.udn.vn</a><br>
                                    - Số điện thoại: 0326365543
                                </p>
                            </div>
                            <div class="special__price">
                                <span class="price-from">Giá chỉ từ </span>
                                <span class="special__current-price">500.000 VND</span>
                                <span class="special__price-unit">/người</span>
                            </div>
                            {{-- <a href="/tour" class="special__book-link">Khám phá ngay</a> --}}
                            <div class="btn__book" style="margin-top: 30px">
                                <a href="/tour" class="special__book-link">Khám phá ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col l-7 l-o-1 m-12 c-12">
                        <div class="special__img-wrap_about">
                            <div class="special__img_about"></div>
                        </div>

                    </div>
                    <div class="col l-3 m-12 c-12">
                        <div class="special__detail">
                            <img src="/assets/user/img/support.png" class="special__detail-img">
                            <div class="special__detail-info">
                                <h3 class="special__detail-heading">Hỗ trợ 24/7</h3>
                                <p class="special__detail-desc">Chúng tôi luôn sẵn sàng hỗ trợ mọi lúc để bạn có một trải
                                    nghiệm
                                    du lịch không trở ngại.</p>
                                {{-- <a href="./SERVICES/support24-7.html" class="special__detail-link">View more</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col l-3 m-12 c-12">
                        <div class="special__detail">
                            <img src="/assets/user/img/hotel.png" class="special__detail-img">
                            <div class="special__detail-info">
                                <h3 class="special__detail-heading">Khách sạn</h3>
                                <p class="special__detail-desc">Đề cao sự sang trọng, an toàn và thoải mái cho mọi khách
                                    hàng.
                                </p>
                                {{-- <a href="./SERVICES/best-hotel.html" class="special__detail-link">View more</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col l-3 m-12 c-12">
                        <div class="special__detail">
                            <img src="/assets/user/img/tour.png" class="special__detail-img">
                            <div class="special__detail-info">
                                <h3 class="special__detail-heading">Chuyến du lịch</h3>
                                <p class="special__detail-desc">Cung cấp những chuyến tham quan tốt nhất, mang đến trải
                                    nghiệm
                                    du lịch hoàn hảo và độc đáo.</p>
                                {{-- <a href="./SERVICES/best-tours.html" class="special__detail-link">View more</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col l-3 m-12 c-12">
                        <div class="special__detail">
                            <img src="/assets/user/img/insurance.png" class="special__detail-img">
                            <div class="special__detail-info">
                                <h3 class="special__detail-heading">Bảo hiểm</h3>
                                <p class="special__detail-desc">Bảo hiểm du lịch - An tâm mỗi chuyến đi, để bạn chỉ cần lo
                                    lắng
                                    về niềm vui khám phá.</p>
                                {{-- <a href="./SERVICES/travel-insurance.html" class="special__detail-link">View more</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
