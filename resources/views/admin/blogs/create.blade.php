@extends('admin.layouts.layout')

@section('contentAdmin')
<h1>Tạo Mới Bài Viết</h1>

<form action="{{ route('admin.blogs.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="title">Tên Bài Viết</label>
        <input type="text" name="title" id="title" class="form-control">
    </div>

    <div class="form-group">
        <label for="description">Mô Tả</label>
        <textarea name="description" id="description" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="detail">Chi Tiết</label>
        <textarea name="detail" id="detail" class="form-control" style="height: 300px"></textarea>
    </div>

    <div class="form-group">
        <label for="tags">Thẻ</label>
        <textarea name="tags" id="tags" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="isActive">Trạng thái</label>
        <select class="form-control" id="isActive" name="isActive">
            <option value="1">Hiện</option>
            <option value="0">Ẩn</option>
        </select>
    </div>


    <button type="submit" class="btn btn-primary">Tạo Mới Bài Viết</button>
</form>

<script src="https://cdn.ckeditor.com/ckeditor5/41.3.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#detail'))
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
