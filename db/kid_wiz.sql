-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2024 at 06:00 PM
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
-- Database: `kid_wiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `Comments`
--

CREATE TABLE `Comments` (
  `comment_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Projects`
--

CREATE TABLE `Projects` (
  `project_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `overview` text DEFAULT NULL,
  `materials_needed` text DEFAULT NULL,
  `creator_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `difficulty_level` int(11) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Projects`
--

INSERT INTO `Projects` (`project_id`, `title`, `description`, `category`, `overview`, `materials_needed`, `creator_id`, `status_id`, `difficulty_level`, `image_url`) VALUES
(1, 'Floating Fish', '1.  Draw the outline of a fish on the bottom of a glass plate or tray in dry-erase marker. Retrace your drawing to make sure all the lines are connected. Let dry for a minute or two.\r\n\r\n2.  Fill the measuring cup with tap water. Place the pour spout just inside the corner of the dish and add water very slowly until it just covers the bottom. Be careful not to pour water directly onto your drawing or make splashes near it. The water will move toward your drawing, eventually surrounding it. Observe what happens. If the water splashes or it doesn’t work on your first try, empty the dish, erase the drawing with a paper towel, dry off the dish, and try again.\r\n\r\n3.  Tilt the dish slightly from side to side. What happens? Jot it down.\r\n\r\n\r\nThe ink in dry erase markers is engineered to be slippery. It’s made with a chemical that causes it to easily release from surfaces. (Permanent markers are made with a chemical that makes the ink stick to surfaces, so be sure not to use these in your experiment!)\r\n\r\nThe easy-release ink lets go from a surface, but why does it float? There are two reasons. First, dry erase ink isn’t soluble, which means it won’t dissolve in water. Second, dry erase ink is less dense than the water, so it becomes buoyant, meaning it can float. When you tilt the dish, the fish moves around on the water’s surface.', '2', 'Project That Deals With Solubility And Density.', 'Dry-erase marker\r\nGlass plate or tray\r\nMeasuring cup\r\nTap water\r\nPaper towels', 4, NULL, 1, '../images/floating_fish.jpg'),
(2, 'Brush, Brush!', '1.  Write on sticky notes: Soda 1, Soda 2, Juice 1, and Juice 2. Place them in a row on a counter.\r\n\r\n2.  Fill two glasses halfway with brown soda and place behind the Soda 1 and Soda 2 sticky notes. Fill two glasses halfway with lemon juice and place behind the Juice 1 and Juice 2 sticky notes.\r\n\r\n3.  Carefully place one egg in the bowl. Squeeze a big dollop — about one tablespoon — of toothpaste on top of the egg and gently rub the toothpaste all around with your hands until the egg is completely covered in a thick layer of toothpaste. Repeat with a second egg.\r\n\r\n\r\n4.  Gently submerge the toothpaste-covered eggs into the liquids: one egg in the glass labeled Soda 1 and the other egg in the glass labeled Juice 1. Wash and dry your hands.\r\n\r\n5.  Gently submerge the remaining eggs, without toothpaste on them, in the remaining glasses: one in the glass labeled Soda 2 and the other in the glass of juice labeled Juice 2. Wash and dry your hands. Leave the eggs in the glasses for 12 hours.\r\n\r\n6.  After 12 hours, remove the eggs from the glasses of soda one at a time. Rinse them in cool water and pat them dry with the towel. Place each egg by the sticky note of the glass it was in. Are the eggs the same or different colors?\r\n\r\n7.  Remove the eggs from the glasses of juice one at a time. Rinse them under the faucet and pat them dry. Place each egg by the sticky note of the glass it was in. Feel the eggs gently. Does one feel stronger or weaker than the other?\r\n\r\n8.  Write down your observations in your science notebook.\r\n\r\n\r\nThe eggshells in this experiment represent the enamel (outer coating) on your teeth. Toothpaste cleans your teeth and prevents stains: it removes food and drink particles that are stuck on your teeth. Teeth can be stained easily by dark-colored liquids like cola, coffee or tea. The egg without toothpaste will be brown and discolored. The egg covered in toothpaste was protected from turning brown.\r\n\r\nToothpaste also protects your pearly whites from decay (breaking down). The egg without toothpaste left in the lemon juice was worn down and soft to the touch, while the egg that was protected with toothpaste is stronger. The lemon juice is acidic, and those acids broke down the shell just as acidic drinks can wear away your tooth enamel. When a tooth is worn down, a cavity can form more easily. But the fluoride in toothpaste mixes with your saliva to create a protective coating around your tooth enamel. It helps keep your teeth strong and cavity-free.', '0', 'This one will really get them into brushing their teeth once they scientifically prove all the good things that toothpaste can do', 'Sticky notes\r\nTwo glasses for brown soda\r\nTwo glasses for lemon juice\r\nTwo additional glasses for soda and juice without toothpaste\r\nBowl\r\nToothpaste\r\nEggs\r\nTowel for drying hands\r\nFaucet for rinsing eggs\r\nScience notebook for recording observations', 4, NULL, 0, '../images/brush.jpg'),
(13, 'Milk Bottle Xylophone', '1.  Arrange six glass jars or bottles, all the same size with no lids, in a line. What will each jar sound like when you tap it with a spoon? Make a prediction, then tap each jar. Record your observations.\r\n\r\n2.  Next, put water in each of the jars. Pour 1⁄4 cup (60 ml) of water into the first jar. Add 1⁄2 cup (120 ml) of water to the second jar. Continue in 1⁄4-cup increments, adding 3⁄4 cup (180 ml) of water to the third jar, 1 cup (240 ml) of water to the fourth jar, 11⁄4 cups (300 ml) of water to the fifth jar, and 11⁄2 cups (360 ml) to the sixth jar. Add a couple of drops of food coloring to each jar.\r\n\r\n\r\n3.  What will each jar sound like? Will they sound the same or different than when the container was empty? Will they sound the same or different from one another? Record your predictions.\r\n\r\n4.  Tap each jar with a metal spoon. Write down your observations about each jar’s pitch (how high or low a sound is) in your notebook.\r\n\r\n\r\nSound waves are created by vibrations, which are back-and-forth movements that are repeated again and again. Pitch depends on the frequency of the waves — how many are created each second. A high pitch is created by high-frequency sound waves, and can sound squeaky. A low pitch is created by low-frequency sound waves, and sounds deep and booming.\r\n\r\nWhen you tapped the jar, it vibrated. The vibrations traveled from the jar to the water to the air and eventually to your ears. The jars with more water had a low pitch. The sound waves vibrated more slowly because they had more water to travel through. The jars with less water had higher pitches. The sound waves vibrated faster because they had less water to travel through. A jar with no water in it makes the highest pitch because it has the least substance to travel through.', '2', 'In this experiment, you\'ll tap glass jars to observe the sound, then add water to each and note how it changes the pitch, demonstrating how water level affects sound frequency.', 'Six glass jars or bottles of the same size (without lids)\r\nA metal spoon\r\nWater\r\nFood coloring (optional)\r\nNotebook for recording observations', 4, NULL, 2, 'hvbs'),
(14, 'Elephant Toothpaste', '1.  Place your bottle in the center of a tray with sides. There will be a lot of foam and this will contain the mess. Place a funnel in the bottle neck.\r\n\r\n2.  Step Two Add a few squirts of dishsoap to the bottle\r\n\r\n3.  Step Three Add ½ cup (4 oz.) of hydrogen peroxide to bottle. Gently swirl to mix.\r\n\r\n4.  Step Four Add in a squeeze of food coloring. Gently swirl to mix. See below for striped version instructions.\r\n\r\n5.  Step Five Mix 1 packet or 1 Tbsp of yeast  with 1/2 cup (4oz.) of very warm water. Stir to dissolve. It may be pasty. \r\n\r\n6. Step Six Pour the yeast mixture through the funnel into the bottle. Give it a quick swirl then step back. BAM!\r\n\r\nSAFETY NOTES:\r\n\r\nI recommend the 40 volume experiment to be conducted by adults only as a demonstration for kids.\r\n20 and 40 volume Hydrogen Peroxide are high concentrations of peroxide and can irritate/burn the skin.  Adults only should pour the peroxide into the bottles.\r\nAdults and children should wear safety goggles and plastic gloves at all times during this experiment\r\nThe bottles can easily tip! Once the hydrogen peroxide has been poured into the bottles please have kids hold the bottle steady so it does not fall over and spill.\r\nThe foam is HOT! Do not touch the foam until it has cooled. And keep your gloves on!\r\n', '2', 'This experiment creates a foaming \"toothpaste\" using simple ingredients like hydrogen peroxide, yeast, and dish soap, providing a fun and engaging way for children to learn about chemical reactions and catalysts.', '½ cup (4 oz) Hydrogen Peroxide- Use 20 volume for classroom experiment and 40 volume for adult demo. Be sure to use clear developer NOT cream.\r\n\r\nFood Coloring\r\n\r\nVery Warm Water\r\n\r\nYeast Use 1 packet per experiment or ½ Tbsp if measuring from a  jar\r\nDishsoap\r\n\r\nRecycled Plastic Water Bottle (see experiments below for suggested sizes)\r\n\r\nFunnel\r\n\r\nTray\r\n\r\nMeasuring Cups and Spoons\r\n\r\nSafety Goggles\r\n\r\nPlastic Gloves', 4, NULL, 1, 'sfbso'),
(15, 'Hoop-and-Straw Airplane', 'Instructions:\r\n\r\n1.  You have 3 options when it comes to cutting the cardstock paper:\r\nCut the cardstock paper so you have 3 strips pieces measuring 5”x1”. Take 2 of the strips and tape them together so now you have a 10”x1” strip.\r\n                                                          OR\r\n\r\nCut the cardstock paper so you have 1 strip that is 10”x1” and 2 strips that are 5”x1”.\r\n                                                         OR\r\n\r\nPrint the Straw Airplane Template on cardstock paper and cut along the outlines for the 2 strips.\r\n\r\n                                                         THEN\r\n\r\n2.  Curl the 5”x1” strip into a hoop and tape the ends together. \r\n\r\n3.  Repeat with the 10”x1” strip.\r\n\r\n4.  Tape the hoops to the two ends of the straw. Make sure the straw is on the inside of the hoops and lined up.\r\n\r\n5.  Hold the hoop glider in the middle of the straw with the little hoop in the front and throw!\r\n\r\n\r\n\r\n                The Science Behind the DIY Straw Airplanes for Kids\r\n\r\nThere are 4 forces at work behind the hoop glider.\r\n\r\n1.  The thrust is the force that pushes the straw glider forward. When you launch the straw airplane with your hand, you are generating enough thrust that allows the plane to move through the air.\r\n\r\n2.  Drag, or air resistance, is the force that acts in opposition to the thrust. Drag is what slows the airplane down.\r\n\r\n3.  Air moves through the hoops and provides lift, or the force that keeps the airplane up.\r\n\r\n4.  Gravity is the force that pulls the hoop glider downward and acts against the lift. As the airplane slows down due to drag, the strength of the lift lessens and gravity pulls the glider down to the ground. ', '0', 'Learn how to make a hoop glider using simple materials like cardstock paper, a straw, and tape. It\'s easy to create and flies in straight lines, providing lots of fun and learning about forces like thrust, drag, lift, and gravity!', 'Cardstock paper (8”x11”)\r\nRuler\r\nScissors\r\nDrinking straw (if you have a bendy straw, cut the accordion part off)\r\nTape\r\n(Optional) Straw Airplane Template', 4, NULL, 2, 'ubub'),
(16, 'Alias tenetur sint s', 'Dolor quasi architec', '0', 'Voluptas rem volupta', 'Accusamus accusantiu', 4, NULL, 1, 'Odit laborum Velit ');

-- --------------------------------------------------------

--
-- Table structure for table `Project_Images`
--

CREATE TABLE `Project_Images` (
  `image_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `uploaded_by` int(11) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Ratings`
--

CREATE TABLE `Ratings` (
  `rating_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Roles`
--

CREATE TABLE `Roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Roles`
--

INSERT INTO `Roles` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `Status`
--

CREATE TABLE `Status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Status`
--

INSERT INTO `Status` (`status_id`, `status_name`) VALUES
(1, 'InProgress'),
(2, 'Completed'),
(3, 'Incomplete');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `phone_number` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`user_id`, `first_name`, `last_name`, `gender`, `email`, `password_hash`, `date_of_birth`, `role_id`, `phone_number`) VALUES
(1, 'Diana', 'Dalton', 2, 'cuji@mailinator.com', '$2y$10$h4Rlzf.91JNLCcVY0lyLuuzzqnrAO5PfKMUsErkIU2yBAT47VnGda', '2009-05-19', 1, '755 '),
(2, 'Lydia', 'Green', 0, 'lydia@mailinator.com', '$2y$10$EsaoRuvsehobgpjCB6xLquH2vyRXk.upUfjSWSP2ZifB20bHMldje', '1974-05-26', 2, '200 '),
(4, 'Violet', 'York', 2, 'violet@mailinator.com', '$2y$10$xgRfSzRAR9CA7A8t9Q/MaOH8zjitpF.Tt/Wl0jjJnMgjE96yK6k.u', '2022-12-19', 1, '122 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Comments`
--
ALTER TABLE `Comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `Projects`
--
ALTER TABLE `Projects`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `creator_id` (`creator_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `Project_Images`
--
ALTER TABLE `Project_Images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `uploaded_by` (`uploaded_by`);

--
-- Indexes for table `Ratings`
--
ALTER TABLE `Ratings`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `Roles`
--
ALTER TABLE `Roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `Status`
--
ALTER TABLE `Status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Comments`
--
ALTER TABLE `Comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Projects`
--
ALTER TABLE `Projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `Project_Images`
--
ALTER TABLE `Project_Images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Ratings`
--
ALTER TABLE `Ratings`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Roles`
--
ALTER TABLE `Roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Status`
--
ALTER TABLE `Status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Comments`
--
ALTER TABLE `Comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `Projects` (`project_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `Users` (`user_id`);

--
-- Constraints for table `Projects`
--
ALTER TABLE `Projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`creator_id`) REFERENCES `Users` (`user_id`),
  ADD CONSTRAINT `projects_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `Status` (`status_id`);

--
-- Constraints for table `Project_Images`
--
ALTER TABLE `Project_Images`
  ADD CONSTRAINT `project_images_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `Projects` (`project_id`),
  ADD CONSTRAINT `project_images_ibfk_2` FOREIGN KEY (`uploaded_by`) REFERENCES `Users` (`user_id`);

--
-- Constraints for table `Ratings`
--
ALTER TABLE `Ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `Projects` (`project_id`),
  ADD CONSTRAINT `ratings_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `Users` (`user_id`);

--
-- Constraints for table `Users`
--
ALTER TABLE `Users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `Roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
