<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HiCar - Solution Car Rental</title>
        <link rel="shortcut icon" href="{{ asset('web/images/car-sport.svg') }}" />
        <link rel="stylesheet" href="{{ asset('web/css/blog.css') }}" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    </head>
    <body>
        <header class="header" data-header>
            <div class="container">
                <div class="overlay" data-overlay></div>
                <a href="/index" class="logo" style="letter-spacing: 3px; color: hsl(210, 11%, 15%);">
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
                        <a href="https://wa.me/082156226440" class="contact-link">082156226440</a>
                        <span class="contact-time">Senin - Jumat : 7:00 - 21:00 </span>
                    </div>

                    <a href="/explore" class="btn" aria-labelledby="aria-label-txt">
                        <ion-icon name="car-outline"></ion-icon>
                        <span id="aria-label-txt">Explore cars</span>
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

<!-- - #BLOG -->

        <section class="section blog" id="blog" style="text-align: center;">
            <div class="container">

            <h2 class="h2 section-title">Kami sediakan bacaan menarik untuk Anda!</h2>

            <ul class="blog-list has-scrollbar">

                <li>
                <div class="blog-card">

                    <figure class="card-banner">

                    <a href="#">
                        <img src="./assets/images/blog-1.jpg" alt="Opening of new offices of the company" loading="lazy"
                        class="w-100">
                    </a>

                    <a href="#" class="btn card-badge">Dunia</a>

                    </figure>

                    <div class="card-content">

                    <h3 class="h3 card-title">
                        <a href="#">Dampak Perubahan Iklim berakibat Pemanasan Global!</a>
                    </h3>

                    <div class="card-meta">

                        <div class="publish-date">
                        <ion-icon name="time-outline"></ion-icon>

                        <time datetime="2022-01-14">Januari 14, 2023</time>
                        </div>

                        <div class="comments">
                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                        <data value="114">114</data>
                        </div>

                    </div>

                    </div>

                </div>
                </li>

                <li>
                <div class="blog-card">

                    <figure class="card-banner">

                    <a href="#">
                        <img src="./assets/images/blog-2.jpg" alt="What cars are most vulnerable" loading="lazy"
                        class="w-100">
                    </a>

                    <a href="#" class="btn card-badge">Mesin</a>

                    </figure>

                    <div class="card-content">

                    <h3 class="h3 card-title">
                        <a href="#">Teknologi terbaru Mesin Mobil bertenaga Super!</a>
                    </h3>

                    <div class="card-meta">

                        <div class="publish-date">
                        <ion-icon name="time-outline"></ion-icon>

                        <time datetime="2022-01-14">Januari 24, 2023</time>
                        </div>

                        <div class="comments">
                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                        <data value="114">259</data>
                        </div>

                    </div>

                    </div>

                </div>
                </li>

                <li>
                <div class="blog-card">

                    <figure class="card-banner">

                    <a href="#">
                        <img src="./assets/images/blog-3.jpg" alt="Statistics showed which average age" loading="lazy"
                        class="w-100">
                    </a>

                    <a href="#" class="btn card-badge">Klasik</a>

                    </figure>

                    <div class="card-content">

                    <h3 class="h3 card-title">
                        <a href="#">Pameran Mobil Klasik ramaikan Tahun Baru!</a>
                    </h3>

                    <div class="card-meta">

                        <div class="publish-date">
                        <ion-icon name="time-outline"></ion-icon>

                        <time datetime="2022-01-14">Desember 31, 2022</time>
                        </div>

                        <div class="comments">
                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                        <data value="114">234</data>
                        </div>

                    </div>

                    </div>

                </div>
                </li>

                <li>
                <div class="blog-card">

                    <figure class="card-banner">

                    <a href="#">
                        <img src="./assets/images/blog-4.jpg" alt="What´s required when renting a car?" loading="lazy"
                        class="w-100">
                    </a>

                    <a href="#" class="btn card-badge">Mobil</a>

                    </figure>

                    <div class="card-content">

                    <h3 class="h3 card-title">
                        <a href="#">Penumpukan mobil terjadi di Parkian Galaxy Mall!</a>
                    </h3>

                    <div class="card-meta">

                        <div class="publish-date">
                        <ion-icon name="time-outline"></ion-icon>

                        <time datetime="2022-01-14">Februari 20, 2023</time>
                        </div>

                        <div class="comments">
                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                        <data value="114">214</data>
                        </div>

                    </div>

                    </div>

                </div>
                </li>

                <li>
                <div class="blog-card">

                    <figure class="card-banner">

                    <a href="#">
                        <img src="./assets/images/blog-5.jpg" alt="New rules for handling our cars" loading="lazy"
                        class="w-100">
                    </a>

                    <a href="#" class="btn card-badge">Lalu Lintas</a>

                    </figure>

                    <div class="card-content">

                    <h3 class="h3 card-title">
                        <a href="#">Peraturan Ganjil Genap mulai diberlakukan di Madura!</a>
                    </h3>

                    <div class="card-meta">

                        <div class="publish-date">
                        <ion-icon name="time-outline"></ion-icon>

                        <time datetime="2022-01-14">Maret 14, 2023</time>
                        </div>

                        <div class="comments">
                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                        <data value="114">534</data>
                        </div>

                    </div>

                    </div>

                </div>
                </li>

            </ul>

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
    </body>
</html>