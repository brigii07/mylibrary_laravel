<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regisztráció - Könyvkatalógus</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    @vite(['resources/css/register.css'])
</head>
<body>
    <div class="register-container">
        <div class="register-header">
            <div class="book-icon">
                <i class="fas fa-book-open"></i>
            </div>
            <h2>Könyvkatalógus</h2>
            <p>Regisztráljon be az irodalmi világba</p>
        </div>
        
        <form id="RegisterForm" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">
                    <i class="fas fa-envelope me-2"></i>E-mail cím
                </label>
                <input type="email" class="form-control" id="email" placeholder="pelda@email.com" required>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">
                    <i class="fas fa-person me-2"></i>Név
                </label>
                <input type="name" class="form-control" id="name" placeholder="Példa János" required>
            </div>
            
            <div class="mb-3">
                <label for="password" class="form-label">
                    <i class="fas fa-lock me-2"></i>Jelszó
                </label>
                <input type="password" class="form-control" id="password" placeholder="Adja meg a jelszavát" required>
            </div>
            
            <div class="mb-3">
                <label for="passwordagain" class="form-label">
                    <i class="fas fa-lock me-2"></i>Jelszó megerősítése
                </label>
                <input type="passwordagain" class="form-control" id="passwordagain" placeholder="Adja meg a jelszó megerősítését" required>
            </div>


            <button type="button" class="btn btn-primary btn-register w-100">
                <i class="fas fa-sign-in-alt me-2"></i>Regisztráció
            </button>
            <div class="login-link">
                <span style="color: #8B4513;">Van már fiókja? </span>
                <a href="/">Belépés</a>
            </div>
        </form>
    </div>

</body>
</html>