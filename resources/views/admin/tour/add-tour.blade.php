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
                                <input type="text" class="form-control" name="name" 
                                    value="{{ old('name') }}" placeholder="Nhập tên Tour">
                            </div>
                            <div class="form-group">
                                <label class="text-lb">Điểm đến:</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="id_destination">
                                    @foreach($destinations as $destination)
                                        <option value="{{ $destination->id }}">{{ $destination->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="text-lb">Thời gian:</label>
                                <input type="text" class="form-control" name="time" 
                                    value="{{ old('time') }}" placeholder="Nhập khoảng thời gian">
                            </div>
                            {{-- <div class="form-group">
                                <label class="text-lb">Tác giả sách:</label>
                                <input type="text" class="form-control" name="author" 
                                    value="{{ old('author') }}" placeholder="Nhập tên tác giả">
                            </div>
                            <div class="form-group">
                                <label class="text-lb">Nhà xuất bản:</label>
                                <input type="text" class="form-control" name="nxb" 
                                    value="{{ old('nxb') }}" placeholder="Nhập tên Nhà xuất bản">
                            </div> --}}
                            <div class="form-group">
                                <label class="text-lb">Thêm ảnh:</label>
                                <div>
                                    <input type="file" id="upload">
                                    <div id="showImg" style="margin-top: 10px">

                                    </div>
                                    <input type="hidden" name="file" id="file">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="text-lb">Giá vé người lớn (1 người):</label>
                                <input type="number" class="form-control" name="price" value="{{ old('price') }}" placeholder="Nhập giá vé người lớn">
                            </div>
                            <div class="form-group">
                                <label class="text-lb">Giá vé trẻ em (1 người):</label>
                                <input type="number" class="form-control" name="price_child" value="{{ old('price_child') }}" placeholder="Nhập giá vé trẻ em">
                            </div>
                            <div class="form-group">
                                <label class="text-lb">Mô tả:</label>
                                <textarea class="form-control" id="editor" name="description">{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="d-block text-lb">Trạng thái:</label>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" value="1" id="show" name="status" checked="">
                                    <label class="custom-control-label" for="show"> Hiện </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" value="0" id="hide" name="status">
                                    <label class="custom-control-label" for="hide"> Ẩn </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" style="font-weight: bold">Thêm Tour</button>
                            <button type="reset" class="btn btn-danger new">Trở lại</button>

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
