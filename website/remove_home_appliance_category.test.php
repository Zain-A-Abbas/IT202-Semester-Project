<?php

include('home_alliance_category.php');

$ID = $_GET('ID');
if ((trim($ID) == '') or (!is_numeric($ID))) {
    echo "Invalid number.";
} else {
    $result = HomeApplianceCategory::deleteCategory($ID);
    if ($result) {
        echo "Category #$name succesfully updated.";
    } else {
        echo "SQL result failed.";
    }
}

?>