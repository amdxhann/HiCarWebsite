<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="{{ asset('web/images/car-sport.svg') }}" />
<title>HiCar Dashboard</title>
<!-- ======= Styles ====== -->
<link rel="stylesheet" href="{{ asset('web/css/customer/biodata.css') }}" />
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
                    <a href="#">
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

            <div class="details">
        <div class="recentOrders">
            <div class="kotak" >
            <div class="iconBx">
                <a href="{{ asset('web/images/rehan.jpg') }}">
                    <img class="fotosampul" src="{{ asset('web/images/ten hag.jpg') }}" alt="" style="width: 90%;">
                </a>
                <input type="file" id="myFile" name="filename" class="input-foto">
            </div>
            </div>
            
            <p class="ket-foto">Besar file: maksimum 10.000.000 bytes <br> (10 Megabytes).
                Ekstensi file yang <br> diperbolehkan: .JPG .JPEG .PNG</p>

                <div> 
                    <h3 class="ubah-biodata" style="position: absolute; margin-top: 40px; margin-left: 450px;">Ubah Biodata Diri</h3>
                    <div style="position: absolute; margin-top: 80px; margin-left: 450px; line-height: 35px;">
                        <p>Nama</p>
                        <p>Tanggal Lahir</p>
                        <p>Alamat</p> <br>
                        <p>No.SIM</p>
                        <p>Jenis Kelamin</p>
                    </div>
                    <div style="position: absolute; margin-top: 80px; margin-left: 650px; line-height: 35px;">
                        <p>: &nbsp; &nbsp; &nbsp; &nbsp; Ahmad Rayhan
                            <a href="../biodata/edit.html" style="color:green; font-weight: lighter; font-style: italic;"> &nbsp; Ubah</a>
                        </p>
                        <p>: &nbsp; &nbsp; &nbsp; &nbsp; 13 September 2023
                            <a href="../biodata/edit.html" style="color:green; font-weight: lighter; font-style: italic;"> &nbsp; Ubah</a>
                        </p>
                        <p>: &nbsp; &nbsp; &nbsp; &nbsp; Mulyerejo Barat, Pink House, <br> 
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Kec. Meikarta, Surabaya
                            <a href="../biodata/edit.html" style="color:green; font-weight: lighter; font-style: italic;"> &nbsp; Ubah</a>
                        </p>
                        <p>: &nbsp; &nbsp; &nbsp; &nbsp; 35620984482631 
                            <a href="../biodata/edit.html" style="color:green; font-weight: lighter; font-style: italic;"> &nbsp; Ubah</a>
                        </p>
                        <p>: &nbsp; &nbsp; &nbsp; &nbsp; Laki-Laki
                            <a href="../biodata/edit.html" style="color:green; font-weight: lighter; font-style: italic;"> &nbsp; Ubah</a>
                        </p>
                    </div>
                </div>
                <div style="margin-top: 180px;">
                    <h3 class="ubah-biodata" style="position: absolute; margin-left: 450px; margin-top: 40px;">Ubah Kontak</h3>
                    <div style="position: absolute; margin-top: 80px; margin-left: 450px; line-height: 35px;">
                        <p>Email</p>
                        <p>No. HP</p>
                    </div>
                    <div style="position: absolute; margin-top: 80px; margin-left: 650px; line-height: 35px;">
                        <p>: &nbsp; &nbsp; &nbsp; &nbsp; tenhagtsunamitropy@gmail.com 
                            <a href="../biodata/edit.html" style="color:green; font-weight: lighter; font-style: italic;"> &nbsp; Ubah</a>
                        </p>
                        <p>: &nbsp; &nbsp; &nbsp; &nbsp; 082156220876
                            <a href="../biodata/edit.html" style="color:green; font-weight: lighter; font-style: italic;"> &nbsp; Ubah</a>
                        </p>
                    </div>
                </div>
                <div style="margin-left: 450px; margin-top: 80px;">
                    <a href="/dashboard/customer/biodata/edit.blade.php" class="edit-data">Edit Data</a>
                    <input class="save-data" style="margin-left: 20px;" type="button" onclick="alert('Biodata kamu Berhasil disimpan!')" value="Save Perubahan">
                </div>
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