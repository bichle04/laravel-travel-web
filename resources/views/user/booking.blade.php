@extends('user.main')

@section('content')
    <form action="" method="POST">
        <div class="web-content web__wrap">
            <div class="special" style="margin-top: -10px">
                <div class="grid wide">
                    <div class="row">
                        <div class="col l-5 m-12 c-12">
                            <div class="special-info">
                                <div class="special__head" style=" text-align: center">
                                    <h3 class="special__heading">
                                        <span class="">Thông tin của bạn</span>
                                    </h3>
                                </div>
                                <div class="special__desc">
                                    <span class="special_name">Họ và tên</span>
                                    <input class="form-control" type="text" value="{{ Auth::user()->fname }}" required>
                                </div>
                                <div class="special__desc">
                                    <span class="special_email">Email</span>
                                    <input class="form-control" type="text" value="{{ Auth::user()->email }}">
                                </div>
                                <div class="special__desc">
                                    <span class="special_tel">Số điện thoại</span>
                                    <input class="form-control" type="text" value="0{{ Auth::user()->phone }}">
                                </div>
                                <div class="special__desc">
                                    <span class="special_tel">Ngày khởi hành</span>
                                    <select class="form-control">
                                        <option value="0">-- Chọn ngày khởi hành --</option>
                                        @foreach ($schedules as $schedule)
                                            <option value="{{ $schedule->date }}">{{ \Carbon\Carbon::parse($schedule->date)->format('d-m-Y') }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="special__price">
                                        <div class="col l-4 m-4 c-4">
                                            <span class="special__price-unit">Người lớn: </span>
                                        </div>
                                        <div class="col l-2 m-2 c-2">
                                            <input class="form-control" type="number" id="qty_adult"
                                                style="max-width: 50px; margin-left: auto;" value="1">
                                        </div>
                                        <div class="col l-4 m-4 c-5">
                                            <span class="special__current-price" id="price_adult"
                                                style="margin-left: auto; color: #1bbc9b;">
                                                {{ str_replace(',', '.', number_format($tour->price)) }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="special__price">
                                        <div class="col l-4 m-4 c-4">
                                            <span class="special__price-unit">Trẻ em: </span>
                                        </div>
                                        <div class="col l-2 m-2 c-2">
                                            <input class="form-control" type="number" id="qty_child"
                                                style="max-width: 50px; margin-left: auto;" value="0">
                                        </div>
                                        <div class="col l-4 m-4 c-5">
                                            <span class="special__current-price" id="price_child"
                                                style="margin-left: auto; color: #1bbc9b;">
                                                0
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="special__price"
                                    style="border-top: 1px solid; padding-top: 15px; margin-top: 10px">
                                    <span class="special__price-unit" style="font-weight: bold">Tổng tiền: </span>
                                    <span class="special__current-price" id="totalAll"
                                        style="margin-left: auto; color: var(--red-color); font-weight: bold">
                                        {{ $tour->price_child }}
                                    </span>
                                    {{-- <span class="special__update">Cập nhật</span> --}}
                                </div>
                                <div class="btn__book">
                                    {{-- <a href="/dat-tour/idtour={{ $tour->id }}/{{ $tour->url }}"
                                        class="special__book-link">Đặt ngay</a> --}}
                                    <button class="special__book-link">Đặt ngay</button>
                                </div>
                            </div>
                        </div>
                        <div class="col l-6 l-o-1 m-12 c-12" style="margin-top: 10px">
                            <div class="special__img-wrap">
                                <div class="special__img">
                                    <h3 class="special__heading" style="max-width: 500px; margin-bottom: 10px">
                                        <span class="">{{ $tour->name }}</span>
                                    </h3>
                                    <img src="{{ $tour->file }}" style="max-width: 500px">
                                    <div class="infor_book">
                                        <div style="padding: 10px 0">
                                            <span class="text-infor"><i class="ri-map-pin-line"></i>
                                                {{ $tour->destination->name }}
                                            </span>
                                            <span class="text-infor"><i class="ri-time-line"></i>
                                                {{ $tour->time }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @csrf
    </form>

    {{-- ================= Xử lí giá tiền ================= --}}
    <script>
        function updateTotalPrice() {
            // Lấy số lượng và tính giá tiền Người lớn
            var quantityAdult = document.getElementById('qty_adult').value;
            var priceAdult = {!! $tour->price !!};
            var totalPriceAdult = quantityAdult * priceAdult;

            // Lấy số lượng và tính giá tiền Trẻ em
            var quantityChild = document.getElementById('qty_child').value;
            var priceChild = {!! $tour->price_child !!};
            var totalPriceChild = quantityChild * priceChild;

            // Tính tổng tiền
            var totalAll = totalPriceAdult + totalPriceChild;

            // Hiển thị tổng tiền
            document.getElementById('price_adult').innerText = totalPriceAdult.toLocaleString('vi-VN');
            document.getElementById('price_child').innerText = totalPriceChild.toLocaleString('vi-VN');
            document.getElementById('totalAll').innerText = totalAll.toLocaleString('vi-VN');
        }

        document.getElementById('qty_adult').addEventListener('change', updateTotalPrice);
        document.getElementById('qty_child').addEventListener('change', updateTotalPrice);

        updateTotalPrice();
    </script>
@endsection
