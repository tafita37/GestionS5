
insert into statut_matrimonial(nom_statut_matrimonial) values 
('Celibataire'),
('En couple'),
('veuf/veuve'),
('Marie');

insert into genre values(default, 'Masculin');
insert into genre values(default, 'Feminin');

insert into pays values(default, 'Madagascar', 'Malagasy');
insert into pays values(default, 'France', 'Francais');
insert into pays values(default, 'Espagne', 'Espagnol');

insert into ville values(default, 'Antananarivo', 1);
insert into ville values(default, 'Paris', 2);
insert into ville values(default, 'Espagne', 3);

insert into personne values(default, 'RAKOTO', 'Jean', 'jean@gmail.com', '034 00 000 00', 1, '2003-09-28 22:00'::timestamp, null, 0, 1, 1);
insert into personne_nationalite values(default, 1, 1);

insert into services values(default, 'Informatique');
insert into services values(default, 'Administration');
insert into services values(default, 'Finance et Comptabilité');
    
insert into filiere values(default, 'Informatique');
insert into filiere values(default, 'Medecine');
insert into filiere values(default, 'Comptabilite');

insert into diplome values(default, 'CPE', 5);
insert into diplome values(default, 'BEPC', 9);
insert into diplome values(default, 'BAC', 12);
insert into diplome values(default, 'Licence', 15);
insert into diplome values(default, 'Master', 17);
insert into diplome values(default, 'Doctorat', 20);
insert into diplome values(default, 'professora',24);

insert into diplome_filiere_personne values (default,6,1,1);
