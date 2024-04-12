<div class="container">
    <h1>Chỉnh sửa người dùng</h1>
    <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Tên</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
        </div>
        <div class="form-group">
            <label for="isAdmin">Chức vụ</label>
            <select class="form-control" id="isAdmin" name="isAdmin">
                <option value="0" {{ $user->isAdmin == 0 ? 'selected' : '' }}>Người dùng</option>
                <option value="1" {{ $user->isAdmin == 1 ? 'selected' : '' }}>Quản trị viên</option>
            </select>

        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>
