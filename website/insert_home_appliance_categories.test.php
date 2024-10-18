<?php

include('home_alliance_category.php');

$ID = $_GET('ID');
if ((trim($ID) == '') or (!is_numeric($ID))) {
    echo "Invalid number.";
} else {
    $code = $_GET('CODE');
    $name = $_GET('NAME');
    $aisle = $_GET('AISLE');
    $date = $_GET('DATE');
    $category = new HomeApplianceCategory($ID, $code, $name, $aisle, $date);
    $result = $category->insertCategory();
    if ($result) {
        echo "New category #$name succesfully added.";
    } else {
        echo "SQL result failed.";
    }
}

?>