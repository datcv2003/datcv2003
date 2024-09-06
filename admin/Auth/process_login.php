<?php
session_start();
require_once "../Models/env.php";
$servername = DBHOST;
$username_db = DBUSER;
$password_db = DBPASS;
$database = DBNAME;

// Tạo kết nối
$conn = new mysqli($servername, $username_db, $password_db, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Kiểm tra thông tin đăng nhập từ biểu mẫu
if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Truy vấn kiểm tra thông tin đăng nhập trong cơ sở dữ liệu
    $stmt = $conn->prepare("SELECT * FROM tb_khachhang WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $quyen_han = 1;
    // $role_nv = 2;
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Kiểm tra mật khẩu
        if ($password === $row['password']) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['quyen_han'] = $row['quyen_han'];
            $response = [
                'success' => true,
                'message' => 'Đăng nhập thành công'
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'Sai mật khẩu'
            ];
        }
        if ($row['quyen_han'] != $quyen_han) {
            $response = [
                'success' => false,
                'message' => 'Tài khoản không có quyền truy cập'
            ];
        }
    } else {
        $response = [
            'success' => false,
            'message' => 'Người dùng không tồn tại'
        ];
    }

    $stmt->close();
} else {
    $response = [
        'success' => false,
        'message' => 'Vui lòng điền đầy đủ thông tin'
    ];
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($response);
