<?php
require_once 'connexion.php';

/* -----------------------------------------------
 * RECUPERATION DES VARIABLES UTILES
 * -----------------------------------------------
 */
    // Récupération de l'id de la rubrique active
    // Avec 1 comme valeur par défaut 
    if (isset($_GET['id'])) {
        $catID = intval($_GET['id']);
    }
    else {
        $catID = 6;
    }

     // La rubrique Active (par défaut : 1)
            
            $sqlCategorie = "SELECT * "
                    . "FROM Categories "
                    . "WHERE id = $catID;";
            
            $armoirCategorie = $connexion->query($sqlCategorie);
            
            $categorie = $armoirCategorie->fetch(PDO::FETCH_OBJ);
            
            $armoirCategorie->closeCursor();
            $armoirCategorie = null; 
?>
<h1><?php echo $categorie->nom; ?></h1>
<p><?php  echo $categorie->texte; ?></p>

