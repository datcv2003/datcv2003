<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .login-container {
            margin-top: 5%;
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
            border: 2px solid #0056b3;
        }
    </style>
</head>

<body>

    <div class="container login-container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <form action="./?url=register" class="login-form" id="loginForm" method="post">
                    <h2 class="mb-4">Đăng Ký</h2>
                    <div class="form-group">
                        <label for="fullname">Họ Tên</label>
                        <input type="text" name="fullname" class="form-control" id="fullname"
                            placeholder="Enter your Fullname" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Enter your Email"
                            required>
                    </div>
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
                    <button name="register" type="submit" class="btn btn-primary btn-block">Đăng Nhập</button>
                    <div class="text-center mt-3">
                        Bạn đã có tài khoản? <a href="login.php" class="text-primary">Đăng Nhập</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>