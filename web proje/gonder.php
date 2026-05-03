<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Mesaj Alındı</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container main-content shadow text-center">
        <h2 class="text-success mb-4">Mesajınız Alındı!</h2>
        <p class="lead">Aşağıdaki bilgiler tarafımıza ulaştı:</p>
        
        <div class="text-start mx-auto p-4 bg-light rounded shadow-sm" style="max-width: 500px; border-left: 5px solid #198754;">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Formdan gelen verileri güvenli hale getiriyoruz
                    $ad = htmlspecialchars($_POST['ad_soyad']);
                    $email = htmlspecialchars($_POST['email']);
                    $konu = htmlspecialchars($_POST['konu']);
                    $mesaj = htmlspecialchars($_POST['mesaj']);

                    echo "<p><strong>Gönderen:</strong> $ad</p>";
                    echo "<p><strong>E-posta:</strong> $email</p>";
                    echo "<p><strong>Konu:</strong> $konu</p>";
                    echo "<p><strong>Mesaj:</strong> $mesaj</p>";
                } else {
                    echo "<p class='text-danger'>Hata: Form verilerine doğrudan erişilemez!</p>";
                }
            ?>
        </div>
        
        <a href="index.html" class="btn btn-primary mt-4">Anasayfaya Dön</a>
    </div>

    <footer>
        <p>&copy; 2026 - MHD AMIR IDRES | Sakarya Üniversitesi</p>
    </footer>
</body>
</html>