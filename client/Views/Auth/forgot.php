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
        }

        .login-form input[type="submit"] {
            background-color: #007bff;
            /* border: 2px #0056b3; */
            cursor: pointer;
            border-radius: 5px;

        }
    </style>
</head>

<body>

    <div class="container login-container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <form action="./?url=forgot" class="login-form" id="loginForm" method="post">
                    <h2 class="mb-4">Quên Mật Khẩu</h2>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" type="text" class="form-control" id="email" placeholder="Enter your Email"
                            required>
                    </div>
                    <input name="Forgot" class="btn btn-primary btn-block" type="submit" value="Gửi Mật Khẩu">
                    <div class="text-center mt-3">
                        Quay Lại <a href="./?url=login" class="text-primary">Đăng Nhập</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>