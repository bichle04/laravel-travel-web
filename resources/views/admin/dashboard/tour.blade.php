@extends('admin.main')

@section('content')
    <div class="container-fluid" style="margin-top: -20px">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">{{ $title }}</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                            <div class="d-flex justify-content-center">
                                <form class="form-inline" action="" role="form">
                                    <div class="col">
                                        <div class="mb-3">
                                            <input name="key" id="" class="form-control style-border"
                                                placeholder="Tìm kiếm điểm đến">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="ri-search-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                            <div class="d-flex justify-content-center" style="margin: 20px 0">
                                <select id="month" name="month" class="style__select">
                                    @for ($i = 1; $i <= 12; $i++)
                                        <option value="{{ $i }}">Tháng {{ $i }}</option>
                                    @endfor
                                </select>
                                <span class="lb__year">Nhập năm : </span>
                                <input type="number" id="year" class="input__year" name="year" value="">
                                <button type="button" class="btn btn-primary" style="font-weight: bold;" onclick="getThongke()">Thống
                                    kê</button>
                                <span for="amount" class="lb__sort">Sắp xếp theo : </span>
                                <select id="sortOptions" class="style__select">
                                    <option value="desc">Giảm dần</option>
                                    <option value="asc">Tăng dần</option>
                                </select>
                            </div>
                            <table class="table table-striped table-bordered table-db" style="width:100%;">
                                <thead style="text-align:center">
                                    <tr>
                                        <th>Tên Tour</th>
                                        <th>Số lượng đặt</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script src="/assets/admin/js/dashboardTour.js"></script> --}}
@endsection
