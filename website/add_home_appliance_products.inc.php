<?php

# Zain Abbas, 11/02/2024, IT202-MC, Phase 3 Assignment: HTML Website Layout, zaa24@njit.edu
include('home_appliance_product.php');

if (isset($_SESSION['login'])) {    
    $ID = $_POST['ID'];
    if ((trim($ID) == '') or (!is_numeric($ID))) {
        echo "Invalid number.";
    } else {
        $code = $_POST['CODE'];
        $name = $_POST['NAME'];
        $desc = $_POST['DESC'];
        $color = $_POST['COLOR'];
        $catid = $_POST['CATID'];
        $whole = $_POST['WHOLEPRICE'];
        $list = $_POST['LISTPRICE'];
        $product = new HomeApplianceProduct($ID, $code, $name, $desc, $color, $catid, $whole, $list);
        $result = $product->insertProduct();
        if ($result) {
            echo "New product $name succesfully added.";
        } else {
            echo "SQL result failed.";
        }
    }
} else {
    echo "Not logged in.";
}

?>