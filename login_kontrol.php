<?php
// PHP yönlendirmesi (header) çıktıdan önce yapılmalıdır, bu yüzden en üstte tutuyoruz.
$user = isset($_POST['username']) ? trim($_POST['username']) : '';
$pass = isset($_POST['password']) ? trim($_POST['password']) : '';

// Ödev dökümanındaki doğru bilgiler
$dogru_kullanici = "b251210576@sakarya.edu.tr"; 
$dogru_sifre = "b251210576"; 

// Giriş Kontrolü
if ($user === $dogru_kullanici && $pass === $dogru_sifre) {
    // Başarılı giriş
    $ogrenciNo = "b251210576";
} else if (empty($user) || empty($pass)) {
    // Alanlar boşsa
    header("Location: login.php?hata=bos");
    exit();
} else {
    // Hatalı bilgiler
    header("Location: login.php?hata=yanlis");
    exit();
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Başarılı - MHD AMIR IDRES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #f4f7f6;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .success-card {
            background: white;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            max-width: 500px;
            width: 100%;
        }
        .check-icon {
            font-size: 80px;
            color: #198754;
            margin-bottom: 20px;
        }
        .btn-home {
            background-color: #001f3f;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 10px;
            text-decoration: none;
            transition: 0.3s;
        }
        .btn-home:hover {
            background-color: #003366;
            color: white;
        }
    </style>
</head>
<body>

    <div class="container text-center">
        <div class="success-card mx-auto">
            <div class="check-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <h2 class="fw-bold text-dark">Hoşgeldiniz</h2>
            <h3 class="text-primary mb-4"><?php echo htmlspecialchars($ogrenciNo); ?></h3>
            
            <p class="lead text-muted mb-5">Giriş işleminiz başarıyla onaylandı.</p>
            
            <a href="index.html" class="btn-home shadow-sm">
                <i class="fas fa-home me-2"></i>Anasayfaya Dön
            </a>
        </div>
    </div>

</body>
</html>