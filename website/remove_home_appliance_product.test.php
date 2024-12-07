<?php

# Zain Abbas, 10/18/2024, IT202-MC, Phase 2 Assignment: CRUD Categories and Products, zaa24@njit.edu

$ID = $_GET['ID'];
if ((trim($ID) == '') or (!is_numeric($ID))) {
    echo "Invalid number.";
} else {
    $result = HomeApplianceProduct::deleteProduct($ID);
    if ($result) {
        echo "Product succesfully removed.";
    } else {
        echo "SQL result failed.";
    }
}

?>