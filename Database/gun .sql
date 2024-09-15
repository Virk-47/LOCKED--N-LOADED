-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 07:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gun`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `SNo` int(11) NOT NULL,
  `Pid` int(11) NOT NULL,
  `ProductName` varchar(200) NOT NULL,
  `ProductPrice` varchar(200) NOT NULL,
  `ProductImage` varchar(200) NOT NULL,
  `Uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`SNo`, `Pid`, `ProductName`, `ProductPrice`, `ProductImage`, `Uid`) VALUES
(6, 6, 'COLT PYTHON (6\")', '44500', 'p9.jpg', 1),
(23, 20, 'Mossberg 940', '58700', 'p22.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `SNo` int(11) NOT NULL,
  `FName` varchar(200) NOT NULL,
  `LName` varchar(200) NOT NULL,
  `EmailId` varchar(200) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`SNo`, `FName`, `LName`, `EmailId`, `Subject`, `Message`) VALUES
(1, 'Mohkam', 'Virk', 'sardarmohkamsingh@gmail.com', 'Regarding frequent jamming of the Glock G47', 'The Glock G47 that I bought last week is frequently jamming which can cause fatal damage in my line of work.');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `SNo` int(11) NOT NULL,
  `ProductName` varchar(200) NOT NULL,
  `ProductPrice` int(200) NOT NULL,
  `ProductCategory` varchar(200) NOT NULL,
  `ProductDescription` longtext NOT NULL,
  `ProductImage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`SNo`, `ProductName`, `ProductPrice`, `ProductCategory`, `ProductDescription`, `ProductImage`) VALUES
(1, 'GLOCK 21 Gen4', 89400, 'Pistol', 'Remarkable for its accuracy and light recoil, the GLOCK 21 Gen4 delivers the power of the 45 Auto round with high magazine capacity. The Modular Back Strap system makes it possible to instantly customize its grip to accommodate any hand size. The reversible magazine catch makes it ideal for left and right-handed shooters The Gen4 system is the perfect complement to the 45 Auto caliber cartridge.', 'p1.jpg'),
(2, 'Smith & Wesson Model 648 .22 WMR Revolver', 67800, 'Revolver', 'The eight round all stainless steel Model 648 features a 6 inch full underlug barrel, a Patridge front sight and adjustable rear sight, synthetic finger groove grips, and DA/SA action. The Smith & Wesson model 648 is ideally suited for target shooting and small-game hunting with the 22 WMR -Winchester Magnum Rimfire cartridge.', 'p5.jpg'),
(3, 'Desert Eagle Mark XIX', 99500, 'Pistol', 'The Mark XIX Desert Eagle is a gas-operated, semi-automatic pistol with a 7 round capacity in .50 AE and 8 round capacity in .44 Magnum. The gun measures 10.75â€ in length with a 6â€ barrel, or 14.75â€ in a 10â€ barrel available in black as an aftermarket item. Width is 1.25â€, height 6.25â€ and the weight with an empty magazine is approximately 72 ounces. It has a trigger reach of 2.75â€ and a sight radius of 8.5â€ with the 6â€ barrel. The construction of the Mark XIX Desert Eagle utilizes the latest CNC machine technology providing exacting specifications with tight tolerances creating a work of art in a precision firearm. The grip is anatomically formed and provides an ideal hand seating angle for two-handed shooting allowing for comfortable, rapid and accurate firing. The picatinny style accessory rail easily allows for aftermarket optics and scope rings.', 'p6.jpg'),
(4, 'WSP20 Pump-Action Shotgun', 56700, 'Shotgun', 'Reliability and functionality are what makes a Pump Action Shotgun become iconic and with the new Webley WSP20 you can be sure of this. Using many years of shotgun manufacturing expertise combined with the demand for a shotgun that does what it is designed to do... And that is shoot time after time after time.   Built around a time-proven action with the combination of modern materials and available late 2020, the WSP20 will soon become your go-to Shotgun!', 'p2.jpg'),
(5, 'Beretta 694 Sporting', 87900, 'Shotgun', 'Berettaâ€™s new 694 Sporting over/under takes Berettaâ€™s 500 years of expertise, along with highly advanced technology for research and development to produce an upscale, clay-crushing machine thatâ€™s a delight to shoot.Much more than an incremental improvement, the worldâ€™s oldest gunmaker has produced a technological marvel that merges DT11 design details into a more affordable gun. The 694 Sporting comes in three barrel lengths; 28-, 30- and 32-inches, available with or without the adjustable B-Fast stock. Included in the box are a cloth-lined ABS plastic case, five-piece Optima high-performance choke set, stock wrench, alternative 23 mm MicroCore recoil pad and of courseâ€”the all-important Beretta stickers.', 'p4.jpg'),
(6, 'COLT PYTHON (6\")', 44500, 'Revolver', 'Building on Coltâ€™s Snake Gun legacy, the legendary double-action revolver is now available in stainless steel in 3\", 4.25â€ and 6â€ barrel lengths. The 2020 Python features modern stainless steel alloys and a re-designed rear sight. Thirty percent more steel beneath the rear adjustable target sight gives you a stronger revolver and more robust shooting experience. A recessed target crown, user-interchangeable front sight, and Walnut grip with the iconic Colt medallion make this a gun youâ€™ll want to shoot AND show off. The Python is chambered in .357 Magnum and also accommodates 38 Special cartridges.', 'p9.jpg'),
(7, 'GLOCK 47 MOS', 78900, 'Pistol', 'The G47 MOS was developed for the United States Customs and Border Protection (CBP) in 2019 and is now available to the commercial market. The G47 MOS offers the same reliability and performance as the G17 Gen5 MOS, with a shortened dust cover and maintains parts compatibility with the G17 Gen5 MOS, G19 Gen5 MOS, and G45 MOS. ', 'p7.jpg'),
(9, 'Beretta 92 ', 89700, 'Pistol', ' The Beretta 92 is one of the most popular pistols in the world. It was designed in 1972 in Italy by Carlo Beretta, Giuseppe Mazzetti, and Vittorio Valle. It evolved from the earlier Beretta designs. Initial production commenced in 1975. Until 1976 a total of 5 000 pistols have been produced. Full-scale production began in 1976. It has been exported to a number of countries. Some countries produce this pistol under license. The other countries produce its copies. A variant of the Beretta 92 is a standard issue sidearm in service with the whole US military. Currently the 92 is an out-dated platform, outclassed by most modern pistols. Recently Beretta released a number of new pistols that are more advanced. However the model 92 is still widely used by military and law enforcement forces. Currently the Beretta 92 and its variants are in service with 40 countries. Also despite its age it is still very popular among civilian customers.', 'p11.jpg'),
(10, 'SIG Sauer P320', 67800, 'Pistol', 'The SIG Sauer P320 pistol was introduced in 2014. It is a further development of the SIG Sauer P250. The pistol was aimed at a possible US Army and Air Force requirement to replace the M9. Eventually it was adopted by the US military as the M17. The SIG Sauer P320 pistol is also being proposed for customers from other countries, law enforcement forces and commercial market. Commercial version of the P320, that has some differences from the military model.', 'p10.jpg'),
(11, ' CZ-75', 64900, 'Pistol', ' The CZ-75 has an appealing design, is reliable, accurate, comfortable to handle and to shoot. It proved to successful and is one of the best pistols in its class.     The CZ-75 is chambered for 9x19 mm Parabellum round. It is worth noting, that army and law enforcement forces of the former Czechoslovakia used the Soviet 7.62x25 and 9x18 mm pistol ammunition. While the 9x19 mm was the standard pistol round in the West. Also there a versions of the CZ-75 chambered for .40 S&W and 9x21 mm IMI ammunition.', 'p12.jpg'),
(12, 'Beretta PX4 Storm ', 45700, 'Pistol', ' The PX4 Storm is chambered in 9x19 mm Parabellum ammunition. Also it is chambered in other most popular calibers. There are versions chambered in .40 S&W, .45 ACP and 9x21 mm IMI ammunition.     This Italian pistol is made of most modern high-strength polymer materials. The slide is made of steel. It is a recoil-operated weapon, that fires from the locked breech. Locking system with rotating barrel is similar to that of the Beretta 8000 Cougar. The barrel rotates on recoil and unlocks from the slide. Such design reduces muzzle jump.', 'p18.jpg'),
(13, 'Walther P99', 79600, 'Pistol', ' The Walther P99 has been adopted by the Finish armed forces, Iraqi army, and a number of law enforcement forces and police departments from all around the world.     The Walther P99 is a striker-fired pistol with a polymer frame and a steel slide. At the time of its introduction this pistol had a number of unusual features. It was a step forward for the Walther company.', 'p14.jpg'),
(14, 'Browning Citori CX', 65000, 'Shotgun', 'A new concept in getting more for your money. The Browning Citori â€œcrossoverâ€ shotgun is designed to be adaptable to all the clay target games, - trap, skeet and sporting clays - and still be adept in the game field without being too heavy or cumbersome to carry all day long. The Citori CX is the ideal choice for someone wanting to participate in all three of the major clay target games without having to buy a purpose-built gun for each.', 'p15.jpg'),
(15, 'Mossberg 500 Series', 68900, 'Shotgun', 'Mossberg has built a wide variety of different configurations for the 590A1.  This includes Ghost ring sights, or night sights, fixed or collapsible stocks, and capacities of up to nine rounds.  Regardless of the features you choose, you are getting one of the best pump-action combat shotguns ever designed.', 'p16.jpg'),
(16, 'Remington 870', 45600, 'Shotgun', 'Combined with the classic Remington 870 platform and you get a design that has lasted the test of time.The Remington 870 gives you 6+1 capacity and an 18.5-inch barrel for maneuverability inside close quarters. You get a front rifle sight, so I would certainly suggest adding a nice adjustable rear sight.  The main difference from the Mossberg 500 above is that its safety is a button near the trigger.', 'p17.jpg'),
(17, 'Benelli M4', 78600, 'Shotgun', 'The internal auto-regulating gas-operated system, or ARGO, provides an extremely reliable short-stroke piston system using dual pistons to ensure reliability.  This shotgun beats out Benelliâ€™s inertia guns if you want to strap on optics, lights, and such. Inertia guns are picky when it comes to weight, and when you add weight, you can affect the gunâ€™s reliability.', 'p19.jpg'),
(18, 'Beretta A300 Ultima Patrol', 57600, 'Shotgun', 'This Beretta may not have a rotating bolt head or the B-Link gas system found in the 1301, but the performance characteristics were solid. During testing, we experienced zero malfunctions through a variety of ammo.  We delivered rounds as fast as we could pull the trigger, and the accuracy was great too. Recoil mitigation was sound between the gas system and buttpad.', 'p20.jpg'),
(19, 'Beretta 1301', 67300, 'Shotgun', 'While the M4 might be the king of combat shotguns, the Beretta 1301 is vying for the crown.  The Beretta 1301 powers through with a gas-operated system that utilizes what Beretta calls the BLINK, which integrates a cross-tube gas system.Beretta claims it cycles 36% faster than any other semi-auto shotgun. I canâ€™t measure that claim, but I can attest that this gun cycles like a maniac.  The 1301 Tactical provides you with a fast cycling, low-recoiling gun with minimal muzzle rise. It spits out lead and plastic hulls rapidly, allowing for excellent control over the gun and making it very easy to get rapid follow-up shots on target.', 'p21.jpg'),
(20, 'Mossberg 940', 58700, 'Shotgun', 'The results are impressive. With a 7+1 capacity and upgraded gas system, the 940 Pro Tactical is competitive out of the box, so you wonâ€™t have to be upgrading.Although it is red dot capable, newer versions are even coming equipped with a Holosun 507k. The mount is clean too, straight to the receiver with no Picatinny rail needed.', 'p22.jpg'),
(21, 'S&W J-Frame', 56700, 'Revolver', 'Smith & Wesson J-Frame revolvers have had your back since 1950. These small revolvers were designed to fire a full power round and are as simple and easy to use as they are reliable. Available in various calibers and with three diverse hammer designs, it is no surprise that the Smith & Wesson J-Frame has become the most popular, small-frame, defense revolver on the market.  The Smith & Wesson Model 43 C is an AirWeight variation of our Centennial Model. Built on an aluminum-alloy J-frame and chambered in 22 Long Rifle, this revolver is compact and lightweight, perfect for concealed carry or recreational shooting.', 'p24.jpg'),
(22, 'Ruger Super Blackhawk', 45300, 'Revolver', 'Traditional western-style, hand-filling grip has long been acknowledged as one of the most comfortable and natural-pointing of any grip style. Transfer bar mechanism and loading gate interlock provide an unparalleled measure of security against accidental discharge. Durable coil springs throughout for maximum reliability. Fixed ramp front sight and adjustable rear sight. Models chambered in the powerful .44 Magnum, also accept factory .44 Special cartridges, which deliver superb accuracy and milder recoil. Cold hammer-forged barrel results in ultra-precise rifling that provides exceptional accuracy and longevity.', 'p25.jpg'),
(23, ' .357: Smith & Wesson Model 19', 68900, 'Revolver', 'The 1935 introduction of the .357 Magnum was significant as it was the first revolver cartridge that was truly suitable for hunting. Sure Elmer Keith was hot-rodding the .45 Colt and the .44 Special, but neither of these were big game appropriate with factory loaded ammo.  The .357 came out in the large frame gun that would later be the Model 27. It was a wonderful piece of gun making art. As an aside, I once had a chance to buy one for a few peanuts. But I had a new job, a new house and a new kid. I had no peanuts. Thatâ€™s the gun that haunts my dreams. I wish I could go back in time and scrounge up the dough to buy that revolver.', 'p26.jpg'),
(24, 'Coltâ€™s Big Snake Guns', 68900, 'Revolver', 'Colt, of course, blew it and the gun went out of production before I could get my hands on one. No problem, I figured I could always pick up a used one. Then the Walking Dead started showing greasy Rick, holding his Python in his limp-wristed grip and it blew up demand. Prices rose to absurd levels.  So, no Python for me. I did, however somewhere along the line manage to acquire its big brother, the Anaconda, in .44 Magnum.', 'p27.jpg'),
(25, 'Ruger GP100', 56800, 'Revolver', 'The Ruger GP100 is a true workhorse of a revolver. Itâ€™s not anything noteworthy to look at, but itâ€™s hefty, durable, and always gets the job done. Mine has spent many days on my hip or in a chest holster, and Iâ€™ve had to use it to knock down a couple of bears from a few feet away.  The GP100 is a mainstay thatâ€™s been around for about 37 years, and was built to replace some of Rugerâ€™s earlier double-action .357 Magnum wheel guns. It has a sturdier frame than some previous models like the Security Six thatâ€™s intended to withstand all the full-power loads you can throw at it. Additionally, the crane itself locks into the frame, rather than the ejection rodâ€”which provides a sturdier, more stable lockup', 'p28.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `SNo` int(11) NOT NULL,
  `FName` varchar(200) NOT NULL,
  `LName` varchar(200) NOT NULL,
  `EmailId` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`SNo`, `FName`, `LName`, `EmailId`, `Password`) VALUES
(1, 'Mohkam', 'Virk', 'sardarmohkamsingh@gmail.com', 'sfdc'),
(2, 'Sukhbir', 'Sandhu', 'sukhsandhu@gmail.com', '2334'),
(3, 'Dalsher', 'Virk', 'dalsher.virk@gmail.com', '10Jan'),
(4, 'Sartaj', 'Kaur', 'sartajk185@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`SNo`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`SNo`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`SNo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`SNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `SNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `SNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `SNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `SNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
