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
        <h2>Liste des villas</h2>
        <table class="table">
            <tr class="table-primary">
                <th>Référence</th>
                <th>Propriétaire</th>
                <th>Localité</th>
                <th>Surface</th>
                <th>Usage</th>
                <th>Nb pièces</th>
                <th>Nb Etages</th>
                <th colspan=2>Action</th>
            </tr>
            <?php
            foreach ($Villas as $villa) {
            ?>
                <tr>
                    <td><?= $villa[0] ?></td>
                    <td><?= $villa[1] ?></td>
                    <td><?= $villa[2] ?></td>
                    <td><?= $villa[3] ?></td>
                    <td><?= $villa[5] ?></td>
                    <td><?= $villa[4] ?></td>
                    <td><?= $villa[6] ?></td>
                    <td><a class="btn btn-primary" href="ModifierVilla.php?ref=<?= $villa[0] ?>">Modifier</a></td>
                    <td><a class="btn btn-danger" href="SupprimerVilla.php?ref=<?= $villa[0] ?>">Supprimer</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>