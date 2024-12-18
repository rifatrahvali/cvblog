@extends('frontend.layouts.layout-frontend-support')
@section('title-support')
Destek
@endsection
@section('content-support')
<div class="container">
    <div class="text-center">
        <h1>Destek</h1>
        <p class="text-muted">Web sitesi, network ve kamera desteği talebinizi iletebilirsiniz.</p>
    </div>

    <div class="accordion bg-light" id="supportAccordion">
        <!-- Web Sayfası Tasarımı -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingWeb">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWeb"
                    aria-expanded="true" aria-controls="collapseWeb">
                    Web Sayfası Tasarımı Teklif Formu
                </button>
            </h2>
            <div id="collapseWeb" class="accordion-collapse collapse" aria-labelledby="headingWeb"
                data-bs-parent="#supportAccordion">
                <div class="accordion-body">
                    <form action="{{route('support.request')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Adınız ve Soyadınız -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="first_name" class="form-label">Adınız</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Adınız" required>
                            </div>
                            <div class="col-md-6">
                                <label for="last_name" class="form-label">Soyadınız</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Soyadınız" required>
                            </div>
                        </div>

                        <!-- Email ve Telefon -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Telefon</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Telefon" required>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <!-- Tahmini Bütçe -->
                            <div class="col-md-6">
                                <label for="budget" class="form-label">Tahmini Bütçe</label>
                                <input type="number" class="form-control" id="budget" name="budget"  placeholder="Tahmini Bütçe">
                            </div>
                            <!-- Web Sayfası Türü -->
                            <div class="col-md-6">
                                <label for="web_type" class="form-label">Web Sayfası Türü</label>
                                <select class="form-select" id="web_type" name="web_type" required>
                                    <option value="" selected>Web Sayfası Türü Seçin</option>
                                    <option value="kurumsal">Kurumsal Web Sitesi</option>
                                    <option value="blog">Kişisel Blog</option>
                                    <option value="portfolio">Portföy Sitesi</option>
                                    <option value="landing">Landing Page</option>
                                </select>
                            </div>
                        </div>

                        <!-- Proje Tanıtımı -->
                        <div class="mb-3">
                            <label for="project_description" class="form-label">Projenizi Kısaca Tanıtınız</label>
                            <textarea class="form-control" id="project_description" rows="3"
                                placeholder="Projenizi Kısaca Tanıtınız..." name="project_description" ></textarea>
                        </div>

                        <!-- Hazır Logonuz Var mı? -->
                        <div class="row mb-3">
                            <div class="col-md-6"><label class="form-label d-block">Hazır Logonuz Var mı?</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="logo" id="logo_yes" value="evet">
                                    <label class="form-check-label" for="logo_yes">Evet</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="logo" id="logo_no" value="hayır">
                                    <label class="form-check-label" for="logo_no">Hayır</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="logo" id="logo_redesign"
                                        value="yeniden">
                                    <label class="form-check-label" for="logo_redesign">Yeniden Tasarım</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="delivery_date" class="form-label">Proje Teslim Tarihi</label>
                                <input type="date" class="form-control" id="delivery_date" name="delivery_date" required>
                            </div>
                        </div>

                        <!-- Beğendiğiniz Örnek Siteler -->
                        <div class="mb-3">
                            <label for="example_sites" class="form-label">Beğendiğiniz Örnek Web Siteleri (URL)</label>
                            <textarea class="form-control" id="example_sites" name="example_sites"  rows="2"
                                placeholder="Örnek siteleri paylaşınız..."></textarea>
                        </div>

                        <!-- Sayfalar ve Proje Teslim Tarihi -->
                        <div class="mb-3">
                            <label for="pages" class="form-label">Web Sayfasında Hangi Sayfalar Olacak?</label>
                            <textarea class="form-control" id="pages" rows="2" name="pages" 
                                placeholder="Ana Sayfa, Hakkımızda, Blog..."></textarea>
                        </div>

                        <!-- Dosya Yükleme -->
                        <div class="mb-3">
                            <label for="files" class="form-label">Dosya Eki (PDF, Word, Görsel)</label>
                            <input class="form-control" type="file" id="files" name="files[]" accept=".jpeg,.png,.jpg,.pdf,.doc,.docx" multiple>
                        </div>

                        <!-- Ekstra Talepler -->
                        <div class="mb-4">
                            <label for="additional_notes" class="form-label">Ekstra Talepler veya Notlar</label>
                            <textarea class="form-control" id="additional_notes" rows="3" name="additional_notes" 
                                placeholder="Ekstra taleplerinizi yazabilirsiniz..."></textarea>
                        </div>

                        <!-- Form Gönder Butonu -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-secondary btn-lg">Teklif İsteği Gönder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Network Desteği -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingNetwork">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseNetwork" aria-expanded="false" aria-controls="collapseNetwork">
                    Network Desteği
                </button>
            </h2>
            <div id="collapseNetwork" class="accordion-collapse collapse" aria-labelledby="headingNetwork"
                data-bs-parent="#supportAccordion">
                <div class="accordion-body">
                    <p>Network desteği talebiniz için kısa bir form burada yer alabilir.</p>
                    <form>
                        <!-- Form alanları buraya -->
                    </form>
                </div>
            </div>
        </div>
        <!-- Kamera Kurulum Desteği -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingCamera">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseCamera" aria-expanded="false" aria-controls="collapseCamera">
                    Kamera Kurulum Desteği
                </button>
            </h2>
            <div id="collapseCamera" class="accordion-collapse collapse" aria-labelledby="headingCamera"
                data-bs-parent="#supportAccordion">
                <div class="accordion-body">
                    <p>Kamera kurulumu talebiniz için kısa bir form burada yer alabilir.</p>
                    <form>
                        <!-- Form alanları buraya -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()