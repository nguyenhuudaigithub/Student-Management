<div class="container">
    <h1>Danh sách bài viết người dùng</h1>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên bài viết</th>
                <th>Mô tả</th>
                <th>Đường dẫn</th>
                <th>Trạng thái</th>
                <th>Ngày chỉnh sửa</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
            <tr>
                <td>{{ $blog->id }}</td>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->description }}</td>
                <td>{{ $blog->slug }}</td>
                <td>{{ $blog->isActive ? 'Hiện thị' : 'Ẩn' }}</td>
                <td>{{ $blog->updated_at }}</td>
                <td>
                    <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-primary">Chỉnh sửa</a>
                    <form action="{{ route('admin.blogs.delete', $blog->id) }}" method="POST" style="display: inline;">
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
