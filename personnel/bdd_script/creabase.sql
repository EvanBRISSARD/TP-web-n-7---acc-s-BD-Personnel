
--
-- Structure de la table `service`
--

CREATE TABLE service (
  codeServ int NOT NULL AUTO_INCREMENT,
  desiServ varchar(30) NOT NULL,
  PRIMARY KEY  (codeServ)
) ENGINE=InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

--
-- Contenu de la table `service`
--

INSERT INTO service(desiserv) VALUES ('Fabrication'),('Emballage'),('Commercial'),('Administration');

--
-- Structure de la table `employe`
--

CREATE TABLE employe (
  matricule int NOT NULL AUTO_INCREMENT,
  nomEmpl varchar(35) NOT NULL ,
  prenomEmpl varchar(20) NOT NULL,
  codeCadre char(1) NOT NULL ,
  ServEmpl int NOT NULL,
  PRIMARY KEY  (matricule),
  constraint fk_empl_serv foreign key(servEmpl) references service(codeServ)
) ENGINE=InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;

--
-- Contenu de la table `employe`
--

INSERT INTO employe(nomEmpl,prenomEmpl,codeCadre,servEmpl) VALUES 
('RINER', 'Teddy', 'o', '1'),
('FOURCADE', 'Martin', 'o', '1'),
('ZIDANE', 'Zinedine', 'n', '1'),
('MANAUDOU', 'Laure', 'n', '1'),
('KARABATIC ', 'Nikola', 'n', '2'),
('KNOLES', 'Charles', 'n', '2'),
('POTIER', 'Jean', 'o', '2'),
('ASLOUM', 'Brahim', 'o', '3'),
('FERRAND-PREVOT', 'Pauline', 'n', '3'),
('BEAUGRAND', 'Cassandre', 'n', '3'),
('AGBEGNENOU', 'Clarisse', 'o', '1');
