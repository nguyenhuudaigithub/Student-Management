@extends('admin.layouts.layout')

@section('contentAdmin')
<h1>Chỉnh sửa khoa</h1>

<form action="{{ route('admin/department/add/save') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Tên khoa</label>
        <input type="text" name="name" id="name" class="form-control">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Tạo khoa</button>
</form>

<script src="https://cdn.ckeditor.com/ckeditor5/41.3.0/classic/ckeditor.js"></script>
@endsection
