-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 27 avr. 2026 à 22:52
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `php_cours`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idcom` int(11) NOT NULL,
  `Ref_user` int(11) NOT NULL,
  `Prix` int(11) NOT NULL,
  `Adresse_livraison` varchar(100) NOT NULL,
  `Tel` int(8) NOT NULL,
  `D_com` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `D_liv` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `Ref_user` int(11) NOT NULL,
  `Id_prod` smallint(5) NOT NULL,
  `D_ajout` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `Id_prod` smallint(5) NOT NULL,
  `Nom_prod` varchar(20) NOT NULL,
  `Prix` smallint(5) NOT NULL,
  `Qte` smallint(4) NOT NULL,
  `Categorie` varchar(15) NOT NULL,
  `urls` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `Badge` varchar(10) NOT NULL,
  `Old_price` smallint(5) NOT NULL,
  `Descriptions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produit_cmd`
--

CREATE TABLE `produit_cmd` (
  `idcomd` int(11) NOT NULL,
  `Id_prod` smallint(5) NOT NULL,
  `Qte` smallint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `Ref_user` int(11) NOT NULL,
  `Pseudo` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Code` int(11) NOT NULL,
  `Confirmer` tinyint(1) NOT NULL,
  `Etat` varchar(12) NOT NULL,
  `Mdp` varchar(300) NOT NULL,
  `Role` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idcom`),
  ADD KEY `fk_cmd1` (`Ref_user`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`Ref_user`,`Id_prod`),
  ADD KEY `fk_p2` (`Id_prod`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`Id_prod`);

--
-- Index pour la table `produit_cmd`
--
ALTER TABLE `produit_cmd`
  ADD PRIMARY KEY (`idcomd`,`Id_prod`),
  ADD KEY `fk_c2` (`Id_prod`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Ref_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `idcom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `Id_prod` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `Ref_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fk_cmd1` FOREIGN KEY (`Ref_user`) REFERENCES `users` (`Ref_user`);

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `fk_p1` FOREIGN KEY (`Ref_user`) REFERENCES `users` (`Ref_user`),
  ADD CONSTRAINT `fk_p2` FOREIGN KEY (`Id_prod`) REFERENCES `produit` (`Id_prod`);

--
-- Contraintes pour la table `produit_cmd`
--
ALTER TABLE `produit_cmd`
  ADD CONSTRAINT `fk_c1` FOREIGN KEY (`idcomd`) REFERENCES `commande` (`idcom`),
  ADD CONSTRAINT `fk_c2` FOREIGN KEY (`Id_prod`) REFERENCES `produit` (`Id_prod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
