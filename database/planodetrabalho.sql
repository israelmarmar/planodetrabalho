-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 26/06/2019 às 20:16
-- Versão do servidor: 10.1.38-MariaDB
-- Versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `planodetrabalho`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `atividade`
--

CREATE TABLE `atividade` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NomeProcesso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planodetrabalho_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `atividade`
--

INSERT INTO `atividade` (`id`, `NomeProcesso`, `planodetrabalho_id`, `created_at`, `updated_at`) VALUES
(1, 'ver atividades', 1, '2019-06-04 03:42:09', '2019-06-04 03:42:09');

-- --------------------------------------------------------

--
-- Estrutura para tabela `configuracao`
--

CREATE TABLE `configuracao` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Implementacao_ferramentas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Levantamento_ativos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cadastro_ferramenta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Implementacao_processo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Acompanhamento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `atividade_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `diaria`
--

CREATE TABLE `diaria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `RotinaDefinida` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Checagem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `Backup` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `Manutencao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '[{"Item":"","Status":"A fazer"}]',
  `Status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A fazer',
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `datainicio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datafim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacoes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metamensuravel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resultado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `diaria`
--

INSERT INTO `diaria` (`id`, `RotinaDefinida`, `Checagem`, `Backup`, `Manutencao`, `Status`, `meta_id`, `created_at`, `updated_at`, `datainicio`, `datafim`, `observacoes`, `metamensuravel`, `resultado`) VALUES
(63, 'manter 5 horas de atividade de rede', '0', '0', '[{\"Item\":\"\",\"Status\":\"A fazer\"}]', 'A fazer', 1, '2019-06-19 19:17:28', '2019-06-19 19:20:00', '2019-06-19', '2019-06-19', 'manter 5 horas de inatividadde', '5', '2'),
(64, 'manter 5 horas de atividade de rede', '0', '0', '[{\"Item\":\"\",\"Status\":\"A fazer\"}]', 'A fazer', 1, '2019-06-19 19:17:28', '2019-06-19 19:18:35', '2019-06-20', '2019-06-20', 'manter 5 horas de inatividadde', '5', '2'),
(65, 'manter 5 horas de atividade de rede', '0', '0', '[{\"Item\":\"\",\"Status\":\"A fazer\"}]', 'A fazer', 1, '2019-06-19 19:17:28', '2019-06-19 19:17:48', '2019-06-21', '2019-06-21', 'manter 5 horas de inatividadde', '5', '3');

-- --------------------------------------------------------

--
-- Estrutura para tabela `incidente`
--

CREATE TABLE `incidente` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Causa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tempo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Solucao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Implantacao_solucao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `atividade_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `incidente`
--

INSERT INTO `incidente` (`id`, `Causa`, `Tempo`, `Solucao`, `Implantacao_solucao`, `Status`, `atividade_id`, `created_at`, `updated_at`) VALUES
(1, 'instabilidade', '5h', 'gambiarra', '0', '0', 1, '2019-06-06 04:19:01', '2019-06-06 04:19:01'),
(2, 'queima do sistema', '11h', 'gambiarra', '0', '0', 1, '2019-06-06 04:48:00', '2019-06-06 04:48:00'),
(3, 'lentidao', '1h', 'reiniciar', '0', '0', 1, '2019-06-06 04:51:19', '2019-06-06 04:51:19'),
(4, 'gfhdfdhdsfh', '3h', 'dfhsdghfsagasdg', '0', '0', 1, '2019-06-06 05:25:06', '2019-06-06 05:25:06'),
(5, 'lento', '1h', 'GHJFJFDHFDGSDFG', '0', '0', 1, '2019-06-06 05:27:10', '2019-06-06 05:27:10'),
(6, 'fjfjgfghdfhgesrher', '1h', 'fjdgfhsdhdsfhsdfh', '0', '0', 1, '2019-06-06 05:28:56', '2019-06-06 05:28:56'),
(7, 'zzzzzzzzzzzzzz', '3h', 'hgfjfghsdfhsdfhdfhdsfhsdfh', '0', '0', 1, '2019-06-06 05:30:50', '2019-06-06 05:30:50'),
(8, 'dfgsfgsf', '3h', 'zzzzzzzzzzzzzzzzzz', '0', '0', 1, '2019-06-06 05:33:02', '2019-06-06 05:33:02'),
(9, 'teste', '3h', 'fgdfgsdfg', '0', '0', 1, '2019-06-06 05:34:14', '2019-06-06 05:34:14'),
(10, 'teste3', '5h', 'fdhdfsgsafgasfasfasfassf', '0', '0', 1, '2019-06-06 05:35:28', '2019-06-06 05:35:28'),
(11, 'testerelf', '1h', 'gdfgdsfhgdsfg', '0', '0', 1, '2019-06-06 05:36:34', '2019-06-06 05:36:34');

-- --------------------------------------------------------

--
-- Estrutura para tabela `mensal`
--

CREATE TABLE `mensal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `mensal`
--

INSERT INTO `mensal` (`id`, `Status`, `meta_id`, `created_at`, `updated_at`) VALUES
(1, 'incompleto', 1, '2019-06-07 05:31:53', '2019-06-07 05:31:53');

-- --------------------------------------------------------

--
-- Estrutura para tabela `meta`
--

CREATE TABLE `meta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Atividade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Responsavel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planodetrabalho_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `meta`
--

INSERT INTO `meta` (`id`, `Atividade`, `Responsavel`, `planodetrabalho_id`, `created_at`, `updated_at`) VALUES
(1, 'analise de rede', '77', 1, '2019-06-04 05:24:01', '2019-06-04 05:24:01'),
(2, 'analise de codigos', 'fulano', 1, '2019-06-07 01:50:18', '2019-06-07 01:50:18'),
(3, 'analise de cabos', 'edson', 1, '2019-06-07 02:00:21', '2019-06-07 02:00:21'),
(4, 'fgsdfg', 'dsfgsdf', 1, '2019-06-07 03:44:59', '2019-06-07 03:44:59');

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_05_01_163850_create_planodetrabalho_table', 1),
(2, '2019_05_02_152701_create_atividade_table', 1),
(3, '2019_05_02_165852_create_meta_table', 1),
(4, '2019_05_02_214406_create_users_table', 1),
(5, '2019_05_02_214656_create_password_resets_table', 1),
(6, '2019_05_04_125314_create_diaria_table', 1),
(7, '2019_05_04_131041_create_semanal_table', 1),
(8, '2019_05_04_131151_create_mensal_table', 1),
(9, '2019_05_10_171838_create_configuracao_table', 1),
(10, '2019_05_10_172422_create_incidente_table', 1),
(11, '2019_05_10_175009_create_problema_table', 1),
(12, '2019_05_10_180130_create_mudanca_table', 1),
(13, '2019_05_10_183409_create_operacao_table', 1),
(14, '2019_05_10_235747_create_relatorio_table', 1),
(15, '2019_06_12_020259_add__datainicio__datafim__observacoes_to_diaria_table', 2),
(16, '2019_06_12_171643_add__datainicio__datafim__observacoes_to_semanal_table', 3),
(17, '2019_06_14_164847_add_metamensuravel_resultado_to_diaria_table', 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `mudanca`
--

CREATE TABLE `mudanca` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Customizacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Implantacao_processo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Acompanhamento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `atividade_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `operacao`
--

CREATE TABLE `operacao` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Procedimentos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Implementacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dados` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `atividade_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `planodetrabalho`
--

CREATE TABLE `planodetrabalho` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NomePlano` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `planodetrabalho`
--

INSERT INTO `planodetrabalho` (`id`, `NomePlano`, `created_at`, `updated_at`) VALUES
(1, 'plano desnecessario', '2019-06-04 02:45:19', '2019-06-04 02:45:19'),
(2, 'plano de testes', '2019-06-07 01:31:20', '2019-06-07 01:31:20'),
(3, 'plano de atividades', '2019-06-07 16:17:54', '2019-06-07 16:17:54'),
(4, 'ffffff', '2019-06-20 17:23:21', '2019-06-20 17:23:21');

-- --------------------------------------------------------

--
-- Estrutura para tabela `problema`
--

CREATE TABLE `problema` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Redistribuicao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Customizacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Solucao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Implantacao_solucao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `atividade_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `relatorio`
--

CREATE TABLE `relatorio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nome_cadastrador` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `N_processo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Horario_ocorrido` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tempo_execucao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hora_inicio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `atividade_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `semanal`
--

CREATE TABLE `semanal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `RotinaDefinida` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Checagem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `Backup` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `Manutencao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '[{"Item":"","Status":"A fazer"}]',
  `Status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `datainicio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datafim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacoes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `semanal`
--

INSERT INTO `semanal` (`id`, `RotinaDefinida`, `Checagem`, `Backup`, `Manutencao`, `Status`, `meta_id`, `created_at`, `updated_at`, `datainicio`, `datafim`, `observacoes`) VALUES
(1, 'meta semanal qualquer', '0', '0', '[{\"Item\":\"\",\"Status\":\"A fazer\"}]', '0', 1, '2019-06-07 05:31:40', '2019-06-07 05:31:40', '', '', ''),
(2, 'meta weekend', '0', '0', '[{\"Item\":\"\",\"Status\":\"A fazer\"}]', '0', 1, '2019-06-07 05:32:45', '2019-06-07 05:32:45', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `atividade`
--
ALTER TABLE `atividade`
  ADD PRIMARY KEY (`id`),
  ADD KEY `atividade_planodetrabalho_id_foreign` (`planodetrabalho_id`);

--
-- Índices de tabela `configuracao`
--
ALTER TABLE `configuracao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `configuracao_atividade_id_foreign` (`atividade_id`);

--
-- Índices de tabela `diaria`
--
ALTER TABLE `diaria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diaria_meta_id_foreign` (`meta_id`);

--
-- Índices de tabela `incidente`
--
ALTER TABLE `incidente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `incidente_atividade_id_foreign` (`atividade_id`);

--
-- Índices de tabela `mensal`
--
ALTER TABLE `mensal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mensal_meta_id_foreign` (`meta_id`);

--
-- Índices de tabela `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `meta_planodetrabalho_id_foreign` (`planodetrabalho_id`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `mudanca`
--
ALTER TABLE `mudanca`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mudanca_atividade_id_foreign` (`atividade_id`);

--
-- Índices de tabela `operacao`
--
ALTER TABLE `operacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `operacao_atividade_id_foreign` (`atividade_id`);

--
-- Índices de tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices de tabela `planodetrabalho`
--
ALTER TABLE `planodetrabalho`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `problema`
--
ALTER TABLE `problema`
  ADD PRIMARY KEY (`id`),
  ADD KEY `problema_atividade_id_foreign` (`atividade_id`);

--
-- Índices de tabela `relatorio`
--
ALTER TABLE `relatorio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relatorio_atividade_id_foreign` (`atividade_id`);

--
-- Índices de tabela `semanal`
--
ALTER TABLE `semanal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `semanal_meta_id_foreign` (`meta_id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `atividade`
--
ALTER TABLE `atividade`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `configuracao`
--
ALTER TABLE `configuracao`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `diaria`
--
ALTER TABLE `diaria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de tabela `incidente`
--
ALTER TABLE `incidente`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `mensal`
--
ALTER TABLE `mensal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `meta`
--
ALTER TABLE `meta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `mudanca`
--
ALTER TABLE `mudanca`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `operacao`
--
ALTER TABLE `operacao`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `planodetrabalho`
--
ALTER TABLE `planodetrabalho`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `problema`
--
ALTER TABLE `problema`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `relatorio`
--
ALTER TABLE `relatorio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `semanal`
--
ALTER TABLE `semanal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `atividade`
--
ALTER TABLE `atividade`
  ADD CONSTRAINT `atividade_planodetrabalho_id_foreign` FOREIGN KEY (`planodetrabalho_id`) REFERENCES `planodetrabalho` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `configuracao`
--
ALTER TABLE `configuracao`
  ADD CONSTRAINT `configuracao_atividade_id_foreign` FOREIGN KEY (`atividade_id`) REFERENCES `atividade` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `diaria`
--
ALTER TABLE `diaria`
  ADD CONSTRAINT `diaria_meta_id_foreign` FOREIGN KEY (`meta_id`) REFERENCES `meta` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `incidente`
--
ALTER TABLE `incidente`
  ADD CONSTRAINT `incidente_atividade_id_foreign` FOREIGN KEY (`atividade_id`) REFERENCES `atividade` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `mensal`
--
ALTER TABLE `mensal`
  ADD CONSTRAINT `mensal_meta_id_foreign` FOREIGN KEY (`meta_id`) REFERENCES `meta` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `meta`
--
ALTER TABLE `meta`
  ADD CONSTRAINT `meta_planodetrabalho_id_foreign` FOREIGN KEY (`planodetrabalho_id`) REFERENCES `planodetrabalho` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `mudanca`
--
ALTER TABLE `mudanca`
  ADD CONSTRAINT `mudanca_atividade_id_foreign` FOREIGN KEY (`atividade_id`) REFERENCES `atividade` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `operacao`
--
ALTER TABLE `operacao`
  ADD CONSTRAINT `operacao_atividade_id_foreign` FOREIGN KEY (`atividade_id`) REFERENCES `atividade` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `problema`
--
ALTER TABLE `problema`
  ADD CONSTRAINT `problema_atividade_id_foreign` FOREIGN KEY (`atividade_id`) REFERENCES `atividade` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `relatorio`
--
ALTER TABLE `relatorio`
  ADD CONSTRAINT `relatorio_atividade_id_foreign` FOREIGN KEY (`atividade_id`) REFERENCES `atividade` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `semanal`
--
ALTER TABLE `semanal`
  ADD CONSTRAINT `semanal_meta_id_foreign` FOREIGN KEY (`meta_id`) REFERENCES `meta` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
