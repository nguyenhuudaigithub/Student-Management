{{-- <div class="container">
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
                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> --}}
</div>

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách người dùng</title>
    <!-- Link CSS của Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS tùy chỉnh -->
    <style>
        /* Định dạng background */
        body {
            background-image: url('path/to/your/image.jpg');
            /* Thay đổi 'path/to/your/image.jpg' thành đường dẫn đến hình nền của bạn */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding-top: 60px;
            /* Để giữ nội dung không bị che khuất bởi navbar */
        }

        /* Định dạng navbar */
        .navbar {
            background-color: rgba(0, 0, 0, 0.5);
            /* Để navbar có màu nền mờ */
        }

        /* Định dạng nội dung */
        .container {
            background-color: rgba(255, 255, 255, 0.7);
            /* Để nội dung có màu nền mờ trắng */
            border-radius: 10px;
            /* Bo góc của container */
            padding: 20px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Nội dung -->
    <div class="container mt-5">
        <h1 class="text-center">Danh sách người dùng</h1>
        <!-- Bảng danh sách người dùng -->
        <table class="table table-striped mt-4">
            <!-- Phần tiêu đề bảng -->
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Chức vụ</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <!-- Phần nội dung bảng -->
            <tbody>
                <!-- Dùng vòng lặp để hiển thị danh sách người dùng -->
                <tr>
                    <td>1</td>
                    <td>Người dùng 1</td>
                    <td>user1@example.com</td>
                    <td>Người dùng</td>
                    <td>
                        <button type="button" class="btn btn-primary">Chỉnh sửa</button>
                        <button type="button" class="btn btn-danger">Xóa</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Người dùng 2</td>
                    <td>user2@example.com</td>
                    <td>Quản trị viên</td>
                    <td>
                        <button type="button" class="btn btn-primary">Chỉnh sửa</button>
                        <button type="button" class="btn btn-danger">Xóa</button>
                    </td>
                </tr>
                <!-- Kết thúc vòng lặp -->
            </tbody>
        </table>
    </div>

    <!-- Link JS của Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html> --}}



{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách người dùng</title>
    <!-- Link CSS của Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS tùy chỉnh -->
    <style>
        /* Định dạng background */
        body {
            background-image: url('path/to/your/image.jpg');
            /* Thay đổi 'path/to/your/image.jpg' thành đường dẫn đến hình nền của bạn */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding-top: 60px;
            /* Để giữ nội dung không bị che khuất bởi navbar */
        }

        /* Định dạng navbar */
        .navbar {
            background-color: rgba(0, 0, 0, 0.5);
            /* Để navbar có màu nền mờ */
        }

        /* Định dạng nội dung */
        .container {
            background-color: rgba(255, 255, 255, 0.7);
            /* Để nội dung có màu nền mờ trắng */
            border-radius: 10px;
            /* Bo góc của container */
            padding: 20px;
        }

        /* Định dạng nút chỉnh sửa và xóa */
        .btn-edit {
            background-color: #007bff;
            /* Màu nút chỉnh sửa */
            border-color: #007bff;
            /* Màu viền nút chỉnh sửa */
        }

        .btn-delete {
            background-color: #dc3545;
            /* Màu nút xóa */
            border-color: #dc3545;
            /* Màu viền nút xóa */
        }

        .btn-edit,
        .btn-delete {
            color: #fff;
            /* Màu chữ của nút */
        }

        .btn-edit:hover,
        .btn-delete:hover {
            color: #fff;
            /* Màu chữ của nút khi hover */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Nội dung -->
    <div class="container mt-5">
        <h1 class="text-center">Danh sách người dùng</h1>
        <!-- Bảng danh sách người dùng -->
        <table class="table table-striped mt-4">
            <!-- Phần tiêu đề bảng -->
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Chức vụ</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <!-- Phần nội dung bảng -->
            <tbody>
                <!-- Dùng vòng lặp để hiển thị danh sách người dùng -->
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->isAdmin ? 'Quản trị viên' : 'Người dùng' }}</td>
                        <td>
                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-edit">Chỉnh sửa</a>
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <!-- Kết thúc vòng lặp -->
            </tbody>
        </table>
    </div>

    <!-- Link JS của Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html> --}}


{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách người dùng</title>
    <!-- Link CSS của Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS tùy chỉnh -->
    <style>
        /* Định dạng background */
        body {
            background-image: url('path/to/your/image.jpg');
            /* Thay đổi 'path/to/your/image.jpg' thành đường dẫn đến hình nền của bạn */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding-top: 60px;
            /* Để giữ nội dung không bị che khuất bởi navbar */
        }

        /* Định dạng navbar */
        .navbar {
            background-color: #343a40;
            /* Màu nền của navbar */
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #fff;
            /* Màu chữ của các liên kết trong navbar */
        }

        .navbar-brand:hover,
        .navbar-nav .nav-link:hover {
            color: #fff;
            /* Màu chữ của các liên kết khi hover */
        }

        /* Định dạng nội dung */
        .container {
            background-color: rgba(255, 255, 255, 0.7);
            /* Để nội dung có màu nền mờ trắng */
            border-radius: 10px;
            /* Bo góc của container */
            padding: 20px;
            margin-top: 20px;
        }

        /* Định dạng nút chỉnh sửa và xóa */
        .btn-edit {
            background-color: #007bff;
            /* Màu nút chỉnh sửa */
            border-color: #007bff;
            /* Màu viền nút chỉnh sửa */
        }

        .btn-delete {
            background-color: #dc3545;
            /* Màu nút xóa */
            border-color: #dc3545;
            /* Màu viền nút xóa */
        }

        .btn-edit,
        .btn-delete {
            color: #fff;
            /* Màu chữ của nút */
        }

        .btn-edit:hover,
        .btn-delete:hover {
            color: #fff;
            /* Màu chữ của nút khi hover */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/dashboard">Trang chủ</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <!-- Đã xóa liên kết "Dashboard" -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- Nội dung -->
    <div class="container mt-5">
        <h1 class="text-center">Danh sách người dùng</h1>
        <!-- Bảng danh sách người dùng -->
        <table class="table table-striped mt-4">
            <!-- Phần tiêu đề bảng -->
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Chức vụ</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <!-- Phần nội dung bảng -->
            <tbody>
                <!-- Dùng vòng lặp để hiển thị danh sách người dùng -->
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->isAdmin ? 'Quản trị viên' : 'Người dùng' }}</td>
                        <td>
                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-edit">Chỉnh sửa</a>
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <!-- Kết thúc vòng lặp -->
            </tbody>
        </table>
    </div>

    <!-- Link JS của Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html> --}}


{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách người dùng</title>
    <!-- Link CSS của Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS tùy chỉnh -->
    <style>
        /* Định dạng background */
        body {
            background-image: url('path/to/your/image.jpg');
            /* Thay đổi 'path/to/your/image.jpg' thành đường dẫn đến hình nền của bạn */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding-top: 60px;
            /* Để giữ nội dung không bị che khuất bởi navbar */
        }

        /* Định dạng navbar */
        .navbar {
            background-color: #007bff;
            /* Màu nền của navbar */
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #fff;
            /* Màu chữ của các liên kết trong navbar */
        }

        .navbar-brand:hover,
        .navbar-nav .nav-link:hover {
            color: #fff;
            /* Màu chữ của các liên kết khi hover */
        }

        /* Định dạng nội dung */
        .container {
            background-color: rgba(255, 255, 255, 0.7);
            /* Để nội dung có màu nền mờ trắng */
            border-radius: 10px;
            /* Bo góc của container */
            padding: 20px;
            margin-top: 20px;
        }

        /* Định dạng nút chỉnh sửa và xóa */
        .btn-edit,
        .btn-delete {
            color: #fff;
            /* Màu chữ của nút */
            transition: background-color 0.3s ease;
            /* Hiệu ứng hover */
        }

        .btn-edit:hover,
        .btn-delete:hover {
            color: #fff;
            /* Màu chữ của nút khi hover */
        }

        .btn-edit {
            background-color: #28a745;
            /* Màu nút chỉnh sửa */
            border-color: #28a745;
            /* Màu viền nút chỉnh sửa */
        }

        .btn-delete {
            background-color: #dc3545;
            /* Màu nút xóa */
            border-color: #dc3545;
            /* Màu viền nút xóa */
        }

        /* Hiệu ứng hover cho dòng trong bảng */
        tbody tr:hover {
            background-color: rgba(0, 123, 255, 0.1);
            /* Màu nền của dòng khi hover */
        }

        /* Icon cho nút chỉnh sửa và xóa */
        .btn-edit::before {
            content: '\f044';
            /* Unicode của biểu tượng bút chì */
            font-family: 'Font Awesome 5 Free';
            /* Sử dụng Font Awesome */
            margin-right: 5px;
        }

        .btn-delete::before {
            content: '\f1f8';
            /* Unicode của biểu tượng thùng rác */
            font-family: 'Font Awesome 5 Free';
            /* Sử dụng Font Awesome */
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/dashboard">Trang chủ</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <!-- Đã xóa liên kết "Dashboard" -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- Nội dung -->
    <div class="container mt-5">
        <h1 class="text-center">Danh sách người dùng</h1>
        <!-- Bảng danh sách người dùng -->
        <table class="table table-striped mt-4">
            <!-- Phần tiêu đề bảng -->
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Chức vụ</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <!-- Phần nội dung bảng -->
            <tbody>
                <!-- Dùng vòng lặp để hiển thị danh sách người dùng -->
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->isAdmin ? 'Quản trị viên' : 'Người dùng' }}</td>
                        <td>
                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-edit">Chỉnh sửa</a>
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <!-- Kết thúc vòng lặp -->
            </tbody>
        </table>
    </div>

    <!-- Link JS của Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html> --}}


{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách người dùng</title>
    <!-- Link CSS của Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS tùy chỉnh -->
    <style>
        /* Định dạng background */
        body {
            background-image: url('path/to/your/image.jpg');
            /* Thay đổi 'path/to/your/image.jpg' thành đường dẫn đến hình nền của bạn */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding-top: 60px;
            /* Để giữ nội dung không bị che khuất bởi navbar */
        }

        /* Định dạng navbar */
        .navbar {
            background-color: #343a40;
            /* Màu nền của navbar */
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #fff;
            /* Màu chữ của các liên kết trong navbar */
        }

        .navbar-brand:hover,
        .navbar-nav .nav-link:hover {
            color: #fff;
            /* Màu chữ của các liên kết khi hover */
        }

        /* Định dạng nội dung */
        .container {
            background-color: rgba(255, 255, 255, 0.7);
            /* Để nội dung có màu nền mờ trắng */
            border-radius: 10px;
            /* Bo góc của container */
            padding: 20px;
            margin-top: 20px;
        }

        /* Định dạng bảng */
        .table {
            border-radius: 10px;
            overflow: hidden;
        }

        .table thead th {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
        }

        .table tbody tr:hover {
            background-color: rgba(0, 123, 255, 0.1);
        }

        .table .btn {
            color: #fff;
            transition: background-color 0.3s ease;
        }

        .table .btn:hover {
            color: #fff;
        }

        .btn-edit {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-delete {
            background-color: #dc3545;
            border-color: #dc3545;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/dashboard">Trang chủ</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <!-- Đã xóa liên kết "Dashboard" -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- Nội dung -->
    <div class="container mt-5">
        <h1 class="text-center">Danh sách người dùng</h1>
        <!-- Bảng danh sách người dùng -->
        <div class="table-responsive">
            <table class="table table-striped mt-4">
                <!-- Phần tiêu đề bảng -->
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Chức vụ</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <!-- Phần nội dung bảng -->
                <tbody>
                    <!-- Dùng vòng lặp để hiển thị danh sách người dùng -->
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->isAdmin ? 'Quản trị viên' : 'Người dùng' }}</td>
                            <td>
                                <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-edit">Chỉnh sửa</a>
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <!-- Kết thúc vòng lặp -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Link JS của Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách người dùng</title>
    <!-- Link CSS của Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS tùy chỉnh -->
    <style>
        /* Định dạng background */
        body {
            background-image: url('path/to/your/image.jpg');
            /* Thay đổi 'path/to/your/image.jpg' thành đường dẫn đến hình nền của bạn */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding-top: 60px;
            /* Để giữ nội dung không bị che khuất bởi navbar */
        }

        /* Định dạng navbar */
        .navbar {
            background-color: #007bff; /* Màu nền của navbar */
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #fff; /* Màu chữ của các liên kết trong navbar */
        }

        .navbar-brand:hover,
        .navbar-nav .nav-link:hover {
            color: #fff; /* Màu chữ của các liên kết khi hover */
        }

        /* Định dạng nội dung */
        .container {
            background-color: rgba(255, 255, 255, 0.7); /* Để nội dung có màu nền mờ trắng */
            border-radius: 10px; /* Bo góc của container */
            padding: 20px;
            margin-top: 20px;
        }

        /* Định dạng bảng */
        .table {
            border-radius: 10px;
            overflow: hidden;
        }

        .table thead th {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
        }

        .table tbody tr:hover {
            background-color: rgba(0, 123, 255, 0.1);
        }

        .table .btn {
            color: #fff;
            transition: background-color 0.3s ease;
        }

        .table .btn:hover {
            color: #fff;
        }

        .btn-edit {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-delete {
            background-color: #dc3545;
            border-color: #dc3545;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/dashboard">Trang chủ</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <!-- Đã xóa liên kết "Dashboard" -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- Nội dung -->
    <div class="container mt-5">
        <h1 class="text-center">Danh sách người dùng</h1>
        <!-- Bảng danh sách người dùng -->
        <div class="table-responsive">
            <table class="table table-striped mt-4">
                <!-- Phần tiêu đề bảng -->
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Chức vụ</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <!-- Phần nội dung bảng -->
                <tbody>
                    <!-- Dùng vòng lặp để hiển thị danh sách người dùng -->
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->isAdmin ? 'Quản trị viên' : 'Người dùng' }}</td>
                            <td>
                                <a href="{{ route('admin.users.edit', $user->id) }}"
                                    class="btn btn-edit">Chỉnh sửa</a>
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <!-- Kết thúc vòng lặp -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Link JS của Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
