<?php
require_once "../../Model/CRUD_Appartement.php";
$crud = new CRUD_Appartement();
include "../../View/Appartement/Recherche.php";
if (isset($_POST['ok'])) {
    $ref = $_POST['rech'];
    $appartement = $crud->RecupererApp($ref);
    if ($appartement) {
        echo "<br>Référence : $appartement[0]<br>";
        echo "Propriétaire : $appartement[1]<br>";
        echo "Localité : $appartement[2]<br>";
        echo "Surface : $appartement[3]<br>";
        echo "Nombre de pièces : $appartement[4]<br>";
        echo "Domaine d'usage : $appartement[5]<br>";
        echo "Surface d'espace commun : $appartement[6]<br>";
    } else {
        echo "<br>Aucun appartement trouvé !";
    }
    echo "</div></body></html>";
}
