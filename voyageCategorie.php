 <?php
require_once 'connexion.php';
 
        // Le menu
            
        $sqlVoyageCategorie = "SELECT id, nom "
                     . "FROM voyages "
                     . "WHERE categorieID = $catID;";

              

        $armoireMenuVoyage = $connexion->query($sqlVoyageCategorie);

        $voyage = $armoireMenuVoyage->fetchAll(PDO::FETCH_OBJ);

        $armoireMenuVoyage->closeCursor();
        $armoireMenuVoyage = null;

?>
<ul class="nav nav-pills">
                
    <!-- Début de région à répéter -->

        <?php foreach($voyage as $categorieMenuVoyage) { ?>
            <!-- Si l'id de la rubrique que j'affiche est égal à $catID (id de la rubrique courante,
                 je mets un class="active" sur le li -->
             <li>
                 <a href="index.php?voyageid=<?php echo $categorieMenuVoyage->id; ?>" >
                    <?php echo $categorieMenuVoyage->nom; ?>
                 </a>
             </li>   
        <?php } ?>
    <!-- Fin de région à répéter -->   
                
</ul>

