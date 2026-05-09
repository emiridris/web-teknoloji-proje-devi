<?php
// PHP hatalarını engellemek için verileri kontrol ederek alıyoruz
$ad_soyad = isset($_POST['ad_soyad']) ? htmlspecialchars($_POST['ad_soyad']) : 'Belirtilmedi';
$email    = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'Belirtilmedi';
$konu     = isset($_POST['konu']) ? htmlspecialchars($_POST['konu']) : 'Belirtilmedi';
$mesaj    = isset($_POST['mesaj']) ? htmlspecialchars($_POST['mesaj']) : 'Belirtilmedi';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Mesaj Alındı</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>.bg-dark-blue { background-color: #001f3f; }</style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow p-5 border-0 rounded-4 text-center mx-auto" style="max-width: 600px;">
            <h2 class="text-success fw-bold mb-4">Mesajınız Alındı!</h2>
            <div class="text-start bg-light p-4 rounded border">
                <p><strong>Gönderen:</strong> <?php echo $ad_soyad; ?></p>
                <p><strong>E-posta:</strong> <?php echo $email; ?></p>
                <p><strong>Konu:</strong> <?php echo $konu; ?></p>
                <p><strong>Mesaj:</strong> <?php echo nl2br($mesaj); ?></p>
            </div>
            <a href="index.html" class="btn btn-primary bg-dark-blue mt-4 px-5">Anasayfaya Dön</a>
        </div>
    </div>
</body>
</html>