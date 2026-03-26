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
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <a href="/admin/destinations/add-destination" class="btn btn-primary">Thêm điểm đến</a>
                        </div>
                    </div>
                    @include('admin.alert')
                    <div class="iq-card-body">
                        <div class="table-responsive">
                            <div class="d-flex justify-content-center">
                                <form class="form-inline" action="" role="form">
                                    <div class="col">
                                        <div class="mb-3">
                                            <input name="key" id="" class="form-control style-border" placeholder="Tìm kiếm điểm đến">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="ri-search-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <table class="table table-striped table-bordered" style="width:100%; text-align:center">
                                <thead>
                                    <tr>
                                        <th width="7%">ID</th>
                                        <th width="25%">Ảnh</th>
                                        <th width="18%">Điểm đến</th>
                                        <th width="15%">Khu vực</th>
                                        <th width="10%">Số Tour</th>
                                        <th width="10%">Trạng thái</th>
                                        <th width="15%">Chỉnh sửa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- dấu {!!  !!} dùng để biên dịch ra html --}}
                                    {!! \App\Helpers\Helper::showListDes($lists) !!}
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">{!! $lists->appends(request()->all())->links() !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
