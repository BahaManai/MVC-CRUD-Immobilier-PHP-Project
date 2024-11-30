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
        <h2>Modification des données d'un Appartement</h2>
        <form action="../../Controller/Appartement/ModifierAppartement.php?ref=<?= $ref ?>" method="post" class="form-control">
            Référence : <input type="number" name="reference" class="form-control" value="<?= $AppInit[0] ?>"><br>
            Propriétaire : <input type="text" name="proprietaire" class="form-control" value="<?= $AppInit[1] ?>"><br>
            Localité : <input type="text" name="localite" class="form-control" value="<?= $AppInit[2] ?>"><br>
            Surface : <input type="text" name="surface" class="form-control" value="<?= $AppInit[3] ?>"><br>
            Domaine d'usage : <select name="domaineusage" class="form-control" value="<?= $AppInit[5] ?>">
                <option>Bureau</option>
                <option>Domicile</option>
            </select><br>
            Nombre de pièces : <input type="text" name="nbpieces" class="form-control" value="<?= $AppInit[4] ?>"><br>
            Surface de l'espace commun : <input type="text" name="surfaceespacecommun" class="form-control" value="<?= $AppInit[6] ?>"><br>
            <input type="submit" name="OK" value="Modifier" class="btn btn-primary">
        </form>
    </div>
</body>

</html>