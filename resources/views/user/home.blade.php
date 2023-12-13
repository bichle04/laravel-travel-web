@extends('user.main')

@section('content')
    <div class="web-content">

        <!--
                DESTINATIONS
            -->
        <div class="package-menu grid wide">
            <div class="package-menu__head">
                <p id="Destination">Lên rừng xuống biển. Trọn vẹn Việt Nam</p>
                <h3 class="package-menu__heading">
                    <span class="green-underline" style="line-height: 1.2">Điểm đến yêu thích trong nước</span>
                </h3>
            </div>


            <div class="row">
                @foreach ($destinations_in as $destination_in)
                    <div class="col l-4 m-6 c-12">
                        <div class="package">
                            <div class="package-img" style="background-image: url({{ $destination_in->file }});"></div>
                            <div class="package-overlay">
                                {{-- <img src="/assets/user/img/thailand-icon.png" alt="" class="package-icon"> --}}
                                <div class="package-info">
                                    <h3 class="package-heading"> {{ $destination_in->name }} </h3>
                                    {{-- <span class="package-desc">3 Packages</span> --}}
                                </div>
                            </div>

                            <a href="/diem-den/{{ $destination_in->id }}/{{ $destination_in->url }}.html"
                                class="mobile-package__link"></a>
                            <div class="package-cover hide-on-mobile-tablet">
                                <h4 class="package-cover-head">{{ $destination_in->name }}</h4>
                                <div class="package-btn">
                                    <a href="/diem-den/{{ $destination_in->id }}/{{ $destination_in->url }}.html"
                                        class="package-btn-link">Xem thêm</a>
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
        </div>

        <div class="banner">
            <div class="banner__full-width s-full-width ">
                <h3 class="banner__heading" style="margin-top: 50px"><span class="red-underline">Kỳ nghỉ</span> tiếp
                    theo<br> của bạn</h3>
                <div class="banner__btn" style="--btn-color: var(--red-color)">
                    <a href="/diem-den/trong-nuoc" class="banner__link" style="font-weight: bold">Xem thêm trong nước</a>
                </div>
            </div>
        </div>

        <div class="package-menu grid wide">
            <div class="package-menu__head">
                <p id="Destination">Bao la thế giới. Bốn bể là nhà</p>
                <h3 class="package-menu__heading">
                    <span class="green-underline" style="line-height: 1.2">Điểm đến yêu thích nước ngoài</span>
                </h3>
            </div>


            <div class="row">
                @foreach ($destinations_out as $destination_out)
                    <div class="col l-4 m-6 c-12">
                        <div class="package">
                            <div class="package-img" style="background-image: url({{ $destination_out->file }});"></div>
                            <div class="package-overlay">
                                {{-- <img src="/assets/user/img/thailand-icon.png" alt="" class="package-icon"> --}}
                                <div class="package-info">
                                    <h3 class="package-heading"> {{ $destination_out->name }} </h3>
                                    {{-- <span class="package-desc">3 Packages</span> --}}
                                </div>
                            </div>

                            <a href="/diem-den/{{ $destination_out->id }}/{{ $destination_out->url }}"
                                class="mobile-package__link"></a>
                            <div class="package-cover hide-on-mobile-tablet">
                                <h4 class="package-cover-head">{{ $destination_out->name }}</h4>
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
                                    <a href="/diem-den/{{ $destination_out->id }}/{{ $destination_out->url }}.html"
                                        class="package-btn-link">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="button-more">
            <a href="/diem-den/nuoc-ngoai" class="button button--primary">Xem thêm các điểm đến nước ngoài</a>
        </div>


        <div class="banner">
            <div class="banner__full-width s-full-width" style="background: url(/assets/user/img/banner2.png);"></div>
        </div>



        <!--
                TOURS
            -->
        <div class="package-menu grid wide">
            <div class="package-menu__head">
                <h3 class="package-menu__heading"><span class="green-underline">Tour du lịch</span></h3>
            </div>
            <div class="row">
                @foreach ($tours as $tour)
                    <div class="col l-4 m-12 c-12">
                        <div class="tour" style="--color: var(--yellow-color)">
                            <a href="/tour/id-{{ $tour->id }}/{{ $tour->url }}" target="_blank"
                                class="tour__img">
                                <img src="{{ $tour->file }}">
                            </a>
                            <div class="tour__detail">
                                <div class="tour__head">
                                    <h4 class="tour__heading">
                                        <a href="/tour/id-{{ $tour->id }}/{{ $tour->url }}"
                                            class="text-link-name">{{ $tour->name }}</a>
                                    </h4>
                                    <div class="tour__subheading">
                                        <i class="tour__location-icon fas fa-map-marker-alt"></i>
                                        <div class="tour__location">{{ $tour->destination->name }}</div>
                                    </div>
                                </div>

                                <div class="tour__info">
                                    <div class="tour__type">
                                        <div class="tour__type--first-line">
                                            <div class="tour__type-name" style="color: var(--blue-color)">
                                                {{ $tour->time }}</div>
                                        </div>
                                    </div>
                                    <div class="tour__price">
                                        <h4 class="tour__price--current">{!! \App\Helpers\Helper::price($tour->price) !!}</h4>

                                    </div>
                                </div>

                                <div class="tour__desc shortenedText">
                                    {!! $tour->description !!}

                                    <script>
                                        var textContainers = document.querySelectorAll(".shortenedText");

                                        textContainers.forEach(function(textContainer) {
                                            var fullText = textContainer.textContent;
                                            var maxLength = 150;
                                            var shortenedText = fullText.length > maxLength ? fullText.substring(0, maxLength) + "..." : fullText;

                                            textContainer.innerHTML = shortenedText;
                                        });
                                    </script>
                                </div>

                                <a href="/tour/id-{{ $tour->id }}/{{ $tour->url }}" target="_blank"
                                    class="tour__btn" style="--color: var(--purple-grad)">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col l-4 m-12 c-12">
                    <div class="tour" style="--color: var(--red-color)">
                        <a href="./DETAILS/italy-rome.html" target="_blank" class="tour__img">
                            <img src="/assets/user/img/tour2.png">
                        </a>
                        <div class="tour__detail">
                            <a href="./DETAILS/italy-rome.html" target="_blank" class="tour__icon"
                                style="--background-color: var(--red-grad)">
                                <img src="/assets/user/img/rome-icon.png" class="tour__icon-img">
                            </a>
                            <div class="tour__head">
                                <h4 class="tour__heading">Rome</h4>
                                <div class="tour__subheading">
                                    <i class="tour__location-icon fas fa-map-marker-alt"></i>
                                    <div class="tour__location">Europe</div>
                                </div>
                            </div>

                            <div class="tour__info">
                                <div class="tour__type">
                                    <div class="tour__type--first-line">
                                        <div class="tour__type-name">History</div>
                                    </div>
                                    <div class="tour__type--second-line">
                                        <div class="tour__type-name">Cultural</div>
                                        <span class="tour__type-addition">
                                            + 1
                                            <div class="tour__type--hidden">Sport</div>
                                        </span>
                                    </div>

                                </div>
                                <div class="tour__price">
                                    <h4 class="tour__price--old">1000</h4>
                                    <h4 class="tour__price--current">500 $</h4>

                                </div>
                            </div>

                            <p class="tour__desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Nunc ut efficitur ante.
                                Donec dapibus dictum scelerisque.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Nunc ut efficitur ante.
                                Donec dapibus dictum scelerisque.
                            </p>

                            <a href="./DETAILS/italy-rome.html" target="_blank" class="tour__btn"
                                style="--color: var(--red-grad)">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col l-4 m-12 c-12">
                    <div class="tour" style="--color: var(--purple-color)">
                        <a href="./DETAILS/thailand-bangkok.html" target="_blank" class="tour__img">
                            <img src="/assets/user/img/tour3.png">
                        </a>
                        <div class="tour__detail">
                            <a href="./DETAILS/thailand-bangkok.html" target="_blank" class="tour__icon"
                                style="--background-color: var(--purple-grad)">
                                <img src="/assets/user/img/thailand-icon.png" class="tour__icon-img">
                            </a>
                            <div class="tour__head">
                                <h4 class="tour__heading">Bangkok</h4>
                                <div class="tour__subheading">
                                    <i class="tour__location-icon fas fa-map-marker-alt"></i>
                                    <div class="tour__location">Asia</div>
                                </div>
                            </div>

                            <div class="tour__info">
                                <div class="tour__type">
                                    <div class="tour__type--first-line">
                                        <div class="tour__type-name">Cuisine</div>
                                    </div>
                                    <div class="tour__type--second-line">
                                        <div class="tour__type-name">Cultural</div>
                                        <span class="tour__type-addition">
                                            + 1
                                            <div class="tour__type--hidden">Relax</div>
                                        </span>
                                    </div>

                                </div>
                                <div class="tour__price">
                                    <h4 class="tour__price--current">400 $</h4>

                                </div>
                            </div>

                            <p class="tour__desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Nunc ut efficitur ante.
                                Donec dapibus dictum scelerisque.
                            </p>

                            <a href="./DETAILS/thailand-bangkok.html" target="_blank" class="tour__btn"
                                style="--color: var(--purple-grad)">details</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="button-more">
            <a href="/tour" class="button button--primary">Xem thêm các các Tour du lịch</a>
        </div>
    </div>
@endsection
