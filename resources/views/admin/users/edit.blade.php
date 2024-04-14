{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa người dùng</title>
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

        /* Định dạng nội dung */
        .container {
            background-color: rgba(255, 255, 255, 0.7);
            /* Để nội dung có màu nền mờ trắng */
            border-radius: 10px;
            /* Bo góc của container */
            padding: 20px;
            margin-top: 20px;
            /* Khoảng cách từ top */
            max-width: 800px;
            /* Định dạng kích thước container */
        }

        /* Định dạng nút lưu */
        .btn-save {
            background-color: #007bff;
            /* Màu nút lưu */
            border-color: #007bff;
            /* Màu viền nút lưu */
        }

        .btn-save {
            color: #fff;
            /* Màu chữ của nút lưu */
        }

        .btn-save:hover {
            color: #fff;
            /* Màu chữ của nút lưu khi hover */
        }

        /* Định dạng nút trở lại trang trước */
        .btn-back {
            background-color: #007bff;
            /* Màu nút trở lại trang trước */
            border-color: #007bff;
            /* Màu viền nút trở lại trang trước */
            color: #fff;
            /* Màu chữ của nút trở lại trang trước */
        }

        .btn-back:hover {
            color: #fff;
            /* Màu chữ của nút trở lại trang trước khi hover */
        }
    </style>
</head>

<body>
    <!-- Nội dung -->
    <div class="container">
        <h1 class="text-center">Chỉnh sửa người dùng</h1>
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
            <button type="submit" class="btn btn-save btn-block">Lưu</button>
            <button onclick="goBack()" class="btn btn-back btn-block">Trở lại trang trước</button>
        </form>
    </div>

    <!-- Link JS của Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa người dùng</title>
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
            /* Khoảng cách từ top */
            max-width: 800px;
            /* Định dạng kích thước container */
        }

        /* Định dạng nút lưu */
        .btn-save {
            background-color: #007bff;
            /* Màu nút lưu */
            border-color: #007bff;
            /* Màu viền nút lưu */
        }

        .btn-save {
            color: #fff;
            /* Màu chữ của nút lưu */
        }

        .btn-save:hover {
            color: #fff;
            /* Màu chữ của nút lưu khi hover */
        }

        /* Định dạng nút trở lại trang trước */
        .btn-back {
            background-color: #007bff;
            /* Màu nút trở lại trang trước */
            border-color: #007bff;
            /* Màu viền nút trở lại trang trước */
            color: #fff;
            /* Màu chữ của nút trở lại trang trước */
        }

        .btn-back:hover {
            color: #fff;
            /* Màu chữ của nút trở lại trang trước khi hover */
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
                    <!-- Đã xóa liên kết "Dashboard" và giữ lại chỉ có "Trang chủ" -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- Nội dung -->
    <div class="container mt-5">
        <h1 class="text-center">Chỉnh sửa người dùng</h1>
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
            <button type="submit" class="btn btn-save btn-block">Lưu</button>
            <button onclick="goBack()" class="btn btn-back btn-block">Trở lại trang trước</button>
        </form>
    </div>

    <!-- Link JS của Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>
