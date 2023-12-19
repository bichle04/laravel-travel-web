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
                            <div class="special__desc">
                                {!! $tour->description !!}
                                <button class="read-more-btn">Xem thêm</button>
                            </div>
                            <div class="btn__book">
                                @if ($tour->price != null && $tour->price_child != null)
                                    @if (Auth::check())
                                        <a href="/dat-tour/idtour={{ $tour->id }}/{{ $tour->url }}"
                                            class="special__book-link">Đặt ngay</a>
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
                        <h3 class="package-menu__heading"><span class="blue-underline">Chương trình Tour</span></h3>

                        @if ($programe)
                            <div class="special__desc">
                                {!! $programe->content !!}
                                <button class="read-more-btn">Xem thêm</button>
                            </div>
                        @else
                            <div class="special__blank">
                                <h5 style="color: red; font-weight: bold">
                                    Chưa có thông tin về chương trình Tour này!
                                </h5>
                            </div>
                        @endif
                    </div>
                    <div class="col l-12 m-12 c-12 box__cmt" style="margin: 50px 0">
                        <h3 class="package-menu__heading pd__box">Bình luận</h3>
                        @if (Auth::check())
                            <form action="" method="POST" role="form">
                                <div class="write__cmt">
                                    <label style="font-weight: bold">
                                        {{ Auth::user()->name }}
                                        <input type="hidden" name="id_user" id="id_user" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="id_tour" id="id_tour" value="{{ $tour->id }}">
                                    </label><br>
                                    <div id="rating">
                                        <input class="star-input" type="radio" id="star5" name="rating"
                                            value="5" />
                                        <label class="full" for="star5" title="Awesome - 5 stars"></label>

                                        <input class="star-input" type="radio" id="star4" name="rating"
                                            value="4" />
                                        <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                                        <input class="star-input" type="radio" id="star3" name="rating"
                                            value="3" />
                                        <label class="full" for="star3" title="Meh - 3 stars"></label>

                                        <input class="star-input" type="radio" id="star2" name="rating"
                                            value="2" />
                                        <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                                        <input class="star-input" type="radio" id="star1" name="rating"
                                            value="1" />
                                        <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                    </div>
                                    <textarea class="content__cmt" name="content" id="content" rows="3" placeholder="Viết bình luận"></textarea>
                                    <div id="notificate" style="color: green; margin-bottom: 7px">

                                    </div>
                                    <button type="submit" id="btn_submit">Gửi</button>
                                </div>
                            </form>
                            <hr>
                        @endif
                        <div class="show_new_cmt">

                        </div>
                    </div>
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

    <script>
        var _csrf = '{{ csrf_token() }}';
        $(document).ready(function() {
            load_comment();

            function load_comment() {
                var id_tour = $('#id_tour').val();

                $.ajax({
                    type: "POST",
                    url: "/tour/load-comment",
                    data: {
                        id_tour: id_tour,
                        _token: _csrf
                    },
                    success: function(rs) {
                        $('.show_new_cmt').html(rs);
                    }
                });

                $('#btn_submit').click(function(e) {
                    e.preventDefault();
            
                    var id_tour = $('#id_tour').val();
                    var id_user = $('#id_user').val();
                    var content = $('#content').val();
                    var star = $('input.star-input:checked').val();

                    $.ajax({
                        type: "POST",
                        url: "/tour/add-comment",
                        data: {
                            id_tour: id_tour,
                            id_user: id_user,
                            content: content,
                            star: star,
                            _token: _csrf
                        },
                        success: function(rs) {
                            $('#notificate').html('<span>Thêm bình luận thành công!</span>');
                            load_comment();
                            $('#notificate').fadeOut(3000);
                            $('#content').val('');
                            $('input[type="radio"]').prop('checked', false);
                        }
                    });
                });
            }
        });
    </script>
@endsection
