-- modification type champ personne
    ALTER TABLE personne 
            ALTER COLUMN id_adresse TYPE INT;
    ALTER TABLE personne 
            ALTER COLUMN nb_enfant TYPE INT;


create view v_cv As 
    select cv.id_cv as id_cv,
    personne.id_personne as id_personne,
    personne.nom_personne as nom,
    personne.prenom_personne as prenom, 
    personne.telephone_personne as telephone, 
    personne.email_personne as email
    from cv 
    join personne
    on cv.id_personne=personne.id_personne
    join annonce
    on cv.id_annonce=annonce.id_annonce;


create view  v_personne_nationalite As
        select  personne.id_personne as id_personne,
        personne.nom_personne as nom,
        personne.prenom_personne as prenom,  
        nationalite.nom as nationalite
        from personne_nationalite 
        join personne
        on personne_nationalite.id_personne=personne.id_personne
        join nationalite 
        on personne_nationalite.id_nationalite=nationalite.id_nationalite;

create view  v_diplome_filiere_personne As
        select  personne.id_personne as id_personne,
        personne.nom_personne as nom,
        personne.prenom_personne as prenom,  
        filiere.nom_filiere as filiere,
        diplome.nom_diplome as diplome,
        diplome.annee_etude as annee_etude
        from diplome_filiere_personne
        join personne
        on diplome_filiere_personne.id_personne=personne.id_personne
        join filiere 
        on diplome_filiere_personne.id_filiere=filiere.id_filiere
        join diplome
        on diplome_filiere_personne.id_diplome=diplome.id_diplome;




