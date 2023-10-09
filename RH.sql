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

    -- Genre
        create table genre(
            id_genre serial primary key,
            nom_genre varchar(20)
        );
                
        create table competence_linguistique(
            id_competence_linguistique serial primary key, 
            nom_competence_linguistique text 
        );

    -- Pays
        create table pays(
            id_pays serial primary key, 
            nom_pays varchar(50), 
            appelation varchar(60)
        );

        create table pays_competence_linguistique(
            id_pays_competence_linguistique serial primary key,
            id_pays int references pays(id_pays),
            id_competence_linguistique int references competence_linguistique(id_competence_linguistique)
        );
        
    -- Ville
        create table ville(
            id_ville serial primary key, 
            nom_ville varchar(30), 
            id_pays int references pays(id_pays)
        );
        
    -- Adresse
        create table adresse(
            id_adresse serial primary key, 
            nom_adresse varchar(20), 
            distance_entreprise numeric, 
            id_ville int,
            FOREIGN KEY (id_ville) REFERENCES ville(id_ville)
        );
    
    -- Personne
        create table personne(
            id_personne serial primary key, 
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

    -- Service
        create table services(
            id_service serial primary key, 
            nom_service varchar(30)
        );
    
    -- Filiere
        create table filiere(
            id_filiere serial primary key, 
            nom_filiere varchar(30)
        );
    
    -- Niveau d'etude
        create table diplome(
            id_diplome serial primary key, 
            nom_diplome varchar(30), 
            annee_etude numeric
        );
    
        create table diplome_filiere_personne(
            id_diplome_filiere_personne serial primary key,
            id_diplome int references diplome(id_diplome),
            id_filiere int references filiere(id_filiere),
            id_personne int references personne(id_personne)
        );
    
        create TABLE annonce(
            id_annonce serial primary key,
            id_service int references services(id_service),
            titre_annonce varchar(30),
            date_annonce timestamp,
            id_diplome int references diplome(id_diplome),
            id_filiere int references filiere(id_filiere),
            experience_requis numeric not null,
            distance_entreprise numeric not null,
            duree_contrat integer not null default 0,
            salaire_min real,
            salaire_max real,
            v_horaire_jour integer,
            date_depot_final timestamp, 
            image_annonce varchar(20),
            age_min real,
            age_max real,
            description_annonce text,
            estConfigure int
        );
 
        create table besoin_genre(
            id_besoin_genre serial primary key,
            id_annonce int references annonce(id_annonce),
            id_genre int references genre(id_genre),
            score int not null
        );

        create table besoin_nationalite(
            id_besoin_nationalite serial primary key,
            id_annonce int references annonce(id_annonce),
            id_nationalite int references pays(id_pays),
            score int not null
        );

        create table besoin_diplome(
            id_besoin_diplome serial primary key,
            id_annonce int references annonce(id_annonce),
            id_diplome int references diplome(id_diplome),
            score int
        );

        create table besoin_experience(
            id_besoin_experience serial primary key,
            id_annonce int references annonce(id_annonce),
            score int,
            nb_annee int
        );

        create table besoin_position(
            id_besoin_position serial primary key,
            id_annonce int references annonce(id_annonce),
            score int,
            nb_km int
        );

        create table casier_judiciaire(
            id_casier_judiciaire serial primary key,
            as_un_Casier integer CHECK (as_un_Casier IN (0, 1)), 
            id_annonce int references annonce(id_annonce),
            score integer not null
        );

        create table competence_technique(
            id_competence_technique serial primary key, 
            nom_competence_technique varchar(255) not null unique
        );

        CREATE TABLE besoin_competence_technique(
            id_besoin_competence_technique serial primary key,
            id_annonce int references annonce(id_annonce), 
            id_competence_technique int references competence_technique(id_competence_technique),
            score int
        );

        create table besoin_competence_linguistique(
            id_besoin_competence_linguistique serial primary key,
            id_annonce int references annonce(id_annonce),
            id_pays_competence_linguistique int references pays_competence_linguistique(id_pays_competence_linguistique),
            score int
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

        create table mois(
            id_mois serial primary key,
            nom_mois varchar(30)
        );

        create table responsable(
            id_responsable serial primary key,
            nom_responsable varchar(30),
            prenom_responsable varchar(30),
            email_responsable varchar(30) unique,
            mdp_responsable varchar(10),
            numero_responsable varchar(20) unique,
            id_service int references services(id_service)
        );

        create table rh(
            id_rh serial primary key,
            nom_rh varchar(30),
            prenom_rh varchar(30),
            email_rh varchar(30) unique,
            mdp_rh varchar(20),
            numero_rh varchar(20) unique
        );

        create table journalier(
            id_journalier serial primary key,
            nom_journalier varchar(30),
            nb_jour int
        );