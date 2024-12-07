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

    function updateCategory()
    {
        $db = getDB();
        $query = "UPDATE HomeApplianceCategories SET HomeApplianceCategoryCode = ?, HomeApplianceCategoryCode = ?, " .
            "HomeApplianceCategoryName = ? " .
            "WHERE HomeApplianceCategoryID = $this->HomeApplianceCategoryID";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "iss",
            $this->HomeApplianceCategoryID,
            $this->HomeApplianceCategoryCode,
            $this->HomeApplianceCategoryName
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }


    static function findCategory($categoryID)
    {
        $db = getDB();
        $query = "SELECT * FROM HomeApplianceCategories WHERE HomeApplianceCategoryID = $categoryID";
        $result = $db->query($query);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if ($row) {
            $category = new HomeApplianceCategory(
                $row['HomeApplianceCategoryID'],
                $row['HomeApplianceCategoryCode'],
                $row['HomeApplianceCategoryName'],
                $row['AisleNumber']
            );
            $db->close();
            return $category;
        } else {
            $db->close();
            return NULL;
        }
    }
 

    function removeCategory()
    {
        $db = getDB();
        $query = "DELETE FROM HomeApplianceCategories WHERE HomeApplianceCategoryID = $this->HomeApplianceCategoryID";
        $result = $db->query($query);
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
        
        $categories = [];
        while ($data = $result->fetch_object()) {
            $categories[] = $data;
        }
        return $categories;
    }

    static function getTotalCategories() {
        $db = getDB();
        $query = "SELECT count(HomeApplianceCategoryID) FROM HomeApplianceCategories";
        $result = $db->query($query);
        $row = $result->fetch_array();
        if ($row) {
            return $row[0];
        } else {
            return NULL;
        }
    }


}


?>