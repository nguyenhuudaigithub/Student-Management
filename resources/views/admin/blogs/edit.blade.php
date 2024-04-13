@section('content')
<h1>Edit Blog</h1>

<form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ $blog->title }}">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control">{{ $blog->description }}</textarea>
    </div>

    <div class="form-group">
        <label for="detail">Detail</label>
        <textarea name="detail" id="detail" class="form-control" style="height: 300px">{{ $blog->detail }}</textarea>
    </div>

    <div class="form-group">
        <label for="tags">Tags</label>
        <textarea name="tags" id="tags" class="form-control">{{ $blog->tags }}</textarea>
    </div>

    <div class="form-group">
        <label for="isActive">Status</label>
        <select class="form-control" id="isActive" name="isActive">
            <option value="1" {{ $blog->isActive == 1 ? 'selected' : '' }}>Active</option>
            <option value="0" {{ $blog->isActive == 0 ? 'selected' : '' }}>Inactive</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Update Blog</button>
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
