<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MHD AMIR IDRES - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html">Amir Idres</a>
            <div class="navbar-nav">
                <a class="nav-link" href="index.html">Hakkında</a>
                <a class="nav-link" href="cv.html">Özgeçmiş</a>
                <a class="nav-link" href="sehir.html">Şehrim</a>
                <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
                <a class="nav-link" href="iletisim.html">İletişim</a>
                <a class="nav-link active" href="login.php">Login</a>
            </div>
        </div>
    </nav>

    <div class="container main-content shadow d-flex justify-content-center align-items-center" style="min-height: 450px;">
        <div class="card p-4 shadow-sm" style="width: 100%; max-width: 400px; border-radius: 15px;">
            <h3 class="text-center mb-4">Giriş Yap</h3>
            
            <form action="login_kontrol.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Kullanıcı Adı (E-posta)</label>
                    <input type="text" name="username" class="form-control" placeholder="g211210... @ogr.sakarya.edu.tr" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Şifre</label>
                    <input type="password" name="password" class="form-control" placeholder="Şifreniz" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Giriş Yap</button>
            </form>
            
            <div class="mt-3 text-center">
                <small class="text-muted italic">Kullanıcı adı öğrenci numaranızdır.</small>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2026 - MHD AMIR IDRES | Sakarya Üniversitesi</p>
    </footer>

</body>
</html>