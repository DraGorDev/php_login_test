CREATE TABLE `korisnici` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  ime VARCHAR(30) NOT NULL,
    prezime VARCHAR(30) NOT NULL,
    korisnicko_ime VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    `password` VARCHAR(64) NOT NULL,
    slika_korisnika VARCHAR(7)
);

