-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 15, 2025 at 02:07 AM
-- Server version: 10.6.22-MariaDB
-- PHP Version: 8.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peernetics_com`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_headers`
--

CREATE TABLE `about_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_headers`
--

INSERT INTO `about_headers` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'About Peernetics', 'In the rapidly evolving realm of digital finance, Peernetics stands as a beacon of\r\n innovation and accessibility. The Peernetics Utility Token (PNS) is central to our\r\n ecosystem, which powers our initiatives. Peernetics is committed to developing\r\n creative, engaging, and forward-thinking crypto-based platforms incorporating\r\n cutting-edge technology.', 'images/about/icon/main-banner.png', NULL, '2025-01-08 19:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `about_seconds`
--

CREATE TABLE `about_seconds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_text` text NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `link_url` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_seconds`
--

INSERT INTO `about_seconds` (`id`, `title`, `sub_text`, `button_text`, `link_url`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'About Peernetics', 'Together, we can unlock the power of\r\n                cryptocurrency and transform your\r\n                business', 'Learn More', 'https://peernetics.io/merchant-program', 'Founded by a team of passionate professionals, we seek to make it as easy as possible for all users and businesses to step into the world of cryptocurrency. We break down barriers to entry by taking ground-breaking and confusing technology and transforming it into an uncomplicated and user-friendly system.', 'images/about/icon/banner crypto.png', NULL, '2024-11-17 15:12:22');

-- --------------------------------------------------------

--
-- Table structure for table `allocations`
--

CREATE TABLE `allocations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `allocation` varchar(255) NOT NULL,
  `perentage` int(11) NOT NULL,
  `token_amount` bigint(20) NOT NULL,
  `vesting_period` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allocations`
--

INSERT INTO `allocations` (`id`, `allocation`, `perentage`, `token_amount`, `vesting_period`, `created_at`, `updated_at`, `color`) VALUES
(1, 'Pre-Seed', 3, 30000000, 'TGE 15%, 3 months lock, then 5% each month (20 months in total)', NULL, '2024-12-08 19:40:00', '#2C3C8D'),
(2, 'Seed Round', 7, 70000000, 'TGE 15%, 3 months lock, then 5% each month (20 months in total)', NULL, '2024-12-08 19:47:18', '#D91FE9'),
(3, 'ICO Presale', 10, 100000000, 'TGE 15%, 3 months lock, then 5% each month (20 months in total)', NULL, '2024-12-08 19:41:19', '#03A9EB'),
(4, 'Core Team', 5, 50000000, 'TGE 0%, 12 months lock, then 25% every 3 months (22 months in total)', NULL, '2024-12-08 19:42:29', '#33FF57'),
(5, 'Marketing', 3, 30000000, 'TGE 0%, 3 months lock, then 20% every 3 months (16 months in total)', NULL, '2024-12-08 19:42:59', '#FF33A6'),
(6, 'Research & Development', 2, 20000000, 'TGE 0%, 3 months lock, then 20% every 3 months (16 months in total)', '2024-12-08 19:38:01', '2024-12-08 19:43:43', '#338AFF'),
(7, 'Reserves, future team members, gaming rewards, airdrops, giveaways, affiliate program and more…', 10, 100000000, 'TGE 0%, 3 months lock, then 20% every 3 months (16 months in total)', '2024-12-08 19:45:05', '2024-12-08 19:45:05', '#FF5733'),
(8, 'Liquidity', 60, 600000000, 'TGE 100%', '2024-12-08 19:45:53', '2024-12-30 14:38:45', '#FFD700');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `middle_text` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `loyalty_button_text` varchar(255) NOT NULL,
  `ico_button_text` varchar(255) NOT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`images`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `loyalty_button_url` varchar(255) DEFAULT 'https://loyaltyclub.peernetics.io/',
  `ico_button_url` varchar(255) DEFAULT 'https://peernetics.io/'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `middle_text`, `subtitle`, `loyalty_button_text`, `ico_button_text`, `images`, `created_at`, `updated_at`, `loyalty_button_url`, `ico_button_url`) VALUES
(1, 'Your Wallet’s', 'New Best Friend', 'Peernetics', 'Loyalty Club', 'ICO Sign Up', '{}', NULL, '2025-04-26 17:32:13', 'https://loyaltyclub.peernetics.io/', 'https://peernetics.io/');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `featured_image`, `content`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Paving the Path to a New Era of Cryptocurrency', 'paving-the-path-to-a-new-era-of-cryptocurrency', 'images/blog/Peernetics ICO Paving the Path to a New Era of Crypto Transactions.png', '<p>Get ready to embark on a journey that will transform the way you think about transactions. We at Peernetics are excited to announce our long-awaited Initial Coin Offering (ICO), a once-in-a-lifetime opportunity that will revolutionise and shake up the world of cryptocurrencies.<br><br><strong>Embrace the Evolution</strong><br><br>At Peernetics, our mission is clear: to make cryptocurrency seamless and truly rewarding. Our platform acts as a bridge, connecting the world of traditional business with the limitless possibilities of the crypto realm. Peernetics is dedicated to simplifying the process and delivering an exceptional user experience.<br><br><strong>Unlock the Power of $PNS</strong><br><br>The heart of our ICO beats in the form of our native utility token, PNS. By participating in the ICO, you\'ll not only secure early access to PNS tokens at a discounted rate but also gain exclusive access to our Loyalty Program. Holding PNS opens the door to a realm of exclusive discounts across our network of merchant partners, creating value for both you and the community.<br><br><strong>Shape the Future, One Token at a Time</strong><br><br>Your participation in the Peernetics ICO isn\'t just about tokens – it\'s about contributing to a change. By investing in our vision, you\'re becoming a part of the change, helping to build a future where PNS is not just a possibility, but a reality for everyone. Your support propels us toward our goal of rewriting the rules of digital currencies on a global scale.<br><br><strong>Join the Revolution</strong><br><br>Are you ready to follow in the footsteps of Peernetics? Keep checking back for more updates as we get closer to the ICO launch. Keep an eye on our official channels for announcements, sneak peeks, and more details about the Peernetics ICO. Together, let\'s pave the way to a new era. Join us and be part of history in the making!</p>', 1, '2024-07-11 21:31:47', '2025-01-05 15:17:26'),
(2, 'Peernetics at World Travel Market', 'peernetics-at-world-travel-market', 'images/blog/Peernetics at World Travel Market.png', '<p>The World Travel Market (WTM) served as the perfect stage for Peernetics to shine as a prominent exhibitor in the global travel industry. Our participation in this renowned event was nothing short of a triumph, cementing our position as a trailblazer in the world of cryptocurrency-powered travel programs.<br> </p><p>At the heart of the bustling WTM, our booth stood as a beacon of innovation and opportunity. With our merchant program solution, we showcased how businesses in the travel sector could embrace the future of Peernetics loyalty club powered by our PNS token, making the experience, secure, and efficient. The response from industry professionals, travel enthusiasts, and fellow exhibitors was overwhelmingly positive.<br> </p><p>The event allowed us to connect with like-minded businesses, share insights, and forge valuable partnerships. Our team engaged in meaningful discussions about the transformative potential of cryptocurrencies in the travel domain. Through interactive presentations and demonstrations, we highlighted the ease of accepting our platform, and the benefits it brings to both businesses and travellers.<br> </p><p>One of the highlights of our participation was witnessing the genuine interest and curiosity our booth garnered. Attendees were keen to understand how Peernetics\' technology could revolutionise the travel experience by eliminating traditional barriers and complexities.<br> </p><p>Our successful presence at WTM also emphasised our commitment to fostering innovation and growth. We had the privilege to exchange ideas with thought leaders, learn from industry trends, and gain fresh perspectives on the evolving landscape of travel and finance. It was truly an immersive experience that reinforced our belief in the power of cryptocurrencies to reshape traditional industries.<br> </p><p>As we reflect on our participation in WTM, we are filled with gratitude for the opportunity to showcase Peernetics\' vision and solutions on such a prestigious platform. The success we achieved and the connections we made have fuelled our determination to continue driving positive change in the travel sector. Our journey doesn\'t end here; instead, it propels us forward with renewed enthusiasm to redefine the way the world travels.<br> </p>', 1, '2024-07-11 21:31:47', '2025-01-05 15:23:41'),
(3, 'Revolutionising Digital Transactions', 'revolutionising-digital-transactions', 'images/blog/Welcome blog photo.png', '<p>Welcome to the world of Peernetics, where rewards in digital payments are about to undergo a remarkable transformation. In a rapidly evolving landscape, Peernetics emerges as the answer to the challenges faced by businesses and consumers in the realm of digital transactions.<br><br><strong>Unifying Loyalty: Rewards Made Simple</strong><br><br>There are many different rewards programs out there, and navigating them can be confusing for both consumers and businesses. At Peernetics, we\'ve reimagined rewards with our Unified Gaming Club and Loyalty Program. Holding our native utility token, PNS unlocks an array of exclusive discounts across our network of merchant partners. This unified approach transforms loyalty into a win-win, enhancing engagement and boosting revenue.<br><br><strong>Expanding Horizons: Embracing the Mainstream</strong><br><br>Cryptocurrencies have been slow to make their way into mainstream markets due to a lack of mainstream acceptance. Peernetics\' Merchant Program changes that, enabling businesses to offer exclusive crypto discounts. This isn\'t just about attracting a new customer base—it\'s about expanding possibilities and driving revenue growth. Our Marketing Services further amplify exposure, reaching crypto enthusiasts and propelling brand awareness.<br><br><strong>Join the Movement: Be a Part of Peernetics</strong><br><br>Peernetics isn\'t just a platform; it\'s a movement toward a more accessible, rewarding, and innovative future. We invite you to embark on this transformative journey with us. Embrace the Peernetics experience and become a core part of the evolution in the cryptocurrency world.<br><br><strong>Your Journey Begins Here</strong><br><br>As we pave the way for a seamless future of digital payments, we invite you to dive into the Peernetics journey. Explore our website to discover how we\'re reshaping the crypto landscape, empowering both businesses and consumers. Join our dynamic community on Discord and Telegram to connect with like-minded individuals and stay updated on our latest updates. The era of crypto-powered rewards starts here, and we\'re thrilled to have you join us!</p>', 1, '2024-07-11 21:31:48', '2025-01-05 15:56:47');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Brand Promotion', 'One of the major selling points of Peernetics is the amazing brand partnerships we secure. Honestly, we’ll never stop shouting about it. So, that means you’ll get a ton of free marketing and the opportunity to showcase your brand to an engaged and highly active community.', 'images/merchant/brand-promotion.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `collaboratives`
--

CREATE TABLE `collaboratives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collaboratives`
--

INSERT INTO `collaboratives` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Collaborative Growth', 'When you join the Merchant Program, you’ll instantly be seen as a partner. Our working relationship is mutually beneficial, and our mission is to help you succeed. As your brand awareness increases, so does ours. This is a crypto-for-businesses ecosystem where we all succeed.', 'images/merchant/collaborative-growth.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `type`, `name`, `email`, `company`, `country`, `phone`, `website`, `message`, `created_at`, `updated_at`) VALUES
(1, 'complaint', 'Ftpfvp k', 'stringer.johnie@gmail.com', 'WinnersNow', 'Tristan da Cunha', '3998923993', 'http://', 'Hello,\r\n\r\nAre you looking for ways to supercharge your e-commerce business and see substantial growth? Forget product testing, improve your conversion rate, and attract a flood of leads using our complete set of tools and resources.\r\n\r\nFrom AI-powered product selection to conversion-focused page builders, reliable supplier connections, and organic traffic generation, we offer all you need to succeed in the dynamic e-commerce market. Plus, you\'ll get expert tips and tutorials to support you at every stage. No nonsense, just practical info you can apply now.\r\n\r\nPrepared to elevate your e-commerce business? \r\n\r\n\r\n++ Explore: https://bit.ly/winners-now\r\n\r\nand learn the secrets to e-commerce success.\r\n\r\nCheers,\r\nAspazian Silviu\r\naspazian.silviu@winners-now.vip', '2024-07-12 12:24:06', '2024-07-12 12:24:06'),
(2, 'complaint', 'Ftpfvp k', 'stringer.johnie@gmail.com', 'WinnersNow', 'Tristan da Cunha', '3998923993', 'http://', 'Hello,\r\n\r\nAre you looking for ways to supercharge your e-commerce business and see substantial growth? Forget product testing, improve your conversion rate, and attract a flood of leads using our complete set of tools and resources.\r\n\r\nFrom AI-powered product selection to conversion-focused page builders, reliable supplier connections, and organic traffic generation, we offer all you need to succeed in the dynamic e-commerce market. Plus, you\'ll get expert tips and tutorials to support you at every stage. No nonsense, just practical info you can apply now.\r\n\r\nPrepared to elevate your e-commerce business? \r\n\r\n\r\n++ Explore: https://bit.ly/winners-now\r\n\r\nand learn the secrets to e-commerce success.\r\n\r\nCheers,\r\nAspazian Silviu\r\naspazian.silviu@winners-now.vip', '2024-07-12 12:24:09', '2024-07-12 12:24:09'),
(3, 'complaint', 'Ftpfvp k', 'stringer.johnie@gmail.com', 'WinnersNow', 'Tristan da Cunha', '3998923993', 'http://', 'Hello,\r\n\r\nAre you looking for ways to supercharge your e-commerce business and see substantial growth? Forget product testing, improve your conversion rate, and attract a flood of leads using our complete set of tools and resources.\r\n\r\nFrom AI-powered product selection to conversion-focused page builders, reliable supplier connections, and organic traffic generation, we offer all you need to succeed in the dynamic e-commerce market. Plus, you\'ll get expert tips and tutorials to support you at every stage. No nonsense, just practical info you can apply now.\r\n\r\nPrepared to elevate your e-commerce business? \r\n\r\n\r\n++ Explore: https://bit.ly/winners-now\r\n\r\nand learn the secrets to e-commerce success.\r\n\r\nCheers,\r\nAspazian Silviu\r\naspazian.silviu@winners-now.vip', '2024-07-12 12:24:11', '2024-07-12 12:24:11'),
(4, 'complaint', 'Ftpfvp k', 'stringer.johnie@gmail.com', 'WinnersNow', 'Tristan da Cunha', '3998923993', 'http://', 'Hello,\r\n\r\nAre you looking for ways to supercharge your e-commerce business and see substantial growth? Forget product testing, improve your conversion rate, and attract a flood of leads using our complete set of tools and resources.\r\n\r\nFrom AI-powered product selection to conversion-focused page builders, reliable supplier connections, and organic traffic generation, we offer all you need to succeed in the dynamic e-commerce market. Plus, you\'ll get expert tips and tutorials to support you at every stage. No nonsense, just practical info you can apply now.\r\n\r\nPrepared to elevate your e-commerce business? \r\n\r\n\r\n++ Explore: https://bit.ly/winners-now\r\n\r\nand learn the secrets to e-commerce success.\r\n\r\nCheers,\r\nAspazian Silviu\r\naspazian.silviu@winners-now.vip', '2024-07-12 12:24:13', '2024-07-12 12:24:13'),
(5, 'complaint', 'Maria Masterson', 'quillaio@truevaule.xyz', 'Jolie Leboeuf', 'Bahrain', '954 80 218', NULL, 'Hi peernetics.io,\r\n\r\nThis is NOT a joke!\r\n\r\nIt\'s FINALLY possible lol\r\n\r\nI\'m proud to announce the release of a new platform that just went LIVE called..\r\n\r\n.. AI Review Engine!\r\n\r\nAI Review Engine is the first platform  to be able to Write, Optimize and Post Profit-Producing Product Reviews From Any URL In 90 seconds or Less!\r\n\r\nYup, you read that correctly!\r\n\r\n������Profitable, High-Ranking Product Reviews Written by the MOST powerful AI Engine on the planet is HERE!\r\n\r\n������������ Short on time?  See the demo video here: https://www.truevaule.xyz/quillaio \r\n\r\nThese guys REALLY nailed it with this one by fulfilling one of the BIGGEST requests that ALL AI content users ALWAYS ask us about...\r\n\r\n������\"Can your AI write Product Reviews?\"\r\n\r\nAnd for the longest, we\'ve had to say:\r\n\r\n❌\"Sorry, but AI just isn\'t there yet\"\r\n\r\n✅ However, thanks to these guys, this is now possible!\r\n\r\nYou Can FINALLY Get Page 1 Rankings And Earn Affiliate Commissions For The MOST Profitable (and easiest) Keywords Known To Marketers!\r\n\r\n(And the best part?  it works for ANY Product or Service - you just supply the URL ������)\r\n\r\n������������ You have to see this beast in action: https://www.truevaule.xyz/quillaio \r\n\r\nThese guys have Simplified The Entire Process of Writing, Optimizing And Posting Review Content Into 3 Simple Steps:\r\n\r\n1️⃣ Step 1: Download And Install The AI Review Engine Plugin\r\n\r\n2️⃣ Step 2: Supply The Plugin With The URL Of The Product Or Service You Want it To Write A Review For and Input Your Affiliate Link\r\n\r\n3️⃣ Step 3: Hit “Create Post” And Watch Their A.I Plugin Write, Optimize and Post A Perfect Human-Like Product Review - 100% Automatically!\r\n\r\nI\'m telling you, NOTHING like this has been done before and you guys can be the FIRST to tap into this powerful way of using AI.\r\n\r\n������������ Check out the demo video here: https://www.truevaule.xyz/quillaio \r\n\r\nMaria Masterson\r\n\r\n\r\nP.S. Quick recap:\r\n\r\n➕ AI writing product reviews FOR YOU is FINALLY here\r\n➕ This NEW plugin makes it a simple 3 step process\r\n➕ ALL you have to do is supply it with ANY URL\r\n➕ There\'s an INSANE, charter-members special going on right now\r\n\r\n������������ Make sure you head over to watch the demo here: https://www.truevaule.xyz/quillaio \r\n\r\n\r\n\r\nUNSUBSCRIBE: https://www.truevaule.xyz/unsubscribe/?d=peernetics.io  \r\nAddress: 1967 Francis Mine\r\nTrinity Center, CA 96091', '2024-07-12 18:36:49', '2024-07-12 18:36:49'),
(6, 'enquiry', 'Kymbella', 'tbcdwwcjmp.q@silesia.life', 'Kymbella Turchetti iturrieta', 'Afghanistan', '1', 'Kymbella Turchetti iturrieta', 'Kymbella Turchetti iturrieta', '2024-07-13 09:05:51', '2024-07-13 09:05:51'),
(7, 'complaint', 'Cole Tedesco', 'tedesco.cole@gmail.com', '3030 Games', 'Lebanon', '890705038', NULL, 'Looking for your next exciting playtime? Check out 3030 Games! \r\n\r\nWhether you\'re into solving intricate puzzles, triumphing in epic clashes, or dashing through tracks, we have something that suits your taste.\r\n\r\nWhy Choose 3030 Games?\r\n- Massive Game Library: Delve into an endless array of captivating games.\r\n- Completely no cost: Experience uninterrupted fun without any cost!\r\n- Instant Access: No installations required – jump right in immediately!\r\n\r\nEager to begin an unforgettable experience? Head over to 3030 Games and jump into the action!\r\n\r\nPlay Browser Games Now:  https://bit.ly/3030games', '2024-07-13 14:02:46', '2024-07-13 14:02:46'),
(8, 'complaint', 'Cole Tedesco', 'tedesco.cole@gmail.com', '3030 Games', 'Lebanon', '890705038', NULL, 'Looking for your next exciting playtime? Check out 3030 Games! \r\n\r\nWhether you\'re into solving intricate puzzles, triumphing in epic clashes, or dashing through tracks, we have something that suits your taste.\r\n\r\nWhy Choose 3030 Games?\r\n- Massive Game Library: Delve into an endless array of captivating games.\r\n- Completely no cost: Experience uninterrupted fun without any cost!\r\n- Instant Access: No installations required – jump right in immediately!\r\n\r\nEager to begin an unforgettable experience? Head over to 3030 Games and jump into the action!\r\n\r\nPlay Browser Games Now:  https://bit.ly/3030games', '2024-07-13 14:02:49', '2024-07-13 14:02:49'),
(9, 'complaint', 'Cole Tedesco', 'tedesco.cole@gmail.com', '3030 Games', 'Lebanon', '890705038', NULL, 'Looking for your next exciting playtime? Check out 3030 Games! \r\n\r\nWhether you\'re into solving intricate puzzles, triumphing in epic clashes, or dashing through tracks, we have something that suits your taste.\r\n\r\nWhy Choose 3030 Games?\r\n- Massive Game Library: Delve into an endless array of captivating games.\r\n- Completely no cost: Experience uninterrupted fun without any cost!\r\n- Instant Access: No installations required – jump right in immediately!\r\n\r\nEager to begin an unforgettable experience? Head over to 3030 Games and jump into the action!\r\n\r\nPlay Browser Games Now:  https://bit.ly/3030games', '2024-07-13 14:02:51', '2024-07-13 14:02:51'),
(10, 'complaint', 'Cole Tedesco', 'tedesco.cole@gmail.com', '3030 Games', 'Lebanon', '890705038', NULL, 'Looking for your next exciting playtime? Check out 3030 Games! \r\n\r\nWhether you\'re into solving intricate puzzles, triumphing in epic clashes, or dashing through tracks, we have something that suits your taste.\r\n\r\nWhy Choose 3030 Games?\r\n- Massive Game Library: Delve into an endless array of captivating games.\r\n- Completely no cost: Experience uninterrupted fun without any cost!\r\n- Instant Access: No installations required – jump right in immediately!\r\n\r\nEager to begin an unforgettable experience? Head over to 3030 Games and jump into the action!\r\n\r\nPlay Browser Games Now:  https://bit.ly/3030games', '2024-07-13 14:02:53', '2024-07-13 14:02:53'),
(11, 'complaint', 'Hortense Faust', 'faust.hortense@gmail.com', 'Hortense Faust', 'British Indian Ocean Territory', '740099397', NULL, 'WANTED: Partnerships & Agents for Global E-commerce Firm\r\n\r\n4U2 Inc., a premier E-commerce , Sourcing Brokerage firm, is actively seeking partnerships and collaboration with manufacturers and wholesalers for agricultural, commercial, and residential products. We offer a diverse marketplace for both new and used items, including vehicles and equipment.\r\n\r\nWhy Choose 4U2 Inc.? (see https.//www.4u2inc.com)\r\n\r\nGlobal reach for your products\r\nImmediate requirements for a wide range of items\r\nOpportunity to expand your business network\r\nJoin Our Team We’re also looking for Independent Contractor Agents (Account Executives) to help us discover new business opportunities. Whether you’re seeking a full-time or part-time role, you can earn up to $60,000 based on performance.\r\n\r\nGet in Touch Don’t miss out on this opportunity. Contact us at 4u2inc123@gmail.com to learn more or to start our partnership today!\r\n\r\nThis version is more direct and easier to read, highlighting the key points and call to action for potential partners and agents. If you need further refinements or have specific requirements, feel free to let me know!', '2024-07-14 15:42:49', '2024-07-14 15:42:49'),
(12, 'complaint', 'Stan Ordonez', 'stan.ordonez@yahoo.com', '3030 Games', 'United Arab Emirates', '3668592068', NULL, 'Ready for Endless Fun? Step Up at 3030Games!\r\n\r\nCalling all gamers in Chon-Buri! Want to tackle some puzzles, overcome epic battles, or speed to the finish line? 3030 Games is your ultimate destination for no cost online gaming fun! \r\n\r\nHere\'s why you\'ll love 30 30 Games:\r\n\r\n- Huge Collection: Dive into a endless library of thrilling games – there is something for everyone!\r\n\r\n- Absolutely no cost: Play all day, every day, at no cost!\r\n\r\n- Instant Play: No downloads needed, just jump right in and begin playing! \r\n\r\nEager to unleash your inner champion? Visit 3030Games now and enhance your weekend!\r\n\r\nPlay Now: https://bit.ly/3030games', '2024-07-14 17:34:23', '2024-07-14 17:34:23'),
(13, 'complaint', 'Stan Ordonez', 'stan.ordonez@yahoo.com', '3030 Games', 'United Arab Emirates', '3668592068', NULL, 'Ready for Endless Fun? Step Up at 3030Games!\r\n\r\nCalling all gamers in Chon-Buri! Want to tackle some puzzles, overcome epic battles, or speed to the finish line? 3030 Games is your ultimate destination for no cost online gaming fun! \r\n\r\nHere\'s why you\'ll love 30 30 Games:\r\n\r\n- Huge Collection: Dive into a endless library of thrilling games – there is something for everyone!\r\n\r\n- Absolutely no cost: Play all day, every day, at no cost!\r\n\r\n- Instant Play: No downloads needed, just jump right in and begin playing! \r\n\r\nEager to unleash your inner champion? Visit 3030Games now and enhance your weekend!\r\n\r\nPlay Now: https://bit.ly/3030games', '2024-07-14 17:34:26', '2024-07-14 17:34:26'),
(14, 'complaint', 'Stan Ordonez', 'stan.ordonez@yahoo.com', '3030 Games', 'United Arab Emirates', '3668592068', NULL, 'Ready for Endless Fun? Step Up at 3030Games!\r\n\r\nCalling all gamers in Chon-Buri! Want to tackle some puzzles, overcome epic battles, or speed to the finish line? 3030 Games is your ultimate destination for no cost online gaming fun! \r\n\r\nHere\'s why you\'ll love 30 30 Games:\r\n\r\n- Huge Collection: Dive into a endless library of thrilling games – there is something for everyone!\r\n\r\n- Absolutely no cost: Play all day, every day, at no cost!\r\n\r\n- Instant Play: No downloads needed, just jump right in and begin playing! \r\n\r\nEager to unleash your inner champion? Visit 3030Games now and enhance your weekend!\r\n\r\nPlay Now: https://bit.ly/3030games', '2024-07-14 17:34:28', '2024-07-14 17:34:28'),
(15, 'complaint', 'Stan Ordonez', 'stan.ordonez@yahoo.com', '3030 Games', 'United Arab Emirates', '3668592068', NULL, 'Ready for Endless Fun? Step Up at 3030Games!\r\n\r\nCalling all gamers in Chon-Buri! Want to tackle some puzzles, overcome epic battles, or speed to the finish line? 3030 Games is your ultimate destination for no cost online gaming fun! \r\n\r\nHere\'s why you\'ll love 30 30 Games:\r\n\r\n- Huge Collection: Dive into a endless library of thrilling games – there is something for everyone!\r\n\r\n- Absolutely no cost: Play all day, every day, at no cost!\r\n\r\n- Instant Play: No downloads needed, just jump right in and begin playing! \r\n\r\nEager to unleash your inner champion? Visit 3030Games now and enhance your weekend!\r\n\r\nPlay Now: https://bit.ly/3030games', '2024-07-14 17:34:31', '2024-07-14 17:34:31'),
(16, 'enquiry', 'Arillia', 'tbmqphptbt.q@silesia.life', 'Arillia Raboso', 'Afghanistan', '1', 'Arillia Raboso', 'Arillia Raboso', '2024-07-14 23:15:34', '2024-07-14 23:15:34'),
(17, 'complaint', 'Ilene Hayman', 'ilene.hayman4@gmail.com', 'Ilene Hayman', 'Barbados', '7852057305', NULL, 'WANTED: Partnerships & Agents for Global E-commerce Firm\r\n\r\n4U2 Inc., a premier E-commerce , Sourcing Brokerage firm, is actively seeking partnerships and collaboration with manufacturers and wholesalers for agricultural, commercial, and residential products. We offer a diverse marketplace for both new and used items, including vehicles and equipment.\r\n\r\nWhy Choose 4U2 Inc.? (see https.//www.4u2inc.com)\r\n\r\nGlobal reach for your products\r\nImmediate requirements for a wide range of items\r\nOpportunity to expand your business network\r\nJoin Our Team We’re also looking for Independent Contractor Agents (Account Executives) to help us discover new business opportunities. Whether you’re seeking a full-time or part-time role, you can earn up to $60,000 based on performance.\r\n\r\nGet in Touch Don’t miss out on this opportunity. Contact us at 4u2inc123@gmail.com to learn more or to start our partnership today!\r\n\r\nThis version is more direct and easier to read, highlighting the key points and call to action for potential partners and agents. If you need further refinements or have specific requirements, feel free to let me know!', '2024-07-15 06:13:23', '2024-07-15 06:13:23'),
(18, 'complaint', 'Flor Hutt', 'hutt.flor@hotmail.com', 'Flor Hutt', 'Eritrea', '575262285', NULL, 'Hello,\r\n\r\nIt is with sad regret that after 12 years, LeadsMax.biz is shutting down.\r\n\r\nWe have made all our databases available on our website.\r\n\r\n25 Million companies\r\n527 Million People\r\n\r\nLeadsMax.biz', '2024-07-15 14:44:40', '2024-07-15 14:44:40'),
(19, 'complaint', 'Phil Stewart', 'noreplyhere@aol.com', 'Melaine Powers', 'Ukraine', '342-123-4456', 'http://aol.com', 'Next-Level Advertising: Ready to elevate your ad game? Imagine your message appearing in website contact forms worldwide, reaching heaps of potential customers! Starting at just under $100, our affordable packages pack a punch. Email me now to chat more about getting your brand out there!\r\n\r\nPhil Stewart\r\nEmail: z4pglc@gomail2.xyz\r\nSkype: form-blasting', '2024-07-16 16:49:45', '2024-07-16 16:49:45'),
(20, 'enquiry', 'Syretta', 'tcqwbcwcjm.q@silesia.life', 'Syretta Malagon guzman', 'Afghanistan', '1', 'Syretta Malagon guzman', 'Syretta Malagon guzman', '2024-07-16 17:52:11', '2024-07-16 17:52:11'),
(21, 'complaint', 'Phil Stewart', 'noreplyhere@aol.com', 'Dorris Gage', 'South Korea', '342-123-4456', 'http://aol.com', 'Blast Your Message: Ready to send your message across the digital universe? Imagine your brand reaching countless website contact forms worldwide! For just under $100, unlock the potential to reach 1 million forms. Contact me below for details.\r\n\r\nP. Stewart\r\nEmail: pe7c9c@gomail2.xyz\r\nSkype: form-blasting', '2024-07-17 16:19:04', '2024-07-17 16:19:04'),
(22, 'enquiry', 'Kaen', 'tcdbdjmwcb.q@silesia.life', 'Kaen Corlulu', 'Afghanistan', '1', 'Kaen Corlulu', 'Kaen Corlulu', '2024-07-18 19:15:58', '2024-07-18 19:15:58'),
(23, 'enquiry', 'RussellWer', 'yasen.krasen.13+91028@mail.ru', 'google', 'Philippines', '88936345859', NULL, 'Ofedkwdkjwkjdkwjdkjw jdwidjwijdwfw fjdkqwasqfoewofjewof ojqwejfqwkdokjwofjewofjewoi peernetics.io', '2024-07-18 19:57:18', '2024-07-18 19:57:18'),
(24, 'enquiry', 'Nonna', 'tcphhbqqhq.q@silesia.life', 'Nonna Kaucky', 'Afghanistan', '1', 'Nonna Kaucky', 'Nonna Kaucky', '2024-07-20 12:25:08', '2024-07-20 12:25:08'),
(25, 'enquiry', 'Brindi', 'tcmmjmhtpp.q@silesia.life', 'Brindi Fasiolo', 'Afghanistan', '1', 'Brindi Fasiolo', 'Brindi Fasiolo', '2024-07-22 06:35:06', '2024-07-22 06:35:06'),
(26, 'complaint', 'Hanna', 'magicmat@peernetics.io', 'Hanna Alger', 'Finland', '471765454', 'https://www.cnn.com', 'Get The Worlds Greatest Magic Sand Free Beach Mat!\r\n\r\nWatch sand, dirt & dust disappear right before your eyes! It\'s perfect for beach, picnic, camping or hiking.\r\n\r\nAct Now And Receive A Special Discount For Our Magic Mat!\r\n\r\nGet Yours Here:  https://magicmats.co\r\n\r\nBest Wishes, \r\n \r\nHanna', '2024-07-23 07:07:07', '2024-07-23 07:07:07'),
(27, 'complaint', 'Trudy', 'magicmat@peernetics.io', 'Trudy Varnum', 'Cape Verde', '499644229', 'https://www.cnn.com', 'Get The Worlds Greatest Magic Sand Free Beach Mat!\r\n\r\nWatch sand, dirt & dust disappear right before your eyes! It\'s perfect for beach, picnic, camping or hiking.\r\n\r\nAct Now And Receive A Special Discount For Our Magic Mat!\r\n\r\nGet Yours Here:  https://magicmats.co\r\n\r\nKind Regards, \r\n \r\nTrudy', '2024-07-23 14:35:49', '2024-07-23 14:35:49'),
(28, 'complaint', 'Jens Hardwick', 'jens.hardwick@gmail.com', 'Jens Hardwick', 'Kenya', '625735417', NULL, 'Have you seen a great feature or an entire website design that you love and wish that you could have for your business?\r\n\r\nWe can make it happen and at wholesale rates.\r\n\r\nWhy pay $50+ per hour for web development work, \r\nwhen you can get higher quality results AT LESS THAN HALF THE COST? \r\n\r\nWe are a FULL SERVICE, USA managed web development agency offering wholesale pricing.\r\n\r\nNo job too big or small. Test us out to see our value.\r\n\r\nUse the link in my signature, for a quick turn around quote.\r\n\r\n\r\n\r\nKristine Avocet\r\nSenior Web Specialist \r\nFusion Web Experts  \r\n186 Daniel Island Drive \r\nDaniel Island, SC 29492 \r\nwww.fusionwebexperts.tech', '2024-07-23 15:30:47', '2024-07-23 15:30:47'),
(29, 'complaint', 'Deanne Sherriff', 'sherriff.deanne54@googlemail.com', 'Deanne Sherriff', 'San Marino', '246797817', NULL, 'Tired of overpaying for simple web work and website updates?\r\n\r\nWhy pay $50+ per hour for web development work, \r\nwhen you can get higher quality results AT LESS THAN HALF THE COST? \r\n\r\nWe are a FULL SERVICE, USA managed web development agency with wholesale pricing.\r\n\r\nNo job too big or small. Test us out to see our value.\r\n\r\nUse the link in my signature, for a quick turn around quote.\r\n\r\n\r\n\r\nKristine Avocet\r\nSenior Web Specialist \r\nFusion Web Experts  \r\n186 Daniel Island Drive \r\nDaniel Island, SC 29492 \r\nwww.fusionwebexperts.tech', '2024-07-24 07:32:29', '2024-07-24 07:32:29'),
(30, 'enquiry', 'Kaethe', 'tphbmttctt.q@silesia.life', 'Kaethe Mcpheeters', 'Afghanistan', '1', 'Kaethe Mcpheeters', 'Kaethe Mcpheeters', '2024-07-24 08:51:37', '2024-07-24 08:51:37'),
(31, 'enquiry', 'Ladarrell', 'tpbhppdwwm.q@rightbliss.beauty', 'Ladarrell Solarski', 'Afghanistan', '1', 'Ladarrell Solarski', 'Ladarrell Solarski', '2024-07-26 05:27:53', '2024-07-26 05:27:53'),
(32, 'complaint', 'Patricia Camarena', 'patricia.camarena@msn.com', 'PTraffic', 'China', '0018143008897', 'https://bit.ly/prstraffic', 'Dear peernetics.io team\r\n\r\nWe provide real human traffic with a revenue share option.\r\n\r\nAre you striving for long-term growth and looking forward to skyrocket your ad revenue? Pristine Traffic offers premium traffic solutions that bring engaged, high-quality  traffic to your site easily. Our traffic helps you:\r\n- Enhance user engagement and retention\r\n- Maximize your ad earnings\r\n- Ensure consistent, profitable traffic flow\r\n\r\nJoin the many successful websites that have achieved sustainable growth with our tailored solutions. Don’t let this chance to boost your ad revenue and secure long-term success slip away.\r\n\r\nLearn more about Pristine Traffic and get started today: https://bit.ly/prstraffic\r\n\r\nThanks\r\n\r\nAbigail Murphy\r\nPristine Traffic\r\nabigail@pristinetraffic.com\r\nWhatsApp: +18143008897\r\nhttps://bit.ly/prstraffic', '2024-07-26 16:24:45', '2024-07-26 16:24:45'),
(33, 'complaint', 'Patricia Camarena', 'patricia.camarena@msn.com', 'PTraffic', 'China', '0018143008897', 'https://bit.ly/prstraffic', 'Dear peernetics.io team\r\n\r\nWe provide real human traffic with a revenue share option.\r\n\r\nAre you striving for long-term growth and looking forward to skyrocket your ad revenue? Pristine Traffic offers premium traffic solutions that bring engaged, high-quality  traffic to your site easily. Our traffic helps you:\r\n- Enhance user engagement and retention\r\n- Maximize your ad earnings\r\n- Ensure consistent, profitable traffic flow\r\n\r\nJoin the many successful websites that have achieved sustainable growth with our tailored solutions. Don’t let this chance to boost your ad revenue and secure long-term success slip away.\r\n\r\nLearn more about Pristine Traffic and get started today: https://bit.ly/prstraffic\r\n\r\nThanks\r\n\r\nAbigail Murphy\r\nPristine Traffic\r\nabigail@pristinetraffic.com\r\nWhatsApp: +18143008897\r\nhttps://bit.ly/prstraffic', '2024-07-26 16:24:47', '2024-07-26 16:24:47'),
(34, 'complaint', 'Patricia Camarena', 'patricia.camarena@msn.com', 'PTraffic', 'China', '0018143008897', 'https://bit.ly/prstraffic', 'Dear peernetics.io team\r\n\r\nWe provide real human traffic with a revenue share option.\r\n\r\nAre you striving for long-term growth and looking forward to skyrocket your ad revenue? Pristine Traffic offers premium traffic solutions that bring engaged, high-quality  traffic to your site easily. Our traffic helps you:\r\n- Enhance user engagement and retention\r\n- Maximize your ad earnings\r\n- Ensure consistent, profitable traffic flow\r\n\r\nJoin the many successful websites that have achieved sustainable growth with our tailored solutions. Don’t let this chance to boost your ad revenue and secure long-term success slip away.\r\n\r\nLearn more about Pristine Traffic and get started today: https://bit.ly/prstraffic\r\n\r\nThanks\r\n\r\nAbigail Murphy\r\nPristine Traffic\r\nabigail@pristinetraffic.com\r\nWhatsApp: +18143008897\r\nhttps://bit.ly/prstraffic', '2024-07-26 16:24:53', '2024-07-26 16:24:53'),
(35, 'complaint', 'Patricia Camarena', 'patricia.camarena@msn.com', 'PTraffic', 'China', '0018143008897', 'https://bit.ly/prstraffic', 'Dear peernetics.io team\r\n\r\nWe provide real human traffic with a revenue share option.\r\n\r\nAre you striving for long-term growth and looking forward to skyrocket your ad revenue? Pristine Traffic offers premium traffic solutions that bring engaged, high-quality  traffic to your site easily. Our traffic helps you:\r\n- Enhance user engagement and retention\r\n- Maximize your ad earnings\r\n- Ensure consistent, profitable traffic flow\r\n\r\nJoin the many successful websites that have achieved sustainable growth with our tailored solutions. Don’t let this chance to boost your ad revenue and secure long-term success slip away.\r\n\r\nLearn more about Pristine Traffic and get started today: https://bit.ly/prstraffic\r\n\r\nThanks\r\n\r\nAbigail Murphy\r\nPristine Traffic\r\nabigail@pristinetraffic.com\r\nWhatsApp: +18143008897\r\nhttps://bit.ly/prstraffic', '2024-07-26 16:24:56', '2024-07-26 16:24:56'),
(36, 'complaint', 'Search Engine Index', 'submissions@searchindex.site', 'Ila Elkins', 'China', '882758188', NULL, 'Hello,\r\n\r\nfor your website do be displayed in searches your domain needs to be indexed in the Google Search Index.\r\n\r\nTo add your domain to Google Search Index now, please visit \r\n\r\nhttps://searchregister.info/', '2024-07-26 17:43:40', '2024-07-26 17:43:40'),
(37, 'complaint', 'LeadsMax.biz', 'johnson.carnahan38@gmail.com', 'LeadsMax.biz', 'Oman', '7727399881', NULL, 'Hello from LeadsMax.biz!!\r\n\r\nWe are shutting down and have made all our data available for all the countries!\r\n\r\nCome check us out and search your business and consumer data for free\r\n\r\nLeadsMax.biz', '2024-07-27 00:05:13', '2024-07-27 00:05:13'),
(38, 'complaint', 'Jay', 'fastprocess006@outlook.com', 'Boost Your Operational Efficiency with Our Expert Team', 'Libya', '550324066', NULL, 'Hi,\r\n\r\nThis is Jay. We are a small but experienced team specializing in delivering day-to-day business operational tasks with high-quality support for any department within your organization.\r\n\r\nTake advantage of our flexible hiring options—full-time, part-time, or hourly. We\'re confident in our capabilities and invite you to experience our efficiency with a one or two-day trial.\r\n\r\nContact us at Fastprocess006@outlook.com to see how we can seamlessly integrate into your business and drive success.', '2024-07-29 18:50:49', '2024-07-29 18:50:49'),
(39, 'complaint', 'Phil Stewart', 'noreplyhere@aol.com', 'Donnie Danglow', 'Uruguay', '342-123-4456', 'http://aol.com', 'Hi, would you like your ad to reach millions of contact forms just like this one did? Check out my site below for more details.\r\n\r\nhttp://9mtwlk.contactblasting.xyz', '2024-08-01 20:17:09', '2024-08-01 20:17:09'),
(40, 'complaint', 'Phil Stewart', 'noreplyhere@aol.com', 'Erik Bullins', 'Sri Lanka', '342-123-4456', 'http://aol.com', 'Ever considered having your ad blasted to millions of contact forms? You\'re reading this message, so you know it works! Check out my site below for more info.\r\n\r\nhttp://zqnsbe.contactformmarketing.xyz', '2024-08-02 10:55:42', '2024-08-02 10:55:42'),
(41, 'enquiry', 'Ziair', 'twjcdbpdjq.q@rightbliss.beauty', 'Ziair Siefring', 'Afghanistan', '1', 'Ziair Siefring', 'Ziair Siefring', '2024-08-03 03:34:42', '2024-08-03 03:34:42'),
(42, 'complaint', 'Florencia Seiler', 'florencia.seiler@gmail.com', 'Florencia Seiler', 'Russia', '9544575730', NULL, 'Are you frustrated by the high prices for simple web work and website updates?\r\n\r\nWhy pay $50+ per hour for web development work, \r\nwhen you can get higher quality results AT LESS THAN HALF THE COST? \r\n\r\nWe are a FULL SERVICE, USA managed web development agency with wholesale pricing.\r\n\r\nNo job too big or small. Test us out to see our value.\r\n\r\nUse the link in my signature, for a quick turn around quote.\r\n\r\n\r\n\r\nKristine Avocet\r\nSenior Web Specialist \r\nFusion Web Experts  \r\n186 Daniel Island Drive \r\nDaniel Island, SC 29492 \r\nwww.fusionwebexperts.tech', '2024-08-03 17:13:49', '2024-08-03 17:13:49'),
(43, 'enquiry', 'RobertNaf', 'kdsr323@icloud.com', 'google', 'Cook Islands', '85861591917', NULL, 'NEW IPHONE 16 PRO MAX? YOURS FOR FREE http://track.colincowie.com/c/?url=https%3A%2F%2Ftelegra.ph%2Fiphone-07-06-5%3F4555', '2024-08-04 07:39:10', '2024-08-04 07:39:10'),
(44, 'complaint', 'Chu Chery', 'chery.chu@gmail.com', 'Chu Chery', 'Isle of Man', '3315680595', NULL, 'Do you have a list of website updates that you want to deploy but hate having to pay the INSANE prices to get it done?\r\n\r\nWhy pay $50+ per hour for web development work, \r\nwhen you can get higher quality results AT LESS THAN HALF THE COST? \r\n\r\nWe are a FULL SERVICE, USA managed web development agency offering wholesale pricing.\r\n\r\nNo job too big or small. Test us out to see our value.\r\n\r\nUse the link in my signature, for a quick turn around quote.\r\n\r\n\r\n\r\nKristine Avocet\r\nSenior Web Specialist \r\nFusion Web Experts  \r\n186 Daniel Island Drive \r\nDaniel Island, SC 29492 \r\nwww.fusionwebexperts.tech', '2024-08-04 09:18:16', '2024-08-04 09:18:16'),
(45, 'complaint', 'Zain', 'projectsexpert222@outlook.com', 'Personal Assistant', 'U.S. Virgin Islands', '9042259166', NULL, 'Hi, Are you in need of a personal assistant to streamline your daily business operations and simplify your life? I’m Zain Murt, and I can assist with administrative tasks, marketing, email management, website management, social media, content creation, project planning, bookkeeping, software training, and back-office support.\r\n\r\nIf you’re interested, please send an email to projectsexpert222@outlook.com with the tasks you need help with, and I\'ll handle the rest.\r\n\r\nBest regards,  \r\nZain Murt', '2024-08-05 03:08:56', '2024-08-05 03:08:56'),
(46, 'enquiry', 'RobertNaf', 'valbl3579@aol.com', 'google', 'Cook Islands', '82158418364', NULL, 'WOW IPHONE 16 PRO MAX https://prod.stocker-app.com/api/article?url=https%3A%2F%2Ftelegra.ph%2Fiphone-07-06-5%3F6663', '2024-08-05 20:01:34', '2024-08-05 20:01:34'),
(47, 'complaint', 'Estela', 'peernetics.io@gmail.com', 'Estela Mayorga', 'Sierra Leone', '485355145', 'https://www.bbc.com', 'Hello there \r\n\r\nI wanted to reach out and let you know about our new dog harness. It\'s really easy to put on and take off - in just 2 seconds - and it\'s personalized for each dog. \r\nPlus, we offer a lifetime warranty so you can be sure your pet is always safe and stylish.\r\n\r\nWe\'ve had a lot of success with it so far and I think your dog would love it. \r\n\r\nGet yours today with 50% OFF: https://caredogbest.com\r\n\r\nFREE Shipping - TODAY ONLY! \r\n\r\nMany Thanks, \r\n\r\nEstela', '2024-08-06 03:17:52', '2024-08-06 03:17:52'),
(48, 'complaint', 'Luckey', 'webdesignservices111@outlook.com', 'Website designer and developer', 'Ecuador', NULL, NULL, 'Hi, This is Lucky, a website designer and developer. In 17 years of my career, I have worked on broad spectrum of technologies like PHP, WordPress, Codeigniter, Laravel, Opencart, Prestashop, Wix, Html, CSS, JavaScript, Drupal, Shopify, magento. I can help you in creating a new page, new design, resolving issues, upgrading website to latest version, making mobile responsive website, developing new functionality, 3D Model Integration, changing any existing functionality, API integration, Payment gateway or shipping functionality related work, Third-party apps integration in website, monthly maintenance, plugin or theme related work, improving design of all pages or uploading content. I have a couple of team members to assist me on projects. \r\n\r\nLet\'s chat on webdesignservices111@outlook.com with your requirement and I can share pricing and portfolio.', '2024-08-07 04:11:57', '2024-08-07 04:11:57'),
(49, 'support', 'Iron', 'Global@orisun.group', 'Orisun Group', 'Cyprus', NULL, 'Orisun.group', 'Dear team, \r\nWe are gamble company and are looking for payment gateway provider for India and SEA market. Please let us know if you provide such the service and details.\r\nRegards,\r\nIron', '2024-08-09 09:14:46', '2024-08-09 09:14:46'),
(50, 'complaint', 'Arin', 'bizassistance008@outlook.com', 'Data entry services', 'Martinique', '1139949828', NULL, 'Hello, My name is Arin Roy. I provide data entry services at USD 9/hour. I can work as per instructions and follow step-by-step instructions. \r\n\r\nIf you are interested, Please share your requirements at bizassistance008@outlook.com and we can take a video call.', '2024-08-12 14:28:20', '2024-08-12 14:28:20'),
(51, 'enquiry', 'Jerrysinty', 'evergreenmizan21@gmail.com', 'google', 'New Zealand', '81769757684', NULL, 'Claim Your $50,000 Reward: Act Fast https://script.google.com/macros/s/AKfycbyIXXWFKNXiUtSgDEV_CW6nMyklyQRHGLvhFWhzzIDA0D2rQPqr8xj47ednlMIlWCQqCA/exec', '2024-08-13 22:48:19', '2024-08-13 22:48:19'),
(52, 'enquiry', 'Jerrysinty', 'navaneethansn2@gmail.com', 'google', 'New Zealand', '87588447519', NULL, 'INSTANT COLLECT: GET YOUR $50,000 PRIZE NOW https://script.google.com/macros/s/AKfycbzm4yq5AHY-Fau8dMfFoK1sKrdT7ilP3GR1MuJVVwtcimHURhA9I_LaCINWLfLf76Bl9w/exec', '2024-08-15 08:52:16', '2024-08-15 08:52:16'),
(53, 'complaint', 'Colin Doris', 'doris.colin@gmail.com', 'Colin Doris', 'Philippines', '3349160269', NULL, 'Have you seen a great feature or an entire website design that you love and wish that you could have for your business?\r\n\r\nWe can make it happen and at wholesale rates.\r\n\r\nWhy pay $50+ per hour for web development work, \r\nwhen you can get higher quality results AT LESS THAN HALF THE COST? \r\n\r\nWe are a FULL SERVICE, USA managed web development agency offering wholesale pricing.\r\n\r\nNo job too big or small. Test us out to see our value.\r\n\r\nUse the link in my signature, for a quick turn around quote.\r\n\r\n\r\n\r\nKristine Avocet\r\nSenior Web Specialist \r\nFusion Web Experts  \r\n186 Daniel Island Drive \r\nDaniel Island, SC 29492 \r\nwww.fusionwebexperts.tech', '2024-08-16 21:08:47', '2024-08-16 21:08:47'),
(54, 'complaint', 'Phil Stewart', 'noreplyhere@aol.com', 'Gavin Mathy', 'Puerto Rico', '342-123-4456', 'http://aol.com', 'Ever thought about having your ad blasted to millions of contact forms? You\'re reading this message, so you know it works! Check out my site below for more info.\r\n\r\nhttp://rcj476.contactformmarketing.xyz', '2024-08-16 21:41:37', '2024-08-16 21:41:37'),
(55, 'complaint', 'Neva Dupree', 'dupree.neva@gmail.com', 'Neva Dupree', 'Trinidad & Tobago', '3874694019', NULL, 'Are you frustrated by the high prices for simple web work and website updates?\r\n\r\nWhy pay $50+ per hour for web development work, \r\nwhen you can get higher quality results AT LESS THAN HALF THE COST? \r\n\r\nWe are a FULL SERVICE, USA managed web development agency with wholesale pricing.\r\n\r\nNo job too big or small. Test us out to see our value.\r\n\r\nUse the link in my signature, for a quick turn around quote.\r\n\r\n\r\n\r\nKristine Avocet\r\nSenior Web Specialist \r\nFusion Web Experts  \r\n186 Daniel Island Drive \r\nDaniel Island, SC 29492 \r\nwww.fusionwebexperts.tech', '2024-08-17 12:13:53', '2024-08-17 12:13:53'),
(56, 'complaint', 'Phil Stewart', 'noreplyhere@aol.com', 'Lorrine Soria', 'Serbia', '342-123-4456', 'http://aol.com', 'Ever thought about having your ad blasted to millions of contact forms? You\'re reading this message, so you know it works! Check out my site below for more info.\r\n\r\nhttp://vglgbe.contactblasting.xyz', '2024-08-17 17:57:29', '2024-08-17 17:57:29'),
(57, 'complaint', 'Caroline', 'info@coffman.pawsafer.net', 'Caroline Coffman', 'Spain', '267358423', 'https://www.bbc.com', 'Is your dog\'s nails getting too long? If you\'re tired of going to the vet or groomer to get them trimmed, why not try PawSafer™? \r\nWith PawSafer™, you can trim your dog\'s nails from the comfort of your own home, and it only takes a few minutes!\r\n\r\nPawSafer™ is the safest and most convenient way to trim your dog\'s nails, and it\'s very affordable. \r\n\r\nGet it while it\'s still 50% OFF + FREE Shipping\r\n\r\nBuy here: https://pawsafer.net\r\n \r\nRegards, \r\n \r\nCaroline', '2024-08-18 12:14:00', '2024-08-18 12:14:00'),
(58, 'enquiry', 'Davidpoilm', 'vcobbs74@yahoo.com', 'google', 'Sweden', '85751693625', NULL, 'Your Balance Is $50,000: Immediate Withdrawal Needed https://script.google.com/macros/s/AKfycbzLf1uFLWJ3SzLo3DoX29khsp89g8spjxazIcMGq6S5xno_Lh1nMURsPNLjwyevc7CrYg/exec', '2024-08-23 04:23:25', '2024-08-23 04:23:25'),
(59, 'enquiry', 'Faige', 'dqwhhtdmwb.q@rightbliss.beauty', 'Faige Dezee', 'Afghanistan', '1', 'Faige Dezee', 'Faige Dezee', '2024-08-25 16:01:27', '2024-08-25 16:01:27'),
(60, 'complaint', 'Tanu', 'brandbuildingassistance@outlook.com', 'Content Writing Service', 'Bosnia & Herzegovina', '7700803891', NULL, 'Hello, I’m Tanu, a HubSpot Certified copywriter and content writer, distinguished as one of the few globally certified in this field. With 8 years of experience, I excel in crafting compelling content across various formats, including blogs, articles, e-commerce product descriptions, SEO content, website copy, business service descriptions, newsletters, brochures, and SOPs. I carefully ensure that each word is strategically chosen to resonate with your audience while integrating relevant keywords with precise density to boost SEO effectiveness. Additionally, I can craft Meta titles and descriptions tailored for every page of your website, ensuring optimal search engine visibility.\r\n\r\nIf you have any current content needs, please don’t hesitate to contact me at brandbuildingassistance@outlook.com', '2024-08-25 17:46:09', '2024-08-25 17:46:09'),
(61, 'complaint', 'Desmond Keister', 'desmond.keister@googlemail.com', 'Desmond Keister', 'Uganda', '134367023', NULL, 'Payroll, Insurance, inventory, marketing EXPENSES ……UGHH\r\n\r\nWant to remove the stress and get some breathing room?\r\n\r\nGet a no obligation working capital quote in less than 2 minutes. \r\n\r\n++ This Offer Only For Businesses In The USA ++\r\n\r\nGet in touch with me below for more info\r\n\r\nElizabeth Miller\r\nelizabeth.miller@helloratesfastfunding.com\r\nhttps://www.helloratesfastfunding.com', '2024-08-30 03:23:12', '2024-08-30 03:23:12'),
(62, 'complaint', 'Mohammad', 'info@maclanachan.medicopostura.com', 'Mohammad Maclanachan', 'Pitcairn Islands', NULL, 'https://www.bbc.com', 'Morning \r\n\r\nLooking to improve your posture and live a healthier life? Our Medico Postura™ Body Posture Corrector is here to help!\r\n\r\nExperience instant posture improvement with Medico Postura™. This easy-to-use device can be worn anywhere, anytime – at home, work, or even while you sleep.\r\n\r\nMade from lightweight, breathable fabric, it ensures comfort all day long.\r\n\r\nGrab it today at a fantastic 60% OFF: https://medicopostura.com\r\n\r\nPlus, enjoy FREE shipping for today only!\r\n\r\nDon\'t miss out on this amazing deal. Get yours now and start transforming your posture!\r\n\r\nRegards, \r\n\r\nMohammad', '2024-08-30 17:02:07', '2024-08-30 17:02:07'),
(63, 'complaint', 'Alice O\'Donovan', 'alice.odonovan8@gmail.com', 'Alice O\'Donovan', 'Indonesia', '695051698', NULL, 'Running a business is not easy.\r\nEspecially when the cost of nearly everything continues to skyrocket.\r\n\r\nCut yourself a break from the stress of rising expenses with a working capital solution that will provide you the relief needed to get through these challenging times.\r\n\r\nGet a no obligation working capital quote in less than 2 minutes. \r\n\r\n== Must Be A US Based Business To Qualify ==\r\n\r\nSend me a message at my contact info below for info\r\n\r\nElizabeth Miller\r\nelizabeth.miller@helloratesfastfunding.com\r\nhttps://www.helloratesfastfunding.com', '2024-08-31 00:27:39', '2024-08-31 00:27:39'),
(64, 'complaint', 'Cathy Zimpel', 'zimpel.cathy@gmail.com', 'Cathy Zimpel', 'France', NULL, NULL, 'Tired of overpaying for simple web work and website updates?\r\n\r\nWhy pay $50+ per hour for web development work, \r\nwhen you can get higher quality results AT LESS THAN HALF THE COST? \r\n\r\nWe are a FULL SERVICE, USA managed web development agency with wholesale pricing.\r\n\r\nNo job too big or small. Test us out to see our value.\r\n\r\nUse the link in my signature, for a quick turn around quote.\r\n\r\n\r\n\r\nKristine Avocet\r\nSenior Web Specialist \r\nFusion Web Experts  \r\n186 Daniel Island Drive \r\nDaniel Island, SC 29492 \r\nwww.fusionwebexperts.tech', '2024-09-02 15:35:44', '2024-09-02 15:35:44'),
(65, 'enquiry', 'Valeron83Few', 'kingbigmoo@gmail.com', 'google', 'Slovakia', '82224192314', 'http://secure-casinos.com', 'Hello! \r\nFlip your way to winnings with the $50,000 Flip For Fortune Giveaway at jackpot city Casino! Find out more - https://discord.gg/B5Bjg5azkF  \r\n \r\nGood luck :)', '2024-09-02 17:24:12', '2024-09-02 17:24:12'),
(66, 'complaint', 'Alba Brierly', 'brierly.alba@hotmail.com', 'Alba Brierly', 'Bulgaria', '4832132281', NULL, 'Important: \r\nYour Vetted Business listing is no longer visible because the annual verification email that we sent, was returned to us as “undeliverable”.\r\n\r\nIf the returned email was in error, you can add or update your email & listing info using the link in my signature.\r\n\r\nOnce remedied, you’ll reactivate your Vetted Directory benefits:\r\n \r\n+A robust Vetted business profile that promotes trust, transparency & credibility in your market\r\n+Powerful SEO for your business when you add your URL link in your profile.\r\n+Local leads from consumers that use our national platform to find Vetted Businesses by category\r\n \r\nSee link in my signature to add /update your Vetted business details, and get the powerful benefits of being a Vetted business in your local market, your service category and your business specialty.\r\n\r\nYours in trust & transparency,\r\n\r\nSarah McCormick\r\nVetted Business Specialist\r\n295 Seven Farms Drive Suite C-201\r\nCharleston, SC 29492\r\nsarah.mccormick@vettedpros.com\r\nhttps://vettedpros.com/1-2/?a=Get-Your-Business-Vetted!', '2024-09-02 19:22:16', '2024-09-02 19:22:16'),
(67, 'complaint', 'Rusty Disher', 'rusty.disher@outlook.com', 'Rusty Disher', 'St. Lucia', '3149090481', NULL, 'Have you seen a great feature or an entire website design that you love and wish that you could have for your business?\r\n\r\nWe can make it happen and at wholesale rates.\r\n\r\nWhy pay $50+ per hour for web development work, \r\nwhen you can get higher quality results AT LESS THAN HALF THE COST? \r\n\r\nWe are a FULL SERVICE, USA managed web development agency offering wholesale pricing.\r\n\r\nNo job too big or small. Test us out to see our value.\r\n\r\nUse the link in my signature, for a quick turn around quote.\r\n\r\n\r\n\r\nKristine Avocet\r\nSenior Web Specialist \r\nFusion Web Experts  \r\n186 Daniel Island Drive \r\nDaniel Island, SC 29492 \r\nwww.fusionwebexperts.tech', '2024-09-03 08:23:31', '2024-09-03 08:23:31'),
(68, 'complaint', 'Vai', 'hireonline4455@outlook.com', 'Content Writing Service', 'Austria', '7753342125', NULL, 'Hi, I\'m Vai Michael, a seasoned copywriter and content strategist with over 12 years of experience helping brands like yours create compelling and impactful content. From blog posts and articles to SEO-driven web content, e-commerce product descriptions, business service write-ups, newsletters, brochures, and detailed SOPs—I’ve done it all.I pride myself on delivering content that not only meets the brief but also resonates with the audience and drives results. \r\n\r\nMy rate is a competitive $35 per 1,000 words, ensuring you get top-tier quality without breaking the bank.If you\'re looking to enhance your content or have any projects in mind, I’d love to chat about how I can help. \r\n\r\nFeel free to drop me a line at hireonline4455@outlook.com', '2024-09-03 16:39:52', '2024-09-03 16:39:52'),
(69, 'complaint', 'Phil Stewart', 'noreplyhere@aol.com', 'Kathie Halstead', 'Canary Islands', '342-123-4456', 'http://aol.com', 'Ever thought about having your ad blasted to millions of contact forms? You\'re reading this message, so you know it works! Check out my site below for more info.\r\n\r\nhttp://psf0zq.contactuspagemarketing.xyz', '2024-09-03 19:57:21', '2024-09-03 19:57:21'),
(70, 'complaint', 'Phil Stewart', 'noreplyhere@aol.com', 'Ross Crookes', 'Nicaragua', '342-123-4456', 'http://aol.com', 'Hi, would you be interested in having your ad reach millions of contact forms just like this one did? Check out my site below for more details.\r\n\r\nhttp://hs96rm.contactuspagemarketing.xyz', '2024-09-04 10:34:51', '2024-09-04 10:34:51'),
(71, 'complaint', 'Sean Scobie', 'sean.scobie@hotmail.com', 'Sean Scobie', 'Macao SAR China', '390098077', NULL, 'Rising business expenses are taking a toll on small business owners.\r\n\r\nYou are not alone. It\'s affecting every industry.\r\n\r\nOne way to give yourself some breathing room is to obtain enough working capital to bridge you through the tough times. \r\n\r\nGet a no obligation working capital quote in less than 2 minutes. \r\n\r\n++ This Offer Only For Businesses In The USA ++\r\n\r\nGet in touch with me below for more info\r\n\r\nElizabeth Miller\r\nelizabeth.miller@helloratesfastfunding.com\r\nhttps://www.helloratesfastfunding.com', '2024-09-04 22:13:54', '2024-09-04 22:13:54'),
(72, 'complaint', 'Lucie Tuckett', 'lucie.tuckett@gmail.com', 'Lucie Tuckett', 'Tunisia', '474732007', NULL, 'How would you like a surefire way to dominate your local market & win more sales from your competition?\r\n\r\nGetting Vetted is a powerful sales multiplier that helps you close 60 % more deals. \r\nThat’s a game changer.\r\nVetted also provides great SEO & FREE local leads\r\nStart your 30 Day FREE trial & see the results for yourself. \r\nUSA Businesses Only\r\n\r\nSarah McCormick\r\nVetted Business Specialist\r\n295 Seven Farms Drive Suite C-201\r\nCharleston, SC 29492\r\nsarah.mccormick@vettedpros.com\r\nhttps://vettedpros.com/1-2/?a=Are-You-Ready-To-Dominate-Your-Local-Market?', '2024-09-05 05:05:06', '2024-09-05 05:05:06'),
(73, 'complaint', 'Leticia Sankt', 'leticia.sankt@msn.com', 'Leticia Sankt', 'Georgia', '794178932', NULL, 'Hi there, I apologize for using your contact form, \r\nbut I wasn\'t sure who the right person was to speak with in your company. \r\nWe have a patented application that creates Local Area pages that rank on \r\ntop of Google within weeks, we call it Local Magic.  Here is a link to the \r\nproduct page https://www.mrmarketingres.com/local-magic/ . The product \r\nleverages technology where these pages are managed dynamically by AI and \r\nit is ideal for promoting any type of business that gets customers from Google.  Can I share a testimonial \r\nfrom one of our clients in the same industry?  I\'d prefer to do a short zoom to \r\nillustrate their full case study if you have time for it? \r\nYou can reach me at marketing@mrmarketingres.com or 843-720-7301. And if this isn\'t a fit please feel free to email me and I\'ll be sure not to reach out again.  Thanks!', '2024-09-06 17:54:39', '2024-09-06 17:54:39'),
(74, 'complaint', 'Kian Vannoy', 'kian.vannoy24@gmail.com', 'Kian Vannoy', 'San Marino', '353065069', NULL, 'Rising business expenses are taking a toll on small business owners.\r\n\r\nYou are not alone. It\'s affecting every industry.\r\n\r\nOne way to give yourself some breathing room is to obtain enough working capital to bridge you through the tough times. \r\n\r\nGet a no obligation working capital quote in less than 2 minutes. \r\n\r\n++ This Offer Only For Businesses In The USA ++\r\n\r\nContact me below for details\r\n\r\nElizabeth Miller\r\nelizabeth.miller@helloratesfastfunding.com\r\nhttps://www.helloratesfastfunding.com', '2024-09-07 03:51:14', '2024-09-07 03:51:14'),
(75, 'complaint', 'Jasmin Oddie', 'oddie.jasmin@outlook.com', 'Jasmin Oddie', 'Madagascar', '5226109146', NULL, 'Hi there, I apologize for using your contact form, \r\nbut I wasn\'t sure who the right person was to speak with in your company. \r\nWe have a patented application that creates Local Area pages that rank on \r\ntop of Google within weeks, we call it Local Magic.  Here is a link to the \r\nproduct page https://www.mrmarketingres.com/local-magic/ . The product \r\nleverages technology where these pages are managed dynamically by AI and \r\nit is ideal for promoting any type of business that gets customers from Google.  Can I share a testimonial \r\nfrom one of our clients in the same industry?  I\'d prefer to do a short zoom to \r\nillustrate their full case study if you have time for it? \r\nYou can reach me at marketing@mrmarketingres.com or 843-720-7301. And if this isn\'t a fit please feel free to email me and I\'ll be sure not to reach out again.  Thanks!', '2024-09-07 14:34:12', '2024-09-07 14:34:12');
INSERT INTO `contacts` (`id`, `type`, `name`, `email`, `company`, `country`, `phone`, `website`, `message`, `created_at`, `updated_at`) VALUES
(76, 'complaint', 'Muhammad Palladino', 'muhammad.palladino@gmail.com', 'Muhammad Palladino', 'Ghana', '4036266339', NULL, 'Hi there, I apologize for using your contact form, \r\nbut I wasn\'t sure who the right person was to speak with in your company. \r\nWe have a patented application that creates Local Area pages that rank on \r\ntop of Google within weeks, we call it Local Magic.  Here is a link to the \r\nproduct page https://www.mrmarketingres.com/local-magic/ . The product \r\nleverages technology where these pages are managed dynamically by AI and \r\nit is ideal for promoting any type of business that gets customers from Google.  Can I share a testimonial \r\nfrom one of our clients in the same industry?  I\'d prefer to do a short zoom to \r\nillustrate their full case study if you have time for it? \r\nYou can reach me at marketing@mrmarketingres.com or 843-720-7301. And if this isn\'t a fit please feel free to email me and I\'ll be sure not to reach out again.  Thanks!', '2024-09-09 04:40:24', '2024-09-09 04:40:24'),
(77, 'complaint', 'Britney Parkman', 'britney.parkman@gmail.com', 'Britney Parkman', 'Martinique', '2687789031', NULL, 'Important: \r\nYour Vetted Business listing is no longer visible because the annual verification email that we sent, was returned to us as “undeliverable”.\r\n\r\nIf the returned email was in error, you can add or update your email & listing info using the link in my signature.\r\n\r\nOnce remedied, you’ll reactivate your Vetted Directory benefits:\r\n \r\n+A robust Vetted business profile that promotes trust, transparency & credibility in your market\r\n+Powerful SEO for your business when you add your URL link in your profile.\r\n+Local leads from consumers that use our national platform to find Vetted Businesses by category\r\n \r\nSee link in my signature to add /update your Vetted business details, and get the powerful benefits of being a Vetted business in your local market, your service category and your business specialty.\r\n\r\nYours in trust & transparency,\r\n\r\nSarah McCormick\r\nVetted Business Specialist\r\n295 Seven Farms Drive Suite C-201\r\nCharleston, SC 29492\r\nsarah.mccormick@vettedpros.com\r\nhttps://vettedpros.com/1-2/?a=Get-Your-Business-Vetted!', '2024-09-09 15:59:39', '2024-09-09 15:59:39'),
(78, 'complaint', 'Latisha Eleanor', 'eleanor.latisha@outlook.com', 'Latisha Eleanor', 'Kazakhstan', '4589982', NULL, 'Hi there, I apologize for using your contact form, \r\nbut I wasn\'t sure who the right person was to speak with in your company. \r\nWe have a patented application that creates Local Area pages that rank on \r\ntop of Google within weeks, we call it Local Magic.  Here is a link to the \r\nproduct page https://www.mrmarketingres.com/local-magic/ . The product \r\nleverages technology where these pages are managed dynamically by AI and \r\nit is ideal for promoting any type of business that gets customers from Google.  Can I share a testimonial \r\nfrom one of our clients in the same industry?  I\'d prefer to do a short zoom to \r\nillustrate their full case study if you have time for it? \r\nYou can reach me at marketing@mrmarketingres.com or 843-720-7301. And if this isn\'t a fit please feel free to email me and I\'ll be sure not to reach out again.  Thanks!', '2024-09-10 04:22:04', '2024-09-10 04:22:04'),
(79, 'complaint', 'Mandy', 'creativeteamhire@outlook.com', 'Content Writing Service', 'French Southern Territories', '4447502', NULL, 'Hi, I\'m Mandy, a content and copywriter with over 12 years of experience creating content for various industries, including yours. I write blogs, news articles, SEO-friendly web content, product descriptions, business service descriptions, newsletters, brochures, and more. My focus is on delivering content that connects with your audience, improves SEO, and gets results—all written without AI. I also provide reports from paid tools to back up my work. My rate is $35 per 1,000 words, offering great value for high-quality content. \r\n\r\nIf you\'d like to improve your content, feel free to email me at creativeteamhire@outlook.com.', '2024-09-10 05:53:25', '2024-09-10 05:53:25'),
(80, 'complaint', 'Nam', 'info@ligertwood.bangeshop.com', 'Nam Ligertwood', 'Montenegro', '7045440793', 'https://www.bbc.com', 'Good Morning, \r\n\r\nI hope you\'re doing well. I wanted to let you know about our new BANGE backpacks and sling bags that just released.\r\n\r\nBange is perfect for students, professionals and travelers. The backpacks and sling bags feature a built-in USB charging port, making it easy to charge your devices on the go.  Also they are waterproof and anti-theft design, making it ideal for carrying your valuables.\r\n\r\nBoth bags are made of durable and high-quality materials, and are perfect for everyday use or travel.\r\n\r\nOrder yours now at 50% OFF with FREE Shipping: http://bangeshop.com\r\n\r\nEnjoy,\r\n\r\nNam', '2024-09-10 17:11:17', '2024-09-10 17:11:17'),
(81, 'complaint', 'Phil Stewart', 'noreplyhere@aol.com', 'Carrie Manifold', 'Canary Islands', '342-123-4456', 'http://aol.com', 'Hi, would you like your ad to reach millions of contact forms just like this one did? Check out my site below for more details.\r\n\r\nhttp://3svszs.contactuspagemarketing.xyz', '2024-09-12 02:32:56', '2024-09-12 02:32:56'),
(82, 'complaint', 'Meri Guerrero', 'guerrero.meri@msn.com', 'Meri Guerrero', 'United Arab Emirates', '6169546525', NULL, 'Have you ever worried that you won’t make payroll?\r\n\r\nAre rising business expenses stressing you out?\r\n\r\nLet us help take this stress away & give you some breathing room. \r\n\r\nGet a no obligation working capital quote in less than 2 minutes. \r\n\r\n== Must Be A US Based Business To Qualify ==\r\n\r\nContact me below for details\r\n\r\nElizabeth Miller\r\nelizabeth.miller@helloratesfastfunding.com\r\nhttps://www.helloratesfastfunding.com', '2024-09-12 18:51:21', '2024-09-12 18:51:21'),
(83, 'complaint', 'Phil Stewart', 'noreplyhere@aol.com', 'Ronda Tomaszewski', 'Tuvalu', '342-123-4456', 'http://aol.com', 'Ever considered having your ad blasted to millions of contact forms? You\'re reading this message, so you know it works! Check out my site below for more info.\r\n\r\nhttp://mm3478.contactformblasting.xyz', '2024-09-13 00:03:30', '2024-09-13 00:03:30'),
(84, 'complaint', 'Abhi', 'efficientmanage007@outlook.com', 'data entry, research, and back office support', 'Indonesia', '6134696215', NULL, 'Hello! I\'m Abhi, a professional with 10 years of experience in data entry, research, and back office support. I’m skilled at understanding and adapting to your process and software. Rates: USD 7/hr–12/hr, with discounts for part/full-time jobs. \r\n\r\nContact me at efficientmanage007@outlook.com', '2024-09-18 09:52:08', '2024-09-18 09:52:08'),
(85, 'complaint', 'Violette Wayne', 'violette.wayne@yahoo.com', 'Violette Wayne', 'Cambodia', '28-10-72-93', NULL, 'We are proud to present our latest product for business data\r\n\r\nExperience our searches on worldwide b2b data\r\n\r\nThis offer is a comprehensive dataset of each country\r\n\r\nWhich are all kept up to date on a monthly basis\r\n\r\nTry out the open search we offer to see the full extent of our dataset\r\n\r\nYou can never have enough leads\r\nLeadsBox.biz', '2024-09-18 18:10:49', '2024-09-18 18:10:49'),
(86, 'complaint', 'Felipa Franklin', 'franklin.felipa@gmail.com', 'Felipa Franklin', 'Marshall Islands', '913702675', NULL, 'Have you ever worried that you won’t make payroll?\r\n\r\nAre rising business expenses stressing you out?\r\n\r\nLet us help take this stress away & give you some breathing room. \r\n\r\nGet a no obligation working capital quote in less than 2 minutes. \r\n\r\n USA Based Businesses Only! \r\n\r\nContact me below for details\r\n\r\nElizabeth Miller\r\nelizabeth.miller@helloratesfastfunding.com\r\nhttps://www.helloratesfastfunding.com', '2024-09-18 21:37:21', '2024-09-18 21:37:21'),
(87, 'complaint', 'Ezequiel Goodlet', 'ezequiel.goodlet@hotmail.com', 'Ezequiel Goodlet', 'Brazil', '595180185', NULL, 'How would you like a surefire way to dominate your local market & win more sales from your competition?\r\n\r\nGetting Vetted is a powerful sales multiplier that helps you close 60 % more deals. \r\nThat’s a game changer.\r\nVetted also provides great SEO & FREE local leads\r\nStart your 30 Day FREE trial & see the results for yourself. \r\nUSA Businesses Only\r\n\r\nSarah McCormick\r\nVetted Business Specialist\r\n295 Seven Farms Drive Suite C-201\r\nCharleston, SC 29492\r\nsarah.mccormick@vettedpros.com\r\nhttps://vettedpros.com/1-2/?a=Are-You-Ready-To-Dominate-Your-Local-Market?', '2024-09-23 00:37:11', '2024-09-23 00:37:11'),
(88, 'complaint', 'Tory Sellwood', 'sellwood.tory@msn.com', 'Tory Sellwood', 'Heard & McDonald Islands', '215416092', NULL, 'Do you have big ideas and plans to update your website, but hate the outrageous fees and slow turn times of most agencies?\r\nWhy pay $45+ per hour for web development work, when you can get higher quality results AT LESS THAN HALF THE COST? \r\n\r\nWe are a FULL SERVICE, USA managed, web development agency offering WHOLESALE PRICING.\r\n\r\nWe charge $20 per hour compared to $35 -$75 per hour in the market.\r\nWe can also do flat project based pricing if that\'s your preference.\r\n\r\nNo job too big or small. Test us out to see our value.\r\n\r\nUse the link in my signature, for a quick turn around quote.\r\n\r\nWarmly,\r\n\r\nDan Setzinger\r\nSenior Web Specialist \r\nFusion Web Experts  \r\n186 Daniel Island Drive \r\nDaniel Island, SC 29492 \r\nDan.Setzinger@FusionWebExpertsUsa.com\r\nhttps://www.FusionWebExpertsUSA.com', '2024-09-25 18:31:16', '2024-09-25 18:31:16'),
(89, 'complaint', 'Emory Ledford', 'emory.ledford@gmail.com', 'Emory Ledford', 'Diego Garcia', '415647468', NULL, 'Are you struggling to get your website updated or is your current “web guy” too busy?\r\n\r\nTired of paying $45+ per hour just for a few tweaks?\r\n\r\nWe are a FULL SERVICE, USA managed, web development agency all at WHOLESALE PRICING.\r\n\r\nWe charge $20 per hour compared to $35 -$75 per hour in the market.\r\nWe can also do flat project based pricing if that\'s your preference.\r\n\r\nNo job is too big or too small. Test us out and immediately see our value.\r\n\r\nUse the link in my signature below , for a quick turn around quote.\r\n\r\nWarmly,\r\n\r\nDan Setzinger\r\nSenior Web Specialist \r\nFusion Web Experts  \r\n186 Daniel Island Drive \r\nDaniel Island, SC 29492 \r\nDan.Setzinger@FusionWebExpertsUsa.com\r\nhttps://www.FusionWebExpertsUSA.com', '2024-09-26 12:26:47', '2024-09-26 12:26:47'),
(90, 'complaint', 'Irving', 'info@seiler.xbags.shop', 'Irving Seiler', 'New Caledonia', '7037395729', 'https://www.bbc.com', 'New Multifunction Anti-theft Waterproof Sling Bag\r\n\r\nThe best ever SUPER Sling Bag: Drop-proof/Anti-theft/Scratch-resistant/USB Charging\r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide Shipping for a LIMITED time\r\n\r\nBuy now: https://xbags.shop\r\n\r\nBest Wishes, \r\n\r\nIrving', '2024-09-27 00:44:13', '2024-09-27 00:44:13'),
(91, 'complaint', 'Pat Moberg', 'pat.moberg@gmail.com', 'Pat Moberg', 'French Southern Territories', '6767102672', NULL, 'Are you a BBB holdout, that refuses to be pressured into using their antiquated business model and questionable business practices?\r\n\r\nYeah us too……It\'s why we built Vetted….. \r\n\r\nThe Vetted Business Credential Reports Platform allows you to host and 1 click share:\r\n\r\n+ Your Business License, Insurance & Bond\r\n+ Your Business & Professional Certifications & Accreditations\r\n+ Your Industry, Local & Trade Affiliations\r\n+ Your Trust Badges, Awards, & Associations Memberships\r\n+ Much more!\r\n\r\nSee how Vetted can SUPERCHARGE your business with a No RISK 30 DAY FREE TRIAL  \r\nSee link in my profile to learn more or to get started.\r\n\r\nWarmly,\r\n\r\nJennifer Corbitt\r\nVetted Business Report Specialist\r\n295 Seven Farms Drive Suite C-201\r\nCharleston, SC 29492\r\nJennifer.Corbitt@Vettedprobusinessusa.com\r\nhttps://www.VettedProBusinessUSA.com', '2024-09-27 01:46:29', '2024-09-27 01:46:29'),
(92, 'complaint', 'Elba Paz', 'paz.elba@gmail.com', 'Elba Paz', 'Seychelles', '6634099877', NULL, 'Are you worried that you won’t make payroll this month?\r\n\r\nAre rising business expenses and inflation stressing you out?\r\n\r\nLet’s remove the stress & give you some breathing room. \r\n\r\nGet a friendly & no obligation business working capital quote in less than 2 minutes.\r\n\r\nUSA Based Businesses Only! \r\n\r\nGet in touch with me below for more info\r\n\r\nWarmly,\r\n\r\nLauren Smith\r\nHelloRates Fast Funding USA  \r\nCommercial & Business working capital with affordable payments, lowest rates, & best terms\r\nLauren.smith@helloratesfastfundingusa.com\r\nhttps://www.HelloRatesFastFundingUSA.com', '2024-09-27 16:13:32', '2024-09-27 16:13:32'),
(93, 'complaint', 'Stewart Beeson', 'beeson.stewart@gmail.com', 'Stewart Beeson', 'Vanuatu', '3432269759', NULL, 'Your video is getting thousands of views but it\'s not making you any money. I know exactly why that\'s happening. Email me here and I\'ll show you why: gamifyvideo@gmail.com \r\n\r\nps. your video needs to have at least 5k views for me to help you', '2024-09-27 23:43:37', '2024-09-27 23:43:37'),
(94, 'complaint', 'Phil Stewart', 'noreplyhere@aol.com', 'Windy Whittingham', 'Cameroon', '342-123-4456', 'http://aol.com', 'Hey, want your ad to reach millions of contact forms? Just like you\'re reading this message, others can read yours too. Visit my site below for details.\r\n\r\nhttp://9w3cxe.contactuspagemarketing.xyz', '2024-09-29 22:31:19', '2024-09-29 22:31:19'),
(95, 'complaint', 'Freeman Seppelt', 'seppelt.freeman@gmail.com', 'Freeman Seppelt', 'Thailand', '227097360', NULL, 'Are you a BBB holdout, that refuses to be pressured into using their antiquated business model and questionable business practices?\r\n\r\nYeah us too……It\'s why we built Vetted….. \r\n\r\nThe Vetted Business Credential Reports Platform allows you to host and 1 click share:\r\n\r\n+ Your Business License, Insurance & Bond\r\n+ Your Business & Professional Certifications & Accreditations\r\n+ Your Industry, Local & Trade Affiliations\r\n+ Your Trust Badges, Awards, & Associations Memberships\r\n+ Much more!\r\n\r\nSee how Vetted can SUPERCHARGE your business with a No RISK 30 DAY FREE TRIAL  \r\nSee link in my profile to learn more or to get started.\r\n\r\nWarmly,\r\n\r\nJennifer Corbitt\r\nVetted Business Report Specialist\r\n295 Seven Farms Drive Suite C-201\r\nCharleston, SC 29492\r\nJennifer.Corbitt@Vettedprobusinessusa.com\r\nhttps://www.VettedProBusinessUSA.com', '2024-09-30 07:55:10', '2024-09-30 07:55:10'),
(96, 'complaint', 'Phil Stewart', 'noreplyhere@aol.com', 'Wilmer Bayer', 'South Sudan', '342-123-4456', 'http://aol.com', 'Hi, would you be interested in having your ad reach millions of contact forms just like this one did? Check out my site below for more details.\r\n\r\nhttp://jcruzk.contactformblasting.xyz', '2024-09-30 15:12:08', '2024-09-30 15:12:08'),
(97, 'complaint', 'Jacelyn Tunstall', 'jacelyn.tunstall@gmail.com', 'Jacelyn Tunstall', 'Puerto Rico', '7930796393', NULL, 'Are you worried that you won’t make payroll this month?\r\n\r\nAre rising business expenses and inflation stressing you out?\r\n\r\nLet’s remove the stress & give you some breathing room. \r\n\r\nGet a friendly & no obligation business working capital quote in less than 2 minutes.\r\n\r\n== Must Be A US Based Business To Qualify ==\r\n\r\nGet in touch with me below for more info\r\n\r\nWarmly,\r\n\r\nLauren Smith\r\nHelloRates Fast Funding USA  \r\nCommercial & Business working capital with affordable payments, lowest rates, & best terms\r\nLauren.smith@helloratesfastfundingusa.com\r\nhttps://www.HelloRatesFastFundingUSA.com', '2024-09-30 16:03:31', '2024-09-30 16:03:31'),
(98, 'enquiry', '<strong><a href=\"https://pr-site.com\">primer-1</a></strong>', 'thomaskingial13@gmail.com', 'google', 'China', '81256191822', '<strong><a href=\"https://pr-site.com\">primer-3</a></strong>', '<strong><a href=\"https://pr-site.com\">primer-8</a></strong>', '2024-09-30 23:12:18', '2024-09-30 23:12:18'),
(99, 'complaint', 'Elliott Julius', 'elliott.julius@gmail.com', 'Elliott Julius', 'Iceland', '9056738831', NULL, 'Ready to take your business to the next level? Our financial solutions are designed to support your expansion with the best business loan packages tailored to your needs. Contact us today at info@financeworldwidehk.com to get started!\r\n\r\nBest regards,\r\nLaura Cha', '2024-10-01 16:57:40', '2024-10-01 16:57:40'),
(100, 'complaint', 'Sabrina Dickerson', 'dickerson.sabrina@hotmail.com', 'Sabrina Dickerson', 'Argentina', '7945387731', NULL, 'Looking to grow your business? Our business loan packages are crafted to help you expand seamlessly. Contact us today at info@financeworldwidehk.com to get started!\r\n\r\nBest regards,\r\nLaura Cha', '2024-10-02 14:15:15', '2024-10-02 14:15:15'),
(101, 'complaint', 'Phil Stewart', 'noreplyhere@aol.com', 'Ulrich Conner', 'Nauru', '342-123-4456', 'http://aol.com', 'Looking to get millions of people to discover your website economically?\r\n Visit: http://yk749s.formblasting.xyz', '2024-10-03 16:43:27', '2024-10-03 16:43:27'),
(102, 'complaint', 'Phil Stewart', 'noreplyhere@aol.com', 'Ivy Lugo', 'China', '342-123-4456', 'http://aol.com', 'Searching for an affordable way to get your ad seen by millions?\r\n For Details: http://9wlqbc.get-fast-results-with-contactformblasting.xyz', '2024-10-04 05:36:25', '2024-10-04 05:36:25'),
(103, 'complaint', 'Alice Quinlivan', 'alice.quinlivan@gmail.com', 'Alice Quinlivan', 'Croatia', '745213391', NULL, 'Q: What do Fax Machines & the BBB have in common?\r\n\r\nA: They are both relics of a bygone era and are no longer relevant in today’s business world.\r\n\r\nIt\'s time to move to a Trust & Transparency focussed platform that actually meets the needs of both your business and more importantly your customers.\r\n\r\nThe Vetted Business Credential Reports Platform allows you to host and 1 click share:\r\n\r\n+ Your Business License, Insurance & Bond\r\n+ Your Business & Professional Certifications & Accreditations\r\n+ Your Industry, Local & Trade Affiliations\r\n+ Your Trust Badges, Awards, & Associations Memberships\r\n+ Much more!\r\n\r\nGet Vetted and dominate your local market\r\nSee how Vetted can SUPERCHARGE your business with a No RISK 30 DAY FREE TRIAL \r\nSee link in my profile to learn more or to get started.\r\n\r\n\r\nWarmly,\r\n\r\nJennifer Corbitt\r\nVetted Business Report Specialist\r\n295 Seven Farms Drive Suite C-201\r\nCharleston, SC 29492\r\nJennifer.Corbitt@Vettedprobusinessusa.com\r\nhttps://www.VettedProBusinessUSA.com', '2024-10-05 17:48:38', '2024-10-05 17:48:38'),
(104, 'complaint', 'Angel Hambleton', 'angel.hambleton@msn.com', 'Angel Hambleton', 'Spain', '681079771', NULL, 'Hi there, I apologize for using your contact form, \r\nbut I wasn\'t sure who the right person was to speak with in your company. \r\nWe have a patented application that creates Local Area pages that rank on \r\ntop of Google within weeks, we call it Local Magic.  Here is a link to the \r\nproduct page https://www.mrmarketingres.com/local-magic/ . The product \r\nleverages technology where these pages are managed dynamically by AI and \r\nit is ideal for promoting any type of business that gets customers from Google.  Can I share a testimonial \r\nfrom one of our clients in the same industry?  I\'d prefer to do a short zoom to \r\nillustrate their full case study if you have time for it? \r\nYou can reach me at marketing@mrmarketingres.com or 843-720-7301. And if this isn\'t a fit please feel free to email me and I\'ll be sure not to reach out again.  Thanks!', '2024-10-06 05:43:48', '2024-10-06 05:43:48'),
(105, 'complaint', 'Maureen Sainthill', 'sainthill.maureen58@googlemail.com', 'Maureen Sainthill', 'Gibraltar', '3840927527', NULL, 'Running a small business is not easy.\r\n\r\nEspecially when the cost of nearly everything continues to skyrocket.\r\n\r\nCut yourself a break from the stress of rising expenses with a Working Capital Solution that will provide you the relief needed to get through these challenging times.\r\n\r\nGet a friendly no obligation working capital financing quote in less than 2 minutes.\r\n\r\n++ This Offer Only For Businesses In The USA ++\r\n\r\nGet in touch with me below for more info\r\n\r\nWarmly,\r\n\r\nLauren Smith\r\nHelloRates Fast Funding USA  \r\nCommercial & Business working capital with affordable payments, lowest rates, & best terms\r\nLauren.smith@helloratesfastfundingusa.com\r\nhttps://www.HelloRatesFastFundingUSA.com', '2024-10-06 16:45:50', '2024-10-06 16:45:50'),
(106, 'complaint', 'Amber Edmondson', 'edmondson.amber@outlook.com', 'Amber Edmondson', 'Christmas Island', '4600648', NULL, 'Turn Your Website into a Million-Dollar Machine!\r\n\r\n \r\n\r\nIf you have a product or service you truly believe in—something that can make a difference for your audience—this system (https://witsvalleyco.com/product/website-money-making-machine/) can help you sell millions, even overnight. It’s the most effective way to launch a product or service on the internet today.\r\n\r\n \r\n\r\nWith just a single click, you\'ll be able to connect with millions of potential customers. Plus, you’ll discover the “Law of Systems,” (https://witsvalleyco.com/product/website-money-making-machine/) in this eBook download (https://witsvalleyco.com/product/website-money-making-machine/) which teaches you how to build a self-sustaining business—just like the world runs on its own once created. You can design a business that operates smoothly, without needing your constant attention. You are going to learn how, along with many other game-changing strategies.\r\n\r\n  \r\n\r\nThis is a limited opportunity to transform your business and help your customers. **Get Instant Access Now** (https://witsvalleyco.com/product/website-money-making-machine/) before it’s too late!', '2024-10-07 16:19:09', '2024-10-07 16:19:09'),
(107, 'complaint', 'Neil', 'venture4help@outlook.com', 'Data Entry Tasks', 'Tuvalu', '272474946', NULL, 'Hello! I\'m Neil, a seasoned professional with over a decade of experience specializing in data entry, data management, including research, processing, and cleansing. I also provide financial accounting services, from managing accounts payable and receivable to reconciliations, invoice handling, and preparing financial statements. Additionally, I offer expert e-commerce support, such as inventory management and invoice processing. I’m skilled at understanding and adapting to your unique processes and proficient in working with any software. My rate ranges from USD 7/hr to USD 12/hr, with special discounts available for part-time and full-time engagements. \r\n\r\nLet’s discuss how I can help streamline and elevate your business—Reach me at venture4help@outlook.com', '2024-10-07 18:36:28', '2024-10-07 18:36:28'),
(108, 'complaint', 'Aline Loman', 'loman.aline79@yahoo.com', 'Aline Loman', 'Laos', '4787988602', NULL, 'Hi!\r\n\r\nIt is with sad regret to inform you that LeadsBox.biz is shutting down. \r\n\r\nWe have made all our databases available to the public.  \r\n\r\n25 Million Companies!\r\n527 Million People! \r\n145 Countries! \r\n\r\nCome visit us on LeadsBox.biz', '2024-10-09 01:05:19', '2024-10-09 01:05:19'),
(109, 'complaint', 'Phil Stewart', 'noreplyhere@aol.com', 'Reina Yun', 'Croatia', '342-123-4456', 'http://aol.com', 'Need a way to get millions of people to find your video without high costs?\r\n More Info: http://wwjclc.contact-form-marketing.club', '2024-10-09 01:09:44', '2024-10-09 01:09:44'),
(110, 'complaint', 'Blair', 'peernetics.io@mail.com', 'Blair Ellis', 'Mongolia', '6642855712', 'https://www.bbc.com', 'Morning \r\n \r\nDefrost frozen foods in minutes safely and naturally with our THAW KING™. \r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide Shipping for a LIMITED \r\n\r\nBuy now: https://thawking.shop\r\n \r\nRegards, \r\n \r\nBlair', '2024-10-11 08:33:07', '2024-10-11 08:33:07'),
(111, 'complaint', 'Murray', 'peernetics.io@t-online.com', 'Murray Boudreaux', 'United States', NULL, 'https://www.bbc.com', 'Hey there \r\n \r\nDefrost frozen foods in minutes safely and naturally with our THAW KING™. \r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide Shipping for a LIMITED \r\n\r\nBuy now: https://thawking.shop\r\n \r\nMany Thanks, \r\n \r\nMurray', '2024-10-11 14:43:37', '2024-10-11 14:43:37'),
(112, 'complaint', 'Rosalie Wilken', 'rosalie.wilken@yahoo.com', 'Rosalie Wilken', 'United Arab Emirates', '194780152', NULL, 'Good People + Smart Processes + Working Capital = The Recipe for Business Success.\r\n\r\nBut most small business owners put enough thought into the Capital needed to scale and grow their business.\r\n\r\nIf you have the right people & the business processes in place but no working capital, then your business will be stuck in neutral.\r\n\r\nGet started with a friendly no obligation working capital quote in less than 2 minutes. \r\n\r\n== Must Be A US Based Business To Qualify ==\r\n\r\nGet in touch with me below for more info\r\n\r\nWarmly,\r\n\r\nLauren Smith\r\nHelloRates Fast Funding USA  \r\nCommercial & Business working capital with affordable payments, lowest rates, & best terms\r\nLauren.smith@helloratesfastfundingusa.com\r\nhttps://www.HelloRatesFastFundingUSA.com', '2024-10-11 16:25:53', '2024-10-11 16:25:53'),
(113, 'complaint', 'Ferdinand Burchett', 'ferdinand.burchett@gmail.com', 'Ferdinand Burchett', 'Antigua & Barbuda', '7072757604', NULL, 'Turn Your Website into a Million-Dollar Machine!\r\n\r\n \r\n\r\nIf you have a product or service you truly believe in—something that can make a difference for your audience—this system (https://witsvalleyco.com/product/website-money-making-machine/) can help you sell millions, even overnight. It’s the most effective way to launch a product or service on the internet today.\r\n\r\n \r\n\r\nWith just a single click, you\'ll be able to connect with millions of potential customers. Plus, you’ll discover the “Law of Systems,” (https://witsvalleyco.com/product/website-money-making-machine/) in this eBook download (https://witsvalleyco.com/product/website-money-making-machine/) which teaches you how to build a self-sustaining business—just like the world runs on its own once created. You can design a business that operates smoothly, without needing your constant attention. You are going to learn how, along with many other game-changing strategies.\r\n\r\n  \r\n\r\nThis is a limited opportunity to transform your business and help your customers. **Get Instant Access Now** (https://witsvalleyco.com/product/website-money-making-machine/) before it’s too late!', '2024-10-11 16:46:03', '2024-10-11 16:46:03'),
(114, 'complaint', 'Fletcher Salgado', 'fletcher.salgado85@hotmail.com', 'Fletcher Salgado', 'Syria', '7910335144', NULL, 'The BBB is a great tool ……..for businesses in 1962 …..\r\n\r\nUNFORTUNATELY, the BBB has not kept up with the times, and no longer provides the information that today’s consumers want and need to make INFORMED BUYING DECISIONS.\r\n\r\nThere is a better option that is taking the market by storm, because it ACTUALLY MEETS THE NEEDS of both the businesses, and the consumers who use it.\r\n\r\nIntroducing Vetted Business Credentials Reports. \r\nA cloud hosted Business Credentials Report that can be easily shared with one click, and provides the highest levels of trust, transparency & credibility for your business while increasing your chances of booking the sale by a staggering 63%.\r\n\r\nVetted Business Credential Reports allow you to host and 1 click share:\r\n\r\n+ Your Business License, Insurance & Bond\r\n+ Your Business & Professional Certifications & Accreditations\r\n+ Your Industry, Local & Trade Affiliations\r\n+ Your Trust Badges, Awards, & Associations Memberships\r\n+ Much more!\r\n\r\nGet Vetted and dominate your local market \r\nSee how Vetted can SUPERCHARGE your business with a No RISK 30 DAY FREE TRIAL\r\nSee link in my profile to learn more or to get started.\r\n\r\nWarmly,\r\n\r\nJennifer Corbitt\r\nVetted Business Report Specialist\r\n295 Seven Farms Drive Suite C-201\r\nCharleston, SC 29492\r\nJennifer.Corbitt@Vettedprobusinessusa.com\r\nhttps://www.VettedProBusinessUSA.com', '2024-10-11 17:37:10', '2024-10-11 17:37:10'),
(115, 'complaint', 'Nate Cramsie', 'cramsie.nate@gmail.com', 'SEOGEEK', 'Outlying Oceania', '6182417101', 'https://google.com', 'Claim your free backlink analysis today!\r\n\r\nhttps://aluzzion.com/go/free-backlink-analysis-tool-for-seo\r\n\r\nTake advantage of a in-depth SEO backlink analysis today to strengthen your digital strategy! Consider it checking the foundation of your online presence for stability and growth. Discover the authority your site holds, and turn your backlink profile into a roadmap for higher search engine rankings and increased traffic. Spot harmful links to remove and grab opportunities for effective link-building.\r\n\r\nThis allows for multiple variations of the message while maintaining clarity and intent.\r\n\r\n\r\n\r\n\r\n\r\n\r\nYou can unsubscribe by sending an email with subject \"Unsubscribe\" to hortzsteven@gmail.com\r\nScharnweberstrasse 72, Corcoran, California, US', '2024-10-12 18:22:08', '2024-10-12 18:22:08'),
(116, 'complaint', 'Nate Cramsie', 'cramsie.nate@gmail.com', 'SEOGEEK', 'Outlying Oceania', '6182417101', 'https://google.com', 'Claim your free backlink analysis today!\r\n\r\nhttps://aluzzion.com/go/free-backlink-analysis-tool-for-seo\r\n\r\nTake advantage of a in-depth SEO backlink analysis today to strengthen your digital strategy! Consider it checking the foundation of your online presence for stability and growth. Discover the authority your site holds, and turn your backlink profile into a roadmap for higher search engine rankings and increased traffic. Spot harmful links to remove and grab opportunities for effective link-building.\r\n\r\nThis allows for multiple variations of the message while maintaining clarity and intent.\r\n\r\n\r\n\r\n\r\n\r\n\r\nYou can unsubscribe by sending an email with subject \"Unsubscribe\" to hortzsteven@gmail.com\r\nScharnweberstrasse 72, Corcoran, California, US', '2024-10-12 18:22:11', '2024-10-12 18:22:11'),
(117, 'complaint', 'Nate Cramsie', 'cramsie.nate@gmail.com', 'SEOGEEK', 'Outlying Oceania', '6182417101', 'https://google.com', 'Claim your free backlink analysis today!\r\n\r\nhttps://aluzzion.com/go/free-backlink-analysis-tool-for-seo\r\n\r\nTake advantage of a in-depth SEO backlink analysis today to strengthen your digital strategy! Consider it checking the foundation of your online presence for stability and growth. Discover the authority your site holds, and turn your backlink profile into a roadmap for higher search engine rankings and increased traffic. Spot harmful links to remove and grab opportunities for effective link-building.\r\n\r\nThis allows for multiple variations of the message while maintaining clarity and intent.\r\n\r\n\r\n\r\n\r\n\r\n\r\nYou can unsubscribe by sending an email with subject \"Unsubscribe\" to hortzsteven@gmail.com\r\nScharnweberstrasse 72, Corcoran, California, US', '2024-10-12 18:22:14', '2024-10-12 18:22:14'),
(118, 'complaint', 'Nate Cramsie', 'cramsie.nate@gmail.com', 'SEOGEEK', 'Outlying Oceania', '6182417101', 'https://google.com', 'Claim your free backlink analysis today!\r\n\r\nhttps://aluzzion.com/go/free-backlink-analysis-tool-for-seo\r\n\r\nTake advantage of a in-depth SEO backlink analysis today to strengthen your digital strategy! Consider it checking the foundation of your online presence for stability and growth. Discover the authority your site holds, and turn your backlink profile into a roadmap for higher search engine rankings and increased traffic. Spot harmful links to remove and grab opportunities for effective link-building.\r\n\r\nThis allows for multiple variations of the message while maintaining clarity and intent.\r\n\r\n\r\n\r\n\r\n\r\n\r\nYou can unsubscribe by sending an email with subject \"Unsubscribe\" to hortzsteven@gmail.com\r\nScharnweberstrasse 72, Corcoran, California, US', '2024-10-12 18:22:16', '2024-10-12 18:22:16'),
(119, 'complaint', 'Zachary Wood', 'wood.zachary@gmail.com', 'Zachary Wood', 'Norfolk Island', '3495836335', NULL, 'Access all these top-tier AI apps from one, easy-to-use dashboard.\r\n\r\nChatGPT 4.0 \r\nGemini Pro \r\nDALL·E 3 \r\nLeonardo AI \r\nMicrosoft Copilot Pro \r\nMeta Llama 3 \r\nStable Diff XL s \r\nPaLM 2 \r\n\r\nCancel your AI subscriptions, Save thousands of Bucks.\r\n\r\nUnlimited Use - Zero recurring costs—ever!\r\n\r\n[Closing Soon] Lifetime Deal here -->> lifetime-oneai.com <<---', '2024-10-13 14:14:15', '2024-10-13 14:14:15'),
(120, 'complaint', 'Alta Whittaker', 'whittaker.alta@gmail.com', 'Alta Whittaker', 'Chile', '267624151', NULL, 'Looking to expand your business? I can get you a loan for less than 2% interest rate. Email me here for details:  jpark9000z@gmail.com \r\nThanks\r\nJoseph', '2024-10-15 00:21:26', '2024-10-15 00:21:26'),
(121, 'complaint', 'Phil Stewart', 'noreplyhere@aol.com', 'Garland Lindberg', 'Armenia', '342-123-4456', 'http://aol.com', 'Looking to expand your audience to millions cost-effectively?\r\n If you’re interested in learning more about how this works, reach out to me using the contact info below.\r\n\r\nRegards,\r\nGarland Lindberg\r\nEmail: Garland.Lindberg@morebiz.my\r\nWebsite: http://jyt2v8.resultswithcontactforms.my\r\nSkype: marketingwithcontactforms', '2024-10-18 16:15:30', '2024-10-18 16:15:30'),
(122, 'complaint', 'Phil Stewart', 'noreplyhere@aol.com', 'Daryl Varela', 'Guinea-Bissau', '342-123-4456', 'http://aol.com', 'Need a way to get millions of people to view your website economically?\r\n Reach out to me below if you want more details on how I make this happen.\r\n\r\nRegards,\r\nDaryl Varela\r\nEmail: Daryl.Varela@morebiz.my\r\nWebsite: http://p47m5q.resultswithcontactforms.my\r\nSkype: marketingwithcontactforms', '2024-10-19 03:34:49', '2024-10-19 03:34:49'),
(123, 'complaint', 'Arletha Wherry', 'arletha.wherry92@gmail.com', 'Arletha Wherry', 'Hungary', '2749538298', NULL, 'Hi there, I apologize for using your contact form, \r\nbut I wasn\'t sure who the right person was to speak with in your company. \r\nWe have a patented application that creates Local Area pages that rank on \r\ntop of Google within weeks, we call it Local Magic.  Here is a link to the \r\nproduct page https://www.mrmarketingres.com/local-magic/ . The product \r\nleverages technology where these pages are managed dynamically by AI and \r\nit is ideal for promoting any type of business that gets customers from Google.  Can I share a testimonial \r\nfrom one of our clients in the same industry?  I\'d prefer to do a short zoom to \r\nillustrate their full case study if you have time for it? \r\nYou can reach me at marketing@mrmarketingres.com or 843-720-7301. And if this isn\'t a fit please feel free to email me and I\'ll be sure not to reach out again.  Thanks!', '2024-10-20 18:17:08', '2024-10-20 18:17:08'),
(124, 'complaint', 'Kelly Harbour', 'kelly@dytes.co', 'Grace Uy', 'St. Helena', '7858444523', NULL, 'Hey there,\r\n\r\nI came across your project http://peernetics.io, and it looks fantastic! I noticed that you\'re focusing on organic marketing (SEO and link building)\r\n\r\nDo you need someone to help you with? I\'m a freelancer and can handle outreach without the high fees like others do.\r\n\r\nAs a freelancer, I offer affordable outreach for link-building services at a rate. I’d love to discuss how I can contribute to Peernetics\'s success.\r\n\r\nIf you\'re interested, let\'s set up a call.\r\n\r\nBest,\r\nKelly', '2024-10-22 06:29:54', '2024-10-22 06:29:54'),
(125, 'complaint', 'Ayaan', 'projectsexpert222@outlook.com', 'Data entry services', 'Sri Lanka', '614908891', NULL, 'Need help managing your website? I can upload and update e-commerce products, blogs, news, images, and meta tags. I can also handle order processing, invoicing, shipping, inventory management, income/expenses, reports (daily/weekly/monthly), send individual emails, gather data from different websites, and repeat any business process. \r\n\r\nLet\'s connect on projectsexpert222@outlook.com to talk more!', '2024-10-23 07:36:40', '2024-10-23 07:36:40'),
(126, 'complaint', 'Addy', 'venture4help@outlook.com', 'Content Writing Service', 'Maldives', '8128925472', NULL, 'My name is Addy, and I specialize in writing well-researched content tailored to meet the specific needs of your industry. I conduct thorough research using verified sources to ensure accuracy and reliability, incorporating elements like tables and statistics when required. I also have a deep understanding of keyword density and SEO optimization, ensuring that your content ranks well while maintaining readability. Whether your content needs a professional, casual, sales-driven, or straightforward tone, I adapt my writing style based on your target audience to provide the most effective communication. \r\n\r\nReach me at Venture4help@outlook.com for quality blogs, articles, E-commerce product descriptions, News Content and Library content.', '2024-10-27 13:14:31', '2024-10-27 13:14:31'),
(127, 'enquiry', 'Robertmag', 'yasen.krasen.13+80527@mail.ru', 'google', 'Malaysia', '87999254134', NULL, 'Ojwdjiowkdeofjeij ifsfhoewdfeifhweui hieojkaskdfwjfghewejif eiwhfufdawdijwehfuihewguih jeifjeweijeruigherug peernetics.io', '2024-10-28 15:41:26', '2024-10-28 15:41:26'),
(128, 'complaint', 'Phil Stewart', 'noreplyhere@aol.com', 'Devon Cairns', 'Croatia', '342-123-4456', 'http://aol.com', 'Want to get millions of people to engage with your content on a budget?\r\n Feel free to contact me using the details below if you want to learn more about my approach.\r\n\r\nRegards,\r\nDevon Cairns\r\nEmail: Devon.Cairns@morebiz.my\r\nWebsite: http://tefsh8.advertise-with-contactforms.pro\r\nSkype: marketingwithcontactforms', '2024-10-29 02:17:03', '2024-10-29 02:17:03'),
(129, 'complaint', 'Sandy', 'efficientmanage007@outlook.com', 'Part-Time/Hourly based Personal Assistant', 'Mali', '697297688', NULL, 'Are you looking for a personal assistant who can handle your daily business operations and make your life easier? I can help with tasks related to admin, marketing, gathering data from multiple websites, answering emails, website management, social media, content creation, planning new projects, bookkeeping, entering data into softwares, and back-office assistance.\r\n\r\nIf you are interested, send me an email at efficientmanage007@outlook.com with a list of tasks you want to accomplish, and I will take it from there.', '2024-10-29 04:10:15', '2024-10-29 04:10:15'),
(130, 'complaint', 'Vinay', 'web.techdevelopment@outlook.com', 'Website redesign', 'Afghanistan', '396804136', NULL, 'Are you considering a complete redesign of your website to enhance its look and functionality? I specialize in creating modern, mobile-responsive, fast, and SEO-optimized websites that provide a seamless user experience and help convert visitors into clients. Whether you\'re looking to elevate your brand or boost product sales, I can assist. \r\n\r\nIf this is a priority for your business, feel free to contact me at Web.techdevelopment@outlook.com', '2024-11-02 08:15:24', '2024-11-02 08:15:24'),
(131, 'support', 'Jafor Siddique', 'jaforsiddique451@gmail.com', 'Walls and Weiss Trading', 'Japan', '+1 608-417-6445', 'https://www.fotaqamysamupir.info', 'Repudiandae autem ut', '2024-11-03 19:06:15', '2024-11-03 19:06:15'),
(132, 'complaint', 'Arin', 'bizassistance008@outlook.com', 'Data Entry @ $6/hour', 'Laos', '6801455485', NULL, 'Hello, My name is Arin Shah. I provide data entry services starting at USD 6/hour. I can work as per instructions and follow step-by-step instructions. \r\n\r\nIf you are interested, Please share your requirements at bizassistance008@outlook.com and we can take a video call.', '2024-11-04 19:08:20', '2024-11-04 19:08:20'),
(133, 'complaint', 'Arin', 'bizassistance008@outlook.com', 'Data Entry @ $6/hour', 'Eswatini', '8586723146', NULL, 'Hello, My name is Arin Shah. I provide data entry services starting at USD 6/hour. I can work as per instructions and follow step-by-step instructions. \r\n\r\nIf you are interested, Please share your requirements at bizassistance008@outlook.com and we can take a video call.', '2024-11-05 04:40:59', '2024-11-05 04:40:59'),
(134, 'complaint', 'Nitin Chaudhary', 'sales@rankinghat.co', 'Ranking Hat', 'U.S. Outlying Islands', '(209) 813-5119', 'http://rankinghat.co', 'Hello there,\r\n\r\nYour website\'s design is absolutely brilliant. The visuals really enhance your message and the content compels action. I\'ve forwarded it to a few of my contacts who I think could benefit from your services.\r\n\r\nWhen I was looking at your site \"www.peernetics.io\", though, I noticed some mistakes that you\'ve made re: search engine optimization (SEO) which may be leading to a decline in your organic SEO results.\r\n\r\nWould you like to fix it so that you can get maximum exposure/presence on Google, Bing, Yahoo and web traffic to your website?\r\n\r\nIf this is something you are interested in, then allow me to send you a No Obligation Audit Report for your review. We will fix those errors with no extra cost if you choose any one of our monthly marketing plans.\r\n\r\nHave a nice day!\r\n\r\nRegards,\r\nNitin Chaudhary | International Project Manager                                                    \r\nEmail:- sales@rankinghat.co            \r\nContact Number:- +1- (209) 813-5119', '2024-11-06 08:12:18', '2024-11-06 08:12:18'),
(135, 'complaint', 'Maddy', 'businessgrowtogether@outlook.com', 'Data Collection Specialist', 'Micronesia', '261974311', NULL, 'Hi, are you looking to gather information from different websites or sources, like collecting email addresses, compiling competitor data, finding product reviews, gathering contact details of potential leads, collecting data on market trends, researching business directories, gathering LinkedIn or Twitter profiles, collecting industry statistics, compiling product and price comparisons, or obtaining customer feedback? \r\n\r\nIf yes, please send me an email at businessgrowtogether@outlook.com so we can discuss it further!', '2024-11-06 19:17:37', '2024-11-06 19:17:37'),
(136, 'complaint', 'Uther Mahoney', 'digital360.gro.w.th@gmail.com', 'D-360', 'Belarus', '123456789', 'https://google.com', 'Hi there,\r\n\r\nAre you the right person to talk about increasing revenue for your business?\r\n\r\nWith Digital360\'s done-for-you service, companies around the world have experienced incredible growth through tried-and-true digital strategies.\r\n\r\nWithin a year, we helped a medical device brand boost traffic by 20,000%, raising their monthly sales from $48,000 to $735,000—an additional $8.3 million in yearly sales.\r\n\r\nDo you think you could benefit from this? Learn more at https://bit.ly/BoostWith360\r\n\r\nKind regards,\r\nJason Feemster\r\nThe Digital360 Team', '2024-11-06 22:02:09', '2024-11-06 22:02:09'),
(137, 'complaint', 'Pam Jacobs', 'jacobs.pam@gmail.com', 'Pam Jacobs', 'Colombia', '6361427438', NULL, 'Unlock all these top-tier AI apps from a single, easy-to-use dashboard.\r\n\r\nChatGPT 4.0 \r\nGemini Pro \r\nDALL·E 3 \r\nLeonardo AI \r\nMicrosoft Copilot Pro \r\nMeta Llama 3 \r\nStable Diff XL s \r\nPaLM 2 \r\n\r\nCancel your AI subscriptions, Save thousands of Dollars.\r\n\r\nUnlimited Use - Zero recurring costs—ever!\r\n\r\n[Closing Soon] Lifetime Deal here -->> https://lifetime-oneai.com <<---', '2024-11-07 01:37:31', '2024-11-07 01:37:31'),
(138, 'complaint', 'Maddy', 'businessgrowtogether@outlook.com', 'Data Collection Specialist', 'Western Sahara', '318511036', NULL, 'Hi, are you looking to gather information from different websites or sources, like collecting email addresses, compiling competitor data, finding product reviews, gathering contact details of potential leads, collecting data on market trends, researching business directories, gathering LinkedIn or Twitter profiles, collecting industry statistics, compiling product and price comparisons, or obtaining customer feedback? \r\n\r\nIf yes, please send me an email at businessgrowtogether@outlook.com so we can discuss it further!', '2024-11-07 06:11:57', '2024-11-07 06:11:57'),
(139, 'complaint', 'Johan Fourie', 'winifred.sanmiguel@gmail.com', 'PCXGroup', 'Guernsey', '7863598049', NULL, 'Hello and thank you for reading my message.\r\n\r\nI am sorry to contact you in this way.\r\n\r\nMy name is Johan Fourie\r\nI am a software developer that specializes in web related projects, I am a core developer.\r\n\r\nI specifically specialize in data management and scraping and building web projects I have 17 years experience in development.\r\n\r\nI am offering projects at cost in order to build up my portfolio.\r\n\r\nPlease visit PCXGroup.com and get in contact with me and tell me if you have any development needs.', '2024-11-07 15:26:45', '2024-11-07 15:26:45'),
(140, 'complaint', 'Phil Stewart', 'noreplyhere@aol.com', 'Gerardo Boan', 'Cayman Islands', '342-123-4456', 'http://aol.com', 'Looking to get millions of people to discover your website economically?\r\n Contact me at the details below if you’d like to explore this further.\r\n\r\nRegards,\r\nGerardo Boan\r\nEmail: Gerardo.Boan@morebiz.my\r\nWebsite: http://9mt07c.advertise-with-contactforms.pro\r\nSkype: marketingwithcontactforms', '2024-11-07 15:34:42', '2024-11-07 15:34:42'),
(141, 'complaint', 'Crawford', 'ilana.beane@gmail.com', 'Ilana Beane', 'Estonia', '267240055', NULL, 'Hi, I just wanted to send you a quick message rather than calling and bothering you. I represent the company that is assisting business owners file their claim to receive compensation from the 5.5 billion dollar visa/mc lawsuit settlement for overcharging merchants excessive swipe fees. The deadline to file is Feb, 4, 2025. Also, you must be a USA based company. If your interested in learning more, feel free to email or call me and I will send you some more information. Or you can visit the website listed below in my signature.\r\n\r\nBest Regards,\r\n\r\nRoger Crawford\r\nrogercrawford762449@gmail.com \r\n505-605-3059\r\nhttps://visasettlementclaim.org/', '2024-11-07 22:14:43', '2024-11-07 22:14:43'),
(142, 'complaint', 'Phil Stewart', 'noreplyhere@aol.com', 'Brayden Grinder', 'Vanuatu', '342-123-4456', 'http://aol.com', 'Looking to get millions of people to comment on your video affordably?\r\n Reach out to me below if you want more details on how I make this happen.\r\n\r\nRegards,\r\nBrayden Grinder\r\nEmail: Brayden.Grinder@morebiz.my\r\nWebsite: http://9yvmts.form-submission-masters.ink\r\nSkype: marketingwithcontactforms', '2024-11-08 04:42:07', '2024-11-08 04:42:07'),
(143, 'complaint', 'Daniele', 'peernetics.io@zoho.com', 'Daniele Trenerry', 'Zimbabwe', '733058607', 'https://www.bbc.com', 'Hey there \r\n\r\nIn search of the perfect gift that will undeniably enchant? Our Enchanted Shining Rose™ unites elegance and enchantment in one beautiful keepsake. With its delicate shine and iridescent rose adorned with delicate lights, it’s an item that brings warmth to any place—and any heart.\r\n\r\nGift something unforgettable. Great for any special occasion or to simply show you care.\r\n\r\nSpecial Offer: Now 50% OFF with free shipping at https://shiningrose.biz\r\n\r\nKind Regards,\r\n\r\nDaniele', '2024-11-08 14:07:25', '2024-11-08 14:07:25'),
(144, 'complaint', 'Raymond Wilken', 'raymond.wilken@gmail.com', 'Raymond Wilken', 'Zimbabwe', '4712529683', NULL, 'Hi there, I apologize for using your contact form, \r\nbut I wasn\'t sure who the right person was to speak with in your company. \r\nWe have a patented application that creates Local Area pages that rank on \r\ntop of Google within weeks, we call it Local Magic.  Here is a link to the \r\nproduct page https://www.mrmarketingres.com/local-magic/ . The product \r\nleverages technology where these pages are managed dynamically by AI and \r\nit is ideal for promoting any type of business that gets customers from Google.  Can I share a testimonial \r\nfrom one of our clients in the same industry?  I\'d prefer to do a short zoom to \r\nillustrate their full case study if you have time for it? \r\nYou can reach me at marketing@mrmarketingres.com or 843-720-7301. And if this isn\'t a fit please feel free to email me and I\'ll be sure not to reach out again.  Thanks!', '2024-11-08 17:22:17', '2024-11-08 17:22:17'),
(145, 'complaint', 'Shanna Purvis', 'shanna.purvis82@outlook.com', 'Shanna Purvis', 'Congo - Brazzaville', '341410180', NULL, 'Hi! Based on what we found on your website, you could be missing out on tens of thousands in annual tax credits. Our software scans thousands of credits to see which you qualify for—and the best part? We only get paid if we secure savings for you. Would you like a free assessment? Please reply to me at my contact info below.\r\n\r\nMelissa Lang \r\nNestWorth.US\r\n(800) 481-2198\r\nInfo@NestWorth.US', '2024-11-08 18:34:31', '2024-11-08 18:34:31'),
(146, 'complaint', 'Hello http://peernetics.io/fekal0911 Webmaster', 'pirduhina96@gmail.com', 'Imogen Veal', 'Lithuania', '3868958448', NULL, 'Dear http://peernetics.io/fekal0911 Owner', '2024-11-09 10:05:11', '2024-11-09 10:05:11');
INSERT INTO `contacts` (`id`, `type`, `name`, `email`, `company`, `country`, `phone`, `website`, `message`, `created_at`, `updated_at`) VALUES
(147, 'complaint', 'Sam', 'hireonline556600@outlook.com', 'Data entry services', 'Mexico', '3850400588', NULL, 'My name is Sam. I provide data entry services starting from $6 USD per hour. I can handle any computer-related task that is repetitive in nature, such as entering data into software, collecting data, bookkeeping, copy-paste work, uploading content to websites, and following your business processes. I can also transcribe handwritten or scanned documents, update and maintain customer databases, cleanse and validate data, enter survey results and feedback, manage and update inventories, process invoices and receipts, create and update spreadsheets, input product details into e-commerce platforms, digitize paper records, manage email lists and contact information, perform data mining and extraction from websites, compile and organize data from various sources. You can outsource your entire business process to me, where tasks can be done remotely using a computer. I can learn your process and work on any software accordingly. \r\n\r\nReach out to me at Hireonline556600@outlook.com if you have any requirements and we can take a quick call', '2024-11-09 12:56:29', '2024-11-09 12:56:29'),
(148, 'complaint', 'Harris Tedesco', 'harris.tedesco@msn.com', 'Harris Tedesco', 'Bahamas', '151171049', NULL, 'Hi there, I apologize for using your contact form, \r\nbut I wasn\'t sure who the right person was to speak with in your company. \r\nWe have a patented application that creates Local Area pages that rank on \r\ntop of Google within weeks, we call it Local Magic.  Here is a link to the \r\nproduct page https://www.mrmarketingres.com/local-magic/ . The product \r\nleverages technology where these pages are managed dynamically by AI and \r\nit is ideal for promoting any type of business that gets customers from Google.  Can I share a testimonial \r\nfrom one of our clients in the same industry?  I\'d prefer to do a short zoom to \r\nillustrate their full case study if you have time for it? \r\nYou can reach me at marketing@mrmarketingres.com or 843-720-7301. And if this isn\'t a fit please feel free to email me and I\'ll be sure not to reach out again.  Thanks!', '2024-11-09 13:13:28', '2024-11-09 13:13:28'),
(149, 'complaint', 'Johanna Cammack', 'johanna.cammack2@yahoo.com', 'Johanna Cammack', 'Seychelles', '1284987738', NULL, 'Unlock all the top-tier AI apps from a single, easy-to-use dashboard.\r\n\r\nChatGPT 4.0 \r\nGemini Pro \r\nDALL·E 3 \r\nLeonardo AI \r\nMicrosoft Copilot Pro \r\nMeta Llama 3 \r\nStable Diff XL s \r\nPaLM 2 \r\n\r\nCancel your AI subscriptions, Save thousands of Bucks.\r\n\r\nUnlimited Use - Zero recurring costs—ever!\r\n\r\n[Closing Soon] Lifetime Deal here -->> https://lifetime-oneai.com <<---', '2024-11-11 23:43:06', '2024-11-11 23:43:06'),
(150, 'complaint', 'Vana', 'projectsexpert222@outlook.com', 'Experienced Bookkeeper', 'Montserrat', '3379622305', NULL, 'Hi, This is Vana. I am a bookkeeper. I can categorize your transactions of incomes/expenses and can handle bank reconciliations. I can work on any software that you use for accounting. My rates are USD 10 per hour. \r\n\r\nReply me on projectsexpert222@outlook.com to discuss further.', '2024-11-12 07:44:37', '2024-11-12 07:44:37'),
(151, 'complaint', 'Sid', 'socialmedia1145@outlook.com', 'Enhance Social Media Presence', 'Timor-Leste', '89006736', NULL, 'Are you looking to enhance your brand’s social media presence with engaging and consistent content? As a social media specialist, I offer custom posts for platforms like Facebook, Instagram, and LinkedIn, designed to boost engagement and connect with your target audience. At an affordable cost of just $20 per post, you’ll receive unique and branded posts.  \r\n\r\nContact me at socialmedia1145@outlook.com to discuss how I can help elevate your online presence!', '2024-11-12 07:59:05', '2024-11-12 07:59:05'),
(152, 'complaint', 'Stanton Macdonell', 'macdonell.stanton@yahoo.com', 'Stanton Macdonell', 'Indonesia', '6043169940', NULL, 'Hi, \r\n\r\nWe noticed your peernetics.io isn\'t doing well in its online sales.\r\n\r\nWe build successful shopify sites that generate $10k+ a month!\r\n\r\nCome check us out!\r\n\r\nhttps://Marketingeee.com', '2024-11-12 11:45:56', '2024-11-12 11:45:56'),
(153, 'enquiry', 'pq6ae999552a0d2dca14d62e2bc8b764d377b1dd6cpq', 'kgjt_4286797f0b0380163652e26f5e5d62f5cbc98d8d@trustmailticket.com', 'pq71b21161ffa1e6516bcc072aaf5ef38cbe85b511pq', NULL, NULL, 'pq3ab3e0b020a6d41f3d259ddd3ed8ff273843839bpq', 'pq6f9b9af3cd6e8b8a73c2cdced37fe9f59226e27dpq', '2024-11-13 01:56:00', '2024-11-13 01:56:00'),
(154, 'support', 'pq6ae999552a0d2dca14d62e2bc8b764d377b1dd6cpq', 'kgjt_4286797f0b0380163652e26f5e5d62f5cbc98d8d@trustmailticket.com', 'pq71b21161ffa1e6516bcc072aaf5ef38cbe85b511pq', NULL, NULL, 'pq3ab3e0b020a6d41f3d259ddd3ed8ff273843839bpq', 'pq6f9b9af3cd6e8b8a73c2cdced37fe9f59226e27dpq', '2024-11-13 01:56:03', '2024-11-13 01:56:03'),
(155, 'complaint', 'pq6ae999552a0d2dca14d62e2bc8b764d377b1dd6cpq', 'kgjt_4286797f0b0380163652e26f5e5d62f5cbc98d8d@trustmailticket.com', 'pq71b21161ffa1e6516bcc072aaf5ef38cbe85b511pq', NULL, NULL, 'pq3ab3e0b020a6d41f3d259ddd3ed8ff273843839bpq', 'pq6f9b9af3cd6e8b8a73c2cdced37fe9f59226e27dpq', '2024-11-13 01:56:06', '2024-11-13 01:56:06'),
(156, 'complaint', 'Maria Schmitz', 'maria.schmitz@gmail.com', 'Maria Schmitz', 'Iceland', '3623662511', NULL, 'Hi, The ERC (Employee Retention Tax Credit) government rebate program has re-opened and we can assist you in claiming your $26,000 refund for every W-2 employee that you paid during COVID. This is money owed to you that does not need to be paid back. This is your last chance to file. Note: You MUST be a USA based business to be eligible. Visit https://claim-erc.net now to calculate your owed amount before the deadline soon.', '2024-11-13 13:58:22', '2024-11-13 13:58:22'),
(157, 'complaint', 'Avi', 'dataentry756@outlook.com', 'Data Processing, Conversion and Formatting Services', 'Belarus', '692980806', NULL, 'Hello! I\'m a Data Entry Specialist with extensive experience in document processing. I’ve worked on projects involving data extraction from various file types, including PDFs, Word documents, Excel sheets, Google Docs, Google Sheets, and PowerPoint. I enter this data accurately into client-specific software or reformat it into updated document types. I also specialize in converting files with precise data transfer to meet client needs. My services start at just $7 per hour, ensuring accuracy and reliability. \r\n\r\nIf you’re interested, feel free to reach out at Dataentry756@outlook.com. Let’s streamline your workflow!', '2024-11-14 04:47:41', '2024-11-14 04:47:41'),
(158, 'complaint', 'Louis Sugerman', 'sugerman.louis@gmail.com', 'Louis Sugerman', 'São Tomé & Príncipe', '6884980536', NULL, 'Is peernetics.io not making the sales it should? \r\n\r\nSetup your Shopify store before black friday and:\r\n\r\nBe Your Own Boss, you WANT a BUSINESS, not a website only!\r\n\r\nThe BEST VALUE for your money (+17000 happy clients)\r\nWe provide you with LIFETIME SUPPORT\r\n\r\n⭐\r\nWe built stores making $10,000/month \r\nYes, we pick BEST Products For You Too!\r\n\r\nNo sale in 30 days? Get a full refund!\r\n\r\nconvertingstore.myshopify.com', '2024-11-14 15:03:18', '2024-11-14 15:03:18'),
(159, 'enquiry', 'DavidMob', 'williamsdeyleon@gmail.com', 'google', 'Outlying Oceania', '87983598789', NULL, 'Swift Claim: Secure Your $167,649.19 Prize Now https://script.google.com/macros/s/AKfycbzMRuSDBUpNbKXIWjz8YPExHuHvZQebYHdgynJzU5-2okV3Wmbdzktc-e2PUB4pkVV3rA/exec', '2024-11-16 14:14:35', '2024-11-16 14:14:35'),
(160, 'complaint', 'Charlotte', 'info@peernetics.io', 'Charlotte Ostrander', 'Indonesia', '613810552', 'https://www.bbc.com', 'New Multifunction Waterproof Backpack\r\n\r\nThe best ever SUPER Backpack: Drop-proof/Scratch-resistant/USB Charging/Large capacity storage\r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide Shipping for a LIMITED time\r\n\r\nBuy now: https://thebackpack.biz\r\n\r\nKind Regards, \r\n\r\nCharlotte', '2024-11-16 15:52:21', '2024-11-16 15:52:21'),
(161, 'complaint', 'Chelsea Hernandez', '5cv.i.rtu.als@gmail.com', '5CVAS', 'Sweden', '904-717-0825', 'https://www.google.com', 'Hi there\r\n\r\nAre mounting tasks keeping you from focusing on what truly matters – growing your business?\r\n\r\nAt 5C Virtual Assistance, we\'ve spent 6+ years helping businesses like yours save hours each week and cut operational costs by as much as 70%. Our expert virtual assistants handle your day-to-day tasks so you can focus on strategic growth.\r\n\r\nWhy industry leaders choose 5C Virtual Assistance: • Cost-effective: + Premium support at just $9/hour – a fraction of the cost of hiring locally\r\n+ Flexibility: Scale assistance up or down based on your evolving needs\r\n+ Experience: 6+ years serving diverse industries\r\n+ No overhead: Zero training expenses, benefits, or office space costs\r\n+ Time-zone aligned: Seamless workflow integration with your team\r\n\r\nOur VAs excel in: \r\n- Administrative Support\r\n- Customer Service\r\n- Data Entry & Management\r\n- Calendar & Email Management\r\n- Social Media Management\r\n- Research & Reporting\r\n\r\nImagine what you could achieve with 20 to 30 more hours freed up each week. Our clients typically report:\r\n+ 40% increase in productivity\r\n+ 25% improvement in customer response times\r\n+ 15+ hours saved weekly on administrative tasks\r\n\r\nLooking to streamline your workflow? Book a free 30-minute consultation to discuss your needs. Reply to this email or call us at [phone number].\r\n\r\n** Visit: https://bit.ly/5cvaservices\r\n\r\nBest regards,\r\nChelsea Hernandez\r\n5C Virtual Assistance\r\nhttps://bit.ly/5cvaservices\r\n\r\nP.S. Did you know? Businesses save an average of $3,000 monthly by switching to virtual assistance. Let’s discuss how we can deliver similar results for you.', '2024-11-16 16:41:17', '2024-11-16 16:41:17'),
(162, 'complaint', 'Phil Stewart', 'noreplyhere@aol.com', 'Janessa Burch', 'Dominican Republic', '342-123-4456', 'http://aol.com', 'Your ad, delivered. Millions of website contact forms, one flat rate, no hidden costs. Get noticed, drive results, and grow your business effortlessly.\r\n\r\n Reach out using the contact info below to learn more.\r\n\r\nRegards,\r\nJanessa Burch\r\nEmail: Janessa.Burch@morebiz.my\r\nWebsite: http://gwzqhm.advertise-with-contactforms.pro\r\nSkype: marketingwithcontactforms', '2024-11-17 16:14:47', '2024-11-17 16:14:47'),
(163, 'complaint', 'Phil Stewart', 'noreplyhere@aol.com', 'Miquel Lunsford', 'Réunion', '342-123-4456', 'http://aol.com', 'Reach the right people, the right way. We send your ad to website contact forms with guaranteed visibility and no per click costs. One flat rate, endless possibilities.\r\n\r\n Reach out to me below if you want more details on how I make this happen.\r\n\r\nRegards,\r\nMiquel Lunsford\r\nEmail: Miquel.Lunsford@morebiz.my\r\nWebsite: http://9mdc9q.form-submission-masters.ink\r\nSkype: marketingwithcontactforms', '2024-11-18 09:10:15', '2024-11-18 09:10:15'),
(164, 'complaint', 'Lizette Johann', 'johann.lizette@gmail.com', 'Lizette Johann', 'Nigeria', '3786221034', NULL, 'Unlock all the premium AI apps from one, user-friendly dashboard.\r\n\r\nChatGPT 4.0 \r\nGemini Pro \r\nDALL·E 3 \r\nLeonardo AI \r\nMicrosoft Copilot Pro \r\nMeta Llama 3 \r\nStable Diff XL s \r\nPaLM 2 \r\n\r\nCancel your AI subscriptions, Save thousands of Dollars.\r\n\r\nUnlimited Use - No monthly fees—ever!\r\n\r\n[Closing Soon] Lifetime Deal here -->> https://lifetime-oneai.com <<---', '2024-11-19 20:44:44', '2024-11-19 20:44:44'),
(165, 'complaint', 'Mandy', 'creativeteamhire@outlook.com', 'Content Writer and Copywriter', 'Indonesia', '677900878', NULL, 'Hi, I\'m Mandy, a content and copywriter with over 12 years of experience creating content for various industries, including yours. I write blogs, news articles, SEO-friendly web content, product descriptions, business service descriptions, newsletters, brochures, and more. My focus is on delivering content that connects with your audience, improves SEO, and gets results—all written without AI. I also provide reports from paid tools to back up my work. \r\n\r\nMy rate is $50 per 1,000 words, offering great value for high-quality content. If you\'d like to improve your content, feel free to email me at creativeteamhire@outlook.com.', '2024-11-22 03:10:16', '2024-11-22 03:10:16'),
(166, 'complaint', 'Kristal Harrison', 'harrison.kristal18@gmail.com', 'Kristal Harrison', 'Belize', '917121779', NULL, 'Hi there, I apologize for using your contact form, \r\nbut I wasn\'t sure who the right person was to speak with in your company. \r\nWe have a patented application that creates Local Area pages that rank on \r\ntop of Google within weeks, we call it Local Magic.  Here is a link to the \r\nproduct page https://www.mrmarketingres.com/local-magic/ . The product \r\nleverages technology where these pages are managed dynamically by AI and \r\nit is ideal for promoting any type of business that gets customers from Google.  Can I share a testimonial \r\nfrom one of our clients in the same industry?  I\'d prefer to do a short zoom to \r\nillustrate their full case study if you have time for it? \r\nYou can reach me at marketing@mrmarketingres.com or 843-720-7301. And if this isn\'t a fit please feel free to email me and I\'ll be sure not to reach out again.  Thanks!', '2024-11-22 14:26:37', '2024-11-22 14:26:37'),
(167, 'complaint', 'Phil Stewart', 'noreplyhere@aol.com', 'Rosa Iliffe', 'Saudi Arabia', '342-123-4456', 'http://aol.com', 'Tired of changing algorithms ruining your campaigns? With contact form advertising, there are no rules or restrictions. Your message, your way, delivered to millions.\r\n\r\n Let’s connect—contact me using the information provided below.\r\n\r\nRegards,\r\nRosa Iliffe\r\nEmail: Rosa.Iliffe@morebiz.my\r\nWebsite: http://k2z8ns.form-submission-masters.ink\r\nSkype: marketingwithcontactforms', '2024-11-22 15:44:23', '2024-11-22 15:44:23'),
(168, 'complaint', 'Phil Stewart', 'noreplyhere@aol.com', 'Rhys Hopley', 'Uzbekistan', '342-123-4456', 'http://aol.com', 'Advertise on your own terms. Our contact form service bypasses platforms and delivers your message directly to millions of websites. No rules, no competition, just results.\r\n\r\n Contact me via the information below for all the details.\r\n\r\nRegards,\r\nRhys Hopley\r\nEmail: Rhys.Hopley@morebiz.my\r\nWebsite: http://ksf6l4.advertise-with-contactforms.pro\r\nSkype: marketingwithcontactforms', '2024-11-23 07:42:37', '2024-11-23 07:42:37'),
(169, 'complaint', 'Henry Shakespeare', 'henry.shakespeare@yahoo.com', 'Henry Shakespeare', 'Ascension Island', '4784746889', NULL, 'Unlock all these premium AI apps from a single, user-friendly dashboard.\r\n\r\nChatGPT 4.0 \r\nGemini Pro \r\nDALL·E 3 \r\nLeonardo AI \r\nMicrosoft Copilot Pro \r\nMeta Llama 3 \r\nStable Diff XL s \r\nPaLM 2 \r\n\r\nCancel your AI subscriptions, Save thousands of Dollars $$$$.\r\n\r\nUnlimited Use - No monthly fees—ever!\r\n\r\n[Closing Soon] Lifetime Deal here -->> https://lifetime-oneai.com <<---', '2024-11-23 10:22:41', '2024-11-23 10:22:41'),
(170, 'complaint', 'Annett', 'info@fahey.medicopostura.com', 'Annett Fahey', 'Netherlands', '152063797', 'https://www.bbc.com', 'Good day \r\n\r\nLooking to improve your posture and live a healthier life? Our Medico Postura™ Body Posture Corrector is here to help!\r\n\r\nExperience instant posture improvement with Medico Postura™. This easy-to-use device can be worn anywhere, anytime – at home, work, or even while you sleep.\r\n\r\nMade from lightweight, breathable fabric, it ensures comfort all day long.\r\n\r\nGrab it today at a fantastic 60% OFF: https://medicopostura.com\r\n\r\nPlus, enjoy FREE shipping for today only!\r\n\r\nDon\'t miss out on this amazing deal. Get yours now and start transforming your posture!\r\n\r\nThank You, \r\n\r\nAnnett', '2024-11-23 20:09:13', '2024-11-23 20:09:13'),
(171, 'complaint', 'Edwina Parnell', 'parnell.edwina29@gmail.com', 'Edwina Parnell', 'Sweden', '7846813029', NULL, 'Hi, this is a friendly reminder it\'s your last chance to file your claim for the ERC / Employee Retention Tax Credit. This is money set aside that\'s owed to you by the US Government, which reimburses you up to $32,200 per W2 you kept on payroll during the pandemic. This is your last chance to claim your money: https://claim-erc.net', '2024-11-24 02:09:19', '2024-11-24 02:09:19'),
(172, 'enquiry', 'Thank you for registering - it was incredible and pleasant all the best http://yandex.ru ladonna  cucumber', 'xrum003@24red.ru', 'google', 'Cameroon', '87981825434', NULL, 'Thank you for registering - it was incredible and pleasant all the best http://yandex.ru ladonna  cucumber', '2024-11-25 10:00:37', '2024-11-25 10:00:37'),
(173, 'complaint', 'Marisol Gadsdon', 'marisol.gadsdon@gmail.com', 'Marisol Gadsdon', 'Andorra', '890246008', NULL, 'I pray you are having a great day! Would you be interested in a savings membership, starting at just $20/month? You can save on multiple items including gas and this opportunity is available to you worldwide! Click the link below for more information. ~ Kristi Reed ~\r\nhttps://kristi.savingshighwayglobal.com/?page=membership\r\nDISCLAIMER: This is not a guarantee of savings, earnings, health, or increased credit score. All results vary.\r\n\r\n\r\n\r\nThank you much!', '2024-11-25 16:01:47', '2024-11-25 16:01:47'),
(174, 'complaint', 'Shaun', 'info@fishbourne.caredogbest.com', 'Shaun Fishbourne', 'Syria', '1152853861', 'https://www.bbc.com', 'Good day \r\n\r\nI wanted to reach out and let you know about our new dog harness. It\'s really easy to put on and take off - in just 2 seconds - and it\'s personalized for each dog. \r\nPlus, we offer a lifetime warranty so you can be sure your pet is always safe and stylish.\r\n\r\nWe\'ve had a lot of success with it so far and I think your dog would love it. \r\n\r\nGet yours today with 50% OFF:  https://caredogbest.com\r\n\r\nFREE Shipping - TODAY ONLY! \r\n\r\nMany Thanks, \r\n\r\nShaun', '2024-12-03 00:43:20', '2024-12-03 00:43:20'),
(175, 'complaint', 'Tam', 'info@sheffield.caredogbest.com', 'Tam Sheffield', 'Türkiye', '3036777587', 'https://www.bbc.com', 'Hello \r\n\r\nI wanted to reach out and let you know about our new dog harness. It\'s really easy to put on and take off - in just 2 seconds - and it\'s personalized for each dog. \r\nPlus, we offer a lifetime warranty so you can be sure your pet is always safe and stylish.\r\n\r\nWe\'ve had a lot of success with it so far and I think your dog would love it. \r\n\r\nGet yours today with 50% OFF:  https://caredogbest.com\r\n\r\nFREE Shipping - TODAY ONLY! \r\n\r\nThank You, \r\n\r\nTam', '2024-12-03 09:42:02', '2024-12-03 09:42:02'),
(176, 'support', 'Raffaele Verdicchio', 'raffaele.verdicchio@consultant.com', 'RUSTICASA HOLDING SA', 'Switzerland', '0678486258', 'https://www.rusticasaholding.ch', 'Hi, I\'m Raffaele Verdicchio and I represent as a freelancer the company https://www.rusticasaholding.ch.\r\n\r\nRusticasa Holding is an asset management company and we represent a private investor who is actively looking to invest in your company.\r\n\r\nI recently came across your company and was very impressed by your innovativeness. I would like to discuss possible ways of working together and request a phone call with the board members and Mr. Joseph Sadoun (C.O.O at Rusticasa Holding SA) to discuss how we can work together to achieve common goals. Can we arrange a meeting at the earliest possible date?\r\n\r\nPlease share your calendar with me so we can book a call.\r\n\r\nThank you for your attention.\r\n\r\nBest regards\r\nR. Verdicchio', '2024-12-05 18:57:45', '2024-12-05 18:57:45'),
(177, 'support', 'Raffaele Verdicchio', 'raffaele.verdicchio@consultant.com', 'RUSTICASA HOLDING SA', 'Switzerland', '0678486258', 'https://www.rusticasaholding.ch', 'Hi, I\'m Raffaele Verdicchio and I represent as a freelancer the company https://www.rusticasaholding.ch.\r\n\r\nRusticasa Holding is an asset management company and we represent a private investor who is actively looking to invest in your company.\r\n\r\nI recently came across your company and was very impressed by your innovativeness. I would like to discuss possible ways of working together and request a phone call with the board members and Mr. Joseph Sadoun (C.O.O at Rusticasa Holding SA) to discuss how we can work together to achieve common goals. Can we arrange a meeting at the earliest possible date?\r\n\r\nPlease share your calendar with me so we can book a call.\r\n\r\nThank you for your attention.\r\n\r\nBest regards\r\nR. Verdicchio', '2024-12-05 18:57:50', '2024-12-05 18:57:50'),
(178, 'support', 'Raffaele Verdicchio', 'raffaele.verdicchio@consultant.com', 'RUSTICASA HOLDING SA', 'Switzerland', '0678486258', 'https://www.rusticasaholding.ch', 'Hi, I\'m Raffaele Verdicchio and I represent as a freelancer the company https://www.rusticasaholding.ch.\r\n\r\nRusticasa Holding is an asset management company and we represent a private investor who is actively looking to invest in your company.\r\n\r\nI recently came across your company and was very impressed by your innovativeness. I would like to discuss possible ways of working together and request a phone call with the board members and Mr. Joseph Sadoun (C.O.O at Rusticasa Holding SA) to discuss how we can work together to achieve common goals. Can we arrange a meeting at the earliest possible date?\r\n\r\nPlease share your calendar with me so we can book a call.\r\n\r\nThank you for your attention.\r\n\r\nBest regards\r\nR. Verdicchio', '2024-12-05 18:57:51', '2024-12-05 18:57:51'),
(179, 'complaint', 'Marylin Stinson', 'stinson.marylin86@msn.com', 'Marylin Stinson', 'Nauru', '4588879845', NULL, 'Save more with DAC\'s low-cost payment processing solutions—keep your profits where they belong! http://rcjwrk.dac-capital.top/', '2024-12-07 21:35:50', '2024-12-07 21:35:50'),
(180, 'complaint', 'Thomas Heckel', 'heckel.thomas@gmail.com', 'Thomas Heckel', 'Bahamas', '7707878900', NULL, 'Access all the premium AI apps from one, user-friendly dashboard.\r\n\r\nChatGPT 4.0 \r\nGemini Pro \r\nDALL·E 3 \r\nLeonardo AI \r\nMicrosoft Copilot Pro \r\nMeta Llama 3 \r\nStable Diff XL s \r\nPaLM 2 \r\n\r\nEliminate your AI subscriptions, Save thousands of  $$$$.\r\n\r\nUnlimited Use - No monthly fees—ever!\r\n\r\n[Closing Soon] Lifetime Deal here -->> https://lifetime-oneai.com <<---', '2024-12-07 22:02:59', '2024-12-07 22:02:59'),
(181, 'complaint', 'Homer Loughlin', 'loughlin.homer@msn.com', 'Homer Loughlin', 'Falkland Islands', '3613114379', NULL, 'Advertise smarter with us. We deliver your ad text directly to website contact forms for a flat rate. Your message is guaranteed to be read without per-click expenses.\r\n\r\n Reach out using the contact info below to learn more.\r\n\r\nRegards,\r\nHomer Loughlin\r\nEmail: Homer.Loughlin@morebiz.my\r\nWebsite: http://rsh2pe.advertise-with-contactforms.pro\r\nConnect with me via Skype: https://join.skype.com/invite/nVcxdDgQnfhA', '2024-12-07 23:02:47', '2024-12-07 23:02:47'),
(182, 'complaint', 'Sonya Dominique', 'co.ntactfl.ea.ds@gmail.com', 'CF Leads', 'New Zealand', '7856504325', 'https://yahoo.com', 'Just as as you got this message, we can send your message to millions of contact forms.\r\n\r\nLooking for cost-effective outreach strategies? We specialize in sending messages directly through website contact forms, ensuring your message lands in the right inboxes. \r\n\r\nBegin reaching millions of potential customers today, all starting from just $22 only! \r\n\r\nLet’s amplify your brand and drive traffic like never before.\r\n\r\n”” Visit: https://bit.ly/cfsubmitter\r\n\r\n\r\n\r\n\r\n\r\n\r\nIf at any point you no longer want to receive future communications from this address, simply visit this link: https://bit.ly/unlistus\r\n4540 Sigley Road, Hays, NY, USA, 67601', '2024-12-08 16:35:15', '2024-12-08 16:35:15'),
(183, 'complaint', 'Marlys Montanez', 'marlys.montanez@gmail.com', 'Marlys Montanez', 'Switzerland', NULL, NULL, 'Reach millions of customers effortlessly. We send your ad text directly to website contact forms for a flat rate - no per click charges. Your message will be seen, just like you\'re reading this one right now.\r\n\r\n Reach out using the contact info below to learn more.\r\n\r\nRegards,\r\nMarlys Montanez\r\nEmail: Marlys.Montanez@morebiz.my\r\nWebsite: http://ncxmjk.advertise-with-contactforms.pro\r\nConnect with me via Skype: https://join.skype.com/invite/nVcxdDgQnfhA', '2024-12-08 17:14:12', '2024-12-08 17:14:12'),
(184, 'complaint', 'Basil', 'info@best.bangeshop.com', 'Basil Best', 'St. Helena', '235275716', 'https://www.cnn.com', 'Hey there, \r\n\r\nI hope this email finds you well. I wanted to let you know about our new BANGE backpacks and sling bags that just released.\r\n\r\nThe bags are waterproof and anti-theft, and have a built-in USB cable that can recharge your phone while you\'re on the go.\r\n\r\nBoth bags are made of durable and high-quality materials, and are perfect for everyday use or travel.\r\n\r\nOrder yours now at 50% OFF with FREE Shipping: http://bangeshop.com\r\n\r\nBest Wishes,\r\n\r\nBasil', '2024-12-09 18:38:50', '2024-12-09 18:38:50'),
(185, 'complaint', 'Neil', 'no-reply@noreply.blz', 'Freelance Data Entry', 'Oman', '371072418', NULL, 'Hello! I\'m Neil, a seasoned professional with over a decade of experience specializing in data entry, data management, including research, processing, and cleansing. I also provide financial accounting services, from managing accounts payable and receivable to reconciliations, invoice handling, and preparing financial statements. Additionally, I offer expert e-commerce support, such as inventory management and invoice processing. I’m skilled at understanding and adapting to your unique processes and proficient in working with any software. My rate ranges from USD 6/hr to USD 10/hr, with special discounts available for part-time and full-time engagements. \r\n\r\nLet’s discuss how I can help streamline and elevate your business—Reach me at venture4help@outlook.com', '2024-12-10 05:03:30', '2024-12-10 05:03:30'),
(186, 'complaint', 'Micah Dryer', 'dryer.micah@gmail.com', 'Micah Dryer', 'Türkiye', '446067485', NULL, 'Hi! \r\n\r\nIs your website not making the sales that it should? \r\n\r\nWe build highly branded shopify stores.  \r\n\r\nBe your own boss, you want a BUSINESS, not a website only! \r\nThe best value for your money (17k happy clients) \r\nWe provide you with lifetime support! \r\n\r\n\r\nNo sales in 30 days from our system? Get a full refund \r\n\r\nCome get your shopify site built for you and dominate your market. \r\nPCX Group.com', '2024-12-11 00:20:55', '2024-12-11 00:20:55'),
(187, 'complaint', 'Dev', 'noreply@noreply.zyz', 'Responsive Website Design', 'Sri Lanka', '7986504089', NULL, 'Hello! If you\'re looking for a professional website developer or a responsive website designer, you\'re in the right place. With 15 years of experience, I specialize in WordPress design and development, full stack development, creating responsive and mobile-friendly sites, and integrating payment gateways. My expertise also includes speed optimization, custom development, and building eCommerce solutions. I can troubleshoot and fix bugs, ensuring your website performs at its best. Let’s collaborate to create the perfect website for your needs!\r\n\r\nFeel free to send me an email at webdesignservices111@outlook.com to collaborate.', '2024-12-11 07:20:33', '2024-12-11 07:20:33'),
(188, 'complaint', 'Simon Johnson', 'markwints39@gmail.com', 'live', 'Vietnam', '734-555-7893', NULL, 'Hi My name is Simon.  I did a google search and I noticed that peernetics.io isn\'t really getting that many free leads from social media. \r\n\r\nI think you are good company and you should be getting more (and better) leads.  \r\n\r\nCan I help you solve your lead issue without increasing your workload?  I can show you live on zoom, for free.  \r\n\r\nHope over here\r\nhttps://bit.ly/live-dec\r\n\r\n\r\nRegards,\r\nSimon\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n169 Homan Ln, Centre Hall, PA 16828', '2024-12-16 03:56:50', '2024-12-16 03:56:50'),
(189, 'complaint', 'Jerry Upshaw', 'jerry.upshaw35@gmail.com', 'Jerry Upshaw', 'Jersey', '675297384', NULL, 'Hi there, I apologize for using your contact form, \r\nbut I wasn\'t sure who the right person was to speak with in your company. \r\nWe have a patented application that creates Local Area pages that rank on \r\ntop of Google within weeks, we call it Local Magic.  Here is a link to the \r\nproduct page https://www.mrmarketingres.com/local-magic/ . The product \r\nleverages technology where these pages are managed dynamically by AI and \r\nit is ideal for promoting any type of business that gets customers from Google.  Can I share a testimonial \r\nfrom one of our clients in the same industry?  I\'d prefer to do a short zoom to \r\nillustrate their full case study if you have time for it? \r\nYou can reach me at marketing@mrmarketingres.com or 843-720-7301. And if this isn\'t a fit please feel free to email me and I\'ll be sure not to reach out again.  Thanks!', '2025-04-30 03:34:45', '2025-04-30 03:34:45'),
(190, 'complaint', 'Douglas Peterson', 'merriman.santiago@gmail.com', 'Nxtlsim Nomad eSIM', 'Congo - Brazzaville', '249448628', NULL, 'Dear Sir/Madam,\r\n\r\nDo you happen to be often working abroad for business?\r\n\r\nA lot of companies still spend too much on roaming fees.  \r\nWe offer a modern solution with worldwide eSIM plans — fully digital, ready in minutes, and cutting your roaming costs drastically.\r\n\r\nPerfect for remote teams.\r\n\r\nDiscover how it works: https://e-simworldwide.com\r\n\r\nKind regards,\r\ne-SIM Worldwide', '2025-04-30 08:38:11', '2025-04-30 08:38:11'),
(191, 'complaint', 'Christen Floyd', 'floyd.christen@yahoo.com', 'Christen Floyd', 'Jersey', '7818732302', NULL, 'What if your Peernetics website could instantly receive a significant surge in traffic? Many businesses fail to attract thousands of daily visitors simply because they don’t have enough exposure.\r\n\r\nWith our advanced traffic solution, you can attract four thousand highly targeted visitors as part of a free trial. If you like what you see, our plans offer up to 400,000 visitors monthly—helping your site flourish. Get more details here: https://cutt.ly/xrjf2p9v', '2025-05-01 22:05:04', '2025-05-01 22:05:04'),
(192, 'complaint', 'Sally Dudgeon', 'prince@stopformspam.xyz', 'Sally Dudgeon', 'Libya', '492474815', NULL, 'Hello, I know things are tough right now, so I’m offering a no-strings-attached opportunity: a free outreach blast to 50,000 contact forms. This is the same method I use for my paying clients to generate leads fast, and I’m offering it free to help businesses during this downturn. Want to claim your free spot? Simply head to https://free50ksubmissionsoffer.my and I’ll take care of everything for you. No strings attached. Just a way to support your business during tough times.', '2025-05-02 19:57:35', '2025-05-02 19:57:35'),
(193, 'enquiry', 'TommyErect', 'xrumer23Few@gmail.com', 'google', 'Malawi', '83176597421', NULL, 'hi', '2025-05-02 23:03:38', '2025-05-02 23:03:38'),
(194, 'complaint', 'Winifred Freedman', 'prince@stopformspam.xyz', 'Winifred Freedman', 'Cuba', '370204267', NULL, 'Hey there, Times are tough, so I’m offering a free outreach blast to 50,000 contact forms to help you stay visible. No strings attached. This is the same system I use to generate leads for my clients, and I’m offering it to help businesses stay visible during the slowdown. Want to claim your free spot? Simply head to https://free50ksubmissionsoffer.my and I’ll take care of everything for you. No catch. No obligation. Just a little help when it’s needed most.', '2025-05-02 23:22:21', '2025-05-02 23:22:21'),
(195, 'enquiry', '* * * Unlock Free Spins Today: http://ankhinnovation.com/index.php?v3sm9n * * * hs=3994f4c85cd6a68f3b872226ad6b007f* ххх*', 'pazapz@mailbox.in.ua', 'yvevab', 'Åland Islands', '184080771483', 'w0v8je', 'k24eq5', '2025-05-03 22:31:15', '2025-05-03 22:31:15'),
(196, 'enquiry', '* * * <a href=\"http://ankhinnovation.com/index.php?v3sm9n\">Claim Free iPhone 16</a> * * * hs=3994f4c85cd6a68f3b872226ad6b007f* ххх*', 'pazapz@mailbox.in.ua', 'yvevab', 'Åland Islands', '184080771483', 'w0v8je', 'k24eq5', '2025-05-03 22:31:24', '2025-05-03 22:31:24'),
(197, 'support', '* * * Win Free Cash Instantly: http://ankhinnovation.com/index.php?v3sm9n * * * hs=3994f4c85cd6a68f3b872226ad6b007f* ххх*', 'pazapz@mailbox.in.ua', 'ni10fx', 'Åland Islands', '271337009628', '0vny7f', 'a0zfis', '2025-05-03 22:31:29', '2025-05-03 22:31:29'),
(198, 'support', '* * * <a href=\"http://ankhinnovation.com/index.php?v3sm9n\">Claim Free iPhone 16</a> * * * hs=3994f4c85cd6a68f3b872226ad6b007f* ххх*', 'pazapz@mailbox.in.ua', 'ni10fx', 'Åland Islands', '271337009628', '0vny7f', 'a0zfis', '2025-05-03 22:31:36', '2025-05-03 22:31:36'),
(199, 'complaint', '* * * Claim Free iPhone 16: http://ankhinnovation.com/index.php?v3sm9n * * * hs=3994f4c85cd6a68f3b872226ad6b007f* ххх*', 'pazapz@mailbox.in.ua', 'wfolkh', 'Åland Islands', '443162632448', 'fsnvsi', 'd020a2', '2025-05-03 22:32:24', '2025-05-03 22:32:24'),
(200, 'complaint', '* * * <a href=\"http://ankhinnovation.com/index.php?v3sm9n\">Unlock Free Spins Today</a> * * * hs=3994f4c85cd6a68f3b872226ad6b007f* ххх*', 'pazapz@mailbox.in.ua', 'wfolkh', 'Åland Islands', '443162632448', 'fsnvsi', 'd020a2', '2025-05-03 22:32:28', '2025-05-03 22:32:28'),
(201, 'complaint', 'Phillip Fawcett', 'phillip.fawcett@gmail.com', 'Phillip Fawcett', 'Nicaragua', '496812775', NULL, 'When times are tough, your ad needs to show up—just like this one did. Sent via website contact forms, with guaranteed delivery and flat pricing. \r\n\r\nCurious how this can help? Contact me for details.  \r\n\r\nRegards,  \r\nPhillip Fawcett  \r\nEmail: Phillip.Fawcett@mymail2go.my  \r\nWebsite: https://getnewclientswithformads.biz', '2025-05-05 10:03:53', '2025-05-05 10:03:53'),
(202, 'complaint', 'Elizabet Rosenbalm', 'rosenbalm.elizabet@hotmail.com', 'Elizabet Rosenbalm', 'Kiribati', '244723432', NULL, 'Advertising that lands. Literally. Just like this landed in your inbox, we’ll send your ad via contact forms people actually check. \r\n\r\nInterested? Get in touch today to learn more.  \r\n\r\nRegards,  \r\nElizabet Rosenbalm  \r\nEmail: Elizabet.Rosenbalm@mymail2go.my  \r\nWebsite: https://resultsmarketing.my', '2025-05-05 12:22:46', '2025-05-05 12:22:46'),
(203, 'complaint', 'Valencia Bladen', 'bladen.valencia@gmail.com', 'Valencia Bladen', 'Zimbabwe', '121674616', NULL, '������ 100% Free Website Traffic — No signup, no catch. Just submit and go. Open to the first 500 people only: https://freewebsitetrafficforever.top', '2025-05-06 00:22:57', '2025-05-06 00:22:57'),
(204, 'complaint', 'Andres Yoder', 'yoder.andres@gmail.com', 'Andres Yoder', 'Iceland', NULL, NULL, 'Your website needs visitors. We’ll send them for free — offer closes soon. https://freewebsitetrafficforever.top', '2025-05-06 03:31:53', '2025-05-06 03:31:53'),
(205, 'complaint', 'Olga Kladencova', 'olechkakladencova@gmail.com', 'PrFlare', 'Finland', NULL, NULL, 'Hello.\r\n\r\nI hope this email finds you well.\r\n\r\nMy name is Olga, and I am a representative of PrFlare, an outstanding guest posting service that has successfully improved the online visibility of businesses like yours!\r\n\r\nI came across your website, peernetics.io, I was impressed by the value you offer to your clients.\r\n\r\nOur goal is to help you improve your brand\'s visibility, reach, and authority through our expertise in guest posting!\r\n\r\nHere\'s what sets PrFlare apart from the competition:\r\n\r\nLarge database: Our extensive database comprises more than 38000 sites (ranging from niche blogs to major media outlets) and is consistently expanding;\r\n\r\nIndustry Expertise: We cover a wide range of niches and collaborate closely with our clients;\r\n\r\nQuality Control: Quality control is paramount to us; therefore, our editorial team carefully reviews all content to ensure it is engaging, well-written, and aligns with top SEO and editorial standards;\r\n\r\n100% White Hat Techniques: We adhere to Google\'s guidelines and utilize only ethical, white-hat methods to enhance your brand\'s authority and search engine rankings.\r\n\r\nIf you\'d like to learn more about us, please visit our website at https://hi.pr-flare.com!\r\n\r\nWe are excited about the opportunity to help peernetics.io achieve new heights through our guest posting services.\r\n\r\nWarm Regards,\r\n\r\nOlga\r\nPrFlare Guest Posting Services\r\nWebsite: https://hi.pr-flare.com', '2025-05-09 14:12:57', '2025-05-09 14:12:57'),
(206, 'complaint', 'Nannie Spitzer', 'spitzer.nannie52@yahoo.com', 'Nannie Spitzer', 'Venezuela', '3953185755', NULL, 'Hi there,\r\n\r\nImagine having a powerful AI tool that can create lead magnets, affiliate bonuses, and even paid mini-offers – complete with a sales page – in just minutes.\r\n\r\nThat\'s exactly what our tool does, without the usual time investment.\r\n\r\nSell mini-offers at $7-$27 for instant cash flow.\r\nTurn existing content into revenue-generating products.\r\nCreate high-converting bonuses for your affiliate campaigns.\r\nBuild effective tripwire funnels.\r\nGenerate valuable lead magnet giveaways.\r\nAnd much more!\r\n\r\nReady to see how you can create and sell your own mini-products in minutes?\r\n\r\nClick here to access and get Full Resale Rights: https://furtherinfo.info/refer/magicgpt\r\n\r\nNannie', '2025-05-09 19:27:44', '2025-05-09 19:27:44'),
(207, 'complaint', 'Kacey Wentcher', 'wentcher.kacey65@gmail.com', 'Kacey Wentcher', 'Germany', '677055902', NULL, 'Hi,\r\n\r\nI thought this may interest you - Get immediate access to 20 premium digital marketing courses with 100% full unrestricted PLR.\r\n\r\nThis means you can:\r\n\r\nSell them as your own products\r\nRebrand them with your name/logo\r\nBundle them with other offerings\r\nGive them away to build your list\r\nUse the content in any way you choose\r\n\r\nThese in-demand courses cover essential digital marketing topics that your audience needs right now.\r\n\r\nWhy start from scratch when you can leverage these professionally-created resources immediately?\r\n\r\nFind out more: https://furtherinfo.info/20plr', '2025-05-10 16:24:40', '2025-05-10 16:24:40'),
(208, 'complaint', 'Rocky Bair', 'rocky.bair@gmail.com', 'Rocky Bair', 'Argentina', '675689036', NULL, 'Hi there, I apologize for using your contact form, \r\nbut I wasn\'t sure who the right person was to speak with in your company. \r\nWe have a patented application that creates Local Area pages that rank on \r\ntop of Google within weeks, we call it Local Magic.  Here is a link to the \r\nproduct page https://www.mrmarketingres.com/local-magic/ . The product \r\nleverages technology where these pages are managed dynamically by AI and \r\nit is ideal for promoting any type of business that gets customers from Google.  Can I share a testimonial \r\nfrom one of our clients in the same industry?  I\'d prefer to do a short zoom to \r\nillustrate their full case study if you have time for it? \r\nYou can reach me at marketing@mrmarketingres.com or 843-720-7301. And if this isn\'t a fit please feel free to email me and I\'ll be sure not to reach out again.  Thanks!', '2025-05-15 14:36:12', '2025-05-15 14:36:12'),
(209, 'complaint', 'Barbra Agosto', 'barbra.agosto@hotmail.com', 'Barbra Agosto', 'St. Pierre & Miquelon', '637558048', NULL, 'Hi,\r\n\r\nI thought this may interest you - Get immediate access to 20 premium digital marketing courses with 100% full unrestricted PLR.\r\n\r\nThis means you can:\r\n\r\nSell them as your own products\r\nRebrand them with your name/logo\r\nBundle them with other offerings\r\nGive them away to build your list\r\nUse the content in any way you choose\r\n\r\nThese in-demand courses cover essential digital marketing topics that your audience needs right now.\r\n\r\nWhy start from scratch when you can leverage these professionally-created resources immediately?\r\n\r\nFind out more: https://furtherinfo.info/20plr', '2025-05-18 01:29:25', '2025-05-18 01:29:25'),
(210, 'complaint', 'Werner Kirklin', '3850l6@hadux8.com', 'Werner Kirklin', 'China', '799514510', NULL, 'Free traffic to your site. No signup. No strings. Limited spots. https://freewebsitetrafficforever.top', '2025-05-20 12:15:01', '2025-05-20 12:15:01'),
(211, 'complaint', 'Dylan McQuay', '78h4zc@32369w.com', 'Dylan McQuay', 'Paraguay', '89703840', NULL, '������ Need 5,000+ Real Visitors This Week? We’re blasting free traffic to websites — no signups, no catches, just results. Claim yours now: https://freewebsitetrafficforever.top', '2025-05-20 14:12:44', '2025-05-20 14:12:44'),
(212, 'complaint', 'Choy K.', 'km.health@outlook.com', 'Carmelo McIntyre', 'Niger', '651748607', NULL, 'Hi,\r\n\r\n\r\nI hope you\'re doing well!\r\n\r\n\r\n\r\nI’m reaching out to see if you’d be open to a link exchange with us. I’d be happy to write a feature article about your business and include a backlink to your site (peernetics.io) from one of our company websites. In return, we kindly ask that you link back to us from any page of your site on peernetics.io.\r\n\r\n\r\n\r\nLet me know if this sounds like something you’d be interested in — I’d love to explore the possibility with you.\r\n\r\n\r\n\r\nLooking forward to your reply\r\n\r\n!\r\n\r\nWarm regards,\r\n\r\nChoy', '2025-05-20 15:56:41', '2025-05-20 15:56:41'),
(213, 'complaint', 'Brendan', 'info@robe.easerelief.net', 'Brendan Robe', 'Benin', '3790488103', 'https://www.bbc.com', 'EASE YOUR PAIN IN 10 MINUTES EFFORTLESSLY\r\n\r\nBe Free from sore muscles and joint pain\r\nTry FitRx Wireless Massager & Relieve YOUR Pain Effortlessly In 10 Min!\r\nSave 50% OFF + FREE Priority Shipping\r\n\r\nShop Now: https://EaseRelief.net\r\n\r\nEnjoy, \r\n\r\nBrendan', '2025-05-20 17:59:00', '2025-05-20 17:59:00'),
(214, 'complaint', 'Brian WRIGHT Eng.', 'newsletter@wexxon.com', 'WEXXON', 'Malaysia', '7209248652', 'https://wexxon.com', 'Please visit https://tinyurl.com/27g52cxz', '2025-05-22 13:42:50', '2025-05-22 13:42:50'),
(215, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'GE', 'St. Lucia', '555-555-1212', NULL, 'Hello Peernetics Owner,\r\n\r\nMy name’s Eric and for just a second, imagine this:\r\n\r\n- Someone does a search and ends up at Peernetics.  \r\n- They hang out for a moment to check it out. I’m interested… but… maybe…  \r\n- And then they click the back button and check out the other search results instead.  \r\n- Bottom line – you got an eyeball, but nothing else.  \r\n- They’re gone.\r\n\r\nThis isn’t really your fault – it happens a lot – studies show 7 out of 10 visitors to any site leave without leaving a trace.\r\n\r\nBut you can fix that.\r\n\r\nWeb Visitors Into Leads is a software widget that works on your site, ready to gather any visitor’s Name, Email address, and Phone Number. It lets you know immediately – allowing you to call that lead while they’re literally looking over your site.\r\n\r\nPlease see this URL to test a Live Demo with Web Visitors Into Leads now to see exactly how it works:  \r\nhttps://trustedleadgeneration.com\r\n\r\nTime is of the essence when it comes to connecting with leads – the difference between contacting someone within 5 minutes compared to 30 minutes later can be significant.\r\n\r\nAdditionally, now that you have their phone number, with our new SMS Text With Lead feature you can immediately start a text conversation… so even if you don’t close a deal then, you can follow up with text messages for new offers, useful links, even just a quick note to build a relationship.\r\n\r\nEffective stuff.\r\n\r\nPlease see this URL to learn what Web Visitors Into Leads can do for your business:  \r\nhttps://trustedleadgeneration.com\r\n\r\nYou could be converting significantly more leads today!\r\n\r\nEric  \r\nPS: Web Visitors Into Leads offers a 14-day evaluation – it even includes international calling.  \r\nYou have customers ready to talk with you right now… don’t keep them waiting.  \r\nPlease see this URL to try Web Visitors Into Leads now:  \r\nhttps://trustedleadgeneration.com\r\n\r\nIf you\'d like to Want to receive less emails, or none whatsoever? Update your email preferences by clicking here. click here https://trustedleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-05-22 21:12:11', '2025-05-22 21:12:11'),
(216, 'complaint', 'Tammi Estep', 'fouriejohan254@gmail.com', 'Tammi Estep', 'Spain', '3367616015', NULL, 'Hey!\r\n\r\nAre you in need of custom B2B Data? \r\n\r\nAll the Engineering companies in New York, all the doctors in Australia, all the restaurants in South Africa..\r\n\r\nCome get a free sample from us! We just finished scraping the entire Google Maps with emails!\r\n\r\nRequest any sample here: https://dataleadsfinder.support\r\n\r\nOr\r\n\r\nHave a look at the data: https://marketingaaa.ventures\r\n\r\nRegards,\r\nData Lovers', '2025-05-22 22:20:06', '2025-05-22 22:20:06'),
(217, 'complaint', 'Sherryl Escobar', 'sherryl.escobar@outlook.com', 'Sherryl Escobar', 'Niue', '4393401263', NULL, 'Hi there, I apologize for using your contact form, \r\nbut I wasn\'t sure who the right person was to speak with in your company. \r\nWe have a patented application that creates Local Area pages that rank on \r\ntop of Google within weeks, we call it Local Magic.  Here is a link to the \r\nproduct page https://www.mrmarketingres.com/local-magic/ . The product \r\nleverages technology where these pages are managed dynamically by AI and \r\nit is ideal for promoting any type of business that gets customers from Google.  Can I share a testimonial \r\nfrom one of our clients in the same industry?  I\'d prefer to do a short zoom to \r\nillustrate their full case study if you have time for it? \r\nYou can reach me at marketing@mrmarketingres.com or 843-720-7301. And if this isn\'t a fit please feel free to email me and I\'ll be sure not to reach out again.  Thanks!', '2025-05-23 04:09:33', '2025-05-23 04:09:33'),
(218, 'complaint', 'Corrine', 'info@welsby.easerelief.net', 'Corrine Welsby', 'Russia', '371939031', 'https://www.bbc.com', 'EASE YOUR PAIN IN 10 MINUTES EFFORTLESSLY\r\n\r\nBe Free from sore muscles and joint pain\r\nTry FitRx Wireless Massager & Relieve YOUR Pain Effortlessly In 10 Min!\r\nSave 50% OFF + FREE Priority Shipping\r\n\r\nShop Now: https://EaseRelief.net\r\n\r\nTo your success, \r\n\r\nCorrine', '2025-05-23 07:53:29', '2025-05-23 07:53:29'),
(219, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'UPPER AUSTRIA', 'Djibouti', '555-555-1212', NULL, 'Hi Peernetics Owner,\r\n\r\nMy name is Eric and I’m betting you’d like your website Peernetics to generate more leads.\r\n\r\nHere’s how:\r\n\r\nLeadConnect is a software widget that works on your site, ready to capture any visitor’s Name, Email address, and Phone Number. It signals you as soon as they say they’re interested – so that you can talk to that lead while they’re still there at Peernetics.\r\n\r\nhttps://resultleadgeneration.com for a live demo now.\r\n\r\nPlus, now that you’ve got their phone number, our new SMS Text With Lead feature enables you to start a text (SMS) conversation – answer questions, provide more info, and close a deal that way.\r\n\r\nIf they don’t take you up on your offer then, just follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nhttps://resultleadgeneration.com to discover what LeadConnect can do for your business.\r\n\r\nThe difference between contacting someone within 5 minutes versus a half-hour means you could be converting up to 100X more leads today!\r\n\r\nTry LeadConnect and get more leads now.\r\n\r\nEric\r\n\r\nPS: The studies show 7 out of 10 visitors don’t hang around – you can’t afford to lose them!\r\nLeadConnect offers a complimentary 14-day trial – and it even includes International Long Distance Calling.  \r\nYou have customers waiting to talk with you right now… don’t keep them waiting.  \r\nhttps://resultleadgeneration.com to try LeadConnect now.\r\n\r\nIf you\'d like to Want to receive fewer emails, or none whatsoever? Update your email preferences by visiting https://resultleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-05-23 10:24:13', '2025-05-23 10:24:13');
INSERT INTO `contacts` (`id`, `type`, `name`, `email`, `company`, `country`, `phone`, `website`, `message`, `created_at`, `updated_at`) VALUES
(220, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'NSW', 'Grenada', '555-555-1212', NULL, 'Hello Peernetics Owner!\r\n\r\nMy name’s Eric and for just a second, imagine this…\r\n\r\n- Someone does a search and winds up at Peernetics.\r\n- They hang out for a minute to check it out. “I’m interested… but… maybe…”\r\n- And then they hit the back button and check out the other search results instead.\r\n- Bottom line – you got an eyeball, but nothing else to show for it.\r\n- There they go.\r\n\r\nThis isn’t really your fault – it happens a lot – studies show 7 out of 10 visitors to any site disappear without leaving a trace.\r\n\r\nBut you CAN fix that.\r\n\r\nLeadConnect is a software widget that works on your site, ready to capture any visitor’s Name, Email address and Phone Number. You’ll know right then and there – enabling you to call that lead while they’re literally looking over your site.\r\n\r\nVisit https://boltleadgeneration.com to try out a Live Demo with LeadConnect now to see exactly how it works.\r\n\r\nTime is money when it comes to connecting with leads – the difference between contacting someone within 5 minutes versus 30 minutes later can be huge – like 100 times better!\r\n\r\nPlus, now that you have their phone number, with our new SMS Text With Lead feature you can automatically start a text (SMS) conversation… so even if you don’t close a deal then, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nStrong stuff.\r\n\r\nVisit https://boltleadgeneration.com to discover what LeadConnect can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\n\r\nPS: LeadConnect offers a complimentary 14-day trial – you could be converting up to 100x more leads immediately!  \r\nIt even includes International Long Distance Calling.  \r\nYou have customers waiting to talk with you right now… don’t keep them waiting.  \r\nVisit https://boltleadgeneration.com to try LeadConnect now.\r\n\r\nIf you\'d like to Want to receive fewer emails, or none whatsoever? Update your email preferences by visiting https://boltleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-05-23 16:31:59', '2025-05-23 16:31:59'),
(221, 'support', 'Qaz', 'qqq', NULL, NULL, NULL, NULL, 'Qq', '2025-05-24 07:46:37', '2025-05-24 07:46:37'),
(222, 'support', 'Qaz', 'az@live.com', NULL, NULL, NULL, NULL, 'Test.', '2025-05-24 07:47:13', '2025-05-24 07:47:13'),
(223, 'support', 'Qaz', 'az@live.com', NULL, NULL, NULL, NULL, 'Test.', '2025-05-24 07:47:16', '2025-05-24 07:47:16'),
(224, 'complaint', 'Choy K.', 'km.health@outlook.com', 'Benjamin Mackersey', 'Madagascar', '215016629', NULL, 'Hi,\r\n\r\n\r\nI hope you\'re doing well!\r\n\r\n\r\n\r\nI’m reaching out to see if you’d be open to a link exchange with us. I’d be happy to write a feature article about your business and include a backlink to your site (peernetics.io) from one of our company websites. In return, we kindly ask that you link back to us from any page of your site on peernetics.io.\r\n\r\n\r\n\r\nLet me know if this sounds like something you’d be interested in — I’d love to explore the possibility with you.\r\n\r\n\r\n\r\nLooking forward to your reply\r\n\r\n!\r\n\r\nWarm regards,\r\n\r\nChoy', '2025-05-24 11:38:37', '2025-05-24 11:38:37'),
(225, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'IA', 'Syria', '555-555-1212', NULL, 'Hello to the Peernetics Owner,\r\n\r\nI am Eric, and unlike many emails you may receive, I would like to share a note of positive feedback – well done!\r\n\r\nWhat for?\r\n\r\nPart of my role is to examine websites, and the work you have done with Peernetics certainly stands out.\r\n\r\nIt is clear you have taken building a website seriously and invested real effort into developing something of quality.\r\n\r\nHowever, there is a question…\r\n\r\nWhen someone like me finds your site – maybe at the top of the search results (good job, by the way) or through a link, how can you tell?\r\n\r\nMore importantly, how can you connect with that visitor?\r\n\r\nResearch indicates that many visitors leave quickly.\r\n\r\nHere is a way to create immediate engagement that might be new to you:\r\n\r\nWeb Visitors Into Leads is a tool that operates on your site, ready to gather each visitor’s name, email address, and phone number. It alerts you promptly when they are interested – so you can speak with them while they are viewing Peernetics.\r\n\r\nPlease visit https://actionleadgeneration.com to view a live demonstration of Web Visitors Into Leads today and see exactly how it operates.\r\n\r\nIt can be very helpful for your business – and it gets even better… after you have their phone number, with our text messaging feature, you can begin a conversation promptly (there’s a significant difference between connecting within a few minutes compared to waiting much longer).\r\n\r\nAdditionally, even if you do not reach a mutual understanding at once, you can maintain contact later with text messages for additional resources, content links, or follow-ups to build a rapport.\r\n\r\nEverything described is straightforward, convenient, and effective.\r\n\r\nVisit https://actionleadgeneration.com to learn what Web Visitors Into Leads can provide for your business.\r\n\r\nYou could be engaging with significantly more potential contacts soon!\r\n\r\nEric\r\n\r\nP.S. Web Visitors Into Leads includes a 14-day evaluation period and supports international communication. There are individuals ready to speak with you now, so please do not keep them waiting.\r\n\r\nVisit https://actionleadgeneration.com to explore Web Visitors Into Leads today.\r\n\r\nIf you\'d like to Want to receive fewer emails, or none whatsoever? Update your email preferences by visiting https://actionleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-05-24 17:14:36', '2025-05-24 17:14:36'),
(226, 'complaint', 'Giselle Mayo', 'giselle.mayo@gmail.com', 'Giselle Mayo', 'Switzerland', '745436824', NULL, 'Hi!\r\n\r\nUnlock a steady side income quickly by sharing short opinions after hours —  no experience needed. \r\n\r\nJoin now to start earning within minutes  >>  https://t.ly/worktrack.WritingReviews', '2025-05-26 04:08:10', '2025-05-26 04:08:10'),
(227, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'BURGENLAND', 'Malta', '555-555-1212', NULL, 'Hi Peernetics Owner!\r\n\r\nMy name’s Eric and I just ran across your website at Peernetics...\r\n\r\nIt’s got a lot going for it, but here’s an idea to make it even MORE effective.\r\n\r\nhttps://boltleadgeneration.com for a live demo now.\r\n\r\nLeadConnect is a software widget that works on your site, ready to capture any visitor’s Name, Email address, and Phone Number. You’ll know immediately they’re interested and you can call them directly to TALK with them - literally while they’re still on the web looking at your site.\r\n\r\nhttps://boltleadgeneration.com to try out a Live Demo with LeadConnect now to see exactly how it works and even give it a try… it could be huge for your business.\r\n\r\nPlus, now that you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation pronto… which is so powerful, because connecting with someone within the first 5 minutes is 100 times more effective than waiting 30 minutes or more later.\r\n\r\nThe new text messaging feature lets you follow up regularly with new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable.\r\n\r\nhttps://boltleadgeneration.com to discover what LeadConnect can do for your business, potentially converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\n\r\nPS: LeadConnect offers a complimentary 14-day trial – and it even includes International Long Distance Calling.  \r\nYou have customers waiting to talk with you right now… don’t keep them waiting.  \r\nhttps://boltleadgeneration.com to try LeadConnect now.\r\n\r\nIf you\'d like to Want to receive fewer emails, or none whatsoever? Update your email preferences by visiting https://boltleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-05-26 16:19:03', '2025-05-26 16:19:03'),
(228, 'complaint', 'Alvin Prell', 'prell.alvin@gmail.com', 'Alvin Prell', 'Armenia', '9083545248', NULL, 'Advertising during a downturn isn’t optional—it’s survival. We deliver your ad the same way you\'re reading this—via contact forms. No per-click nonsense. \r\n\r\nCurious how this can help? Contact me for details.  \r\n\r\nRegards,  \r\nAlvin Prell  \r\nEmail: Alvin.Prell@mailtome.my  \r\nWebsite: https://resultsmarketing.my', '2025-05-26 16:26:08', '2025-05-26 16:26:08'),
(229, 'complaint', 'Micheline Whitelaw', 'micheline.whitelaw66@gmail.com', 'Micheline Whitelaw', 'Seychelles', '433255329', NULL, 'Smart advertising, even in a tough economy. We place your message right where this one showed up—in website contact forms. Flat-rate, guaranteed exposure. \r\n\r\nHave questions? Reach out and I’ll be happy to help.  \r\n\r\nRegards,  \r\nMicheline Whitelaw  \r\nEmail: Micheline.Whitelaw@mailtome.my  \r\nWebsite: https://boostyourmarketingwithcontactforms.pro', '2025-05-27 01:12:33', '2025-05-27 01:12:33'),
(230, 'complaint', 'Karen B.', 'outreachseo56@gmail.com', 'Outreach SEO', 'United States', '42926851', NULL, 'Hi,\r\n\r\nI wanted to see if you\'d be interested in a link exchange for mutual SEO benefits. I can link to your site (peernetics.io) from a few of our high-authority websites. In return, you would link back to our clients’ sites, which cover niches like health, business services, real estate, consumer electronics, and more.\r\n\r\nIf you\'re interested, let me know — I\'d be happy to share more details!\r\n\r\nThanks for your time,\r\nKaren\r\nSEO Account Manager', '2025-05-27 14:35:43', '2025-05-27 14:35:43'),
(231, 'complaint', 'Choy K.', 'km.health@outlook.com', 'Jaimie Hakala', 'Libya', '745248897', NULL, 'Hi,\r\n\r\n\r\nWould you be open to a simple link exchange? I’ll publish a short feature article about your business & linking to your site (peernetics.io) from one of ours — and in return, you link back to us from any page on your site\r\n\r\n.\r\n\r\nLet me know if you’re keen!\r\n\r\n\r\n\r\nBest,\r\n\r\nChoy', '2025-05-28 03:40:54', '2025-05-28 03:40:54'),
(232, 'complaint', 'Gianna Zimmerman', 'janina.ayers20@gmail.com', 'ScottDclary Newsletter', 'United States', '6838668396', 'https://google.com', 'Great Minds Think Differently (Free Newsletter)\r\n\r\n-> newsletter.scottdclary.com\r\n\r\nEach week, Scott\'s Newsletter breaks down the ideas, strategies, mental models and frameworks that separates the exceptional from the average.\r\n\r\nJoin 320,000+ entrepreneurs and innovators who use these insights to spot hidden opportunities and make smarter moves.\r\n\r\nIf you want to level up in your career. If you want to level up in your business. This is a free newsletter that will transform how you think, decide, and compete in today\'s complex world.\r\n\r\nSubscribe now. \r\n\r\nYour future self will thank you.\r\n\r\n-> newsletter.scottdclary.com', '2025-05-29 04:48:48', '2025-05-29 04:48:48'),
(233, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'BY', 'Taiwan', '555-555-1212', NULL, 'Hello to the Peernetics Owner,\r\n\r\nMy name’s Eric, and I recently came across your site, Peernetics, while browsing online. Your site showed up near the top of the search results, so whatever you’re doing for visibility seems effective.\r\n\r\nIf I may ask: after someone like me finds Peernetics, what typically happens?\r\n\r\nIs your site generating valuable inquiries for your business?\r\n\r\nMany visitors view a website and then leave without taking the next step. Research suggests that a majority of visitors exit quickly, leaving no contact information.\r\n\r\nConsider this idea: What if there was a straightforward way for each visitor to indicate they’d like a call from you right when they arrive?\r\n\r\nYou can make this happen.\r\n\r\nWeb Visitor is a tool that works on your site, ready to securely gather a visitor’s name, email, and phone number. It alerts you immediately, so you can speak with that person while they are still viewing your site.\r\n\r\nPlease visit:  \r\nhttps://trustedleadgeneration.com  \r\nto see a live demonstration of Web Visitor and observe precisely how it works.\r\n\r\nActing promptly matters when it comes to building connections. The difference between engaging with someone within a few minutes, versus waiting longer, can be substantial.\r\n\r\nOur new SMS Text With Lead feature allows you to begin a text conversation as soon as you have their number. Even if they aren’t ready right now, you can keep in touch with updates, offers, and helpful information.\r\n\r\nPlease visit the link above to learn what Web Visitor can do for your business. You might be surprised at how much more interest you can capture.\r\n\r\nEric\r\n\r\nP.S. Web Visitor offers a 14-day evaluation period and includes the ability to reach out internationally. Interested individuals may be ready to speak with you now, so please don’t miss out.  \r\nhttps://trustedleadgeneration.com\r\n\r\nWant to receive less emails, or none whatsoever? Update your email preferences by clicking here. https://trustedleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-05-29 17:48:11', '2025-05-29 17:48:11'),
(234, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'NA', 'Yemen', '555-555-1212', NULL, 'Hello Peernetics Owner,\r\n\r\nThis is Eric and for just a second, imagine this:\r\n\r\n- Someone does a search and ends up at Peernetics.\r\n- They hang out for a moment to check it out. I’m interested… but… maybe…\r\n- And then they click the back button and check out the other search results instead.\r\n- Bottom line – you got an eyeball, but nothing else.\r\n- They’re gone.\r\n\r\nThis isn’t really your fault – it happens a lot – studies show 7 out of 10 visitors to any site leave without leaving a trace.\r\n\r\nBut you can fix that.\r\n\r\nWeb Visitors Into Leads is a software that operates on your site, ready to capture any visitor’s Name, Email address, and Phone Number. You will know instantly they’re interested and you can call them directly to chat with them - literally while they’re still on the internet looking at your site.\r\n\r\nPlease see this URL to test a Live Demo with Web Visitors Into Leads now to see exactly how it works and even give it a try… it could be huge for your business: https://trustedleadgeneration.com\r\n\r\nTime is of the essence when it comes to connecting with leads – the difference between contacting someone within 5 minutes compared to 30 minutes later can be significant.\r\n\r\nMoreover, now that you’ve got that phone number, with our new SMS Text With Lead feature, you can instantly start a text (SMS) conversation immediately… which is so effective, because connecting with someone within the first 5 minutes is 100 times more efficient than waiting 30 minutes or more later.\r\n\r\nThe new text messaging feature lets you follow up frequently with new offers, content links, even just follow-up notes to develop a relationship.\r\n\r\nEverything I’ve just described is very easy to implement, cost-effective, and beneficial.\r\n\r\nPlease see this URL to discover what Web Visitors Into Leads can do for your business, possibly converting up to 100X more visitors into leads today: https://trustedleadgeneration.com\r\n\r\nEric\r\n\r\nPS: Web Visitors Into Leads offers a free 14-day trial – and it even includes International Long Distance Calling.\r\nYou have clients waiting to speak with you right now… don’t keep them waiting.\r\nPlease see this URL to try Web Visitors Into Leads now: https://trustedleadgeneration.com\r\n\r\nIf you\'d like to Want to receive less emails, or none whatsoever? Update your email preferences by clicking here. https://trustedleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-05-30 05:42:38', '2025-05-30 05:42:38'),
(235, 'complaint', 'Gerard Dominique', 'gerard.dominique@googlemail.com', 'Gerard Dominique', 'Eritrea', '6817631993', NULL, 'Access ChatGPT, Claude, Gemini Pro , Kling AI, LLaMA, Mistral, DALL.E, LLaMa & more—all from a single dashboard.\r\n\r\nNo subscriptions or no monthly fees—pay once and enjoy lifetime access.\r\n\r\nAutomatically switch between AI models based on task requirements.\r\n\r\nAnd much more ... hamsterkombat.expert/AIIntelliKit', '2025-05-30 07:47:55', '2025-05-30 07:47:55'),
(236, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'QLD', 'St. Vincent & Grenadines', '555-555-1212', NULL, 'Hello Peernetics,\r\n\r\nI\'m Eric and I recently discovered your website - Peernetics - in the search results.\r\n\r\nThis is what that means to me…\r\n\r\nYour SEO’s working.\r\n\r\nYou’re receiving eyeballs – at least mine.\r\n\r\nYour content’s pretty good, would not change a thing.\r\n\r\nBUT…\r\n\r\nEyeballs do not pay the bills.\r\n\r\nCUSTOMERS do pay the bills.\r\n\r\nAnd studies show that 7 out of 10 visitors like Peernetics will drop by, have a look, and then leave without doing anything else.\r\n\r\nIt’s like they never even were there.\r\n\r\nYou can fix this.\r\n\r\nYou can make it extremely easy for them to show interest, say, okay, let’s talk without needing them to even pull their phone from their pocket… thanks to Web Visitors Into Leads.\r\n\r\nWeb Visitors Into Leads is a software widget that sits on your website, ready and waiting to capture any visitor’s Name, Email address, and Phone Number. It allows you know immediately – so you can speak with that lead immediately… before they leave.\r\n\r\nPlease visit the following URL to experience a Live Demo with Web Visitors Into Leads now to see precisely how it works and even give it a try… it could be huge for your business: https://trustedleadgeneration.com\r\n\r\nTime is of the essence when it comes to connecting with leads – the difference between contacting someone within 5 minutes compared to 30 minutes implies you can be converting up to 100X more leads now!\r\n\r\nMoreover, now that you’ve got their phone number, with our new SMS Text With Lead feature, you can instantly start a text (SMS) conversation immediately… which is so effective, because connecting with someone within the first 5 minutes is 100 times more efficient than waiting 30 minutes or more later.\r\n\r\nThe new text messaging feature lets you follow up frequently with new offers, content links, even just follow-up notes to develop a relationship.\r\n\r\nEverything I’ve just described is very easy to implement, cost-effective, and beneficial.\r\n\r\nPlease visit the following URL to discover what Web Visitors Into Leads can do for your business, possibly converting up to 100X more visitors into leads today: https://trustedleadgeneration.com\r\n\r\nEric\r\n\r\nPS: Web Visitors Into Leads offers a free 14 days trial!\r\nIt even includes International Long Distance Calling.\r\nPaying customers are waiting.\r\nStart connecting today by visiting https://trustedleadgeneration.com to try Web Visitors Into Leads now.\r\n\r\nIf you\'d like to Want to receive less emails, or none whatsoever? Update your email preferences by clicking here.  \r\nhttps://trustedleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-05-30 09:22:00', '2025-05-30 09:22:00'),
(237, 'complaint', 'Choy K.', 'km.health@outlook.com', 'Lanora Woore', 'Mayotte', '675755103', NULL, 'Hi,\r\n\r\n\r\nI hope you\'re doing well!\r\n\r\n\r\n\r\nI’m reaching out to see if you’d be open to a link exchange with us. I’d be happy to write a feature article about your business and include a backlink to your site (peernetics.io) from one of our company websites. In return, we kindly ask that you link back to us from any page of your site on peernetics.io.\r\n\r\n\r\n\r\nLet me know if this sounds like something you’d be interested in — I’d love to explore the possibility with you.\r\n\r\n\r\n\r\nLooking forward to your reply\r\n\r\n!\r\n\r\nWarm regards,\r\n\r\nChoy', '2025-05-30 10:37:34', '2025-05-30 10:37:34'),
(238, 'complaint', 'Stephen', 'info@oles.caredogbest.com', 'Stephen Oles', 'Montenegro', '7705636681', 'https://www.bbc.com', 'Good day \r\n\r\nI wanted to reach out and let you know about our new dog harness. It\'s really easy to put on and take off - in just 2 seconds - and it\'s personalized for each dog. \r\nPlus, we offer a lifetime warranty so you can be sure your pet is always safe and stylish.\r\n\r\nWe\'ve had a lot of success with it so far and I think your dog would love it. \r\n\r\nGet yours today with 50% OFF: https://caredogbest.com\r\n\r\nFREE Shipping - TODAY ONLY! \r\n\r\nBest Wishes, \r\n\r\nStephen', '2025-05-31 03:45:30', '2025-05-31 03:45:30'),
(239, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'NSW', 'Moldova', '555-555-1212', NULL, 'Hello Peernetics Owner,\r\n\r\nMy name is Eric and I’m betting you’d like your website Peernetics to generate more leads.\r\n\r\nHere’s how:\r\n\r\nWeb Visitors Into Leads is a software widget that works on your site, ready to capture any visitor’s Name, Email address, and Phone Number. It signals you as soon as they say they’re interested – so that you can talk to that lead while they’re still there at Peernetics.\r\n\r\nVisit https://actionleadgeneration.com to try out a Live Demo with Web Visitors Into Leads now to see exactly how it works and even give it a try… it could be huge for your business.\r\n\r\nPlus, now that you’ve got their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation quickly… which is so powerful because connecting with someone within the first 5 minutes is 100 times more effective than waiting 30 minutes or more later.\r\n\r\nThe new text messaging feature lets you follow up regularly with new offers, content links, even just how are you doing? notes to build a relationship.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable.\r\n\r\nVisit https://actionleadgeneration.com to discover what Web Visitors Into Leads can do for your business, potentially converting up to 100 times more eyeballs into leads today!\r\n\r\nEric\r\n\r\nPS: Studies show that 70% of a site’s visitors disappear and are gone forever after just a moment. Don’t keep losing them.\r\nWeb Visitors Into Leads offers a complimentary 14-day trial – and it even includes International Long Distance Calling.\r\nYou have customers waiting to talk with you right now… don’t keep them waiting.\r\nVisit https://actionleadgeneration.com to try Web Visitors Into Leads now.\r\n\r\nIf you\'d like to Want to receive fewer emails, or none whatsoever? Update your email preferences by visiting https://actionleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-05-31 08:08:56', '2025-05-31 08:08:56'),
(240, 'complaint', 'Karen B.', 'outreachseo56@gmail.com', 'Outreach SEO', 'Diego Garcia', '2626299448', NULL, 'Hi,\r\n\r\nI wanted to see if you\'d be interested in a link exchange for mutual SEO benefits. I can link to your site (peernetics.io) from a few of our high-authority websites. In return, you would link back to our clients’ sites, which cover niches like health, business services, real estate, consumer electronics, and more.\r\n\r\nIf you\'re interested, let me know — I\'d be happy to share more details!\r\n\r\nThanks for your time,\r\nKaren\r\nSEO Account Manager', '2025-06-01 01:56:55', '2025-06-01 01:56:55'),
(241, 'enquiry', 'ConnieTex', 'nomin.momin+398i1@mail.ru', 'google', 'French Polynesia', '84698253748', NULL, 'Gwhduwdjiwhduwh uhiwdjiwjdeufhu jikodwfiewfiwjdjw jidwjosqdijwifi jiwdowidqoiowufeugewi uiwjdiwurfuwyruewiai fwhuwhwhfuwhduwijdw peernetics.io', '2025-06-01 04:56:59', '2025-06-01 04:56:59'),
(242, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'WLG', 'Serbia', '555-555-1212', NULL, 'Hello to the Peernetics Owner,\r\n\r\nI am Eric, and for a moment, consider this scenario:\r\n\r\n- Someone searches online and arrives at Peernetics.  \r\n- They spend a short time reviewing your site. They might be curious, but not fully decided.  \r\n- Then, they leave and look at other options.  \r\n- In the end, you received a visitor, but no meaningful connection.\r\n\r\nThis situation occurs often. It’s very common for most site visitors to leave without taking further action.\r\n\r\nYou can address this:\r\n\r\nWeb Visitors Into Leads is a resource that operates on your site, ready to gather each visitor’s name, email address, and phone number. It will alert you right when they show interest, allowing you to connect with them while they are still exploring your site.\r\n\r\nView a Demonstration https://actionleadgeneration.com\r\n\r\nPrompt contact makes a difference. Engaging with someone shortly after they visit is far more effective than waiting until much later.\r\n\r\nMoreover, once you have their phone number, you can begin a text-based conversation. If they are not ready to move forward at that exact moment, you can maintain contact by sharing helpful information later on.\r\n\r\nEverything described is straightforward and practical.\r\n\r\nPlease visit the link above to see how Web Visitors Into Leads can benefit your business. You may find yourself connecting with significantly more interested individuals soon.\r\n\r\nEric\r\n\r\nP.S. Web Visitors Into Leads provides a no-cost evaluation period. It also supports various communication methods. There may be potential clients interested in speaking with you right now, so don’t let them slip away.  \r\nPlease visit https://actionleadgeneration.com to learn more about Web Visitors Into Leads.\r\n\r\nIf you\'d like to Want to receive fewer emails, or none whatsoever? Update your email preferences by visiting https://actionleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-06-01 10:27:14', '2025-06-01 10:27:14'),
(243, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'NA', 'Senegal', '555-555-1212', NULL, 'Hello Peernetics \r\n\r\nI just found your site, quick question…\r\n\r\nMy name’s Eric, and I recently discovered your site - Peernetics - while surfing the net. You showed up at the top of the search results, so I checked you out. Looks like what you’re doing is pretty cool.\r\n\r\nBut if you don’t mind me asking – after someone like me stumbles across Peernetics, what usually happens?\r\n\r\nIs your site generating leads for your business?\r\n\r\nI’m guessing some, but I also bet you’d like more… research indicates that 7 out of 10 who land on a site wind up leaving without a trace.\r\n\r\nNot good.\r\n\r\nHere’s an idea…\r\n\r\nHow about making it really easy for every visitor who shows up to get a personal phone call from you as soon as they hit your site…\r\n\r\nYou can –\r\n\r\nLeadConnect is a software widget that works on your site, ready to capture any visitor’s Name, Email address, and Phone Number. It notifies you immediately – so that you can talk to that lead while they’re literally looking over your site.\r\n\r\nhttps://blastleadgeneration.com to try out a Live Demo with Web Visitors Into Leads now to see exactly how it works.\r\n\r\nYou’ll be amazed - the difference between contacting someone within 5 minutes versus 30 minutes later could boost your results 100-fold.\r\n\r\nIt gets even better… once you’ve captured their phone number, with our new SMS Text With Lead feature, you can instantly start a text (SMS) conversation.\r\n\r\nThat way, even if you don’t close a deal right away, you can follow up with text messages for new offers, content links, even just how you are doing? notes to build a relationship.\r\n\r\nPretty sweet – AND effective.\r\n\r\nhttps://blastleadgeneration.com to discover what Web Visitors Into Leads can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\nEric\r\n\r\nPS: Web Visitors Into Leads offers a complimentary 14-day trial – you could be converting up to 100x more leads immediately!  \r\nIt even includes International Long Distance Calling.  \r\nYou have customers waiting to talk with you right now… don’t keep them waiting.  \r\nhttps://blastleadgeneration.com to try Web Visitors Into Leads now.\r\n\r\nIf you\'d like to Want to receive less emails, or none whatsoever? Update your email preferences by visiting https://blastleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-06-01 12:12:09', '2025-06-01 12:12:09'),
(244, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'NB', 'Belize', '555-555-1212', NULL, 'Hello to the Peernetics Owner,\r\n\r\nI am Eric, and unlike many emails you may receive, I would like to share a note of positive feedback – well done!\r\n\r\nWhat for?\r\n\r\nPart of my role is to examine websites, and the work you have done with Peernetics certainly stands out.\r\n\r\nIt is clear you have taken building a website seriously and invested real effort into developing something of quality.\r\n\r\nHowever, there is a question…\r\n\r\nWhen someone like me finds your site – maybe at the top of the search results (good job, by the way) or through a link, how can you tell?\r\n\r\nMore importantly, how can you connect with that visitor?\r\n\r\nResearch indicates that many visitors leave quickly.\r\n\r\nHere is a way to create immediate engagement that might be new to you:\r\n\r\nWeb Visitors Into Leads is a tool that operates on your site, ready to gather each visitor’s name, email address, and phone number. It alerts you promptly when they are interested – so you can speak with them while they are viewing Peernetics.\r\n\r\nPlease visit https://actionleadgeneration.com to view a live demonstration of Web Visitors Into Leads today and see exactly how it operates.\r\n\r\nIt can be very helpful for your business – and it gets even better… after you have their phone number, with our text messaging feature, you can begin a conversation promptly (there’s a significant difference between connecting within a few minutes compared to waiting much longer).\r\n\r\nAdditionally, even if you do not reach a mutual understanding at once, you can maintain contact later with text messages for additional resources, content links, or follow-ups to build a rapport.\r\n\r\nEverything described is straightforward, convenient, and effective.\r\n\r\nVisit https://actionleadgeneration.com to learn what Web Visitors Into Leads can provide for your business.\r\n\r\nYou could be engaging with significantly more potential contacts soon!\r\n\r\nEric\r\n\r\nP.S. Web Visitors Into Leads includes a 14-day evaluation period and supports international communication. There are individuals ready to speak with you now, so please do not keep them waiting.\r\n\r\nVisit https://actionleadgeneration.com to explore Web Visitors Into Leads today.\r\n\r\nIf you\'d like to Want to receive fewer emails, or none whatsoever? Update your email preferences by visiting https://actionleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-06-01 14:12:31', '2025-06-01 14:12:31'),
(245, 'complaint', 'Joanna Riggs', 'joannariggs83@gmail.com', 'Joanna Riggs', 'Cuba', '515424854', NULL, 'Hi,\r\n\r\nI just visited peernetics.io and wondered if you\'d ever thought about having an engaging video to explain what you do?\r\n\r\nA couple of samples to check out for a Service and a Product:\r\n\r\nhttps://www.youtube.com/watch?v=uMI9l_FHwA8\r\n\r\nhttps://www.youtube.com/watch?v=67neUK1vylc\r\n\r\nOur videos cost just $195 (USD) for a 30 second video ($239 for 60 seconds) and include a full script, voice-over and video.\r\n\r\nLet me know if you\'re interested in seeing more samples of our previous work or have any questions.\r\n\r\nRegards,\r\nJoanna', '2025-06-01 17:32:17', '2025-06-01 17:32:17'),
(246, 'complaint', 'Cindy Wetter', 'wetter.cindy@gmail.com', 'Cindy Wetter', 'French Polynesia', '5079451558', NULL, 'Hi there, I apologize for using your contact form, \r\nbut I wasn\'t sure who the right person was to speak with in your company. \r\nWe have a patented application that creates Local Area pages that rank on \r\ntop of Google within weeks, we call it Local Magic.  Here is a link to the \r\nproduct page https://www.mrmarketingres.com/local-magic/ . The product \r\nleverages technology where these pages are managed dynamically by AI and \r\nit is ideal for promoting any type of business that gets customers from Google.  Can I share a testimonial \r\nfrom one of our clients in the same industry?  I\'d prefer to do a short zoom to \r\nillustrate their full case study if you have time for it? \r\nYou can reach me at marketing@mrmarketingres.com or 843-720-7301. And if this isn\'t a fit please feel free to email me and I\'ll be sure not to reach out again.  Thanks!', '2025-06-02 11:12:23', '2025-06-02 11:12:23'),
(247, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'BURGENLAND', 'British Indian Ocean Territory', '555-555-1212', NULL, 'Hello Peernetics Owner!\r\n\r\nMy name’s Eric and I just came across your website at Peernetics...\r\n\r\nI found it after a quick search, so your SEO’s working out…\r\n\r\nContent looks pretty good…\r\n\r\nOne thing’s missing though…\r\n\r\nA QUICK, EASY way to connect with you NOW.\r\n\r\nBecause studies show that a web lead like me will only hang out a few seconds – 7 out of 10 disappear almost instantly, Surf Surf Surf… then gone forever.\r\n\r\nI have the solution:\r\n\r\nWeb Visitors Into Leads is a software widget that works on your site, ready to capture any visitor’s Name, Email address, and Phone Number. You’ll know immediately they’re interested and you can call them directly to TALK with them - literally while they’re still on the web looking at your site.\r\n\r\nhttps://resultleadgeneration.com to try out a Live Demo with Web Visitors Into Leads now to see exactly how it works and even give it a try… it could be huge for your business.\r\n\r\nWhen targeting leads, you HAVE to act fast – the difference between contacting someone within 5 minutes versus 30 minutes later can be huge – like 100 times better!\r\n\r\nThat’s why you should check out our new SMS Text With Lead feature as well… once you’ve captured the phone number of the website visitor, you can automatically kick off a text (SMS) conversation with them.\r\n\r\nImagine how powerful this could be – even if they don’t take you up on your offer immediately, you can stay in touch with them using text messages to make new offers, provide links to great content, and build your credibility.\r\n\r\nJust this alone could be a game changer to make your website even more effective.\r\n\r\nStrike when the iron’s hot!\r\n\r\nhttps://resultleadgeneration.com to discover what Web Visitors Into Leads can do for your business, potentially converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\n\r\nPS: Web Visitors Into Leads offers a complimentary 14-day trial – you could be converting up to 100x more leads immediately!  \r\nIt even includes International Long Distance Calling.  \r\nYou have customers waiting to talk with you right now… don’t keep them waiting.  \r\nhttps://resultleadgeneration.com to try Web Visitors Into Leads now.\r\n\r\nIf you\'d like to Want to receive fewer emails, or none whatsoever? Update your email preferences by visiting https://resultleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-06-02 13:28:01', '2025-06-02 13:28:01'),
(248, 'complaint', 'Johnette', 'info@lamarche.bangeshop.com', 'Johnette Lamarche', 'Anguilla', '414651672', 'https://www.cnn.com', 'Hi, \r\n\r\nI hope this email finds you well. I wanted to let you know about our new BANGE backpacks and sling bags that just released.\r\n\r\nThe bags are waterproof and anti-theft, and have a built-in USB cable that can recharge your phone while you\'re on the go.\r\n\r\nBoth bags are made of durable and high-quality materials, and are perfect for everyday use or travel.\r\n\r\nOrder yours now at 50% OFF with FREE Shipping: http://bangeshop.com\r\n\r\nThank You,\r\n\r\nJohnette', '2025-06-05 13:55:17', '2025-06-05 13:55:17'),
(249, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'BURGENLAND', 'Guatemala', '555-555-1212', NULL, 'Hello Peernetics,\r\n\r\nMy name is Eric and I’m assuming you would like your site Peernetics to generate more leads.\r\n\r\nHere is how:\r\n\r\nWeb Visitors Into Leads is a tool that operates on your site, prepared to capture any visitor’s Name, Email address, and Phone Number. It notifies you immediately when they declare they’re engaged – so that you can speak with that prospect while they’re still present at Peernetics.\r\n\r\nWeb Visitors Into Leads – see the live demo now:  \r\nhttps://trustedleadgeneration.com\r\n\r\nAnd now that you’ve got their phone number, our new SMS Text With Lead feature allows you to start a text (SMS) conversation – respond to questions, offer more info, and finalize a deal that way.\r\n\r\nIf they do not agree on your offer then, simply follow up with text messages for new deals, content links, or just how you are doing? notes to develop a relationship.\r\n\r\nPlease see this URL to discover what Web Visitors Into Leads can do for your business:  \r\nhttps://trustedleadgeneration.com\r\n\r\nThe difference between contacting someone within 5 minutes compared to a half-hour implies you can be converting up to 100X more leads now!\r\n\r\nTry Web Visitors Into Leads and obtain more leads now.\r\n\r\nEric\r\n\r\nPS: The studies show 7 out of 10 visitors do not stick around – you cannot afford to miss them!  \r\nWeb Visitors Into Leads offers a complimentary 14-day trial – and it also includes International Long Distance Calling.  \r\nYou have clients waiting to speak with you immediately… do not keep them waiting.  \r\nPlease see this URL to try Web Visitors Into Leads now:  \r\nhttps://trustedleadgeneration.com\r\n\r\nIf you\'d like to Want to receive less emails, or none whatsoever? Update your email preferences by clicking here.  \r\nhttps://trustedleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-06-05 18:04:53', '2025-06-05 18:04:53'),
(250, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'FR', 'Marshall Islands', '555-555-1212', NULL, 'Hello, Eric here with a quick thought about your website Peernetics \r\n\r\nCool website!\r\n\r\nMy name’s Eric, and I just found your site - Peernetics - while surfing the net. You showed up at the top of the search results, so I checked you out. Looks like what you’re doing is pretty cool.\r\n \r\nBut if you don’t mind me asking – after someone like me stumbles across Peernetics, what usually happens?\r\n\r\nIs your site generating leads for your business? \r\n \r\nI’m guessing some, but I also bet you’d like more… studies show that 7 out of 10 who land on a site wind up leaving without a trace.\r\n\r\nNot good.\r\n\r\nHere’s a thought…\r\n\r\nHow about making it really EASY for every visitor who shows up to get a personal phone call from you as soon as they hit your site…\r\n\r\nYou can –\r\n  \r\nWeb Visitor is a software widget that works on your site, ready to capture any visitor’s Name, Email address, and Phone Number. It lets you know IMMEDIATELY – so that you can talk to that lead while they’re literally looking over your site.\r\n\r\nhttps://resultleadgeneration.com to try out a Live Demo with Web Visitor now to see exactly how it works.\r\n\r\nYou’ll be amazed—the difference between contacting someone within 5 minutes versus a half-hour or more later could increase your results 100-fold.\r\n\r\nIt gets even better… once you’ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately… and contacting someone in that 5-minute window is 100 times more powerful than reaching out 30 minutes or more later.\r\n\r\nPlus, with text messaging you can follow up later with new offers, content links, even just follow-up notes to keep the conversation going.\r\n\r\nEverything I’ve just described is simple, easy, and effective. \r\n     \r\nhttps://resultleadgeneration.com to discover what Web Visitor can do for your business, potentially converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\n\r\nPS: Web Visitor offers a complimentary 14-day trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nhttps://resultleadgeneration.com to try Web Visitor now.\r\n\r\nIf you\'d like to Want to receive fewer emails, or none whatsoever? Update your email preferences by visiting https://resultleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-06-06 13:40:55', '2025-06-06 13:40:55'),
(251, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'NA', 'Israel', '555-555-1212', NULL, 'Hi Peernetics Owner,\r\n\r\nMy name is Eric and I’m betting you’d like your website Peernetics to generate more leads.\r\n\r\nHere’s how:\r\n\r\nLeadConnect is a software widget that works on your site, ready to capture any visitor’s Name, Email address, and Phone Number. It signals you as soon as they say they’re interested – so that you can talk to that lead while they’re still there at Peernetics.\r\n\r\nhttps://resultleadgeneration.com for a live demo now.\r\n\r\nPlus, now that you’ve got their phone number, our new SMS Text With Lead feature enables you to start a text (SMS) conversation – answer questions, provide more info, and close a deal that way.\r\n\r\nIf they don’t take you up on your offer then, just follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nhttps://resultleadgeneration.com to discover what LeadConnect can do for your business.\r\n\r\nThe difference between contacting someone within 5 minutes versus a half-hour means you could be converting up to 100X more leads today!\r\n\r\nTry LeadConnect and get more leads now.\r\n\r\nEric\r\n\r\nPS: The studies show 7 out of 10 visitors don’t hang around – you can’t afford to lose them!\r\nLeadConnect offers a complimentary 14-day trial – and it even includes International Long Distance Calling.  \r\nYou have customers waiting to talk with you right now… don’t keep them waiting.  \r\nhttps://resultleadgeneration.com to try LeadConnect now.\r\n\r\nIf you\'d like to Want to receive fewer emails, or none whatsoever? Update your email preferences by visiting https://resultleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-06-06 18:32:28', '2025-06-06 18:32:28'),
(252, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'RHONE-ALPES', 'Mayotte', '555-555-1212', NULL, 'Hello Peernetics\r\n\r\nI just found your site, quick question…\r\n\r\nMy name’s Eric, I found Peernetics after doing a quick search – you showed up near the top of the rankings, so whatever you’re doing for SEO, looks like it’s working well.\r\n\r\nSo here’s my question – what happens AFTER someone lands on your site? Anything?\r\n\r\nResearch tells us at least 70% of the people who find your site, after a quick once-over, they disappear… forever.\r\n\r\nThat means that all the work and effort you put into getting them to show up, goes down the tubes.\r\n\r\nWhy would you want all that good work – and the great site you’ve built – go to waste?\r\n\r\nBecause the odds are they’ll just skip over calling or even grabbing their phone, leaving you high and dry.\r\n\r\nBut here’s a thought… what if you could make it super-simple for someone to raise their hand, say, okay, let’s talk without requiring them to even pull their cell phone from their pocket?\r\n\r\nYou can – thanks to revolutionary new software that can literally make that first call happen NOW.\r\n\r\nWeb Visitors Into Leads is a software widget that sits on your site, ready and waiting to capture any visitor’s Name, Email address, and Phone Number. It lets you know IMMEDIATELY – so that you can talk to that lead while they’re still there at your site.\r\n\r\nYou know, strike when the iron’s hot!\r\n\r\nPlease see this URL to try out a Live Demo with Web Visitors Into Leads now to see precisely how it works and even give it a try… it could be huge for your business: https://blastleadgeneration.com\r\n\r\nWhen targeting leads, you HAVE to act fast – the difference between contacting someone within 5 minutes versus 30 minutes later is huge – like 100 times better!\r\n\r\nThat’s why you should check out our new SMS Text With Lead feature as well… once you’ve captured the phone number of the website visitor, you can automatically kick off a text (SMS) conversation with them.\r\n\r\nImagine how powerful this could be – even if they don’t take you up on your offer immediately, you can stay in touch with them using text messages to make new offers, provide links to great content, and build your credibility.\r\n\r\nJust this alone could be a game changer to make your website even more effective.\r\n\r\nStrike when the iron’s hot!\r\n\r\nPlease see this URL to discover what Web Visitors Into Leads can do for your business – you’ll be amazed: https://blastleadgeneration.com\r\n\r\nThanks and keep up the great work!\r\n\r\nEric\r\n\r\nPS: Web Visitors Into Leads offers a free 14 days trial!\r\nIt even includes International Long Distance Calling.\r\nStop wasting money chasing eyeballs that don’t turn into paying customers.\r\nPlease see this URL to try Web Visitors Into Leads now: https://blastleadgeneration.com\r\n\r\nIf you\'d like to Want to receive less emails, or none whatsoever? Update your email preferences by clicking here.  \r\nhttps://blastleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-06-06 21:53:29', '2025-06-06 21:53:29'),
(253, 'complaint', 'Elana Frazier', 'qs90zw@963era.com', 'Elana Frazier', 'Belize', '96924164', NULL, 'Saw your site and figured I’d reach out — we’re giving away free web traffic, no tricks or hoops. Just a simple form and you’re good to go.\r\nwww.freewebsitetrafficforever.top', '2025-06-06 22:07:27', '2025-06-06 22:07:27'),
(254, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'RP', 'Algeria', '555-555-1212', NULL, 'Hello Peernetics,\r\n\r\nMy name is Eric and I’m assuming you would like your site Peernetics to generate more leads.\r\n\r\nHere is how:\r\n\r\nWeb Visitors Into Leads is a tool that operates on your site, prepared to capture any visitor’s Name, Email address, and Phone Number. It notifies you immediately when they declare they’re engaged – so that you can speak with that prospect while they’re still present at Peernetics.\r\n\r\nWeb Visitors Into Leads – see the live demo now:  \r\nhttps://trustedleadgeneration.com\r\n\r\nAnd now that you’ve got their phone number, our new SMS Text With Lead feature allows you to start a text (SMS) conversation – respond to questions, offer more info, and finalize a deal that way.\r\n\r\nIf they do not agree on your offer then, simply follow up with text messages for new deals, content links, or just how you are doing? notes to develop a relationship.\r\n\r\nPlease see this URL to discover what Web Visitors Into Leads can do for your business:  \r\nhttps://trustedleadgeneration.com\r\n\r\nThe difference between contacting someone within 5 minutes compared to a half-hour implies you can be converting up to 100X more leads now!\r\n\r\nTry Web Visitors Into Leads and obtain more leads now.\r\n\r\nEric\r\n\r\nPS: The studies show 7 out of 10 visitors do not stick around – you cannot afford to miss them!  \r\nWeb Visitors Into Leads offers a complimentary 14-day trial – and it also includes International Long Distance Calling.  \r\nYou have clients waiting to speak with you immediately… do not keep them waiting.  \r\nPlease see this URL to try Web Visitors Into Leads now:  \r\nhttps://trustedleadgeneration.com\r\n\r\nIf you\'d like to Want to receive less emails, or none whatsoever? Update your email preferences by clicking here.  \r\nhttps://trustedleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-06-07 02:25:40', '2025-06-07 02:25:40'),
(255, 'support', 'Madison Andersen', 'mandersen501@outlook.com', 'Summit Consulting LLC', 'Afghanistan', '348-504-9576', 'http://summitconsultingllc.com', 'Just a quick heads-up-- \"about\" might be misspelled. I\'ve found spellace.com useful for checking these quickly.\r\n\r\nRegards,\r\nMadison Andersen', '2025-06-07 07:28:23', '2025-06-07 07:28:23'),
(256, 'complaint', 'Bradley Glauert', 'vutgrq@qmjsha.com', 'Bradley Glauert', 'Isle of Man', '168893829', NULL, 'Want more people to visit your website? We\'re offering free web traffic to anyone who submits their site — no strings attached. Real visitors, no bots, and no hidden costs.\r\nwww.freewebsitetrafficforever.top', '2025-06-07 07:58:31', '2025-06-07 07:58:31'),
(257, 'complaint', 'Mia Byrd', 'tegan.cote@gmail.com', 'NATIVE PASSSHP', 'United States', '08781446424', NULL, 'Cool-weather kids\' fashion, sorted\r\n\r\nLooking for new jackets or stylish hoodies for the young ones? Native Passion has a variety they’ll love that’s perfect for cooler days.\r\n\r\n++ Shop Kids\' Jackets: https://nativepassion.shop/jackets-kids-clothing/\r\n-- Shop Kids\' Hoodies: https://nativepassion.shop/hoodies-kids-clothing/\r\n\r\nStart them on the right style track today.\r\n\r\n\r\n\r\nIf at any point you no longer want to receive further communications from this message, simply fill the form at bit. ly/fillunsubform with your domain address (URL).\r\n80 Ross Road, Chittenango, CA, USA, 90252', '2025-06-07 18:50:38', '2025-06-07 18:50:38');
INSERT INTO `contacts` (`id`, `type`, `name`, `email`, `company`, `country`, `phone`, `website`, `message`, `created_at`, `updated_at`) VALUES
(258, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'NA', NULL, '555-555-1212', NULL, 'Hello Peernetics \r\n\r\nI just found your site, quick question…\r\n\r\nMy name’s Eric, and I just found your site - Peernetics - while surfing the net. You showed up at the top of the search results, so I checked you out. Looks like what you’re doing is pretty cool.\r\n\r\nBut if you don’t mind me asking – after someone like me stumbles across Peernetics, what usually happens?\r\n\r\nIs your site generating leads for your business?\r\n\r\nI’m guessing some, but I also bet you’d like more… research indicates that 7 out of 10 who land on a site wind up leaving without a trace.\r\n\r\nNot good.\r\n\r\nHere’s a thought – what if there was an easy way for every visitor to raise their hand to get a phone call from you INSTANTLY… the second they hit your site and said, call me now.\r\n\r\nYou can –\r\n\r\nWeb Visitors Into Leads is a software widget that works on your site, ready to capture any visitor’s Name, Email address, and Phone Number. It notifies you IMMEDIATELY – so that you can speak to that lead while they’re actively looking over your site.\r\n\r\nGoto https://blastleadgeneration.com to try out a Live Demo with Web Visitors Into Leads now to see precisely how it works.\r\n\r\nTime is money when it comes to connecting with leads – the difference between contacting someone within 5 minutes versus 30 minutes later is huge – like 100 times better!\r\n\r\nThat’s why we built out our new SMS Text With Lead feature… because once you’ve captured the visitor’s phone number, you can automatically start a text message (SMS) conversation.\r\n\r\nThink about the possibilities – even if you don’t close a deal then and there, you can follow up with text messages for new offers, content links, even just how you are doing? notes to build a relationship.\r\n\r\nWouldn’t that be cool?\r\n\r\nVisit https://blastleadgeneration.com to discover what Web Visitors Into Leads can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\nEric\r\n\r\nPS: Web Visitors Into Leads offers a FREE 14 days trial – you could be converting up to 100x more leads immediately!  \r\nIt even includes International Long Distance Calling.  \r\nStop wasting money chasing eyeballs that don’t turn into paying customers.  \r\nPlease see this URL to try Web Visitors Into Leads now: https://blastleadgeneration.com\r\n\r\nIf you\'d like to Want to receive less emails, or none whatsoever? Update your email preferences by clicking here.  \r\nhttps://blastleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-06-08 00:44:51', '2025-06-08 00:44:51'),
(259, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'Great Britain', 'Aruba', '555-555-1212', NULL, 'Hello Peernetics Owner!\r\n\r\nEric here with a quick thought about your website Peernetics...\r\n\r\nI’m on the internet a lot and I look at a lot of business websites.\r\n\r\nLike yours, many of them have great content.\r\n\r\nBut all too often, they come up short when it comes to engaging and connecting with anyone who visits.\r\n\r\nI get it – it’s hard. Studies show 7 out of 10 people who land on a site abandon it in moments without leaving even a trace. You got the eyeball, but nothing else.\r\n\r\nHere’s a solution for you…\r\n\r\nLeadConnect is a software widget that works on your site, ready to capture any visitor’s Name, Email address, and Phone Number. You’ll know immediately they’re interested, and you can call them directly to talk with them while they’re literally looking over your site.\r\n\r\nVisit https://blastleadgeneration.com to try out a Live Demo with LeadConnect now to see exactly how it works.\r\n\r\nIt could be huge for your business – and because you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation immediately… and contacting someone in that 5-minute window is 100 times more powerful than reaching out 30 minutes or more later.\r\n\r\nPlus, with text messaging, you can follow up later with new offers, content links, even just follow-up notes to keep the conversation going.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable.\r\n\r\nVisit https://blastleadgeneration.com to discover what LeadConnect can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\n\r\nPS: LeadConnect offers a complimentary 14-day trial – you could be converting up to 100x more leads immediately!  \r\nIt even includes International Long Distance Calling.  \r\nYou have customers waiting to talk with you right now… don’t keep them waiting.  \r\nVisit https://blastleadgeneration.com to try LeadConnect now.\r\n\r\nIf you\'d like to Want to receive fewer emails, or none whatsoever? Update your email preferences by visiting https://blastleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-06-09 00:29:40', '2025-06-09 00:29:40'),
(260, 'complaint', 'Kurt Partridge', 'partridge.kurt24@gmail.com', 'Kurt Partridge', 'Algeria', '3473653054', NULL, 'This Simple Tool \"Hacks\" ChatGPT, Gemini & Grok  \r\n\r\nSend peernetics.io Millions of AI search Clicks \r\n\r\n-- Optimizes your content so it gets picked up by top AI models  \r\n\r\n-- Get Featured in AI content highlights across Google  \r\n\r\n-- Drives natural, targeted traffic — no ads  \r\n\r\nAccess the deal now --> https://traffic-tsunami.com', '2025-06-09 14:47:14', '2025-06-09 14:47:14'),
(261, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'FL', 'Lebanon', '555-555-1212', NULL, 'Hello to the Peernetics Manager,\r\n\r\nI am Eric, and I recently discovered your website Peernetics in the search results.\r\n\r\nYour site is visible online and the content is solid.\r\n\r\nHowever, there’s one area that may help improve results:\r\n\r\nWhen visitors arrive at Peernetics, many may look around briefly, then leave without taking further action. Research suggests most visitors exit quickly, and you never learn who they were or how to reach them.\r\n\r\nYou can change that.\r\n\r\nConsider using Web Visitors Into Leads. This tool operates on your site and is ready to securely collect each visitor’s name, email, and phone number. It informs you right away when someone shows interest, so you can connect with them while they are still on your website.\r\n\r\nView a Demonstration https://actionleadgeneration.com\r\n\r\nPrompt and meaningful outreach can make a substantial difference. Additionally, once you have a visitor’s phone number, you can begin a friendly text conversation. Even if they aren’t ready at that moment, you can keep in touch over time with relevant updates and useful information.\r\n\r\nThis approach is easy to implement and can help you engage more effectively with interested individuals.\r\n\r\nVisit the link above to see what Web Visitors Into Leads can do for your business. By reaching out promptly, you may find that more visitors become engaged prospects.\r\n\r\nEric\r\n\r\nP.S. Web Visitors Into Leads includes an evaluation period and supports international communication. Interested individuals may be ready to speak with you now, so please don’t miss the opportunity.\r\n\r\nVisit the link https://actionleadgeneration.com to learn more.\r\n\r\nIf you\'d like to Want to receive fewer emails, or none whatsoever? Update your email preferences by visiting https://actionleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-06-09 17:53:01', '2025-06-09 17:53:01'),
(262, 'complaint', 'Lucas Gauthier', 'gauthier.lucas@msn.com', 'Lucas Gauthier', 'Austria', '669821908', NULL, 'Hello Peernetics,\r\n\r\nDid you know you could unlock additional cash flow by leveraging any existing unused monthly data?\r\n\r\nBoot up today for and securely transform that unused broadband connection into a new income stream with nothing to manage\r\n\r\n535,000+ clients depend on our excellence  >>  https://t.ly/business-data-earnings.guide', '2025-06-09 19:49:30', '2025-06-09 19:49:30'),
(263, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'PA', 'Spain', '555-555-1212', NULL, 'Hello Peernetics,\r\n\r\nMy name is Eric and I’m assuming you would like your site Peernetics to generate more leads.\r\n\r\nHere is how:\r\n\r\nWeb Visitors Into Leads is a tool that operates on your site, prepared to capture any visitor’s Name, Email address, and Phone Number. It notifies you immediately when they declare they’re engaged – so that you can speak with that prospect while they’re still present at Peernetics.\r\n\r\nWeb Visitors Into Leads – see the live demo now:  \r\nhttps://trustedleadgeneration.com\r\n\r\nAnd now that you’ve got their phone number, our new SMS Text With Lead feature allows you to start a text (SMS) conversation – respond to questions, offer more info, and finalize a deal that way.\r\n\r\nIf they do not agree on your offer then, simply follow up with text messages for new deals, content links, or just how you are doing? notes to develop a relationship.\r\n\r\nPlease see this URL to discover what Web Visitors Into Leads can do for your business:  \r\nhttps://trustedleadgeneration.com\r\n\r\nThe difference between contacting someone within 5 minutes compared to a half-hour implies you can be converting up to 100X more leads now!\r\n\r\nTry Web Visitors Into Leads and obtain more leads now.\r\n\r\nEric\r\n\r\nPS: The studies show 7 out of 10 visitors do not stick around – you cannot afford to miss them!  \r\nWeb Visitors Into Leads offers a complimentary 14-day trial – and it also includes International Long Distance Calling.  \r\nYou have clients waiting to speak with you immediately… do not keep them waiting.  \r\nPlease see this URL to try Web Visitors Into Leads now:  \r\nhttps://trustedleadgeneration.com\r\n\r\nIf you\'d like to Want to receive less emails, or none whatsoever? Update your email preferences by clicking here.  \r\nhttps://trustedleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-06-10 05:52:50', '2025-06-10 05:52:50'),
(264, 'complaint', 'Natisha Soria', 'natisha.soria@outlook.com', 'Natisha Soria', 'South Korea', '4402392', NULL, 'Hey there Peernetics,\r\n\r\nEver thought about how to add extra returns by putting to use any surplus internet you’re not using?\r\n\r\nImplement it now to and quietly turn that unused broadband connection into a new income stream with zero overhead\r\n\r\nUsed by more than 535,000 customers worldwide --  https://t.ly/cash-your-net.income', '2025-06-10 07:28:26', '2025-06-10 07:28:26'),
(265, 'complaint', 'Jerilyn Hagan', 'jerilyn.hagan@gmail.com', 'Jerilyn Hagan', 'North Korea', '8587754277', NULL, 'Hey there Peernetics,\r\n\r\nHave you explored an automated way to unlock recurring returns by using any spare internet connection?\r\n\r\nKick it into gear now and and quietly convert that unused broadband connection into recurring earnings with your business running as usual\r\n\r\n1.4 million+ customers stand behind us - https://t.ly/side-income-reseller.network', '2025-06-10 17:34:44', '2025-06-10 17:34:44'),
(266, 'complaint', 'Lashunda Burris', 'burris.lashunda2@gmail.com', 'Lashunda Burris', 'Timor-Leste', '385713504', NULL, 'Hello there Peernetics,\r\n\r\nHave you thought about how to generate additional cash flow by leveraging the surplus spare data service?\r\n\r\nPower it on to start and quietly transform that unused broadband connection into recurring earnings with no disruption\r\n\r\nWe proudly serve 385,000+ users globally >>  https://t.ly/smart-home-passive.solutions', '2025-06-11 11:03:21', '2025-06-11 11:03:21'),
(267, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'NA', 'Jordan', '555-555-1212', NULL, 'Hello to the Peernetics Owner,\r\n\r\nI am Eric and I recently came across your website at Peernetics. I found it after a search, so your visibility seems to be working well.\r\n\r\nYour content looks helpful.\r\n\r\nHowever, one thing might be missing:\r\n\r\nA simple, prompt way for visitors to connect with you.\r\n\r\nResearch suggests that many visitors leave a site quickly without providing any contact information. Once they go, there’s no way to follow up.\r\n\r\nConsider this approach:\r\n\r\nWeb Visitors Into Leads is a tool that operates on your site, ready to gather each visitor’s name, email address, and phone number. You will know as soon as someone shows interest, allowing you to speak with them while they’re still viewing your site.\r\n\r\nView a Demonstration https://actionleadgeneration.com\r\n\r\nOnce you have their phone number, you can also begin a text conversation. If they aren’t ready to engage at that exact moment, you can maintain communication later by sharing additional updates or simply checking in.\r\n\r\nEverything described is straightforward to implement and may help improve your interactions with potential contacts.\r\n\r\nPlease visit https://actionleadgeneration.com to learn more about what Web Visitors Into Leads can do for you. It could help you connect with more interested individuals right now.\r\n\r\nEric\r\n\r\nP.S. Web Visitors Into Leads includes a trial period and supports international communication. There may be individuals ready to speak with you now, so please don’t miss the opportunity.  \r\nVisit https://actionleadgeneration.com to learn more.\r\n\r\nIf you\'d like to Want to receive fewer emails, or none whatsoever? Update your email preferences by visiting https://actionleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-06-12 02:02:36', '2025-06-12 02:02:36'),
(268, 'complaint', 'Lauren Booker', 'alma.sticht94@googlemail.com', 'nat PASS', 'United States', '08319236619', NULL, 'Need a refresh for your fall/winter looks? We\'ve got you.\r\n\r\nSearching for fall/winter essentials? Native Passion has you covered with essential denim + hoodie combos and a stylish collection of season-ready sweatshirts — perfect for layering and keeping warm in style all season long.\r\n\r\n** Shop Denim Jackets with Hoodie: https://nativepassion.shop/denim-jackets-with-hoodie/\r\n- Browse All Sweatshirts: https://nativepassion.shop/sweatshirts/\r\n\r\nShop now and step into the season fully styled.\r\n\r\n\r\n\r\nIf you no longer want to receive subsequent communications from our side, kindly fill the form at bit. ly/fillunsubform with your domain address (URL).\r\nNorheimskneiken 9, Glens Falls, CA, USA, 96112', '2025-06-12 03:19:00', '2025-06-12 03:19:00'),
(269, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'CENTRE', 'South Sudan', '555-555-1212', NULL, 'Hello to the Peernetics Owner,\r\n\r\nI am Eric and I recently came across your website at Peernetics. I found it after a search, so your visibility seems to be working well.\r\n\r\nYour content looks helpful.\r\n\r\nHowever, one thing might be missing:\r\n\r\nA simple, prompt way for visitors to connect with you.\r\n\r\nResearch suggests that many visitors leave a site quickly without providing any contact information. Once they go, there’s no way to follow up.\r\n\r\nConsider this approach:\r\n\r\nWeb Visitors Into Leads is a tool that operates on your site, ready to gather each visitor’s name, email address, and phone number. You will know as soon as someone shows interest, allowing you to speak with them while they’re still viewing your site.\r\n\r\nView a Demonstration https://actionleadgeneration.com\r\n\r\nOnce you have their phone number, you can also begin a text conversation. If they aren’t ready to engage at that exact moment, you can maintain communication later by sharing additional updates or simply checking in.\r\n\r\nEverything described is straightforward to implement and may help improve your interactions with potential contacts.\r\n\r\nPlease visit https://actionleadgeneration.com to learn more about what Web Visitors Into Leads can do for you. It could help you connect with more interested individuals right now.\r\n\r\nEric\r\n\r\nP.S. Web Visitors Into Leads includes a trial period and supports international communication. There may be individuals ready to speak with you now, so please don’t miss the opportunity.  \r\nVisit https://actionleadgeneration.com to learn more.\r\n\r\nIf you\'d like to Want to receive fewer emails, or none whatsoever? Update your email preferences by visiting https://actionleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-06-12 08:58:36', '2025-06-12 08:58:36'),
(270, 'enquiry', 'Josephpycle', 'workers@anonmails.de', 'google', 'Cape Verde', '88593534236', NULL, 'Dear Sir or Madam, \r\n \r\nWe are a well-established service provider for lumber of German origin, offering spruce and pine in lengths ranging from 3 to 5.4 meters. \r\n \r\nWe handle bulk orders, starting from 200 m3 to 10,000 m3 per order, and supply customers globally. \r\n \r\nIf you are interested in more details, please feel free to reach out via email. \r\n \r\nWe look forward to your response.', '2025-06-12 23:20:17', '2025-06-12 23:20:17'),
(271, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'NA', 'Taiwan', '555-555-1212', NULL, 'Hello to the Peernetics Owner,\r\n\r\nMy name’s Eric, and I recently came across your site, Peernetics, while browsing online. Your site showed up near the top of the search results, so whatever you’re doing for visibility seems effective.\r\n\r\nIf I may ask: after someone like me finds Peernetics, what typically happens?\r\n\r\nIs your site generating valuable inquiries for your business?\r\n\r\nMany visitors view a website and then leave without taking the next step. Research suggests that a majority of visitors exit quickly, leaving no contact information.\r\n\r\nConsider this idea: What if there was a straightforward way for each visitor to indicate they’d like a call from you right when they arrive?\r\n\r\nYou can make this happen.\r\n\r\nWeb Visitor is a tool that works on your site, ready to securely gather a visitor’s name, email, and phone number. It alerts you immediately, so you can speak with that person while they are still viewing your site.\r\n\r\nPlease visit:  \r\nhttps://trustedleadgeneration.com  \r\nto see a live demonstration of Web Visitor and observe precisely how it works.\r\n\r\nActing promptly matters when it comes to building connections. The difference between engaging with someone within a few minutes, versus waiting longer, can be substantial.\r\n\r\nOur new SMS Text With Lead feature allows you to begin a text conversation as soon as you have their number. Even if they aren’t ready right now, you can keep in touch with updates, offers, and helpful information.\r\n\r\nPlease visit the link above to learn what Web Visitor can do for your business. You might be surprised at how much more interest you can capture.\r\n\r\nEric\r\n\r\nP.S. Web Visitor offers a 14-day evaluation period and includes the ability to reach out internationally. Interested individuals may be ready to speak with you now, so please don’t miss out.  \r\nhttps://trustedleadgeneration.com\r\n\r\nWant to receive less emails, or none whatsoever? Update your email preferences by clicking here. https://trustedleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-06-13 11:10:12', '2025-06-13 11:10:12'),
(272, 'complaint', 'Anthony Bruce', 'anthony@jmrcapital.co', 'Company', 'Papua New Guinea', '740153312', NULL, 'Hey, are you guys still waiting for your Employee Retention Credit to arrive?\r\n\r\nIf so, we can expedite it\'s arrival from the IRS. \r\n\r\nEmail anthony@jmrcapital.co\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nPO Box Addresss\r\n\r\nUnsubscribe:\r\n~ulr~', '2025-06-13 16:44:24', '2025-06-13 16:44:24'),
(273, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'IN', 'Colombia', '555-555-1212', NULL, 'Hello Peernetics\r\n\r\nI just found your site, quick question…\r\n\r\nMy name’s Eric, I found Peernetics after doing a quick search – you showed up near the top of the rankings, so whatever you’re doing for SEO, looks like it’s working well.\r\n\r\nSo here’s my question – what happens AFTER someone lands on your site? Anything?\r\n\r\nResearch tells us at least 70% of the people who find your site, after a quick once-over, they disappear… forever.\r\n\r\nThat means that all the work and effort you put into getting them to show up, goes down the tubes.\r\n\r\nWhy would you want all that good work – and the great site you’ve built – go to waste?\r\n\r\nBecause the odds are they’ll just skip over calling or even grabbing their phone, leaving you high and dry.\r\n\r\nBut here’s a thought… what if you could make it super-simple for someone to raise their hand, say, okay, let’s talk without requiring them to even pull their cell phone from their pocket?\r\n\r\nYou can – thanks to revolutionary new software that can literally make that first call happen NOW.\r\n\r\nWeb Visitors Into Leads is a software widget that sits on your site, ready and waiting to capture any visitor’s Name, Email address, and Phone Number. It lets you know IMMEDIATELY – so that you can talk to that lead while they’re still there at your site.\r\n\r\nYou know, strike when the iron’s hot!\r\n\r\nPlease see this URL to try out a Live Demo with Web Visitors Into Leads now to see precisely how it works and even give it a try… it could be huge for your business: https://blastleadgeneration.com\r\n\r\nWhen targeting leads, you HAVE to act fast – the difference between contacting someone within 5 minutes versus 30 minutes later is huge – like 100 times better!\r\n\r\nThat’s why you should check out our new SMS Text With Lead feature as well… once you’ve captured the phone number of the website visitor, you can automatically kick off a text (SMS) conversation with them.\r\n\r\nImagine how powerful this could be – even if they don’t take you up on your offer immediately, you can stay in touch with them using text messages to make new offers, provide links to great content, and build your credibility.\r\n\r\nJust this alone could be a game changer to make your website even more effective.\r\n\r\nStrike when the iron’s hot!\r\n\r\nPlease see this URL to discover what Web Visitors Into Leads can do for your business – you’ll be amazed: https://blastleadgeneration.com\r\n\r\nThanks and keep up the great work!\r\n\r\nEric\r\n\r\nPS: Web Visitors Into Leads offers a free 14 days trial!\r\nIt even includes International Long Distance Calling.\r\nStop wasting money chasing eyeballs that don’t turn into paying customers.\r\nPlease see this URL to try Web Visitors Into Leads now: https://blastleadgeneration.com\r\n\r\nIf you\'d like to Want to receive less emails, or none whatsoever? Update your email preferences by clicking here.  \r\nhttps://blastleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-06-13 18:22:38', '2025-06-13 18:22:38'),
(274, 'complaint', 'Anthony Bruce', 'anthony@jmrcapital.co', 'Company', 'United Arab Emirates', '3968142801', NULL, 'Hey, are you guys still waiting for your Employee Retention Credit to arrive?\r\n\r\nIf so, we can expedite it\'s arrival from the IRS. \r\n\r\nEmail anthony@jmrcapital.co\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nPO Box Addresss\r\n\r\nUnsubscribe:\r\n~ulr~', '2025-06-13 23:57:45', '2025-06-13 23:57:45'),
(275, 'complaint', 'Eric Jones', 'ericjonesmyemail@gmail.com', 'NA', 'Suriname', '555-555-1212', NULL, 'Hello Peernetics Administrator,\r\n\r\nThis is Eric here with a short thought about your website Peernetics...\r\n\r\nI’m on the internet frequently and I examine many business websites.\r\n\r\nSimilar to yours, many of them have excellent content.\r\n\r\nBut frequently, they come up short when it comes to interacting and connecting with anyone who visits.\r\n\r\nI understand – it’s challenging. Studies show 7 out of 10 people who arrive at a site leave in moments without leaving any trace. You got the view, but nothing else.\r\n\r\nHere’s a solution for you…\r\n\r\nWeb Visitors Into Leads is a software tool that operates on your site, ready to gather any visitor’s Name, Email address, and Phone Number. You’ll know immediately they’re interested and you can call them directly to talk with them while they’re still viewing your site.\r\n\r\nPlease see this URL to experience a Live Demo with Web Visitors Into Leads now to see exactly how it works:  \r\nhttps://trustedleadgeneration.com\r\n\r\nIt can be significant for your business – and because you’ve got that phone number, with our new SMS Text With Lead feature, you can immediately start a text conversation. Contacting someone within minutes is significantly more effective than reaching out much later.\r\n\r\nAdditionally, with text messaging you can follow up later with new information, helpful links, or just notes to continue the conversation.\r\n\r\nEverything I’ve just described is easy to implement, reasonable, and beneficial.\r\n\r\nPlease see this URL to learn what Web Visitors Into Leads can do for your business:  \r\nhttps://trustedleadgeneration.com\r\n\r\nYou could be converting significantly more leads today!\r\n\r\nEric\r\n\r\nPS: Web Visitors Into Leads offers a 14-day evaluation – and it even includes International calling.  \r\nYou have customers ready to talk with you right now… don’t keep them waiting.  \r\nPlease see this URL to use Web Visitors Into Leads now:  \r\nhttps://trustedleadgeneration.com\r\n\r\nIf you\'d like to Want to receive less emails, or none whatsoever? Update your email preferences by clicking here.  https://trustedleadgeneration.com/unsubscribe.aspx?d=peernetics.io', '2025-06-15 00:38:39', '2025-06-15 00:38:39');

-- --------------------------------------------------------

--
-- Table structure for table `countdowns`
--

CREATE TABLE `countdowns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `days` int(11) NOT NULL DEFAULT 0,
  `hours` int(11) NOT NULL DEFAULT 0,
  `minutes` int(11) NOT NULL DEFAULT 0,
  `seconds` int(11) NOT NULL DEFAULT 0,
  `post_countdown_price` decimal(10,2) DEFAULT NULL,
  `currency` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countdowns`
--

INSERT INTO `countdowns` (`id`, `days`, `hours`, `minutes`, `seconds`, `post_countdown_price`, `currency`, `created_at`, `updated_at`) VALUES
(1, 3, 12, 30, 45, 99.99, '$', '2024-12-20 00:45:35', '2024-12-20 00:45:56'),
(2, 2, 12, 30, 45, 99.99, '$', '2024-12-20 04:26:52', '2024-12-20 04:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `cryptocurrencies`
--

CREATE TABLE `cryptocurrencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cryptocurrencies`
--

INSERT INTO `cryptocurrencies` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Payment Gateway', 'Discover a fast-growing new source of income for your business. Implement the best cryptocurrency payment gateway to enable your business to accept, exchange, withdraw, send, store, and receive crypto payments. (Coming Soon)', NULL, '2024-11-17 13:44:47');

-- --------------------------------------------------------

--
-- Table structure for table `crypto_benefits`
--

CREATE TABLE `crypto_benefits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crypto_benefits`
--

INSERT INTO `crypto_benefits` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'User-friendly interfaces', 'User-friendly interfaces', NULL, NULL),
(2, 'Accept over 100 digital currencies', 'Accept over 100 digital currencies', NULL, NULL),
(3, '0.5% - 1% transaction fee', '0.5% - 1% transaction fee', NULL, NULL),
(4, 'Integrates with your other systems', 'Integrates with your other systems', NULL, NULL),
(5, 'Accept global payments', 'Accept global payments', NULL, NULL),
(6, 'Secure Fraud Prevention Features', 'Secure Fraud Prevention Features', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `crypto_images`
--

CREATE TABLE `crypto_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crypto_images`
--

INSERT INTO `crypto_images` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'computer', 'images/crypto/computer.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `crypto_items`
--

CREATE TABLE `crypto_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crypto_items`
--

INSERT INTO `crypto_items` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Instant exchange of cryptocurrency and fiat', 'Get paid in the currency of your choice and let customers pay their way. Whether you\'re a fiat-only business but want to enable customers to pay in crypto, or you\'re a crypto-only business and want to attract users, Peernetics gives you the option of both.', NULL, NULL),
(2, 'Ultra-low transaction fees and no chargebacks', 'Tired of high card transaction fees and chargebacks? Peernetics commission is only 0.5-1% and is one of the lowest in the industry. What\'s more, you never have to worry about chargebacks.\n                ', NULL, NULL),
(3, 'Accept global payments in over 100 cryptocurrencies', 'Get paid from anywhere in the world in over 100 of the most popular cryptocurrencies. You can even instantly convert them to another currency or fiat.', NULL, NULL),
(4, 'Convenient interfaces and 24/7 support', 'Peernetics is the cryptocurrency gateway for everyone. With a user-friendly interface and 24/7 customer support, we ensure that your transition to accepting payments in cryptocurrency will be smooth and fast.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"Modules\\\\Admin\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"Modules\\\\Admin\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `display_name_singular` varchar(255) NOT NULL,
  `display_name_plural` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `model_name` varchar(255) DEFAULT NULL,
  `policy_name` varchar(255) DEFAULT NULL,
  `controller` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'Modules\\Admin\\Models\\User', 'Modules\\Admin\\Policies\\UserPolicy', 'Modules\\Admin\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2024-07-11 21:31:43', '2024-07-11 21:31:43'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'Modules\\Admin\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2024-07-11 21:31:43', '2024-07-11 21:31:43'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'Modules\\Admin\\Models\\Role', NULL, 'Modules\\Admin\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2024-07-11 21:31:43', '2024-07-11 21:31:43');

-- --------------------------------------------------------

--
-- Table structure for table `exceptionals`
--

CREATE TABLE `exceptionals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exceptionals`
--

INSERT INTO `exceptionals` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'With exceptionally low fees and impressively user-friendly interfaces Peernetics makes it easy for any business to get started with crypto.', 'With exceptionally low fees and impressively user-friendly interfaces Peernetics makes it easy for any business to get started with crypto.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exchanges`
--

CREATE TABLE `exchanges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exchanges`
--

INSERT INTO `exchanges` (`id`, `title`, `button_text`, `link`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Exchange', 'Buy on QuickSwap', 'https://peernetics.io/pns-token', 'images/pns/quickswap.png', NULL, '2024-07-20 00:00:20');

-- --------------------------------------------------------

--
-- Table structure for table `exclusives`
--

CREATE TABLE `exclusives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exclusives`
--

INSERT INTO `exclusives` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Your World of Exclusive Rewards', '<p>Want to get exclusive rewards and offers at some of the best hospitality\r\n                establishments, restaurants, retailers and more? Anyone holding 200 PNS\r\n                or more will be automatically entered into our rewards program, and you\r\n                can start claiming rewards in-store and online.</p>\r\n            <a href=\"https://loyaltyclub.peernetics.io/\" class=\"primary-btn plr\">Take Me\r\n                There</a>', NULL, '2025-04-26 20:49:47');

-- --------------------------------------------------------

--
-- Table structure for table `extensives`
--

CREATE TABLE `extensives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extensives`
--

INSERT INTO `extensives` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Extensive Marketing Efforts You’ll Benefit From', 'Our marketing strategy encompasses promoting all of our brand partners. As part of that process, your brand will be integrated into our marketing communications, including:', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'What is the role of Solidproof in auditing Peernetics\' token?', 'SolidProof is an independent third-party auditing firm that specialises in auditing smart contracts. Peernetics has enlisted SolidProof to audit its token to ensure it is secure and trustworthy.', '2024-07-11 21:34:17', '2024-07-11 21:34:17'),
(2, 'How do I buy PNS tokens on QuickSwap ?', 'Download a TrustWallet Wallet, MetaMask, WalletConnect, or any other web3-compatible wallet to connect to Quickswap. Buy Polygon/Matic as Your Base Currency or Send Polygon/Matic to Your Crypto Wallet. Connect Your Wallet to the QuickSwap Decentralised Exchange (DEX). Trade Your Polygon/Matic for the PNS token. Apply the Swap', '2024-07-11 21:51:57', '2024-07-11 21:51:57'),
(3, 'Is there a minimum amount of PNS tokens that I can buy?', 'No, there is no minimum amount of PNS tokens that you can buy. However, to join our loyalty program where you enjoy the discounts, benefits, and rewards with our ever-growing merchant partners you will need to hold a minimum of 200 PNS tokens.', '2024-07-11 21:53:29', '2024-11-17 17:32:15'),
(4, 'What kind of support does Peernetics offer to users who need help ?', 'Peernetics offers comprehensive support to users, including live chat support on our Telegram and Discord channels and email support.', '2024-07-11 21:53:52', '2024-07-11 21:53:52'),
(5, 'What are Peernetics Merchant Partners?', 'Peernetics\' merchant partners are businesses that have partnered with Peernetics to offer discounts and other benefits to Peernetics token holders. This program is designed to provide added value and incentives for holding Peernetics tokens', '2024-07-11 21:54:14', '2024-07-11 21:54:14'),
(6, 'How do Peernetics\' merchant partners benefit from the partnership?', 'Peernetics\' merchant partners benefit from increased exposure and potential new customers through the Peernetics token holder community. By offering discounts or other incentives, merchants can attract more customers and generate additional revenue. Additionally, partnering with Peernetics enables businesses to tap into the growing trend of cryptocurrency adoption and gain a competitive advantage in their industry.', '2024-07-11 21:54:39', '2024-07-11 21:54:39'),
(9, 'How does Peernetics Promote Businesses through Social media?', 'Peernetics promotes businesses through a combination of organic and paid social media posts, targeted advertising, and influencer marketing. Our goal is to reach as many potential customers as possible and generate interest in the businesses we promote.', '2024-07-11 21:55:48', '2024-07-11 21:55:48'),
(11, 'Is my personal information safe with Peernetics?', 'Yes, Peernetics takes the security and privacy of our users\' personal information very seriously. We use industry-standard security measures to protect our users\' data and do not share any personal information with third parties.', '2024-07-11 21:56:31', '2024-07-11 21:56:31');

-- --------------------------------------------------------

--
-- Table structure for table `faq_banner_image`
--

CREATE TABLE `faq_banner_image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_banner_image`
--

INSERT INTO `faq_banner_image` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'images/faqbanner/FAQ.png', NULL, '2024-07-18 17:17:22');

-- --------------------------------------------------------

--
-- Table structure for table `featureds`
--

CREATE TABLE `featureds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `featureds`
--

INSERT INTO `featureds` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'blomberg', 'images/featured/bloombergnn.png', '2024-07-11 21:31:46', '2024-07-11 21:31:46'),
(2, 'crypto', 'images/featured/cryptonn.png', '2024-07-11 21:31:46', '2024-07-11 21:31:46'),
(3, 'marketWatch', 'images/featured/marketwatchnn.png', '2024-07-11 21:31:46', '2024-07-11 21:31:46'),
(4, 'benzinga', 'images/featured/benzingnn.png', '2024-07-11 21:31:46', '2024-07-11 21:31:46'),
(5, 'Digital Journal', 'images/featured/dgn.png', '2024-07-11 21:31:46', '2024-07-11 21:31:46'),
(6, 'MorningStar', 'images/featured/morningstarnn.png', '2024-07-11 21:31:46', '2024-07-11 21:31:46'),
(7, 'Yahoo Finance', 'images/featured/yahoo-financen.png', '2024-07-11 21:31:46', '2024-07-11 21:31:46'),
(8, 'Street Insider', 'images/featured/sinn.png', '2024-07-11 21:31:46', '2024-07-11 21:31:46');

-- --------------------------------------------------------

--
-- Table structure for table `gaming_pages`
--

CREATE TABLE `gaming_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `texti` varchar(255) DEFAULT NULL,
  `textii` varchar(255) DEFAULT NULL,
  `google_store_link` varchar(255) DEFAULT NULL,
  `apple_store_link` varchar(255) DEFAULT NULL,
  `image` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hero_text` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gaming_pages`
--

INSERT INTO `gaming_pages` (`id`, `texti`, `textii`, `google_store_link`, `apple_store_link`, `image`, `created_at`, `updated_at`, `hero_text`) VALUES
(1, 'Peernetics', 'Where Crypto Powers Champions', 'https://peernetics.io/gaming-club', 'https://peernetics.io/gaming-club', 'sites/default/files/css/gaming-folder/PNS-Banner-new_1-removebg.png', NULL, '2025-04-26 20:35:52', 'Welcome to Tomorrow’s Playground. Holders, discover games you’ll love, connect your wallet, play to earn or play to win, withdraw in PNS.');

-- --------------------------------------------------------

--
-- Table structure for table `gaming_sections`
--

CREATE TABLE `gaming_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `btn_name` varchar(255) DEFAULT NULL,
  `btn_link` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `mobile_image` longtext DEFAULT NULL,
  `desktop_image` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gaming_sections`
--

INSERT INTO `gaming_sections` (`id`, `title`, `btn_name`, `btn_link`, `description`, `mobile_image`, `desktop_image`, `created_at`, `updated_at`) VALUES
(1, 'Gaming Section Title', 'Join the Fun', 'https://peernetics.io/gaming-club', 'Gaming skills turned into PNS.', 'sites/default/files/css/gaming-folder/banner-home-page-box-removebg-preview.png', 'sites/default/files/css/gaming-folder/2 1-Photoroom.png', NULL, '2025-04-26 20:40:29');

-- --------------------------------------------------------

--
-- Table structure for table `home_sectioniiis`
--

CREATE TABLE `home_sectioniiis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `texti` varchar(255) NOT NULL DEFAULT 'Accept Crypto',
  `textii` varchar(255) NOT NULL DEFAULT 'Safe',
  `textiii` varchar(255) NOT NULL DEFAULT 'and',
  `textiv` varchar(255) NOT NULL DEFAULT 'Securely',
  `textv` varchar(255) NOT NULL DEFAULT 'with',
  `textvi` varchar(255) NOT NULL DEFAULT 'Peernetics',
  `image` varchar(255) NOT NULL DEFAULT 'sites/default/files/2023-09/peernetics-dashnoard.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sectioniiis`
--

INSERT INTO `home_sectioniiis` (`id`, `texti`, `textii`, `textiii`, `textiv`, `textv`, `textvi`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Accept Crypto', 'Safe', 'and', 'Securely', 'with', 'Peernetics', 'images/1738960393.png', NULL, '2025-02-07 20:33:13'),
(2, 'Safe', 'Safe', 'and', 'Securely', 'with', 'Peernetics', 'sites/default/files/2023-09/peernetics-dashnoard.png', NULL, NULL),
(3, 'and', 'Safe', 'and', 'Securely', 'with', 'Peernetics', 'sites/default/files/2023-09/peernetics-dashnoard.png', NULL, NULL),
(4, 'Securely', 'Safe', 'and', 'Securely', 'with', 'Peernetics', 'sites/default/files/2023-09/peernetics-dashnoard.png', NULL, NULL),
(5, 'with', 'Safe', 'and', 'Securely', 'with', 'Peernetics', 'sites/default/files/2023-09/peernetics-dashnoard.png', NULL, NULL),
(6, 'Peernetics', 'Safe', 'and', 'Securely', 'with', 'Peernetics', 'sites/default/files/2023-09/peernetics-dashnoard.png', NULL, NULL),
(7, 'sites/default/files/2023-09/peernetics-dashnoard.png', 'Safe', 'and', 'Securely', 'with', 'Peernetics', 'sites/default/files/2023-09/peernetics-dashnoard.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_sectioniis`
--

CREATE TABLE `home_sectioniis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `is_header` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sectioniis`
--

INSERT INTO `home_sectioniis` (`id`, `title`, `description`, `is_header`, `created_at`, `updated_at`) VALUES
(1, 'Peernetics', 'First header', '1', NULL, NULL),
(2, 'Loyalty Club', 'Second header', '1', NULL, NULL),
(3, 'Why join?', '100% of the discount secured goes to you. We don\'t keep anything', '0', NULL, NULL),
(4, 'Benefit', 'No need to wait for cashback. Instant discounts with brands online and offline', '0', NULL, NULL),
(5, 'How to join?', 'Hold 200 PNS tokens, connect your wallet. Visit Get Started', '0', NULL, '2024-10-07 19:50:19');

-- --------------------------------------------------------

--
-- Table structure for table `home_sectionivs`
--

CREATE TABLE `home_sectionivs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sectionivs`
--

INSERT INTO `home_sectionivs` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Seamless Integrations', 'Swiftly integrate Peernetics with other platforms you use.', NULL, NULL),
(2, 'User-Friendly Interface', 'A system built for everyone to easily use. Even\n                beginners.', NULL, NULL),
(3, 'Global Crypto Payments', 'Instantly accept payments from people around the world.', NULL, NULL),
(4, '100+ Digital Currencies', 'Accept payments in all of the most popular\n                cryptocurrencies.', NULL, NULL),
(5, 'Fraud Prevention Features', 'Crypto payments are irreversible, so there are no\n                chargebacks.', NULL, NULL),
(6, 'Ultra Low Fees', 'Fees ranging from 0.5% - 1% on all transactions.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_sectionvs`
--

CREATE TABLE `home_sectionvs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link` longtext DEFAULT NULL,
  `list` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`list`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sectionvs`
--

INSERT INTO `home_sectionvs` (`id`, `title`, `description`, `created_at`, `updated_at`, `link`, `list`) VALUES
(1, 'Wait There\'s More!', '<p>Peernetics is dedicated to building creative, fun, and future-focused crypto-powered platforms that blend cutting-edge technology. As part of the Peernetics community, PNS token holders enjoy exclusive access to our innovative loyalty club and gaming ecosystem, where they can compete in ongoing competitions. These web3-powered technologies offer thrilling experiences and provide real financial rewards for participants. By holding PNS tokens, users can save, earn, play, and win in an exciting, crypto-driven world.</p><p><a href=\"/cryptocurrency-payment-gateway\">Learn More&nbsp;</a></p>', NULL, '2025-04-26 20:42:38', NULL, NULL),
(2, 'A Utility Token That Rewards In PNS', '<p>PNS is the token that powers the Peernetics platform, and you’ll be rewarded in many ways for using it.</p><ul><li>Unique discounts, benefits, and offers with merchant partners when you hold PNS.</li><li>Play games and earn in PNS.&nbsp;</li><li>Enter gaming competitions and win in PNS.</li></ul><p><a href=\"/pns-token\">Learn More &gt;</a></p>', NULL, '2025-05-19 19:57:07', 'pns-token', NULL),
(3, 'Your Loyalty is Always Rewarded', '<p>Hold PNS, and you’ll be automatically entered into the Peernetics loyalty program, where you’ll receive.</p><ul><li>Instant discounts – no waiting for cashback</li><li>Get 100% of the discount agreed with the merchant partner – we don’t keep anything</li><li>Discounts at restaurants, coffee shops, retailers and more</li></ul><p><a href=\"/loyalty-program\">Learn More &gt;</a></p>', NULL, '2025-05-19 19:55:59', 'loyalty-program', NULL),
(4, 'Become A Merchant Partner', '<p>Our free-to-join merchant partner network empowers you to promote exclusive offers, generate brand exposure amongst the community, drive traffic to your company, and increase revenue. Choose from our cost-effective marketing service to promote your business within our community and beyond, enabling you to attract more customers and grow your influence.</p><p><a href=\"/merchant-program\">Learn More &gt;</a></p>', NULL, '2024-11-17 16:42:24', 'merchant-program', NULL),
(6, 'Play to Earn Or Play to Win', '<p>Peernetics\' Gaming Centre will transform the gaming industry by collaborating with renowned global gaming providers to host their most popular games. Play to earn PNS or participate in thrilling competitions, where top performers are rewarded with significant PNS token prizes. (Coming soon)</p>', NULL, '2025-05-19 19:54:24', 'gaming-club', NULL),
(7, 'On-going Support To Power Your Growth', '<p>Our team of experts will always be on hand to ensure you’re getting the most from Peernetics. The success of our merchant program relies on you reaping rewards from it, so we’ll do everything we can to ensure you get the results you desire.</p><p><a href=\"/contact-us\">Learn More &gt;</a></p>', NULL, '2025-03-23 19:47:01', 'contact-us', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `iocs`
--

CREATE TABLE `iocs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `days` int(11) NOT NULL DEFAULT 0,
  `hours` int(11) NOT NULL DEFAULT 0,
  `minutes` int(11) NOT NULL DEFAULT 0,
  `seconds` int(11) NOT NULL DEFAULT 0,
  `post_countdown_price` decimal(10,2) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `stake_price` decimal(15,2) NOT NULL,
  `raised_price` decimal(15,2) NOT NULL,
  `sold_allocation` decimal(15,2) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `iocs`
--

INSERT INTO `iocs` (`id`, `days`, `hours`, `minutes`, `seconds`, `post_countdown_price`, `title`, `stake_price`, `raised_price`, `sold_allocation`, `currency`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 0, 0, NULL, 'Title', 800.00, 800.00, 800.00, '$', '2025-01-14 10:25:15', '2025-01-14 10:29:25');

-- --------------------------------------------------------

--
-- Table structure for table `ioc_presales`
--

CREATE TABLE `ioc_presales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ioc_token_price` decimal(10,2) DEFAULT NULL,
  `token_address` varchar(255) DEFAULT NULL,
  `presale_address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ioc_timers`
--

CREATE TABLE `ioc_timers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL DEFAULT '2025-01-23',
  `time` time NOT NULL,
  `post_countdown_price` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ioc_timers`
--

INSERT INTO `ioc_timers` (`id`, `date`, `time`, `post_countdown_price`, `created_at`, `updated_at`) VALUES
(1, '2025-04-02', '23:20:00', 30.00, '2025-02-09 20:21:00', '2025-02-17 18:36:02');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loyalty_items`
--

CREATE TABLE `loyalty_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loyalty_items`
--

INSERT INTO `loyalty_items` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Get Discounts At Your Favourite Places', 'PNS is a crypto with utility. Peernetics loyalty members receive excellent discounts at participating restaurants, coffee shops, retailers, and many more. So, whether you’re headed out to dinner, grabbing a drink, or buying a new gadget, you can show you\'re an active member by connecting your wallet to our site or app and claiming your offers.', NULL, '2024-11-14 19:34:39'),
(2, 'Discounts Applied Instantly', 'Some people do cashback. But we don’t like to waste time. Every Peernetics reward discount is applied instantly, meaning you’ll pay less for the things you buy without having to wait for cashback to be reimbursed.', NULL, NULL),
(3, 'The Discounts Are All Yours', 'Peernetics loyalty members receive 100% of the discount agreed with partner retailers. We don’t keep any for ourselves because the aim of our program is to ensure the Peernetics community gets the best prices on products, services and experiences.', NULL, NULL),
(4, 'How To Sign Up For The Loyalty Program', 'There’s no need to sign up. When your digital wallet reaches a balance of 200 PNS, you’ll automatically qualify. We’re not here to harvest your data by making you sign up. All you have to do is connect your wallet to our site or app and show that you are active with participating partners to receive your discounts.', NULL, '2024-11-14 19:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `loyalty_programs`
--

CREATE TABLE `loyalty_programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loyalty_programs`
--

INSERT INTO `loyalty_programs` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Loyalty Program', 'At Peernetics, we reward our token holders. Hold just 200 PNS, and you will automatically be entered to receive exclusive benefits with our merchant partners.', 'images/loyalty/token-bnr.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `masses`
--

CREATE TABLE `masses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masses`
--

INSERT INTO `masses` (`id`, `title`, `button_text`, `link`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'The Mass-Adoption Mission', 'How?', 'https://peernetics.io/about', 'At Peernetics, we’re on a mission to make cryptocurrency adoption as easy as possible for businesses and consumers. We believe in breaking down barriers.', 'sites/default/files/2023-07/mass-adoption.png', NULL, '2025-04-26 20:19:09');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2024-07-11 21:31:43', '2024-07-11 21:31:43');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `parameters` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2024-07-11 21:31:43', '2024-07-11 21:31:43', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2024-07-11 21:31:43', '2024-07-11 21:31:43', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2024-07-11 21:31:43', '2024-07-11 21:31:43', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2024-07-11 21:31:44', '2024-07-11 21:31:44', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2024-07-11 21:31:44', '2024-07-11 21:31:44', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 10, '2024-07-11 21:31:44', '2024-07-11 21:31:44', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 11, '2024-07-11 21:31:44', '2024-07-11 21:31:44', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 12, '2024-07-11 21:31:44', '2024-07-11 21:31:44', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 13, '2024-07-11 21:31:44', '2024-07-11 21:31:44', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2024-07-11 21:31:44', '2024-07-11 21:31:44', 'voyager.settings.index', NULL),
(11, 1, 'Contact', 'https://peernetics.io/admin/contacts', '_self', 'voyager-people', NULL, NULL, 16, '2024-07-11 21:31:45', '2024-07-11 21:31:45', NULL, NULL),
(12, 1, 'Site Builder', 'https://peernetics.io/admin/pages', '_self', 'voyager-news', NULL, NULL, 17, '2024-07-11 21:31:45', '2024-07-11 21:31:45', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `merchant_items`
--

CREATE TABLE `merchant_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `merchant_items`
--

INSERT INTO `merchant_items` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Influencer marketing', 'images/merchant/influencermarketing.svg', NULL, NULL),
(2, 'Quarterly press releases', 'images/merchant/quarterlypressreleases.svg', NULL, NULL),
(3, 'Social media content', 'images/merchant/social-mediacontent.svg', NULL, NULL),
(4, 'Website features', 'images/merchant/website-features.svg', NULL, NULL),
(5, 'Ongoing search engine optimisation', 'images/merchant/ongoing-search-engine-optimisation.svg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `merchant_merits`
--

CREATE TABLE `merchant_merits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `merchant_merits`
--

INSERT INTO `merchant_merits` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Global and local outreach programs', '<p>Choose your target market and we will find it. Whether you\'re a local\n                or international business, we\'ll refine your marketing campaign to\n                reach the people most likely to buy from you.</p>\n            ', NULL, NULL),
(2, 'Exceptional organic growth', '<p>As our influence grows, so will yours. The Peernetics team is\n                committed to implementing an effective crypto marketing strategy\n                that will allow us to significantly increase website and social\n                media engagement. When you sign up for our marketing services, we\n                will take you with us, prioritizing both our growth and yours.</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `merchant_programs`
--

CREATE TABLE `merchant_programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `merchant_programs`
--

INSERT INTO `merchant_programs` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Merchant Program', 'The Peernetics Merchant Program opens the door to the world of crypto and helps your business thrive.\r\n\r\n                Offer exclusive discounts to Peernetics holders, attract more customers to your products and services and \r\n                generate more revenue.', 'images/merchant/collab.png', NULL, '2024-11-14 19:41:08');

-- --------------------------------------------------------

--
-- Table structure for table `merchant_sections`
--

CREATE TABLE `merchant_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `merchant_sections`
--

INSERT INTO `merchant_sections` (`id`, `title`, `description`, `button_text`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Become a Merchant Partner Today', 'Sign up to Peernetics and exponentially accelerate the next phase of your\r\n                business’s growth.', 'Tell Me More', 'https://peernetics.io/merchant-program', NULL, '2025-05-07 21:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `merchant_services`
--

CREATE TABLE `merchant_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `merchant_services`
--

INSERT INTO `merchant_services` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Merchant Marketing Service', 'Reduce marketing costs, target consumers who are actively involved in cryptocurrencies, and increase brand awareness. Our crypto marketing services are designed to help you successfully implement crypto and inform potential customers about your visionary brand.', 'images/merchant/spaceship.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_01_01_000000_create_pages_table', 1),
(6, '2016_01_01_000000_create_posts_table', 1),
(7, '2016_02_15_204651_create_categories_table', 1),
(8, '2016_05_19_173453_create_menu_table', 1),
(9, '2016_10_21_190000_create_roles_table', 1),
(10, '2016_10_21_190000_create_settings_table', 1),
(11, '2016_11_30_135954_create_permission_table', 1),
(12, '2016_11_30_141208_create_permission_role_table', 1),
(13, '2016_12_26_201236_data_types__add__server_side', 1),
(14, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(15, '2017_01_14_005015_create_translations_table', 1),
(16, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(17, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(18, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(19, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(20, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(21, '2017_08_05_000000_add_group_to_settings_table', 1),
(22, '2017_11_26_013050_add_user_role_relationship', 1),
(23, '2017_11_26_015000_create_user_roles_table', 1),
(24, '2018_03_11_000000_add_user_settings', 1),
(25, '2018_03_14_000000_add_details_to_data_types_table', 1),
(26, '2018_03_16_000000_make_settings_value_nullable', 1),
(27, '2019_08_19_000000_create_failed_jobs_table', 1),
(28, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(29, '2024_05_09_072909_create_site_pages_table', 1),
(30, '2024_05_09_161453_create_sections_table', 1),
(31, '2024_05_16_085148_create_banners_table', 1),
(32, '2024_05_17_070940_create_home_sectioniis_table', 1),
(33, '2024_05_19_183713_create_home_sectioniiis_table', 1),
(34, '2024_05_20_034606_create_home_sectionivs_table', 1),
(35, '2024_05_20_185933_create_home_sectionvs_table', 1),
(36, '2024_05_23_055702_create_blogs_table', 1),
(37, '2024_05_24_193358_create_featureds_table', 1),
(38, '2024_05_25_180400_create_questions_table', 1),
(39, '2024_05_26_072132_create_question_items_table', 1),
(40, '2024_05_27_032514_create_about_headers_table', 1),
(41, '2024_05_27_133036_create_about_seconds_table', 1),
(42, '2024_05_27_202022_create_team_headers_table', 1),
(43, '2024_05_28_033338_create_teams_table', 1),
(44, '2024_05_28_034131_create_merchant_sections_table', 1),
(45, '2024_05_28_155033_create_road_maps_table', 1),
(46, '2024_05_29_031929_create_partners_table', 1),
(47, '2024_05_29_053724_create_merchant_services_table', 1),
(48, '2024_05_30_054136_create_target_markets_table', 1),
(49, '2024_05_30_062519_create_merchant_merits_table', 1),
(50, '2024_06_01_022351_create_promotes_table', 1),
(51, '2024_06_01_050612_create_pns_utilities_table', 1),
(52, '2024_06_01_060147_create_pns_items_table', 1),
(53, '2024_06_01_082103_create_exclusives_table', 1),
(54, '2024_06_02_184621_create_exchanges_table', 1),
(55, '2024_06_02_193132_create_wallets_table', 1),
(56, '2024_06_03_010307_create_allocations_table', 1),
(57, '2024_06_03_192104_create_loyalty_programs_table', 1),
(58, '2024_06_04_105916_create_loyalty_items_table', 1),
(59, '2024_06_04_113706_create_offers_table', 1),
(60, '2024_06_04_192118_create_merchant_programs_table', 1),
(61, '2024_06_04_203926_create_brands_table', 1),
(62, '2024_06_04_210635_create_collaboratives_table', 1),
(63, '2024_06_05_035804_create_extensives_table', 1),
(64, '2024_06_05_051007_create_merchant_items_table', 1),
(65, '2024_06_05_120216_create_page_contents_table', 1),
(66, '2024_06_05_185945_create_togethers_table', 1),
(67, '2024_06_06_021836_create_masses_table', 1),
(68, '2024_06_06_084151_create_cryptocurrencies_table', 1),
(69, '2024_06_06_100040_create_crypto_images_table', 1),
(70, '2024_06_06_125319_create_crypto_benefits_table', 1),
(71, '2024_06_07_113259_create_exceptionals_table', 1),
(72, '2024_06_07_121149_create_crypto_items_table', 1),
(73, '2024_06_07_142229_create_promote_bussinesses_table', 1),
(74, '2024_06_07_161054_create_contacts_table', 1),
(75, '2024_06_19_122427_create_jobs_table', 1),
(76, '2024_07_04_100652_faq_banner_image', 1),
(77, '2024_07_09_084735_faq', 1),
(78, '2024_10_10_093925_create_sessions_table', 2),
(79, '2024_10_22_095616_add_url_ico_and_loyalty_button', 3),
(80, '2024_10_22_104003_create_pns_token_table', 4),
(81, '2024_11_12_163345_add_link_to_home_sectionvs_table', 5),
(82, '2024_11_12_170027_create_sets_table', 5),
(83, '2024_11_12_173633_add_list_to_home_sectionvs_table', 5),
(84, '2024_12_18_031703_create_rounds_table', 6),
(85, '2024_12_18_043039_create_countdowns_table', 6),
(86, '2024_12_20_145144_add_color_to_allocations_table', 7),
(87, '2025_01_09_111323_create_iocs_table', 8),
(88, '2025_01_22_163908_create_ioc_timers_table', 9),
(89, '2025_01_22_174651_create_ioc_presales_table', 9),
(90, '2025_03_29_052549_create_gaming_sections_table', 10),
(91, '2025_03_30_090608_create_gaming_pages_table', 10),
(92, '2025_03_31_155437_add_hero_text_to_gaming_pages_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `title`, `button_text`, `link`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Give Your Customers Exclusive Offers', 'Learn More', 'merchant-program', 'images/loyalty/exchange.png', 'Join the Peernetics partner network and benefit from high-profile promotion. We’ll put your brand in front of the Peernetics community, enable you to send special discounts, and help you generate more revenue.\n                ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `excerpt` text DEFAULT NULL,
  `body` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_contents`
--

CREATE TABLE `page_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_contents`
--

INSERT INTO `page_contents` (`id`, `page_id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 2, 'section_one_title', 'About Peernetics', '2024-07-11 21:31:48', '2024-07-11 21:31:48'),
(2, 2, 'section_one_description', 'Peernetics exists to enable the mass adoption\n                of cryptocurrency payments. Through\n                optimised cryptocurrency payment solutions,\n                Peernetics empowers businesses to accept,\n                exchange, withdraw, send, store and receive\n                cryptocurrencies.', '2024-07-11 21:31:48', '2024-07-11 21:31:48'),
(3, 2, 'section_one_image', 'images/about/about-left-bnr.png', '2024-07-11 21:31:48', '2024-07-11 21:31:48'),
(4, 2, 'section_two_title', 'About Peernetics', '2024-07-11 21:31:48', '2024-07-11 21:31:48'),
(5, 2, 'section_two_description', 'Founded by a team of passionate\n                professionals, we seek to make it as\n                easy as possible for all businesses to\n                step into the world of cryptocurrency.\n                We break down barriers to entry by\n                taking ground-breaking and confusing\n                technology and transforming it into an\n                uncomplicated and user-friendly\n                cryptocurrency payment gateway.', '2024-07-11 21:31:48', '2024-07-11 21:31:48'),
(6, 2, 'section_two_sub_text', 'Together, we can unlock the power of\n                cryptocurrency and transform your\n                business', '2024-07-11 21:31:48', '2024-07-11 21:31:48'),
(7, 2, 'section_two_link_url', 'cryptocurrency-payment-gateway.html', '2024-07-11 21:31:48', '2024-07-11 21:31:48'),
(8, 2, 'section_two_image', 'images/about/about-right-bnr_0.png', '2024-07-11 21:31:48', '2024-07-11 21:31:48'),
(9, 2, 'section_two_button_text', 'Learn More', '2024-07-11 21:31:48', '2024-07-11 21:31:48');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'polygon', 'images/partner/polygon.png', NULL, '2024-07-19 22:52:35'),
(2, 'Aws Logo', 'images/partner/aws.png', NULL, NULL),
(3, 'safe', 'images/partner/safe.png', NULL, NULL),
(4, 'solid', 'images/partner/solid.png', NULL, NULL),
(5, 'Mis', 'images/partner/Mistech logo.png', NULL, '2024-07-18 23:13:48');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `table_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2024-07-11 21:31:44', '2024-07-11 21:31:44'),
(2, 'browse_bread', NULL, '2024-07-11 21:31:44', '2024-07-11 21:31:44'),
(3, 'browse_database', NULL, '2024-07-11 21:31:44', '2024-07-11 21:31:44'),
(4, 'browse_media', NULL, '2024-07-11 21:31:44', '2024-07-11 21:31:44'),
(5, 'browse_compass', NULL, '2024-07-11 21:31:44', '2024-07-11 21:31:44'),
(6, 'browse_menus', 'menus', '2024-07-11 21:31:44', '2024-07-11 21:31:44'),
(7, 'read_menus', 'menus', '2024-07-11 21:31:44', '2024-07-11 21:31:44'),
(8, 'edit_menus', 'menus', '2024-07-11 21:31:44', '2024-07-11 21:31:44'),
(9, 'add_menus', 'menus', '2024-07-11 21:31:44', '2024-07-11 21:31:44'),
(10, 'delete_menus', 'menus', '2024-07-11 21:31:44', '2024-07-11 21:31:44'),
(11, 'browse_roles', 'roles', '2024-07-11 21:31:44', '2024-07-11 21:31:44'),
(12, 'read_roles', 'roles', '2024-07-11 21:31:44', '2024-07-11 21:31:44'),
(13, 'edit_roles', 'roles', '2024-07-11 21:31:44', '2024-07-11 21:31:44'),
(14, 'add_roles', 'roles', '2024-07-11 21:31:44', '2024-07-11 21:31:44'),
(15, 'delete_roles', 'roles', '2024-07-11 21:31:44', '2024-07-11 21:31:44'),
(16, 'browse_users', 'users', '2024-07-11 21:31:44', '2024-07-11 21:31:44'),
(17, 'read_users', 'users', '2024-07-11 21:31:44', '2024-07-11 21:31:44'),
(18, 'edit_users', 'users', '2024-07-11 21:31:44', '2024-07-11 21:31:44'),
(19, 'add_users', 'users', '2024-07-11 21:31:44', '2024-07-11 21:31:44'),
(20, 'delete_users', 'users', '2024-07-11 21:31:44', '2024-07-11 21:31:44'),
(21, 'browse_settings', 'settings', '2024-07-11 21:31:44', '2024-07-11 21:31:44'),
(22, 'read_settings', 'settings', '2024-07-11 21:31:44', '2024-07-11 21:31:44'),
(23, 'edit_settings', 'settings', '2024-07-11 21:31:45', '2024-07-11 21:31:45'),
(24, 'add_settings', 'settings', '2024-07-11 21:31:45', '2024-07-11 21:31:45'),
(25, 'delete_settings', 'settings', '2024-07-11 21:31:45', '2024-07-11 21:31:45');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pns_items`
--

CREATE TABLE `pns_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pns_items`
--

INSERT INTO `pns_items` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Benefit For Using PNS', 'Peernetics fees are already incredibly low at just 1%. However, for any merchants who decide to accept transactions in PNS, you’ll be charged 0.5% transaction fee. As thanks for facilitating the growth of the Peernertics ecosystem and for encouraging others to use PNS, we aim to make it as easy and cheap as possible to use.', NULL, NULL),
(2, 'An Investment Opportunity', 'Our mission is to become the most trusted and widely-used cryptocurrency payment platform. As the popularity and number of users grow, so will the value of PNS. Therefore, anyone who buys and holds the PNS utility token will see their portfolio value increase over time.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pns_token`
--

CREATE TABLE `pns_token` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ico_button_text` varchar(255) DEFAULT 'Buy PNS',
  `ico_button_url` varchar(255) DEFAULT 'https://peernetics.io/',
  `white_paper_button_text` varchar(255) DEFAULT 'Whitepaper',
  `white_paper` varchar(255) DEFAULT 'sites/default/files/2024-03/Whitepaper%20V2_0.pdf',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pns_token`
--

INSERT INTO `pns_token` (`id`, `ico_button_text`, `ico_button_url`, `white_paper_button_text`, `white_paper`, `created_at`, `updated_at`) VALUES
(1, 'Buy PNS', 'https://peernetics.io/pns-token', 'Whitepaper', 'whitepaper.pdf', '2024-10-22 13:26:27', '2025-05-10 11:11:11');

-- --------------------------------------------------------

--
-- Table structure for table `pns_utilities`
--

CREATE TABLE `pns_utilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pns_utilities`
--

INSERT INTO `pns_utilities` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'PNS – The Peernetics Utility Token', 'Built on the Polygon network, utilising Polygon\'s PoS (Proof of Stake). The network enables 65,000 transactions per second, making it one of the most secure and scalable networks.', 'images/pns/pns.png', NULL, '2025-05-07 21:08:30');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `excerpt` text DEFAULT NULL,
  `body` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promotes`
--

CREATE TABLE `promotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promotes`
--

INSERT INTO `promotes` (`id`, `title`, `button_text`, `link`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Promote exclusive offers for Peernetics loyalty club members', 'Learn More', 'https://loyaltyclub.peernetics.io/signup', 'Join the Peernetics Merchant Program and offer exclusive discounts to\r\n                                                Peernetics members. Our mission is to ensure that our community members\r\n                                                and business partners support and interact with each other. Become a\r\n                                                partner and start expanding your presence today.', NULL, '2025-01-05 16:40:44');

-- --------------------------------------------------------

--
-- Table structure for table `promote_bussinesses`
--

CREATE TABLE `promote_bussinesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promote_bussinesses`
--

INSERT INTO `promote_bussinesses` (`id`, `title`, `button_text`, `link`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Promote your business with Peernetics', 'Learn More', 'merchant-marketing-service', '\n                Increase brand awareness and attract more customers to your business. Peernetics Marketing Service showcases your products and services to active and interested cryptocurrency buyers, allowing you to increase the new revenue stream you have established.\n                ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, '<p>Have a <span data-animated=\"fadeInUp\">question?</span></p>', '<p class=\'font18\'>Have a question? Head over to our FAQ\n                or<br>reach out to us via our ticket system or<br>contact form.\n                We\'re here to help!\n            </p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `question_items`
--

CREATE TABLE `question_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link_text` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_items`
--

INSERT INTO `question_items` (`id`, `title`, `description`, `link_text`, `link`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'For existing clients', '<p>If you already have an account please sign in and use our ticket system</p>', 'Get 24/7 Support', 'https://loyaltyclub.peernetics.io/login', 'images/existing-client-icon.svg', NULL, '2024-08-11 13:22:06'),
(2, 'For new clients', '<p>Please leave your enquiry and our Business Development\n                team will contact you shortly</p>', 'Contact BD team', 'https://peernetics.io/contact-us', 'images/new-client-icon.svg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `road_maps`
--

CREATE TABLE `road_maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `road_maps`
--

INSERT INTO `road_maps` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Q4 2022', '<li>Website</li>\r\n                <li>Whitepaper </li>\r\n                <li>World Travel Market</li>\r\n                <li>Smart Contract Development</li>\r\n                <li>Design Web3 Loyalty Club</li>', NULL, '2024-11-17 15:39:35'),
(2, 'Q1 - Q4 2023', '<li>Development of Web3 Loyalty Club</li>\r\n                <li>Smart Contract Deployment</li>\r\n                <li>SolidProof Audit</li>\r\n                <li>PR Release</li>', NULL, '2025-01-05 17:00:05'),
(3, 'Q1 – Q4 2024', '<li>Strategic Partners</li>\r\n                <li>Testing Loyalty Club</li>\r\n                <li>Design Gaming Centre</li>', NULL, '2024-12-09 20:16:16'),
(4, 'Q1 – Q4 2025', '<li>Seed Funding</li>\r\n                <li>ICO/Presale launch</li>\r\n                <li>Onboarding Merchant Partners</li>\r\n                <li>Token Launch</li>     \r\n                <li>CoinMarketCap &amp; CoinGecko Listing</li>\r\n                <li>Development of Gaming Centre</li>\r\n                <li>Onboarding Merchant Partners</li>', NULL, '2024-12-09 20:15:27'),
(5, 'Future', '<li>Team expansion</li> \r\n                <li>VC Funding</li>\r\n                <li>Loyalty Club Android/IOS App launch</li>\r\n                <li>Regulations</li>\r\n                <li>And more coming…</li>', NULL, '2025-01-05 17:01:04');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2024-07-11 21:31:44', '2024-07-11 21:31:44'),
(2, 'company', 'voyager::seeders.roles.company', '2024-07-11 21:31:44', '2024-07-11 21:31:44'),
(3, 'storeadmin', 'voyager::seeders.roles.store', '2024-07-11 21:31:44', '2024-07-11 21:31:44'),
(4, 'user', 'Normal User', '2024-07-11 21:31:44', '2024-07-11 21:31:44');

-- --------------------------------------------------------

--
-- Table structure for table `rounds`
--

CREATE TABLE `rounds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `stake_price` decimal(15,2) NOT NULL,
  `raised_price` decimal(15,2) NOT NULL,
  `sold_allocation` decimal(15,2) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rounds`
--

INSERT INTO `rounds` (`id`, `title`, `stake_price`, `raised_price`, `sold_allocation`, `currency`, `created_at`, `updated_at`) VALUES
(1, 'Round A1', 100.50, 5000.00, 150.00, '$', '2024-12-19 22:49:22', '2024-12-20 00:45:22'),
(2, 'Round A', 100.50, 5000.00, 150.00, '$', '2024-12-20 00:45:09', '2024-12-20 00:45:09'),
(3, 'Round A', 100.50, 5000.00, 150.00, '$', '2024-12-20 04:26:37', '2024-12-20 04:26:37');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`, `page_id`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Banner', 1, 1, NULL, NULL),
(2, 'Section 2', 1, 2, NULL, NULL),
(3, 'Section 3', 1, 3, NULL, NULL),
(4, 'Section 4', 1, 4, NULL, NULL),
(5, 'Section 5', 1, 5, NULL, NULL),
(6, 'Blogs', 1, 6, NULL, NULL),
(7, 'Featured On', 1, 7, NULL, NULL),
(8, 'Section 8', 1, 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sets`
--

CREATE TABLE `sets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `homesection_id` varchar(255) NOT NULL,
  `listItem` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Peernetics', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Our Vision Your Journey Peernetics', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings/August2024/Qw7VZu7DhK5EySaIDEtB.png', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Peernetics', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'The Future of Digital Payments & Loyalty Club', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', 'settings/August2024/JqYWP1m7bqhhm49zZjvq.png', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `site_pages`
--

CREATE TABLE `site_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_pages`
--

INSERT INTO `site_pages` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Home', NULL, NULL),
(2, 'About', NULL, NULL),
(3, 'Road Maps', NULL, NULL),
(4, 'Partners', NULL, NULL),
(6, 'Payment Gateway', NULL, NULL),
(7, 'Pns Token', NULL, NULL),
(8, 'Loyalty Program', NULL, NULL),
(9, 'Merchant Program', NULL, NULL),
(10, 'Faqs', NULL, NULL),
(11, 'Ioc Pre-sale', NULL, NULL),
(12, 'Gaming Program', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `target_markets`
--

CREATE TABLE `target_markets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `target_markets`
--

INSERT INTO `target_markets` (`id`, `title`, `button_text`, `link`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Targeted Marketing', 'Let\'s Go', 'https://loyaltyclub.peernetics.io/signup', 'Marketing budgets are the biggest expense in a business\'s finances.\r\n                                                Choose<strong> </strong>from our range of cost-effective\r\n                                                    marketing packages,<strong> </strong>we will place your\r\n                                                brand&nbsp; to the ideal target audience. Just sign up, select your desired marketing package(s), upload your\r\n                                                marketing materials and we\'ll do the rest.', NULL, '2025-04-26 20:23:08');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `job_desc` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `socials` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `job_desc`, `link`, `image`, `socials`, `created_at`, `updated_at`) VALUES
(1, 'Nazir Miah', 'Founder & CEO', 'https://www.linkedin.com/in/nazir-miah-007858a8/', 'images/about/team/nazir.png', 'images/about/team/linkin.png', NULL, '2024-07-17 11:44:11'),
(2, 'Jallal Uddin', 'Co-founder', 'https://www.linkedin.com/in/jay-uddin-110856274/', 'images/about/team/jallai.png', 'images/about/team/linkin.png', NULL, '2025-04-13 11:13:08'),
(4, 'Shamim Miah', 'Community Manager', 'https://www.linkedin.com/in/shamim-miah-49bbaa1a2/', 'images/about/team/shamim.png', 'images/about/team/linkin.png', NULL, '2024-07-17 11:45:52'),
(5, 'Micheal Marvelous Ejeh', 'Blockchain Technical Lead', 'https://www.linkedin.com/in/michael-ejeh-6735711b6/', 'images/about/team/WhatsApp Image 2025-02-07 at 19.06.50.jpeg', 'images/about/team/linkin.png', NULL, '2025-05-03 23:12:24');

-- --------------------------------------------------------

--
-- Table structure for table `team_headers`
--

CREATE TABLE `team_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_headers`
--

INSERT INTO `team_headers` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'The Peernetics Team', 'Meet the team behind Peernetics that will skyrocket the growth of your business.', NULL, '2024-10-06 18:20:21');

-- --------------------------------------------------------

--
-- Table structure for table `togethers`
--

CREATE TABLE `togethers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `togethers`
--

INSERT INTO `togethers` (`id`, `title`, `button_text`, `link`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Partner', 'Become A Partner', 'https://loyaltyclub.peernetics.io/signup', 'Together, we’ll generate more brand exposure, increase the number of active token holders and drive growth', NULL, '2024-10-08 18:50:57');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) NOT NULL,
  `column_name` varchar(255) NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `settings` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'peernetics@gmail.com', 'users/December2024/dtPzUN4zEyYI0RdzYfON.png', NULL, '$2y$10$/s7LoiUDmoTbp/SqMwBJCu10i27gqmEpqd0Pt1ulUzbXPOEjfV/ly', 'N8fat9VkKhwRZiqFHP5o8MdgxffuE7FLrv82lXv6yW7lz6uBctPB2zGagPHz', '{\"locale\":\"en\"}', '2024-07-11 21:31:45', '2024-12-25 14:05:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`id`, `title`, `button_text`, `link`, `image`, `created_at`, `updated_at`) VALUES
(1, 'BROWSERS/WALLETS', 'Connect to MetaMask', 'https://peernetics.io/cryptocurrency-payment-gateway', 'images/pns/metamask.png', NULL, NULL),
(2, 'BROWSERS/WALLETS', 'Connect to TrustWallet', 'https://peernetics.io/cryptocurrency-payment-gateway', 'images/pns/trustwallet.png', NULL, NULL),
(3, 'BROWSERS/WALLETS', 'Connect to WalletConnect', 'https://peernetics.io/cryptocurrency-payment-gateway', 'images/pns/walletconnect.png', NULL, '2025-05-07 20:45:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_headers`
--
ALTER TABLE `about_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_seconds`
--
ALTER TABLE `about_seconds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allocations`
--
ALTER TABLE `allocations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `collaboratives`
--
ALTER TABLE `collaboratives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countdowns`
--
ALTER TABLE `countdowns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cryptocurrencies`
--
ALTER TABLE `cryptocurrencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crypto_benefits`
--
ALTER TABLE `crypto_benefits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crypto_images`
--
ALTER TABLE `crypto_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crypto_items`
--
ALTER TABLE `crypto_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `exceptionals`
--
ALTER TABLE `exceptionals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exchanges`
--
ALTER TABLE `exchanges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exclusives`
--
ALTER TABLE `exclusives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extensives`
--
ALTER TABLE `extensives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_banner_image`
--
ALTER TABLE `faq_banner_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featureds`
--
ALTER TABLE `featureds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gaming_pages`
--
ALTER TABLE `gaming_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gaming_sections`
--
ALTER TABLE `gaming_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sectioniiis`
--
ALTER TABLE `home_sectioniiis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sectioniis`
--
ALTER TABLE `home_sectioniis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sectionivs`
--
ALTER TABLE `home_sectionivs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sectionvs`
--
ALTER TABLE `home_sectionvs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iocs`
--
ALTER TABLE `iocs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ioc_presales`
--
ALTER TABLE `ioc_presales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ioc_timers`
--
ALTER TABLE `ioc_timers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `loyalty_items`
--
ALTER TABLE `loyalty_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loyalty_programs`
--
ALTER TABLE `loyalty_programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masses`
--
ALTER TABLE `masses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `merchant_items`
--
ALTER TABLE `merchant_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchant_merits`
--
ALTER TABLE `merchant_merits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchant_programs`
--
ALTER TABLE `merchant_programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchant_sections`
--
ALTER TABLE `merchant_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchant_services`
--
ALTER TABLE `merchant_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `page_contents`
--
ALTER TABLE `page_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pns_items`
--
ALTER TABLE `pns_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pns_token`
--
ALTER TABLE `pns_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pns_utilities`
--
ALTER TABLE `pns_utilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `promotes`
--
ALTER TABLE `promotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promote_bussinesses`
--
ALTER TABLE `promote_bussinesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_items`
--
ALTER TABLE `question_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `road_maps`
--
ALTER TABLE `road_maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `rounds`
--
ALTER TABLE `rounds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_page_id_foreign` (`page_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sets`
--
ALTER TABLE `sets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `site_pages`
--
ALTER TABLE `site_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `target_markets`
--
ALTER TABLE `target_markets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_headers`
--
ALTER TABLE `team_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `togethers`
--
ALTER TABLE `togethers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_headers`
--
ALTER TABLE `about_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_seconds`
--
ALTER TABLE `about_seconds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allocations`
--
ALTER TABLE `allocations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `collaboratives`
--
ALTER TABLE `collaboratives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=276;

--
-- AUTO_INCREMENT for table `countdowns`
--
ALTER TABLE `countdowns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cryptocurrencies`
--
ALTER TABLE `cryptocurrencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crypto_benefits`
--
ALTER TABLE `crypto_benefits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `crypto_images`
--
ALTER TABLE `crypto_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crypto_items`
--
ALTER TABLE `crypto_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exceptionals`
--
ALTER TABLE `exceptionals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exchanges`
--
ALTER TABLE `exchanges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exclusives`
--
ALTER TABLE `exclusives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `extensives`
--
ALTER TABLE `extensives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `faq_banner_image`
--
ALTER TABLE `faq_banner_image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `featureds`
--
ALTER TABLE `featureds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gaming_pages`
--
ALTER TABLE `gaming_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gaming_sections`
--
ALTER TABLE `gaming_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_sectioniiis`
--
ALTER TABLE `home_sectioniiis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `home_sectioniis`
--
ALTER TABLE `home_sectioniis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_sectionivs`
--
ALTER TABLE `home_sectionivs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `home_sectionvs`
--
ALTER TABLE `home_sectionvs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `iocs`
--
ALTER TABLE `iocs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ioc_presales`
--
ALTER TABLE `ioc_presales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ioc_timers`
--
ALTER TABLE `ioc_timers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loyalty_items`
--
ALTER TABLE `loyalty_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loyalty_programs`
--
ALTER TABLE `loyalty_programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `masses`
--
ALTER TABLE `masses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `merchant_items`
--
ALTER TABLE `merchant_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `merchant_merits`
--
ALTER TABLE `merchant_merits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `merchant_programs`
--
ALTER TABLE `merchant_programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `merchant_sections`
--
ALTER TABLE `merchant_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `merchant_services`
--
ALTER TABLE `merchant_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page_contents`
--
ALTER TABLE `page_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pns_items`
--
ALTER TABLE `pns_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pns_token`
--
ALTER TABLE `pns_token`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pns_utilities`
--
ALTER TABLE `pns_utilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotes`
--
ALTER TABLE `promotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `promote_bussinesses`
--
ALTER TABLE `promote_bussinesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `question_items`
--
ALTER TABLE `question_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `road_maps`
--
ALTER TABLE `road_maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rounds`
--
ALTER TABLE `rounds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sets`
--
ALTER TABLE `sets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `site_pages`
--
ALTER TABLE `site_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `target_markets`
--
ALTER TABLE `target_markets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `team_headers`
--
ALTER TABLE `team_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `togethers`
--
ALTER TABLE `togethers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `site_pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
