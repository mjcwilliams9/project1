--a table was created for account as well as for persoon


CREATE TABLE account(
    id int not null AUTO_INCREMENT,
    email varchar(255) unique,
    password varchar(255),
    PRIMARY KEY (ID)
);


CREATE TABLE persoon (
  id int not null AUTO_INCREMENT,
  Voornaam varchar(255),
  Tussenvoegsel varchar (255),
  Achternaam varchar(255),
  Telefoon int,
  Gebruikersnaam varchar(255),
  PRIMARY KEY (id),
  FOREIGN KEY (id) REFERENCES account (id)
);
