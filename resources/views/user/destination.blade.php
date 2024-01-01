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
                                <div class="package-info">
                                    <h3 class="package-heading"> {{ $destination->name }} </h3>
                                </div>
                            </div>

                            <a href="/diem-den/{{ $destination->id }}/{{ $destination->url }}" class="mobile-package__link"></a>
                            <div class="package-cover hide-on-mobile-tablet">
                                <h4 class="package-cover-head">{{ $destination->name }}</h4>
                                <div class="package-btn">
                                    <a href="/diem-den/{{ $destination->id }}/{{ $destination->url }}" class="package-btn-link">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pagination-des">
                {!! $destinations->appends(request()->all())->links() !!}
            </div>
        </div>
    </div>
@endsection
