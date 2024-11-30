<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <div class="container mt-3">
        <h2>Liste des appartements</h2>
        <table class="table">
            <tr class="table-primary">
                <th>Référence</th>
                <th>Propriétaire</th>
                <th>Localité</th>
                <th>Surface</th>
                <th>Usage</th>
                <th>Nb pièces</th>
                <th>Espace commun</th>
                <th colspan=2>Action</th>
            </tr>
            <?php
            foreach ($Appartements as $appartement) {
            ?>
                <tr>
                    <td><?= $appartement[0] ?></td>
                    <td><?= $appartement[1] ?></td>
                    <td><?= $appartement[2] ?></td>
                    <td><?= $appartement[3] ?></td>
                    <td><?= $appartement[5] ?></td>
                    <td><?= $appartement[4] ?></td>
                    <td><?= $appartement[6] ?></td>
                    <td><a class="btn btn-primary" href="ModifierAppartement.php?ref=<?= $appartement[0] ?>">Modifier</a></td>
                    <td><a class="btn btn-danger" href="SupprimerAppartement.php?ref=<?= $appartement[0] ?>">Supprimer</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>