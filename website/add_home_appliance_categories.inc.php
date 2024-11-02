<?php
# Zain Abbas, 10/18/2024, IT202-MC, Phase 2 Assignment: CRUD Categories and Products, zaa24@njit.edu
include('home_appliance_category.php');
if (isset($_SESSION['login'])) {
    $ID = $_POST['ID'];
    if ((trim($ID) == '') or (!is_numeric($ID))) {
        echo "Invalid number.";
    } else {
        $code = $_POST['CODE'];
        $name = $_POST['NAME'];
        $aisle = $_POST['AISLE'];
        $date = $_POST['DATE'];
        $category = new HomeApplianceCategory($ID, $code, $name, $aisle);
        $result = $category->insertCategory();
        if ($result) {
            echo "New category $name succesfully added.";
        } else {
            echo "SQL result failed.";
        }
    }   
} else {
    echo "Not logged in.";
}

?>