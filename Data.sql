-- Statut matrimonial
    insert into statut_matrimonial(nom_statut_matrimonial) values ('Celibataire'),
                                                                    ('En couple'),
                                                                    ('veuf/veuve'),
                                                                    ('Marie');

-- Genre
    insert into genre values(default, 'Masculin');
    insert into genre values(default, 'Feminin');

-- Compétence linguistique
    insert into competence_linguistique values(default, 'Malagasy');
    insert into competence_linguistique values(default, 'Anglais');
    insert into competence_linguistique values(default, 'Franais');
    insert into competence_linguistique values(default, 'Allemand');
    insert into competence_linguistique values(default, 'Espagnol');

-- Pays
    insert into pays values(default, 'Madagascar', 'Malagasy');
    insert into pays values(default, 'France', 'Francais');
    insert into pays values(default, 'Espagne', 'Espagnol');

-- Pays et Competence Linguistique
    insert into pays_competence_linguistique values(default, 1, 1);
    insert into pays_competence_linguistique values(default, 2, 3);
    insert into pays_competence_linguistique values(default, 3, 5);

-- Ville
    insert into ville values(default, 'Antananarivo', 1);
    insert into ville values(default, 'Paris', 2);
    insert into ville values(default, 'Espagne', 3);

-- Personne
    insert into personne values(default, 'RAKOTO', 'Jean', 'jean@gmail.com', '034 00 000 00', 1, '2003-09-28 22:00'::timestamp, null, 0, 1, 1);

-- Personne nationalité
    insert into personne_nationalite values(default, 1, 1);

-- Services
    insert into services values(default, 'Informatique');
    insert into services values(default, 'Administration');
    insert into services values(default, 'Finance et Comptabilité');

-- Filiere
    insert into filiere values(default, 'Informatique');
    insert into filiere values(default, 'Medecine');
    insert into filiere values(default, 'Comptabilite');

-- Diplome
    insert into diplome values(default, 'CPE', 5);
    insert into diplome values(default, 'BEPC', 9);
    insert into diplome values(default, 'BAC', 12);
    insert into diplome values(default, 'Licence', 15);
    insert into diplome values(default, 'Master', 17);
    insert into diplome values(default, 'Doctorat', 20);
    insert into diplome values(default, 'professora',24);

-- Diplome filiere personne
    insert into diplome_filiere_personne values (default,6,1,1);

-- Annonce
    insert into annonce values(default, 1, 'Developpeur Informaticien', '2023-07-12'::timestamp, 4, 1, 3, 20, default, 2000, 4000, 34, '2023-08-12'::timestamp, 'dvInf.png', 18, 60, 'Un informaticien qui n''a pas peur de s''informatiser. Souhaitez vous faire partie de la meilleure equipe informatique qui n''existe pas encore. Rejoignez notre entreprise qui n''a pas de nom. Ensemble digitalisons.', 11);

-- Besoin genre
    insert into besoin_genre values(default, 1, 1, 5);
    insert into besoin_genre values(default, 1, 2, 9);

-- Besoin en nationalité
    insert into besoin_nationalite values(default, 1, 1, 10);
    insert into besoin_nationalite values(default, 1, 2, 2);

-- Casier judiciaire
    insert into casier_judiciaire values(default, 0, 1, 8);
    insert into casier_judiciaire values(default, 1, 1, 3);

-- Competence technique
    insert into competence_technique values(default, 'Node JS');
    insert into competence_technique values(default, 'Ionic');
    insert into competence_technique values(default, 'Spring boot WEB MVC');
    insert into competence_technique values(default, 'Laravel');
    insert into competence_technique values(default, 'Syfony');
    insert into competence_technique values(default, 'React');
    insert into competence_technique values(default, 'Angular');
    insert into competence_technique values(default, 'Vue js');

-- Besoin en competence technique
    insert into besoin_competence_technique values(default, 1, 1, 2);
    insert into besoin_competence_technique values(default, 1, 2, 2);
    insert into besoin_competence_technique values(default, 1, 3, 2);
    insert into besoin_competence_technique values(default, 1, 4, 2);
    insert into besoin_competence_technique values(default, 1, 5, 2);
    insert into besoin_competence_technique values(default, 1, 6, 2);
    insert into besoin_competence_technique values(default, 1, 7, 2);
    insert into besoin_competence_technique values(default, 1, 8, 2);

-- Besoin en competence linguistique
    insert into besoin_competence_linguistique values(default, 1, 1, 10);
    insert into besoin_competence_linguistique values(default, 1, 2, 2);

-- Mois
    insert into mois values(default, 'Janvier');
    insert into mois values(default, 'Fevrier');
    insert into mois values(default, 'Mars');
    insert into mois values(default, 'Avril');
    insert into mois values(default, 'Mai');
    insert into mois values(default, 'Juin');
    insert into mois values(default, 'Juillet');
    insert into mois values(default, 'Aout');
    insert into mois values(default, 'Septembre');
    insert into mois values(default, 'Octobre');
    insert into mois values(default, 'Novembre');
    insert into mois values(default, 'Decembre');

-- Responsable
    insert into responsable values(default, 'RAKOTO1', 'Jean1', 'jean1@gmail.com', '1111', '034 00 000 00', 1);
    insert into responsable values(default, 'RAKOTO2', 'Jean2', 'jean2@gmail.com', '2222', '034 11 111 11', 2);
    insert into responsable values(default, 'RAKOTO3', 'Jean3', 'jean3@gmail.com', '3333', '034 22 222 22', 3);

-- Journalier
    insert into journalier values(default, 'Jour', 1);
    insert into journalier values(default, 'Semaine', 6);
    insert into journalier values(default, 'Mois', 24);
    insert into journalier values(default, 'Annee', 288);

-- RH
    insert into rh values(default, 'RAKOTO', 'Jean', 'jean@gmail.com', '1111', '034 33 333 33');