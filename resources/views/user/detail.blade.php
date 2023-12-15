@extends('user.main')

@section('content')
    <!--
        DETAIL
    -->
    <div class="web-content web__wrap">
        <div class="special">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-6 m-12 c-12">
                        <div class="special__img-wrap">
                            <div class="special__img">
                                <img src="{{ $tour->file }}" style="max-width: 590px">
                                <div class="infor">
                                    <div style="padding: 10px 0">
                                        <span class="text-infor"><i class="ri-map-pin-line"></i>
                                            {{ $tour->destination->name }}</span>
                                        <span class="text-infor"><i class="ri-time-line"></i>
                                            {{ $tour->time }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l-5 l-o-1 m-12 c-12">
                        <div class="special-info">
                            <div class="special__head" style="margin-bottom: 20px">
                                {{-- <span class="special__location" id="location">
                                    <i class="ri-map-pin-line"></i>
                                    {{ $tour->destination->name }}
                                </span> --}}
                                <h3 class="special__heading">
                                    <span class="">{{ $tour->name }}</span>
                                </h3>
                            </div>
                            <div class="special__price">
                                <span class="special__price-unit">Người lớn: </span>
                                <span class="special__current-price" style="margin-left: auto; color: #1bbc9b;">
                                    {!! \App\Helpers\Helper::price($tour->price) !!}
                                </span>
                            </div>
                            <div class="special__price">
                                <span class="special__price-unit">Trẻ em: </span>
                                <span class="special__current-price" style="margin-left: auto; color: #1bbc9b;">
                                    {!! \App\Helpers\Helper::price($tour->price_child) !!}
                                </span>
                            </div>
                            {{-- <a href="./datphong.html" class="special__book-link">book now</a> --}}
                            <div class="special__desc">
                                {!! $tour->description !!}
                                <button class="read-more-btn">Xem thêm</button>
                            </div>
                            <div class="btn__book">
                                @if($tour->price != NULL && $tour->price_child != NULL)
                                    @if (Auth::check())
                                        <a href="/dat-tour/idtour={{ $tour->id }}/{{ $tour->url }}" class="special__book-link">Đặt ngay</a>
                                    @else
                                        <a href="javascript:void(0);" onclick="showAlertAndRedirect('/dang-nhap')"
                                            class="special__book-link">Đặt ngay</a>
                                    @endif
                                @endif
                                <script>
                                    function showAlertAndRedirect(url) {
                                        var result = confirm('Vui lòng đăng nhập để đặt tour!');
                                        if (result) {
                                            window.location.href = url;
                                        }
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $('.special__desc').each(function() {
                                var $description = $(this);
                                var content = $description.html();

                                if (content.length > 700) {
                                    var shortContent = content.substr(0, 700) + '...';
                                    $description.html(shortContent);

                                    var $readMoreBtn = $('<button class="read-more-btn">Xem thêm</button>');
                                    $description.append($readMoreBtn);

                                    $readMoreBtn.on('click', function() {
                                        $description.html(content);
                                        $('.read-more-btn').css('display', 'none');
                                    });
                                } else {
                                    $readMoreBtn.css('display', 'none');
                                }
                            });
                        });
                    </script>
                    <div class="col l-12" style="margin: 30px 0">
                        <h3 class="package-menu__heading"><span class="green-underline">Tour liên quan</span></h3>
                    </div>
                    @foreach ($tours as $tour)
                        <div class="col l-4 m-12 c-12">
                            <div class="tour" style="--color: var(--yellow-color)">
                                <a href="/tour/id-{{ $tour->id }}/{{ $tour->url }}" class="tour__img">
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
                                                    {{ $tour->time }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tour__price">
                                            <h4 class="tour__price--current">{!! \App\Helpers\Helper::price($tour->price) !!}</h4>

                                        </div>
                                    </div>

                                    <a href="/tour/id-{{ $tour->id }}/{{ $tour->url }}" target="_blank"
                                        class="tour__btn" style="--color: var(--purple-grad)">Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
