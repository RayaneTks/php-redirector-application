// Attendre que le DOM soit chargé
document.addEventListener('DOMContentLoaded', function() {
    
    // Menu mobile toggle
    const navToggle = document.getElementById('nav-toggle');
    const navMenu = document.getElementById('nav-menu');
    
    if (navToggle && navMenu) {
        navToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            navToggle.classList.toggle('active');
        });

        // Fermer le menu mobile quand on clique sur un lien
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                navToggle.classList.remove('active');
            });
        });
    }

    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        if (question) {
            question.addEventListener('click', () => {
                // Fermer tous les autres items
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                    }
                });
                
                // Toggle l'item actuel
                item.classList.toggle('active');
            });
        }
    });

    // Quiz functionality
    const quizForm = document.getElementById('quiz-form');
    const quizQuestions = document.querySelectorAll('.quiz-question');
    const progressBar = document.querySelector('.quiz-progress-bar');
    const nextBtn = document.getElementById('next-question');
    const prevBtn = document.getElementById('prev-question');
    const submitBtn = document.getElementById('submit-quiz');
    
    let currentQuestion = 0;
    const totalQuestions = quizQuestions.length;

    function updateQuizProgress() {
        if (progressBar) {
            const progress = ((currentQuestion + 1) / totalQuestions) * 100;
            progressBar.style.width = progress + '%';
        }
    }

    function showQuestion(index) {
        quizQuestions.forEach((question, i) => {
            question.style.display = i === index ? 'block' : 'none';
        });

        // Gérer les boutons
        if (prevBtn) {
            prevBtn.style.display = index === 0 ? 'none' : 'inline-block';
        }
        
        if (nextBtn && submitBtn) {
            if (index === totalQuestions - 1) {
                nextBtn.style.display = 'none';
                submitBtn.style.display = 'inline-block';
            } else {
                nextBtn.style.display = 'inline-block';
                submitBtn.style.display = 'none';
            }
        }

        updateQuizProgress();
    }

    function validateCurrentQuestion() {
        const currentQuestionElement = quizQuestions[currentQuestion];
        const inputs = currentQuestionElement.querySelectorAll('input[type="radio"], input[type="checkbox"], input[type="text"], textarea');
        
        let isValid = false;
        
        // Vérifier les radio buttons
        const radioGroups = {};
        inputs.forEach(input => {
            if (input.type === 'radio') {
                if (!radioGroups[input.name]) {
                    radioGroups[input.name] = false;
                }
                if (input.checked) {
                    radioGroups[input.name] = true;
                }
            } else if (input.type === 'checkbox' && input.checked) {
                isValid = true;
            } else if ((input.type === 'text' || input.tagName === 'TEXTAREA') && input.value.trim()) {
                isValid = true;
            }
        });

        // Vérifier si au moins un groupe radio est sélectionné
        for (let group in radioGroups) {
            if (radioGroups[group]) {
                isValid = true;
                break;
            }
        }

        return isValid;
    }

    function showError(message) {
        // Supprimer les erreurs existantes
        const existingError = document.querySelector('.quiz-error');
        if (existingError) {
            existingError.remove();
        }

        // Créer et afficher la nouvelle erreur
        const errorDiv = document.createElement('div');
        errorDiv.className = 'quiz-error';
        errorDiv.style.cssText = `
            background: #ff4444;
            color: white;
            padding: 1rem;
            border-radius: 8px;
            margin: 1rem 0;
            text-align: center;
            animation: slideIn 0.3s ease;
        `;
        errorDiv.textContent = message;

        const currentQuestionElement = quizQuestions[currentQuestion];
        currentQuestionElement.appendChild(errorDiv);

        // Supprimer l'erreur après 3 secondes
        setTimeout(() => {
            if (errorDiv.parentNode) {
                errorDiv.remove();
            }
        }, 3000);
    }

    // Initialiser le quiz si présent
    if (quizQuestions.length > 0) {
        showQuestion(0);

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                if (validateCurrentQuestion()) {
                    if (currentQuestion < totalQuestions - 1) {
                        currentQuestion++;
                        showQuestion(currentQuestion);
                    }
                } else {
                    showError('Veuillez répondre à cette question avant de continuer.');
                }
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                if (currentQuestion > 0) {
                    currentQuestion--;
                    showQuestion(currentQuestion);
                }
            });
        }

        if (submitBtn) {
            submitBtn.addEventListener('click', (e) => {
                if (!validateCurrentQuestion()) {
                    e.preventDefault();
                    showError('Veuillez répondre à cette question avant de soumettre.');
                    return;
                }

                // Vérifier que toutes les questions ont été répondues
                let allAnswered = true;
                quizQuestions.forEach((question, index) => {
                    const inputs = question.querySelectorAll('input[type="radio"], input[type="checkbox"], input[type="text"], textarea');
                    let questionAnswered = false;
                    
                    inputs.forEach(input => {
                        if ((input.type === 'radio' || input.type === 'checkbox') && input.checked) {
                            questionAnswered = true;
                        } else if ((input.type === 'text' || input.tagName === 'TEXTAREA') && input.value.trim()) {
                            questionAnswered = true;
                        }
                    });

                    if (!questionAnswered) {
                        allAnswered = false;
                    }
                });

                if (!allAnswered) {
                    e.preventDefault();
                    showError('Veuillez répondre à toutes les questions avant de soumettre.');
                    return;
                }

                // Si tout est valide, soumettre le formulaire
                if (quizForm) {
                    quizForm.submit();
                }
            });
        }
    }

    // Smooth scrolling pour les liens d'ancrage
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Animation au scroll (optionnel)
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observer les éléments à animer
    const animatedElements = document.querySelectorAll('.social-card, .shop-item, .faq-item');
    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });

    // Gestion des erreurs globales
    window.addEventListener('error', function(e) {
        console.error('Erreur JavaScript:', e.error);
        // En production, vous pourriez envoyer cette erreur à un service de logging
    });

    // Fonction utilitaire pour afficher des notifications
    window.showNotification = function(message, type = 'info') {
        const notification = document.createElement('div');
        notification.className = `notification notification-${type}`;
        notification.style.cssText = `
            position: fixed;
            top: 100px;
            right: 20px;
            background: ${type === 'error' ? '#ff4444' : type === 'success' ? '#44ff44' : '#4444ff'};
            color: white;
            padding: 1rem 1.5rem;
            border-radius: 8px;
            z-index: 10000;
            animation: slideInRight 0.3s ease;
            max-width: 300px;
        `;
        notification.textContent = message;

        document.body.appendChild(notification);

        setTimeout(() => {
            notification.style.animation = 'slideOutRight 0.3s ease';
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.remove();
                }
            }, 300);
        }, 3000);
    };

    console.log('Script GTA RP chargé avec succès!');
});

// Ajouter les animations CSS dynamiquement
const style = document.createElement('style');
style.textContent = `
    @keyframes slideIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes slideInRight {
        from { opacity: 0; transform: translateX(100%); }
        to { opacity: 1; transform: translateX(0); }
    }
    
    @keyframes slideOutRight {
        from { opacity: 1; transform: translateX(0); }
        to { opacity: 0; transform: translateX(100%); }
    }
`;
document.head.appendChild(style);
