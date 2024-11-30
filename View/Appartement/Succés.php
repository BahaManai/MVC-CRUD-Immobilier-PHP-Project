<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Public/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <div class="container mt-3">
        <?php
        if (isset($_GET['etat'])) {
            $etat = $_GET['etat'];
            echo "$etat effectuée avec succés";
        }
        ?>
        <br><br><a href="../../Controller/Appartement/ListerAppartement.php" class="btn btn-success">Lister</a>
    </div>
</body>

</html>