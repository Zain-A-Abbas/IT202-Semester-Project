<?php

include('home_appliance_category.php');

$ID = $_GET['ID'];
if ((trim($ID) == '') or (!is_numeric($ID))) {
    echo "Invalid number.";
} else {
    $code = $_GET['CODE'];
    $name = $_GET['NAME'];
    $aisle = $_GET['AISLE'];
    $result = HomeApplianceCategory::updateCategory($code, $name, $aisle, $ID);
    if ($result) {
        echo "Category $name succesfully updated.";
    } else {
        echo "SQL result failed.";
    }
}

?>