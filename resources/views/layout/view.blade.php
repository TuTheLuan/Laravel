<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết người dùng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-custom {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
        .navbar-custom a {
            text-decoration: none;
            margin: 0 10px;
            color: black;
        }
        .container-custom {
            width: 400px;
            padding: 20px;
            border: 1px solid black;
            background: white;
        }
        .info-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 8px 0;
        }
        .info-row label {
            font-weight: bold;
            width: 100px;
        }
        .info-row span {
            flex-grow: 1;
            text-align: left;
        }
        .footer {
            text-align: center;
            border: 1px solid black;
            padding: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body class="d-flex flex-column align-items-center bg-light vh-100">

    <!-- Thanh Navbar trên -->
    <div class="navbar-custom w-75">
        <a href="#">Home</a> | 
        <a href="{{ route('layout.signout') }}">Đăng xuất</a>
    </div>

    <!-- Chi tiết người dùng -->
    <div class="container-custom mt-3">
        <h4 class="text-center">Màn hình chi tiết</h4>
        @if(isset($user))
    <div class="info-row">
        <label>Username</label>
        <span>{{ $user->username }}</span>
    </div>
    <div class="info-row">
        <label>Email</label>
        <span>{{ $user->email }}</span>
    </div>
    @else
    <p class="text-danger">Không tìm thấy thông tin người dùng.</p>
    @endif

        <div class="text-end mt-3">
            <!-- Nút chỉnh sửa có liên kết đến trang chỉnh sửa với id người dùng -->
            <a href="{{ route('user.update', ['id' => $user->id]) }}" class="btn btn-primary">Chỉnh sửa</a>
            
        </div>
    </div>

    <!-- Thanh Navbar dưới -->
    <div class="footer w-75">
        <span>Lập trình web @01/2024</span>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
