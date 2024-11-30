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
        <h2>Recherche par référence</h2>
        <form action="../../Controller/Appartement/Recherche.php" method="post">
            <label for="rech">Référence : </label>
            <input type="number" name="rech" id="rech">
            <input type="submit" value="Rechercher" name="ok">
        </form>