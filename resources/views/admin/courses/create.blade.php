@section('content')
<h1>Create New Blog</h1>

<form action="{{ route('admin.courses.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="course_code">Course Code</label>
        <input type="text" name="course_code" id="course_code" class="form-control">
        @error('course_code')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="details">Details</label>
        <textarea name="details" id="details" class="form-control" style="height: 300px"></textarea>
        @error('details')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" name="price" id="price" class="form-control">
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="start_time">Start Time</label>
        <input type="text" name="start_time" id="start_time" class="form-control">
        @error('start_time')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="end_time">End Time</label>
        <input type="text" name="end_time" id="end_time" class="form-control">
        @error('end_time')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="classroom">Classroom</label>
        <input type="text" name="classroom" id="classroom" class="form-control">
        @error('classroom')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>


    <button type="submit" class="btn btn-primary">Create Courses</button>
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