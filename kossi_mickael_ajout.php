<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kossi_mickael_airbnb.css">
    <title>AirBNB</title>
</head>
<body>
    <header>
        <nav>
            <img src="https://static.latribune.fr/399101/airbnb.jpg" class="logo_airbnb">
        </nav>
    </header>
    <h1>Vous souhaitez ajouter un lieu ?</h2>
    <br>
<div class="flexbox">
    <div class="ajout">
    <form action="action.php" method="post">
        <p class="titre_gras">Titre : <input type="text" name="titre" size="30"/></p>
        <p class="titre_gras">Ville : <input type="select" name="ville" size="30"/></p>
        <p class="titre_gras">Description : <input type="text" name="description" size="40"/></p>
        <p class="titre_gras">Photo : <input type="file" name="photo" size="0"/></p>
        <br>
        <button onclick="window.location.href = 'kossi_mickael_airbnb.php';" class="lien">Ajouter</button>
    </form>
    </div>
</div>
<br>
<br>