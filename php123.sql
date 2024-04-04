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
(1, 'Lebron', 'Lebron Soldier 14', '14th edition made in August 1, 2020'),
(2, 'Kyrie', 'Kyre 4 Halloween', '4th Halloween made in 2018'),
(3, 'Jordan', 'Air Jordan 1', 'First Air Jordan in 1985'),
(4, 'Durant', 'KD1', 'Debut signature of Kevin Durant at 2008'),
(5, 'Kyrie', 'Spongebob SquarePants X Kyrie 5', 'Spongebob collaboration 2019'),
(6, 'Lebron', 'Nike Lebron 9 Low', '2012 USA Olympics'),
(7, 'Lebron', 'Nike Zoom Lebron 4', 'Lebron 4 made in 2006'),
(8, 'Lebron', 'LeBron NXXT Gen', '2024 shoe for Nexxt Generation'),
(9, 'Lebron', 'LeBron Witness 7', 'Witness 7 made in 2022'),
(10, 'Lebron', 'LeBron Witness 8', 'Witness 8 made in 2023'),
(11, 'Lebron', 'LeBron NXXT Gen AMPD IPS', '2024 Akron-Inspired shoe for Nexxt Generation'),
(12, 'Lebron', 'LeBron XXI "Freshwater', 'Lebron XXI made in 2023'),
(13, 'Lebron', 'Nike Zoom LeBron 2', 'Zoom Lebron 2 Made in 2004'),
(14, 'Lebron', 'LeBron 20x', 'LeBron 20x Made in 2022'),
(15, 'Kyrie', 'KYRIE 3 MAMBA MENTALITY', '2017 Homage to Kobe'),
(16, 'Kyrie', 'KYRIE 7 BRED', 'Bred released in 2020'),
(17, 'Kyrie', 'KYRIE 4 CONFETTI', 'CONFETTI was released in 2017'),
(18, 'Kyrie', 'KYRIE 7 PALE IVORY', 'Pale Ivory was released in 2021'),
(19, 'Kyrie', 'Kyrie 1', '2014 debut of Kyries'),
(20, 'Kyrie', 'Kyrie 2', '2015 second debut of Kyries'),
(21, 'Kyrie', 'Kyrie 6', 'Kyrie 5 in 2016'),
(22, 'Kyrie', 'Kyrie 5 Galaxy', 'Galaxy was released in 2018 '),
(23, 'Jordan', 'Air Jordan II', 'Second Air Jordan in 1986'),
(24, 'Jordan', 'Air Jordan III', 'Third Air Jordan in 1988'),
(25, 'Jordan', 'Air Jordan IV', 'Fourth Air Jordan in 1989'),
(26, 'Jordan', 'Air Jordan V', 'Fifth Air Jordan in 1990'),
(27, 'Jordan', 'Air Jordan VI', 'Sixth Air Jordan in 1991'),
(28, 'Jordan', 'Air Jordan VII', 'Seventh Air Jordan in 1992'),
(29, 'Jordan', 'Air Jordan VIII', '8th Air Jordan in 1993'),
(30, 'Jordan', 'Air Jordan IX', '9th Air Jordan in 1993'),
(31, 'Jordan', 'Air Jordan X', '10th Air Jordan in 1994'),
(32, 'Durant', 'KD2', '2nd KD in 2009'),
(33, 'Durant', 'KD3', '3rd KD in 2010'),
(34, 'Durant', 'KD4', '4th KD in 2011'),
(35, 'Durant', 'KD5', '5th KD in 2012'),
(36, 'Durant', 'KD6', '6th KD in 2013'),
(37, 'Durant', 'KD7', '7th KD in 2014'),
(38, 'Durant', 'KD8', '8th KD in 2015'),
(39, 'Durant', 'KD9', '9th KD in 2016'),
(40, 'Durant', 'KD10', '10th KD in 2017'),
(41, 'Giannis', 'Air Zoom Freak 1', 'Debut shoe in 2019'),
(42, 'Giannis', 'Zoom Freak 2', 'Second Zoom Freak in 2020'),
(43, 'Giannis', 'Zoom Freak 3', 'Third Zoom Freak in 2021'),
(44, 'Giannis', 'Giannis Immortality', 'First Immortality in 2021'),
(45, 'Giannis', 'Zoom Freak 5', 'Fourth Zoom Freak in 2022');
-- create the users and grant priveleges to those users
GRANT SELECT, INSERT, DELETE, UPDATE
ON PHP123.*
TO mgs_user@localhost
IDENTIFIED BY 'pa55word';

GRANT SELECT
ON Shoe
TO mgs_tester@localhost
IDENTIFIED BY 'pa55word';
