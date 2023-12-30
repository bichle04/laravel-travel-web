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
                        <form action="" method="POST">
                            <div class="form-group">
                                <label class="text-lb">Tên Tour:</label>
                                <input type="text" class="form-control" name="name" value="{{ $tour->name }}">
                            </div>
                            <div class="form-group">
                                <label class="text-lb">Điểm đến:</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="id_destination">
                                    @foreach($destinations as $destination)
                                        <option value="{{ $destination->id }}" {{ $tour->id_destination == $destination->id ? 'selected' : ''}}>
                                            {{ $destination->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="text-lb">Thời gian:</label>
                                <input type="text" class="form-control" name="time" value="{{ $tour->time }}">
                            </div>
                            <div class="form-group">
                                <label class="text-lb">Chọn ảnh:</label>
                                <div>
                                    <input type="file" id="upload">
                                    <div id="showImg" style="margin-top: 10px">
                                        <a href="{{ $tour->file }}" target="_blank">
                                            <img src="{{ $tour->file }}" width="200px">
                                        </a>
                                    </div>
                                    <input type="hidden" name="file" id="file" value="{{ $tour->file }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="text-lb">Giá vé người lớn (1 người):</label>
                                <input type="number" class="form-control" name="price" value="{{ $tour->price }}">
                            </div>
                            <div class="form-group">
                                <label class="text-lb">Giá vé trẻ em (1 người):</label>
                                <input type="number" class="form-control" name="price_child" value="{{ $tour->price_child }}">
                            </div>
                            <div class="form-group">
                                <label class="text-lb">Mô tả:</label>
                                <textarea class="form-control" id="editor" name="description">{{ $tour->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="d-block text-lb">Trạng thái:</label>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" value="1" id="show" name="status"
                                        {{ $tour->status == 1 ? 'checked=""' : ''}}>
                                    <label class="custom-control-label" for="show"> Hiện </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" value="0" id="hide" name="status"
                                        {{ $tour->status == 0 ? 'checked=""' : ''}}>
                                    <label class="custom-control-label" for="hide"> Ẩn </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" style="font-weight: bold">Cập nhật</button>

                            <!-- Tạo token -->
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CKEditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/super-build/ckeditor.js"></script>
<script src="/assets/admin/js/script.js"></script>
@endsection
