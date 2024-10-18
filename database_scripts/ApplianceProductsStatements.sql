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