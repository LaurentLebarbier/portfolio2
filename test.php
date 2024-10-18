<?php
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/php_error.log');
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "Début du script<br>";  // Vérifier que PHP fonctionne

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
echo "Page : " . $page . "<br>";  // Voir si le paramètre de page est correct

include 'header.php';
echo "Header inclus<br>";  // Vérifier que header.php est bien inclus

switch ($page) {
    case 'about':
        include 'about.php';
        echo "About inclus<br>";
        break;
    case 'projects':
        include 'projects.php';
        echo "Projects inclus<br>";
        break;
    case 'contact':
        include 'contact.php';
        echo "Contact inclus<br>";
        break;
    default:
        include 'home.php';
        echo "Home inclus<br>";
        break;
}

include 'footer.php';
echo "Footer inclus<br>";
