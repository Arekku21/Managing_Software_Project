Create	database if not exists MSP;
use MSP;
set autocommit = false;

-- if using the old database please run these two lines below first
drop table users;
drop table inventory;


-- User Module --
CREATE TABLE IF NOT EXISTS Employee (
    EmployeeID INT(10) NOT NULL AUTO_INCREMENT,
    firstName VARCHAR(255) NOT NULL,
    lastName VARCHAR(255) NOT NULL,
    date_of_birth DATE,
    date_of_work DATE NOT NULL,
    emplyeeMobilePhone INT(10) UNIQUE,
    employeeEmailAddress VARCHAR(255) UNIQUE NOT NULL,
    employeeAddress VARCHAR(255),
    employeeRole ENUM('admin', 'regular') DEFAULT 'regular',
    Salary INT(10),
    PRIMARY KEY (EmployeeID)
);

CREATE TABLE IF NOT EXISTS Login (
    EmployeeID INT(10),
    employeeUsername VARCHAR(12) UNIQUE NOT NULL,
    employeePassowrd VARCHAR(50) NOT NULL,
    FOREIGN KEY (EmployeeID) REFERENCES Employee (EmployeeID)
);

CREATE TABLE IF NOT EXISTS Customer (
    CustomerID INT(10) NOT NULL AUTO_INCREMENT,
    firstName VARCHAR(255) NOT NULL,
    lastName VARCHAR(255) NOT NULL,
    customerMobilePhone INT(10) UNIQUE,
    customerEmailAddress VARCHAR(255) UNIQUE NOT NULL,
    customerAddress VARCHAR(255),
    City VARCHAR(255),
    PRIMARY KEY (CustomerID)
);

-- Inventory Module --
CREATE TABLE IF NOT EXISTS Drug (
    DrugID INT(10) NOT NULL AUTO_INCREMENT,
    drugName VARCHAR(255) NOT NULL,
    scientificName VARCHAR(255) NOT NULL,
    DrugCategory VARCHAR(255),
    storageTemperature INT(5),
    no_of_unit_in_Package INT(10),
    Manufacturer VARCHAR(255),
    unitPrice INT(10) NOT NULL,
    storageLocation VARCHAR(50),
    PRIMARY KEY (DrugID)
);

CREATE TABLE IF NOT EXISTS storedDrug (
    batchNo INT(10) NOT NULL AUTO_INCREMENT,
    manufacturingDate DATE NOT NULL,
    expiryDate DATE NOT NULL,
    quantity INT(10) NOT NULL,
    entryDate DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (batchNo)
);

-- Sales Module --
-- This is for Supplier
CREATE TABLE IF NOT EXISTS Purchase_Invoice (
	purchaseInvoiceID INT(10) NOT NULL AUTO_INCREMENT,
    purchaseDate date not null,
    totalAmount INT(10),
    paymentType ENUM('cash','credit','debit','cheque','mobile','eft'),
    Discount INT(10) DEFAULT 0,
    payedAmount INT(10),
    remainingAmount INT(10),
	constraint Discount_valid check (Discount between 0 and 100),
    primary key (purchaseInvoiceID)
);

-- This is for Customers
CREATE TABLE IF NOT EXISTS Sale_Invoice (
	saleInvoiceID INT(10) NOT NULL AUTO_INCREMENT,
    saleDate date not null,
    totalAmount INT(10),
    paymentType ENUM('cash','credit','debit','cheque','mobile','eft'),
    Discount INT(10) DEFAULT 0,
    payedAmount INT(10),
    remainingAmount INT(10),
	constraint Discount_valid check (Discount between 0 AND 100),
    primary key (saleInvoiceID)
);

-- Supplier Module
CREATE TABLE IF NOT EXISTS Supplier (
    SupplierID INT(10) NOT NULL AUTO_INCREMENT,
    companyName VARCHAR(255) NOT NULL,
    supplierMobilePhone INT(10),
    supplierEmailAddress VARCHAR(255) UNIQUE NOT NULL,
    supplierAddress VARCHAR(255),
    City VARCHAR(255),
    PRIMARY KEY (SupplierID)
);


commit;