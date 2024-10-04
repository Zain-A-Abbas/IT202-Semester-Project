CREATE TABLE HomeAppliancesManagers (
    HomeAppliancesManagerID INT(11)         NOT NULL    AUTO_INCREMENT,
    emailAddress            VARCHAR(255)    NOT NULL    UNIQUE,
    password                VARCHAR(64)     NOT NULL,
    pronouns                VARCHAR(60)     NOT NULL,
    firstName               VARCHAR(60)     NOT NULL,
    lastName                VARCHAR(60)     NOT NULL,
    dateCreated             DATETIME        NOT NULL,
    PRIMARY KEY (HomeAppliancesManagerID)
);

INSERT INTO HomeAppliancesManagers
(`emailAddress`, password, pronouns, `firstName`, `lastName`, `dateCreated`)
VALUES
('firstLady@appliances.com', SHA2('ateTheFruit', 256), 'She/Her', 'Eve', 'Kadmon', NOW());


INSERT INTO HomeAppliancesManagers
(`emailAddress`, password, pronouns, `firstName`, `lastName`, `dateCreated`)
VALUES
('firstMan@appliances.com', SHA2('alsoAteIt', 256), 'He/Him', 'Adam', 'Kadmon', NOW());

INSERT INTO HomeAppliancesManagers
(`emailAddress`, password, pronouns, `firstName`, `lastName`, `dateCreated`)
VALUES
('secondMan@appliances.com', SHA2('ImSteve', 256), 'He/Him', 'Steve', 'Guy', NOW());

