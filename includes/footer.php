</main>

    <footer class="footer">
        <div class="footer-container">
            <!-- Section réseaux sociaux -->
            <div class="social-section">
                <h3>Rejoignez notre communauté</h3>
                <div class="social-cards">
                    <!-- YouTube -->
                    <div class="social-card">
                        <div class="social-icon">
                            <img src="https://images.pexels.com/photos/1092644/pexels-photo-1092644.jpeg?auto=compress&cs=tinysrgb&w=100&h=100&fit=crop" alt="YouTube">
                        </div>
                        <div class="social-content">
                            <h4>LS Society YouTube</h4>
                            <p>Découvrez nos vidéos exclusives et les meilleurs moments du serveur.</p>
                            <div class="social-stats">
                                <span class="stat-number">2.5k</span>
                                <span class="stat-label">Abonnés</span>
                            </div>
                            <a href="#" class="btn btn-social">Ouvrir</a>
                        </div>
                    </div>

                    <!-- TikTok -->
                    <div class="social-card">
                        <div class="social-icon">
                            <img src="https://images.pexels.com/photos/1092644/pexels-photo-1092644.jpeg?auto=compress&cs=tinysrgb&w=100&h=100&fit=crop" alt="TikTok">
                        </div>
                        <div class="social-content">
                            <h4>LS Society TikTok</h4>
                            <p>Suivez-nous pour des vidéos courtes et divertissantes de notre serveur.</p>
                            <div class="social-stats">
                                <span class="stat-number">850</span>
                                <span class="stat-label">Followers</span>
                            </div>
                            <a href="#" class="btn btn-social">Ouvrir</a>
                        </div>
                    </div>

                    <!-- Discord -->
                    <div class="social-card">
                        <div class="social-icon">
                            <img src="https://images.pexels.com/photos/1092644/pexels-photo-1092644.jpeg?auto=compress&cs=tinysrgb&w=100&h=100&fit=crop" alt="Discord">
                        </div>
                        <div class="social-content">
                            <h4>LS Society Discord</h4>
                            <p>Rejoignez notre communauté Discord pour échanger avec les autres joueurs.</p>
                            <div class="social-stats">
                                <span class="stat-number">5.2k</span>
                                <span class="stat-label">Membres</span>
                            </div>
                            <a href="#" class="btn btn-social">Rejoindre</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section liens -->
            <div class="footer-links">
                <div class="footer-column">
                    <h4>Joueurs</h4>
                    <ul>
                        <li><a href="/connexion">S'inscrire</a></li>
                        <li><a href="/connexion">Se connecter</a></li>
                        <?php if (isLoggedIn()): ?>
                        <li><a href="/quiz">Quiz d'accès</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Important</h4>
                    <ul>
                        <li><a href="/reglement">Règlement</a></li>
                        <li><a href="#">Conditions d'utilisation</a></li>
                        <li><a href="#">Politique de confidentialité</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="#">Support Discord</a></li>
                        <li><a href="mailto:contact@lssociety.com">contact@lssociety.com</a></li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="footer-bottom">
                <p>&copy; 2024 <?php echo SITE_NAME; ?>. Tous droits réservés.</p>
                <p class="footer-disclaimer">
                    LS Society n'est pas affilié à Rockstar Games. Tous les droits appartiennent à leurs propriétaires respectifs.
                </p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="/assets/js/script.js"></script>
</body>
</html>
