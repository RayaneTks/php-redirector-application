<?php
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - ' . SITE_NAME : SITE_NAME; ?></title>
    <meta name="description" content="LS Society - Serveur GTA RP professionnel - Rejoignez notre communauté">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- CSS Principal -->
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <div class="nav-container">
                <!-- Logo -->
                <div class="nav-logo">
                    <a href="/">
                        <span class="logo-text">LS Society</span>
                    </a>
                </div>

                <!-- Menu de navigation -->
                <ul class="nav-menu" id="nav-menu">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="/reglement" class="nav-link">Règlement</a>
                    </li>
                    <li class="nav-item">
                        <a href="/boutique" class="nav-link">Boutique</a>
                    </li>
                    <?php if (isLoggedIn()): ?>
                    <li class="nav-item">
                        <a href="/quiz" class="nav-link">Quiz</a>
                    </li>
                    <?php endif; ?>
                </ul>

                <!-- Boutons de connexion -->
                <div class="nav-auth">
                    <?php if (isLoggedIn()): ?>
                        <span class="user-welcome">Bienvenue, <?php echo htmlspecialchars($_SESSION['username'] ?? 'Utilisateur'); ?></span>
                        <a href="/logout" class="btn btn-outline">Déconnexion</a>
                    <?php else: ?>
                        <a href="/connexion" class="btn btn-primary">Connexion</a>
                    <?php endif; ?>
                </div>

                <!-- Menu hamburger pour mobile -->
                <div class="nav-toggle" id="nav-toggle">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </nav>
    </header>

    <main class="main-content">
