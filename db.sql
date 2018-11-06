CREATE table Users(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
name VARCHAR(45),
mail VARCHAR(45),
password VARCHAR(45),
role VARCHAR(45),
created_at VARCHAR(45),
update_at VARCHAR(45),
deleted_at VARCHAR(45)
);

CREATE table Trainings(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
name VARCHAR(45),
year VARCHAR(45),
location VARCHAR(45),
created_at VARCHAR(45),
update_at VARCHAR(45),
deleted_at VARCHAR(45)
);

CREATE TABLE Types(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
type VARCHAR(45),
created_at VARCHAR(45),
update_at VARCHAR(45),
deleted_at VARCHAR(45)
);


CREATE table Posts(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
title VARCHAR(45),
content TEXT,
type_id INT,
FOREIGN KEY(type_id) REFERENCES Types(id),
created_at VARCHAR(45),
update_at VARCHAR(45),
deleted_at VARCHAR(45)
);



## Populate

INSERT INTO trainings (user_id, name, year, location)
VALUES (
	1,
	'Développeur Web/Web Mobile',
	'2018-2019',
	'Saint-Gaudens'
);


INSERT INTO trainings (user_id, name, year, location)
VALUES (
	2,
	'Référent Digital',
	'2019-2020',
	'Toulouse'
);

INSERT INTO trainings (user_id, name, year, location)
VALUES (
	3,
	'Data IA',
	'2018-2019',
	'Montpellier'
);


INSERT INTO types (type)
VALUES (
	"Article"
);

INSERT INTO types (type)
VALUES (
	"Offre d'emploi"
);

INSERT INTO types (type)
VALUES (
	"Offre de stage"
);

INSERT INTO types (type)
VALUES (
	"Offre d'alternance"
);

INSERT INTO types (type)
VALUES (
	"Formation"
);

INSERT INTO types (type)
VALUES (
	"Ressource intéressante"
);