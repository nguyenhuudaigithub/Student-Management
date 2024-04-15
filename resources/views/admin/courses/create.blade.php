@extends('admin.layouts.layout')

@section('contentAdmin')
<h1>Tạo Mới Khóa Học</h1>

<form action="{{ route('admin.courses.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Tên Khóa Học</label>
        <input type="text" name="name" id="name" class="form-control">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="details">Chi Tiết</label>
        <textarea name="details" id="details" class="form-control" style="height: 300px"></textarea>
        @error('details')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="price">Giá</label>
        <input type="text" name="price" id="price" class="form-control">
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="start_time">Thời Gian Bắt Đầu</label>
        <input type="text" name="start_time" id="start_time" class="form-control">
        @error('start_time')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="end_time">Thời Gian Kết Thúc</label>
        <input type="text" name="end_time" id="end_time" class="form-control">
        @error('end_time')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="classroom">Mã Lớp Học</label>
        <input type="text" name="classroom" id="classroom" class="form-control">
        @error('classroom')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
    <label for="department_id">Department</label>
    <select name="department_id" id="department_id" class="form-control">
        <option selected disabled>Please Select Department</option>
        @foreach($departments as $department)
            <option value="{{ $department->id }}">{{ $department->name }}</option>
        @endforeach
    </select>
    @error('department_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

    <button type="submit" class="btn btn-primary">Tạo Khóa Học</button>
</form>

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
