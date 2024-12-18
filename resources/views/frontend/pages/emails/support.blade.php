<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni Proje Teklifi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f9f9f9; font-family: Arial, sans-serif;">
    <div class="container my-5">
        <div class="card shadow">
            <div class="card-header bg-secondary text-white text-center">
                <h3>Yeni Proje Teklifi</h3>
            </div>
            <div class="card-body">
                <p><strong>Ad Soyad:</strong> {{ $formData['first_name'] }} {{ $formData['last_name'] }}</p>
                <p><strong>Email:</strong> {{ $formData['email'] }}</p>
                <p><strong>Telefon:</strong> {{ $formData['phone'] }}</p>
                <p><strong>Tahmini Bütçe:</strong> {{ $formData['budget'] ?? '-' }}</p>
                <p><strong>Web Sayfası Türü:</strong> {{ $formData['web_type'] }}</p>
                <p><strong>Proje Tanımı:</strong> {{ $formData['project_description'] }}</p>
                <p><strong>Teslim Tarihi:</strong> {{ $formData['delivery_date'] }}</p>
                <p><strong>Beğenilen Örnek Siteler:</strong> {{ $formData['example_sites'] ?? '-' }}</p>
                <p><strong>Sayfalar:</strong> {{ $formData['pages'] ?? '-' }}</p>
                <p><strong>Ekstra Notlar:</strong> {{ $formData['additional_notes'] ?? '-' }}</p>
                <p><strong>Dosya Eki:</strong> 
                    @if(isset($formData['file_path']))
                        <a href="{{ asset('storage/' . $formData['file_path']) }}" target="_blank">Dosyayı Görüntüle</a>
                    @else
                        Yok
                    @endif
                </p>
            </div>
            <div class="card-footer text-center text-muted">
                <p>Bu e-posta <strong>Rahvali Dev</strong> tarafından oluşturulmuştur.</p>
            </div>
        </div>
    </div>
</body>
</html>
