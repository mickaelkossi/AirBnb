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
    <br>
    <h1>Nos suggestions :</h1>
    <br>
<div class="flexbox">
    <div class="airbnb">
    <?php
    $server = "localhost";
        $login = "root";
        $password = "root"; 
        $bdd = "airbnb";

        $lien = mysqli_connect($server,$login,$password,$bdd);

        mysqli_query($lien,"set names utf8");

        $sql = "select * from annonce,ville,logement where annonce.id_ville = ville.id_ville and annonce.id_logement = logement.id_logement;";

        $request = mysqli_query($lien,$sql);

        ?>
        
            
            <?php
            while ($ligne = mysqli_fetch_assoc($request)) 
            {
            ?>
        <p>
            <?php
                echo('<img src = "data:image/jpg;base64,' . base64_encode($ligne["annonce_photo"]) . '" >');
            ?>
        </p>
        <p class="titre_gras">
            <?php  
			    echo $ligne['annonce_nom'].' - '.$ligne['ville_nom'];      
            ?>
        </p>
        <p>
            <?php  
			    echo $ligne['annonce_description'];      
            ?>
        </p>
        
             <?php
		}
		

		?>
    </div>
    </div>
    <br>
    <br>
    <h1>Vous voulez ajouter un lieu ?</h1>
    <br>
    <div class="flexbox">
    <button onclick="window.location.href = 'kossi_mickael_ajout.php';" class="lien">Allons-y</button>
    </div>
    <br>

</body>
</html>

