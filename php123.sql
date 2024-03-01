-- CREATE DATABASE PHP123
DROP DATABASE IF EXISTS PHP123;
CREATE DATABASE PHP123;
USE PHP123;


-- CREATE TABLE Meeting;
CREATE TABLE Shoe (
ShoeID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
ShoeBrand varchar (30) NOT NULL,
ShoeDate DATE NOT NULL,
ShoeName varchar(30) NOT NULL,
Description varchar(30) NOT NULL
); 

-- Populate meeting data
INSERT INTO Shoe VALUES 
(1, 'Lebron', '2020-08-01', 'Lebron Soldier 14', '14th edition'),
(2, 'Kyrie', '2018-01-01', 'Kyre 4 Halloween', '4th Halloween');



-- create the users and grant priveleges to those users
GRANT SELECT, INSERT, DELETE, UPDATE
ON PHP123.*
TO mgs_user@localhost
IDENTIFIED BY 'pa55word';

GRANT SELECT
ON Shoe
TO mgs_tester@localhost
IDENTIFIED BY 'pa55word';