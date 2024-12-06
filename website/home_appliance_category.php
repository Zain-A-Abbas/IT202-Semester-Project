<?php

# Zain Abbas, 10/18/2024, IT202-MC, Phase 2 Assignment: CRUD Categories and Products, zaa24@njit.edu
require_once('database.php');

class HomeApplianceCategory {
    public $HomeApplianceCategoryID;
    public $HomeApplianceCategoryCode;
    public $HomeApplianceCategoryName;
    public $AisleNumber;
    public $DateCreated;

    function __construct($ID, $code, $name, $aisle) {
        $this->HomeApplianceCategoryID = $ID;
        $this->HomeApplianceCategoryCode = $code;
        $this->HomeApplianceCategoryName = $name;
        $this->AisleNumber = $aisle;
        $this->DateCreated = date('Y-m-d H:i:s');;
    }

    function insertCategory() {
        $db = getDB();
        $query = "INSERT INTO HomeApplianceCategories VALUES (?, ?, ?, ?, ?);";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "issis",
            $this->HomeApplianceCategoryID,
            $this->HomeApplianceCategoryCode,
            $this->HomeApplianceCategoryName,
            $this->AisleNumber,
            $this->DateCreated
        );
    
        $result = $stmt->execute();
        $db->close();
        return $result;
    }

    static function updateCategory($code, $name, $aisle, $ID) {
        $db = getDB();
        $query = "UPDATE HomeApplianceCategories SET
        HomeApplianceCategoryCode = ?,
        HomeApplianceCategoryName = ?,
        AisleNumber = ?
        WHERE HomeApplianceCategoryID = ?;";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "ssii",
            $code,
            $name,
            $aisle,
            $ID
        );
    
        $result = $stmt->execute();
        $db->close();
        return $result;
    }

    static function deleteCategory($deleteID) {
        $db = getDB();
        $query = "DELETE FROM HomeApplianceCategories WHERE HomeApplianceCategoryID = ?;";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "i",
            $deleteID
        );
        $result = $stmt->execute();
        $db->close();
        return $result;

    }

    static function getCategories() {
        $db = getDB();
        $query = "SELECT * FROM HomeApplianceCategories;";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        $db->close();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

}


?>