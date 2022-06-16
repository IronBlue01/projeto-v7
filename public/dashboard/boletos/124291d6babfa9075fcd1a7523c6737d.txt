-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Jun-2022 às 13:11
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `v7formaturas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

DROP TABLE IF EXISTS `adm`;
CREATE TABLE IF NOT EXISTS `adm` (
  `id_adm` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `senha` varchar(500) NOT NULL,
  PRIMARY KEY (`id_adm`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id_adm`, `nome`, `username`, `senha`) VALUES
(1, 'Danilo Henrique', '@danilo', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `boletos`
--

DROP TABLE IF EXISTS `boletos`;
CREATE TABLE IF NOT EXISTS `boletos` (
  `id_boleto` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `arquivo` varchar(600) NOT NULL,
  `data` varchar(400) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_boleto`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `link_drive` varchar(300) DEFAULT NULL,
  `arquivo` varchar(255) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `senha` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `clientes_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `username`, `email`, `link_drive`, `arquivo`, `data`, `status`, `senha`, `created_at`, `updated_at`) VALUES
(8, 'Vitor Gabriel', NULL, 'meulink.com.br', NULL, NULL, '2022-06-22', NULL, '123', '2022-06-15 06:29:59', '2022-06-15 06:29:59'),
(9, 'Danilo xiomi', NULL, 'linkdodrive.com', NULL, NULL, '2022-06-30', NULL, '123', '2022-06-15 06:30:44', '2022-06-15 06:30:44'),
(10, 'Andressa Camargo', NULL, 'move.com.br', NULL, NULL, '2022-06-22', NULL, '333', '2022-06-15 19:38:20', '2022-06-15 19:38:20'),
(11, 'Danilo Henrique', NULL, 'danilo18programador@gmail.com', 'meulink.com.br', NULL, '2022-06-16', NULL, '456', '2022-06-15 19:44:28', '2022-06-15 19:44:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2022_06_14_204712_create_clientes_table', 1),
(4, '2022_06_14_211754_update_table_clientes_columns', 2),
(5, '2022_06_14_213625_update_clientes_table_link_drive', 3),
(6, '2022_06_14_214941_update_clientes_table_all_collumns', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
