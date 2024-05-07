-- CREATE DATABASE PHP123
DROP DATABASE IF EXISTS PHP123;
CREATE DATABASE PHP123;
USE PHP123;


-- CREATE TABLE Shoe;
CREATE TABLE Shoe (
ShoeID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
ShoeBrand varchar (30) NOT NULL,
ShoeName varchar(30) NOT NULL,
Description varchar(100) NOT NULL,
product_image varchar(100)
); 
CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    usertype VARCHAR(30) NOT NULL DEFAULT 'user'
);

CREATE TABLE Reviews (
review_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
 ShoeID int(11) NOT NULL,
 title varchar(50) NOT NULL,
 review_description varchar(300) NOT NULL,
 rating varchar(1) NOT NULL
 );

-- Populate shoe data
INSERT INTO Shoe VALUES 
(1, 'LeBron', 'LeBron Soldier 14', '14th edition made in August 1, 2020', 'lebronshoe1.jpg'),
(2, 'Kyrie', 'Kyrie 4 Halloween', '4th Halloween made in 2018', 'kyrieshoe1.jpg'),
(3, 'Jordan', 'Air Jordan 1', 'First Air Jordan in 1985', 'jordanshoe1.jpg'),
(4, 'Durant', 'KD1', 'Debut signature of Kevin Durant at 2008', 'durantshoe1.jpg'),
(5, 'Kyrie', 'Spongebob SquarePants X Kyrie 5', 'Spongebob collaboration 2019', 'kyrieshoe2.jpg'),
(6, 'LeBron', 'Nike LeBron 9 Low', '2012 USA Olympics', 'lebronshoe2.jpg'),
(7, 'LeBron', 'Nike Zoom LeBron 4', 'LeBron 4 made in 2006', 'lebronshoe3.jpg'),
(8, 'LeBron', 'LeBron NXXT Gen', '2024 shoe for Nexxt Generation', 'lebronshoe4.jpg'),
(9, 'LeBron', 'LeBron Witness 7', 'Witness 7 made in 2022', 'lebronshoe5.jpg'),
(10, 'LeBron', 'LeBron Witness 8', 'Witness 8 made in 2023', 'lebronshoe6.jpg'),
(11, 'LeBron', 'LeBron NXXT Gen AMPD IPS', '2024 Akron-Inspired shoe for Nexxt Generation', 'lebronshoe7.jpg'),
(12, 'LeBron', 'LeBron XXI "Freshwater', 'LeBron XXI made in 2023', 'lebronshoe8.jpg'),
(13, 'LeBron', 'Nike Zoom LeBron 2', 'Zoom LeBron 2 Made in 2004', 'lebronshoe9.jpg'),
(14, 'LeBron', 'LeBron 20x', 'LeBron 20x Made in 2022', 'lebronshoe10.jpg'),
(15, 'Kyrie', 'KYRIE 3 MAMBA MENTALITY', '2017 Homage to Kobe', 'kyrieshoe3.jpg'),
(16, 'Kyrie', 'KYRIE 7 BRED', 'Bred released in 2020', 'kyrieshoe4.jpg'),
(17, 'Kyrie', 'KYRIE 4 CONFETTI', 'CONFETTI was released in 2017', 'kyrieshoe5.jpg'),
(18, 'Kyrie', 'KYRIE 7 PALE IVORY', 'Pale Ivory was released in 2021', 'kyrieshoe6.jpg'),
(19, 'Kyrie', 'Kyrie 1', '2014 debut of Kyries', 'kyrieshoe7.jpg'),
(20, 'Kyrie', 'Kyrie 2', '2015 second debut of Kyries', 'kyrieshoe8.jpg'),
(21, 'Kyrie', 'Kyrie 6', 'Kyrie 5 in 2016', 'kyrieshoe9.jpg'),
(22, 'Kyrie', 'Kyrie 5 Galaxy', 'Galaxy was released in 2018', 'kyrieshoe10.jpg'),
(23, 'Jordan', 'Air Jordan II', 'Second Air Jordan in 1986','jordanshoe2.jpg'),
(24, 'Jordan', 'Air Jordan III', 'Third Air Jordan in 1988', 'jordanshoe3.jpg'),
(25, 'Jordan', 'Air Jordan IV', 'Fourth Air Jordan in 1989', 'jordanshoe4.jpg'),
(26, 'Jordan', 'Air Jordan V', 'Fifth Air Jordan in 1990', 'jordanshoe5.jpg'),
(27, 'Jordan', 'Air Jordan VI', 'Sixth Air Jordan in 1991', 'jordanshoe6.jpg'),
(28, 'Jordan', 'Air Jordan VII', 'Seventh Air Jordan in 1992', 'jordanshoe7.jpg'),
(29, 'Jordan', 'Air Jordan VIII', '8th Air Jordan in 1993', 'jordanshoe8.jpg'),
(30, 'Jordan', 'Air Jordan IX', '9th Air Jordan in 1993', 'jordanshoe9.jpg'),
(31, 'Jordan', 'Air Jordan X', '10th Air Jordan in 1994', 'jordanshoe10.jpg'),
(32, 'Durant', 'KD2', '2nd KD in 2009', 'durantshoe2.jpg'),
(33, 'Durant', 'KD3', '3rd KD in 2010', 'durantshoe3.jpg'),
(34, 'Durant', 'KD4', '4th KD in 2011', 'durantshoe4.jpg'),
(35, 'Durant', 'KD5', '5th KD in 2012', 'durantshoe5.jpg'),
(36, 'Durant', 'KD6', '6th KD in 2013', 'durantshoe6.jpg'),
(37, 'Durant', 'KD7', '7th KD in 2014', 'durantshoe7.jpg'),
(38, 'Durant', 'KD8', '8th KD in 2015', 'durantshoe8.jpg'),
(39, 'Durant', 'KD9', '9th KD in 2016', 'durantshoe9.jpg'),
(40, 'Durant', 'KD10', '10th KD in 2017', 'durantshoe10.jpg'),
(41, 'Giannis', 'Air Zoom Freak 1', 'Debut shoe in 2019', 'giannisshoe1.jpg'),
(42, 'Giannis', 'Zoom Freak 2', 'Second Zoom Freak in 2020', 'giannisshoe2.jpg'),
(43, 'Giannis', 'Zoom Freak 3', 'Third Zoom Freak in 2021', 'giannisshoe3.jpg'),
(44, 'Giannis', 'Giannis Immortality', 'First Immortality in 2021', 'giannisshoe4.jpg'),
(45, 'Giannis', 'Zoom Freak 5', 'Fourth Zoom Freak in 2022', 'giannisshoe5.jpg'),
(46, 'Kobe', 'Zoom Kobe I', 'Debut Zoom Kobe in 2006', 'kobeshoe1.jpg'),
(47, 'Kobe', 'Zoom Kobe II', 'Second Zoom Kobe in 2007', 'kobeshoe2.jpg'),
(48, 'Kobe', 'Zoom Kobe III', 'Third Zoom Kobe in 2008', 'kobeshoe3.jpg'),
(49, 'Kobe', 'Zoom Kobe IV', '4th Zoom Kobe in 2008', 'kobeshoe4.jpg'),
(50, 'Kobe', 'Zoom Kobe V', '5th Zoom Kobe in 2009', 'kobeshoe5.jpg'),
(51, 'Kobe', 'Zoom Kobe VI', '6th Zoom Kobe in 2010', 'kobeshoe6.jpg'),
(52, 'Kobe', 'Zoom Kobe VII', '7th Zoom Kobe in 2011', 'kobeshoe7.jpg'),
(53, 'Kobe', 'Zoom Kobe VIII', '7th Zoom Kobe in 2012', 'kobeshoe8.jpg'),
(54, 'Kobe', 'Zoom Kobe 9', '9th Zoom Kobe in 2014', 'kobeshoe9.jpg'),
(55, 'Kobe', 'Zoom Kobe 10', '10th Zoom Kobe in 2015', 'kobeshoe10.jpg');




INSERT INTO Reviews VALUES 
(1, 1, 'TestReview1', 'Great Shoe', 5),
(2, 1, 'TestReview2', 'Bad Shoe', 1),
(3, 1, 'TestReview3', 'Okay', 3),
(4, 4, 'TestReview4', 'Best one', 5);
-- create the users and grant priveleges to those users


GRANT SELECT, INSERT, DELETE, UPDATE
ON PHP123.*
TO mgs_user@localhost
IDENTIFIED BY 'pa55word';

GRANT SELECT
ON Shoe
TO mgs_tester@localhost
IDENTIFIED BY 'pa55word';