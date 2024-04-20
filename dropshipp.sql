-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2024 at 12:26 PM
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
  `item_howmanysold` int(99) NOT NULL DEFAULT 0,
  `item_starrating` text NOT NULL DEFAULT '\'{"1star":"1","2star":"0","3star":"26","4star":"4","5star":"26"}\'' COMMENT '{}'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items_products`
--

INSERT INTO `items_products` (`item_id`, `item_title`, `item_description`, `item_images`, `item_price`, `item_on_sale`, `size`, `item_colors`, `item_tags`, `item_fromstore`, `item_dateadded`, `item_howmanysold`, `item_starrating`) VALUES
('11111200690', 'Keyboard and Mouse Set with RGB Backlight, Wired Connection, Rubberized PC Keycaps', 'Description:\r\n\r\nEnhance your gaming experience with this ergonomic keyboard and mouse set. With its support for human engineering, it\'s specifically designed to provide comfort during long gaming sessions. The package includes both the keyboard and mouse, offering a seamless gaming solution. This ERGONOMIC set supports both Bluetooth and USB interfaces, providing versatility and ease of use. Elevate your gaming setup with the trusted brand name, WYMECT.\r\n\r\nSpecifications:\r\n\r\nSupports Human Engineering: Yes\r\nApplicable Object: For Game\r\nPackage: Yes\r\nType: ERGONOMIC\r\nInterface: Bluetooth, USB\r\nBrand Name: WYMECT', '[\"https://ae01.alicdn.com/kf/S74cc6400959c4845b0e6ff3e6d1888369/Wired-Gaming-Keyboard-And-Mouse-RGB-Backlit-Keyboard-Rubber-PC-Keycaps-Keyboard-Mouse-Gamer-Gaming-Mouse.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/Sbf45b6836ae749299864c93b09155b2fu/Wired-Gaming-Keyboard-And-Mouse-RGB-Backlit-Keyboard-Rubber-PC-Keycaps-Keyboard-Mouse-Gamer-Gaming-Mouse.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/Sf49b563f621b482c92cee75f10b19b85K/Wired-Gaming-Keyboard-And-Mouse-RGB-Backlit-Keyboard-Rubber-PC-Keycaps-Keyboard-Mouse-Gamer-Gaming-Mouse.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/Sfb67cb0c948748fe8dd0579ea53e05bcg/Wired-Gaming-Keyboard-And-Mouse-RGB-Backlit-Keyboard-Rubber-PC-Keycaps-Keyboard-Mouse-Gamer-Gaming-Mouse.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S7f8aba4eaaa54ebfae951b92f449f3ce5/Wired-Gaming-Keyboard-And-Mouse-RGB-Backlit-Keyboard-Rubber-PC-Keycaps-Keyboard-Mouse-Gamer-Gaming-Mouse.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/See13afe60d9c4e388442b2f01ed05c69G/Wired-Gaming-Keyboard-And-Mouse-RGB-Backlit-Keyboard-Rubber-PC-Keycaps-Keyboard-Mouse-Gamer-Gaming-Mouse.jpg_.jpg_.webp\"]', 22.99, '[]', NULL, '', 'b', 'https://www.aliexpress.us/item/3256804094174437.html', '2024-04-16 12:27:51', 0, '{\"1star\":\"1\",\"2star\":\"0\",\"3star\":\"26\",\"4star\":\"4\",\"5star\":\"26\"}'),
('11111732462', 'Multi-Port USB 2.0 Hub with LED Lamp Switch', 'Product Name: USB 2.0 High-Speed Hub with 4/7 Port Switch\n\nProduct Model: 2.0 Splitter\n\nProduct Interface: Features USB 2.0 B-Type Male Port, DC Power Supply, and USB 2.0 A-Type Female Port\n\nProduct Material: Crafted from Plastic\n\nProduct Color: Available in Black or White\n\nProduct Dimensions: Measures L105W16H22mm\n\nProduct Weight: Weighs 80g\n\nSystem Support: Compatible with Windows XP/Vista/7/8 and MAC systems with USB support\n\nFeatures:\n\nCompact and Lightweight, Convenient for Portability\n\nScenario:\n\nWhen your notebook only has two USB ports, it\'s inconvenient to use a USB flash drive alongside a mouse and camera. A USB hub solves this problem efficiently.\n\nDesktop computers often have USB ports located at the back, making it cumbersome to bend over to plug or unplug devices. Connecting a USB hub to the back allows easy access to USB devices right in front of the host.\n\nWith this 4 Port USB Hub, you\'ll never worry about overcrowded USB ports again. Its sleek design and separate USB sockets prevent larger devices from crowding each other, ensuring practicality and convenience.\n\nPackage Includes:\n\n1 USB 2.0 High-Speed Hub', '[\"https://ae01.alicdn.com/kf/S7c2145e2079443368266f09d639690ddT/High-Speed-4-7-Ports-USB-HUB-2-0-Adapter-Expander-Multi-USB-Splitter-Multiple-Extender.jpg_.webp\",\"https://ae01.alicdn.com/kf/S12fa3a80c1124babaf309dbfe59addc0L/High-Speed-4-7-Ports-USB-HUB-2-0-Adapter-Expander-Multi-USB-Splitter-Multiple-Extender.jpg_.webp\",\"https://ae01.alicdn.com/kf/Sbce9fd01c9f746af9ca97d0aba1b6522u/High-Speed-4-7-Ports-USB-HUB-2-0-Adapter-Expander-Multi-USB-Splitter-Multiple-Extender.jpg_.webp\"\n]', 16.99, '[]', NULL, '[\"https://ae01.alicdn.com/kf/Scad4dfca6a274c55b07ca1c7c146a5abZ/High-Speed-4-7-Ports-USB-HUB-2-0-Adapter-Expander-Multi-USB-Splitter-Multiple-Extender.jpg_80x80.jpg_.webp\",\"https://ae01.alicdn.com/kf/Sff669eb99fbb49b7a80a787c79f88f00M/High-Speed-4-7-Ports-USB-HUB-2-0-Adapter-Expander-Multi-USB-Splitter-Multiple-Extender.jpg_640x640.jpg_.webp\"\n\n]', '', 'https://www.aliexpress.us/item/3256804999195214.html', '2024-04-11 13:25:51', 0, '{\"1star\":\"1\",\"2star\":\"0\",\"3star\":\"26\",\"4star\":\"4\",\"5star\":\"26\"}'),
('1714836465', 'E-Sports USB Wired Mouse Colorful LED Gaming Mouse 5000 DPI Wired Mice Optical Wired Gamer Mouse For Desktop Laptop PC Computer', 'Description\r\nFeatures: Type:Wired gaming mouse Operation Mode:Opto-electronic Connection:USB2.0 Number of Buttons:3 Resolution:5000 DPI Voltage/Current:5V/100mA Key life:about 5 million times Cable length:1.4m Light:7 Colors breathing lights Application:For Desktop, Laptop,notebook Color:Black/White Mouse Weight:63g Product size:124*68*35mm Description: 1.Wired gaming mouse, strong applicability, feel good. 2.High-end sensors, the use of more stable, positioning and mobility has been greatly improved. 3.Suitable for game enthusiasts, fashionable young, commercial office crowd, long time computer workers. 4.Ergonomic design perfected for e-sports athletes, not feel tired during long time using. 5.Cool LED breathing Light effect, decorate the gaming combat atmosphere. 6.Suitable for all kinds of the hand type and computer.\r\nSpecifications\r\nOperation ModeOpto-electronicPower TypeRECHARGEABLENumber of Buttons3Hand OrientationRightPackageYesStyleBacklight', '[\"https://ae01.alicdn.com/kf/S277d3ccb114445fab415655875410ce32/E-Sports-USB-Wired-Mouse-Colorful-LED-Gaming-Mouse-5000-DPI-Wired-Mice-Optical-Wired-Gamer.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S17f1e48529bc43d1ba4a9d5b3d9fc5det/E-Sports-USB-Wired-Mouse-Colorful-LED-Gaming-Mouse-5000-DPI-Wired-Mice-Optical-Wired-Gamer.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S9e84ffacf50e431a8f514ed2478a25a3h/E-Sports-USB-Wired-Mouse-Colorful-LED-Gaming-Mouse-5000-DPI-Wired-Mice-Optical-Wired-Gamer.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S6541b4f7f0a64b0180da8bedeab1dd9bj/E-Sports-USB-Wired-Mouse-Colorful-LED-Gaming-Mouse-5000-DPI-Wired-Mice-Optical-Wired-Gamer.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S9e103ca99a514ec6ba6def88577217827/E-Sports-USB-Wired-Mouse-Colorful-LED-Gaming-Mouse-5000-DPI-Wired-Mice-Optical-Wired-Gamer.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S25e37964adcb45c29fc8fd81024ac097x/E-Sports-USB-Wired-Mouse-Colorful-LED-Gaming-Mouse-5000-DPI-Wired-Mice-Optical-Wired-Gamer.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S6a84ce50cc3f41c8a6a3d5977992064dL/E-Sports-USB-Wired-Mouse-Colorful-LED-Gaming-Mouse-5000-DPI-Wired-Mice-Optical-Wired-Gamer.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S2487d13f5fed45748d30a3fcd5a29da4h/E-Sports-USB-Wired-Mouse-Colorful-LED-Gaming-Mouse-5000-DPI-Wired-Mice-Optical-Wired-Gamer.jpg_.jpg_.webp\"]', 15.99, '[]', NULL, '', 'b', 'https://www.aliexpress.us/item/3256805083851954.html?spm=oneshop.search_products.0.0.47497f6bvIVCys&skuId=12000032431406941&gatewayAdapt=glo2usa4itemAdapt', '2024-04-16 19:40:42', 0, '{\"1star\":\"1\",\"2star\":\"0\",\"3star\":\"26\",\"4star\":\"4\",\"5star\":\"26\"}'),
('2627948511', 'Razer DeathAdder Essential Wired Gaming Mouse Mice 6400DPI Optical Sensor 5 Independently Buttons For Laptop PC Gamer', 'Description\r\n\r\nSpecifications\r\nHand OrientationRightPackageYesDPI6400TypeWIREDBrand NameRazerOriginMainland China', '[\"https://ae01.alicdn.com/kf/S03bb229ad0bc40e8a166b82fb6ec6ae0c/Razer-DeathAdder-Essential-Wired-Gaming-Mouse-Mice-6400DPI-Optical-Sensor-5-Independently-Buttons-For-Laptop-PC.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/Scc3db5cc9ce34cc59c1c5136835e4c39Q/Razer-DeathAdder-Essential-Wired-Gaming-Mouse-Mice-6400DPI-Optical-Sensor-5-Independently-Buttons-For-Laptop-PC.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S1eeb516e90e94e94b2d96072af3a3fa2e/Razer-DeathAdder-Essential-Wired-Gaming-Mouse-Mice-6400DPI-Optical-Sensor-5-Independently-Buttons-For-Laptop-PC.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S291bd250b17c4cf595f50ea3b00de0abz/Razer-DeathAdder-Essential-Wired-Gaming-Mouse-Mice-6400DPI-Optical-Sensor-5-Independently-Buttons-For-Laptop-PC.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S1523b314b4c04c58afe5741a05f87f35B/Razer-DeathAdder-Essential-Wired-Gaming-Mouse-Mice-6400DPI-Optical-Sensor-5-Independently-Buttons-For-Laptop-PC.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S8f68ee12af4a4aaab86c5feaa59f758fw/Razer-DeathAdder-Essential-Wired-Gaming-Mouse-Mice-6400DPI-Optical-Sensor-5-Independently-Buttons-For-Laptop-PC.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/Sdfebe2c9b4e7448a9d50053a51c3e6bbq/Razer-DeathAdder-Essential-Wired-Gaming-Mouse-Mice-6400DPI-Optical-Sensor-5-Independently-Buttons-For-Laptop-PC.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S8f68ee12af4a4aaab86c5feaa59f758fw/Razer-DeathAdder-Essential-Wired-Gaming-Mouse-Mice-6400DPI-Optical-Sensor-5-Independently-Buttons-For-Laptop-PC.jpg_.jpg_.webp\"]', 24.99, '[]', NULL, '[\"https://ae01.alicdn.com/kf/Sdfebe2c9b4e7448a9d50053a51c3e6bbq/Razer-DeathAdder-Essential-Wired-Gaming-Mouse-Mice-6400DPI-Optical-Sensor-5-Independently-Buttons-For-Laptop-PC.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S8f68ee12af4a4aaab86c5feaa59f758fw/Razer-DeathAdder-Essential-Wired-Gaming-Mouse-Mice-6400DPI-Optical-Sensor-5-Independently-Buttons-For-Laptop-PC.jpg_.jpg_.webp\"]', 'b', 'https://www.aliexpress.us/item/3256806597285775.html?spm=a2g0o.store_pc_home.0.0.1a3c6a8eEwck4n&gps-id=pcStoreJustForYou&scm=1007.23125.137358.0&scm_id=1007.23125.137358.0&scm-url=1007.23125.137358.0&pvid=c1155439-c9e9-4e84-9905-19aa8b446fe6&_t=gps-id%3ApcStoreJustForYou%2Cscm-url%3A1007.23125.137358.0%2Cpvid%3Ac1155439-c9e9-4e84-9905-19aa8b446fe6%2Ctpp_buckets%3A668%232846%238111%231996&pdp_npi=4%40dis%21USD%2114.48%2110.86%21%21%21104.81%2178.61%21%40210324c817132711432525620e20aa%2112000038284009933%21rec%21US%212422724615%21AC&gatewayAdapt=glo2usa', '2024-04-16 19:45:19', 0, '{\"1star\":\"1\",\"2star\":\"0\",\"3star\":\"26\",\"4star\":\"4\",\"5star\":\"26\"}'),
('4165511427', 'Razer Viper Mini Gaming Mouse Ultra-Lightweight Design CHROMA RGB Light 8500 DPI Optail Sensor Mice Mouse Gamer Free Shipping', 'Description\r\n\r\n\r\n\r\nThe new version of Razer Viper Mini , does not support the original driver, plug and play, the pursuit of perfectionists carefully shoot\r\n\r\n\r\nTECH SPECS\r\n\r\nForm Factor :False-Ambidextrous\r\n\r\nConnectivity : Wired - Razer™ Speedflex Cable\r\n\r\nBatteryLife : None\r\n\r\nRGB Lighting : Razer Chroma™ RGB Underglow\r\n\r\nSensor : Optical\r\n\r\nMAX Sensitivity(DPI): 8500\r\n\r\nMAX Speed(IPS): 300\r\n\r\nMAX Acceleration(G):35\r\n\r\nProgrammableButtons : 6\r\n\r\nSwitch Type : Optical\r\n\r\nSwitch Lifecycle : 50 Million Clicks\r\n\r\nOn-Board MemoryProfiles : 1\r\n\r\nMouse Feet : 100% PTFE Mouse Feet\r\n\r\nCable : Razer™ Speedflex Cable\r\n\r\nTili Scroll Wheel : No\r\n\r\nSizes : Length x Grip Width x Height\r\n\r\n            4.66\" x 2.11\" x 1.51\"\r\n\r\n            118.3 mm x 53.5 mm x 38.3 mm\r\n\r\nWeight : 0.13 lbs / 61 g\r\n\r\nDock Compatibility : None\r\n\r\n\r\n\r\nULTRA-LIGHT. ULTRA-FAST.\r\n\r\nBorn to push the very limits of ultra-lightweight gaming, the Razer Viper Mini takes up a smaller form that remains just as big in performance. Shortening its length and grip width, we\'ve worked with enthusiasts and esports athletes to hone its design even further, ensuring that absolute control now belongs in the hands of more gamers-so take hold of our leanest and lightest gaming mouse yet.\r\n\r\n\r\n\r\n61G ULTRA-LIGHTWEIGHT DESIGN\r\n\r\nThe ambidextrous chassis has shaved off more weight, so you can enjoy even swifter swipes, yet remains as durable and solid as ever. Recommended for gamers with small to medium hand sizes, this ultra-lightweight gaming mouse is best suited for those who favor claw or fingertip grip styles.\r\n\r\n\r\n\r\nRAZER™ OPTICAL MOUSE SWITCH\r\n\r\nUtilizing an infrared light beam to register every click, the switches in this light gaming mouse actuate with an industry-leading response time of 0.2 milliseconds. Because it no longer requires traditional physical contact, this form of actuation removes the need for debounce delay and never triggers unintended clicks, giving you closer control and flawless execution.\r\n\r\n\r\n\r\nRAZER SPEEDFLEX CABLE\r\n\r\nThe Razer Viper Mini\'s cable has greater flexibility and is designed to produce minimal drag, so that you can perform quicker, more fluid swipes for a higher degree of control.\r\n\r\n\r\n\r\n8500 DPI OPTICAL SENSOR\r\n\r\nWith a sensor that flawlessly tracks your movement with zero spinouts, you can expect nothing but pixel-precise accuracy that\'s sharp and responsive.\r\n\r\n\r\n\r\n100% PTFE MOUSE FEET\r\n\r\nEnjoy slick mouse movement across any surface with mouse feet made from the purest, highest grade of PTFE-a material used to coat non-stick pans.\r\n\r\n\r\n\r\n6 PROGRAMMABLE BUTTONS\r\n\r\nFully configurable via Razer Synapse 3, the mouse has 2 side buttons on its left and one next to the scroll wheel, giving you access to macros and secondary functions so every action can be executed with ease.\r\n\r\n\r\n\r\nON-BOARD MEMORY PROFILE\r\n\r\nAccess your custom DPI settings, button configs and more without the need for software installed once you have your favorite profile saved via Razer Synapse 3.\r\n\r\n\r\n\r\nPOWERED BY RAZER\r\n\r\nCHROMA™ RGB\r\n\r\nWith 16.8 million colors, countless patterns, dynamic in-game lighting effects-experience full RGB customization and deeper immersion with the world\'s largest lighting ecosystem for gaming devices. Supporting a growing list of thousands of devices and hundreds of games & applications, take it to the next level with advanced features such as Chroma Studio, Visualizer, Connect and Workshop.\r\n\r\n\r\n\r\n\r\n\r\n \r\n\r\n\r\n\r\nPictures of The Real Product-Front Package\r\n\r\nPictures of The Real Product-Back PackagePictures of The Real Product-Razer Speedflex Cable\r\n\r\n\r\n\r\n\r\nPictures of The Real Product-Right Side\r\n\r\nPictures of The Real Product-Top\r\n\r\n\r\n\r\nPictures of The Real Product-Wheels\r\n\r\n\r\n \r\n\r\nPictures of The Real Product-Razer Logo\r\n\r\n\r\n\r\nPictures of The Real Product-Bottom of the Mice\r\n\r\n\r\n\r\nPictures of The Real Product-RGB Red Light Logo\r\n\r\n\r\n\r\nPictures of The Real Product-RGB Green Light Logo\r\n\r\n\r\n\r\nPictures of The Real Product-Package Includes\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nSpecifications\r\nMovement speed, IPS600Number of Buttons2Number of Rollers1 pcsHand OrientationRightPackageYesTypeWIRED', '[\"https://ae01.alicdn.com/kf/S76326d3db6f94c6c808f7852903a28c0I/Razer-Viper-Mini-Gaming-Mouse-Ultra-Lightweight-Design-CHROMA-RGB-Light-8500-DPI-Optail-Sensor-Mice.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S15c72d359132411a83454f1b3b22d9e2U/Razer-Viper-Mini-Gaming-Mouse-Ultra-Lightweight-Design-CHROMA-RGB-Light-8500-DPI-Optail-Sensor-Mice.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S4b154820db4d4732811d369c3f06debcv/Razer-Viper-Mini-Gaming-Mouse-Ultra-Lightweight-Design-CHROMA-RGB-Light-8500-DPI-Optail-Sensor-Mice.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/S821cd91ea0764280a655bf3d0e6d9b8bl/Razer-Viper-Mini-Gaming-Mouse-Ultra-Lightweight-Design-CHROMA-RGB-Light-8500-DPI-Optail-Sensor-Mice.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/Sa507152c2db24ca7ba83adc89e1893e43/Razer-Viper-Mini-Gaming-Mouse-Ultra-Lightweight-Design-CHROMA-RGB-Light-8500-DPI-Optail-Sensor-Mice.jpg_.jpg_.webp\",\"https://ae01.alicdn.com/kf/Saa4e6a953cd444f68c71f9278d544459g/Razer-Viper-Mini-Gaming-Mouse-Ultra-Lightweight-Design-CHROMA-RGB-Light-8500-DPI-Optail-Sensor-Mice.jpg_.jpg_.webp\"]', 31.99, '[]', NULL, NULL, 'b', 'https://www.aliexpress.us/item/3256806584345148.html?spm=oneshop.search_products.0.0.47497f6bvIVCys&skuId=12000038242452649&gatewayAdapt=glo2usa4itemAdapt', '2024-04-16 19:43:31', 0, '{\"1star\":\"1\",\"2star\":\"0\",\"3star\":\"26\",\"4star\":\"4\",\"5star\":\"26\"}');

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
  `order_dateAdded` timestamp NOT NULL DEFAULT current_timestamp(),
  `order_tracker` text NOT NULL COMMENT '{}'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_made`
--

INSERT INTO `orders_made` (`order_id`, `order_user_id`, `order_email`, `order_shipping_address`, `payment_card`, `order_haspayed`, `order_cart_items`, `order_howmuchpaid`, `order_dateAdded`, `order_tracker`) VALUES
('1465273798049734521725569', NULL, 'jerrikmowall@trwgs.com', '{\"shippingEmail\":\"jerrikmowall@TRWgs.com\",\"shippingFname\":\"thdgjfhg\",\"shippingLname\":\"dfgsfdhgkjh\",\"shippingStreet\":\"1352 yrjhkgjhkjfkhdj hgd\",\"shippingApt\":\"4352\",\"shippingCity\":\"tyweutrjfhm\",\"shippingState\":\"324635y7utrjh\",\"shippingZipPostal\":\"3ytrjhgmn\",\"shippingPhonel\":\"3524635746576\"}', NULL, 0, '[{\"productid\":\"11111732462\",\"productcolor\":\"https://ae01.alicdn.com/kf/Sff669eb99fbb49b7a80a787c79f88f00M/High-Speed-4-7-Ports-USB-HUB-2-0-Adapter-Expander-Multi-USB-Splitter-Multiple-Extender.jpg_640x640.jpg_.webp\",\"producttitle\":\"Multi-Port USB 2.0 Hub with LED Lamp Switch\",\"productquantity\":\"1\"}]', 26.98, '2024-04-20 08:32:16', ''),
('16297326924', NULL, 'toballz@yAHOO.COM', '{\"shippingEmail\":\"toballz@yAHOO.COM\",\"shippingFname\":\"gh cvbv\",\"shippingLname\":\"gfxcgfh\",\"shippingStreet\":\"125 C Friendly Dr\",\"shippingApt\":\"\",\"shippingCity\":\"Hampton\",\"shippingState\":\"Idaho\",\"shippingZipPostal\":\"23605\",\"shippingPhonel\":\"8649493737\"}', NULL, 1, '{\"1\":{\"productid\":\"111113352\",\"productcolor\":\"https://ae01.alicdn.com/kf/S2ca4041fc6654dacabbc5484e3d738b96/luetooth-5-1-Gaming-Headsets-Gamer-Wireless-Headphones-With-Noise-Cancelling-Microphone-Wired-Earphone-For-Phone.jpg_640x640.jpg_.webp\",\"producttitle\":\"Wireless Gaming Headset with Bluetooth 5.1, Noise-Canceling Microphone, and Wired Earphone Option - Perfect for Phone Gaming\",\"productquantity\":\"1\"}}', 30.98, '2024-04-19 13:08:00', ''),
('3681608333375427970345', NULL, 'toballz@yahoo.com', '{\"shippingEmail\":\"toballz@yAHOO.COM\",\"shippingFname\":\"gh cvbv\",\"shippingLname\":\"gfxcgfh\",\"shippingStreet\":\"125 C Friendly Dr\",\"shippingApt\":\"\",\"shippingCity\":\"Hampton\",\"shippingState\":\"Idaho\",\"shippingZipPostal\":\"23605\",\"shippingPhonel\":\"8649493737\"}', NULL, 1, '[{\"productid\":\"11111200690\",\"productcolor\":\"https://ae01.alicdn.com/kf/S74cc6400959c4845b0e6ff3e6d1888369/Wired-Gaming-Keyboard-And-Mouse-RGB-Backlit-Keyboard-Rubber-PC-Keycaps-Keyboard-Mouse-Gamer-Gaming-Mouse.jpg_.jpg_.webp\",\"producttitle\":\"Keyboard and Mouse Set with RGB Backlight, Wired Connection, Rubberized PC Keycaps\",\"productquantity\":\"5\"}]', 114.95, '2024-04-20 10:22:05', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `user_id` varchar(25) NOT NULL,
  `user_email` text NOT NULL COMMENT 'e@e.e',
  `user_password` varchar(32) NOT NULL COMMENT '\\u2315?>c#7@&8*`',
  `user_firstlastname_phone` text DEFAULT NULL COMMENT '{"first":"", "last":"", "phone":""}',
  `user_address` text NOT NULL DEFAULT '\'\\\'{"country":"", "streetaddress":"", "aptunit":"", "city":"", "state":"", "zippostal":""}\\\'\'',
  `user_wishlist` text NOT NULL COMMENT 'space',
  `user_points` int(10) NOT NULL DEFAULT 0 COMMENT '100pts=$10\r\n\r\nexplode(".",($pprice/3))[0]',
  `user_premium` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`user_id`, `user_email`, `user_password`, `user_firstlastname_phone`, `user_address`, `user_wishlist`, `user_points`, `user_premium`) VALUES
('1234564', 'toballz@yahoo.com', '2b31aafd20eef56282beaa962e5dc6dc', '{\"first\":\"toballz\", \"last\":\"toballz\", \"phone\":\"6541237890\"}', '', '087c7c2d6f7 214c42ee538 48c9d4e1c7b 767b894a00a 59aeabb03fd 895d3cc59a8 d5dcbe20f84 ', 999, 0),
('1234567', 'cbto4@gmail.com', 'hjueti48577523864wm56472', '{\"first\":\"chleao\", \"last\":\"pattherra\", \"phone\":\"9901234784\"}', '', '087c7c2d6f7 214c42ee538 48c9d4e1c7b 767b894a00a 59aeabb03fd 895d3cc59a8 d5dcbe20f84 ', 999, 1);

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
