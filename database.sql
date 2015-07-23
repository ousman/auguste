INSERT INTO `serie` (`id`, `label`, `description`, `add_date`, `mod_date`) VALUES
(2, 'Series 2009-2010 ', 'test', '2015-04-28 14:01:58', '2015-04-28 14:04:23'),
(3, 'Serie 2006-2007-2008', 'Aucune description', '2015-04-28 14:04:44', '2015-04-28 14:04:44'),
(4, 'Serie 1990''s', 'Aucune description', '2015-04-28 14:05:29', '2015-04-28 14:05:29'),
(5, 'Biography', 'Aucune description', '2015-04-28 19:33:39', '2015-04-28 19:33:39'),
(6, 'Story 90''s', 'Aucune description', '2015-04-28 19:33:58', '2015-04-28 19:33:58'),
(7, 'Story 00''s', 'Aucune description', '2015-04-28 19:34:22', '2015-04-28 19:34:22');

--
-- Contenu de la table `serie_index`
--

INSERT INTO `serie_index` (`keyword`, `field`, `position`, `id`) VALUES
('2', 'id', 0, 2),
('2009', 'Label', 1, 2),
('2010', 'Label', 2, 2),
('series', 'Label', 0, 2),
('2006', 'Label', 1, 3),
('2007', 'Label', 2, 3),
('2008', 'Label', 3, 3),
('3', 'id', 0, 3),
('serie', 'Label', 0, 3),
('1990s', 'Label', 1, 4),
('4', 'id', 0, 4),
('serie', 'Label', 0, 4),
('5', 'id', 0, 5),
('biography', 'Label', 0, 5),
('6', 'id', 0, 6),
('90s', 'Label', 1, 6),
('story', 'Label', 0, 6),
('00s', 'Label', 1, 7),
('7', 'id', 0, 7),
('story', 'Label', 0, 7);

--
-- Contenu de la table `tag`
--

INSERT INTO `tag` (`id`, `label`, `description`, `idserie`, `add_date`, `mod_date`) VALUES
(3, 'Iron/Colors', 'Aucune description', 2, '2015-04-28 13:50:12', '2015-04-28 13:50:12'),
(4, 'HTML', 'Aucune description', 3, '2015-04-28 19:28:54', '2015-04-28 19:28:54'),
(5, 'ME', 'Aucune description', 4, '2015-04-28 19:33:15', '2015-04-28 19:33:15'),
(6, 'Communication', 'Aucune description', 2, '2015-04-28 19:58:31', '2015-04-28 19:58:31'),
(7, 'Money', 'Aucune description', 3, '2015-04-28 19:59:02', '2015-04-28 19:59:02'),
(8, 'Compagny', 'Aucune description', 3, '2015-04-28 20:00:26', '2015-04-28 20:00:26'),
(9, 'Game', 'Aucune description', 6, '2015-04-28 20:00:43', '2015-04-28 20:00:43'),
(10, 'Foreigner', 'Aucune description', 7, '2015-04-28 20:01:39', '2015-04-28 20:01:39'),
(11, 'Deceased', 'Aucune description', 7, '2015-04-28 20:02:14', '2015-04-28 20:02:14');

--
-- Contenu de la table `tag_index`
--

INSERT INTO `tag_index` (`keyword`, `field`, `position`, `id`) VALUES
('3', 'id', 0, 3),
('colors', 'Label', 1, 3),
('iron', 'Label', 0, 3),
('4', 'id', 0, 4),
('html', 'Label', 0, 4),
('5', 'id', 0, 5),
('6', 'id', 0, 6),
('communication', 'Label', 0, 6),
('7', 'id', 0, 7),
('money', 'Label', 0, 7),
('8', 'id', 0, 8),
('compagny', 'Label', 0, 8),
('9', 'id', 0, 9),
('game', 'Label', 0, 9),
('10', 'id', 0, 10),
('foreigner', 'Label', 0, 10),
('11', 'id', 0, 11),
('deceased', 'Label', 0, 11);

--
-- Contenu de la table `photo`
--

INSERT INTO `photo` (`id`, `label`, `fichier`, `extension`, `description`, `idserie`, `idtag`, `add_date`, `mod_date`) VALUES
(4, 'No title #1', '20150428193010.png', 'Acrylic on canvas, 50 x 50', 'Process started', 3, 4, '2015-04-28 19:31:14', '2015-04-28 19:31:14'),
(5, 'Me', '20150428195544.png', 'Au fond, il y a la couleur', 'When I started to looking for, all was black and white.', 5, 5, '2015-04-28 19:39:16', '2015-04-28 19:55:49'),
(6, 'Speed up', '20150428200432.png', 'Acrylic on canvas, 50 x 50', 'It begins with the body, the HTML language is so constructed', 3, 6, '2015-04-28 20:07:06', '2015-04-28 20:07:06'),
(7, '"How"', '20150428200856.png', 'Acrylic on canvas, 33 x 41', '"How is life"', 2, 6, '2015-04-28 20:09:53', '2015-04-28 20:09:53'),
(8, '"DotCom"', '20150428201250.png', 'Acrylic on canvas, 50 x 50', 'Trade, a speech whose end is known, dot.', 3, 6, '2015-04-28 20:14:49', '2015-04-28 20:16:25'),
(9, 'No title #6', '20150428201909.png', 'Acrylic on canvas, 50 x 50', 'The binary information is obvious, that''s what makes it visible', 3, 6, '2015-04-28 20:20:42', '2015-04-28 20:20:42'),
(10, '"Money"', '20150428202126.png', 'Acrylic on canvas, 60 x 60', 'An abstraction that brings us closer to reality, for our good.', 3, 7, '2015-04-28 20:23:03', '2015-04-28 20:23:03'),
(11, '"MS"', '20150428202417.png', 'Acrylic on canvas, 60 x 60', 'a community, a network, an area where freedom is a rule', 3, 8, '2015-04-28 20:26:25', '2015-04-28 20:26:25'),
(12, '"YWI"', '20150428202756.png', 'Acrylic on canvas, 60 x 60', 'The will goes through the authority', 3, 8, '2015-04-28 20:31:29', '2015-04-28 20:31:29'),
(13, 'No title #4', '20150428203302.png', 'Acrylic on canvas, 130 x 130', 'Rotting to produce. A very long fermentation of organic matter can lead the energy needed for human decay.', 2, 8, '2015-04-28 20:36:10', '2015-04-28 20:36:10'),
(14, 'No title #2', '20150428203658.png', 'Acrylic on canvas, 50 x 50', 'Produce by man, a necessity useful :( without verb :) .', 3, 8, '2015-04-28 20:39:21', '2015-04-28 20:39:21'),
(15, 'No title #3', '20150428204003.png', 'Acrylic on canvas, 60 x 60', 'The process is passed, through it.', 3, 8, '2015-04-28 20:41:59', '2015-04-28 20:41:59'),
(16, '"SW"', '20150428204302.png', 'Acrylic on canvas, 55 x 46', 'The play area of the screen where the vacuum is infinite.', 2, 9, '2015-04-28 20:45:30', '2015-04-28 20:45:30'),
(17, 'No title #5', '20150428204634.png', 'Acrylic on canvas, 55 x 46', 'My screen is human, it sees, it listens, it speaks.', 2, 9, '2015-04-28 20:49:08', '2015-04-28 20:49:08'),
(18, '"numbers"', '20150428205009.png', 'Acrylic on canvas, 61 x 38', 'Because abroad is the source of reason', 2, 10, '2015-04-28 20:52:09', '2015-04-28 20:52:09'),
(19, '"ThiÃªu"', '20150428205309.png', 'Acrylic on canvas, 130 x 130', 'That forgetfulness of this ash gives us the energy to do. It will take time.', 2, 11, '2015-04-28 20:56:01', '2015-04-28 20:56:01'),
(20, 'No title #1', '20150428205720.png', 'Acrylic on canvas, 33 x 41', 'Without inverted commas, they did.', 2, 11, '2015-04-28 20:59:56', '2015-04-28 20:59:56'),
(21, '"/body"', '20150428210034.png', 'Acrylic on canvas, 130 x 130', 'Limited by the body, the end of a life.', 2, 11, '2015-04-28 21:01:45', '2015-04-28 21:01:45');

--
-- Contenu de la table `photo_index`
--

INSERT INTO `photo_index` (`keyword`, `field`, `position`, `id`) VALUES
('1', 'Label', 2, 4),
('4', 'id', 0, 4),
('title', 'Label', 1, 4),
('5', 'id', 0, 5),
('6', 'id', 0, 6),
('speed', 'Label', 0, 6),
('7', 'id', 0, 7),
('8', 'id', 0, 8),
('dotcom', 'Label', 0, 8),
('6', 'Label', 2, 9),
('9', 'id', 0, 9),
('title', 'Label', 1, 9),
('10', 'id', 0, 10),
('money', 'Label', 0, 10),
('11', 'id', 0, 11),
('ms', 'Label', 0, 11),
('12', 'id', 0, 12),
('ywi', 'Label', 0, 12),
('13', 'id', 0, 13),
('4', 'Label', 2, 13),
('title', 'Label', 1, 13),
('14', 'id', 0, 14),
('2', 'Label', 2, 14),
('title', 'Label', 1, 14),
('15', 'id', 0, 15),
('3', 'Label', 2, 15),
('title', 'Label', 1, 15),
('16', 'id', 0, 16),
('sw', 'Label', 0, 16),
('17', 'id', 0, 17),
('5', 'Label', 2, 17),
('title', 'Label', 1, 17),
('18', 'id', 0, 18),
('numbers', 'Label', 0, 18),
('19', 'id', 0, 19),
('thieu', 'Label', 0, 19),
('1', 'Label', 2, 20),
('20', 'id', 0, 20),
('title', 'Label', 1, 20),
('21', 'id', 0, 21),
('body', 'Label', 1, 21);

--
-- Contenu de la table `introduction`
--

INSERT INTO `introduction` (`id`, `text`, `add_date`, `mod_date`) VALUES
(1, 'Ceci est une révolution', '2015-07-23 00:00:00', '2015-07-23 00:00:00');

