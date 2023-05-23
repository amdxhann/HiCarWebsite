<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="{{ asset('web/css/images/car-sport.svg') }}" />
<title>HiCar Dashboard</title>
<!-- ======= Styles ====== -->
<link rel="stylesheet" href="{{ asset('web/css/admin/dashboard.css') }}" />
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
</head>

<body>
<!-- =============== Navigation ================ -->
<div class="container">
    <div class="navigation">
    <ul>
        <li>
        <a>
            <span class="icon" style="margin-top: 11px">
            <ion-icon name="car-sport"></ion-icon>
            </span>
            <span class="title" style="font-size: 25px; font-weight: bold; letter-spacing: 3px; margin-top: 10px">HiCar</span>
        </a>
        </li>

        <li>
        <a href="#">
            <span class="icon">
            <ion-icon name="home-outline"></ion-icon>
            </span>
            <span class="title">Dashboard</span>
        </a>
        </li>

        <li>
        <a href="/web.dashboard.admin.customer.customers">
            <span class="icon">
            <ion-icon name="people-outline"></ion-icon>
            </span>
            <span class="title">Customers</span>
        </a>
        </li>

        <li>
            <a href="/web.dashboard.admin.transaksi.transaksi">
                <span class="icon">
                    <ion-icon name="cart-outline"></ion-icon>
                </span>
                <span class="title">Transaksi</span>
            </a>
            </li>

        <li>
        <a href="/web.dashboard.admin.driver.driver">
            <span class="icon"> <ion-icon name="accessibility-outline"></ion-icon> </span>
            <span class="title">Driver</span>
        </a>
        </li>

        <li>
        <a href="/web.dashboard.admin.cars.cars">
            <span class="icon"> <ion-icon name="car-outline"></ion-icon> </span>
            <span class="title">Cars</span>
        </a>
        </li>

        <li>
        <a href="/feedback">
            <span class="icon">
                <ion-icon name="chatbubbles-outline"></ion-icon>
            </span>
            <span class="title">Feedback</span>
        </a>
        </li> <br>

        <li>
        <a href="/account">
            <span class="icon">
                <ion-icon name="lock-closed-outline"></ion-icon>
            </span>
            <span class="title">Account</span>
        </a>
        </li>

        <li>
        <a href="/privacy">
            <span class="icon">
                <ion-icon name="key-outline"></ion-icon>
            </span>
            <span class="title">Privacy</span>
        </a>
        </li>

        <li>
        <a href="/help">
            <span class="icon">
            <ion-icon name="help-outline"></ion-icon>
            </span>
            <span class="title">Help</span>
        </a>
        </li>

        <li>
        <a href="/settings">
            <span class="icon">
            <ion-icon name="settings-outline"></ion-icon>
            </span>
            <span class="title">Settings</span>
        </a>
        </li>
                    
    </ul>
    </div>

    <!-- ========================= Main ==================== -->
    <div class="main">
    <div class="topbar">
        <div class="toggle">
        <ion-icon name="menu-outline"></ion-icon>
        </div>

        <div class="search">
        <label>
            <input type="text" placeholder="Search here" />
            <ion-icon name="search-outline"></ion-icon>
        </label>
        </div>

        <div class="user">
        <a href="/form">
            <img src="{{ asset('web/images/person-outline.svg') }}" alt="" />
        </a>
        </div>
    </div>

    <!-- ======================= Cards ================== -->
    <div class="cardBox">
        <div class="card">
        <div>
            <div class="numbers">1,504</div>
            <div class="cardName">Dilihat</div>
        </div>

        <div class="iconBx">
            <ion-icon name="eye-outline"></ion-icon>
        </div>
        </div>

        <div class="card">
        <div>
            <div class="numbers">80</div>
            <div class="cardName">Tersewa</div>
        </div>

        <div class="iconBx">
            <ion-icon name="cart-outline"></ion-icon>
        </div>
        </div>

        <div class="card">
        <div>
            <div class="numbers">284</div>
            <div class="cardName">Ulasan</div>
        </div>

        <div class="iconBx">
            <ion-icon name="chatbubbles-outline"></ion-icon>
        </div>
        </div>

        <div class="card">
        <div>
            <div class="numbers">10,2jt</div>
            <div class="cardName">Pendapatan</div>
        </div>

        <div class="iconBx">
            <ion-icon name="cash-outline"></ion-icon>
        </div>
        </div>
    </div>

    <!-- ================ Order Details List ================= -->
    <div class="details">
        <div class="recentOrders">
        <div class="cardHeader">
            <h2>Riwayat Penyewaan</h2>
            <a href="#" class="btn"></a>
        </div>

        <table class="riwayat" style="border-radius: 10px;">
            <thead>
            <tr class="kolomket">
                <td>Nama</td>
                <td>Mobil</td>
                <td>Harga</td>
                <td>Durasi</td>
                <td>Status</td>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>Ahmad Buang</td>
                <td>Avanza</td>
                <td>200</td>
                <td>24 jam</td>
                <td><span class="status delivered">Digunakan</span></td>
            </tr>

            <tr>
                <td>Ayyasi Jr</td>
                <td>Brio</td>
                <td>150</td>
                <td>24 jam</td>
                <td><span class="status pending">Booking</span></td>
            </tr>

            <tr>
                <td>Ronaldowati</td>
                <td>Lamborgini</td>
                <td>950</td>
                <td>4 jam</td>
                <td><span class="status return">Melewati Durasi</span></td>
            </tr>

            <tr>
                <td>Ten Hag</td>
                <td>Avanza</td>
                <td>100</td>
                <td>12 jam</td>
                <td><span class="status inProgress">Selesai</span></td>
            </tr>

            <tr>
                <td>Bang Messi</td>
                <td>Minibus</td>
                <td>400</td>
                <td>24 jam</td>
                <td><span class="status delivered">Digunakan</span></td>
            </tr>

            <tr>
                <td>Gonzales</td>
                <td>McLaren</td>
                <td>900</td>
                <td>4 jam</td>
                <td><span class="status pending">Booking</span></td>
            </tr>

            <tr>
                <td>Hasan Pargoy</td>
                <td>Alya</td>
                <td>100</td>
                <td>12 jam</td>
                <td><span class="status return">Melewati Durasi</span></td>
            </tr>

            <tr>
                <td>Uzumaki Naruto</td>
                <td>Avanza</td>
                <td>200</td>
                <td>24 jam</td>
                <td><span class="status inProgress">Selesai</span></td>
            </tr>

            <tr>
                <td>Ten Hag</td>
                <td>Avanza</td>
                <td>100</td>
                <td>12 jam</td>
                <td><span class="status inProgress">Selesai</span></td>
            </tr>

            <tr>
                <td>Bang Messi</td>
                <td>Minibus</td>
                <td>400</td>
                <td>24 jam</td>
                <td><span class="status delivered">Digunakan</span></td>
            </tr>

            <tr>
                <td>Gonzales</td>
                <td>McLaren</td>
                <td>900</td>
                <td>4 jam</td>
                <td><span class="status pending">Booking</span></td>
            </tr>

            <tr>
                <td>Hasan Pargoy</td>
                <td>Alya</td>
                <td>100</td>
                <td>12 jam</td>
                <td><span class="status return">Melewati Durasi</span></td>
            </tr>

            <tr>
                <td>Uzumaki Naruto</td>
                <td>Avanza</td>
                <td>200</td>
                <td>24 jam</td>
                <td><span class="status inProgress">Selesai</span></td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
    </div>
</div>

<!-- =========== Scripts =========  -->
<script src="{{ asset('web/js/dashboard.js') }}"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
