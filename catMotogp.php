<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MieChat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<script>
    function searchNews() {
        var input, filter, newsItems, newsTitles, i, txtValue;
        input = document.getElementById('searchInput');
        filter = input.value.toUpperCase();
        newsItems = document.getElementsByClassName('news-item');

        for (i = 0; i < newsItems.length; i++) {
            newsTitles = newsItems[i].getElementsByClassName('text-secondary text-uppercase font-weight-bold');
            txtValue = newsTitles[0].textContent || newsTitles[0].innerText;

            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                newsItems[i].style.display = '';
            } else {
                newsItems[i].style.display = 'none';
            }
        }
    }

    // Mengatur event listener untuk memanggil fungsi pencarian saat input berubah
    document.getElementById('searchInput').addEventListener('input', searchNews);
</script>
<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center bg-dark px-lg-5">
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-n2">  
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="index.html">Home</a>
                        </li>
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-body small" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body small" href="form login dan registrasi-biru/index.html">Login</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 text-right d-none d-md-block">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-auto mr-n2">
                        <li class="nav-item">
                            <a class="nav-link text-body" href="#"><small class="fab fa-twitter"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="#"><small class="fab fa-facebook-f"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="#"><small class="fab fa-instagram"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="#"><small class="fab fa-youtube"></small></a>
                        </li>
                    </ul>
                </nav>
            </div>
            
        </div>
       
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-4 text-uppercase text-primary">MieChat<span class="text-white font-weight-normal">Sport</span></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.html" class="nav-item nav-link">Home</a>
                    <a href="category.html" class="nav-item nav-link active">Category</a>
                    <a href="single.html" class="nav-item nav-link">Single News</a>
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">Menu item 1</a>
                            <a href="#" class="dropdown-item">Menu item 2</a>
                            <a href="#" class="dropdown-item">Menu item 3</a>
                        </div>
                    </div> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Jadwal</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="football.html" class="dropdown-item">Jadwal SepakBola</a>
                            <a href="gp.html" class="dropdown-item">Jadwal MotoGP</a>
                            <a href="badminton.html" class="dropdown-item">Jadwal Badminton</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                    <input type="text" id="searchInput" onkeyup="searchNews()" placeholder="Search...">
                    <div class="input-group-append">
                        <button class="input-group-text bg-primary text-dark border-0 px-3" onclick="searchNews()"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid mt-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Category: MotoGP</h4>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                            </div>
                        </div>
                        <div class="col-lg-6 news-item">
                            
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="imgg/bola/argentina.jpeg" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">Football News</a>
                                        <a class="text-body" href=""><small>Nov 17, 2023</small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="https://sport.detik.com/sepakbola/bola-dunia/d-7041514/argentina-vs-uruguay-diwarnai-ribut-ribut-lionel-messi-dkk-kalah-0-2">Argentina Vs Uruguay: Diwarnai Ribut-ribut, Lionel Messi dkk kalah 0-2</a>
                                    <p class="m-0">Laga berjalan sengit di Stadion Alberto Jose Armando atau La Bombonera, Buenos Aires, Jumat (17/11/2023) pagi WIB. Tensi panas mewarnai jalannya laga.
                                        </p>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                                        <small>Oktomigo</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 news-item">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="imgg/bola/u17.jpeg" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">Football News</a>
                                        <a class="text-body" href=""><small>Nov 17, 2023</small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="https://sport.detik.com/sepakbola/liga-indonesia/d-7042425/penilaian-erick-thohir-pada-timnas-u-17">Penilaian erick thohir pada Timnas U-17 Usai kekalahan kemarin</a>
                                    <p class="m-0">Timnas Indonesia U-17 menempati Grup A Piala Dunia U-17 2023. Hasilnya, Garuda Muda imbang atas Ekuador dan Panama dengan skor sama 1-1, lalu takluk dari Maroko 1-3.

                                    </p>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                                        <small>Oktomigo</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 news-item">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="imgg/bola/belligoal.jpg" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">Football News</a>
                                        <a class="text-body" href=""><small>Nov 17, 2023</small></a>
                                    </div>
                                    <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold" href="https://www.bola.net/spanyol/selamat-jude-bellingham-raih-penghargaan-golden-boy-2023-19158e.html#:~:text=Bola.net%20%2D%20Gelandang%20Real%20Madrid,17%2F11%2F2023).">Gelandang Real Madrid, Jude Bellingham, berhasil memenangkan penghargaan Golden Boy 2023...</a>
                                <p>Penghargaan Golden Boy ini dikhususkan untuk para pemain yang berusia 21 tahun ke bawah. Media asal Italia, Tuttosport, menjadi penggagas penghargaan bergengsi tersebut.</p>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                                        <small>Oktomigo</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 news-item">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="imgg/bola/2.jpeg" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">Football News</a>
                                        <a class="text-body" href=""><small>19 Nov 2023</small></a>
                                    </div>
                                    <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold" href="https://sport.detik.com/sepakbola/liga-inggris/d-7045171/klub-premier-league-ini-siap-gaet-bellingham-bulan-januari-nanti">klub premier league ini siap gaet bellingham bulan januari nanti</a>
                                <p>Musim debut bersama klub baru bukan cuma dijalani Jude Bellingham. Adiknya, Jobe Bellingham, juga melakoni hal serupa sampai dilirik klub Premier League.</p>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                                        <small>Oktomigo</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 news-item">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="imgg/bola/2.jpeg" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">Football News</a>
                                        <a class="text-body" href=""><small>19 Nov 2023</small></a>
                                    </div>
                                    <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold" href="https://sport.detik.com/sepakbola/liga-inggris/d-7045171/klub-premier-league-ini-siap-gaet-bellingham-bulan-januari-nanti">klub premier league ini siap gaet bellingham bulan januari nanti</a>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                                        <small>Oktomigo</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 news-item">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="imgg/bola/belligoal.jpg" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">Football News</a>
                                        <a class="text-body" href=""><small>Nov 17, 2023</small></a>
                                    </div>
                                    <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold" href="https://www.bola.net/spanyol/selamat-jude-bellingham-raih-penghargaan-golden-boy-2023-19158e.html#:~:text=Bola.net%20%2D%20Gelandang%20Real%20Madrid,17%2F11%2F2023).">Gelandang Real Madrid, Jude Bellingham, berhasil memenangkan penghargaan Golden Boy 2023...</a>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                                        <small>Oktomigo</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                      
                        <div class="col-lg-12 news-item">
                            <div class="row news-lg mx-0 mb-3">
                                <div class="col-md-6 h-100 px-0">
                                    <img class="img-fluid h-100" src="imgg/bola/3.jpeg" style="object-fit: cover;">
                                </div>
                                <div class="col-md-6 d-flex flex-column border bg-white h-100 px-0">
                                    <div class="mt-auto p-4">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                href="">Football News</a>
                                            <a class="text-body" href=""><small>18 Nov 2023</small></a>
                                        </div>
                                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="https://sport.detik.com/sepakbola/liga-indonesia/d-7044204/daftar-lengkap-16-negara-di-babak-16-besar-piala-dunia-u-17">Daftar Lengkap 16 Negara di Babak 16 Besar Piala Dunia U-17</a>
                                        <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                            rebum clita rebum dolor stet amet justo</p>
                                    </div>
                                    <div class="d-flex justify-content-between bg-white border-top mt-auto p-4">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                                            <small>Oktomigo</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                            <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <!-- Social Follow Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                                <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Fans</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                                <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                           
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                                <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                                <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Subscribers</span>
                            </a>
                            
                        </div>
                    </div>
                    <!-- Social Follow End -->

                    <!-- Ads Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                            <a href=""><img class="img-fluid" src="imgg/valencia.jpeg" alt=""></a>
                        </div>
                    </div>
                    <!-- Ads End -->

                   

                    <!-- Tags Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <div class="d-flex flex-wrap m-n1">
                                <a href="catMotogp.html" class="btn btn-sm btn-outline-secondary m-1">MotoGP</a>
                                <a href="catBadmin.html" class="btn btn-sm btn-outline-secondary m-1">Badminton</a>
                                <a href="category.html" class="btn btn-sm btn-outline-secondary m-1">Sepak Bola</a>
                            </div>
                        </div>
                    </div>
                    <!-- Tags End -->
                </div>
            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->


<!-- Footer Start -->
<div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
    <div class="row py-4">
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">Get In Touch</h5>
            <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-2"></i>FTI UKSW, Salatiga, Indonesia</p>
            <p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i>012345678910</p>
            <p class="font-weight-medium"><i class="fa fa-envelope mr-2"></i>ernestgloriusdeo@gmail.com</p>

        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">Popular News</h5>
            <div class="mb-3">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">MotoGP</a>
                    <a class="text-body" href=""><small>Nov 26, 2023</small></a>
                </div>
                <a class="small text-body text-uppercase font-weight-medium" href="https://sport.detik.com/moto-gp/d-7057812/motogp-valencia-2023-francesco-bagnaia-juaranya-juga-jadi-juara-dunia">GP Valencia 2023: Francesco Bagnaia Juaranya...</a>
            </div>
            <div class="mb-3">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="https://sport.detik.com/moto-gp/d-7057801/motogp-valencia-2023-jack-miller-jatuh-pecco-kini-terdepan">MotoGP</a>
                    <a class="text-body" href=""><small>Nov 26, 2023</small></a>                    
                </div>
                <a class="small text-body text-uppercase font-weight-medium" href="">GP Valencia 2023: Jack Miller Jatuh, Pecco Kini Terdepan...</a>
            </div>
            <div class="">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">MotoGP</a>
                    <a class="text-body" href=""><small>Nov 26, 2023</small></a>                    
                </div>
                <a class="small text-body text-uppercase font-weight-medium" href="https://sport.detik.com/moto-gp/d-7057792/motogp-valencia-2023-setengah-balapan-5-rider-jadi-korban">GP Valencia 2023: Setengah Balapan, 5 Rider Jadi 'Korban'...</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">Categories</h5>
            <div class="m-n1">
                <a href="" class="btn btn-sm btn-secondary m-1">Sepak Bola</a>
                <a href="" class="btn btn-sm btn-secondary m-1">Badminton</a>
                <a href="" class="btn btn-sm btn-secondary m-1">MotoGP</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">Flickr Photos</h5>
            <div class="row">
                <div class="col-4 mb-3">
                    <a href=""><img class="w-100" src="imgg/motogp.jpeg" alt=""></a>
                </div>
                <div class="col-4 mb-3">
                    <a href=""><img class="w-100" src="imgg/pecco-bagnaia-di-motogp-malaysia-2023-5.jpeg" alt=""></a>
                </div>
                <div class="col-4 mb-3">
                    <a href=""><img class="w-100" src="imgg/valencia.jpeg" alt=""></a>
                </div>
                
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
    <!-- <p class="m-0 text-center">&copy; <a href="#">Your Site Name</a>. All Rights Reserved.  -->
    
    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
    <!-- Design by <a href="https://htmlcodex.com">HTML Codex</a></p> -->
</div>
<!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>