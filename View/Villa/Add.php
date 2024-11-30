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
        <h1>Ajout d'un Villa</h1>
        <form action="../../Controller/Villa/Add.php" method="post" class="form-control">
            Référence : <input type="number" name="reference" class="form-control"><br>
            Propriétaire : <input type="text" name="proprietaire" class="form-control"><br>
            Localité : <input type="text" name="localite" class="form-control"><br>
            Surface : <input type="text" name="surface" class="form-control"><br>
            Domaine d'usage : <select name="domaineusage" class="form-control">
                <option>Bureau</option>
                <option>Domicile</option>
            </select><br>
            Nombre de pièces : <input type="text" name="nbpieces" class="form-control"><br>
            Nombre d'étages : <input type="text" name="nbetages" class="form-control"><br>
            <input type="submit" name="ok" value="Ajouter" class="btn btn-primary">
        </form>
    </div>
</body>

</html>