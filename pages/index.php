<?php
$page_title = "Accueil";
include '../includes/header.php';
?>

<!-- Section Hero -->
<section class="hero">
    <div class="hero-content">
        <h1>Bienvenue sur LS Society</h1>
        <p>Plongez dans une expérience de roleplay unique et immersive. Rejoignez notre communauté et vivez des aventures extraordinaires dans Los Santos.</p>
        <a href="/connexion" class="btn btn-hero">
            ▶ Commencer
        </a>
    </div>
</section>

<!-- Section FAQ -->
<section class="section">
    <div class="container">
        <h2 class="section-title">Questions fréquentes</h2>
        <p style="text-align: center; color: var(--text-secondary); margin-bottom: 3rem;">
            Vous avez une question ? Vous trouverez ci-dessous les questions les plus fréquemment posées.
        </p>
        
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <span>Qu'est-ce que notre serveur LS Society ?</span>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <p>LS Society est une communauté dédiée au roleplay de haute qualité dans l'univers de Grand Theft Auto V. Nous offrons une expérience immersive avec des règles strictes pour garantir un gameplay réaliste et respectueux.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>Quelle est notre vision ?</span>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <p>Notre vision est de créer la meilleure expérience de roleplay francophone possible, en mettant l'accent sur la qualité du jeu, le respect mutuel et l'innovation constante. Nous voulons que chaque joueur puisse développer son personnage dans un environnement sain et stimulant.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>Quels sont les prérequis pour entrer sur le serveur ?</span>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <p>Pour rejoindre notre serveur, vous devez :</p>
                    <ul style="margin-top: 1rem; padding-left: 1.5rem;">
                        <li>Avoir au moins 16 ans</li>
                        <li>Posséder un microphone de qualité</li>
                        <li>Maîtriser le français</li>
                        <li>Passer notre quiz de whitelist avec succès</li>
                        <li>Respecter notre règlement</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>Comment rejoindre le serveur ?</span>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <p>Pour rejoindre le serveur, vous devez d'abord vous inscrire via Discord, lire attentivement notre règlement, puis passer le quiz de whitelist. Une fois validé, vous recevrez les informations de connexion au serveur.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>Y a-t-il des événements spéciaux ?</span>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <p>Oui ! Nous organisons régulièrement des événements spéciaux : courses, braquages organisés, événements saisonniers, et bien plus encore. Suivez nos réseaux sociaux pour ne rien manquer.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Réseaux Sociaux -->
<section class="section" style="background: var(--background-light);">
    <div class="container">
        <h2 class="section-title">Rejoignez notre communauté</h2>
        
        <div class="social-cards">
            <!-- YouTube -->
            <div class="social-card">
                <div class="social-icon">
                    <img src="https://images.pexels.com/photos/1092644/pexels-photo-1092644.jpeg?auto=compress&cs=tinysrgb&w=100&h=100&fit=crop" alt="YouTube">
                </div>
                <div class="social-content">
                    <h4>LS Society YouTube</h4>
                    <p>Plongez dans un monde de divertissement sans fin avec notre chaîne YouTube. Du contenu et des moments inédits, découvrez chaque semaine quelque chose de nouveau.</p>
                    <div class="social-stats">
                        <span class="stat-number">2.5k</span>
                        <span class="stat-label">Abonnés</span>
                        <div style="margin-top: 0.5rem; font-size: 0.8rem; color: var(--text-muted);">Mis à jour 2024</div>
                    </div>
                    <a href="#" class="btn-social">Ouvrir</a>
                </div>
            </div>

            <!-- TikTok -->
            <div class="social-card">
                <div class="social-icon">
                    <img src="https://images.pexels.com/photos/1092644/pexels-photo-1092644.jpeg?auto=compress&cs=tinysrgb&w=100&h=100&fit=crop" alt="TikTok">
                </div>
                <div class="social-content">
                    <h4>LS Society TikTok</h4>
                    <p>Rejoignez la sensation virale sur TikTok ! Préparez-vous à rire, apprenez et laissez-vous inspirer par nos vidéos en format court. Suivez-nous pour une dose quotidienne de joie et de créativité.</p>
                    <div class="social-stats">
                        <span class="stat-number">850</span>
                        <span class="stat-label">Followers</span>
                        <div style="margin-top: 0.5rem; font-size: 0.8rem; color: var(--text-muted);">Mis à jour 2024</div>
                    </div>
                    <a href="#" class="btn-social">Ouvrir</a>
                </div>
            </div>

            <!-- Discord -->
            <div class="social-card">
                <div class="social-icon">
                    <img src="https://images.pexels.com/photos/1092644/pexels-photo-1092644.jpeg?auto=compress&cs=tinysrgb&w=100&h=100&fit=crop" alt="Discord">
                </div>
                <div class="social-content">
                    <h4>LS Society Discord</h4>
                    <p>Explorez la communauté dynamique de notre Discord. Découvrez des salons magnifiquement conçus qui rationalisent votre processus de développement et d'intégration.</p>
                    <div class="social-stats">
                        <span class="stat-number">5.2k</span>
                        <span class="stat-label">Membres</span>
                        <div style="margin-top: 0.5rem; font-size: 0.8rem; color: var(--text-muted);">Mis à jour 2024</div>
                    </div>
                    <a href="#" class="btn-social">Rejoindre</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Call to Action -->
<section class="section">
    <div class="container" style="text-align: center;">
        <h2 style="font-size: 2.5rem; margin-bottom: 1rem; color: var(--text-primary);">
            Prêt à commencer votre aventure ?
        </h2>
        <p style="font-size: 1.2rem; color: var(--text-secondary); margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
            Rejoignez des milliers de joueurs dans l'expérience de roleplay la plus immersive de Los Santos.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="/connexion" class="btn btn-hero">Se connecter via Discord</a>
            <a href="/reglement" class="btn btn-outline" style="padding: 1rem 2rem; font-size: 1.1rem;">Lire le règlement</a>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
