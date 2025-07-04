<?php
$page_title = "Quiz de Whitelist";
include '../includes/header.php';

// Vérifier si l'utilisateur est connecté
if (!isLoggedIn()) {
    redirect('/connexion?message=login_required&from=quiz');
}

// Gestion de la soumission du quiz
$quiz_submitted = false;
$quiz_passed = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_quiz'])) {
    $quiz_submitted = true;
    
    // Simulation de la vérification des réponses
    // Dans un vrai projet, ceci serait connecté à une base de données
    $correct_answers = 0;
    $total_questions = 10;
    
    // Vérifier chaque réponse (simulation)
    for ($i = 1; $i <= $total_questions; $i++) {
        if (isset($_POST["question_$i"])) {
            // Simulation : considérer que 80% des réponses sont correctes
            if (rand(1, 10) <= 8) {
                $correct_answers++;
            }
        }
    }
    
    // Critère de réussite : au moins 8/10
    $quiz_passed = $correct_answers >= 8;
    
    if ($quiz_passed) {
        // Marquer l'utilisateur comme whitelisté (simulation)
        $_SESSION['whitelisted'] = true;
        $_SESSION['quiz_score'] = $correct_answers;
    }
}
?>

<section class="content-page">
    <div class="container">
        <?php if ($quiz_submitted): ?>
            <!-- Résultats du quiz -->
            <div class="quiz-container">
                <div style="text-align: center; margin-bottom: 2rem;">
                    <?php if ($quiz_passed): ?>
                        <div style="background: #44ff44; color: white; padding: 2rem; border-radius: 16px; margin-bottom: 2rem;">
                            <h1 style="font-size: 2.5rem; margin-bottom: 1rem;">🎉 Félicitations !</h1>
                            <p style="font-size: 1.2rem; margin-bottom: 1rem;">
                                Vous avez réussi le quiz de whitelist avec un score de <?php echo $correct_answers; ?>/<?php echo $total_questions; ?> !
                            </p>
                            <p>Vous êtes maintenant autorisé à rejoindre notre serveur GTA RP.</p>
                        </div>
                        
                        <div style="background: var(--background-light); border: 1px solid var(--border-color); border-radius: 16px; padding: 2rem; margin-bottom: 2rem;">
                            <h3 style="color: var(--primary-color); margin-bottom: 1.5rem;">Prochaines étapes</h3>
                            <div style="text-align: left;">
                                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                                    <span style="background: var(--primary-color); color: white; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">1</span>
                                    <span>Rejoignez notre serveur Discord officiel</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                                    <span style="background: var(--primary-color); color: white; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">2</span>
                                    <span>Récupérez les informations de connexion au serveur</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                                    <span style="background: var(--primary-color); color: white; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">3</span>
                                    <span>Créez votre personnage et commencez à jouer !</span>
                                </div>
                            </div>
                        </div>
                        
                        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                            <a href="#" class="btn btn-primary">Rejoindre Discord</a>
                            <a href="/boutique" class="btn btn-outline">Découvrir la boutique</a>
                        </div>
                    <?php else: ?>
                        <div style="background: #ff4444; color: white; padding: 2rem; border-radius: 16px; margin-bottom: 2rem;">
                            <h1 style="font-size: 2.5rem; margin-bottom: 1rem;">❌ Quiz échoué</h1>
                            <p style="font-size: 1.2rem; margin-bottom: 1rem;">
                                Votre score : <?php echo $correct_answers; ?>/<?php echo $total_questions; ?>
                            </p>
                            <p>Score minimum requis : 8/10</p>
                        </div>
                        
                        <div style="background: var(--background-light); border: 1px solid var(--border-color); border-radius: 16px; padding: 2rem; margin-bottom: 2rem;">
                            <h3 style="color: var(--primary-color); margin-bottom: 1rem;">Ne vous découragez pas !</h3>
                            <p style="color: var(--text-secondary); margin-bottom: 1.5rem;">
                                Vous pourrez repasser le quiz dans 24 heures. En attendant, nous vous recommandons de :
                            </p>
                            <ul style="text-align: left; color: var(--text-secondary); padding-left: 1.5rem; line-height: 1.8;">
                                <li>Relire attentivement notre règlement</li>
                                <li>Vous familiariser avec les concepts du roleplay</li>
                                <li>Poser vos questions sur notre Discord</li>
                                <li>Regarder des vidéos de gameplay sur notre chaîne YouTube</li>
                            </ul>
                        </div>
                        
                        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                            <a href="/reglement" class="btn btn-primary">Relire le règlement</a>
                            <a href="#" class="btn btn-outline">Rejoindre Discord</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php else: ?>
            <!-- Quiz -->
            <div class="page-header">
                <h1 class="page-title">Quiz de Whitelist</h1>
                <p class="page-subtitle">
                    Ce quiz évalue vos connaissances du règlement et des concepts de roleplay. 
                    Score minimum requis : 8/10. Prenez votre temps et lisez attentivement chaque question.
                </p>
            </div>

            <div class="quiz-container">
                <!-- Barre de progression -->
                <div class="quiz-progress">
                    <div class="quiz-progress-bar" id="progress-bar"></div>
                </div>
                
                <form id="quiz-form" method="POST">
                    <!-- Question 1 -->
                    <div class="quiz-question">
                        <h3>1. Que signifie "FailRP" ?</h3>
                        <div class="quiz-options">
                            <label class="quiz-option">
                                <input type="radio" name="question_1" value="a">
                                <span>Échouer dans une mission</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_1" value="b">
                                <span>Avoir des actions irréalistes ou incohérentes avec son personnage</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_1" value="c">
                                <span>Perdre un combat</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_1" value="d">
                                <span>Ne pas réussir à se connecter au serveur</span>
                            </label>
                        </div>
                    </div>

                    <!-- Question 2 -->
                    <div class="quiz-question">
                        <h3>2. Qu'est-ce que le "MetaGaming" ?</h3>
                        <div class="quiz-options">
                            <label class="quiz-option">
                                <input type="radio" name="question_2" value="a">
                                <span>Jouer plusieurs personnages en même temps</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_2" value="b">
                                <span>Utiliser des informations OOC (hors personnage) en IC (dans le personnage)</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_2" value="c">
                                <span>Utiliser des mods non autorisés</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_2" value="d">
                                <span>Parler trop fort au microphone</span>
                            </label>
                        </div>
                    </div>

                    <!-- Question 3 -->
                    <div class="quiz-question">
                        <h3>3. Dans quelle situation devez-vous respecter le "FearRP" ?</h3>
                        <div class="quiz-options">
                            <label class="quiz-option">
                                <input type="radio" name="question_3" value="a">
                                <span>Quand vous êtes en infériorité numérique ou sous la menace d'une arme</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_3" value="b">
                                <span>Quand vous avez peur de perdre de l'argent</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_3" value="c">
                                <span>Quand vous ne voulez pas participer à une action</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_3" value="d">
                                <span>Jamais, on peut toujours se défendre</span>
                            </label>
                        </div>
                    </div>

                    <!-- Question 4 -->
                    <div class="quiz-question">
                        <h3>4. Que signifie "New Life Rule" (NLR) ?</h3>
                        <div class="quiz-options">
                            <label class="quiz-option">
                                <input type="radio" name="question_4" value="a">
                                <span>Créer un nouveau personnage chaque semaine</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_4" value="b">
                                <span>Après une mort, oublier les événements qui ont mené à cette mort</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_4" value="c">
                                <span>Changer de métier régulièrement</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_4" value="d">
                                <span>Respecter les nouveaux joueurs</span>
                            </label>
                        </div>
                    </div>

                    <!-- Question 5 -->
                    <div class="quiz-question">
                        <h3>5. Quel âge minimum est requis pour jouer sur le serveur ?</h3>
                        <div class="quiz-options">
                            <label class="quiz-option">
                                <input type="radio" name="question_5" value="a">
                                <span>14 ans</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_5" value="b">
                                <span>16 ans</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_5" value="c">
                                <span>18 ans</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_5" value="d">
                                <span>Pas de limite d'âge</span>
                            </label>
                        </div>
                    </div>

                    <!-- Question 6 -->
                    <div class="quiz-question">
                        <h3>6. Comment devez-vous initier un combat ou un conflit ?</h3>
                        <div class="quiz-options">
                            <label class="quiz-option">
                                <input type="radio" name="question_6" value="a">
                                <span>Attaquer directement sans prévenir</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_6" value="b">
                                <span>Par du roleplay avec des avertissements clairs</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_6" value="c">
                                <span>En envoyant un message privé avant</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_6" value="d">
                                <span>En demandant la permission aux administrateurs</span>
                            </label>
                        </div>
                    </div>

                    <!-- Question 7 -->
                    <div class="quiz-question">
                        <h3>7. Que devez-vous faire si vous avez un problème technique en jeu ?</h3>
                        <div class="quiz-options">
                            <label class="quiz-option">
                                <input type="radio" name="question_7" value="a">
                                <span>Continuer à jouer comme si de rien n'était</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_7" value="b">
                                <span>Contacter un administrateur et expliquer la situation</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_7" value="c">
                                <span>Quitter le serveur immédiatement</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_7" value="d">
                                <span>Exploiter le bug pour en tirer avantage</span>
                            </label>
                        </div>
                    </div>

                    <!-- Question 8 -->
                    <div class="quiz-question">
                        <h3>8. Qu'est-ce que le "PowerGaming" ?</h3>
                        <div class="quiz-options">
                            <label class="quiz-option">
                                <input type="radio" name="question_8" value="a">
                                <span>Jouer de manière très compétitive</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_8" value="b">
                                <span>Forcer des actions sur d'autres joueurs sans leur laisser le choix</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_8" value="c">
                                <span>Avoir un personnage très puissant</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_8" value="d">
                                <span>Jouer pendant de longues heures</span>
                            </label>
                        </div>
                    </div>

                    <!-- Question 9 -->
                    <div class="quiz-question">
                        <h3>9. Comment devez-vous roleplay vos blessures ?</h3>
                        <div class="quiz-options">
                            <label class="quiz-option">
                                <input type="radio" name="question_9" value="a">
                                <span>Les ignorer complètement</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_9" value="b">
                                <span>De manière réaliste selon la gravité</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_9" value="c">
                                <span>Exagérer toutes les blessures</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_9" value="d">
                                <span>Seulement si un médecin est présent</span>
                            </label>
                        </div>
                    </div>

                    <!-- Question 10 -->
                    <div class="quiz-question">
                        <h3>10. Que faire si vous n'êtes pas d'accord avec une décision d'un modérateur ?</h3>
                        <div class="quiz-options">
                            <label class="quiz-option">
                                <input type="radio" name="question_10" value="a">
                                <span>Argumenter publiquement en jeu</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_10" value="b">
                                <span>Faire appel sur Discord de manière respectueuse</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_10" value="c">
                                <span>Ignorer la décision</span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="question_10" value="d">
                                <span>Quitter définitivement le serveur</span>
                            </label>
                        </div>
                    </div>

                    <!-- Boutons de navigation -->
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 2rem;">
                        <button type="button" id="prev-question" class="btn btn-outline" style="display: none;">
                            ← Précédent
                        </button>
                        <button type="button" id="next-question" class="btn btn-primary">
                            Suivant →
                        </button>
                        <button type="submit" id="submit-quiz" name="submit_quiz" class="btn btn-primary" style="display: none;">
                            Soumettre le quiz
                        </button>
                    </div>
                </form>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
