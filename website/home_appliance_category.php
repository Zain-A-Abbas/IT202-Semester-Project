<?php

class HomeApplianceCategory {
    public $HomeApplianceCategoryID;
    public $HomeApplianceCategoryCode;
    public $HomeApplianceCategoryName;
    public $AisleNumber;
    public $DateCreated;

    function __construct($ID, $code, $name, $aisle, $date) {
        $this->HomeApplianceCategoryID = $ID;
        $this->HomeApplianceCategoryCode = $code;
        $this->HomeApplianceCategoryName = $name;
        $this->AisleNumber = $aisle;
        $this->DateCreated = $date;
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

    function updateCategory() {
        $db = getDB();
        $query = "UPDATE HomeApplianceCategories SET
        HomeApplianceCategoryCode = ?,
        HomeApplianceCategoryName = ?,
        AisleNumber = ?,
        DateCreated = ?
        WHERE HomeApplianceCategoryID = ?;";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "ssisi",
            $this->HomeApplianceCategoryCode,
            $this->HomeApplianceCategoryName,
            $this->AisleNumber,
            $this->DateCreated,
            $this->HomeApplianceCategoryID
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

}


?>