
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


-- Insérer un statut matrimonial
INSERT INTO statut_matrimonial (nom_statut_matrimonial)
VALUES ('Célibataire');

-- Insérer un genre
INSERT INTO genre (nom_genre)
VALUES ('Homme');

-- Insérer un pays
INSERT INTO pays (nom_pays, appelation)
VALUES ('France', 'République française');

-- Insérer une ville liée à un pays (utilisez l'ID du pays approprié)
INSERT INTO ville (nom_ville, id_pays)
VALUES ('Paris', 1);

-- Insérer une adresse liée à une ville (utilisez l'ID de la ville appropriée)
INSERT INTO adresse (nom_adresse, distance_entreprise, id_ville)
VALUES ('123 Rue de la Ville', 5.5, 1);

-- Insérer une personne avec des informations de base
INSERT INTO personne (nom_personne, prenom_personne, email_personne, telephone_personne, id_genre, date_naissance, id_adresse, nb_enfant, id_statut_matrimonial, asUnCasier)
VALUES ('Doe', 'John', 'john.doe@email.com', '1234567890', 1, '1990-01-01', 1, 2, 1, 0);

-- Insérer un diplôme
INSERT INTO diplome (nom_diplome, annee_etude)
VALUES ('Baccalauréat', 2010);

-- Insérer une filière
INSERT INTO filiere (nom_filiere)
VALUES ('Informatique');

-- Associer un diplôme et une filière à une personne
INSERT INTO diplome_filiere_personne (id_diplome, id_filiere, id_personne)
VALUES (1, 1, 1);

-- Insérer un service
INSERT INTO services (nom_service)
VALUES ('Service A');

-- Insérer une annonce liée à un service et un diplôme
INSERT INTO annonce (id_service, date_annonce, id_diplome, experience_requis, distance_entreprise, duree_contrat, salaire_min, salaire_max, nombre_employe, date_depot_final)
VALUES (1, '2023-09-29 08:00:00', 1, 'Expérience requise pour le Service A', 10.0, 12, 3000.0, 5000.0, 5, '2023-10-10 17:00:00');

-- Associer un genre aux besoins de l'annonce
INSERT INTO besoin_genre (id_annonce, id_genre, score)
VALUES (1, 1, 3);

-- Insérer un casier judiciaire lié à une annonce
INSERT INTO casier_judiciaire (as_un_Casier, id_annonce, score)
VALUES (1, 1, 2);

-- Insérer une compétence technique
INSERT INTO competence_technique (nom_competence_technique)
VALUES ('Programmation');

-- Associer une compétence technique à une annonce
INSERT INTO besoin_competence_technique (id_annonce, id_competence_technique)
VALUES (1, 1);

-- Insérer une compétence linguistique
INSERT INTO competence_linguistique (nom_competence_linguistique)
VALUES ('Anglais');

-- Associer une compétence linguistique à une annonce
INSERT INTO besoin_competence_linguistique (id_annonce, id_competence_linguistique)
VALUES (1, 1);

-- Insérer un CV lié à une personne et une annonce
INSERT INTO cv (id_personne, id_annonce)
VALUES (1, 1);

-- Associer une compétence technique à un CV
INSERT INTO cv_competence_technique (id_cv, id_competence_technique)
VALUES (1, 1);

-- Insérer une fiche QCM
INSERT INTO fiche_qcm (nom_fiche, date_creation,id_service)
VALUES ('QCM Informatique', '2023-09-29 10:00:00', 1);
-- Insérer les questions
INSERT INTO question (question, nbPoint, id_fiche_qcm)
VALUES
    ('Combien font 1 + 1 ?', 5, 1),
    ('Quel est le langage de programmation le plus populaire a ITU?', 5, 1),
    ('Quelle est la capitale de la France ?', 10, 1);
-- Insérer une question liée à une fiche QCM


-- Insérer des réponses liées à une question
INSERT INTO reponse (reponse, valeur_verite, id_question)
VALUES ('1'  ,0,2),
       ('10' ,0,2),
       ('2'  ,1,2),
       ('-50',0,2);
       
INSERT INTO reponse (reponse, valeur_verite, id_question)
VALUES ('Paris', 1,1),
       ('Londres', 0,1),
       ('Berlin', 0,1);


INSERT INTO reponse (reponse, valeur_verite, id_question)
VALUES
    ('Python'     ,0,3),
    ('Java'       ,1,3),
    ('C++'        ,0,3),
    ('JavaScript' ,0,3),
    ('PHP'        ,1,3);

-- Insérer un résultat de test pour une personne
INSERT INTO resultat_test_personne (score, id_cv)
VALUES (80, 1);
