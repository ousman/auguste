INSERT INTO `Serie` (`id`, `label`, `description`, `add_date`, `mod_date`) VALUES
(3, 'Serie 2006-2010', 'If there is a universal language, the result is a product, HTML produced this reaction.\r\nBut the background remains the result of human activity, the color of the senses.', '2015-04-28 14:04:44', '2015-09-07 15:05:47'),
(4, 'Serie 1990''s', 'Aucune description', '2015-04-28 14:05:29', '2015-04-28 14:05:29'),
(5, 'Biography', '1966 : Born in Lyon, France,\r\n1985 : Live and work in Paris, France,\r\n1986-1991 : Assistant painter,\r\n1987 : Series "Les chaises",\r\n1990-1991 : Series "Les nombres",\r\n2006-2010 : Series "HTML",\r\nFrom 1988 to 2015 : Work for a limited company with a share capital of 300 219 278 shares.', '2015-04-28 19:33:39', '2015-09-07 15:17:57'),
(6, 'Story 90''s', 'Aucune description', '2015-04-28 19:33:58', '2015-04-28 19:33:58'),
(7, 'Story 00''s', 'The series began in 2006, it is a continuation of the previous, addressing the product in creation. If previously opposed the construction materials (acrylic / steel) to highlight the conflict between the product and the creation, the series wanted to reconcile the duality in the use of a single material, paint, based on acrylic and additives coated type.\r\nIf the first definition of the product is the result of an activity of the nature or of the man; at mathematical or chemical level, the product is the result of an operation, a reaction.\r\nIf there is a universal language, the result is a product, HTML produced this reaction.\r\nBut the background remains the result of human activity, the color of the senses.', '2015-04-28 19:34:22', '2015-09-07 15:04:52');

--
-- Contenu de la table `serie_index`
--

INSERT INTO `serie_index` (`keyword`, `field`, `position`, `id`) VALUES
('2006', 'Label', 1, 3),
('2010', 'Label', 2, 3),
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

INSERT INTO `Tag` (`id`, `label`, `description`, `idserie`, `add_date`, `mod_date`) VALUES
(3, 'Steel/Colors', 'Aucune description', 4, '2015-04-28 13:50:12', '2015-09-07 15:18:52'),
(4, 'HTML', 'Aucune description', 3, '2015-04-28 19:28:54', '2015-04-28 19:28:54'),
(6, 'Communication', 'Aucune description', 3, '2015-04-28 19:58:31', '2015-09-07 14:55:32'),
(7, 'Money', 'Aucune description', 3, '2015-04-28 19:59:02', '2015-04-28 19:59:02'),
(8, 'Compagny', 'Aucune description', 3, '2015-04-28 20:00:26', '2015-04-28 20:00:26'),
(9, 'Game', 'Aucune description', 3, '2015-04-28 20:00:43', '2015-09-07 14:55:58'),
(10, 'Foreigner', 'Aucune description', 3, '2015-04-28 20:01:39', '2015-09-07 14:56:06'),
(11, 'Deceased', 'Aucune description', 3, '2015-04-28 20:02:14', '2015-09-07 14:56:14'),
(13, 'Me', '1966 : Born in Lyon, France,\r\n1985 : Live and work in Paris, France,\r\n1986-1991 : Assistant painter,\r\n1987 : Series "Les chaises",\r\n1990-1991 : Series "Les nombres",\r\n2006-2010 : Series "HTML",\r\nFrom 1988 to 2015 : Work for a limited company with a share capital of 300 219 278 shares.', 5, '2015-09-07 15:14:01', '2015-09-07 15:18:12'),
(14, 'Steel/Numbers', '', 4, '2015-09-07 15:19:09', '2015-09-07 15:19:09');


--
-- Contenu de la table `tag_index`
--

INSERT INTO `tag_index` (`keyword`, `field`, `position`, `id`) VALUES
('3', 'id', 0, 3),
('4', 'IdSerie', 0, 3),
('colors', 'Label', 1, 3),
('steel', 'Label', 0, 3),
('4', 'id', 0, 4),
('html', 'Label', 0, 4),
('3', 'IdSerie', 0, 6),
('6', 'id', 0, 6),
('communication', 'Label', 0, 6),
('7', 'id', 0, 7),
('money', 'Label', 0, 7),
('8', 'id', 0, 8),
('compagny', 'Label', 0, 8),
('3', 'IdSerie', 0, 9),
('9', 'id', 0, 9),
('game', 'Label', 0, 9),
('10', 'id', 0, 10),
('3', 'IdSerie', 0, 10),
('foreigner', 'Label', 0, 10),
('11', 'id', 0, 11),
('3', 'IdSerie', 0, 11),
('deceased', 'Label', 0, 11),
('13', 'id', 0, 13),
('5', 'IdSerie', 0, 13),
('14', 'id', 0, 14),
('4', 'IdSerie', 0, 14),
('numbers', 'Label', 1, 14),
('steel', 'Label', 0, 14);

--
-- Contenu de la table `photo`
--

INSERT INTO `Photo` (`id`, `label`, `fichier`, `extension`, `description`, `idserie`, `idtag`, `add_date`, `mod_date`) VALUES
(4, 'No title #1', '20150906212526.png', 'Acrylic on canvas, 50 x 50', 'Process started', 3, 4, '2015-04-28 19:31:14', '2015-04-28 19:31:14'),
(5, 'Me', '20150906205559.png', 'Au fond, il y a la couleur', 'When I started to looking for, all was black and white.', 5, 13, '2015-04-28 19:39:16', '2015-09-07 15:15:53'),
(6, 'Speed up', '20150906210012.png', 'Acrylic on canvas, 50 x 50', 'It begins with the body, the HTML language is so constructed', 3, 6, '2015-04-28 20:07:06', '2015-04-28 20:07:06'),
(7, '"How"', '20150906210331.png', 'Acrylic on canvas, 33 x 41', '"How is life"', 3, 6, '2015-04-28 20:09:53', '2015-09-07 14:56:55'),
(8, '"DotCom"', '20150906210457.png', 'Acrylic on canvas, 50 x 50', 'Trade, a speech whose end is known, dot.', 3, 6, '2015-04-28 20:14:49', '2015-04-28 20:16:25'),
(9, 'No title #6', '20150906210552.png', 'Acrylic on canvas, 50 x 50', 'The binary information is obvious, that''s what makes it visible', 3, 6, '2015-04-28 20:20:42', '2015-04-28 20:20:42'),
(10, '"Money"', '20150906210744.png', 'Acrylic on canvas, 60 x 60', 'An abstraction that brings us closer to reality, for our good.', 3, 7, '2015-04-28 20:23:03', '2015-04-28 20:23:03'),
(11, '"MS"', '20150906210837.png', 'Acrylic on canvas, 60 x 60', 'a community, a network, an area where freedom is a rule', 3, 8, '2015-04-28 20:26:25', '2015-04-28 20:26:25'),
(12, '"YWI"', '20150906210924.png', 'Acrylic on canvas, 60 x 60', 'The will goes through the authority', 3, 8, '2015-04-28 20:31:29', '2015-04-28 20:31:29'),
(13, 'No title #4', '20150906211239.png', 'Acrylic on canvas, 130 x 130', 'Rotting to produce. A very long fermentation of organic matter can lead the energy needed for human decay.', 3, 8, '2015-04-28 20:36:10', '2015-09-07 14:57:34'),
(14, 'No title #2', '20150906211442.png', 'Acrylic on canvas, 50 x 50', 'Produce by man, a necessity useful :( without verb :) .', 3, 8, '2015-04-28 20:39:21', '2015-04-28 20:39:21'),
(15, 'No title #3', '20150906211540.png', 'Acrylic on canvas, 60 x 60', 'The process is passed, through it.', 3, 8, '2015-04-28 20:41:59', '2015-04-28 20:41:59'),
(16, '"SW"', '20150906211835.png', 'Acrylic on canvas, 55 x 46', 'The play area of the screen where the vacuum is infinite.', 3, 9, '2015-04-28 20:45:30', '2015-09-07 14:58:04'),
(17, 'No title #5', '20150906212014.png', 'Acrylic on canvas, 55 x 46', 'My screen is human, it sees, it listens, it speaks.', 3, 9, '2015-04-28 20:49:08', '2015-09-07 14:59:03'),
(18, '"numbers"', '20150906212113.png', 'Acrylic on canvas, 61 x 38', 'Because abroad is the source of reason', 3, 10, '2015-04-28 20:52:09', '2015-09-07 15:00:04'),
(19, '"ThiÃƒÂªu"', '20150906212333.png', 'Acrylc on canvas, 130 x 130', 'That forgetfulness of this ash gives us the energy to do. It will take time.', 3, 11, '2015-04-28 20:56:01', '2015-09-07 15:00:36'),
(20, 'No title #1', '20150906212526.png', 'Acrylic on canvas, 33 x 41', 'Without inverted commas, they did.', 3, 11, '2015-04-28 20:59:56', '2015-09-07 15:01:04'),
(21, '"/body"', '20150906212701.png', 'Acrylic on canvas, 130 x 130', 'Limited by the body, the end of a life.', 3, 6, '2015-04-28 21:01:45', '2015-09-07 15:01:34'),
(23, '"AliÃ©nation"', '20150907152613.png', 'Acrylic on canvas and steel, 27 x 22', 'Curves and lines.\r\nLines and curves', 4, 3, '2015-09-07 15:26:18', '2015-09-07 15:26:18'),
(24, 'No title', '20150907153210.png', 'Acrylic on canvas and iron, 27 x 22', 'Bones and products', 4, 3, '2015-09-07 15:32:15', '2015-09-07 15:32:15'),
(25, 'No title', '20150907153755.png', 'Acrylic on canvas and steel, 40 x 40', 'Color, text, steel', 4, 3, '2015-09-07 15:38:01', '2015-09-07 15:38:01');

--
-- Contenu de la table `photo_index`
--

INSERT INTO `photo_index` (`keyword`, `field`, `position`, `id`) VALUES
('1', 'Label', 2, 4),
('4', 'id', 0, 4),
('title', 'Label', 1, 4),
('13', 'IdTag', 0, 5),
('5', 'id', 0, 5),
('5', 'IdSerie', 0, 5),
('6', 'id', 0, 6),
('speed', 'Label', 0, 6),
('3', 'IdSerie', 0, 7),
('6', 'IdTag', 0, 7),
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
('3', 'IdSerie', 0, 13),
('4', 'Label', 2, 13),
('8', 'IdTag', 0, 13),
('title', 'Label', 1, 13),
('14', 'id', 0, 14),
('2', 'Label', 2, 14),
('title', 'Label', 1, 14),
('15', 'id', 0, 15),
('3', 'Label', 2, 15),
('title', 'Label', 1, 15),
('16', 'id', 0, 16),
('3', 'IdSerie', 0, 16),
('9', 'IdTag', 0, 16),
('sw', 'Label', 0, 16),
('17', 'id', 0, 17),
('3', 'IdSerie', 0, 17),
('5', 'Label', 2, 17),
('9', 'IdTag', 0, 17),
('title', 'Label', 1, 17),
('10', 'IdTag', 0, 18),
('18', 'id', 0, 18),
('3', 'IdSerie', 0, 18),
('numbers', 'Label', 0, 18),
('11', 'IdTag', 0, 19),
('19', 'id', 0, 19),
('3', 'IdSerie', 0, 19),
('thieu', 'Label', 0, 19),
('1', 'Label', 2, 20),
('11', 'IdTag', 0, 20),
('20', 'id', 0, 20),
('3', 'IdSerie', 0, 20),
('title', 'Label', 1, 20),
('21', 'id', 0, 21),
('3', 'IdSerie', 0, 21),
('6', 'IdTag', 0, 21),
('body', 'Label', 1, 21),
('23', 'id', 0, 23),
('3', 'IdTag', 0, 23),
('4', 'IdSerie', 0, 23),
('alienation', 'Label', 0, 23),
('24', 'id', 0, 24),
('3', 'IdTag', 0, 24),
('4', 'IdSerie', 0, 24),
('title', 'Label', 1, 24),
('25', 'id', 0, 25),
('3', 'IdTag', 0, 25),
('4', 'IdSerie', 0, 25),
('title', 'Label', 1, 25);

--
-- Contenu de la table `introduction`
--

INSERT INTO `Introduction` (`id`, `text`, `add_date`, `mod_date`) VALUES
(1, 'Color of the senses', '2015-07-23 00:00:00', '2015-09-07 10:07:52');


INSERT INTO `introduction_index` (`keyword`, `field`, `position`, `id`) VALUES
('1', 'id', 0, 1),
('color', 'Text', 0, 1),
('senses', 'Text', 3, 1);