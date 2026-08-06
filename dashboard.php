<?php
include 'include/cek_session.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Warung ABC</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<body>

<div class="sidebar">

    <div class="logo">
         Warung - ABC
    </div>

    <ul>

        <li><a href="dashboard.php">🏠 Dashboard</a></li>

        <?php if($_SESSION['role']=='admin' || $_SESSION['role']=='gudang'){ ?>
        <li><a href="data_barang.php">📦 Data Barang</a></li>
        <?php } ?>

        <?php if($_SESSION['role']=='admin' || $_SESSION['role']=='kasir'){ ?>
        <li><a href="transaksi.php">🛒 Transaksi</a></li>
        <?php } ?>

        <li><a href="riwayat_transaksi.php">📋 Riwayat</a></li>

        <li><a href="logout.php">🚪 Logout</a></li>

    </ul>

</div>

<div class="content">

    <div class="topbar">

        <h2>Dashboard</h2>

        <div class="user">
            👤 <?php echo $_SESSION['nama_lengkap']; ?>
        </div>

    </div>

    <div class="welcome">

        <h1>Selamat Datang 👋</h1>

        <p>Semoga harimu menyenangkan 😊</p>

    </div>

    <div class="cards">

        <div class="card">
            <h3>📦 Barang</h3>
            <span>10</span>
        </div>

        <div class="card">
            <h3>🛒 Transaksi</h3>
            <span>4</span>
        </div>

        <div class="card">
            <h3>💰 Pendapatan</h3>
            <span>Rp83.300</span>
        </div>

        <div class="card">
            <h3>👥 User</h3>
            <span>1</span>
        </div>

    </div>

</div>

</body>

</body>
</body>
</html>