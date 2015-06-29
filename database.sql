INSERT INTO `serie` (`id`, `label`, `description`, `add_date`, `mod_date`) VALUES
(1, 'jazz', 'papapapa', '2015-06-26 15:49:51', '2015-06-26 15:49:51'),
(2, 'montagne', 'des montagnes', '2015-06-29 19:05:01', '2015-06-29 19:05:01'),
(3, 'Mer', 'des photos de la mer', '2015-06-29 19:05:19', '2015-06-29 19:05:19');

INSERT INTO `serie_index` (`keyword`, `field`, `position`, `id`) VALUES
('1', 'id', 0, 1),
('jazz', 'Label', 0, 1),
('2', 'id', 0, 2),
('montagne', 'Label', 0, 2),
('3', 'id', 0, 3),
('mer', 'Label', 0, 3);

INSERT INTO `tag` (`id`, `label`, `description`, `idserie`, `add_date`, `mod_date`) VALUES
(1, 'toto', 'mamamama', 1, '2015-06-26 15:50:09', '2015-06-26 15:50:09'),
(2, 'marÃ©e', 'de la mare', 3, '2015-06-29 19:05:42', '2015-06-29 19:05:42'),
(3, 'riviere', 'photo de riviere', 3, '2015-06-29 19:06:02', '2015-06-29 19:06:02'),
(4, 'everest', 'photo de l''everest', 2, '2015-06-29 19:07:56', '2015-06-29 19:07:56'),
(5, 'mont blanc', 'photo du mont blanc', 2, '2015-06-29 19:08:14', '2015-06-29 19:08:14');

INSERT INTO `tag_index` (`keyword`, `field`, `position`, `id`) VALUES
('1', 'id', 0, 1),
('1', 'IdSerie', 0, 1),
('toto', 'Label', 0, 1),
('2', 'id', 0, 2),
('3', 'IdSerie', 0, 2),
('maree', 'Label', 0, 2),
('3', 'id', 0, 3),
('3', 'IdSerie', 0, 3),
('riviere', 'Label', 0, 3),
('2', 'IdSerie', 0, 4),
('4', 'id', 0, 4),
('everest', 'Label', 0, 4),
('2', 'IdSerie', 0, 5),
('5', 'id', 0, 5),
('blanc', 'Label', 1, 5),
('mont', 'Label', 0, 5);