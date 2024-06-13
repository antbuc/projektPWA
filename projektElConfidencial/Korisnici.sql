CREATE TABLE Korisnici (
    id int(21) UNSIGNED NOT NULL AUTO_INCREMENT,
    korisnickoIme varchar(50),
    lozinka varchar(255),
    PRIMARY KEY (id),
    UNIQUE KEY korisnickoIme_key (korisnickoIme)
)