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
                            <a href="/admin/schedules/add-schedule" class="btn btn-primary">Thêm Lịch trình</a>
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
                                                placeholder="Tìm kiếm Tour">
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
                                        <th style="width: 45%;">Tên Tour</th>
                                        <th style="width: 10%;">Mã lịch trình</th>
                                        <th style="width: 15%;">Ngày khởi hành</th>
                                        <th style="width: 15%;">Ngày tạo</th>
                                        <th style="width: 10%; text-align:center">Chỉnh sửa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $stt = 1;
                                    @endphp

                                    @foreach ($schedules as $schedule)
                                        <tr>
                                            <td style="text-align:center">{{ $stt++ }}</td>
                                            <td><a href="/admin/schedules/id={{ $schedule->tour->id }}/{{ $schedule->tour->url }}" class="link-name">{{ $schedule->tour->name }}</a></td>
                                            {{-- <td>{{ $schedule->tour->name }}</td> --}}
                                            <td style="text-align:center">{{ $schedule->id }}</td>
                                            <td style="text-align:center">{{ \Carbon\Carbon::parse($schedule->date)->format('d-m-Y') }}</td>
                                            <td style="text-align:center">{{ $schedule->created_at }}</td>
                                            <td style="text-align:center">
                                                <div class="flex align-items-center list-user-action">
                                                    <a class="bg-primary" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="Sửa"
                                                        href="/admin/schedules/edit-schedule/{{ $schedule->id }}">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                    <a class="bg-primary" data-toggle="tooltip" data-placement="top"
                                                        title="" data-original-title="Xoá" href="#"
                                                        onclick="delRow({{ $schedule->id }}, '/admin/schedules/delSchedule')">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- Tạo liên kết phân trang --}}
                            <div style="text-align: center">{!! $schedules->appends(request()->all())->links() !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
