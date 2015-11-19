<?php
/**
 * Created by PhpStorm.
 * User: 201250541
 * Date: 2015-11-19
 * Time: 10:58
 */
$image = null;
if(isset($_GET['Image']))
{
    $image=$_GET['Image'];
}
else
{
    HEADER("Location: index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GestionImage</title>
    <style>
        img {
            width:auto;
            height:auto;
            max-width: 800px;
            max-height: 600px;
        }
    </style>
</head>
<body>
<img src="Images/<?php echo $image; ?>" />
<a href="DeleteImage.php?Image=<?php echo $image; ?>"><Button>Supprimer</Button></a>
</body>
</html>