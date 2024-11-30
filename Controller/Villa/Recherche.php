<?php
require_once "../../Model/CRUD_Villa.php";
$crud = new CRUD_Villa();
include "../../View/Villa/Recherche.php";
if (isset($_POST['ok'])) {
    $ref = $_POST['rech'];
    $villa = $crud->RecupererVilla($ref);
    if ($villa) {
        echo "<br>Référence : $villa[0]<br>";
        echo "Propriétaire : $villa[1]<br>";
        echo "Localité : $villa[2]<br>";
        echo "Surface : $villa[3]<br>";
        echo "Nombre de pièces : $villa[4]<br>";
        echo "Domaine d'usage : $villa[5]<br>";
        echo "Nombre d'étages : $villa[6]<br>";
    } else {
        echo "<br>Aucun villa trouvé !";
    }
    echo "</div></body></html>";
}
