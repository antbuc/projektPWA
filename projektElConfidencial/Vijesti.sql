CREATE TABLE Vijesti (
    id int(11) NOT NULL AUTO_INCREMENT,
    naslov_vijesti varchar(255) NOT NULL,
    kratkiSadrzaj_vijesti varchar(255) NOT NULL,
    sadrzaj_vijesti varchar(255) NOT NULL,
    slika_vijesti varchar(255) NOT NULL,
    kategorija_vijesti varchar(50) NOT NULL,
    arhiva_vijesti varchar(20) NOT NULL,
    PRIMARY KEY (id)
);