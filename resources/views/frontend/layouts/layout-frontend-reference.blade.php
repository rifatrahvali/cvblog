<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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
                                <a href="/frontend/page-blogs.html" class="btn btn-outline-dark pages mt-1 btn-square-black">Yazılar</a>
                            </li>
                            <li class="nav-item">
                                <a href="/frontend/page-gallery.html" class="btn btn-outline-dark pages mt-1 btn-square-black">Galeri</a>
                            </li>
                            <li class="nav-item">
                                <a href="/frontend/page-support.html" class="btn btn-outline-dark pages mt-1 btn-square-black">Destek</a>
                            </li>
                            <li class="nav-item">
                                <a href="/frontend/page-referans.html" class="btn btn-outline-dark pages mt-1 btn-square-black">Referans</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="line mb-3"></div>
        <!-- İÇERİK -->
        <div class="row">
            <div class="col-md-12">
                <div class="row g-4">
                    <!-- Referans Card -->
                    <div class="col-md-4 col-sm-6">
                        <div class="card-reference shadow-sm h-100">
                            <img src="../assets/frontend/images/network.png" class="card-img-top" alt="Referans 1">
                            <div class="card-body p-3">
                                <h5 class="card-title">Proje Adı 1</h5>
                                <p class="card-text">Kısa bir açıklama veya detay eklenebilir.</p>
                            </div>
                        </div>
                    </div>
                
                    <!-- Referans Card -->
                    <div class="col-md-4 col-sm-6">
                        <div class="card-reference shadow-sm h-100">
                            <img src="../assets/frontend/images/network.png" class="card-img-top" alt="Referans 2">
                            <div class="card-body p-3">
                                <h5 class="card-title">Proje Adı 2</h5>
                                <p class="card-text">Kısa bir açıklama veya detay eklenebilir.</p>
                            </div>
                        </div>
                    </div>
                
                    <!-- Referans Card -->
                    <div class="col-md-4 col-sm-6">
                        <div class="card-reference shadow-sm h-100">
                            <img src="../assets/frontend/images/network.png" class="card-img-top" alt="Referans 3">
                            <div class="card-body p-3">
                                <h5 class="card-title">Proje Adı 3</h5>
                                <p class="card-text">Kısa bir açıklama veya detay eklenebilir.</p>
                            </div>
                        </div>
                    </div>
                
                    <!-- Daha Fazla Kart Eklenebilir -->
                </div>
            </div>
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