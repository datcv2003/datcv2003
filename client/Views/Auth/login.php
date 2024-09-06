<style>
    body {
        background-color: #f8f9fa;
    }

    .login-container {
        margin-top: 3%;
    }

    .login-form {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .1), 0 2px 6px 2px rgba(60, 64, 67, .15);
    }

    .login-form h2 {
        color: #007bff;
        text-align: center;
    }

    .login-form input[type="submit"] {
        background-color: #007bff;
        /* border: 2px #0056b3; */
        cursor: pointer;
        border-radius: 5px;

    }

    .form-group label {
        color: #495057;
    }

    .form-control {
        border: 2px solid #007bff;
    }

    .btn-primary {
        background-color: #007bff;
        border: 2px solid #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>
</head>

<body>

    <div class="container login-container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <form action=".?url=login" class="login-form" method="post">
                    <h2 class="mb-4">Đăng Nhập</h2>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username"
                            placeholder="Enter your username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Enter your password" required>
                    </div>
                    <div class="form-group text-center">
                        <a href="./?url=forgot" class="text-primary">Quên Mật Khẩu?</a>
                    </div>
                    <input name="Login" type="submit" value="Đăng nhập" class="btn btn-primary btn-block">
                    <div class="text-center mt-3">
                        Bạn chưa có tài khoản? <a href="./?url=register" class="text-primary">Đăng Ký</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>