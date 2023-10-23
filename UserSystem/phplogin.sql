
CREATE TABLE IF NOT EXISTS `accounts` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
  	`username` varchar(50) NOT NULL,
  	`password` varchar(255) NOT NULL,
  	`email` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES (1, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test@test.com');
INSERT INTO  `accounts` (`id`, `username`, `password`, `email`) VALUES (13, 'tay', 'f30aa7a662c728b7407c54ae6bfd27d1', 'tay@gmail.com');


-- Create the "news_articles" table
CREATE TABLE IF NOT EXISTS news_articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO `news_articles` (`id`, `title`, `content`, `created_at`) VALUES
(1, 'News Item 1', 'This is the content of news item 1.', '2023-10-22 23:01:57'),
(2, 'News Item 2', 'This is the content of news item 2.', '2023-10-22 23:01:57'),
(3, 'News Item 3', 'This is the content of news item 3.', '2023-10-22 23:01:57'),
(4, 'News Item 4', 'This is the content of news item 4.', '2023-10-22 23:01:57'),
(5, 'News Item 5', 'This is the content of news item 5.', '2023-10-22 23:01:57'),
(6, 'News Item 6', 'This is the content of news item 6.', '2023-10-22 23:01:57'),
(7, 'News Item 7', 'This is the content of news item 7.', '2023-10-22 23:01:57'),
(8, 'News Item 8', 'This is the content of news item 8.', '2023-10-22 23:01:57'),
(9, 'News Item 9', 'This is the content of news item 9.', '2023-10-22 23:01:57'),
(10, 'News Item 10', 'This is the content of news item 10.', '2023-10-22 23:01:57'),
(11, 'News Item 11', 'This is the content of news item 11.', '2023-10-22 23:01:57'),
(12, 'News Item 12', 'This is the content of news item 12.', '2023-10-22 23:01:57'),
(13, 'News Item 13', 'This is the content of news item 13.', '2023-10-22 23:01:57'),
(14, 'News Item 14', 'This is the content of news item 14.', '2023-10-22 23:01:57'),
(15, 'News Item 15', 'This is the content of news item 15.', '2023-10-22 23:01:57'),
(16, 'News Item 16', 'This is the content of news item 16.', '2023-10-22 23:01:57'),
(17, 'News Item 17', 'This is the content of news item 17.', '2023-10-22 23:01:57'),
(18, 'News Item 18', 'This is the content of news item 18.', '2023-10-22 23:01:57'),
(19, 'News Item 19', 'This is the content of news item 19.', '2023-10-22 23:01:57'),
(20, 'News Item 20', 'This is the content of news item 20.', '2023-10-22 23:01:57'),
(21, 'News Item 21', 'This is the content of news item 21.', '2023-10-22 23:01:57'),
(22, 'News Item 22', 'This is the content of news item 22.', '2023-10-22 23:01:57'),
(23, 'News Item 23', 'This is the content of news item 23.', '2023-10-22 23:01:57'),
(24, 'News Item 24', 'This is the content of news item 24.', '2023-10-22 23:01:57'),
(25, 'News Item 25', 'This is the content of news item 25.', '2023-10-22 23:01:57'),
(26, 'News Item 26', 'This is the content of news item 26.', '2023-10-22 23:01:57'),
(27, 'News Item 27', 'This is the content of news item 27.', '2023-10-22 23:01:57'),
(28, 'News Item 28', 'This is the content of news item 28.', '2023-10-22 23:01:57'),
(29, 'News Item 29', 'This is the content of news item 29.', '2023-10-22 23:01:57'),
(30, 'News Item 30', 'This is the content of news item 30.', '2023-10-22 23:01:57'),
(31, 'News Item 31', 'This is the content of news item 31.', '2023-10-22 23:01:57'),
(32, 'News Item 32', 'This is the content of news item 32.', '2023-10-22 23:01:57'),
(33, 'News Item 33', 'This is the content of news item 33.', '2023-10-22 23:01:57'),
(34, 'News Item 34', 'This is the content of news item 34.', '2023-10-22 23:01:57'),
(35, 'News Item 35', 'This is the content of news item 35.', '2023-10-22 23:01:57'),
(36, 'News Item 36', 'This is the content of news item 36.', '2023-10-22 23:01:57'),
(37, 'News Item 37', 'This is the content of news item 37.', '2023-10-22 23:01:57'),
(38, 'News Item 38', 'This is the content of news item 38.', '2023-10-22 23:01:57'),
(39, 'News Item 39', 'This is the content of news item 39.', '2023-10-22 23:01:57'),
(40, 'News Item 40', 'This is the content of news item 40.', '2023-10-22 23:01:57'),
(41, 'News Item 41', 'This is the content of news item 41.', '2023-10-22 23:01:57'),
(42, 'News Item 42', 'This is the content of news item 42.', '2023-10-22 23:01:57'),
(43, 'News Item 43', 'This is the content of news item 43.', '2023-10-22 23:01:57'),
(44, 'News Item 44', 'This is the content of news item 44.', '2023-10-22 23:01:57'),
(45, 'News Item 45', 'This is the content of news item 45.', '2023-10-22 23:01:57'),
(46, 'News Item 46', 'This is the content of news item 46.', '2023-10-22 23:01:57'),
(47, 'News Item 47', 'This is the content of news item 47.', '2023-10-22 23:01:57'),
(48, 'News Item 48', 'This is the content of news item 48.', '2023-10-22 23:01:57'),
(49, 'News Item 49', 'This is the content of news item 49.', '2023-10-22 23:01:57'),
(50, 'News Item 50', 'This is the content of news item 50.', '2023-10-22 23:01:57'),
(51, 'News Item 51', 'This is the content of news item 51.', '2023-10-22 23:01:57');

