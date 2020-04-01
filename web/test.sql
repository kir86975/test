-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 15 2016 г., 21:16
-- Версия сервера: 5.5.45
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tree`
--

CREATE TABLE IF NOT EXISTS `tree` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `parent` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `parent_ind` (`parent`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=156 ;

--
-- Дамп данных таблицы `tree`
--

INSERT INTO `tree` (`id`, `name`, `parent`) VALUES
(1, 'teterin.bogdan', 0),
(2, 'viktor.misin', 0),
(3, 'valeria.vasilev', 0),
(4, 'nelli.zuravlev', 0),
(5, 'sava.ponomarev', 0),
(6, 'kudrasov.viktoria', 5),
(7, 'mignatev', 2),
(8, 'uvarov.ludmila', 4),
(9, 'svoroncov', 3),
(10, 'vsevolod.pestov', 3),
(11, 'boris.potapov', 3),
(12, 'bykov.stepan', 1),
(13, 'emma23', 1),
(14, 'sergej37', 1),
(15, 'klara15', 3),
(16, 'rvorobev', 12),
(17, 'valeria.safonov', 11),
(18, 'veselov.david', 7),
(19, 'bstepanov', 15),
(20, 'msokolov', 6),
(21, 'iskra40', 10),
(22, 'kuzmin.eduard', 10),
(23, 'pahomov.zinaida', 9),
(24, 'eturov', 14),
(25, 'raisa.naumov', 13),
(26, 'regina.bobrov', 7),
(27, 'isitnikov', 7),
(28, 'oersov', 10),
(29, 'inna.gurev', 15),
(30, 'zinaida.andreev', 15),
(31, 'psarov', 15),
(32, 'konstantin24', 10),
(33, 'bogdan29', 12),
(34, 'nekrasov.aleksandra', 6),
(35, 'sysoev.adrian', 8),
(36, 'ebolsakov', 30),
(37, 'vladimirov.milan', 21),
(38, 'puvarov', 27),
(39, 'sysoev.oleg', 23),
(40, 'zfedotov', 19),
(41, 'klara.bobylev', 29),
(42, 'lapin.veronika', 26),
(43, 'martemev', 24),
(44, 'iraklij83', 27),
(45, 'zahar.morozov', 25),
(46, 'euvarov', 31),
(47, 'subin.milan', 26),
(48, 'aroslava.grigorev', 27),
(49, 'adam11', 17),
(50, 'doronin.zanna', 29),
(51, 'cernov.pavel', 29),
(52, 'zsuhanov', 20),
(53, 'alisa77', 20),
(54, 'edanilov', 24),
(55, 'grigorij.kotov', 21),
(56, 'sprohorov', 18),
(57, 'hodincov', 25),
(58, 'tsubbotin', 17),
(59, 'stepan66', 17),
(60, 'faina.kudrasov', 19),
(61, 'ivan60', 16),
(62, 'mevseev', 18),
(63, 'ulia.rodionov', 35),
(64, 'gsarov', 22),
(65, 'ztihonov', 17),
(66, 'bolsakov.david', 43),
(67, 'kotov.igor', 41),
(68, 'tersov', 39),
(69, 'ctimofeev', 63),
(70, 'svatoslav.sysoev', 57),
(71, 'afanasij33', 56),
(72, 'nelli75', 39),
(73, 'zanna.semenov', 36),
(74, 'edenisov', 45),
(75, 'daniil93', 63),
(76, 'kostin.ila', 52),
(77, 'bobylev.valerij', 44),
(78, 'tretakov.ruslan', 61),
(79, 'fnesterov', 39),
(80, 'tarasov.faina', 56),
(81, 'rafail.veselov', 36),
(82, 'vladlena.akusev', 59),
(83, 'klara.komarov', 49),
(84, 'klementina90', 47),
(85, 'inna97', 52),
(86, 'timur78', 45),
(87, 'rozalina58', 45),
(88, 'gulaev.daniil', 57),
(89, 'sgurev', 37),
(90, 'xpestov', 47),
(91, 'kondratev.inna', 38),
(92, 'sorokin.adam', 62),
(93, 'gurev.tit', 43),
(94, 'filippov.ulana', 51),
(95, 'abram12', 36),
(96, 'german32', 64),
(97, 'doronin.avgust', 54),
(98, 'svatoslav.ignatev', 37),
(99, 'tfilatov', 40),
(100, 'galina47', 60),
(101, 'oksana.kopylov', 50),
(102, 'rada.konovalov', 40),
(103, 'tgurev', 58),
(104, 'lubov.bolsakov', 38),
(105, 'vil90', 55),
(106, 'fnazarov', 80),
(107, 'uvoroncov', 78),
(108, 'gorskov.abram', 70),
(109, 'visnakov.ulana', 90),
(110, 'evgenij.afanasev', 91),
(111, 'dsobolev', 73),
(112, 'skovalev', 92),
(113, 'stanislav13', 72),
(114, 'raisa.orlov', 102),
(115, 'diana.lukin', 101),
(116, 'nikolaev.savva', 86),
(117, 'vlad.kovalev', 75),
(118, 'moiseev.feliks', 83),
(119, 'irina.petrov', 92),
(120, 'emma.noskov', 103),
(121, 'lilia72', 85),
(122, 'eva.lazarev', 68),
(123, 'ygalkin', 73),
(124, 'rodion37', 84),
(125, 'trofim01', 87),
(126, 'ignatij10', 80),
(127, 'inga.nikolaev', 77),
(128, 'lusa38', 104),
(129, 'aleksandr71', 87),
(130, 'ggulaev', 82),
(131, 'oleg76', 66),
(132, 'lilia79', 77),
(133, 'roman.potapov', 69),
(134, 'dmamontov', 73),
(135, 'dobryna.solovev', 80),
(136, 'emilia28', 68),
(137, 'zuev.raisa', 91),
(138, 'marta.ersov', 66),
(139, 'noskov.maja', 82),
(140, 'hohlov.dominika', 77),
(141, 'zlata.smirnov', 98),
(142, 'izolda40', 73),
(143, 'oharitonov', 105),
(144, 'emartynov', 87),
(145, 'akim.zimin', 97),
(146, 'cstrelkov', 68),
(147, 'izabella63', 97),
(148, 'ykulagin', 97),
(149, 'timur.kulagin', 104),
(150, 'alisa.molcanov', 77),
(151, 'fanisimov', 67),
(152, 'timur90', 96),
(153, 'belov.nadezda', 101),
(154, 'eudin', 81),
(155, 'nsaskov', 101);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
