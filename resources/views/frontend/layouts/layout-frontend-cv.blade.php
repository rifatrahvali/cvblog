<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>title</title>

    <link rel="stylesheet" href="../assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/frontend/css/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/frontend/css/styles.css"> <!-- Düzenlenmiş CSS dosyanız -->
</head>
<body class="bg-light">
    <div class="container">
        <div class="container p-0 mb-0">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand d-flex" href="#">
                        <h1>Rahvalı</h1>
                        <h4>#dev</h4>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="/frontend/page-cv.html" class="btn btn-outline-dark pages mt-1 btn-square-black">Hakkımda</a>
                            </li>
                            <li class="nav-item">
                                <a href="/frontend/page-blogs.html" class="btn btn-outline-dark pages mt-1  btn-square-black">Yazılar</a>
                            </li>
                            <li class="nav-item">
                                <a href="/frontend/page-gallery.html" class="btn btn-outline-dark pages mt-1 btn-square-black">Galeri</a>
                            </li>
                            <li class="nav-item">
                                <a href="/frontend/page-support.html" class="btn btn-outline-dark pages mt-1  btn-square-black">Destek</a>
                            </li>
                            <li class="nav-item">
                                <a href="/frontend/page-referans.html" class="btn btn-outline-dark pages mt-1  btn-square-black">Referans</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="line mb-3"></div>
        <div class="row">
            <section class="col-md-4 text-center mb-4 mb-md-0">
                <!-- Profil Kartı -->
                <div class="card mb-4 custom-card w-100">
                    <div class="bg-light">
                        <img src="https://rifatrahvali.com.tr/storage/profile_images/AvZ5YG0g2uJAPS1CoO4jfNwHNCxBFfOzGXwmnuDH.png"
                            alt="Profil Resmi" class="card-img-top profile-pic">
                    </div>
                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>Rıfat Rahvalı</b></h4>
                        <p class="card-text">Helpdesk</p>
                    </div>
                    <ul class="list-group list-group-flush d-flex bg-light">
                        <li class="list-group-item social-icons bg-light">
                            <a href="#">rifatrahvali</a>
                            <a href="https://github.com/rifatrahvali"><i class="bi bi-github"></i></a>
                            <a href="https://instagram.com/rifatrahvali"><i class="bi bi-instagram"></i></a>
                            <a href="https://twitter.com/rifatrahvali"><i class="bi bi-twitter-x"></i></a>
                            <a href="https://linkedin.com/in/rifatrahvali"><i class="bi bi-linkedin"></i></a>
                            <a href="https://youtube.com/@rifatrahvali"><i class="bi bi-youtube"></i></a>
                        </li>
                    </ul>
                    <div class="card-body bg-light">
                        <div class="social-icons">
                            <a href="mailto:rifatrahvali@outlook.com" class="card-link">
                                rifatrahvali@outlook.com <i class="bi bi-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Hakkımda Kartı -->
                <div class="card text-center mt-3 mt-md-0 custom-card w-100">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Hakkımda</h5>
                        <p class="card-text">
                            3.5 yıl boyunca kurumsal firmada IT departmanında çalıştım. Sunucu kurulumu &amp;
                            yönetimi, Network yapısı, Microsoft 365 yönetimi ile ilgili tecrübelerim oldu.
                            Kariyerimi yazılım alanında devam ettirmek istediğimden dolayı web geliştirme
                            alanında çalışmalar yapmaktayım.
                        </p>
                    </div>
                </div>
            </section>
            <section class="col-md-8 mt-md-0">
                <div class="row">
                    <!-- İş Deneyimi Kartı -->
                    <div class="col-md-6 mb-3">
                        <div class="card text-end bg-light custom-card">
                            <div class="card-body">
                                <h3 class="card-title">Deneyim</h3>
                                <p class="card-text">
                                    <b>Ağaoğlu Şirketler Grubu</b> <br>
                                    2020-07-13 : 2023-12-01 <br>
                                    <small class="text-muted">
                                        Helpdesk Uzman
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- İş Deneyiminden Öğrenimler Kartı -->
                    <div class="col-md-6 mb-3">
                        <div class="col-md-12 bg-light mb-3 p-0">
                            <div class="card bg-light custom-card">
                                <div class="card-body">
                                    <h3 class="card-title">Öğrenim</h3>
                                    <p class="card-text">
                                        <b>Kurumsal IT Yapısı</b>
                                    </p>
                                    <p class="card-text">
                                        <b>Network</b> | Kurulum &amp; Yönetim <br>
                                        <small class="text-muted">
                                            Forti, Juniper
                                        </small>
                                    </p>
                                    <p class="card-text">
                                        <b>Microsoft 365 Admin Center</b> | Kurulum &amp; Yönetim <br>
                                        <small class="text-muted">
                                            Kullanıcılar, Gruplar, Email, Defender
                                        </small>
                                    </p>
                                    <p class="card-text">
                                        <b>Yazılım</b> | Destek <br>
                                        <small class="text-muted">
                                            Dynamics CRM, Navision, LOGO
                                        </small>
                                    </p>
                                    <p class="card-text">
                                        <b>Sistem</b> | Kurulum &amp; Yönetim <br>
                                        <small class="text-muted">
                                            Active Directory, File Server, Domain
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Eğitim Kartı -->
                    <div class="col-md-6 mb-3">
                        <div class="card text-end bg-light custom-card">
                            <div class="card-body bg-light">
                                <h3 class="card-title">Eğitim</h3>
                                <p class="card-text bg-light">
                                    Mehmet Akif Ersoy EML <b>Sakarya</b> <br>
                                    <small class="text-muted">2012-06-15</small> | Bilgisayar Programcılığı
                                </p>
                                <p class="card-text bg-light">
                                    Beykent Üniversitesi <b>İstanbul</b> <br>
                                    <small class="text-muted">2020-07-10</small> | Bilgisayar Mühendisliği
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Eğitimden Öğrenim Kartı -->
                    <div class="col-md-6 mb-3">
                        <div class="card bg-light custom-card">
                            <div class="card-body">
                                <h3 class="card-title">Öğrenim</h3>
                                <p class="card-text">
                                    <b>Lise</b> | Yazılım &amp; Tasarım<br>
                                    <small class="text-muted">
                                        Adobe Uygulamaları, HTML, CSS, PHP, C#
                                    </small>
                                </p>
                                <p class="card-text">
                                    <b>Üniversite</b> | Yazılım &amp; Network<br>
                                    <small class="text-muted">
                                        Ağ Temelleri, Veritabanı İşlemleri, Mobil Geliştirme, Algoritma
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Kurs Kartı -->
                    <div class="col-md-6 mb-3">
                        <div class="card text-end bg-light custom-card">
                            <div class="card-body">
                                <h3 class="card-title">Kurs</h3>
                                <p class="card-text">
                                    <b>İngilizce</b> <br>
                                    Beykent Üniversitesi <br>
                                    <small class="text-muted">
                                        B1 Seviye
                                    </small>
                                </p>
                                <p class="card-text">
                                    <b>Full Stack Developer</b> <br>
                                    Udemy <br>
                                    <small class="text-muted">
                                        HTML, CSS, JavaScript, Node.js
                                    </small>
                                </p>
                                <p class="card-text">
                                    <b>IOS14 - Swift5 : Başlangıçtan İleri Seviye Mobil Uygulama</b> <br>
                                    Udemy <br>
                                    <small class="text-muted">
                                        Swift, Swift UI, Firebase, GIT, API, JSON
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Sertifika Kartı -->
                    <div class="col-md-6 mb-3">
                        <div class="card bg-light custom-card">
                            <div class="card-body">
                                <h3 class="card-title">Sertifikalar</h3>
                                <p class="card-text">
                                    <b>ISO 27001:2022</b> | Internal Auditor<br>
                                    <small class="text-muted">Sisbel</small>
                                </p>
                                <p class="card-text">
                                    <b>Siber Güvenlik - Giriş</b> | Siber Güvenlik<br>
                                    <small class="text-muted">Beykent Üniversitesi</small>
                                </p>
                                <p class="card-text">
                                    <b>Python ile Backend - Django</b> | Backend<br>
                                    <small class="text-muted">Ismek</small>
                                </p>
                                <p class="card-text">
                                    <b>Network Temelleri</b> | Network<br>
                                    <small class="text-muted">BTK Akademi</small>
                                </p>
                                <p class="card-text">
                                    <b>Fortigate</b> | Network<br>
                                    <small class="text-muted">BTK Akademi</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="footer text-center my-3">
            <div class="line mb-3"></div>
            <p>
                <i class="bi bi-c-circle-fill"></i> Rıfat Rahvalı <b>2024</b>
            </p>
        </div>
    </div>
    <script src="../assets/frontend/js/bootstrap.bundle.min.js"></script>
</body>
</html>