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
                            <a href="/admin/tours/add-tour" class="btn btn-primary">Thêm Tour</a>
                        </div>
                    </div>
                    @include('admin.alert')
                    <div class="iq-card-body">
                        <div class="table-responsive">
                            <div class="d-flex justify-content-center">
                                <form class="form-inline" action="" role="form">
                                    <div class="col">
                                        <div class="mb-3">
                                            <input name="key" id="" class="form-control style-border" placeholder="Tìm kiếm Tour">
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
                                        <th style="width: 2%;">ID</th>
                                        <th style="width: 14%;">Ảnh</th>
                                        <th style="width: 15%;">Tour</th>
                                        <th style="width: 9%;">Điểm đến</th>
                                        <th style="width: 10%;">Thời gian</th>
                                        <th style="width: 22%;">Mô tả</th>
                                        <th style="width: 7%; text-align:center">Giá người lớn</th>
                                        <th style="width: 7%; text-align:center">Giá trẻ em</th>
                                        <th style="width: 7%; text-align:center">Trạng thái</th>
                                        <th style="width: 7%; text-align:center">Chỉnh sửa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {!! \App\Helpers\Helper::showListTour($tours) !!}
                                    <script>
                                        var textContainers = document.querySelectorAll(".shortenedText");

                                        textContainers.forEach(function(textContainer) {
                                            var fullText = textContainer.textContent;
                                            var maxLength = 70;
                                            var shortenedText = fullText.length > maxLength ? fullText.substring(0, maxLength) + "..." : fullText;

                                            textContainer.innerHTML = shortenedText;
                                        });
                                    </script>
                                </tbody>
                            </table>
                            {{-- Tạo liên kết phân trang --}}
                            <div style="text-align: center">{!! $tours->appends(request()->all())->links() !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
