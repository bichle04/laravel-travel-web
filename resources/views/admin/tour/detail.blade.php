@extends('admin.main')

@section('content')
    <div class="container-fluid" style="margin-top: -20px">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">Thông tin</h4>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <a href="/admin/tours/edit-tour/{{ $tour->id }}" class="btn btn-primary">Sửa thông tin</a>
                        </div>
                    </div>
                    <div class="iq-card-body pb-0">
                        <div class="description-contens align-items-top row">
                            <div class="col-md-6">
                                <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                                    <div class="iq-card-body p-0">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <a href="javascript:void(0);">
                                                    <img src="{{ $tour->file }}" class="img-fluid w-100 rounded"
                                                        alt="">
                                                </a>
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
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                                    <div class="iq-card-body p-0">
                                        <h3 class="mb-3">{{ $tour->name }}</h3>
                                        <div class="mb-3 d-block">
                                            <span class="font-size-20 text-warning">
                                                <i class="fa fa-star mr-1"></i>
                                                <i class="fa fa-star mr-1"></i>
                                                <i class="fa fa-star mr-1"></i>
                                                <i class="fa fa-star mr-1"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <div class="price d-flex align-items-center font-weight-500 mb-2">
                                            <span class="font-size-20 text-gray">Người lớn:</span>
                                            <span class="font-size-24" style="margin-left: auto; color: #1bbc9b;">
                                                {!! \App\Helpers\Helper::price($tour->price) !!} đ/người
                                            </span>
                                        </div>
                                        <div class="price d-flex align-items-center font-weight-500 mb-2">
                                            <span class="font-size-20 text-gray">Trẻ em: </span>
                                            <span class="font-size-24" style="margin-left: auto; color: #1bbc9b;">
                                                {!! \App\Helpers\Helper::price($tour->price_child) !!} đ/người
                                            </span>
                                        </div>
                                        <span class="text-dark mb-4 pb-4 d-block font-size-description">{!! $tour->description !!}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
