<?php
# Zain Abbas, 10/18/2024, IT202-MC, Phase 2 Assignment: CRUD Categories and Products, zaa24@njit.edu
//include('home_appliance_category.php');
if (isset($_SESSION['login'])) {
    $ID = filter_input(INPUT_POST, 'ID', FILTER_VALIDATE_INT);
    if ((trim($ID) == '') or (!is_numeric($ID))) {
        echo "Invalid ID.";
    } else {
        $code = htmlspecialchars($_POST['CODE']);
        $name = htmlspecialchars($_POST['NAME']);
        $aisle = filter_input(INPUT_POST, 'AISLE', FILTER_VALIDATE_INT);
        if (!is_int($aisle)) {
            echo "<h2>Please use a valid number for aisle</h2>\n";
            return;
        }
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