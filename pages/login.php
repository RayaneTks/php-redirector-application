<?php
$page_title = "Connexion";
include '../includes/header.php';

// Si l'utilisateur est déjà connecté, rediriger vers l'accueil
if (isLoggedIn()) {
    redirect('/');
}

// Gestion de la déconnexion
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_destroy();
    redirect('/connexion?message=disconnected');
}

// Messages d'information
$message = '';
$message_type = '';

if (isset($_GET['message'])) {
    switch ($_GET['message']) {
        case 'disconnected':
            $message = 'Vous avez été déconnecté avec succès.';
            $message_type = 'success';
            break;
        case 'login_required':
            $message = 'Vous devez être connecté pour accéder à cette page.';
            $message_type = 'error';
            break;
        case 'error':
            $message = 'Une erreur est survenue lors de la connexion. Veuillez réessayer.';
            $message_type = 'error';
            break;
    }
}
?>

<section class="content-page">
    <div class="container">
        <div class="login-container">
            <div class="login-card">
                <div style="text-align: center; margin-bottom: 2rem;">
                    <h1 style="font-size: 2.5rem; margin-bottom: 0.5rem; color: var(--text-primary);">
                        Connexion
                    </h1>
                    <p style="color: var(--text-secondary);">
                        Connectez-vous avec Discord pour accéder au serveur
                    </p>
                </div>

                <?php if ($message): ?>
                <div style="
                    background: <?php echo $message_type === 'error' ? '#ff4444' : '#44ff44'; ?>;
                    color: white;
                    padding: 1rem;
                    border-radius: 8px;
                    margin-bottom: 2rem;
                    text-align: center;
                ">
                    <?php echo htmlspecialchars($message); ?>
                </div>
                <?php endif; ?>

                <!-- Bouton de connexion Discord -->
                <div style="margin-bottom: 2rem;">
                    <a href="#" class="discord-btn" onclick="handleDiscordLogin()">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515a.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0a12.64 12.64 0 0 0-.617-1.25a.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 0 0 .031.057a19.9 19.9 0 0 0 5.993 3.03a.078.078 0 0 0 .084-.028a14.09 14.09 0 0 0 1.226-1.994a.076.076 0 0 0-.041-.106a13.107 13.107 0 0 1-1.872-.892a.077.077 0 0 1-.008-.128a10.2 10.2 0 0 0 .372-.292a.074.074 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127a12.299 12.299 0 0 1-1.873.892a.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028a19.839 19.839 0 0 0 6.002-3.03a.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.03zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419c0-1.333.956-2.419 2.157-2.419c1.21 0 2.176 1.096 2.157 2.42c0 1.333-.956 2.418-2.157 2.418zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419c0-1.333.955-2.419 2.157-2.419c1.21 0 2.176 1.096 2.157 2.42c0 1.333-.946 2.418-2.157 2.418z"/>
                        </svg>
                        Se connecter avec Discord
                    </a>
                </div>

                <!-- Informations sur la connexion -->
                <div style="background: var(--background-dark); border: 1px solid var(--border-color); border-radius: 12px; padding: 1.5rem; margin-bottom: 2rem;">
                    <h3 style="color: var(--primary-color); margin-bottom: 1rem; font-size: 1.1rem;">
                        🔒 Pourquoi Discord ?
                    </h3>
                    <ul style="color: var(--text-secondary); font-size: 0.9rem; line-height: 1.6; padding-left: 1.5rem;">
                        <li>Connexion sécurisée et rapide</li>
                        <li>Pas besoin de créer un nouveau compte</li>
                        <li>Accès direct à notre communauté Discord</li>
                        <li>Gestion simplifiée de votre profil</li>
                    </ul>
                </div>

                <!-- Étapes après connexion -->
                <div style="background: var(--background-dark); border: 1px solid var(--border-color); border-radius: 12px; padding: 1.5rem;">
                    <h3 style="color: var(--primary-color); margin-bottom: 1rem; font-size: 1.1rem;">
                        📋 Prochaines étapes
                    </h3>
                    <div style="display: flex; flex-direction: column; gap: 0.75rem;">
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <span style="background: var(--primary-color); color: white; width: 24px; height: 24px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.8rem; font-weight: bold;">1</span>
                            <span style="color: var(--text-secondary); font-size: 0.9rem;">Connectez-vous avec Discord</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <span style="background: var(--border-color); color: var(--text-muted); width: 24px; height: 24px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.8rem; font-weight: bold;">2</span>
                            <span style="color: var(--text-muted); font-size: 0.9rem;">Lisez attentivement le règlement</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <span style="background: var(--border-color); color: var(--text-muted); width: 24px; height: 24px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.8rem; font-weight: bold;">3</span>
                            <span style="color: var(--text-muted); font-size: 0.9rem;">Passez le quiz de whitelist</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <span style="background: var(--border-color); color: var(--text-muted); width: 24px; height: 24px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.8rem; font-weight: bold;">4</span>
                            <span style="color: var(--text-muted); font-size: 0.9rem;">Rejoignez le serveur et amusez-vous !</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Liens utiles -->
            <div style="text-align: center; margin-top: 2rem;">
                <p style="color: var(--text-secondary); margin-bottom: 1rem;">
                    Nouveau sur notre serveur ?
                </p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="/reglement" class="btn btn-outline">Lire le règlement</a>
                    <a href="/boutique" class="btn btn-outline">Découvrir la boutique</a>
                </div>
            </div>

            <!-- Support -->
            <div style="text-align: center; margin-top: 2rem; padding-top: 2rem; border-top: 1px solid var(--border-color);">
                <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1rem;">
                    Problème de connexion ? Besoin d'aide ?
                </p>
                <a href="#" style="color: var(--primary-color); text-decoration: none; font-weight: 500;">
                    Contactez notre support sur Discord
                </a>
            </div>
        </div>
    </div>
</section>

<script>
function handleDiscordLogin() {
    // Simulation de la connexion Discord
    // Dans un vrai projet, ceci redirigerait vers l'URL OAuth de Discord
    
    // Pour la démonstration, on simule une connexion réussie
    if (confirm('Simulation : Voulez-vous vous connecter avec Discord ?\n\n(Ceci est une démonstration - la vraie intégration Discord sera ajoutée plus tard)')) {
        // Simuler une connexion réussie
        showNotification('Connexion simulée avec succès ! Redirection...', 'success');
        
        setTimeout(() => {
            // Simuler la création d'une session
            // En réalité, ceci serait géré côté serveur après le retour de Discord
            window.location.href = '/?connected=true';
        }, 2000);
    }
}

// Afficher un message si l'utilisateur vient d'une page protégée
document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const from = urlParams.get('from');
    
    if (from === 'quiz') {
        showNotification('Vous devez être connecté pour accéder au quiz.', 'error');
    }
});
</script>

<?php include '../includes/footer.php'; ?>
