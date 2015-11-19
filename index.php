<?php
/**
 * Created by PhpStorm.
 * User: 201250541
 * Date: 2015-11-19
 * Time: 10:49
 */

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>DepotImages</title>
    <style>
        img {
            width:auto;
            height:auto;
            max-width: 200px;
            max-height: 150px;
        }
    </style>

</head>
<body>

<?php
// exemple avec le répertoire courant
$repertoire = "Images";

// la valeur de retour de scandir est un tableau
$fichiers = scandir($repertoire);

// si le répertoire est valide
if ($fichiers !== FALSE) {
    // on parcourt le tableau
    for ($i = 0; $i < sizeof($fichiers); $i++) {
        $nomFichier = $fichiers[$i];
        // on évite l'affichage des fichiers cachés
        if ($nomFichier[0] != ".") {
            echo "<a href=\"gestimage.php?Image=".$nomFichier . "\"><img src=\"".$repertoire."/".$nomFichier . "\" height=\"200\" width=\"200\"/></a>";
        }
    }
} else {
    die("Erreur: repertoire invalide");
};
?>
<div>
    <form action="AjoutImage.php" method="post"
          enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="26214400">
        Fichier : <input name="Image" size="35" type="file">
        <input type="submit" value="Envoyer le fichier">
    </form>
</div>
</body>
</html>