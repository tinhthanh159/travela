<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập | Quản trị Tour</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{ asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: url('{{ asset('clients/assets/images/hero/vietnam.jpg') }}') no-repeat center center fixed;
            background-size: cover;
        }

        .login-box {
            max-width: 400px;
            margin: 80px auto;
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: 600;
            color: #2a3f54;
        }

        .form-control {
            border-radius: 10px;
            height: 45px;
        }

        .btn-login {
            background: linear-gradient(135deg, #1abc9c, #16a085);
            border: none;
            border-radius: 10px;
            color: white;
            width: 100%;
            padding: 10px;
            font-weight: 600;
        }

        .btn-login:hover {
            background: linear-gradient(135deg, #16a085, #1abc9c);
        }

        .form-group i {
            position: absolute;
            left: 15px;
            top: 13px;
            color: #aaa;
        }

        .form-group {
            position: relative;
        }

        .form-control.padding-left {
            padding-left: 40px;
        }
    </style>
</head>
<body>

    <div class="login-box">
        <h2>Admin Travela</h2>
        <form method="POST" action="{{ route('admin.login-account') }}" id="formLoginAdmin">
            @csrf
            <div class="form-group mb-3">
                <i class="fa fa-user"></i>
                <input type="text" name="username" id="username" class="form-control padding-left" placeholder="Tài khoản" required>
            </div>
            <div class="form-group mb-4">
                <i class="fa fa-lock"></i>
                <input type="password" name="password" id="password" class="form-control padding-left" placeholder="Mật khẩu" required>
            </div>
            <button type="submit" class="btn btn-login">Đăng nhập</button>
        </form>
    </div>

    @include('admin.blocks.footer')

    <!-- JS -->
    <script src="{{ asset('admin/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if(session('error'))
            toastr.error("{{ session('error') }}");
        @endif
        @if(session('success'))
            toastr.success("{{ session('success') }}");
        @endif
    </script>
</body>
</html>
