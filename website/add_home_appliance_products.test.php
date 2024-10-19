<?php

include('home_appliance_product.php');

$ID = $_GET['ID'];
if ((trim($ID) == '') or (!is_numeric($ID))) {
    echo "Invalid number.";
} else {
    $code = $_GET['CODE'];
    $name = $_GET['NAME'];
    $desc = $_GET['DESC'];
    $color = $_GET['COLOR'];
    $catid = $_GET['CATID'];
    $whole = $_GET['WHOLEPRICE'];
    $list = $_GET['LISTPRICE'];
    $product = new HomeApplianceProduct($ID, $code, $name, $desc, $color, $catid, $whole, $list);
    $result = $product->insertProduct();
    if ($result) {
        echo "New product $name succesfully added.";
    } else {
        echo "SQL result failed.";
    }
}

?>