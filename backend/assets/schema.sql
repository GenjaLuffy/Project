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



-- -- SIngle item

-- -- Create the database
-- CREATE DATABASE single_item;

-- -- Switch to the newly created database
-- USE your_database_name;

-- -- Create the items table
-- CREATE TABLE items (
--   id INT PRIMARY KEY AUTO_INCREMENT,
--   item_name VARCHAR(255) NOT NULL,
--   delivery_mode VARCHAR(255) NOT NULL,
--   delivery_time INT NOT NULL,
--   platform VARCHAR(255) NOT NULL,
--   region VARCHAR(255) NOT NULL,
--   publisher VARCHAR(255) NOT NULL,
--   developer VARCHAR(255) NOT NULL,
--   genres VARCHAR(255) NOT NULL,
--   image_path VARCHAR(255) NOT NULL
-- );

-- -- Insert data into the items table
-- INSERT INTO items (item_name, delivery_mode, delivery_time, platform, region, publisher, developer, genres, image_path)
-- VALUES ('Mobile Legend Diamonds', 'VIA UID and Username', 30, 'Android, IOS', 'Global', 'Moontoon', 'Moontoon', 'MMO', 'assets/images/img.jpg');
