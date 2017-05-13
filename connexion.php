<?php

  // CONNEXION A LA BD  -----------------------------------------------    
    // Paramètres de connexion au serveur de données
        $hote        = 'localhost';
        $utilisateur = 'root';
        $mdp         = '';
        $nomBd       = 'scripts_serveur_juin_2015';
        
    // Définition de la chaine de connexion
        $chaineConnexion = "mysql:host=$hote;dbname=$nomBd";
    
    // Utilisation du UTF-8 lors des transactions
        $param = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        
    // Je me connecte
        $connexion = new PDO($chaineConnexion,$utilisateur,$mdp,$param);