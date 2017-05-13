 <?php
require_once 'connexion.php';
 
        // Le menu
            
        $sqlMenu = "SELECT id, nom "
                . "FROM categories;";
              

        $armoireMenu = $connexion->query($sqlMenu);

        $categories = $armoireMenu->fetchAll(PDO::FETCH_OBJ);

        $armoireMenu->closeCursor();
        $armoireMenu = null;

?>
<ul class="nav nav-pills">
                
    <!-- Début de région à répéter -->

        <?php foreach($categories as $categorieMenu) { ?>
            <!-- Si l'id de la rubrique que j'affiche est égal à $catID (id de la rubrique courante,
                 je mets un class="active" sur le li -->
             <li>
                 <a href="index.php?id=<?php echo $categorieMenu->id; ?>" >
                    <?php echo $categorieMenu->nom; ?>
                 </a>
             </li>   
        <?php } ?>
    <!-- Fin de région à répéter -->   
                
</ul>