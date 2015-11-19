<?php
/**
 * Created by PhpStorm.
 * User: 201250541
 * Date: 2015-11-19
 * Time: 11:54
 */
$image = null;
if(isset($_GET['Image'])  )
{

    $image=$_GET['Image'];
    if(file_exists("Images/$image") && !(strpos($type,'..') !== false))
    {
        unlink("Images/$image");
    }

        HEADER("Location: index.php");


}
else
{
    HEADER("Location: index.php");
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Suppression</title>
</head>
<body>

</body>
</html>