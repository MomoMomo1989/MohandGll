<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="enreg.css">
    <title>S'enregistrer</title>
</head>
<body>
    <img src="images/bg2.jpg" alt="" class="imagefond">
    <form class="conteneur" method="POST" action="traitementEng.php">
        <div class="user">
            <img src="images/User1.png" alt="" class="imguser1">
        </div>
        <div class="conteneurlogin">
            <div class="dvemail">
                
                <input type="text" name="Nom" id="" placeholder="Nom" require>
            </div>
            <div class="dvpasss">
                
                <input type="text" name="Prénom" id="" placeholder="Prénom" require>
            </div>
            <div class="dvpasss">
                
                <input type="text" name="email" id="" placeholder="E-MAIL" require>
            </div>
            <div class="dvpasss">
                
                <input type="password" name="password" id="" placeholder="PASSWORD" require>
            </div>
            <div class="dvpasss">
                
                <input type="password" name="Confirmer" id="" placeholder="Confirmer" require>
            </div>
            <div class="inform">
                <a href="index.html" class="infoinfo">S'identifier</a>
            </div>
        </div>
        <button type="submit" class="btnSub" name="ok">S'enregistrer</button>
    </form>
    <script src="main.js"></script>
</body>
</html>