@section('content')
<h1>Edit courses</h1>

<form action="{{ route('admin.courses.update', $courses->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="course_code">course_code</label>
        <input type="text" name="course_code" id="course_code" class="form-control" value="{{ $courses->course_code }}">
    </div>

    <div class="form-group">
        <label for="name">name</label>
        <textarea name="name" id="name" class="form-control">{{ $courses->name }}</textarea>
    </div>

    <div class="form-group">
        <label for="details">Details</label>
        <textarea name="details" id="details" class="form-control" style="height: 300px">{{ $courses->details }}</textarea>
    </div>

    <div class="form-group">
        <label for="price">price</label>
        <textarea name="price" id="price" class="form-control">{{ $courses->price }}</textarea>
    </div>
    <div class="form-group">
    <label for="start_time">Start Time</label>
    <input type="text" name="start_time" id="start_time" class="form-control" value="{{ old('start_time', $courses->start_time) }}">
    @error('start_time')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="end_time">End Time</label>
    <input type="text" name="end_time" id="end_time" class="form-control" value="{{ old('end_time', $courses->end_time) }}">
    @error('end_time')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
    <div class="form-group">
        <label for="classroom">classroom</label>
        <textarea name="classroom" id="classroom" class="form-control">{{ $courses->classroom }}</textarea>
    </div>



    <button type="submit" class="btn btn-primary">Update courses</button>
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
