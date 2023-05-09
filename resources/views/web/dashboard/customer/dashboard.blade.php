<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="{{ asset('web/css/images/car-sport.svg') }}" />
<title>HiCar Dashboard</title>
<!-- ======= Styles ====== -->
<link rel="stylesheet" href="{{ asset('web/css/customer/dashboard.css') }}" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
rel="stylesheet">
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

        <div class="cardprofil" style="margin-left: 10px;"> 
            <div class="iconBx">
                <img class="profil" src="{{  asset('web/images/ten hag.jpg')  }}" alt="">
            </div>
        </div>

        <li>
        <a href="#">
            <span class="icon">
            <ion-icon name="home-outline"></ion-icon>
            </span>
            <span class="title">Dashboard</span>
        </a>
        </li>

        <li>
        <a href="/biodata">
            <span class="icon">
                <ion-icon name="man-outline"></ion-icon>
            </span>
            <span class="title">Biodata Diri</span>
        </a>
        </li>

        <li>
        <a href="/transaksiCust">
            <span class="icon">
            <ion-icon name="receipt-outline"></ion-icon> </span>
            <span class="title">Transaksi</span>
        </a>
        </li>

        <li>
        <a href="riwayat">
            <span class="icon">
            <ion-icon name="sync-outline"></ion-icon> </span>
            <span class="title">Riwayat</span>
        </a>
        </li>

        <li>
        <a href="/chat">
            <span class="icon">
                <ion-icon name="chatbubbles-outline"></ion-icon>
            </span>
            <span class="title">Chat</span>
        </a>
        </li>

        <li>
        <a href="/settingsCust">
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
            <img src="{{ asset('web/images/person-outline.svg') }}" alt="">
        </a>
        </div>
    </div>

    <!-- ================ Order Details List ================= -->
    <div class="details">
        <div class="recentOrders">
            <div class="iconBx">
                <a href="/biodata">
                    <img class="fotosampul" src="{{  asset('web/images/ten hag.jpg')  }}" alt="" style="width: 20%;">
                </a>
            </div>
            <div class="sampul">
                <a href="{{  asset('web/images/sampul.jpg')  }}">
                    <img src="{{  asset('web/images/sampul.jpg')  }}" alt="" style="width: 100%; height: 250px; border-radius: 15px;">
                </a>
            </div>
            <div class="nama">
                <h2> ERICK TEN HAGG</h2>
                <h2 class="h2">082111633084</h2>
            </div>
            <div class="ket">
                <p>Mahasiswa S1 Sistem Informasi Havard University, 
                    <br> saat ini duduk di bangku perkuliahan semester 4 
                    <br> project Pemograman Web Praktikum</p>
            </div>
        </div>
    </div>   

    <!-- ======================= Cards ================== -->
    <div class="cardBox">
        
        <div class="cardstatus">
        <div>
            <div class="numbers">Member</div>
            <div class="cardName">Customer Status </div>
        </div>
        </div>
        
        <div class="card">
        <div>
            <div class="numbers">Data</div>
            <div class="cardName">Tervalidasi</div>
        </div>

        <div class="iconBx">
            <ion-icon name="checkmark-done-outline" style="color: green;"></ion-icon>
                </div>
        </div>

        <div class="card">
        <div>
            <div class="numbers">S&K</div>
            <div class="cardName">Tervalidasi</div>
        </div>

        <div class="iconBx">
            <ion-icon name="checkmark-done-outline" style="color: green;"></ion-icon>
        </div>
        </div>

        <div class="card">
        <div>
            <div class="numbers">Agree</div>
            <div class="cardName">Privacy Police</div>
        </div>

        <div class="iconBx">
            <ion-icon name="checkmark-done-outline" style="color: green;"></ion-icon>
        </div>
        </div>

        
    </div>


    <!-- ================ Riwayat ================= -->
    <div class="details">
        <div class="recentOrders" style="margin-top: 30px;">
        <div class="cardHeader">
            <h2 style="margin-bottom: 20px; margin-top: 20px;">Riwayat Transaksi</h2>
            <a href="#" class="btn"></a>
        </div>

        <table class="riwayat" style="border-radius: 10px;">
            <thead>
            <tr class="kolomket">
                <td>Nama</td>
                <td>Mobil</td>
                <td>Harga</td>
                <td>Waktu</td>
                <td>Status</td>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>Ahmad Buang</td>
                <td>Avanza</td>
                <td>200</td>
                <td>03/01/2023</td>
                <td><span class="status inProgress">Selesai</span></td>
            </tr>

            <tr>
                <td>Ahmad Buang</td>
                <td>Brio</td>
                <td>150</td>
                <td>24/02/2023</td>
                <td><span class="status inProgress">Selesai</span></td>
            </tr>

            <tr>
                <td>Ahmad Buang</td>
                <td>Lamborgini</td>
                <td>950</td>
                <td>31/03/2023</td>
                <td><span class="status pending">Booking</span></td>
            </tr>

            </tbody>
        </table>
        </div>
    </div> 
    
        <!-- ================ Order Details List ================= -->
        <div class="detailss">
            <div class="recentOrderss" style="margin-top: 20px;">
            <div class="cardHeader">
                <a href="#" class="btn"></a>
            </div>
    
            <section class="step-wizard">
                <ul class="step-wizard-list">
                    <li class="step-wizard-item">
                        <span class="progress-count">1</span>
                        <span class="progress-label">Billing Info</span>
                    </li>
                    <li class="step-wizard-item current-item">
                        <span class="progress-count">2</span>
                        <span class="progress-label">Payment Method</span>
                    </li>
                    <li class="step-wizard-item">
                        <span class="progress-count">3</span>
                        <span class="progress-label">Take Car</span>
                    </li>
                    <li class="step-wizard-item">
                        <span class="progress-count">4</span>
                        <span class="progress-label">Success</span>
                    </li>
                </ul>
            </section>
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
