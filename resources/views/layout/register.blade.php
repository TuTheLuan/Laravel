@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lập trình web - Đăng ký</title>
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
        .navbar-custom a.active {
            font-weight: bold;
        }
        .container-custom {
            width: 400px;
            padding: 20px;
            border: 1px solid black;
            background: white;
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
        <a href="index">Home</a> | 
        <a href="{{ route('layout.login') }}">Đăng nhập</a> | 
        <a href="{{ route('layout.register') }}" class="active">Đăng ký</a>
    </div>

    <!-- Form đăng ký -->
    <div class="container-custom mt-3">
        <h3 class="text-center">Màn hình đăng ký</h3>
        <form action="{{ route('layout.postRegister') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Mật khẩu</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Nhập lại mật khẩu</label>
        <input type="password" name="password_confirmation" class="form-control" required> 
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="d-flex justify-content-between align-items-center">
        <a href="{{ route('layout.login') }}" class="text-decoration-none">Đã có tài khoản?</a>
        <button type="submit" class="btn btn-primary">Đăng ký</button>
    </div>
</form>

    </div>

    <!-- Thanh Navbar dưới -->
    <div class="footer w-75">
        <span>Lập trình web @01/2024</span>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
