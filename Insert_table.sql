
--
-- Dumping data for table `blocage`
--

INSERT INTO `blocage` (`id_blocage`, `id_rh`, `id_membre`) VALUES
(2, 38, 37);

-- --------------------------------------------------------

--
-- Table structure for table `diplome`
--

CREATE TABLE `diplome` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `date_obtention` date DEFAULT NULL,
  `etudiant` int(11) NOT NULL,
  `ecole` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diplome`
--

INSERT INTO `diplome` (`id`, `nom`, `date_obtention`, `etudiant`, `ecole`) VALUES
(31, 'Ingénieur en informatique', '2017-11-22', 34, 'Centrale Paris'),
(30, 'Prépa', '2017-11-22', 34, 'St-Exupéry '),
(29, 'Prépa', '2017-11-22', 37, 'St-Exupéry '),
(28, 'Prépa', '2017-11-22', 36, 'St-Exupéry '),
(27, 'Prépa', '2017-11-22', 35, 'St-Exupéry '),
(32, 'Ingénieur en informatique', '2017-11-22', 37, 'Centrale Paris'),
(33, 'Ingénieur en informatique', '2017-11-22', 36, 'Centrale Paris'),
(34, 'Ingénieur en informatique', '2017-11-22', 35, 'Centrale Paris'),
(35, 'Postier', '2017-11-08', 40, 'coinchaud');

-- --------------------------------------------------------

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `poste`, `date_obtention`, `duree`, `entreprise`, `id_membre`) VALUES
(1, 'Informaticien  ', '2017-11-22', 2, 'Dassault ', 34),
(2, 'Informaticien  ', '2017-11-22', 2, 'Dassault ', 36),
(3, 'Informaticien  ', '2017-11-22', 2, 'Dassault ', 37),
(4, 'Informaticien  ', '2017-11-22', 2, 'Dassault ', 35),
(6, 'Stagiaire  ', '2017-11-15', 6, 'Carrefour', 34),
(9, 'Ouvrier', '2017-11-06', 5, 'PSA ', 36),
(12, 'Pompiste  ', '2017-11-22', 2, 'Total', 37),
(13, 'Informaticien  ', '2017-11-22', 2, 'MInistère de la pêche', 35),
(14, 'Postier', '2017-10-31', 3, 'Coinla', 40);

-- --------------------------------------------------------

--
-- Table structure for table `membres`
--

CREATE TABLE `membres` (
  `id` int(11) NOT NULL,
  `nom` varchar(26) NOT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `telephone` int(11) DEFAULT NULL,
  `mail` varchar(255) CHARACTER SET utf8 NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `motdepasse` varchar(40) NOT NULL,
  `entreprise` varchar(255) DEFAULT NULL,
  `secteur_activite` varchar(255) DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `bio` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membres`
--

INSERT INTO `membres` (`id`, `nom`, `prenom`, `date_naissance`, `date_inscription`, `telephone`, `mail`, `adresse`, `motdepasse`, `entreprise`, `secteur_activite`, `type`, `bio`) VALUES
(34, 'Kikou', 'Noel', '2017-11-23', '2017-11-17 12:33:14', 101010101, 'noelkikou@gmail.com', 'rue de la bierre', 'azer', NULL, NULL, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget eros vel dui mattis fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus scelerisque ut dolor eu pellentesque. Praesent efficitur venenatis orci, sed dignissim dolor finibus sed. Donec semper tortor at malesuada interdum. Quisque pharetra posuere vestibulum. Vivamus gravida erat ut mattis condimentum. Sed arcu nibh, pretium id diam non, dictum iaculis justo. Morbi nec ex dolor. Fusce sagittis lacus nunc, pulvinar vulputate leo rhoncus in. Suspendisse rhoncus vitae mauris sed posuere. Ut molestie vulputate justo vitae auctor. Sed a viverra turpis. Curabitur iaculis. '),
(35, 'tristan', 'jacque', '2017-11-14', '2017-11-17 12:34:30', 101010101, 'tristan@gmail.com', 'rue de la bierre', '1234azer', NULL, NULL, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget eros vel dui mattis fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus scelerisque ut dolor eu pellentesque. Praesent efficitur venenatis orci, sed dignissim dolor finibus sed. Donec semper tortor at malesuada interdum. Quisque pharetra posuere vestibulum. Vivamus gravida erat ut mattis condimentum. Sed arcu nibh, pretium id diam non, dictum iaculis justo. Morbi nec ex dolor. Fusce sagittis lacus nunc, pulvinar vulputate leo rhoncus in. Suspendisse rhoncus vitae mauris sed posuere. Ut molestie vulputate justo vitae auctor. Sed a viverra turpis. Curabitur iaculis. '),
(36, 'mathieu', 'jacque', '2017-11-14', '2017-11-17 12:34:30', 101010101, 'mat@gmail.com', 'rue du vin', '1234azer', NULL, NULL, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget eros vel dui mattis fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus scelerisque ut dolor eu pellentesque. Praesent efficitur venenatis orci, sed dignissim dolor finibus sed. Donec semper tortor at malesuada interdum. Quisque pharetra posuere vestibulum. Vivamus gravida erat ut mattis condimentum. Sed arcu nibh, pretium id diam non, dictum iaculis justo. Morbi nec ex dolor. Fusce sagittis lacus nunc, pulvinar vulputate leo rhoncus in. Suspendisse rhoncus vitae mauris sed posuere. Ut molestie vulputate justo vitae auctor. Sed a viverra turpis. Curabitur iaculis. '),
(37, 'simpson', 'bart', '2017-11-19', '2017-11-17 12:34:30', 101010101, 'bart@gmail.com', 'sprin..', '1234azer', NULL, NULL, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget eros vel dui mattis fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus scelerisque ut dolor eu pellentesque. Praesent efficitur venenatis orci, sed dignissim dolor finibus sed. Donec semper tortor at malesuada interdum. Quisque pharetra posuere vestibulum. Vivamus gravida erat ut mattis condimentum. Sed arcu nibh, pretium id diam non, dictum iaculis justo. Morbi nec ex dolor. Fusce sagittis lacus nunc, pulvinar vulputate leo rhoncus in. Suspendisse rhoncus vitae mauris sed posuere. Ut molestie vulputate justo vitae auctor. Sed a viverra turpis. Curabitur iaculis. '),
(38, 'laurent', 'fred', '2017-11-30', '2017-11-17 12:34:30', 101010101, 'rh@gmail.com', 'rue du whiski', '1234azer', NULL, 'Direction ', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget eros vel dui mattis fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus scelerisque ut dolor eu pellentesque. Praesent efficitur venenatis orci, sed dignissim dolor finibus sed. Donec semper tortor at malesuada interdum. Quisque pharetra posuere vestibulum. Vivamus gravida erat ut mattis condimentum. Sed arcu nibh, pretium id diam non, dictum iaculis justo. Morbi nec ex dolor. Fusce sagittis lacus nunc, pulvinar vulputate leo rhoncus in. Suspendisse rhoncus vitae mauris sed posuere. Ut molestie vulputate justo vitae auctor. Sed a viverra turpis. Curabitur iaculis. '),
(40, 'Lachheb', 'Ismael', '2017-11-23', '2017-11-17 13:30:26', 0, 'ismael@gmail.com', '2 rue du jura', 'f56073bef446f13a0f14bc1b9f17b3b741a68078', NULL, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `contenu`, `id_origine`, `id_destination`, `date_envoi`) VALUES
(1, 'Salut ? ', 40, 35, '2017-11-19 16:54:47'),
(2, 'Bonjour', 40, 38, '2017-11-19 19:08:05'),
(3, 'Salut ?', 40, 38, '2017-11-19 19:13:26'),
(4, 'Salut ?', 40, 38, '2017-11-19 19:15:07'),
(5, 'Salut ?', 40, 38, '2017-11-19 19:17:26'),
(6, 'Salut ?', 40, 38, '2017-11-19 19:19:06'),
(7, 'Salut ?', 40, 38, '2017-11-19 19:20:06'),
(8, 'Salut ?', 40, 38, '2017-11-19 19:20:21'),
(9, 'Salut ?', 40, 38, '2017-11-19 19:20:34'),
(10, 'Salut ?', 40, 38, '2017-11-19 19:20:47'),
(11, 'Salut ?', 40, 38, '2017-11-19 19:21:05');

-- --------------------------------------------------------


--
-- Dumping data for table `offres`
--

INSERT INTO `offres` (`id`, `nom_offre`, `contenu`, `entreprise`, `categorie`, `adresse`, `rh_id`, `pourvu`) VALUES
(1, 'Financier', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam condimentum maximus dui sed pellentesque. Vestibulum eu posuere est. Cras ut rhoncus arcu, ac sagittis ipsum. Nam lacus nisl, egestas ut feugiat sed, efficitur vel urna. Cras posuere mauris at fringilla vulputate. Praesent vehicula odio sit amet ante rhoncus sodales eu vitae augue. Suspendisse cursus dictum semper. Pellentesque id lacus imperdiet, tincidunt augue eu, rhoncus erat. Fusce convallis non ipsum sed viverra. Maecenas sed lobortis nibh, sit amet posuere enim. Aenean sollicitudin condimentum mauris, non imperdiet lacus iaculis id. Curabitur aliquam consectetur velit nec ullamcorper.\r\n\r\nDonec id felis felis. Nam placerat orci vitae posuere mattis. In volutpat enim ex, nec efficitur eros luctus sed. Praesent et nisi nisi. Sed id felis sed augue sollicitudin convallis ullamcorper nec nibh. Donec vel felis lorem. In hac habitasse platea dictumst. Proin interdum elementum mauris, quis congue mi. Mauris at est at est faucibus pellentesque eu sed nunc. Phasellus a lacus vitae nisl maximus fringilla. Phasellus at felis erat. Donec ac euismod nulla. Pellentesque commodo blandit venenatis. Nunc viverra neque ut faucibus vulputate. Nulla quis nibh eget nisl laoreet imperdiet non vitae sapien.\r\n\r\nPhasellus augue eros, molestie in elementum id, convallis semper eros. Nam fringilla tincidunt risus nec vulputate. Nam nunc ante, fringilla ac sagittis a, blandit vel mi. Duis massa neque, varius in egestas in, fringilla blandit massa. Nunc sagittis sapien at lacus pharetra efficitur. Vivamus iaculis ligula et tellus molestie faucibus. Phasellus mi quam, hendrerit at hendrerit id, posuere et justo. Sed semper turpis ut quam maximus lobortis. Donec eget gravida arcu. Fusce in viverra urna. Ut tempus ex ac dolor convallis, a fermentum purus imperdiet. Vivamus in tincidunt enim. Sed sit amet sem sodales, gravida sapien a, vehicula nibh. Vestibulum rhoncus, eros ac tempus pretium, magna felis dapibus nulla, ac venenatis lacus purus congue purus. Aliquam quis efficitur nulla. Sed a tortor lacinia, convallis nulla id, semper augue. ', 'Pôle Finance ', 'Banque / Assurance', 'Paris', 38, 0),
(2, 'Data Scientist ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam condimentum maximus dui sed pellentesque. Vestibulum eu posuere est. Cras ut rhoncus arcu, ac sagittis ipsum. Nam lacus nisl, egestas ut feugiat sed, efficitur vel urna. Cras posuere mauris at fringilla vulputate. Praesent vehicula odio sit amet ante rhoncus sodales eu vitae augue. Suspendisse cursus dictum semper. Pellentesque id lacus imperdiet, tincidunt augue eu, rhoncus erat. Fusce convallis non ipsum sed viverra. Maecenas sed lobortis nibh, sit amet posuere enim. Aenean sollicitudin condimentum mauris, non imperdiet lacus iaculis id. Curabitur aliquam consectetur velit nec ullamcorper.\r\n\r\nDonec id felis felis. Nam placerat orci vitae posuere mattis. In volutpat enim ex, nec efficitur eros luctus sed. Praesent et nisi nisi. Sed id felis sed augue sollicitudin convallis ullamcorper nec nibh. Donec vel felis lorem. In hac habitasse platea dictumst. Proin interdum elementum mauris, quis congue mi. Mauris at est at est faucibus pellentesque eu sed nunc. Phasellus a lacus vitae nisl maximus fringilla. Phasellus at felis erat. Donec ac euismod nulla. Pellentesque commodo blandit venenatis. Nunc viverra neque ut faucibus vulputate. Nulla quis nibh eget nisl laoreet imperdiet non vitae sapien.\r\n\r\nPhasellus augue eros, molestie in elementum id, convallis semper eros. Nam fringilla tincidunt risus nec vulputate. Nam nunc ante, fringilla ac sagittis a, blandit vel mi. Duis massa neque, varius in egestas in, fringilla blandit massa. Nunc sagittis sapien at lacus pharetra efficitur. Vivamus iaculis ligula et tellus molestie faucibus. Phasellus mi quam, hendrerit at hendrerit id, posuere et justo. Sed semper turpis ut quam maximus lobortis. Donec eget gravida arcu. Fusce in viverra urna. Ut tempus ex ac dolor convallis, a fermentum purus imperdiet. Vivamus in tincidunt enim. Sed sit amet sem sodales, gravida sapien a, vehicula nibh. Vestibulum rhoncus, eros ac tempus pretium, magna felis dapibus nulla, ac venenatis lacus purus congue purus. Aliquam quis efficitur nulla. Sed a tortor lacinia, convallis nulla id, semper augue. de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).', 'Pôle Intelligence Artificielle', 'Banque / Assurance', 'Lyon ', 38, 0),
(3, 'Agent de Sécurité ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam condimentum maximus dui sed pellentesque. Vestibulum eu posuere est. Cras ut rhoncus arcu, ac sagittis ipsum. Nam lacus nisl, egestas ut feugiat sed, efficitur vel urna. Cras posuere mauris at fringilla vulputate. Praesent vehicula odio sit amet ante rhoncus sodales eu vitae augue. Suspendisse cursus dictum semper. Pellentesque id lacus imperdiet, tincidunt augue eu, rhoncus erat. Fusce convallis non ipsum sed viverra. Maecenas sed lobortis nibh, sit amet posuere enim. Aenean sollicitudin condimentum mauris, non imperdiet lacus iaculis id. Curabitur aliquam consectetur velit nec ullamcorper.\r\n\r\nDonec id felis felis. Nam placerat orci vitae posuere mattis. In volutpat enim ex, nec efficitur eros luctus sed. Praesent et nisi nisi. Sed id felis sed augue sollicitudin convallis ullamcorper nec nibh. Donec vel felis lorem. In hac habitasse platea dictumst. Proin interdum elementum mauris, quis congue mi. Mauris at est at est faucibus pellentesque eu sed nunc. Phasellus a lacus vitae nisl maximus fringilla. Phasellus at felis erat. Donec ac euismod nulla. Pellentesque commodo blandit venenatis. Nunc viverra neque ut faucibus vulputate. Nulla quis nibh eget nisl laoreet imperdiet non vitae sapien.\r\n\r\nPhasellus augue eros, molestie in elementum id, convallis semper eros. Nam fringilla tincidunt risus nec vulputate. Nam nunc ante, fringilla ac sagittis a, blandit vel mi. Duis massa neque, varius in egestas in, fringilla blandit massa. Nunc sagittis sapien at lacus pharetra efficitur. Vivamus iaculis ligula et tellus molestie faucibus. Phasellus mi quam, hendrerit at hendrerit id, posuere et justo. Sed semper turpis ut quam maximus lobortis. Donec eget gravida arcu. Fusce in viverra urna. Ut tempus ex ac dolor convallis, a fermentum purus imperdiet. Vivamus in tincidunt enim. Sed sit amet sem sodales, gravida sapien a, vehicula nibh. Vestibulum rhoncus, eros ac tempus pretium, magna felis dapibus nulla, ac venenatis lacus purus congue purus. Aliquam quis efficitur nulla. Sed a tortor lacinia, convallis nulla id, semper augue. ', 'Pôle Sécurité', 'Banque / Assurance', 'Marseille', 38, 0),
(4, 'Directeur', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam condimentum maximus dui sed pellentesque. Vestibulum eu posuere est. Cras ut rhoncus arcu, ac sagittis ipsum. Nam lacus nisl, egestas ut feugiat sed, efficitur vel urna. Cras posuere mauris at fringilla vulputate. Praesent vehicula odio sit amet ante rhoncus sodales eu vitae augue. Suspendisse cursus dictum semper. Pellentesque id lacus imperdiet, tincidunt augue eu, rhoncus erat. Fusce convallis non ipsum sed viverra. Maecenas sed lobortis nibh, sit amet posuere enim. Aenean sollicitudin condimentum mauris, non imperdiet lacus iaculis id. Curabitur aliquam consectetur velit nec ullamcorper.\r\n\r\nDonec id felis felis. Nam placerat orci vitae posuere mattis. In volutpat enim ex, nec efficitur eros luctus sed. Praesent et nisi nisi. Sed id felis sed augue sollicitudin convallis ullamcorper nec nibh. Donec vel felis lorem. In hac habitasse platea dictumst. Proin interdum elementum mauris, quis congue mi. Mauris at est at est faucibus pellentesque eu sed nunc. Phasellus a lacus vitae nisl maximus fringilla. Phasellus at felis erat. Donec ac euismod nulla. Pellentesque commodo blandit venenatis. Nunc viverra neque ut faucibus vulputate. Nulla quis nibh eget nisl laoreet imperdiet non vitae sapien.\r\n\r\nPhasellus augue eros, molestie in elementum id, convallis semper eros. Nam fringilla tincidunt risus nec vulputate. Nam nunc ante, fringilla ac sagittis a, blandit vel mi. Duis massa neque, varius in egestas in, fringilla blandit massa. Nunc sagittis sapien at lacus pharetra efficitur. Vivamus iaculis ligula et tellus molestie faucibus. Phasellus mi quam, hendrerit at hendrerit id, posuere et justo. Sed semper turpis ut quam maximus lobortis. Donec eget gravida arcu. Fusce in viverra urna. Ut tempus ex ac dolor convallis, a fermentum purus imperdiet. Vivamus in tincidunt enim. Sed sit amet sem sodales, gravida sapien a, vehicula nibh. Vestibulum rhoncus, eros ac tempus pretium, magna felis dapibus nulla, ac venenatis lacus purus congue purus. Aliquam quis efficitur nulla. Sed a tortor lacinia, convallis nulla id, semper augue. ', 'Pôle Assurance', 'Banque / Assurance', 'Grenoble', 38, 0),
(5, 'Sectrétaire ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam condimentum maximus dui sed pellentesque. Vestibulum eu posuere est. Cras ut rhoncus arcu, ac sagittis ipsum. Nam lacus nisl, egestas ut feugiat sed, efficitur vel urna. Cras posuere mauris at fringilla vulputate. Praesent vehicula odio sit amet ante rhoncus sodales eu vitae augue. Suspendisse cursus dictum semper. Pellentesque id lacus imperdiet, tincidunt augue eu, rhoncus erat. Fusce convallis non ipsum sed viverra. Maecenas sed lobortis nibh, sit amet posuere enim. Aenean sollicitudin condimentum mauris, non imperdiet lacus iaculis id. Curabitur aliquam consectetur velit nec ullamcorper.\r\n\r\nDonec id felis felis. Nam placerat orci vitae posuere mattis. In volutpat enim ex, nec efficitur eros luctus sed. Praesent et nisi nisi. Sed id felis sed augue sollicitudin convallis ullamcorper nec nibh. Donec vel felis lorem. In hac habitasse platea dictumst. Proin interdum elementum mauris, quis congue mi. Mauris at est at est faucibus pellentesque eu sed nunc. Phasellus a lacus vitae nisl maximus fringilla. Phasellus at felis erat. Donec ac euismod nulla. Pellentesque commodo blandit venenatis. Nunc viverra neque ut faucibus vulputate. Nulla quis nibh eget nisl laoreet imperdiet non vitae sapien.\r\n\r\nPhasellus augue eros, molestie in elementum id, convallis semper eros. Nam fringilla tincidunt risus nec vulputate. Nam nunc ante, fringilla ac sagittis a, blandit vel mi. Duis massa neque, varius in egestas in, fringilla blandit massa. Nunc sagittis sapien at lacus pharetra efficitur. Vivamus iaculis ligula et tellus molestie faucibus. Phasellus mi quam, hendrerit at hendrerit id, posuere et justo. Sed semper turpis ut quam maximus lobortis. Donec eget gravida arcu. Fusce in viverra urna. Ut tempus ex ac dolor convallis, a fermentum purus imperdiet. Vivamus in tincidunt enim. Sed sit amet sem sodales, gravida sapien a, vehicula nibh. Vestibulum rhoncus, eros ac tempus pretium, magna felis dapibus nulla, ac venenatis lacus purus congue purus. Aliquam quis efficitur nulla. Sed a tortor lacinia, convallis nulla id, semper augue. ', 'Pôle Direction ', 'Banque / Assurance', 'Paris ', 38, 0),
(45, 'Agent d\'entretien', 'Pour ceux qui aiment le challenge, il est possible de prendre cette partie\r\noptionnelle qui sera valorisée dans la note finale. Elle ne sera néanmoins\r\névaluée qu’à condition que toutes fonctionnalités précédemment\r\nénoncées soient implémentées sur le projet. :\r\n\r\nDans un processus de recrutement, entre le moment où vous postulez et\r\nle moment où vous êtes accepté sur un poste, vous passez un entretien.\r\nIl s’agira alors ici d’introduire un workflow et un nouvel acteur (recruteur)\r\ntels que lorsqu’un candidat postule, le RH puisse le mettre en relation\r\navec un Recruteur (création d’entretiens) et que le recruteur puisse\r\nensuite valider le candidat suite à l’entretien.', 'mdrr', 'Machines et équipements / Automobile', 'Paris', 40, 0),
(46, 'Jardinier', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut felis ac neque gravida cursus ut vel dui. Fusce pulvinar interdum dapibus. Praesent at velit a sem accumsan commodo. Nam sagittis nulla magna, quis porta lacus accumsan quis. In ac metus sed neque consequat blandit. Praesent vel volutpat neque. Curabitur posuere ut dolor in venenatis. Morbi vel tristique dui. Nulla gravida dui in velit volutpat, eget dapibus neque laoreet. Mauris a commodo nibh. Vestibulum id lobortis ligula. Cras ac odio eu velit malesuada elementum vitae eu sem. Etiam mattis faucibus enim vitae eleifend. Aenean pulvinar iaculis gravida.\r\n\r\nSed faucibus, tellus eu posuere ultrices, dolor sapien aliquet massa, eu viverra turpis ante eget dui. Ut vel enim massa. Duis ut neque risus. Praesent lorem mauris, molestie sed dignissim et, elementum nec diam. Sed consequat feugiat metus, nec tempor purus porta eu. Donec mattis magna tortor, at porttitor augue condimentum pharetra. Fusce nunc neque, convallis nec urna eu, maximus pulvinar lectus. Aliquam nisi velit, dignissim dapibus pulvinar eget, pharetra at sapien. Nam nec risus commodo, ornare eros eu, congue ante. Maecenas vitae leo ullamcorper, iaculis nisl sit amet, rutrum magna. Praesent et ante at ante auctor placerat. ', 'Pôle Jardinerie', 'Services aux entreprises', 'Bordeaux', 40, 0);

-- --------------------------------------------------------

--
-- Dumping data for table `postule`
--

INSERT INTO `postule` (`id_postule`, `id_membre`, `id_offre`, `statut`) VALUES
(1, 34, 2, 0),
(8, 34, 45, -1),
(9, 35, 45, -1),
(10, 36, 45, 0),
(11, 37, 45, 0),
(12, 37, 46, 0),
(13, 40, 2, 0),
(14, 40, 1, 0),
(15, 40, 3, 0),
(16, 40, 3, 0);


