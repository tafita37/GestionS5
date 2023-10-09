-- Annonce et diplome
    create or replace view v_annonce_diplome as select annonce.*, diplome.nom_diplome, diplome.annee_etude from annonce join diplome on diplome.id_diplome=annonce.id_diplome where estConfigure=11;

-- Annee diplome besoin filiere
    create or replace view v_annonce_diplome_filiere as select v_annonce_diplome.*, filiere.nom_filiere from v_annonce_diplome join filiere on v_annonce_diplome.id_filiere=filiere.id_filiere;

-- Besoin genre
    create or replace view v_besoin_genre as select besoin_genre.*, genre.nom_genre from besoin_genre join genre on genre.id_genre=besoin_genre.id_genre;

-- Besoin competence techniqe
    create or replace view v_besoin_competence_technique as select besoin_competence_technique.*, competence_technique.nom_competence_technique from besoin_competence_technique join competence_technique on competence_technique.id_competence_technique=besoin_competence_technique.id_competence_technique;

-- Pays et competence linguistique
    create or replace view v_pays_competence_linguistique as select pays_competence_linguistique.*, pays.nom_pays, pays.appelation, competence_linguistique.nom_competence_linguistique from pays join pays_competence_linguistique on pays.id_pays=pays_competence_linguistique.id_pays join competence_linguistique on pays_competence_linguistique.id_competence_linguistique=competence_linguistique.id_competence_linguistique;

-- Besoin competence linguistique
    create or replace view v_besoin_competence_linguistique as select v_pays_competence_linguistique.*, besoin_competence_linguistique.id_besoin_competence_linguistique, besoin_competence_linguistique.id_annonce, besoin_competence_linguistique.score from besoin_competence_linguistique join v_pays_competence_linguistique on v_pays_competence_linguistique.id_pays_competence_linguistique=besoin_competence_linguistique.id_pays_competence_linguistique;

-- Annonce date annonce
    create or replace view v_date_annonce as select annonce.id_annonce, extract(day from annonce.date_annonce) as jour_annonce, mois.*, extract(year from annonce.date_annonce) as annee_annonce from mois join annonce on extract(month from annonce.date_annonce)=mois.id_mois;

-- Annonce date depot final
    create or replace view v_date_depot_final as select annonce.id_annonce, extract(day from annonce.date_depot_final) as jour_depot_final, mois.*, extract(year from annonce.date_annonce) as annee_depot_final from mois join annonce on extract(month from annonce.date_depot_final)=mois.id_mois;

-- Responsable et service correspondant
    create or replace view v_responsable as select responsable.*, services.nom_service from responsable join services on services.id_service=responsable.id_service;

-- Annonce non configurer
    create or replace view v_annonce_non_configure as select*from annonce where estConfigure=0;