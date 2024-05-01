-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 09:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dropshipp`
--

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `coupon_id` varchar(14) NOT NULL,
  `description` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `active` int(1) NOT NULL DEFAULT 1 COMMENT '0,1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`coupon_id`, `description`, `date_created`, `active`) VALUES
('newuser12', '{\"description\":\"$5 off new user\",\"deduct\":\"5\"}', '2021-11-08 18:31:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `items_products`
--

CREATE TABLE `items_products` (
  `item_id` varchar(13) NOT NULL COMMENT '7 - 11\r\n',
  `item_title` text NOT NULL,
  `item_description` longtext NOT NULL COMMENT '[]',
  `item_images` text NOT NULL COMMENT '[]',
  `item_price` double(7,2) NOT NULL COMMENT '00.00',
  `item_on_sale` text NOT NULL DEFAULT '\'[]\'' COMMENT '{00.00, buy this get one}',
  `size` text DEFAULT NULL COMMENT '[]',
  `item_colors` text DEFAULT NULL COMMENT '[]',
  `item_tags` text NOT NULL COMMENT 'space',
  `item_fromstore` text NOT NULL COMMENT 'url',
  `item_dateadded` timestamp NOT NULL DEFAULT current_timestamp(),
  `item_howmanysold` int(11) NOT NULL DEFAULT 0,
  `item_starrating` text NOT NULL DEFAULT '\'{"1star":"1","2star":"0","3star":"26","4star":"4","5star":"26"}\'' COMMENT '{}'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items_products`
--

INSERT INTO `items_products` (`item_id`, `item_title`, `item_description`, `item_images`, `item_price`, `item_on_sale`, `size`, `item_colors`, `item_tags`, `item_fromstore`, `item_dateadded`, `item_howmanysold`, `item_starrating`) VALUES
('1443210186812', 'Wireless Racing Car Shaped Mouse', '{\n  \"Description\": \"This wireless mouse utilizes ABS environmental protection materials with a non-stick sweat, hygiene, and trendy appearance. It features Agilent chips for stable performance, long wireless distance up to 10 meters, and 2.4GHz wireless technology for dual channel transmission. With a durability of 45 million keystrokes, it offers three-speed adjustment resolution and ultra-high precision positioning. The intelligent induction transmitter ensures energy-saving by automatically shutting down during power cuts. The mouse comes with advanced packaging, suitable for both personal use and gifting.\",\n  \"Specifications\": {\n    \"Type\": \"Optical Mouse\",\n    \"Connection\": \"Wireless\",\n    \"Photoelectric Resolution\": \"1000 dpi\",\n    \"Number of Keys\": 3,\n    \"Interface\": \"USB\",\n    \"Wireless Transmission Frequency\": \"2.4GHz\",\n    \"Operating Distance\": \"10 meters\",\n    \"Package Included\": \"1 set of Car Wireless Mouse\"\n  }\n}', '[\"https://ae01.alicdn.com/kf/Se89e57e7cf3f45319f42080536ee2d99J/Racing-Car-Shaped-Mouse-USB-Optical-Wireless-Mouse-1600DPI-Mini-3D-Computer-Gaming-Mice-For-PC.jpg_.jpg_.webp\", \"https://ae01.alicdn.com/kf/S271356bf69d8424894e199f9c5926849w/Racing-Car-Shaped-Mouse-USB-Optical-Wireless-Mouse-1600DPI-Mini-3D-Computer-Gaming-Mice-For-PC.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/Sd3d02f91c66e456eb63fd0cbbc9398e9G/Racing-Car-Shaped-Mouse-USB-Optical-Wireless-Mouse-1600DPI-Mini-3D-Computer-Gaming-Mice-For-PC.jpg_.jpg_.webp\"]', 9.99, '[]', NULL, NULL, 'Wireless Mouse Optical ABS 2.4GHz Accessories Peripherals', 'https://www.aliexpress.us/item/3256806328403611.html', '2024-04-21 08:03:45', 0, '\'{\"1star\":\"1\",\"2star\":\"0\",\"3star\":\"26\",\"4star\":\"4\",\"5star\":\"26\"}\''),
('1714836465', 'E-Sports USB Wired Mouse Colorful LED Gaming Mouse 5000 DPI Wired Mice Optical Wired Gamer Mouse For Desktop Laptop PC Computer', '{\n  \"Description\": \"Wired gaming mouse, strong applicability, feel good. High-end sensors, the use of more stable, positioning and mobility has been greatly improved. Suitable for game enthusiasts, fashionable young, commercial office crowd, long time computer workers. Ergonomic design perfected for e-sports athletes, not feel tired during long time using. Cool LED breathing Light effect, decorate the gaming combat atmosphere. Suitable for all kinds of hand types and computers.\",\n   \n  \"Specifications\": {\"Type\": \"Wired gaming mouse\",\n    \"Operation Mode\": \"Opto-electronic\",\n    \"Connection\": \"USB2.0\",\n    \"Number of Buttons\": 3,\n    \"Resolution\": \"5000 DPI\",\n    \"Voltage/Current\": \"5V/100mA\",\n    \"Key life\": \"about 5 million times\",\n    \"Cable length\": \"1.4m\",\n    \"Light\": \"7 Colors breathing lights\",\n    \"Application\": \"For Desktop, Laptop, notebook\",\n    \"Color\": \"Black/White\",\n    \"Mouse Weight\": \"63g\",\n    \"Product size\": \"124*68*35mm\",\n    \"Hand Orientation\": \"Right\",\n    \"Package\": \"Yes\",\n    \"Style\": \"Backlight\"\n  }\n}', '[\"https://ae01.alicdn.com/kf/S277d3ccb114445fab415655875410ce32/E-Sports-USB-Wired-Mouse-Colorful-LED-Gaming-Mouse-5000-DPI-Wired-Mice-Optical-Wired-Gamer.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S17f1e48529bc43d1ba4a9d5b3d9fc5det/E-Sports-USB-Wired-Mouse-Colorful-LED-Gaming-Mouse-5000-DPI-Wired-Mice-Optical-Wired-Gamer.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S9e84ffacf50e431a8f514ed2478a25a3h/E-Sports-USB-Wired-Mouse-Colorful-LED-Gaming-Mouse-5000-DPI-Wired-Mice-Optical-Wired-Gamer.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S6541b4f7f0a64b0180da8bedeab1dd9bj/E-Sports-USB-Wired-Mouse-Colorful-LED-Gaming-Mouse-5000-DPI-Wired-Mice-Optical-Wired-Gamer.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S9e103ca99a514ec6ba6def88577217827/E-Sports-USB-Wired-Mouse-Colorful-LED-Gaming-Mouse-5000-DPI-Wired-Mice-Optical-Wired-Gamer.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S25e37964adcb45c29fc8fd81024ac097x/E-Sports-USB-Wired-Mouse-Colorful-LED-Gaming-Mouse-5000-DPI-Wired-Mice-Optical-Wired-Gamer.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S6a84ce50cc3f41c8a6a3d5977992064dL/E-Sports-USB-Wired-Mouse-Colorful-LED-Gaming-Mouse-5000-DPI-Wired-Mice-Optical-Wired-Gamer.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S2487d13f5fed45748d30a3fcd5a29da4h/E-Sports-USB-Wired-Mouse-Colorful-LED-Gaming-Mouse-5000-DPI-Wired-Mice-Optical-Wired-Gamer.jpg_.jpg_.webp\"]', 15.99, '[]', NULL, '', 'b', 'https://www.aliexpress.us/item/3256805083851954.html?spm=oneshop.search_products.0.0.47497f6bvIVCys&skuId=12000032431406941&gatewayAdapt=glo2usa4itemAdapt', '2024-04-16 19:40:42', 1, '{\"1star\":\"1\",\"2star\":\"0\",\"3star\":\"26\",\"4star\":\"4\",\"5star\":\"26\"}'),
('2627948511', 'Wired DeathAdder Mouse 6400DPI', '{\n  \"Description\": \"\",\n  \"Specifications\": {\n    \"Hand Orientation\": \"Right\",\n    \"Package\": \"Yes\",\n    \"DPI\": 6400,\n    \"Type\": \"WIRED\",\n    \"Brand Name\": \"Razer\",\n    \"Origin\": \"Mainland China\"\n  }\n}', '[\"https://ae01.alicdn.com/kf/S03bb229ad0bc40e8a166b82fb6ec6ae0c/Razer-DeathAdder-Essential-Wired-Gaming-Mouse-Mice-6400DPI-Optical-Sensor-5-Independently-Buttons-For-Laptop-PC.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/Scc3db5cc9ce34cc59c1c5136835e4c39Q/Razer-DeathAdder-Essential-Wired-Gaming-Mouse-Mice-6400DPI-Optical-Sensor-5-Independently-Buttons-For-Laptop-PC.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S1eeb516e90e94e94b2d96072af3a3fa2e/Razer-DeathAdder-Essential-Wired-Gaming-Mouse-Mice-6400DPI-Optical-Sensor-5-Independently-Buttons-For-Laptop-PC.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S291bd250b17c4cf595f50ea3b00de0abz/Razer-DeathAdder-Essential-Wired-Gaming-Mouse-Mice-6400DPI-Optical-Sensor-5-Independently-Buttons-For-Laptop-PC.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S1523b314b4c04c58afe5741a05f87f35B/Razer-DeathAdder-Essential-Wired-Gaming-Mouse-Mice-6400DPI-Optical-Sensor-5-Independently-Buttons-For-Laptop-PC.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S8f68ee12af4a4aaab86c5feaa59f758fw/Razer-DeathAdder-Essential-Wired-Gaming-Mouse-Mice-6400DPI-Optical-Sensor-5-Independently-Buttons-For-Laptop-PC.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/Sdfebe2c9b4e7448a9d50053a51c3e6bbq/Razer-DeathAdder-Essential-Wired-Gaming-Mouse-Mice-6400DPI-Optical-Sensor-5-Independently-Buttons-For-Laptop-PC.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S8f68ee12af4a4aaab86c5feaa59f758fw/Razer-DeathAdder-Essential-Wired-Gaming-Mouse-Mice-6400DPI-Optical-Sensor-5-Independently-Buttons-For-Laptop-PC.jpg_.jpg_.webp\"]', 24.99, '[]', NULL, '[\"https://ae01.alicdn.com/kf/Sdfebe2c9b4e7448a9d50053a51c3e6bbq/Razer-DeathAdder-Essential-Wired-Gaming-Mouse-Mice-6400DPI-Optical-Sensor-5-Independently-Buttons-For-Laptop-PC.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S8f68ee12af4a4aaab86c5feaa59f758fw/Razer-DeathAdder-Essential-Wired-Gaming-Mouse-Mice-6400DPI-Optical-Sensor-5-Independently-Buttons-For-Laptop-PC.jpg_.jpg_.webp\"]', 'deathAdder mouse Peripheral wired Accessories', 'https://www.aliexpress.us/item/3256806597285775.html?spm=a2g0o.store_pc_home.0.0.1a3c6a8eEwck4n&gps-id=pcStoreJustForYou&scm=1007.23125.137358.0&scm_id=1007.23125.137358.0&scm-url=1007.23125.137358.0&pvid=c1155439-c9e9-4e84-9905-19aa8b446fe6&_t=gps-id%3ApcStoreJustForYou%2Cscm-url%3A1007.23125.137358.0%2Cpvid%3Ac1155439-c9e9-4e84-9905-19aa8b446fe6%2Ctpp_buckets%3A668%232846%238111%231996&pdp_npi=4%40dis%21USD%2114.48%2110.86%21%21%21104.81%2178.61%21%40210324c817132711432525620e20aa%2112000038284009933%21rec%21US%212422724615%21AC&gatewayAdapt=glo2usa', '2024-04-16 19:45:19', 0, '{\"1star\":\"1\",\"2star\":\"0\",\"3star\":\"26\",\"4star\":\"4\",\"5star\":\"26\"}'),
('4165511427', 'Razer Viper Mini Gaming Mouse Ultra-Lightweight Design CHROMA RGB Light 8500 DPI Optail Sensor Mice Mouse Gamer Free Shipping', '{\n  \"Description\": \"The new version of Razer Viper Mini, does not support the original driver, plug and play, the pursuit of perfectionists carefully shoot\",\n  \"Specifications\": {\n    \"Form Factor\": \"False-Ambidextrous\",\n    \"Connectivity\": \"Wired - Razer™ Speedflex Cable\",\n    \"BatteryLife\": \"None\",\n    \"RGB Lighting\": \"Razer Chroma™ RGB Underglow\",\n    \"Sensor\": \"Optical\",\n    \"MAX Sensitivity(DPI)\": 8500,\n    \"MAX Speed(IPS)\": 300,\n    \"MAX Acceleration(G)\": 35,\n    \"ProgrammableButtons\": 6,\n    \"Switch Type\": \"Optical Switch\",\n    \"Lifecycle\": \"50 Million Clicks\",\n    \"On-Board MemoryProfiles\": 1,\n    \"Mouse Feet\": \"100% PTFE Mouse Feet\",\n    \"Cable\": \"Razer™ Speedflex Cable\",\n    \"Tili Scroll Wheel\": \"No\",\n    \"Sizes\": \"4.66\\\" x 2.11\\\" x 1.51\\\" (118.3 mm x 53.5 mm x 38.3 mm)\",\n    \"Weight\": \"0.13 lbs / 61 g\",\n    \"Dock Compatibility\": \"None\"\n  },\n  \"Features\": [\n    \"ULTRA-LIGHT. ULTRA-FAST. Born to push the very limits of ultra-lightweight gaming.\",\n    \"61G ULTRA-LIGHTWEIGHT DESIGN\",\n    \"RAZER™ OPTICAL MOUSE SWITCH\",\n    \"RAZER SPEEDFLEX CABLE\",\n    \"8500 DPI OPTICAL SENSOR\",\n    \"100% PTFE MOUSE FEET\",\n    \"6 PROGRAMMABLE BUTTONS\",\n    \"ON-BOARD MEMORY PROFILE\",\n    \"POWERED BY RAZER CHROMA™ RGB\"\n  ],\n  \"Package\": {\n    \"Front Package\": \"Pictures of The Real Product\",\n    \"Back Package\": \"Pictures of The Real Product\",\n    \"Razer Speedflex Cable\": \"Pictures of The Real Product\",\n    \"Right Side\": \"Pictures of The Real Product\",\n    \"Top\": \"Pictures of The Real Product\",\n    \"Wheels\": \"Pictures of The Real Product\",\n    \"Razer Logo\": \"Pictures of The Real Product\",\n    \"Bottom of the Mice\": \"Pictures of The Real Product\",\n    \"RGB Red Light Logo\": \"Pictures of The Real Product\",\n    \"RGB Green Light Logo\": \"Pictures of The Real Product\",\n    \"Package Includes\": \"Specifications\"\n  },\n  \"Movement speed\": 600,\n  \"Number of Buttons\": 2,\n  \"Number of Rollers\": 1,\n  \"Hand Orientation\": \"Right\",\n  \"Package\": \"Yes\",\n  \"Type\": \"WIRED\"\n}', '[\"https://ae01.alicdn.com/kf/S76326d3db6f94c6c808f7852903a28c0I/Razer-Viper-Mini-Gaming-Mouse-Ultra-Lightweight-Design-CHROMA-RGB-Light-8500-DPI-Optail-Sensor-Mice.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S15c72d359132411a83454f1b3b22d9e2U/Razer-Viper-Mini-Gaming-Mouse-Ultra-Lightweight-Design-CHROMA-RGB-Light-8500-DPI-Optail-Sensor-Mice.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S4b154820db4d4732811d369c3f06debcv/Razer-Viper-Mini-Gaming-Mouse-Ultra-Lightweight-Design-CHROMA-RGB-Light-8500-DPI-Optail-Sensor-Mice.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S821cd91ea0764280a655bf3d0e6d9b8bl/Razer-Viper-Mini-Gaming-Mouse-Ultra-Lightweight-Design-CHROMA-RGB-Light-8500-DPI-Optail-Sensor-Mice.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/Sa507152c2db24ca7ba83adc89e1893e43/Razer-Viper-Mini-Gaming-Mouse-Ultra-Lightweight-Design-CHROMA-RGB-Light-8500-DPI-Optail-Sensor-Mice.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/Saa4e6a953cd444f68c71f9278d544459g/Razer-Viper-Mini-Gaming-Mouse-Ultra-Lightweight-Design-CHROMA-RGB-Light-8500-DPI-Optail-Sensor-Mice.jpg_.jpg_.webp\"]', 31.99, '[]', NULL, NULL, 'b', 'https://www.aliexpress.us/item/3256806584345148.html?spm=oneshop.search_products.0.0.47497f6bvIVCys&skuId=12000038242452649&gatewayAdapt=glo2usa4itemAdapt', '2024-04-16 19:43:31', 0, '{\"1star\":\"1\",\"2star\":\"0\",\"3star\":\"26\",\"4star\":\"4\",\"5star\":\"26\"}'),
('893308642', 'Wired Strawberry Shaped Mouse', '{\n  \"Description\": \"Mouse Type: Mini Mouse\\nColor: Red\\nPointing Device Host Interface: USB\\nMouse Size: 978630MM\\nPower Supply: USB-powered\\nSystem Support: Windows 2000, Windows XP, Windows 7, Windows Vista, Windows 98, Mac OS, Windows ME, Windows 8\\nPackage Included: 1 Mini Mouse\",\n  \"Specifications\": {\n    \"Type\": \"4G\",\n    \"Brand Name\": \"DITIPOO\",\n    \"Origin\": \"Mainland China\"\n  }\n}', '[\"https://ae01.alicdn.com/kf/S0e3b7bdeba684bec815d9a70fa423e8fw/Creative-Girl-Gifts-Cartoon-Strawberry-Computer-Peripherals-800DPI-Computer-Mice-USB-Optical-3D-Strawberry-Mause-Wired.jpg_.webp\", \"https://ae01.alicdn.com/kf/Saa33ec2aab3c4078b0a33e891d93a3b4A/Creative-Girl-Gifts-Cartoon-Strawberry-Computer-Peripherals-800DPI-Computer-Mice-USB-Optical-3D-Strawberry-Mause-Wired.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/Sc580a9251e5a4a2683131ce34ab7a445m/Creative-Girl-Gifts-Cartoon-Strawberry-Computer-Peripherals-800DPI-Computer-Mice-USB-Optical-3D-Strawberry-Mause-Wired.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/Sca01d53a38954abc890f1a3996d766d7K/Creative-Girl-Gifts-Cartoon-Strawberry-Computer-Peripherals-800DPI-Computer-Mice-USB-Optical-3D-Strawberry-Mause-Wired.jpg_.jpg_.webp\"]', 12.99, '[]', NULL, NULL, 'mouse Peripheral wired Accessories', 'https://www.aliexpress.us/item/3256806663928126.html', '2024-04-21 07:39:19', 0, '\'{\"1star\":\"1\",\"2star\":\"0\",\"3star\":\"26\",\"4star\":\"4\",\"5star\":\"26\"}\''),
('8978634795089', 'Keyboard and Mouse Set with RGB Backlight, Wired Connection, Rubberized PC Keycaps', '{\n  \"Description\": \"Enhance your gaming experience with this ergonomic keyboard and mouse set. With its support for human engineering, it\'s specifically designed to provide comfort during long gaming sessions. The package includes both the keyboard and mouse, offering a seamless gaming solution. This ERGONOMIC set supports both Bluetooth and USB interfaces, providing versatility and ease of use. Elevate your gaming setup with the trusted brand name, WYMECT.\",\n  \"Specifications\": {\n    \"Supports Human Engineering\": \"Yes\",\n    \"Applicable Object\": \"For Game\",\n    \"Package\": \"Yes\",\n    \"Type\": \"ERGONOMIC\",\n    \"Interface\": \"Bluetooth, USB\",\n    \"Brand Name\": \"WYMECT\"\n  }\n}', '[\"https://ae01.alicdn.com/kf/S74cc6400959c4845b0e6ff3e6d1888369/Wired-Gaming-Keyboard-And-Mouse-RGB-Backlit-Keyboard-Rubber-PC-Keycaps-Keyboard-Mouse-Gamer-Gaming-Mouse.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/Sbf45b6836ae749299864c93b09155b2fu/Wired-Gaming-Keyboard-And-Mouse-RGB-Backlit-Keyboard-Rubber-PC-Keycaps-Keyboard-Mouse-Gamer-Gaming-Mouse.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/Sf49b563f621b482c92cee75f10b19b85K/Wired-Gaming-Keyboard-And-Mouse-RGB-Backlit-Keyboard-Rubber-PC-Keycaps-Keyboard-Mouse-Gamer-Gaming-Mouse.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/Sfb67cb0c948748fe8dd0579ea53e05bcg/Wired-Gaming-Keyboard-And-Mouse-RGB-Backlit-Keyboard-Rubber-PC-Keycaps-Keyboard-Mouse-Gamer-Gaming-Mouse.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S7f8aba4eaaa54ebfae951b92f449f3ce5/Wired-Gaming-Keyboard-And-Mouse-RGB-Backlit-Keyboard-Rubber-PC-Keycaps-Keyboard-Mouse-Gamer-Gaming-Mouse.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/See13afe60d9c4e388442b2f01ed05c69G/Wired-Gaming-Keyboard-And-Mouse-RGB-Backlit-Keyboard-Rubber-PC-Keycaps-Keyboard-Mouse-Gamer-Gaming-Mouse.jpg_.jpg_.webp\"]', 22.99, '[]', NULL, NULL, 'b', 'https://www.aliexpress.us/item/3256804094174437.html', '2024-04-16 12:27:51', 0, '{\"1star\":\"1\",\"2star\":\"0\",\"3star\":\"26\",\"4star\":\"4\",\"5star\":\"26\"}');

-- --------------------------------------------------------

--
-- Table structure for table `orders_made`
--

CREATE TABLE `orders_made` (
  `order_id` varchar(25) NOT NULL COMMENT 'int',
  `order_user_id` varchar(25) DEFAULT NULL COMMENT 'int: referenced if logged in',
  `order_email` text NOT NULL COMMENT 'e@e.e',
  `order_shipping_address` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT '{}',
  `payment_card` text DEFAULT NULL,
  `order_haspayed` int(1) DEFAULT 0 COMMENT '0,1',
  `order_cart_items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT '[{ itemcolor:"", itemname:"", itemquantity:"" }]	',
  `order_howmuchpaid` double DEFAULT NULL COMMENT '000.00',
  `order_tracker` text NOT NULL COMMENT '{}',
  `order_dateAdded` timestamp NOT NULL DEFAULT current_timestamp(),
  `order_tracker_last_updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_made`
--

INSERT INTO `orders_made` (`order_id`, `order_user_id`, `order_email`, `order_shipping_address`, `payment_card`, `order_haspayed`, `order_cart_items`, `order_howmuchpaid`, `order_tracker`, `order_dateAdded`, `order_tracker_last_updated`) VALUES
('45124587499867884354501', NULL, 'maryjcarder@armyspy.com', '{\"shippingEmail\":\"maryjcarder@armyspy.com\",\"shippingFname\":\"paula\",\"shippingLname\":\"kemperx\",\"shippingStreet\":\"2162 Stanley Avenue\",\"shippingApt\":\"2352\",\"shippingCity\":\"Garden City\",\"shippingState\":\"NY\",\"shippingZipPostal\":\"11530\",\"shippingCountry\":\"US\",\"shippingPhonel\":\"51645238638\"}', NULL, 1, '[{\"productid\":\"1714836465\",\"productcolor\":\"https://ae01.alicdn.com/kf/S277d3ccb114445fab415655875410ce32/E-Sports-USB-Wired-Mouse-Colorful-LED-Gaming-Mouse-5000-DPI-Wired-Mice-Optical-Wired-Gamer.jpg_.jpg_.webp\",\"producttitle\":\"E-Sports USB Wired Mouse Colorful LED Gaming Mouse 5000 DPI Wired Mice Optical Wired Gamer Mouse For Desktop Laptop PC Computer\",\"productquantity\":\"1\"}]', 15.99, '', '2024-05-01 08:13:43', '2024-05-01 18:55:27'),
('84354679520202124668681', NULL, 'winstonjtaylor@jourrapide.com', '{\"shippingEmail\":\"winstonjtaylor@jourrapide.com\",\"shippingFname\":\"winston\",\"shippingLname\":\"taylor\",\"shippingStreet\":\"2031 Green Acres Road\",\"shippingApt\":\"\",\"shippingCity\":\"Rocky Mount\",\"shippingState\":\"NC\",\"shippingZipPostal\":\"27801\",\"shippingPhonel\":\"2523874670\"}', NULL, 1, '[{\"productid\":\"2627948511\",\"productcolor\":\"https://ae01.alicdn.com/kf/S8f68ee12af4a4aaab86c5feaa59f758fw/Razer-DeathAdder-Essential-Wired-Gaming-Mouse-Mice-6400DPI-Optical-Sensor-5-Independently-Buttons-For-Laptop-PC.jpg_.jpg_.webp\",\"producttitle\":\"Wired DeathAdder Mouse 6400DPI\",\"productquantity\":\"1\"},{\"productid\":\"1714836465\",\"productcolor\":\"https://ae01.alicdn.com/kf/S277d3ccb114445fab415655875410ce32/E-Sports-USB-Wired-Mouse-Colorful-LED-Gaming-Mouse-5000-DPI-Wired-Mice-Optical-Wired-Gamer.jpg_.jpg_.webp\",\"producttitle\":\"E-Sports USB Wired Mouse Colorful LED Gaming Mouse 5000 DPI Wired Mice Optical Wired Gamer Mouse For Desktop Laptop PC Computer\",\"productquantity\":\"1\"}]', 47.97, '', '2024-04-23 08:24:38', '2024-05-01 18:55:27'),
('91524674846398201461778', NULL, 'maryjcarder@armyspy.com', '{\"shippingEmail\":\"maryjcarder@armyspy.com\",\"shippingStreet\":\"2162 Stanley Avenue\",\"shippingApt\":\"2352\",\"shippingCity\":\"Garden City\",\"shippingState\":\"NY\",\"shippingZipPostal\":\"11530\",\"shippingCountry\":\"AM\",\"shippingFname\":\"paula\",\"shippingLname\":\"kemper\",\"shippingPhonel\":\"5164523863\"}', NULL, 0, '[]', 0, '', '2024-04-29 11:15:23', '2024-05-01 18:55:27');

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `user_id` varchar(25) NOT NULL,
  `user_email` text NOT NULL COMMENT 'e@e.e',
  `user_password` varchar(32) NOT NULL COMMENT '\\u2315?>c#7@&8*`',
  `user_firstlastname_phone` text DEFAULT NULL COMMENT '{"first":"", "last":"", "phone":""}',
  `user_address` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '{"shippingStreet":"","shippingApt":"","shippingCity":"","shippingState":"","shippingZipPostal":"","shippingEmail":"","shippingFname":"","shippingLname":"","shippingPhonel":""}' CHECK (json_valid(`user_address`)),
  `user_wishlist` text NOT NULL COMMENT 'space',
  `user_points` int(10) NOT NULL DEFAULT 0 COMMENT '100pts=$10\r\n\r\nexplode(".",($pprice/3))[0]',
  `user_premium` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`user_id`, `user_email`, `user_password`, `user_firstlastname_phone`, `user_address`, `user_wishlist`, `user_points`, `user_premium`) VALUES
('1234564', 'toballz@yahoo.com', '1ad97fb12fd5ae0a62d23f6900de4acd', '{\"first\":\"paula\",\"last\":\"kemperx\",\"phone\":\"51645238638\"}', '{\"shippingEmail\":\"maryjcarder@armyspy.com\",\"shippingStreet\":\"2162 Stanley Avenue\",\"shippingApt\":\"2352\",\"shippingCity\":\"Garden City\",\"shippingState\":\"NY\",\"shippingZipPostal\":\"11530\",\"shippingCountry\":\"US\"}', '087c7c2d6f7 214c42ee538 48c9d4e1c7b 767b894a00a 59aeabb03fd 895d3cc59a8 d5dcbe20f84 ', 99, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `items_products`
--
ALTER TABLE `items_products`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orders_made`
--
ALTER TABLE `orders_made`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`user_email`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
