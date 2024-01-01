<div class="navbar__menu">
    <div class="navbar__menu-close">
        <label for="navbar__menu-input" class="fas fa-times navbar__menu-close-icon"></label>
    </div>
    <div class="navbar__menu-info">
        <ul class="navbar__menu-list">
            <div class="navbar__menu-head">
                <p style="font-weight: bold">Chuyến đi</p>
                <h3 class="navbar__menu-heading">
                    <span class="yellow-underline">thú vị</span>
                </h3>
            </div>

            @foreach ($tours as $tour)
                <li class="navbar__menu-item">
                    <div style="background-image: url({{ $tour->file}});" class="navbar__menu-item-img"></div>
                    <div class="navbar__menu-item-info">
                        <a href="/tour/id-{{ $tour->id }}/{{ $tour->url }}" class="navbar__menu-item-city"
                            id="shortText" title="{{ $tour->name }}">{{ $tour->name }}</a>
                        <a href="/tour/id-{{ $tour->id }}/{{ $tour->url }}" class="navbar__menu-item-location">
                            <i class="navbar__menu-item-location-icon fas fa-map-marker-alt"></i>
                            {{ $tour->destination->name }}
                        </a>
                        <a href="/tour/id-{{ $tour->id }}/{{ $tour->url }}" class="navbar__menu-item-price"
                            style="--background-color:var(--yellow-grad)">
                            {!! \App\Helpers\Helper::price($tour->price) !!}
                        </a>
                    </div>
                </li>
            @endforeach
            <script>
                var textContainers = document.querySelectorAll("#shortText");
                textContainers.forEach(function(textContainer) {
                    var fullText = textContainer.textContent;
                    var maxLength = 20;
                    var shortenedText = fullText.length > maxLength ? fullText.substring(0, maxLength) + "..." : fullText;

                    textContainer.innerHTML = shortenedText;
                });
            </script>
        </ul>

        <div class="package">
            @foreach ($destinations as $destination)
                <div class="package-img" style="background-image: url({{ $destination->file }});">
                </div>
                <div class="package-overlay">
                    <div class="package-info">
                        <h3 class="package-heading"> {{ $destination->name }} </h3>
                    </div>
                </div>

                <a href="/diem-den/{{ $destination->id }}/{{ $destination->url }}"
                    class="mobile-package__link"></a>
                <div class="package-cover hide-on-mobile-tablet">
                    <h4 class="package-cover-head">{{ $destination->name }}</h4>
                    <div class="package-btn">
                        <a href="/diem-den/{{ $destination->id }}/{{ $destination->url }}"
                            class="package-btn-link">Xem thêm</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
