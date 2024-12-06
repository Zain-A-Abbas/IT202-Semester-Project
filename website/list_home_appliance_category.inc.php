<?php


include('home_appliance_category.php');

require_once('database.php');
$categories = HomeApplianceCategory::getCategories();
echo "<h2>Categories</h2>";
foreach ($categories as $category) {
    $categoryID = $category->$HomeApplianceCategoryID;
    $name = $HomeApplianceCategoryID . " - " . $category->HomeApplianceCategoryCode . ", " . $category->HomeApplianceCategoryName ;
    echo "<option value=\"$categoryID\">$name</option>\n";
}
?>