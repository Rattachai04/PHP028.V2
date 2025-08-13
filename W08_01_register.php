<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(username, full_name, email, password, role) VALUES (?, ?, ?, ?, 'admin')";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username, $fullname, $email, $hashedPassword]);
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #74ffaeff, #a29bfe);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.2);
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="card col-md-5">
        <h2 class="text-center mb-4">📝 สมัครสมาชิก</h2>
        <form method="post">
            <div class="mb-3">
                <label for="username" class="form-label">ชื่อผู้ใช้</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="กรุณากรอกชื่อผู้ใช้" required>
            </div>
            <div class="mb-3">
                <label for="fullname" class="form-label">ชื่อ-สกุล</label>
                <input type="text" name="fullname" id="fullname" class="form-control" placeholder="กรุณากรอกชื่อ-สกุล" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">อีเมล</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="กรุณากรอกอีเมล" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">รหัสผ่าน</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="กรุณากรอกรหัสผ่าน" required>
            </div>
            <div class="mb-3">
                <label for="confirmpassword" class="form-label">ยืนยันรหัสผ่าน</label>
                <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="กรุณายืนยันรหัสผ่าน" required>
            </div>
            <div class="d-grid mt-3">
                <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>
            </div>
            <div class="text-center mt-3">
                <a href="login.php" class="text-decoration-none">เข้าสู่ระบบ</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
