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
          <a href="/dashboardAdmin">
              <span class="icon">
              <ion-icon name="home-outline"></ion-icon>
              </span>
              <span class="title">Dashboard</span>
          </a>
          </li>
  
          <li>
          <a href="#">
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

        <!-- ================= New Customers ================ -->
        <div class="recentCustomers">
          <div class="cardHeader" style="text-align: center">
            <h2>Daftar Pelanggan</h2>
            <div class="table">
              <a href="/web.dashboard.admin.customer.tambahcustomer" class="tambah-data">Tambah Data</a>
              <table class="table-cust" style="width: 100%;">
              <thead>
                  <th style="width: 5%">Id</th>
                  <th style="width: 11%">Nama</th>
                  <th style="width: 12%">Tanggal Lahir</th>
                  <th style="width: 10%">Alamat</th>
                  <th style="width: 10%">No. SIM</th>
                  <th style="width: 12%">Jenis Kelamin</th>
                  <th style="width: 16%">Email</th>
                  <th style="width: 10%">No. HP</th>
                  <th style="width: 10%">Action</th>
                </thead>
                <tbody>
                  @foreach ($customer as $item)
                  <tr align="center">
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->nama}}</td>
                      <td>{{ $item->tanggal_lahir}}</td>
                      <td>{{ $item->alamat}}</td>
                      <td>{{ $item->no_sim}}</td>
                      <td>{{ $item->jenis_kelamin}}</td>
                      <td>{{ $item->email}}</td>
                      <td>{{ $item->no_hp}}</</td>
                      <td> 
                        <a href="/web.dashboard.admin.customer.customers/{{ $item->id }}/edit"><button type="button" class="deletebutton">Edit</button></a>
                        <a href="/web.dashboard.admin.customer.customers/{{ $item->id }}/delete" onclick="return confirm('Konfirmasi penghapusan data pelanggan?');"><button 
                        type="submit" class="deletebutton actionbutton">Delete</button></a>
                      </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
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
