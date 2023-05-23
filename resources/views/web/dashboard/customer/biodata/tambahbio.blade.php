<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="/assets/images/car-sport.svg" />
<title>HiCar Dashboard</title>
<!-- ======= Styles ====== -->
<link rel="stylesheet" href="/assets/css/customer/biodata.css">
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
                        <img class="profil" src="/assets/images/ten hag.jpg" alt="" style="width: 80%; margin-bottom: 20px; border-radius: 150px; border: 3px solid rgb(255, 255, 255)">
                    </div>
                </div>
        
                <li>
                    <a href="/dashboard/customer/dashboard.html">
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
                    <a href="/dashboard/customer/transaksi.html">
                        <span class="icon">
                        <ion-icon name="receipt-outline"></ion-icon> </span>
                        <span class="title">Transaksi</span>
                    </a>
                    </li>
            
                    <li>
                    <a href="../customer/riwayat.html">
                        <span class="icon">
                        <ion-icon name="sync-outline"></ion-icon> </span>
                        <span class="title">Riwayat</span>
                    </a>
                    </li>
            
                    <li>
                    <a href="/dashboard/customer/chat.html">
                        <span class="icon">
                            <ion-icon name="chatbubbles-outline"></ion-icon>
                        </span>
                        <span class="title">Chat</span>
                    </a>
                    </li>
            
                    <li>
                    <a href="../customer/settings.html">
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
                <a href="/form.html">
                    <img src="/assets/images/person-outline.svg" alt="">
                </a>
            </div>
        </div>

            <div class="details">
        <div class="recentOrders">
            <div class="kotak" >
            <div class="iconBx">
                <a href="/assets/images/rehan.jpg">
                    <img class="fotosampul" src="/assets/images/ten hag.jpg" alt="" style="width: 90%;">
                </a>
                <input type="file" id="myFile" name="filename" class="input-foto">
            </div>
            </div>
            
            <p class="ket-foto">Besar file: maksimum 10.000.000 bytes <br> (10 Megabytes).
                Ekstensi file yang <br> diperbolehkan: .JPG .JPEG .PNG</p>

                <div> 
                    <h3 class="ubah-biodata">Ubah Biodata Diri</h3>
                    <div style="position: absolute; margin-top: 80px; margin-left: 450px; line-height: 35px;">
                        <p>Nama</p>
                        <p>Tanggal Lahir</p>
                        <p>Alamat</p> <br>
                        <p>No.SIM</p>
                        <p>Jenis Kelamin</p>
                    </div>
                    <div style="position: absolute; margin-top: 80px; margin-left: 650px; line-height: 35px;">
                        <p>: &nbsp; &nbsp; &nbsp; &nbsp;
                            <input type="text" name="course" class="form-control" />
                        </p>

                        <p>: &nbsp; &nbsp; &nbsp; &nbsp;
                            <input type="date" id="birthday" name="birthday" style="width: 190px;">
                        </p>

                        <p>: &nbsp; &nbsp; &nbsp; &nbsp; 
                            <input style="position: absolute; margin-top: 10px; margin-left: 5px; height: 50px;" type="text" name="course" class="form-control" />
                        </p>

                        <br>
                        <p>: &nbsp; &nbsp; &nbsp; &nbsp; 
                            <input type="text" name="course" class="form-control" />
                        </p>

                        <p style="">: &nbsp; &nbsp; &nbsp; &nbsp;
                                <input type="radio" id="html" name="fav_language" value="HTML">
                                <label for="html">Pria</label> &nbsp; &nbsp; &nbsp; &nbsp;
                                <input type="radio" id="css" name="fav_language" value="CSS">
                                <label for="css">Wanita</label> 
                        </p>
                    </div>
                </div>
                <div style="margin-top: 180px;">
                    <h3 class="ubah-biodata">Ubah Kontak</h3>
                    <div style="position: absolute; margin-top: 80px; margin-left: 450px; line-height: 35px;">
                        <p>Email</p>
                        <p>No. HP</p>
                    </div>
                    <div style="position: absolute; margin-top: 80px; margin-left: 650px; line-height: 35px;">
                        <p>: &nbsp; &nbsp; &nbsp; &nbsp; 
                            <input type="text" name="course" class="form-control" />
                        </p>
                        <p>: &nbsp; &nbsp; &nbsp; &nbsp;
                            <input type="text" name="course" class="form-control" />
                        </p>
                    </div>
                </div>
                <div style="margin-left: 450px; margin-top: 80px;">
                    <a href="/dashboard/customer/biodata/biodata.html" class="data-selesai">Selesai</a>
                </div>
            </div>
        </div>
    </div>  
    </div>
    </div>
</div

<!-- =========== Scripts =========  -->
<script src="/assets/js/dashboard.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>