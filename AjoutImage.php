<?php
/**
 * Created by PhpStorm.
 * User: 201250541
 * Date: 2015-11-19
 * Time: 11:17
 */
$rep = 'Images/';
$fich = $rep . basename($_FILES['Image']['name']);

$type   = $_FILES['Image']['type'];
if(strpos($type,'image') !== false)
{
    if (move_uploaded_file($_FILES['Image']['tmp_name'], $fich)) {
        //echo "Le fichier est valide et a été déplacé dans " . $fich;
        HEADER("Location: index.php");
    } else {
        echo "Problème lors du déplacement";
        HEADER("Location: index.php");
    }
}
HEADER("Location: index.php");

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajout</title>
</head>
<body>
<?php
$nom    = $_FILES['Image']['name'];
$taille = $_FILES['Image']['size'];
$temp   = $_FILES['Image']['tmp_name'];
$type   = $_FILES['Image']['type'];
$erreur = $_FILES['Image']['error'];

echo "<pre>";
echo "Nom d'origine          : $nom\n";
echo "Taille                 : $taille octets\n";
echo "Emplacement temporaire : $temp\n";
echo "Type MIME              : $type\n";
echo "Code d'erreur          : $erreur\n";
echo "</pre>";
?>

<a href="index.php">Retour à l'accueil</a>
</body>
</html>