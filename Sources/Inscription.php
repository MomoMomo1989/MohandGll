
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="StyleInscrption.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Inscrivez vous</title>
</head>
 <? php 
   if (isset($_POST['inscription']))
   {
    if(empty($_POST['user']))
    {
        $message='Saisir un pseudo'
    }
    elseif(empty($_POST['email']) || !filter_var ($_POST['email']))
    {
     $message='Saisir un email valide'
    }
    elseif(empty($_POST['pass1']) || ($_POST['pass1']) != ($_POST['pass2']) )
    {
    $message='saisir un password'  
    }
   }
   else
   {
    echo'OK'
   }
 
 ?>
<body>
    
   <div class="conteneur">
    <h1>Inscrivez Vous</h1>
    <div class="contenu">
     <?php  if(isset($message)); echo $message ?>   
    <form class="forme" method="post">
        <div class="user">
            <label class="textinput" for="Pseudo"> User</label><br/>
            <input type="text" class="champsTXT" id="user">
        </div>
        <div class="email">
            <label class="textinput" for="MAIL"> E-Mail</label><br/>
            <input type="text" class="champsTXT" id="email">
        </div>
        <div class="mdp">
            <label class="textinput" for="Pseudo"> Mot de passe</label><br/>
            <input type="text" class="champsTXT" id="pass1">
        </div>
        <div class="confirmMdp">
            <label class="textinput" for="Pseudo"> Confirmation</label><br/>
            <input type="text" class="champsTXT" id="pass2">
        </div>
        <input class="BTN" type="button" value="Valider" name="inscription">
        <input class="BTN" type="button" value="Annuler">
    </form>
    </div>
   </div>
</body>
</html>