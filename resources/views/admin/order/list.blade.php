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
                                        <th style="width: 10%;">STT</th>
                                        <th style="width: 55%;">Tên Tour</th>
                                        <th style="width: 15%;">Lượt đặt</th>
                                        <th style="width: 20%;">Ngày khởi hành</th>
                                        {{-- <th style="width: 10%; text-align:center">Chỉnh sửa</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $stt = 1;
                                    @endphp

                                    @foreach ($schedules as $schedule)
                                        <tr>
                                            <td style="text-align:center">{{ $stt++ }}</td>
                                            <td><a href="/admin/schedules/id={{ $schedule->id }}/{{ $schedule->url }}"
                                                    class="link-name">{{ $schedule->ten }}</a></td>
                                            <td style="text-align:center">{{ $schedule->Tong }}</td>
                            
                                            <td style="text-align:center">
                                                {{ \Carbon\Carbon::parse($schedule->departure)->format('d-m-Y') }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div style="text-align: center">{!! $schedules->appends(request()->all())->links() !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
