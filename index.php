<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

include 'header.php';

switch ($page) {
    case 'about':
        include 'about.php';
        break;
    case 'projects':
        include 'projects.php';
        break;
    case 'contact':
        include 'contact.php';
        break;
    default:
        include 'home.php';
        break;
}

include 'footer.php';
