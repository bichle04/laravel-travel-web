@extends('admin.main')

@section('content')
    <div class="container-fluid" style="margin-top: -20px">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">{{ $tourName }}</h4>
                            <p class="card-title" style="color: black; margin-top: 5px">
                                Ngày khởi hành: 
                                <b style="color: var(--iq-primary)">{{ $date }}</b>
                            </p>
                        </div>
                    </div>
                    @include('admin.alert')
                    <div class="iq-card-body">
                        <div class="table-responsive">
                            <div class="d-flex justify-content-center">
                                <form class="form-inline" action="" role="form">
                                    <div class="col">
                                        <div class="mb-3">
                                            <input name="key" id="" class="form-control style-border"
                                                placeholder="Tìm kiếm Khách hàng">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="ri-search-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <table class="table table-striped table-bordered text-align:center" style="width:100%">
                                <thead>
                                    <tr style="text-align:center">
                                        <th style="width: 5%;">STT</th>
                                        <th style="width: 12%;">Tên người dùng</th>
                                        <th style="width: 15%;">Họ tên</th>
                                        <th style="width: 10%;">Số điện thoại</th>
                                        <th style="width: 23%;">Email</th>
                                        <th style="width: 8%;">Người lớn</th>
                                        <th style="width: 8%;">Trẻ em</th>
                                        <th style="width: 10%;">Tổng tiền</th>
                                        <th style="width: 9%">Ngày đặt</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $stt = 1;
                                    @endphp

                                    @foreach ($bills as $bill)
                                        <tr>
                                            <td style="text-align:center">{{ $stt++ }}</td>
                                            <td>{{ $bill->user->name }}</a></td>
                                            <td>{{ $bill->fname }}</td>
                                            <td style="text-align:center">{{ $bill->phone }}</td>
                                            <td>{{ $bill->email }}</td>
                                            <td style="text-align:center">{{ $bill->qty_adult }}</td>
                                            <td style="text-align:center">{{ $bill->qty_child }}</td>
                                            <td style="text-align:center">{{ number_format($bill->total_price, 0, '', '.') }}</td>
                                            <td style="text-align:center">{{ \Carbon\Carbon::parse($bill->created_at)->format('d-m-Y') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div style="text-align: center">{!! $bills->appends(request()->all())->links() !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
