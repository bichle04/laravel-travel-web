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
                            <input type="hidden" name="id_tour" id="id_tour" value="{{ $tour->id }}">
                            <div class="form-group">
                                <label class="text-lb">Chương trình:</label>
                                <textarea class="form-control" id="editor" name="content">{{ old('content') }}</textarea>
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
