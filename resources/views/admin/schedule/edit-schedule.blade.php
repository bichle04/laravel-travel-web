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
                        <form action="" method="POST" id="scheduleForm">
                            <div class="form-group">
                                <label class="text-lb">Tour:</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="id_tour">
                                    @foreach($tours as $tour)
                                        <option value="{{ $tour->id }}" {{ $schedule->id_tour == $tour->id ? 'selected' : ''}}>{{ $tour->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="text-lb">Ngày khởi hành:</label>
                                <input type="date" class="form-control" name="date" value="{{ $schedule->date }}">
                            </div>
                            <button type="submit" class="btn btn-primary" style="font-weight: bold" id="chooseDate">Cập nhật</button>

                            <!-- Tạo token -->
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
