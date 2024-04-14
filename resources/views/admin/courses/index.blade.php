<div class="container">
    <h1>Danh sách khoá học</h1>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên bài viết</th>
                <th>Mô tả</th>
                <th>Giá</th>
                <th>Ngày bắt đầu</th>
                <th>Ngày kết thúc</th>
                <th>Lớp học</th>
                <th>Khoa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $courses)
            <tr>
                <td>{{ $courses->id }}</td>
                <td>{{ $courses->name }}</td>
                <td>{{ $courses->details }}</td>
                <td>{{ $courses->price}}</td>
                <td>{{ $courses->start_time }}</td>
                <td>{{ $courses->end_time }}</td>
                <td>{{ $courses->classroom }}</td>
                <td>{{ $courses->department_id }}</td>

                <td>
                    <a href="{{ route('admin.courses.edit', $courses->id) }}" class="btn btn-primary">Chỉnh sửa</a>
                    <form action="{{ route('admin.courses.delete', $courses->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
