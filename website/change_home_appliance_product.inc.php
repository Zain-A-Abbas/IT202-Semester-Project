<?php
# Zain Abbas, 10/18/2024, IT202-MC, Phase 2 Assignment: CRUD Categories and Products, zaa24@njit.edu
//include('home_appliance_product.php');

if (isset($_SESSION['login'])) {    
    $ID = $_POST['ID'];
    if ((trim($ID) == '') or (!is_numeric($ID))) {
        echo "Invalid number.";
    } else {
        $code = htmlspecialchars($_POST['CODE']);
        $name = htmlspecialchars($_POST['NAME']);
        $desc = htmlspecialchars($_POST['DESC']);
        $color = htmlspecialchars($_POST['COLOR']);
        $catid = $_POST['CATID'];
        $whole = $_POST['WHOLEPRICE'];
        $list = $_POST['LISTPRICE'];
        $result = HomeApplianceProduct::updateProduct($code, $name, $desc, $color, $catid, $whole, $list, $ID);
        if ($result) {
            echo "Product $name succesfully updated.";
        } else {
            echo "SQL result failed.";
        }
    }
} else {
    echo "Not logged in.";
}

?>