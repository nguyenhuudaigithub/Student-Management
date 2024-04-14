@extends('admin.layouts.layout')

@section('contentAdmin')
<div class="container">
    <h1>Chỉnh Sửa Khoa</h1>

    <form action="{{ route('admin/department/update', $DepartmentEdit->id) }}" method="POST">
        @csrf
        <input type="hidden" class="form-control" name="id" value="{{ $DepartmentEdit->id }}">
        <div class="form-group">
            <label for="name">Tên Khoa</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $DepartmentEdit->name }}">
        </div>
        <button type="submit" class="btn btn-primary">Chỉnh Sửa Khoa</button>
    </form>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/41.3.0/classic/ckeditor.js"></script>
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
