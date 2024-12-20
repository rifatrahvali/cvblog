<!DOCTYPE html>
<html>
<head>
    <title>Davet Maili</title>
</head>
<body>
    <h1>Merhaba, size özel bir davet var!</h1>
    <p>Kayıt olmak için aşağıdaki linke tıklayın:</p>
    <p><a href="{{ $url }}">{{ $url }}</a></p>
    <p>Bu davet {{ $invitation->expires_at }} tarihine kadar geçerlidir.</p>
</body>
</html>