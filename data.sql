             
            
-- Données
insert into personne values(default, 'RAKOTO', 'Jean', 'jean@gmail.com', '034 00 000 00', 1, '2003-09-28 22:00'::timestamp, null, 0, 1, 1);
insert into personne(nom_personne, prenom_personne, email_personne, telephone_personne, id_genre, date_naissance, id_adresse, nb_enfant, id_statut_matrimonial, asUnCasier)
values('Mirenty', 'Jean', 'mi@gmail.com', '034 00 000 01', 1, '2003-09-29 22:00'::timestamp, null, 0, 1, 1);
insert into personne(nom_personne, prenom_personne, email_personne, telephone_personne, id_genre, date_naissance, id_adresse, nb_enfant, id_statut_matrimonial, asUnCasier)
values('Tafita', 'Jean', 'ta@gmail.com', '034 00 000 02', 1, '2003-09-30 22:00'::timestamp, null, 0, 1, 1);

--service

insert into annonce(id_service, date_annonce, id_diplome, id_filiere, 
experience_requis, distance_entreprise, duree_contrat, salaire_min,  salaire_max, 
nombre_employe, date_depot_final)
values(1,'2003-09-30 22:00'::timestamp,1,1,3,10,2,2000,5000,3,'2003-10-30 22:00'::timestamp);
insert into annonce(id_service, date_annonce, id_diplome, id_filiere, 
experience_requis, distance_entreprise, duree_contrat, salaire_min,  salaire_max, 
nombre_employe, date_depot_final)
values(1,'2003-10-10 22:00'::timestamp,2,2,5,15,3,2000,7000,3,'2003-11-20 23:00'::timestamp);

insert into annonce(id_service, date_annonce, id_diplome, id_filiere, 
experience_requis, distance_entreprise, duree_contrat, salaire_min,  salaire_max, 
nombre_employe, date_depot_final)
values(1,'2003-11-10 22:00'::timestamp,3,3,5,25,6,3000,8000,4,'2003-12-20 23:00'::timestamp);

insert into cv (id_personne,id_annonce) values(1,1);
insert into cv (id_personne,id_annonce) values(2,2);
insert into cv (id_personne,id_annonce) values(3,3);


insert into nationalite (nom) values('Malagasy');
insert into nationalite (nom) values('Anglais');
insert into nationalite (nom) values('Francais');



insert into personne_nationalite (id_nationalite,id_personne) values(1,1);
insert into personne_nationalite (id_nationalite,id_personne) values(1,2);
insert into personne_nationalite (id_nationalite,id_personne) values(3,3);


insert into diplome_filiere_personne (id_diplome,id_filiere,id_personne) values(4,1,2);
insert into diplome_filiere_personne (id_diplome,id_filiere,id_personne) values(5,3,2);
insert into diplome_filiere_personne (id_diplome,id_filiere,id_personne) values(6,2,2);