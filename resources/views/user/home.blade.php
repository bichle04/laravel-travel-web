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
                                <div class="package-info">
                                    <h3 class="package-heading"> {{ $destination_in->name }} </h3>
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
                                <div class="package-info">
                                    <h3 class="package-heading"> {{ $destination_out->name }} </h3>
                                </div>
                            </div>

                            <a href="/diem-den/{{ $destination_out->id }}/{{ $destination_out->url }}"
                                class="mobile-package__link"></a>
                            <div class="package-cover hide-on-mobile-tablet">
                                <h4 class="package-cover-head">{{ $destination_out->name }}</h4>
                                <div class="package-btn">
                                    <a href="/diem-den/{{ $destination_out->id }}/{{ $destination_out->url }}"
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
            </div>
        </div>
        <div class="button-more">
            <a href="/tour" class="button button--primary">Xem thêm các các Tour du lịch</a>
        </div>
    </div>
@endsection
