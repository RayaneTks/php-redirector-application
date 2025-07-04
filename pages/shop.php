<?php
$page_title = "Boutique";
include '../includes/header.php';
?>

<section class="content-page">
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">Boutique du Serveur</h1>
            <p class="page-subtitle">
                Découvrez nos offres exclusives pour améliorer votre expérience de jeu. Tous les achats soutiennent le développement et la maintenance du serveur.
            </p>
        </div>

        <!-- Catégories -->
        <div style="display: flex; justify-content: center; gap: 1rem; margin-bottom: 3rem; flex-wrap: wrap;">
            <button class="btn btn-outline category-btn active" data-category="all">Tout voir</button>
            <button class="btn btn-outline category-btn" data-category="vip">Statuts VIP</button>
            <button class="btn btn-outline category-btn" data-category="vehicles">Véhicules</button>
            <button class="btn btn-outline category-btn" data-category="items">Objets</button>
            <button class="btn btn-outline category-btn" data-category="cosmetics">Cosmétiques</button>
        </div>

        <!-- Grille des produits -->
        <div class="shop-grid">
            <!-- Statuts VIP -->
            <div class="shop-item" data-category="vip">
                <div class="shop-item-image" style="background: linear-gradient(45deg, #FFD700, #FFA500);">
                    ⭐ VIP Bronze
                </div>
                <div class="shop-item-content">
                    <h3>Statut VIP Bronze</h3>
                    <p>Accès aux véhicules exclusifs, bonus d'expérience +25%, et priorité de connexion au serveur.</p>
                    <div class="shop-item-price">9.99€</div>
                    <div style="margin-bottom: 1rem;">
                        <small style="color: var(--text-muted);">Durée: 30 jours</small>
                    </div>
                    <a href="#" class="btn btn-primary" style="width: 100%;">Acheter</a>
                </div>
            </div>

            <div class="shop-item" data-category="vip">
                <div class="shop-item-image" style="background: linear-gradient(45deg, #C0C0C0, #A8A8A8);">
                    ⭐⭐ VIP Argent
                </div>
                <div class="shop-item-content">
                    <h3>Statut VIP Argent</h3>
                    <p>Tous les avantages Bronze + bonus d'expérience +50%, accès aux zones VIP, et support prioritaire.</p>
                    <div class="shop-item-price">19.99€</div>
                    <div style="margin-bottom: 1rem;">
                        <small style="color: var(--text-muted);">Durée: 30 jours</small>
                    </div>
                    <a href="#" class="btn btn-primary" style="width: 100%;">Acheter</a>
                </div>
            </div>

            <div class="shop-item" data-category="vip">
                <div class="shop-item-image" style="background: linear-gradient(45deg, #FFD700, #FFED4E);">
                    ⭐⭐⭐ VIP Or
                </div>
                <div class="shop-item-content">
                    <h3>Statut VIP Or</h3>
                    <p>Tous les avantages Argent + bonus d'expérience +100%, véhicules exclusifs, et badge spécial.</p>
                    <div class="shop-item-price">39.99€</div>
                    <div style="margin-bottom: 1rem;">
                        <small style="color: var(--text-muted);">Durée: 30 jours</small>
                    </div>
                    <a href="#" class="btn btn-primary" style="width: 100%;">Acheter</a>
                </div>
            </div>

            <!-- Véhicules -->
            <div class="shop-item" data-category="vehicles">
                <div class="shop-item-image" style="background: linear-gradient(45deg, #FF6B35, #FF8C5A);">
                    🏎️ Supercar
                </div>
                <div class="shop-item-content">
                    <h3>Pack Supercar</h3>
                    <p>Débloquez une collection de supercars exclusives pour impressionner dans les rues de Los Santos.</p>
                    <div class="shop-item-price">24.99€</div>
                    <div style="margin-bottom: 1rem;">
                        <small style="color: var(--text-muted);">5 véhicules inclus</small>
                    </div>
                    <a href="#" class="btn btn-primary" style="width: 100%;">Acheter</a>
                </div>
            </div>

            <div class="shop-item" data-category="vehicles">
                <div class="shop-item-image" style="background: linear-gradient(45deg, #4ECDC4, #44A08D);">
                    🏍️ Moto Sport
                </div>
                <div class="shop-item-content">
                    <h3>Pack Motos Sport</h3>
                    <p>Collection de motos sportives haute performance pour les amateurs de vitesse et d'adrénaline.</p>
                    <div class="shop-item-price">14.99€</div>
                    <div style="margin-bottom: 1rem;">
                        <small style="color: var(--text-muted);">3 motos incluses</small>
                    </div>
                    <a href="#" class="btn btn-primary" style="width: 100%;">Acheter</a>
                </div>
            </div>

            <div class="shop-item" data-category="vehicles">
                <div class="shop-item-image" style="background: linear-gradient(45deg, #667eea, #764ba2);">
                    🚁 Hélicoptère
                </div>
                <div class="shop-item-content">
                    <h3>Hélicoptère Privé</h3>
                    <p>Votre hélicoptère personnel pour survoler Los Santos avec style et éviter les embouteillages.</p>
                    <div class="shop-item-price">49.99€</div>
                    <div style="margin-bottom: 1rem;">
                        <small style="color: var(--text-muted);">Véhicule unique</small>
                    </div>
                    <a href="#" class="btn btn-primary" style="width: 100%;">Acheter</a>
                </div>
            </div>

            <!-- Objets -->
            <div class="shop-item" data-category="items">
                <div class="shop-item-image" style="background: linear-gradient(45deg, #f093fb, #f5576c);">
                    💰 Argent
                </div>
                <div class="shop-item-content">
                    <h3>Pack Argent Starter</h3>
                    <p>Commencez votre aventure avec un capital de départ pour acheter votre première voiture et appartement.</p>
                    <div class="shop-item-price">4.99€</div>
                    <div style="margin-bottom: 1rem;">
                        <small style="color: var(--text-muted);">50,000$ en jeu</small>
                    </div>
                    <a href="#" class="btn btn-primary" style="width: 100%;">Acheter</a>
                </div>
            </div>

            <div class="shop-item" data-category="items">
                <div class="shop-item-image" style="background: linear-gradient(45deg, #4facfe, #00f2fe);">
                    🏠 Propriété
                </div>
                <div class="shop-item-content">
                    <h3>Appartement de Luxe</h3>
                    <p>Appartement haut de gamme avec vue sur la ville, garage privé et décoration exclusive.</p>
                    <div class="shop-item-price">29.99€</div>
                    <div style="margin-bottom: 1rem;">
                        <small style="color: var(--text-muted);">Propriété permanente</small>
                    </div>
                    <a href="#" class="btn btn-primary" style="width: 100%;">Acheter</a>
                </div>
            </div>

            <div class="shop-item" data-category="items">
                <div class="shop-item-image" style="background: linear-gradient(45deg, #fa709a, #fee140);">
                    🔫 Armes
                </div>
                <div class="shop-item-content">
                    <h3>Pack Armes Premium</h3>
                    <p>Collection d'armes rares avec skins exclusifs pour vous démarquer lors des confrontations.</p>
                    <div class="shop-item-price">19.99€</div>
                    <div style="margin-bottom: 1rem;">
                        <small style="color: var(--text-muted);">8 armes incluses</small>
                    </div>
                    <a href="#" class="btn btn-primary" style="width: 100%;">Acheter</a>
                </div>
            </div>

            <!-- Cosmétiques -->
            <div class="shop-item" data-category="cosmetics">
                <div class="shop-item-image" style="background: linear-gradient(45deg, #a8edea, #fed6e3);">
                    👕 Vêtements
                </div>
                <div class="shop-item-content">
                    <h3>Pack Vêtements Designer</h3>
                    <p>Collection exclusive de vêtements de créateur pour habiller votre personnage avec style.</p>
                    <div class="shop-item-price">12.99€</div>
                    <div style="margin-bottom: 1rem;">
                        <small style="color: var(--text-muted);">15 tenues complètes</small>
                    </div>
                    <a href="#" class="btn btn-primary" style="width: 100%;">Acheter</a>
                </div>
            </div>

            <div class="shop-item" data-category="cosmetics">
                <div class="shop-item-image" style="background: linear-gradient(45deg, #ffecd2, #fcb69f);">
                    💎 Accessoires
                </div>
                <div class="shop-item-content">
                    <h3>Accessoires de Luxe</h3>
                    <p>Montres, bijoux et accessoires haut de gamme pour parfaire le look de votre personnage.</p>
                    <div class="shop-item-price">8.99€</div>
                    <div style="margin-bottom: 1rem;">
                        <small style="color: var(--text-muted);">20 accessoires</small>
                    </div>
                    <a href="#" class="btn btn-primary" style="width: 100%;">Acheter</a>
                </div>
            </div>

            <div class="shop-item" data-category="cosmetics">
                <div class="shop-item-image" style="background: linear-gradient(45deg, #d299c2, #fef9d7);">
                    🎨 Customisation
                </div>
                <div class="shop-item-content">
                    <h3>Pack Customisation</h3>
                    <p>Outils de personnalisation avancés pour créer un personnage unique avec des options exclusives.</p>
                    <div class="shop-item-price">15.99€</div>
                    <div style="margin-bottom: 1rem;">
                        <small style="color: var(--text-muted);">Options illimitées</small>
                    </div>
                    <a href="#" class="btn btn-primary" style="width: 100%;">Acheter</a>
                </div>
            </div>
        </div>

        <!-- Informations importantes -->
        <div style="background: var(--background-light); border: 1px solid var(--border-color); border-radius: 16px; padding: 2rem; margin-top: 4rem;">
            <h3 style="color: var(--primary-color); margin-bottom: 1.5rem; text-align: center;">Informations importantes</h3>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
                <div>
                    <h4 style="color: var(--text-primary); margin-bottom: 0.5rem;">💳 Paiement sécurisé</h4>
                    <p style="color: var(--text-secondary); font-size: 0.9rem;">
                        Tous les paiements sont sécurisés via PayPal et Stripe. Vos données sont protégées.
                    </p>
                </div>
                
                <div>
                    <h4 style="color: var(--text-primary); margin-bottom: 0.5rem;">⚡ Livraison instantanée</h4>
                    <p style="color: var(--text-secondary); font-size: 0.9rem;">
                        Vos achats sont automatiquement ajoutés à votre compte dès la validation du paiement.
                    </p>
                </div>
                
                <div>
                    <h4 style="color: var(--text-primary); margin-bottom: 0.5rem;">🛡️ Support 24/7</h4>
                    <p style="color: var(--text-secondary); font-size: 0.9rem;">
                        Notre équipe est disponible sur Discord pour toute question concernant vos achats.
                    </p>
                </div>
                
                <div>
                    <h4 style="color: var(--text-primary); margin-bottom: 0.5rem;">🔄 Politique de remboursement</h4>
                    <p style="color: var(--text-secondary); font-size: 0.9rem;">
                        Remboursement possible sous 7 jours en cas de problème technique avéré.
                    </p>
                </div>
            </div>
        </div>

        <!-- Call to action -->
        <div style="text-align: center; margin-top: 3rem;">
            <h3 style="margin-bottom: 1rem; color: var(--text-primary);">Besoin d'aide pour choisir ?</h3>
            <p style="color: var(--text-secondary); margin-bottom: 2rem;">
                Notre équipe est là pour vous conseiller et vous aider à trouver les produits qui correspondent à vos besoins.
            </p>
            <a href="#" class="btn btn-outline">Contacter le support</a>
        </div>
    </div>
</section>

<script>
// Filtrage par catégorie
document.addEventListener('DOMContentLoaded', function() {
    const categoryBtns = document.querySelectorAll('.category-btn');
    const shopItems = document.querySelectorAll('.shop-item');

    categoryBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Retirer la classe active de tous les boutons
            categoryBtns.forEach(b => b.classList.remove('active'));
            // Ajouter la classe active au bouton cliqué
            btn.classList.add('active');

            const category = btn.getAttribute('data-category');

            shopItems.forEach(item => {
                if (category === 'all' || item.getAttribute('data-category') === category) {
                    item.style.display = 'block';
                    item.style.animation = 'fadeIn 0.5s ease';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>

<style>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.category-btn.active {
    background: var(--primary-color);
    color: white;
    border-color: var(--primary-color);
}

.category-btn:hover {
    border-color: var(--primary-color);
    color: var(--primary-color);
}
</style>

<?php include '../includes/footer.php'; ?>
