-- Zain Abbas, 10/18/2024, IT202-MC, Phase 2 Assignment: CRUD Categories and Products, zaa24@njit.edu
CREATE TABLE HomeApplianceProducts (
 HomeApplianceProductID         INT(11)         NOT NULL,
 HomeApplianceProductCode       VARCHAR(10)     NOT NULL    UNIQUE,
 HomeApplianceProductName       VARCHAR(255)    NOT NULL,
 HomeAppliancedescription       TEXT            NOT NULL,
 Color                          VARCHAR(255)    NOT NULL,
 HomeApplianceCategoryID        INT(11)         NOT NULL,
 HomeApplianceWholesalePrice    DECIMAL(10,2)   NOT NULL,
 HomeApplianceListPrice         DECIMAL(10,2)   NOT NULL,
 DateCreated                    DATETIME        NOT NULL,
 PRIMARY KEY ( HomeApplianceProductID )
);

SELECT * FROM `HomeApplianceProducts`;

INSERT INTO `HomeApplianceProducts`
(`HomeApplianceProductID`, `HomeApplianceProductCode`, `HomeApplianceProductName`, `HomeAppliancedescription`, `Color`, `HomeApplianceCategoryID`, `HomeApplianceWholesalePrice`, `HomeApplianceListPrice`, `DateCreated`)
VALUES
(1012, 'Ra', 'Ra\'s Air Purifier', 'Placeholder description.', 'AMARANTH', 5, 399.00, 499.00, NOW());
