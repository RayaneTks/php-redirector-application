<?php
require_once '../includes/config.php';

// Détruire la session
session_destroy();

// Rediriger vers la page de connexion avec un message
redirect('/connexion?message=disconnected');
?>
