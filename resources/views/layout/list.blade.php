<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách người dùng</title>
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
            width: 80%;
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
        .table {
            min-width: 700px;
        }
        .table th, .table td {
            text-align: center;
        }
    </style>
</head>
<body class="d-flex flex-column align-items-center bg-light vh-100">

    <!-- Thanh Navbar trên -->
    <div class="navbar-custom w-75">
        <a href="index">Home</a> | 
        <a href="{{ route('layout.signout') }}">Đăng xuất</a>
    </div>

    <!-- Danh sách người dùng -->
    <div class="container-custom mt-3">
        <h3 class="text-center">Danh sách user</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <thead>
                    <tr>
                        <th>ID</th>
                        <th>UserName</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
            </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th>{{ $user->id }}</th>
                                <th>{{ $user->username }}</th>
                                <th>{{ $user->email }}</th>
                                <th>
                                    <a href="{{ route('layout.view', ['id' => $user->id]) }}">View</a> |
                                    <a href="{{ route('user.update', ['id' => $user->id]) }}">Edit</a>|
                                    <a href="{{ route('user.delete', ['id' => $user->id]) }}">Delete</a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>

        <!-- Phân trang -->
        <nav>
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>

    <!-- Thanh Navbar dưới -->
    <div class="footer w-75">
        <span>Lập trình web @01/2024</span>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
