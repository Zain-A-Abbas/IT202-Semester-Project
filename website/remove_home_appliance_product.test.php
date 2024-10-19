<?php

include('home_appliance_product.php');

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