<?php
// Zain Abbas, 12/06/2024, IT202-MC, Phase 5 Assignment: Javascript, zaa24@njit.edu
ob_start();
include("home_appliance_category.php");
include("home_appliance_product.php");
$totalCategories = HomeApplianceCategory::getTotalCategories();
$totalItems = HomeApplianceProduct::getTotalItems();
$listpricetotal = HomeApplianceProduct::getTotalListPrice();
$doc = new DOMDocument("1.0");
$inventory = $doc->createElement("inventory");
$inventory = $doc->appendChild($inventory);
$categories = $doc->createElement("categories", $totalCategories);
$categories = $inventory->appendChild($categories);
$items = $doc->createElement("items", $totalItems);
$items = $inventory->appendChild($items);
$listprice = $doc->createElement("listpricetotal", $listpricetotal);
$listprice = $inventory->appendChild($listprice);
$output = $doc->saveXML();
header("Content-type: application/xml");
ob_end_clean();
echo $output;
?>
