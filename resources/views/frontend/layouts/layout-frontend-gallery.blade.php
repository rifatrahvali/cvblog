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
                <div class="row gallery g-3">
                    <!-- Galeri Öğesi -->
                    <div class="col-md-4 col-sm-6">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-image="../assets/frontend/images/network.png">
                            <img src="../assets/frontend/images/network.png" class="img-fluid rounded gallery-item" alt="Gallery Image 1">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-image="../assets/frontend/images/network.png">
                            <img src="../assets/frontend/images/network.png" class="img-fluid rounded gallery-item" alt="Gallery Image 1">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-image="../assets/frontend/images/network.png">
                            <img src="../assets/frontend/images/network.png" class="img-fluid rounded gallery-item" alt="Gallery Image 1">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-image="../assets/frontend/images/network.png">
                            <img src="../assets/frontend/images/network.png" class="img-fluid rounded gallery-item" alt="Gallery Image 1">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-image="../assets/frontend/images/network.png">
                            <img src="../assets/frontend/images/network.png" class="img-fluid rounded gallery-item" alt="Gallery Image 2">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-image="../assets/frontend/images/network.png">
                            <img src="../assets/frontend/images/network.png" class="img-fluid rounded gallery-item" alt="Gallery Image 3">
                        </a>
                    </div>
                    <!-- Diğer Galeri Öğeleri -->
                </div>
                
                <!-- Modal -->
                <div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <img src="" class="img-fluid w-100" id="modalImage" alt="Büyütülmüş Görsel">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                            </div>
                        </div>
                    </div>
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
    <script>
        // Modal açıldığında ilgili görseli göster
        const galleryModal = document.getElementById('galleryModal');
        galleryModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget; // Tıklanan galeri öğesi
            const imageSrc = button.getAttribute('data-bs-image'); // Görselin kaynağı
            const modalImage = document.getElementById('modalImage'); // Modal içindeki görsel
            modalImage.src = imageSrc; // Modal görsel kaynağını güncelle
        });
    </script>
</body>
</html>