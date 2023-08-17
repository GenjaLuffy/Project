CREATE TABLE IF NOT EXISTS `user_info` (
  `ID` int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Phone_no` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Confirm_Password` varchar(255) NOT NULL,
  `userimage` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
);

CREATE TABLE IF NOT EXISTS `user_roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `user_id` int(11) DEFAULT NULL,
  `user_role` varchar(20) NOT NULL,
  PRIMARY KEY (`role_id`),
  FOREIGN KEY (`user_id`) REFERENCES `user_info` (`ID`)
);

-- FOR ORDERS
CREATE TABLE IF NOT EXISTS orders(
  id INT AUTO_INCREMENT PRIMARY KEY,
  customer_id INT NOT NULL,
  user_id INT NOT NULL,
  product_id INT NOT NULL,
  product_detail VARCHAR(255) NOT NULL,
  product_qty INT NOT NULL,
  status VARCHAR(50) NOT NULL DEFAULT 'pending',
  FOREIGN KEY (customer_id) REFERENCES user_info(ID),
  FOREIGN KEY (product_id) REFERENCES items(id)
);

-- -- For items
CREATE TABLE IF NOT EXISTS items (
  id int(11) NOT NULL,
  item_name varchar(255) NOT NULL,
  image_path varchar(255) NOT NULL,
  delivery_mode varchar(255) DEFAULT NULL,
  delivery_time varchar(255) DEFAULT NULL,
  platform varchar(255) DEFAULT NULL,
  region varchar(255) DEFAULT NULL,
  publisher varchar(255) DEFAULT NULL,
  developer varchar(255) DEFAULT NULL,
  genre varchar(255) DEFAULT NULL,
  product_amount varchar(255) DEFAULT NULL,
  user_id varchar(255) DEFAULT NULL,
  zone_id varchar(255) DEFAULT NULL,
  quantity int(11) DEFAULT NULL
);

-- INSERT INTO items (item_name, image_path) VALUES ('PUBG Mobile UC', './assets/images/Pubg.png');
INSERT INTO items (id, item_name, image_path, delivery_mode, delivery_time, platform, region, publisher, developer, genre, product_amount, user_id, zone_id, quantity) VALUES
(1, 'PUBG Mobile UC', './assets/images/Pubg.png', 'VIA UID and Username', '30 min', 'Android , IOS', 'Global', 'Krafton', 'PUBG STUDIO', 'Battle Royale', NULL, NULL, NULL, NULL),
(2, 'Mobile Legend Diamond', './assets/images/ml.png', 'VIA UID and Username', '30 min', 'Android , IOS', 'Global', 'Moonton', 'Moonton', 'MMORPG', NULL, NULL, NULL, NULL),
(3, 'Free Fire Diamond', './assets/images/freefire.png', 'VIA UID and Username', '30 min', 'Android , IOS', 'Global', 'Garena ', 'Garena Free Fire', 'Battle Royale', NULL, NULL, NULL, NULL),
(4, 'Apex Legend Coins', './assets/images/apexlegend.png', 'VIA UID and Username', '30 min', 'Android , IOS', 'Global', 'Electronic Arts', 'Respawn Entertainment', 'Battle Royale', NULL, NULL, NULL, NULL),
(5, 'Clash of Clan Diamond', './assets/images/clashofclan.png', 'VIA UID and Username', '30 min', 'Android , IOS', 'Global', 'Supercell', 'Supercell', 'Real-time Strategy', NULL, NULL, NULL, NULL),
(6, 'Genshin Impact', './assets/images/GenshinImpact.png', 'VIA UID and Username', '30 min', 'Android , IOS', 'Global', 'miHoYo', 'miHoYo', 'RPG,Adventure Game', NULL, NULL, NULL, NULL),
(7, 'Pubg lite', './assets/images/pubglite.png', 'VIA UID and Username', '30 min', 'Android , IOS', 'Global', 'Tencent Games', 'PUBG STUDIO', 'Battle Royale', NULL, NULL, NULL, NULL),
(8, 'Honkai Impact', './assets/images/Honkai.png', 'VIA UID and Username', '30 min', 'Android , IOS', 'Global', 'miHoYo', 'miHoYo', 'RPG,Adventure Game', NULL, NULL, NULL, NULL),
(9, 'League of Legend', './assets/images/League.png', 'VIA UID and Username', '30 min', 'Android , IOS', 'Global', 'Riot Games', 'Riot Games', 'Multiplayer,Action RPG Game', NULL, NULL, NULL, NULL),
(10, 'Clash royale', './assets/images/clashr.png', 'VIA UID and Username', '30 min', 'Android , IOS', 'Global', 'Supercell', 'Supercell', 'Real-time Strategy', NULL, NULL, NULL, NULL),
(16, 'Call of Duty Mobile', './assets/images/cod.png', 'VIA UID and Username', '30 min', 'Android , IOS', 'Global', 'Activision', 'Infinity Ward', 'Battle Royale', NULL, NULL, NULL, NULL),
(17, 'E-football', './assets/images/efootball.jpg', 'VIA UID and Username', '30 min', 'Android , IOS', 'Global', 'Konami', 'PES Productions', 'Sports', NULL, NULL, NULL, NULL);