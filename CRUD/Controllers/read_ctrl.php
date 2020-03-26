<?php
//definition de la variable de recherche
        $pseudo=$_POST['pseudo'];

        function connexion(){
            //parametres de connexion à la bdd
        $adresse = "mysql:host=127.0.0.1;dbname=crud";
        $user = "thomas"; 
        $key = "stagiaire"; 
//connexion à la bdd
    try{
        $bdd = new PDO($adresse, $user, $key);
    }catch (Exception $e) 
    {
        die('Erreur connect BDD: ' . $e->getMessage());
    }
        };

//recherche dans la bdd
    $connect = connexion();
    $read="SELECT * 
            FROM user 
            where pseudo=?";
$read->bindParam(1, $identifiant, PDO::PARAM_INT);
$read->execute();
    
    var_dump($read);

?>

$identifiant = htmlspecialchar($_SESSION['id']);
 
 
//connexion à la base de donnée (à adapter à votre base de donnée évidemment)
try
{
        $dbh= new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
      
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
        
}


$sth = $dbh->prepare('SELECT nom, prenom
    FROM user
    WHERE id = ? ');
$sth->bindParam(1, $identifiant, PDO::PARAM_INT);
$sth->execute();
