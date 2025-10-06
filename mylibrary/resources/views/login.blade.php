<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bejelentkezés - Könyvkatalógus</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <div class="book-icon">
                <i class="fas fa-book-open"></i>
            </div>
            <h2>Könyvkatalógus</h2>
            <p>Lépjen be az irodalmi világba</p>
        </div>
        
        <form id="loginForm" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">
                    <i class="fas fa-envelope me-2"></i>E-mail cím
                </label>
                <input type="email" class="form-control" id="email" placeholder="pelda@email.com" required>
            </div>
            
            <div class="mb-3">
                <label for="password" class="form-label">
                    <i class="fas fa-lock me-2"></i>Jelszó
                </label>
                <input type="password" class="form-control" id="password" placeholder="Adja meg a jelszavát" required>
            </div>
            
            <button type="submit" class="btn btn-primary btn-login w-100">
                <i class="fas fa-sign-in-alt me-2"></i>Bejelentkezés
            </button>
        </form>
        
        
        <div class="register-link">
            <span style="color: #8B4513;">Nincs még fiókja? </span>
            <a href="/regisztracio">Regisztráció</a>
        </div>
    </div>

</body>
</html>