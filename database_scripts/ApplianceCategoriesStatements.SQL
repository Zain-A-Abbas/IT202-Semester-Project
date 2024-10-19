-- Zain Abbas, 10/18/2024, IT202-MC, Phase 2 Assignment: CRUD Categories and Products, zaa24@njit.edu
CREATE TABLE HomeApplianceCategories (
 HomeApplianceCategoryID        INT(11)         NOT NULL,
 HomeApplianceCategoryCode      VARCHAR(10)     NOT NULL   UNIQUE,
 HomeApplianceCategoryName      VARCHAR(255)    NOT NULL,
 AisleNumber                    INT(3)          NOT NULL,
 DateCreated                    DATETIME        NOT NULL,
 PRIMARY KEY ( HomeApplianceCategoryID )
);

SELECT * FROM `HomeApplianceCategories`;

INSERT INTO HomeApplianceCategories
(`HomeApplianceCategoryID`, `HomeApplianceCategoryCode`, `HomeApplianceCategoryName`, `AisleNumber`, `DateCreated`)
VALUES
(1, "RFG", "Refrigerators", 1, NOW());

INSERT INTO HomeApplianceCategories
(`HomeApplianceCategoryID`, `HomeApplianceCategoryCode`, `HomeApplianceCategoryName`, `AisleNumber`, `DateCreated`)
VALUES
(2, "WSM", "Washing Machines", 2, NOW());

INSERT INTO HomeApplianceCategories
(`HomeApplianceCategoryID`, `HomeApplianceCategoryCode`, `HomeApplianceCategoryName`, `AisleNumber`, `DateCreated`)
VALUES
(3, "MCR", "Microwave Ovens", 3, NOW());

INSERT INTO HomeApplianceCategories
(`HomeApplianceCategoryID`, `HomeApplianceCategoryCode`, `HomeApplianceCategoryName`, `AisleNumber`, `DateCreated`)
VALUES
(4, "CFM", "Coffee Makers", 4, NOW());

INSERT INTO HomeApplianceCategories
(`HomeApplianceCategoryID`, `HomeApplianceCategoryCode`, `HomeApplianceCategoryName`, `AisleNumber`, `DateCreated`)
VALUES
(5, "ARP", "Air Purifiers", 5, NOW());

