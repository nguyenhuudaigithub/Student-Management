@section('content')
<h1>Create New Blog</h1>

<form action="{{ route('admin.blogs.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="detail">Detail</label>
        <textarea name="detail" id="detail" class="form-control" style="height: 300px"></textarea>
    </div>

    <div class="form-group">
        <label for="tags">tags</label>
        <textarea name="tags" id="tags" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="isActive">Trạng thái</label>
        <select class="form-control" id="isActive" name="isActive">
            <option value="1">Hiện</option>
            <option value="0">Ẩn</option>
        </select>
    </div>


    <button type="submit" class="btn btn-primary">Create Blog</button>
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
