@extends('admin.layouts.layout')

@section('contentAdmin')
<div class="container">
    <h1>Chỉnh Sửa Bài Viết</h1>

    <form action="{{ route('admin.courses.update', $courses->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Tên Khóa Học</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $courses->name }}">
        </div>

        <div class="form-group">
            <label for="details">Chi Tiết</label>
            <textarea name="details" id="details" class="form-control">{{ $courses->details }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Giá</label>
            <textarea name="price" id="price" class="form-control">{{ $courses->price }}</textarea>
        </div>
        <div class="form-group">
            <label for="start_time">Thời gian bắt đầu</label>
            <textarea name="start_time" id="start_time" class="form-control">{{ $courses->start_time }}</textarea>
        </div>
        <div class="form-group">
            <label for="end_time">Thời Gian Kết Thúc</label>
            <textarea name="end_time" id="end_time" class="form-control">{{ $courses->end_time }}</textarea>
        </div>
        <div class="form-group">
            <label for="classroom">Mã Lớp Họcc</label>
            <textarea name="classroom" id="classroom" class="form-control">{{ $courses->classroom }}</textarea>
        </div>
        <div class="form-group">
            <label for="department_id">Khoa</label>
            <textarea name="department_id" id="department_id" class="form-control">{{ $courses->department_id }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Chỉnh Sửa Khóa Học</button>
    </form>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/41.3.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#details'))
        .then(editor => {
            editor.editing.view.change(writer => {
                writer.setStyle('height', '300px', editor.editing.view.document.getRoot());
            });
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
