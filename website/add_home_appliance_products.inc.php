<?php

# Zain Abbas, 11/02/2024, IT202-MC, Phase 3 Assignment: HTML Website Layout, zaa24@njit.edu
include('home_appliance_product.php');

if (isset($_SESSION['login'])) {    
    $ID = filter_input(INPUT_POST, 'ID', FILTER_VALIDATE_INT);
    if ((trim($ID) == '') or (!is_numeric($ID))) {
        echo "Invalid ID.";
    } else {
        $code = htmlspecialchars($_POST['CODE']);
        $name = htmlspecialchars($_POST['NAME']);
        $desc = htmlspecialchars($_POST['DESC']);
        $color = htmlspecialchars($_POST['COLOR']);
        $catid = $_POST['CATID'];
        $whole = $_POST['WHOLEPRICE'];
        $list = $_POST['LISTPRICE'];
        if (!is_int($catid) || !is_float($whole) || !is_float($list)) {
            echo "<h2>Non-numeric values for ID/price.</h2>\n";
        }
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