<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HiCar - Solution Car Rental</title>
    <link rel="shortcut icon" href="{{ asset('web/images/car-sport.svg') }}" />
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
  </head>
  <body>
    <header class="header" data-header>
      <div class="container">
        <div class="overlay" data-overlay></div>
        <a href="/index" class="logo" style="letter-spacing: 3px;">
          <h1>HiCar</h1>
        </a>

        <nav class="navbar" data-navbar>
          <ul class="navbar-list">
            <li>
              <a href="/index" class="navbar-link" data-nav-link>Home</a>
            </li>
            <li>
              <a href="/start" class="navbar-link" data-nav-link>Get Start</a>
            </li>
            <li>
              <a href="/about" class="navbar-link" data-nav-link>About us</a>
            </li>
            <li>
              <a href="/blog" class="navbar-link" data-nav-link>Blog</a>
            </li>
          </ul>
        </nav>

        <div class="header-actions">
          <div class="header-contact">
            <a href="https://wa.me/085155118413" class="contact-link">085155118413</a>
            <span class="contact-time">Senin - Jumat : 7:00 - 21:00 </span>
          </div>

          <a href="/explore" class="btn" aria-labelledby="aria-label-txt">
            <ion-icon name="car-outline"></ion-icon>
            <span id="aria-label-txt">Explore Cars</span>
          </a>
          <a href="/form" class="btn user-btn" aria-label="Profile">
            <ion-icon name="person-outline"></ion-icon>
          </a>

          <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
            <span class="one"></span>
            <span class="two"></span>
            <span class="three"></span>
          </button>
        </div>
      </div>
    </header>

    <main>
      <article>
        <section class="section hero" id="home">
          <div class="container">
            <div class="hero-content">
              <h2 class="h1 hero-title">Sebuah solusi perjalanan Anda!</h2>
              <p class="hero-text">Pilihan tepat, Rental Mobil dengan Pelayanan Berkualitas!</p>
            </div>

            <div class="hero-banner"></div>

            <form action="" class="hero-form">
              <div class="input-wrapper">
                <label for="input-1" class="input-label">Tentukan Mobilmu!</label>
                <input type="text" name="car-model" id="input-1" class="input-field" placeholder="Mau mobil apa?" />
              </div>

              <div class="input-wrapper">
                <label for="input-2" class="input-label">Sesuaikan budgetmu!</label>
                <input type="text" name="monthly-pay" id="input-2" class="input-field" placeholder="Cari harga berapa?" />
              </div>

              <div class="input-wrapper">
                <label for="input-3" class="input-label">Waktu penggunaan!</label>
                <input type="text" name="year" id="input-3" class="input-field" placeholder="Sewa berapa lama?" />
              </div>
              <button type="submit" class="btn">Search</button>
            </form>
          </div>
        </section>
      </article>
    </main>
    
    <footer class="footer">
      <div class="container">
  
        <div class="footer-top">
  
          <div class="footer-brand">
            <a href="/index" class="logoText" style="letter-spacing: 3px;">
              <h1>HiCar</h1>
            </a>
  
            <p class="footer-text">
              Sebuah solusi Transportasi dalam perjalan Anda, memenuhi berbagai
              kebutuhan penyewaan Mobil, pelayanan berkualitas dengan harga terjangkau!
            </p>
          </div>
  
          <ul class="footer-list">
  
            <li>
              <p class="footer-list-title">Company</p>
            </li>
  
            <li>
              <a href="/about" class="footer-link">About us</a>
            </li>
  
            <li>
              <a href="/start" class="footer-link">Pricing plans</a>
            </li>
  
            <li>
              <a href="/blog" class="footer-link">Our blog</a>
            </li>
  
            <li>
              <a href="/about" class="footer-link">Contacts</a>
            </li>
  
          </ul>
  
          <ul class="footer-list">
  
            <li>
              <p class="footer-list-title">Support</p>
            </li>
  
            <li>
              <a href="https://wa.me/085155118413" class="footer-link">Help center</a>
            </li>
  
            <li>
              <a href="https://wa.me/085155118413" class="footer-link">Ask a question</a>
            </li>
  
            <li>
              <a href="#" class="footer-link">Privacy policy</a>
            </li>
  
            <li>
              <a href="#" class="footer-link">Terms & conditions</a>
            </li>
  
          </ul>
  
          <ul class="footer-list">
  
            <li>
              <p class="footer-list-title">Service</p>
            </li>
  
            <li>
              <a href="#" class="footer-link">Sewa Mobil</a>
            </li>
  
            <li>
              <a href="#" class="footer-link">Sewa Sopir</a>
            </li>
  
            <li>
              <a href="#" class="footer-link">Media Pembelian</a>
            </li>
  
            <li>
              <a href="#" class="footer-link">Media Informasi</a>
            </li>
  
            <li>
              <a href="#" class="footer-link">Tour Guide</a>
            </li>
  
            <li>
              <a href="#" class="footer-link">Travel</a>
            </li>
  
            <li>
              <a href="#" class="footer-link">Antar Jemput</a>
            </li>
  
            <li>
              <a href="#" class="footer-link">Jasa Titip</a>
            </li>
  
          </ul>
  
        </div>
  
        <div class="footer-bottom">
  
          <ul class="social-list">
  
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>
  
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
  
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>
  
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>
  
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-skype"></ion-icon>
              </a>
            </li>
  
            <li>
              <a href="#" class="social-link">
                <ion-icon name="mail-outline"></ion-icon>
              </a>
            </li>
  
          </ul>
  
          <p class="copyright">
            &copy; 2023 <a href="#">Pwebprak</a>. All Rights Reserved
          </p>
          
        </div>
      </div>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('web/js/script.js') }}"></script>
  </body>
</html>
