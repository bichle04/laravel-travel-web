<p>Cảm ơn bạn đã đặt Tour tại trang web TravelWithU của chúng tôi!</p>
<p>Sau đây là thông tin đơn đặt Tour của bạn</p>
<ul>
    <li>Họ và tên: <b>{{ $fname }}</b></li>
    <li>Email: <b>{{ $email }}</b></li>
    <li>Số điện thoại: <b>{{ $phone }}</b></li>
    <li>Tour du lịch: <b>{{ $tour_name }}</b></li>
    <li>Ngày khởi hành: <b>{{ \Carbon\Carbon::parse($departure)->format('d-m-Y') }}</b></li>
    <li>Số lượng người lớn: {{ $qty_adult }}</li>
    <li>Số lượng trẻ em: {{ $qty_child }}</li>
    <li>Tổng chi phí: <b style="color: red">{{ str_replace(',', '.', number_format($total_price)) }}</b></li>
</ul>
<h2>Chương trình Tour: </h2>
<div>{!! $pg_content !!}</div>
<p style="font-size: larger">Quý khách sẽ phải hoàn tất việc <b>thanh toán trực tiếp</b> với nhân viên của chúng tôi trước khi khởi hành.</p>