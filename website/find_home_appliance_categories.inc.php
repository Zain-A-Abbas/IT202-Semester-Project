<?php
# Zain Abbas, 10/18/2024, IT202-MC, Phase 2 Assignment: CRUD Categories and Products, zaa24@njit.edu
include('home_appliance_category.php');
if (isset($_SESSION['login'])) {
    $SEARCH = $_POST['CATEGORY'];
    $db = getDB();
    $query = "
    SELECT * FROM HomeApplianceProducts AS Products
    WHERE Products.HomeApplianceCategoryID IN 
    (SELECT Categories.HomeApplianceCategoryID FROM HomeApplianceCategories AS Categories WHERE Categories.HomeApplianceCategoryName = '" . $SEARCH . "');";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    $db->close();
    print_r($data);
    while ($data = $result->fetch_assoc()) {
        echo $data['HomeApplianceProductID'] . ": " . $data['HomeApplianceProductCode'] . " - " . $data['HomeApplianceProductName'] . " - " . $data['HomeApplianceListPrice'] . "<br>";
    }   
} else {
    echo "Not logged in.";
}

?>