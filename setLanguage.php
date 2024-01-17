<?php
session_start();

// Set default language to "en" if not already set
if (!isset($_SESSION['language'])) {
    $_SESSION['language'] = 'en';
}

if (isset($_POST['language'])) {
    $language = $_POST['language'];

    // Validate the selected language
    $allowedLanguages = ['en', 'la'];
    if (in_array($language, $allowedLanguages)) {
        $_SESSION['language'] = $language;
    }
}

// Redirect to the home page
header('Location: /');
exit;
?>