@extends('admin.layouts.layout')

@section('contentAdmin')
<div class="container">
    <h1>Chỉnh Sửa Bài Viết</h1>

    <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Tên Bài Viết</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $blog->title }}">
        </div>

        <div class="form-group">
            <label for="description">Mô Tả</label>
            <textarea name="description" id="description" class="form-control">{{ $blog->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="detail">Chi Tiết</label>
            <textarea name="detail" id="detail" class="form-control" style="height: 300px">{{ $blog->detail }}</textarea>
        </div>

        <div class="form-group">
            <label for="tags">Thẻ</label>
            <textarea name="tags" id="tags" class="form-control">{{ $blog->tags }}</textarea>
        </div>

        <div class="form-group">
            <label for="photo_url">Ảnh</label>
            @if($blog->photo_url)
            <img src="{{ $blog->photo_url }}" alt="Blog Photo" height="50" width="50">
            @endif
            <input type="file" name="photo_url" id="photo_url" class="form-control-file">
        </div>


        <div class="form-group">
            <label for="isActive">Trạng Thái</label>
            <select class="form-control" id="isActive" name="isActive">
                <option value="1" {{ $blog->isActive == 1 ? 'selected' : '' }}>Hiện</option>
                <option value="0" {{ $blog->isActive == 0 ? 'selected' : '' }}>Ẩn</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Cập Nhập</button>
    </form>
</div>
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
