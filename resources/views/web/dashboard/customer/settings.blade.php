<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('web/images/car-sport.svg') }}" />
    <title>HiCar Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{ asset('web/css/customer/settings.css') }}" />
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
                    <a href="/chat">
                        <span class="icon">
                            <ion-icon name="chatbubbles-outline"></ion-icon>
                        </span>
                        <span class="title">Chat</span>
                    </a>
                    </li>
            
                    <li>
                    <a href="#">
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
                    <div class="cardHeader">
                        <h2 style="margin-top: 10px; margin-bottom: 10px; margin-left: 70px;">Settings</h2>
                    </div>
                    <div class="cardBox" style="margin-left: 250px;">
                        <a href="/login/loginCustomer.html">
                            <div class="card" style="position: absolute; margin-top: 100px; margin-left: 70px; width: 500px;">
                                <div class="iconBx" >
                                    <ion-icon name="options"></ion-icon>
                                </div>
                                
                                <div style="margin-right: 30px;">
                                    <div class="numbers">Switch Account</div>
                                </div>
                            </div>
                        </a>
                
                        <a href="/index.html">
                            <div class="card" style="position: absolute; margin-top: 350px; margin-left: 70px; width: 500px;">
                                <div class="iconBx">
                                    <ion-icon name="power"></ion-icon>
                                </div>
                                
                                <div style="margin-right: 120px;">
                                    <div class="numbers">Log Out</div>
                                </div>
                            </div>
                        </a>
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