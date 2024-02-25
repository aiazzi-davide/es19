drop database videoteca;
create database videoteca;
use videoteca;

create table Socio(
    idSoci int primary key auto_increment,
    nome varchar(50),
    cognome varchar(50),
    data_nascita date,
    indirizzo varchar(50),
    telefono varchar(15),
    password varchar(50)
);
create table genere (
    idGenere int primary key auto_increment,
    descrizione varchar(50)
);
create table video (
    idVideo int primary key auto_increment,
    titolo varchar(50),
    regista varchar(50),
    anno int,
    tipo varchar(50),
    idGenere int,
    foreign key (IDgenere) references genere(idGenere)
);

create table prestiti (
      idSoccio int,
      idVideo int,
      data_prestito date,
      data_restituzione date,
      foreign key (idSoccio) references Socio(idSoci),
      foreign key (idVideo) references video(idVideo)
);

insert into genere (descrizione) values ('Commedia');
insert into genere (descrizione) values ('Horror');
insert into genere (descrizione) values ('Fantasy');
insert into genere (descrizione) values ('Azione');
insert into genere (descrizione) values ('Drammatico');
insert into genere (descrizione) values ('Avventura');
insert into genere (descrizione) values ('Animazione');
insert into genere (descrizione) values ('Fantascienza');
insert into genere (descrizione) values ('Thriller');
insert into genere (descrizione) values ('Documentario');
insert into genere (descrizione) values ('Giallo');

insert into video (titolo, regista, anno, tipo, idGenere) values ('Il Signore degli Anelli', 'Peter Jackson', 2001, 'Film', 3);
insert into video (titolo, regista, anno, tipo, idGenere) values ('la guerra dei mondi', 'Steven Spielberg', 2005, 'Film', 8);
insert into video (titolo, regista, anno, tipo, idGenere) values ('Il Padrino', 'Francis Ford Coppola', 1972, 'Film', 5);
insert into video (titolo, regista, anno, tipo, idGenere) values ('Il Padrino 2', 'Francis Ford Coppola', 1974, 'Film', 5);
insert into video (titolo, regista, anno, tipo, idGenere) values ('Il Padrino 3', 'Francis Ford Coppola', 1990, 'Film', 5);
insert into video (titolo, regista, anno, tipo, idGenere) values ('Il Signore degli Anelli - Le due torri', 'Peter Jackson', 2002, 'Film', 3);

insert into Socio (nome, cognome, data_nascita, indirizzo, telefono) values ('Mario', 'Rossi', '1980-01-01', 'Via Roma 1', '1234567890');
insert into Socio (nome, cognome, data_nascita, indirizzo, telefono) values ('Luca', 'Bianchi', '1985-01-01', 'Via Roma 2', '1234567891');
insert into Socio (nome, cognome, data_nascita, indirizzo, telefono) values ('Paolo', 'Verdi', '1990-01-01', 'Via Roma 3', '1234567892');
insert into Socio (nome, cognome, data_nascita, indirizzo, telefono) values ('Giovanni', 'Neri', '1995-01-01', 'Via Roma 4', '1234567893');
insert into Socio (nome, cognome, data_nascita, indirizzo, telefono) values ('Andrea', 'Gialli', '2000-01-01', 'Via Roma 5', '1234567894');

insert into prestiti (idSoccio, idVideo, data_prestito, data_restituzione) values (1, 1, '2021-01-01', '2021-01-10');
insert into prestiti (idSoccio, idVideo, data_prestito, data_restituzione) values (2, 2, '2021-01-01', '2021-01-10');
insert into prestiti (idSoccio, idVideo, data_prestito, data_restituzione) values (3, 3, '2021-01-01', '2021-01-10');
insert into prestiti (idSoccio, idVideo, data_prestito, data_restituzione) values (4, 4, '2021-01-01', '2021-01-10');
insert into prestiti (idSoccio, idVideo, data_prestito, data_restituzione) values (5, 5, '2021-01-01', '2021-01-10');
