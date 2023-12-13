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
                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr style="text-align:center">
                                    <th width="10%">ID Tour</th>
                                    <th width="50%">Tour</th>
                                    <th width="30%">Ngày</th>
                                    <th width="10%">Xóa</th>
                                </tr>
                            </thead>
                            <tbody class="table-body">

                            </tbody>
                        </table>
                        <div style="text-align: center; margin-top: 30px">
                            <button type="button" class="btn btn-primary" onclick="getvalue()">Lưu lịch trình</button>
                        </div>

                        <div class="form-group">
                            <label class="text-lb">Chọn tour:</label>
                            <select class="form-control" id="idTour" name="id_tour">
                                @foreach ($tours as $tour)
                                    <option value="{{ $tour->id }}">{{ $tour->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-lb">Chọn ngày khởi hành:</label>
                            <input type="date" id="selectedDate"
                                style="margin-left: 10px; border-radius: 5px; border-color: lightgray">
                            <button type="button" class="btn btn-primary" onclick="addRow()">Chọn</button>
                        </div>

                        @csrf
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
