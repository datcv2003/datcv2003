<?php
require_once "./client/Models/Auth.php";
require_once "./client/Models/Mailer.php";
class AuthController
{

    protected $auth;
    public function __construct()
    {
        $this->auth = new Auth();
    }

    public function LogIn()
    {
        try {
            if (isset($_POST['Login']) && ($_POST['Login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $result = $this->auth->GetAllUser($username, $password);
                if ($result) {
                    $_SESSION['username'] = $username;
                    echo '<script type="text/javascript">';
                    echo 'Swal.fire({
                          title: "Thành công",
                          text: "Bạn đã đăng nhập thành công!",
                          icon: "success",
                          confirmButtonText: "OK"
                            }).then((result) => {
                              if (result.isConfirmed) {
                                 window.location.href = "./"; // Chuyển đến trang chủ
                                  }
                                  });';
                    echo '</script>';
                } else {
                    // Đăng nhập không thành công
                    echo '<script type="text/javascript">';
                    echo 'Swal.fire("Lỗi", "Đăng nhập không thành công!", "error");';
                    echo '</script>';
                }
            }
        } catch (PDOException $e) {
            echo '<script type="text/javascript">';
            echo 'Swal.fire("Lỗi", "Đăng nhập không thành công!", "error");';
            echo '</script>';
        }
        require_once "./client/Views/Auth/login.php";
    }

    public function Register()
    {
        try {
            if (isset($_POST['register'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $fullname = $_POST['fullname'];
                $this->auth->InsertUser($username, $password, $email, $fullname);
                echo '<script type="text/javascript">';
                echo 'Swal.fire({
                          title: "Thành công",
                          text: "Bạn đã đăng ký thành công!",
                          icon: "success",
                          confirmButtonText: "OK"
                            }).then((result) => {
                              if (result.isConfirmed) {
                                 window.location.href = "./?url=login";
                                  }
                                  });';
                echo '</script>';
            }
        } catch (PDOException $e) {
            echo '<script type="text/javascript">';
            echo 'Swal.fire("Lỗi", "Tên Người Dùng Đã Tồn Tại", "error");';
            echo '</script>';
        }
        require_once "./client/Views/Auth/register.php";
    }

    public function Forgot()
    {
        if (isset($_POST['Forgot']) && !empty($_POST['email'])) {
            $Email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

            if (filter_var($Email, FILTER_VALIDATE_EMAIL)) {
                $result = $this->auth->Forgots($Email);

                if ($result && is_array($result) && isset($result['password'])) {
                    $password = "<p>Cảm ơn bạn đã sử dụng 𝑲𝒆𝒏𝒏𝒆</p>
                                  Mật khẩu của bạn là: <strong>" . $result['password'] . "</strong>
                                  <p style='color:red'>𝑲𝒆𝒏𝒏𝒆</p>
                                  <p>Developer</p>
                                  <p style='color:red'>----------------------------------------------------------------------------------------------</p>
                                  <p>Số điện thoại: 034-3456-981 | 0876-55-2004</p>
                                  <p>Email: kenne.meta@gmail.com</p>
                                  <p style='color:red'>----------------------------------------------------------------------------------------------</p>
                                ";

                    // Gửi mật khẩu mới qua email
                    $tieude = "FORGOT PASSWORD";
                    $mail = new Mailer();
                    $mail->forgot($tieude, $password, $Email);

                    echo '<script type="text/javascript">';
                    echo 'Swal.fire("Thành Công", "Đã gửi mật khẩu về Email!", "success");';
                    echo '</script>';
                } else {
                    echo '<script type="text/javascript">';
                    echo 'Swal.fire("Lỗi", "Email không tồn tại!", "error");';
                    echo '</script>';
                }
            } else {
                echo '<script type="text/javascript">';
                echo 'Swal.fire("Lỗi", "Email không hợp lệ!", "error");';
                echo '</script>';
            }
        }

        require_once "./client/Views/Auth/forgot.php";
    }


    public function LogOut()
    {
        session_destroy();
        echo '<script type="text/javascript">';
        echo 'Swal.fire({
                          title: "Thành công",
                          text: "Bạn đã đăng đăng xuất!",
                          icon: "success",
                          confirmButtonText: "OK"
                            }).then((result) => {
                              if (result.isConfirmed) {
                                 window.location.href = "./";
                                  }
                                  });';
        echo '</script>';
        exit();
    }
}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>