<?php
require_once 'connexion.php';
if (isset($_GET['catID'])) {
            $catID = intval($_GET['catID']);
        }
        else {
            $catID = 1;
        }
if (isset($_GET['id'])) {
        $catID = intval($_GET['id']);
    }
    else {
        $catID = 6;
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Voyages Voyages - Plus loin que la nuit et le jour</title>
        <link rel="stylesheet" href="styles.css" />
    </head>
    <body>
        <section id="section-principale">
            <header id="header-principal" class="contenu-centre">
                <h1 class="marge-ext-0 texte-grand texte-couleur-principale">Voyages Voyages</h1>
                <h2 class="marge-ext-0">Plus loin que la nuit et le jour</h2>
                <nav id="menu-principal" class="liste-horiz">
                    <?php 
                    include 'menu.php';
                    ?>
                </nav>
            </header>
            <main id="main-principal" class="boite-gauche">
                <?php 
                // Si la variable voyageID existe, c'est que j'ai cliqué sur un article
                // et que je veux l'afficher
                // > Je lance voyageDetail.php
                // Sinon, j'affiche catDetail.php
                
                    if (isset($_GET['voyageid'])) {
                        include 'voyageDetail.php';
                    }
                    else {
                         include 'catDetail.php';
                    }
                
                ?>
                <aside>
                    <h1>Liste des voyages de cette catégorie</h1>
                    <ul>
                        <?php
                        include 'voyageCategorie.php';
                    ?>
                    </ul>
                </aside>
            </main>
            <aside id="aside-principal" class="clear-force">
                <h1>Tous les voyages</h1>
                <ul>
                    <?php
                        include 'menuVoyage.php';
                    ?>
                    
                </ul>
            </aside>
            <footer id="footer-principal" class="texte-petit contenu-droite">
                <!--<form id="inscription-newsletter">
                    <input type="text" placeholder="Votre mail" /><br/>
                    <input type="submit" value="S'abonner à la newsletter" />
                </form>-->
                <p>&copy; IEPS 2015</p>
            </footer>
        </section> 
    </body>
</html>
<?php
$connexion=null;
?>