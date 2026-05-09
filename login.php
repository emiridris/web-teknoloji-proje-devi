<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MHD AMIR IDRES - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Sayfayı tam oturtmak için flex yapısı */
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            display: flex;
            flex-direction: column;
            background-color: #f4f7f6;
        }
        .bg-dark-blue { background-color: #001f3f; }
        .text-info-custom { color: #0dcaf0; }
        
        /* Kartın sayfada tam ortalanması ve tasarımı */
        .login-container {
            flex: 1; /* Nav ve footer arasını tamamen kaplar */
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .login-card {
            border: none;
            border-radius: 20px;
            width: 100%;
            max-width: 420px;
            background: #ffffff;
        }
        .form-control-lg {
            font-size: 1rem;
            border-radius: 10px;
        }
        .btn-login {
            background-color: #001f3f;
            border: none;
            padding: 12px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-login:hover {
            background-color: #003366;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark-blue shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.html">Amir <span class="text-info-custom">Idres</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="index.html">Hakkında</a>
                    <a class="nav-link" href="cv.html">Özgeçmiş</a>
                    <a class="nav-link" href="sehir.html">Şehrim</a>
                    <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
                    <a class="nav-link" href="iletisim.html">İletişim</a>
                    <a class="nav-link active" href="login.php">Login</a>
                    <a class="nav-link" href="ilgialanlarim.html">İlgi Alanlarım</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="login-container">
        <div class="card shadow-lg login-card p-4 p-md-5">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-dark">Giriş Yap</h2>
                <p class="text-muted small">Lütfen bilgilerinizi kontrol ediniz</p>
            </div>

            <?php if(isset($_GET['hata'])): ?>
                <div class="alert alert-danger d-flex align-items-center mb-4" role="alert" style="border-radius: 12px;">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    <div>
                        <?php 
                            if($_GET['hata'] == "bos") echo "Lütfen tüm alanları doldurun!";
                            else if($_GET['hata'] == "yanlis") echo "Kullanıcı adı veya şifre hatalı!";
                            else echo "Bir hata oluştu!";
                        ?>
                    </div>
                </div>
            <?php endif; ?>

            <form action="login_kontrol.php" method="POST" onsubmit="return validateLogin()" autocomplete="off">
                <div class="mb-4">
                    <label class="form-label small fw-bold">Kullanıcı Adı (E-posta)</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0"><i class="fas fa-user text-muted"></i></span>
                        <input type="text" id="username" name="username" class="form-control form-control-lg border-start-0" 
                               placeholder="b25121... @sakarya.edu.tr" autocomplete="off" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label small fw-bold">Şifre</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0"><i class="fas fa-lock text-muted"></i></span>
                        <input type="password" id="password" name="password" class="form-control form-control-lg border-start-0" 
                               placeholder="Şifreniz" autocomplete="new-password" required>
                    </div>
                </div>

                <div id="js-error" class="alert alert-warning d-none small mb-3" style="border-radius: 10px;"></div>

                <button type="submit" class="btn btn-primary btn-login w-100 text-white">
                    Giriş Yap
                </button>
            </form>
            
            <div class="mt-4 text-center">
                <small class="text-muted">Örn: <strong>b221210576@sakarya.edu.tr</strong></small>
            </div>
        </div>
    </div>

    <footer class="py-4 bg-dark-blue text-white mt-auto">
        <div class="container text-center">
            <p class="mb-0 small opacity-75">&copy; 2026 - Tüm Hakları Saklıdır | MHD AMIR IDRES</p>
        </div>
    </footer>

    <script>
    function validateLogin() {
        const user = document.getElementById("username").value.trim();
        const pass = document.getElementById("password").value.trim();
        const errorDiv = document.getElementById("js-error");
        
        errorDiv.classList.add("d-none");

        // Email format kontrolü
        const pattern = /^[a-zA-Z0-9._%+-]+@sakarya\.edu\.tr$/;
        if (!pattern.test(user)) {
            errorDiv.innerText = "Email adresiniz @sakarya.edu.tr ile bitmelidir!";
            errorDiv.classList.remove("d-none");
            return false;
        }
        return true;
    }
    </script>
</body>
</html>