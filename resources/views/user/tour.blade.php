@extends('user.main')

@section('content')
    <div class="web-content">
        <!--
            TOURS
        -->
        <div class="package-menu grid wide">
            <div class="package-menu__head">
                {{-- <p id="Tours">TOUR Du Lịch</p> --}}
                <h3 class="package-menu__heading"><span class="green-underline">{{ $title }}</span></h3>
            </div>
            <div class="row">
                @foreach ($tours as $tour)
                    <div class="col l-4 m-12 c-12">
                        <div class="tour" style="--color: var(--yellow-color)">
                            <a href="/tour/id-{{ $tour->id }}/{{ $tour->url }}" target="_blank" class="tour__img">
                                <img src="{{ $tour->file }}">
                            </a>
                            <div class="tour__detail">
                                <div class="tour__head">
                                    <h4 class="tour__heading">
                                        <a href="/tour/id-{{ $tour->id }}/{{ $tour->url }}" class="text-link-name">{{ $tour->name }}</a>
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

                                <a href="/tour/id-{{ $tour->id }}/{{ $tour->url }}" target="_blank" class="tour__btn"
                                    style="--color: var(--purple-grad)">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pagination-des">{!! $tours->links() !!}</div>
        </div>
    </div>
@endsection
