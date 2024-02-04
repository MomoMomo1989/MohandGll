<?php
try{
    $con = new PDO("mysql:host=localhost;dbname=communication;port=3306;charset=utf8", 'root', '');
    //echo 'connecter';
}catch (Exeption $e){
  echo 'erreur de connexion: ' .$e;
}
if(isset($_POST['ok'])){
 extract($_POST);
 $requete = $con->prepare("INSERT INTO utilisateur VALUES (0, :nom, :prenom, :email, :mdp, :pseudo, :autres, :cde_dir)");
 $requete->execute(
    array(
        "nom" => $Nom,
        "prenom" => $Prénom,
        "email" => $email,
        "mdp" => $password,
        "pseudo"=> 0,
        "autres"=> 0,
        "cde_dir"=> 0,
        )
 );
 
}
?>