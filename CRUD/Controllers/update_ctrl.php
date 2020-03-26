<?php
// var_dump($_POST);

        $pseudo=$_POST['pseudo'];
        $mdp=$_POST['mot_de_passe'];
        $description=$_POST['description'];

        $adresse = "mysql:host=127.0.0.1;dbname=crud";
        $user = "thomas"; 
        $key = "stagiaire"; 

    try{
        $bdd = new PDO($adresse, $user, $key);
    }catch (Exception $e) 
    {
        die('Erreur : ' . $e->getMessage());
    }
        
    $insertion=$bdd->prepare("INSERT INTO user(pseudo, mot_de_passe, description) VALUES (?,?,?);");
    $insertion->bindParam(1, $pseudo);
    $insertion->bindParam(2, $mdp);
    $insertion->bindParam(3, $description);

    $insertion->execute();
    
?>
