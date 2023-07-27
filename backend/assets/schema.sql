CREATE TABLE `user_info` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Phone_no` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Confirm_Password` varchar(255) NOT NULL,
  `userimage` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
);

CREATE TABLE `user_roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `user_role` varchar(20) NOT NULL,
  PRIMARY KEY (`role_id`),
  FOREIGN KEY (`user_id`) REFERENCES `user_info` (`ID`)
);


-- -- For image
CREATE TABLE items (
 id INT PRIMARY KEY AUTO_INCREMENT,
   item_name VARCHAR(255) NOT NULL,
   image_path VARCHAR(255) NOT NULL
 );
-- INSERT INTO items (item_name, image_path) VALUES ('PUBG Mobile UC', './assets/images/Pubg.png');



