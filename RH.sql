-- Database
    -- RH
        create database rh;
        \c rh;

-- Tables
    -- Statut matrimonial
            create table statut_matrimonial(
                id_statut_matrimonial serial primary key,
                nom_statut_matrimonial varchar(20)
            );
            
            -- Données
            insert into statut_matrimonial(nom_statut_matrimonial) values ('Celibataire'),
                                                                            ('En couple'),
                                                                            ('veuf/veuve'),
                                                                            ('Marie');
        -- Genre
            create table genre(
                id_genre serial primary key,
                nom_genre varchar(20)
            );
            -- Données
                insert into genre values(default, 'Masculin');
                insert into genre values(default, 'Feminin');
        -- Pays
            create table pays(
                id_pays serial primary key, 
                nom_pays varchar(50), 
                appelation varchar(60)
            );
            
            -- Données
                insert into pays values(default, 'Madagascar', 'Malagasy');
                insert into pays values(default, 'France', 'Francais');
                insert into pays values(default, 'Espagne', 'Espagnol');
        
        -- Ville
            create table ville(
                id_ville serial primary key, 
                nom_ville varchar(30), 
                id_pays int references pays(id_pays)
            );
            
            -- Données
                insert into ville values(default, 'Antananarivo', 1);
                insert into ville values(default, 'Paris', 2);
                insert into ville values(default, 'Espagne', 3);
        
    -- Adresse
        create table adresse(
            id_adresse serial primary key, 
            nom_adresse varchar(20), 
            distance_entreprise numeric, 
            id_ville int,
            FOREIGN KEY (id_ville) REFERENCES ville(id_ville)
        );

        insert into adresse(nom_adresse,distance_entreprise, id_ville) values('Andoharanofotsy', 12, 1);
        insert into adresse(nom_adresse,distance_entreprise, id_ville) values('Ambohipo', 15, 1);
        insert into adresse(nom_adresse,distance_entreprise, id_ville) values('Andohamandroseza', 15, 1);

    -- Personne
        create table personne(
            cccccc serial primary key, 
            nom_personne varchar(30) not null, 
            prenom_personne varchar(30) not null, 
            email_personne varchar(30) not null, 
            telephone_personne varchar(30) not null,  
            id_genre int references genre(id_genre), 
            date_naissance timestamp not null, 
            id_adresse int references adresse(id_adresse), 
            nb_enfant numeric not null, 
            id_statut_matrimonial int references statut_matrimonial(id_statut_matrimonial), 
            asUnCasier int not null
        );

        
    -- Nationalite de personne
        create table personne_nationalite(
            id_personne_nationalite serial primary key, 
            id_nationalite int references pays(id_pays), 
            id_personne int references pays(id_pays)
        );

        -- Données
            insert into personne_nationalite values(default, 1, 1);

    -- Service
        create table services(
            id_service serial primary key, 
            nom_service varchar(30)
        );
        
        -- Données
            insert into services values(default, 'Informatique');
            insert into services values(default, 'Administration');
            insert into services values(default, 'Finance et Comptabilité');
    
    -- Filiere
        create table filiere(
            id_filiere serial primary key, 
            nom_filiere varchar(30)
        );
        
        -- Données
            insert into filiere values(default, 'Informatique');
            insert into filiere values(default, 'Medecine');
            insert into filiere values(default, 'Comptabilite');
    
    -- Niveau d'etude
        create table diplome(
            id_diplome serial primary key, 
            nom_diplome varchar(30), 
            annee_etude numeric
        );
        
        insert into diplome values(default, 'CPE', 5);
        insert into diplome values(default, 'BEPC', 9);
        insert into diplome values(default, 'BAC', 12);
        insert into diplome values(default, 'Licence', 15);
        insert into diplome values(default, 'Master', 17);
        insert into diplome values(default, 'Doctorat', 20);
        insert into diplome values(default, 'professora',24);
    
    create table diplome_filiere_personne(
        id_diplome_filiere_personne serial primary key,
        id_diplome int references diplome(id_diplome),
        id_filiere int references filiere(id_filiere),
        id_personne int references personne(id_personne)
    );
    insert into diplome_filiere_personne values (default,6,1,1);
    
    
    
    create TABLE annonce(
        id_annonce serial primary key,
        id_service int references services(id_service),
        date_annonce timestamp,
        id_diplome int references diplome(id_diplome),
        id_filiere int references filiere(id_filiere),
        experience_requis numeric not null,
        distance_entreprise numeric not null,
        duree_contrat integer not null default 0,
        salaire_min real,
        salaire_max real,
        nombre_employe integer,
        date_depot_final timestamp,
        image_annonce varchar(20)
    );
    
    create table besoin_genre(
        id_besoin_genre serial primary key,
        id_annonce int references annonce(id_annonce),
        id_genre int references genre(id_genre),
        score int not null
    );


create table casier_judiciaire(
        id_casier_judiciaire serial primary key,
        as_un_Casier integer CHECK (as_un_Casier IN (0, 1)), 
        id_annonce int references annonce(id_annonce),
        score integer not null
    );

create table competence_technique(
    id_competence_technique serial primary key, 
    nom_competence_technique varchar(255) not null
    );

CREATE TABLE besoin_competence_technique(
    id_besoin_competence_technique serial primary key,
    id_annonce int references annonce(id_annonce), 
    id_competence_technique int references competence_technique(id_competence_technique)
    );

create table competence_linguistique(
    id_competence_linguistique serial primary key, 
    nom_competence_linguistique text 
    );

create table besoin_competence_linguistique(
    id_besoin_competence_linguistique serial primary key,
    id_annonce int references annonce(id_annonce),
    id_competence_linguistique int references competence_linguistique(id_competence_linguistique)
    );
    
create table cv(
    id_cv serial primary key,
    id_personne int references pays(id_pays),
    id_annonce int references annonce(id_annonce)
    );

CREATE table cv_competence_technique(
    id_cv_competence_technique serial primary key,
    id_cv int references cv(id_cv),
    id_competence_technique int references competence_technique(id_competence_technique)
    );

CREATE table fiche_qcm(
    id_fiche_qcm serial primary key,
    nom_fiche varchar(50),
    date_creation timestamp,
    id_service int references services(id_service)
);
create table question(
    id_question serial primary key, 
    question text,
    nbPoint Integer,
    id_service int references services(id_service)
    );

CREATE TABLE reponse(
    id_reponse serial primary key,
    reponse text, 
    valeur_verite integer CHECK (valeur_verite IN (0, 1)), 
    id_question int references question(id_question) 
);

CREATE table nationalite(
    id_nationalite serial primary key,
    nom varchar(50)
);
