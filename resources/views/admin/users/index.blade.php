<div class="container">
    <h1>Danh sách người dùng</h1>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Chức vụ</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->isAdmin ? 'Quản trị viên' : 'Người dùng' }}</td>
                <td>
                    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">Chỉnh sửa</a>
                    <!-- Các nút xóa có thể thêm sau -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
