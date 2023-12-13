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
                        <form action="" method="post">
                            <div class="form-group">
                                <label class="text-lb">Điểm đến:</label>
                                <input type="text" class="form-control" value="{{ $destination->name }}" name="name">
                            </div>
                            {{-- <div class="form-group">
                                <label>Description:</label>
                                <textarea class="form-control" rows="4" name="content_category">{{ $menu->content_category }}</textarea>
                            </div> --}}
                            <select class="form-control" id="" name="area">
                                {{-- @foreach($destinations as $destination) --}}
                                    <option value="0" {{ $destination->area == 0 ? 'selected' : '' }}>Trong nước</option>
                                    <option value="1" {{ $destination->area == 1 ? 'selected' : '' }}>Nước ngoài</option>
                                {{-- @endforeach --}}
                            </select>
                            <div class="form-group">
                                <label class="text-lb">Chọn ảnh:</label>
                                <div>
                                    <input type="file" id="upload">
                                    <div id="showImg" style="margin-top: 10px">
                                        <a href="{{ $destination->file }}" target="_blank">
                                            <img src="{{ $destination->file }}" width="200px">
                                        </a>
                                    </div>
                                    <input type="hidden" name="file" id="file" value="{{ $destination->file }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="d-block text-lb">Trạng thái:</label>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" value="1" id="show" name="status" 
                                    {{ $destination->status == 1 ? 'checked=""' : ''}}>
                                    <label class="custom-control-label" for="show"> Hiện </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" value="0" id="hide" name="status"
                                    {{ $destination->status == 0 ? 'checked=""' : ''}}>
                                    <label class="custom-control-label" for="hide"> Ẩn </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" style="font-weight: bold">Cập nhật</button>
                            <button type="reset" class="btn btn-danger new" style="font-weight: bold">Trở lại</button>

                            <!-- Tạo token -->
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
