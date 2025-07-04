<?php
// Configuration générale du site
define('SITE_NAME', 'LS Society');
define('SITE_URL', 'http://localhost:8000');

// Configuration de la base de données (à compléter plus tard)
define('DB_HOST', 'localhost');
define('DB_USER', '');
define('DB_PASS', '');
define('DB_NAME', '');

// Configuration Discord OAuth (à compléter plus tard)
define('DISCORD_CLIENT_ID', '');
define('DISCORD_CLIENT_SECRET', '');
define('DISCORD_REDIRECT_URI', SITE_URL . '/auth/callback');

// Gestion des erreurs
if (defined('DEVELOPMENT') && DEVELOPMENT) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// Démarrage de la session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Fonction pour vérifier si l'utilisateur est connecté
function isLoggedIn() {
    return isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);
}

// Fonction pour rediriger
function redirect($url) {
    header("Location: " . $url);
    exit();
}
?>
