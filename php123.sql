-- CREATE DATABASE PHP123
DROP DATABASE IF EXISTS PHP123;
CREATE DATABASE PHP123;
USE PHP123;


-- CREATE TABLE Shoe;
CREATE TABLE Shoe (
ShoeID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
ShoeBrand varchar (30) NOT NULL,
ShoeName varchar(30) NOT NULL,
Description varchar(30) NOT NULL
); 

-- Populate shoe data
INSERT INTO Shoe VALUES 
(1, 'Lebron', 'Lebron Soldier 14', '14th edition'),
(2, 'Kyrie', 'Kyre 4 Halloween', '4th Halloween');



-- create the users and grant priveleges to those users
GRANT SELECT, INSERT, DELETE, UPDATE
ON PHP123.*
TO mgs_user@localhost
IDENTIFIED BY 'pa55word';

GRANT SELECT
ON Shoe
TO mgs_tester@localhost
IDENTIFIED BY 'pa55word';