<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="{{ asset('web/images/car-sport.svg') }}" />
<title>HiCar Dashboard</title>
<!-- ======= Styles ====== -->
<link rel="stylesheet" href="{{ asset('web/css/customer/chat.css') }}" />
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
        
                <div class="cardprofil" style="margin-left: 10px;"> 
                    <div class="iconBx">
                        <img class="profil" src="{{ asset('web/images/ten hag.jpg') }}" alt="" style="width: 80%; margin-bottom: 20px; border-radius: 150px; border: 3px solid rgb(255, 255, 255)">
                    </div>
                </div>
        
                <li>
                    <a href="/dashboardCust">
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
                    <a href="/riwayat">
                        <span class="icon">
                        <ion-icon name="sync-outline"></ion-icon> </span>
                        <span class="title">Riwayat</span>
                    </a>
                    </li>
            
                    <li>
                    <a href="#">
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
                    <input type="text" placeholder="Search here">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>

            <div class="user">
                <a href="/form">
                    <img src="{{ asset('web/images/person-outline.svg') }}" alt="">
                </a>
            </div>
        </div>

        <!-- Chatt -->

        <div class="details">
            <div class="recentOrders">
            <div class="cardHeader">
                <h2 style="margin-top: 10px; margin-bottom: 10px; margin-left: 70px;">Chat Admin</h2>
            </div>

                <div class="komplain">
                    <p>WhatsApp Number</p>
                    <p>Message</p>
                </div>

                <div class="ket-komplain">
                    <p>: &nbsp; &nbsp; &nbsp; &nbsp; WhatsApp Number <br>

                    </p>
                    <p>: &nbsp; &nbsp; &nbsp; &nbsp; Initial Message</p>
                </div>

                <div class="isi-komplain">
                    <p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                        <input type="text" name="course" />
                    </p>

                    <p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <input type="text" name="course" class="message" />
                    </p>
                </div>

                <p class="no-komplain">
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Silahkan masukkan nomer WhatsApp <br> 
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Anda sebagai kontak narahubung komplain!
                </p>

                <p class="note-komplain">
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Silahkan masukkan pesan yang ingin Anda sampaikan, mohon disampaikan dengan baik dan benar, <br> 
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Pesan segera akan direspon dan ditanggapi melalui nomer WhatsApp yang telah dicantumkan!
                </p>

                <input class="save-data" type="button" onclick="alert('Pesan kamu Berhasil terkirim!')" value="Kirim Pesan">
                <input class="hapus-data" type="button" onclick="alert('Pesan kamu dihapus!')" value="Hapus">

                </div>
            </div>
        </div>
        </div>
    </div>
</div

<!-- =========== Scripts =========  -->
<script src="{{ asset('web/js/dashboard.js') }}"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>