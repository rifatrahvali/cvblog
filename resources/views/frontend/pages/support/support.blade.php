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
                    <form>
                        <h5 class="mb-3">Proje Detayları</h5>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Adınız" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Soyadınız" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="col-md-6">
                                <input type="tel" class="form-control" placeholder="Telefon">
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Tahmini Bütçe">
                            </div>
                            <div class="col-md-12">
                                <select class="form-select">
                                    <option value="" disabled selected>Web Sayfası Türü Seçin</option>
                                    <option>Kurumsal</option>
                                    <option>Kişisel</option>
                                    <option>E-Ticaret</option>
                                    <option>Blog</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" rows="4"
                                    placeholder="Projenizi Kısaca Tanıtınız"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label d-block">Hazırda Logonuz Var mı?</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="logo" id="logoYes" value="yes">
                                    <label class="form-check-label" for="logoYes">Evet</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="logo" id="logoNo" value="no">
                                    <label class="form-check-label" for="logoNo">Hayır</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control"
                                    placeholder="Web Sayfanızın Ne Zaman Hazır Olması Gerekiyor?">
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control"
                                    placeholder="Web Sayfanız Kaç Bölüm & Sayfadan Oluşacaktır?">
                            </div>
                            <div class="col-md-12">
                                <input type="url" class="form-control" placeholder="Geçerli Web Sayfanız">
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" rows="4"
                                    placeholder="Hedef Kitle ve Tercihler"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary w-100">Formu Gönder</button>
                            </div>
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