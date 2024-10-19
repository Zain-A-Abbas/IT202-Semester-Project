<?php

require_once('database.php');
$db = getDB();
$query = "SELECT * FROM HomeApplianceCategories;";
$stmt = $db->prepare($query);
$stmt->execute();
$result = $stmt->get_result();
$db->close();
print_r($data);
while ($data = $result->fetch_assoc()) {
    echo $data['HomeApplianceCategoryID'] . ": " . $data['HomeApplianceCategoryCode'] . " - " . $data['HomeApplianceCategoryName'] . "<br>";
}
?>