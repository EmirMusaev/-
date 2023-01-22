-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 22 2023 г., 14:02
-- Версия сервера: 8.0.31
-- Версия PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `library`
--

-- --------------------------------------------------------

--
-- Структура таблицы `author`
--

CREATE TABLE `author` (
  `Id` int NOT NULL,
  `Name` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `Surname` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `MiddleName` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Phone` varchar(13) COLLATE utf8mb4_general_ci NOT NULL,
  `City` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `Nickname` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `author`
--

INSERT INTO `author` (`Id`, `Name`, `Surname`, `MiddleName`, `Phone`, `City`, `Nickname`) VALUES
(1, 'Yaya', 'Cromin', '', '89787134212', 'Simfero', 'Yacrin');

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `ISBN` int NOT NULL,
  `Name` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `DateCreate` year NOT NULL,
  `Pages` int NOT NULL,
  `Cost` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `Sum` int NOT NULL,
  `Substract` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `Author_Id` int NOT NULL,
  `Publisher_Id` int NOT NULL,
  `User_Id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`ISBN`, `Name`, `DateCreate`, `Pages`, `Cost`, `Sum`, `Substract`, `Author_Id`, `Publisher_Id`, `User_Id`) VALUES
(125287, 'Yato_Cor', 2022, 180, '1500', 5, 'About me', 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `books_has_genre`
--

CREATE TABLE `books_has_genre` (
  `Books_Id` int NOT NULL,
  `Genre_Id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `genre`
--

CREATE TABLE `genre` (
  `Id` int NOT NULL,
  `Name` varchar(45) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `publisher`
--

CREATE TABLE `publisher` (
  `Id` int NOT NULL,
  `Name` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `City` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `Street` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `HomeNum` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `Mail` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Phone` varchar(13) COLLATE utf8mb4_general_ci NOT NULL,
  `Website` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `publisher`
--

INSERT INTO `publisher` (`Id`, `Name`, `City`, `Street`, `HomeNum`, `Mail`, `Phone`, `Website`) VALUES
(1, 'Create', 'Simfero', 'Gromov', '5A', 'create@gmail.com', '89754368412', 'none');

-- --------------------------------------------------------

--
-- Структура таблицы `readers`
--

CREATE TABLE `readers` (
  `Id` int NOT NULL,
  `Name` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `Surname` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `MiddleName` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Phone` varchar(13) COLLATE utf8mb4_general_ci NOT NULL,
  `Mail` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `City` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `Street` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `HomeNum` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `Pass` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `TimeStart` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `readers`
--

INSERT INTO `readers` (`Id`, `Name`, `Surname`, `MiddleName`, `Phone`, `Mail`, `City`, `Street`, `HomeNum`, `Pass`, `TimeStart`) VALUES
(1, 'root', 'rooter', 'rooterstor', '89571653245', 'root@root.com', 'Simfero', 'Turda', '95A', '', '2023-01-03 16:02:06'),
(2, '1', '2', '3', '4', '5', '6', '1', '1', '$2y$10$VS6pqe1jwBsr/ptWrR6WI.o1zyABJ3y0kuOUmsxFh9EhSth9Zd0jm', '2023-01-08 16:01:50'),
(3, '1', '2', '3', '4', '5', '6', '1', '1', '$2y$10$t/fKRjks3n2W3Q4cBe1LZ.vD6L1fhIiDHoSayxD.aLPhYFtUkY7Y6', '2023-01-08 16:02:28'),
(4, '11', '22', '33', '44', '55', '66', '11', '11', '$2y$10$X8JAKojm9rqPbGGtm65D5.64io7RDxlZBL8rs/uqlKcEjzstp7xW.', '2023-01-08 18:02:37');

-- --------------------------------------------------------

--
-- Структура таблицы `request`
--

CREATE TABLE `request` (
  `Id` int NOT NULL,
  `Sum` int NOT NULL,
  `CreateTime` timestamp NOT NULL,
  `Readers_Id` int DEFAULT NULL,
  `Books_Id` int DEFAULT NULL,
  `User_Id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `Id` int NOT NULL,
  `Name` varchar(45) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`Id`, `Name`) VALUES
(1, 'admin'),
(2, 'Helper');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `Id` int NOT NULL,
  `username` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Role_Id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`Id`, `username`, `email`, `password`, `create_time`, `Role_Id`) VALUES
(1, 'mareno52', 'marik@gmail.com', '000000', '2023-01-03 16:06:08', 1),
(2, 'Poko', 'poko@gmail.com', '012345', '2023-01-03 16:57:04', 2),
(3, 'Chinu', 'chiny@gmail.com', '741852', '2023-01-03 16:57:04', 2),
(4, 'Carlo', 'carlo@gmail.com', '987654', '2023-01-03 17:36:40', 2),
(8, 'Carlo', 'carlo@gmail.com', '987654', '2023-01-03 17:42:47', 2),
(9, 'crack952', 'cricri@gmail.com', '132crack', '2023-01-03 18:47:03', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ISBN`),
  ADD KEY `ISBN` (`ISBN`),
  ADD KEY `Author_Id` (`Author_Id`),
  ADD KEY `Publisher_Id` (`Publisher_Id`),
  ADD KEY `User_Id` (`User_Id`);

--
-- Индексы таблицы `books_has_genre`
--
ALTER TABLE `books_has_genre`
  ADD KEY `books_has_genre_ibfk_1` (`Books_Id`),
  ADD KEY `Genre_Id` (`Genre_Id`);

--
-- Индексы таблицы `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`);

--
-- Индексы таблицы `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `readers`
--
ALTER TABLE `readers`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Books_Id` (`Books_Id`),
  ADD KEY `Readers_Id` (`Readers_Id`),
  ADD KEY `User_Id` (`User_Id`);

--
-- Индексы таблицы `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Role_Id` (`Role_Id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `author`
--
ALTER TABLE `author`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `ISBN` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125288;

--
-- AUTO_INCREMENT для таблицы `genre`
--
ALTER TABLE `genre`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `publisher`
--
ALTER TABLE `publisher`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `readers`
--
ALTER TABLE `readers`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `request`
--
ALTER TABLE `request`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `role`
--
ALTER TABLE `role`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`Author_Id`) REFERENCES `author` (`Id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`Publisher_Id`) REFERENCES `publisher` (`Id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `books_ibfk_3` FOREIGN KEY (`User_Id`) REFERENCES `user` (`Id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `books_has_genre`
--
ALTER TABLE `books_has_genre`
  ADD CONSTRAINT `books_has_genre_ibfk_1` FOREIGN KEY (`Books_Id`) REFERENCES `books` (`ISBN`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `books_has_genre_ibfk_2` FOREIGN KEY (`Genre_Id`) REFERENCES `genre` (`Id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`Books_Id`) REFERENCES `books` (`ISBN`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`Readers_Id`) REFERENCES `readers` (`Id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `request_ibfk_3` FOREIGN KEY (`User_Id`) REFERENCES `user` (`Id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Role_Id`) REFERENCES `role` (`Id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
