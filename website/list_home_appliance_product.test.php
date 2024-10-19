<?php

require_once('database.php');
$db = getDB();
$query = "SELECT * FROM HomeApplianceProducts;";
$stmt = $db->prepare($query);
$stmt->execute();
$result = $stmt->get_result();
$db->close();
print_r($data);
while ($data = $result->fetch_assoc()) {
    echo $data['HomeApplianceProductID'] . ": " . $data['HomeApplianceProductCode'] . " - " . $data['HomeApplianceProductName'] . " - " . $data['HomeApplianceListPrice'] . "<br>";
}
?>