<?php
require_once 'connexion.php';

/* -----------------------------------------------
 * RECUPERATION DES VARIABLES UTILES
 * -----------------------------------------------
 */
    // Récupération de l'id de la rubrique active
    // Avec 1 comme valeur par défaut 
    if (isset($_GET['voyageid'])) {
        $voyageid = intval($_GET['voyageid']);
    }
    else {
        $voyageid = 1;
    }

     // La rubrique Active (par défaut : 1)
            
            $sqlVoyage = "SELECT * "
                    . "FROM voyages "
                    . "WHERE id = $voyageid;";
            
            $armoireVoyage = $connexion->query($sqlVoyage);
            
            $voyage = $armoireVoyage->fetch(PDO::FETCH_OBJ);
            
            $armoireVoyage->closeCursor();
            $armoireVoyage = null; 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Voyages Voyages - Plus loin que la nuit et le jour</title>
        <link rel="stylesheet" href="styles.css" />
    </head>
    <body>
        
            
            
                <h1 class="texte-couleur-principale"><?php echo $voyage->nom; ?></h1>
                <p><?php echo $voyage->texte; ?></p>
                <h2>Détails du voyage</h2>
                <ul>
                    <li>Animaux admis : <?php  
            if($voyage->animaux==1){
            echo "oui";
            }
            else{
            echo "non" ;  
            }
            ?></li>
                    <li>Catégorie : </li>
                    <li><strong>Prix : <?php echo $voyage->prix; ?> €</strong></li>
                </ul>
            
            
    </body>
</html>

