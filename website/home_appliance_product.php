<?php

# Zain Abbas, 10/18/2024, IT202-MC, Phase 2 Assignment: CRUD Categories and Products, zaa24@njit.edu
require_once('database.php');

class HomeApplianceProduct {
    public $HomeApplianceProductID;
    public $HomeApplianceProductCode;
    public $HomeApplianceProductName;
    public $HomeAppliancedescription;
    public $Color;
    public $HomeApplianceCategoryID;
    public $HomeApplianceWholesalePrice;
    public $HomeApplianceListPrice;
    public $DateCreated;

    function __construct($ID, $code, $name, $desc, $color, $catID, $wholesalePrice, $price) {
        $this->HomeApplianceProductID = $ID;
        $this->HomeApplianceProductCode = $code;
        $this->HomeApplianceProductName = $name;
        $this->HomeAppliancedescription = $desc;
        $this->Color = $color;
        $this->HomeApplianceCategoryID = $catID;
        $this->HomeApplianceWholesalePrice = $wholesalePrice;
        $this->HomeApplianceListPrice = $price;
        $this->DateCreated = date('Y-m-d H:i:s');
    }

    function insertProduct() {
        $db = getDB();
        $query = "INSERT INTO HomeApplianceProducts VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "issssidds",
            $this->HomeApplianceProductID,
            $this->HomeApplianceProductCode,
            $this->HomeApplianceProductName,
            $this->HomeAppliancedescription,
            $this->Color,
            $this->HomeApplianceCategoryID,
            $this->HomeApplianceWholesalePrice,
            $this->HomeApplianceListPrice,
            $this->DateCreated
        );
    
        $result = $stmt->execute();
        $db->close();
        return $result;
    }

    static function updateProduct($code, $name, $description, $color, $catID, $wholesale, $listPrice, $ID) {
        $db = getDB();
        $query = "UPDATE HomeApplianceProducts SET
        HomeApplianceProductCode = ?,
        HomeApplianceProductName = ?,
        HomeAppliancedescription = ?,
        Color = ?,
        HomeApplianceCategoryID = ?,
        HomeApplianceWholesalePrice = ?,
        HomeApplianceListPrice = ?
        WHERE HomeApplianceProductID = ?;";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "ssssiddi",
            $code,
            $name,
            $description,
            $color,
            $catID,
            $wholesale,
            $listPrice,
            $ID
        );
    
        $result = $stmt->execute();
        $db->close();
        return $result;
    }

    static function deleteProduct($deleteID) {
        $db = getDB();
        $query = "DELETE FROM HomeApplianceProducts WHERE HomeApplianceProductID = ?;";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "i",
            $deleteID
        );
        $result = $stmt->execute();
        $db->close();
        return $result;

    }

}


?>