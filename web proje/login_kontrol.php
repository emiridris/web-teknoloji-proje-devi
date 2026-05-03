<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş Kontrol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container main-content shadow text-center">
        <?php
            // Formdan gelen verileri yakalıyoruz
            $user = $_POST['username'] ?? '';
            $pass = $_POST['password'] ?? '';

            // --- BURAYI KENDİ BİLGİLERİNLE DÜZELT ---
            $dogru_kullanici = "b251210576@ogr.sakarya.edu.tr"; 
            $dogru_sifre = "b251210576"; 
            if ($user == $dogru_kullanici && $pass == $dogru_sifre) {
                echo "<div class='alert alert-success py-5'>";
                echo "<h2>Hoşgeldiniz " . substr($user, 0, 10) . "</h2>"; // Numaranı ekrana basar
                echo "<p class='lead mt-3'>Giriş işleminiz başarıyla onaylandı.</p>";
                echo "<a href='index.html' class='btn btn-success mt-3'>Anasayfaya Git</a>";
                echo "</div>";
            } else {
                echo "<div class='alert alert-danger py-5'>";
                echo "<h2>Hatalı Giriş!</h2>";
                echo "<p>Kullanıcı adı veya şifre yanlış.</p>";
                echo "<p>Login sayfasına geri yönlendiriliyorsunuz...</p>";
                echo "</div>";
                // 3 saniye sonra geri gönderir
                header("Refresh: 3; url=login.php");
            }
        ?>
    </div>
</body>
</html>