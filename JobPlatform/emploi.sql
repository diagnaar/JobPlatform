Create database job;
use job;

CREATE TABLE candidat (
	idCand int PRIMARY KEY AUTO_INCREMENT,
	nom varchar(30),
	prenom varchar(50),
	ine varchar(20),
	dateNaiss date,
	numTel varchar(15),
	email varchar(50),
	adresse varchar(50),
	region varchar(20),
	departement varchar(20),
	specialite varchar(20),
	password varchar(20)
	);

CREATE TABLE competence (
	libCompetence varchar(30)-- Java, Eclipse, PHP, Python
	);

CREATE TABLE compCandidat (
	idCand int,
	libCompetence varchar(30),
	niveau enum(1,2,3)
); -- Chaque candidat peut avoir jusqu'a 3 compétence pour chaque niveau, plus le niveau est faible plus il est compétent dans le domaine

CREATE TABLE diplome (
	libDiplome varchar(50)
	);
CREATE TABLE diplCandidat (
	idCand int,
	libDiplome varchar(50),
	annee varchar(5),
	lieuDiplome varchar(50)
);

CREATE TABLE langCandidat (
	idCand int,
	langue varchar(30),
	niveau enum(1,2,3,4,5)
);

CREATE TABLE recruteur (
	idRecruteur int PRIMARY KEY AUTO_INCREMENT,
	nom varchar(20),
	siteWeb varchar(50),
	siege varchar(50),
	description text,
	logo varchar(50),
	password varchar(20)
);

CREATE TABLE secteur (
	idSecteur int PRIMARY KEY AUTO_INCREMENT,
	lib varchar(30)
);

CREATE TABLE sectRecruteur (
	idRecruteur int,
	idSecteur int
);

