-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Ápr 18. 12:03
-- Kiszolgáló verziója: 10.4.6-MariaDB
-- PHP verzió: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `vadaspark`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `etetes`
--

CREATE TABLE `etetes` (
  `etetesid` bigint(10) NOT NULL,
  `megnev` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `idopont` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `kep` varchar(50) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `etetes`
--

INSERT INTO `etetes` (`etetesid`, `megnev`, `idopont`, `kep`) VALUES
(1, 'Pingvinek látványetetése', 'Kedd, péntek 14:00 - 14:15', 'pingvinetetes.jpg'),
(2, 'Óriás teknősök etetése', 'Hétfő, szerda 10:00 - 10:30', 'teknosetetes.jpg'),
(3, 'Tigrisek déli etetése', 'Csütörtök 12:00 - 12:30', 'tigrisetetes.jpg'),
(4, 'Majomparádé - hosszú farkú makákó', 'Szerda, szombat 14:00 - 15:00', 'majometetes.jpg'),
(5, 'Vidrák etetése', 'Vasárnap 10:00 - 10:30  ', 'vidraetetes.jpg');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `hirlevel`
--

CREATE TABLE `hirlevel` (
  `email` varchar(50) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `menu`
--

CREATE TABLE `menu` (
  `menuid` varchar(10) COLLATE utf8_hungarian_ci NOT NULL,
  `megnev` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `leiras` varchar(250) COLLATE utf8_hungarian_ci NOT NULL,
  `ar` bigint(10) NOT NULL,
  `kep` varchar(50) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `menu`
--

INSERT INTO `menu` (`menuid`, `megnev`, `leiras`, `ar`, `kep`) VALUES
('E1', 'Hot-dog', 'Hot-dog kifli, virsli, feltét', 700, 'hot-dog.jpg'),
('E2', 'Virsli / kolbász', '1 pár virsli vagy 1 db kolbász', 600, 'virsli.jpg'),
('E3', 'Sültburgonya', 'Sültburgonya', 400, 'sultkrumpli.jpg'),
('F1', 'Feltét', 'Ketchup, majonéz, mustár', 50, 'feltet.jpg'),
('H1', 'Zsiráf burger', 'Buci, husi, saláta, sajt, ubi, paradicsom', 1100, 'burger-min.png'),
('I1', 'Üdítők', 'Szénsavas üdítők', 500, 'szensavasudito.jpg'),
('I2', 'Kávé', 'Espresso kávé', 450, 'espresso.png'),
('I3', 'Capuccino', 'Capuccino', 400, 'capuccino.png'),
('M1', 'Farkas menü', '2 fasírt, sültburgonya', 1300, 'farkasmenu.jpg'),
('M2', 'Farkas kölyök menü', '1 fasírt, sültburgonya', 1000, 'farkaskolyokmenu.jpg'),
('M3', 'Teknős menü', 'Görögsaláta', 900, 'gorogsalata.jpg'),
('M4', 'Szurikáta menü', '1 töltött rántott szelet, petrezselymes burgonya', 1200, 'szurikatamenu.jpg');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `orokbefogadas`
--

CREATE TABLE `orokbefogadas` (
  `nev` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `telszam` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `allatneve` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `osszeg` bigint(50) NOT NULL,
  `fizetes` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `megj` varchar(50) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `etetes`
--
ALTER TABLE `etetes`
  ADD PRIMARY KEY (`etetesid`);

--
-- A tábla indexei `hirlevel`
--
ALTER TABLE `hirlevel`
  ADD PRIMARY KEY (`email`);

--
-- A tábla indexei `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menuid`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `etetes`
--
ALTER TABLE `etetes`
  MODIFY `etetesid` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
