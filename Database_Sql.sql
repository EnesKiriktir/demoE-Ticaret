CREATE TABLE Customer(
Customer_Name varchar(50),
Customer_Surname varchar(50),
Customer_Gender varchar(30),
Customer_Address TEXT,
Customer_Birthdate varchar(10),
Customer_User_Name varchar(50),
Customer_Password varchar(20),
Customer_Credit_Card_Information TEXT,
Customer_ID INT AUTO_INCREMENT PRIMARY KEY
);

CREATE TABLE Admin (
Admin_Name varchar(50),
Admin_Surname varchar(50),
Admin_User_Name varchar(50),
Admin_Password varchar(20),
Admin_ID INT AUTO_INCREMENT PRIMARY KEY
);

CREATE TABLE Payment(
Amount double,
Payment_Type varchar(25),
Payment_ID INT AUTO_INCREMENT PRIMARY KEY
);

CREATE TABLE Basket(
Total_Cost double,
Basket_Item_ID INT AUTO_INCREMENT PRIMARY KEY
);

CREATE TABLE Product(
Model varchar(50),
Product_ID INT PRIMARY KEY,
FK_Category_ID INT,
FOREIGN KEY(FK_Category_ID) 
       REFERENCES Product_Category(Category_ID)
);

CREATE TABLE Product_Category(
Category_Name varchar(50),
Category_ID INT PRIMARY KEY
);

CREATE TABLE Product_Property(
Property varchar(50),
Product_Property_ID INT PRIMARY KEY,
FK_Category_Property_ID INT,
FK_Product_ID INT,
FOREIGN KEY(FK_Category_Property_ID) 
       REFERENCES Category_Property(Category_Property_ID),
FOREIGN KEY(FK_Product_ID) 
       REFERENCES Product(Product_ID)

);




CREATE TABLE Category_Property(
Property_Name varchar(50),
Category_Property_ID INT PRIMARY KEY,
FK_Category_ID INT,
FOREIGN KEY(FK_Category_ID) 
       REFERENCES Product_Category(Category_ID)
);










