-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 23, 2021 at 12:06 PM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4sholate`
--

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `deskripsi_lanjut` varchar(5000) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id`, `judul`, `slug`, `deskripsi`, `deskripsi_lanjut`, `gambar`, `created_at`, `updated_at`) VALUES
(86, 'Bebek Gaming', 'bebek-gaming', 'Bebek gaming', '<h1>Lorem Ipsum</h1>\r\n\r\n<p>&quot;Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...&quot;</p>\r\n\r\n<p>&quot;There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...&quot;</p>\r\n\r\n<hr />\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius, enim at rutrum commodo, ligula erat euismod ipsum, et dictum ligula libero quis ipsum. In gravida et magna sit amet porta. Proin finibus lacus eget sollicitudin commodo. Sed tincidunt congue tristique. Duis faucibus nisi in malesuada aliquet. Phasellus pretium, ipsum dignissim rhoncus mattis, dui massa dignissim elit, eget molestie ipsum arcu quis ante. Quisque odio nulla, tincidunt vitae lectus sed, finibus pretium odio. Nulla facilisi. In consequat pellentesque lacus, et viverra mi vehicula in. Integer eu turpis nec elit gravida scelerisque ut sollicitudin metus. Morbi eu erat velit. Ut sed pulvinar nisl, vitae placerat sem. Praesent vehicula justo id mi feugiat ultricies. Nunc convallis lectus ac eros maximus, quis suscipit justo luctus. Pellentesque eget eros scelerisque, tempus odio feugiat, venenatis ante. Aliquam euismod, nisl quis pellentesque eleifend, tellus lorem venenatis diam, cursus tempus neque augue sit amet ipsum.</p>\r\n\r\n<p>Aenean semper magna sed interdum luctus. Maecenas at tincidunt tortor. Sed iaculis, urna in porta tempor, urna nisl tristique sem, ac scelerisque nibh ipsum eu ante. Donec vel felis purus. Cras maximus libero id mauris facilisis, ac viverra nisl rhoncus. Mauris eu orci tempus, vulputate elit eget, laoreet orci. Fusce consectetur vel mi quis luctus. Praesent consectetur ornare metus eu sagittis. Praesent laoreet consequat metus, ut hendrerit velit rhoncus sit amet. Pellentesque tempor vitae purus at vestibulum. Vestibulum aliquam mi risus, sed commodo lectus euismod id. Cras a odio et magna laoreet faucibus id ut dolor.</p>\r\n\r\n<p>Maecenas vel urna felis. Pellentesque maximus dui id tellus pretium efficitur. Praesent justo magna, iaculis ac malesuada sed, dictum at neque. Aliquam pharetra nisl in sem dignissim imperdiet. Nam fermentum ultrices feugiat. Curabitur molestie vulputate malesuada. Donec ac orci ultrices, malesuada ex dignissim, dapibus ante. Aliquam aliquet justo eget tellus viverra, in scelerisque turpis rutrum. Sed et tellus nec eros sagittis dapibus ornare at nisi. Etiam ut est dolor. Quisque ante justo, tempor non auctor in, fermentum vel neque. Sed luctus enim lorem, nec imperdiet est tincidunt non.</p>\r\n\r\n<p>Nunc eget tortor dapibus, ornare enim cursus, elementum tortor. Integer rhoncus massa ac lorem maximus suscipit. In laoreet sapien cursus, consectetur quam in, volutpat nunc. Integer purus magna, ultrices vitae faucibus sed, porta a sem. Proin non velit nec dolor aliquet scelerisque. Integer mollis arcu accumsan placerat vestibulum. Donec sollicitudin eu sapien eget convallis. Duis auctor neque non lorem cursus venenatis. Nulla facilisi. Proin nisl sem, scelerisque in volutpat ut, tristique non ipsum. Etiam aliquam interdum arcu quis elementum. Donec accumsan convallis ligula non feugiat. Integer facilisis leo sed arcu dapibus pharetra. Proin fringilla justo arcu, quis pellentesque libero molestie vel.</p>\r\n\r\n<p>Aliquam convallis sit amet nibh quis tincidunt. Donec luctus risus non dui rhoncus lacinia. Integer pellentesque auctor felis, tristique accumsan leo tincidunt eu. Integer vel orci mauris. Maecenas viverra lectus metus, eu facilisis mi cursus quis. Cras fringilla dolor vitae nibh tincidunt volutpat. Morbi turpis ligula, porta a nibh sed, volutpat hendrerit eros. Cras blandit ante vitae neque efficitur elementum. Nullam ex ex, pretium ut neque vitae, ullamcorper viverra arcu. Proin et felis bibendum urna imperdiet ullamcorper. Vestibulum malesuada eros nisl, eu rutrum massa imperdiet sit amet.</p>\r\n\r\n<p>Sed placerat dui vel feugiat blandit. Integer blandit tortor ipsum, vitae efficitur ex venenatis quis. Aliquam quis nisi a nisl auctor dapibus et in dolor. Sed id congue eros. Suspendisse et rutrum est. Nunc vitae metus quis dolor facilisis dignissim molestie vel lorem. Aliquam erat volutpat.</p>\r\n\r\n<p>Curabitur mattis justo sapien, in tincidunt justo vestibulum at. Donec eget ante nisl. Pellentesque accumsan venenatis leo vel auctor. Aenean sit amet felis ac sem fringilla lobortis. Nunc non nisi ac dui luctus fermentum in sed nunc. In suscipit odio ex, feugiat luctus turpis aliquet ac. Suspendisse sollicitudin augue ac magna maximus consectetur. Mauris accumsan justo tortor, lacinia condimentum urna accumsan tincidunt. Pellentesque viverra dolor eleifend, varius mauris quis, ultrices mi. Donec egestas, magna vitae varius laoreet, felis elit ornare justo, id finibus purus quam in augue. Integer id arcu lectus. Nulla facilisi. Nam id pulvinar neque.</p>\r\n\r\n<p>Aenean sit amet justo in sapien tristique interdum eu a ex. Duis auctor, massa sed blandit mollis, odio quam efficitur augue, ac egestas ex metus', '1637671909_f383d0d3d673defbf5af.png', '2021-11-23 06:51:49', '2021-11-23 06:51:49'),
(87, 'Ini testing lagi', 'ini-testing-lagi', 'testinga', '<p>Lorem Ipsum</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...&quot;</p>\r\n\r\n<p>&quot;There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...&quot;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius, enim at rutrum commodo, ligula erat eui</p>\r\n\r\n<hr />\r\n<p>smod ipsum, et dictum ligula libero quis ipsum. In gravida et magna sit amet porta. Proin finibus lacus eget sollicitudin commodo. Sed tincidunt congue tristique. Duis faucibus nisi in malesuada aliquet. Phasellus pretium, ipsum dignissim rhoncus mattis, dui massa dignissim elit, eget molestie ipsum arcu quis ante. Quisque odio nulla, tincidunt vitae lectus sed, finibus pretium odio. Nulla facilisi. In consequat pellentesque lacus, et viverra mi vehicula in. Integer eu turpis nec elit gravida scelerisque ut sollicitudin metus. Morbi eu erat velit. Ut sed pulvinar nisl, vitae placerat sem. Praesent vehicula justo id mi feugiat ultricies. Nunc convallis lectus ac eros maximus, quis suscipit justo luctus. Pellentesque eget eros scelerisque, tempus odio feugiat, venenatis ante. Aliquam euismod, nisl quis pellentesque eleifend, tellus lorem venenatis diam, cursus tempus neque augue sit amet ipsum.</p>\r\n\r\n<p>Aenean semper magna sed interdum luctus. Maecenas at tincidunt tortor. Sed iaculis, urna in porta tempor, urna nisl tristique sem, ac scelerisque nibh ipsum eu ante. Donec vel felis purus. Cras maximus libero id mauris facilisis, ac viverra nisl rhoncus. Mauris eu orci tempus, vulputate elit eget, laoreet orci. Fusce consectetur vel mi quis luctus. Praesent consectetur ornare metus eu sagittis. Praesent laoreet consequat metus, ut hendrerit velit rhoncus sit amet. Pellentesque tempor vitae purus at vestibulum. Vestibulum aliquam mi risus, sed commodo lectus euismod id. Cras a odio et magna laoreet faucibus id ut dolor.</p>\r\n\r\n<p>Maecenas vel urna felis. Pellentesque maximus dui id tellus pretium efficitur. Praesent justo magna, iaculis ac malesuada sed, dictum at neque. Aliquam pharetra nisl in sem dignissim imperdiet. Nam fermentum ultrices feugiat. Curabitur molestie vulputate malesuada. Donec ac orci ultrices, malesuada ex dignissim, dapibus ante. Aliquam aliquet justo eget tellus viverra, in scelerisque turpis rutrum. Sed et tellus nec eros sagittis dapibus ornare at nisi. Etiam ut est dolor. Quisque ante justo, tempor non auctor in, fermentum vel neque. Sed luctus enim lorem, nec imperdiet est tincidunt non.</p>\r\n\r\n<p>Nunc eget tortor dapibus, ornare enim cursus, elementum tortor. Integer rhoncus massa ac lorem maximus suscipit. In laoreet sapien cursus, consectetur quam in, volutpat nunc. Integer purus magna, ultrices vitae faucibus sed, porta a sem. Proin non velit nec dolor aliquet scelerisque. Integer mollis arcu accumsan placerat vestibulum. Donec sollicitudin eu sapien eget convallis. Duis auctor neque non lorem cursus venenatis. Nulla facilisi. Proin nisl sem, scelerisque in volutpat ut, tristique non ipsum. Etiam aliquam interdum arcu quis elementum. Donec accumsan convallis ligula non feugiat. Integer facilisis leo sed arcu dapibus pharetra. Proin fringilla justo arcu, quis pellentesque libero molestie vel.</p>\r\n\r\n<p>Aliquam convallis sit amet nibh quis tincidunt. Donec luctus risus non dui rhoncus lacinia. Integer pellentesque auctor felis, tristique accumsan leo tincidunt eu. Integer vel orci mauris. Maecenas viverra lectus metus, eu facilisis mi cursus quis. Cras fringilla dolor vitae nibh tincidunt volutpat. Morbi turpis ligula, porta a nibh sed, volutpat hendrerit eros. Cras blandit ante vitae neque efficitur elementum. Nullam ex ex, pretium ut neque vitae, ullamcorper viverra arcu. Proin et felis bibendum urna imperdiet ullamcorper. Vestibulum malesuada eros nisl, eu rutrum massa imperdiet sit amet.</p>\r\n\r\n<p>Sed placerat dui vel feugiat blandit. Integer blandit tortor ipsum, vitae efficitur ex venenatis quis. Aliquam quis nisi a nisl auctor dapibus et in dolor. Sed id congue eros. Suspendisse et rutrum est. Nunc vitae metus quis dolor facilisis dignissim molestie vel lorem. Aliquam erat volutpat.</p>\r\n\r\n<p>Curabitur mattis justo sapien, in tincidunt justo vestibulum at. Donec eget ante nisl. Pellentesque accumsan venenatis leo vel auctor. Aenean sit amet felis ac sem fringilla lobortis. Nunc non nisi ac dui luctus fermentum in sed nunc. In suscipit odio ex, feugiat luctus turpis aliquet ac. Suspendisse sollicitudin augue ac magna maximus consectetur. Mauris accumsan justo tortor, lacinia condimentum urna accumsan tincidunt. Pellentesque viverra dolor eleifend, varius mauris quis, ultrices mi. Donec egestas, magna vitae varius laoreet, felis elit ornare justo, id finibus purus quam in augue. Integer id arcu lectus. Nulla facilisi. Nam id pulvinar neque.</p>\r\n\r\n<p>Aenean sit amet justo in sapien tristique interdum eu a ex. Duis auctor, massa sed blandit mollis, odio quam efficitur ', '1637672064_28bbfcfe448f030c4689.jpg', '2021-11-23 06:54:24', '2021-11-23 07:01:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
