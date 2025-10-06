<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilom - Könyvkatalógus</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
     @vite(['resources/css/profile.css'])

</head>
<body>
    <div class="profile-container">
        <!-- Profil fejléc -->
        <div class="profile-header">
            <div class="profile-avatar">
                <i class="fas fa-user"></i>
            </div>
            <!-- <h1 class="profile-name"> Auth::user()->name </h1> -->
            <p class="profile-email"><i class="fas fa-envelope me-2"></i>kovacs.janos@email.com</p>
            
            <div class="action-buttons">
                
                <button class="btn-logout" onclick="handleLogout()">
                    <i class="fas fa-sign-out-alt me-2"></i>Kijelentkezés
                </button>
            </div>
        </div>

        <!-- Statisztikák -->
        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-book"></i>
                </div>
                <div class="stat-number">42</div>
                <div class="stat-label">Olvasott könyv</div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-bookmark"></i>
                </div>
                <div class="stat-number">15</div>
                <div class="stat-label">Mentett könyv</div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="stat-number">28</div>
                <div class="stat-label">Értékelés</div>
            </div>
            
        </div>

        <!-- Személyes információk -->
        <div class="info-card">
            <h3><i class="fas fa-user-circle me-2"></i>Személyes információk</h3>
            <div class="info-row">
                <span class="info-label">
                    <i class="fas fa-user"></i>
                    Teljes név
                </span>
                <span class="info-value">Kovács János</span>
            </div>
            <div class="info-row">
                <span class="info-label">
                    <i class="fas fa-envelope"></i>
                    E-mail cím
                </span>
                <span class="info-value">kovacs.janos@email.com</span>
            </div>
        </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        function handleLogout() {
            if (confirm('Biztosan ki szeretne jelentkezni?')) {
                // Itt történne a kijelentkezési logika
                console.log('Kijelentkezés...');
                // window.location.href = '/logout';
            }
        }
    </script>
</body>
</html>