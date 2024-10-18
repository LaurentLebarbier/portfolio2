<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <META HTTP-EQUIV="Content-Language" CONTENT="fr-FX">
    <title>TP3.1 - partie 2 - PHP</title>
</head>

<body>
    <div id="bloc_page">
        <nav>
            <ul>
                <li>Menu: </li>
                <li><a href="index2.php?page=0" class="texte_nav">Accueil</a></li>
                <li><a href="index2.php?page=1" class="texte_nav">Page 1</a></li>
            </ul>
        </nav>
        <section> <!-- partie principale -->
            <article class="centrer">
                <?php
                if (isset($_GET['page'])) // test si la variable page existe
                {
                    $_GET['page'] = (int) $_GET['page']; // force le type entier pour la variable page
                    switch ($_GET['page']) //
                    {

                        case 0: // dans le cas où $page vaut 0
                            include("presentation.php");
                            break;

                        case 1: // dans le cas où $page vaut 1
                            include("page1b.php");
                            break;

                        default:
                            include("erreur.php");
                    }
                } else    // si la variable n'existe pas (index.php seul par exemple)
                {
                    include("presentation.php");
                }
                ?>
            </article>
        </section>
    </div> <!-- div du body -->
</body>

</html>