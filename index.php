<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าหลัก</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    
    <style>
        body {
            background: linear-gradient(135deg, #0a2a66, #1e3f91); /* พื้นหลัง gradient น้ำเงินเข้ม */
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        }
        h1 {
            color: #0a2a66;
        }
        .btn-logout {
            background-color: #1e3f91;
            border: none;
            color: white;
            font-weight: 600;
            transition: 0.3s;
        }
        .btn-logout:hover {
            background-color: #0a2a66;
            transform: translateY(-2px);
        }
        footer {
            position: fixed;
            bottom: 10px;
            width: 100%;
            text-align: center;
            color: #e0e0e0;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-5 text-center" style="max-width: 480px; width: 100%;">
            <h1 class="mb-4 fw-bold">ยินดีต้อนรับสู่หน้าหลัก</h1>
            
            <p class="fs-5 mb-4">
                ผู้ใช้: <span class="fw-semibold text-dark"><?= htmlspecialchars($_SESSION['username']) ?></span> 
                (<span class="text-secondary"><?= $_SESSION['role'] ?></span>)
            </p>

            <a href="logout.php" class="btn btn-logout btn-lg rounded-pill px-4">ออกจากระบบ</a>
        </div>
    </div>

    <footer>
        © <?= date("Y") ?> ระบบจัดการผู้ใช้งาน | Organization
    </footer>

</body>
</html>
