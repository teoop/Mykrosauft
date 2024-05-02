CREATE TABLE `database_devis` (
  `ID_devis` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `date_limite` DATE NOT NULL,
  `Autres informations` VARCHAR(255) NOT NULL,
   `ID_utilisateur` int(11) NOT NULL,
--    `nom`VARCHAR(50) NOT NULL,
--    `Numero_telephone` int (11) NOT NULL,
--    `adresse_mail` VARCHAR(255) NOT NULL,
  FOREIGN KEY (ID_utilisateur) REFERENCES database_utilisateur(ID_utilisateur),
--   FOREIGN KEY (nom) REFERENCES database_utilisateur(nom),
--   FOREIGN KEY (Numero_telephone) REFERENCES database_utilisateur(Numero_telephone),
--   FOREIGN KEY (adresse_mail) REFERENCES database_utilisateur(Adresse_mail)
 
);
 
 
INSERT INTO database_devis VALUES (null, "login", "password", 500);


CREATE TABLE `database_utilisateur` (
  `ID_utilisateur` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Motdepasse` varchar(255) NOT NULL,
  `Numero_telephone` int(11) NOT NULL,
  'Adresse_mail' varchar(255) NOT NULL
);
SELECT ID, Numero_telephone, REPLACE(REPLACE(REPLACE(Numero_telephone," ",""),"+33","0"),"(0)","") FROM database_utilisateur;
 
INSERT INTO database_utilisateur VALUES (null, "login", "password", 500);