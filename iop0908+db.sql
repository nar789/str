-- phpMyAdmin SQL Dump
-- version 4.4.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- 생성 시간: 17-12-08 16:23
-- 서버 버전: 10.1.13-MariaDB
-- PHP 버전: 7.0.0p1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 데이터베이스: `iop0908`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `ad`
--

CREATE TABLE IF NOT EXISTS `ad` (
  `no` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `ad`
--

INSERT INTO `ad` (`no`, `img`, `url`) VALUES
(1, 'http://iop0908.cafe24.com/stradmin/pf/1512706390307664.PNG', 'http://naver.com');

-- --------------------------------------------------------

--
-- 테이블 구조 `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL,
  `ban` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `chat`
--

INSERT INTO `chat` (`id`, `ban`) VALUES
(1, '%EC%83%88%EB%81%BC%2C%20%EA%B0%9C%EC%83%88%EB%81%BC%2C%20%EA%BA%BC%EC%A0%B8%2C%EC%8B%9C%EB%B0%9C%EB%86%88%2C%EC%B9%B4%ED%86%A1');

-- --------------------------------------------------------

--
-- 테이블 구조 `m`
--

CREATE TABLE IF NOT EXISTS `m` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `title` text,
  `cmd` text,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `m`
--

INSERT INTO `m` (`id`, `img`, `title`, `cmd`, `url`) VALUES
(5, 'http://iop0908.cafe24.com/stradmin/pf/1512107451496930.JPG', '%EC%9B%90%EB%82%98%EC%9E%87%ED%8C%8C%ED%8A%B8%EB%84%88%20', '%ED%85%8C%EC%8A%A4%ED%8A%B8%EC%9E%85%EB%8B%88%EB%8B%A4%20', 'market://details?id=com.daldalting.app'),
(6, 'http://iop0908.cafe24.com/stradmin/pf/1512355338946600.JPG', '%ED%85%8C%EC%8A%A4%ED%8A%B8%20', '%ED%85%8C%EC%8A%A4%ED%8A%B8%20', 'market://details?id=com.daldalting.app');

-- --------------------------------------------------------

--
-- 테이블 구조 `p`
--

CREATE TABLE IF NOT EXISTS `p` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `cmd` text,
  `num` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `p`
--

INSERT INTO `p` (`id`, `img`, `cmd`, `num`) VALUES
(2, 'http://iop0908.cafe24.com/stradmin/pf/1512355270519297.JPG', '%EC%9D%B8%ED%98%95%EA%B0%99%EC%9D%B4%20%EC%98%88%EC%81%9C%20%EC%8A%A4%ED%83%80%EC%9D%BC%EC%9D%80%20%EC%95%84%EB%8B%88%EC%A7%80%EB%A7%8C%20%EC%A7%88%EB%A6%AC%EC%A7%80%20%EC%95%8A%EB%8A%94%20%EC%B9%B4%EB%A9%9C%EB%A0%88%EC%98%A8%20%EA%B0%99%EC%9D%80%20%EB%A7%A4%EB%A0%A5%EC%9D%98%20%EC%8A%A4%ED%83%80%EC%9D%BC%20%EC%9E%85%EB%8B%88%EB%8B%A4.%0A%EC%99%80%EC%9D%B8(%EC%86%8C%EB%AF%88%EB%A6%AC%EC%97%90)%EC%AA%BD%20%EC%A0%84%EA%B3%B5%EC%9D%84%20%EC%9E%A0%EA%B9%90%20%ED%96%88%EC%97%88%EA%B3%A0%20%ED%98%84%EC%9E%AC%EB%8A%94%20%EA%B0%80%EC%A3%BD%20%EA%B3%B5%EC%98%88%20%EB%94%94%EC%9E%90%EC%9D%B8%20%EA%B4%80%EB%A0%A8%EC%9C%BC%EB%A1%9C%20%EC%9D%BC%ED%95%B4%EC%9A%94%20%3A)', '01022223333'),
(3, 'http://iop0908.cafe24.com/stradmin/pf/1512355280110484.JPG', '%EC%9D%B8%ED%98%95%EA%B0%99%EC%9D%B4%20%EC%98%88%EC%81%9C%20%EC%8A%A4%ED%83%80%EC%9D%BC%EC%9D%80%20%EC%95%84%EB%8B%88%EC%A7%80%EB%A7%8C%20%EC%A7%88%EB%A6%AC%EC%A7%80%20%EC%95%8A%EB%8A%94%20%EC%B9%B4%EB%A9%9C%EB%A0%88%EC%98%A8%20%EA%B0%99%EC%9D%80%20%EB%A7%A4%EB%A0%A5%EC%9D%98%20%EC%8A%A4%ED%83%80%EC%9D%BC%20%EC%9E%85%EB%8B%88%EB%8B%A4.%0A%EC%99%80%EC%9D%B8(%EC%86%8C%EB%AF%88%EB%A6%AC%EC%97%90)%EC%AA%BD%20%EC%A0%84%EA%B3%B5%EC%9D%84%20%EC%9E%A0%EA%B9%90%20%ED%96%88%EC%97%88%EA%B3%A0%20%ED%98%84%EC%9E%AC%EB%8A%94%20%EA%B0%80%EC%A3%BD%20%EA%B3%B5%EC%98%88%20%EB%94%94%EC%9E%90%EC%9D%B8%20%EA%B4%80%EB%A0%A8%EC%9C%BC%EB%A1%9C%20%EC%9D%BC%ED%95%B4%EC%9A%94%20%3A)', '01033334444'),
(6, 'http://iop0908.cafe24.com/stradmin/pf/1512106559371909.JPG', '%ED%85%8C%EC%8A%A4%ED%8A%B8%20', '01022223333'),
(7, 'http://iop0908.cafe24.com/stradmin/pf/1512106572524605.JPG', '%ED%85%8C%EC%8A%A4%ED%8A%B8%20', '01022223333'),
(8, 'http://iop0908.cafe24.com/stradmin/pf/1512355257189299.JPG', '%ED%85%8C%EC%8A%A4%ED%8A%B8%20', '01022223333'),
(9, 'http://iop0908.cafe24.com/stradmin/pf/1512106595648335.JPG', '%E3%85%87%E3%85%87', '테스트 '),
(10, 'http://iop0908.cafe24.com/stradmin/pf/1512107326942382.JPG', '%ED%85%8C%EC%8A%A4%ED%8A%B8%EC%9E%85%EB%8B%88%EB%8B%A4%20', '01022223333'),
(11, 'http://iop0908.cafe24.com/stradmin/pf/1512107341551984.JPG', '%ED%85%8C%EC%8A%A4%ED%8A%B8%EC%9E%85%EB%8B%88%EB%8B%A4%20', '01022223333');

-- --------------------------------------------------------

--
-- 테이블 구조 `r`
--

CREATE TABLE IF NOT EXISTS `r` (
  `id` int(11) NOT NULL,
  `target` int(11) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `msg` text,
  `upd` tinyint(1) DEFAULT NULL,
  `r` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `r`
--

INSERT INTO `r` (`id`, `target`, `time`, `msg`, `upd`, `r`) VALUES
(28, 29, '2017-12-08 13:42:31', '', 0, 703084958);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `m`
--
ALTER TABLE `m`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `p`
--
ALTER TABLE `p`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `r`
--
ALTER TABLE `r`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `ad`
--
ALTER TABLE `ad`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- 테이블의 AUTO_INCREMENT `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- 테이블의 AUTO_INCREMENT `m`
--
ALTER TABLE `m`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- 테이블의 AUTO_INCREMENT `p`
--
ALTER TABLE `p`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- 테이블의 AUTO_INCREMENT `r`
--
ALTER TABLE `r`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
