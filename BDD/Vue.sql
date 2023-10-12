DROP VIEW v_fiche_question_reponse;

CREATE OR REPLACE VIEW v_fiche_question_reponse AS
SELECT
    q.question,
    q.nbPoint,
    q.id_question,
    r.id_reponse,
    r.reponse,
    r.valeur_verite,
    fq.id_fiche_qcm as id_fiche,
    fq.nom_fiche,
    fq.id_service 
FROM
    fiche_qcm fq
JOIN
    question q
ON
    fq.id_fiche_qcm = q.id_fiche_qcm
JOIN
    reponse r
ON
    q.id_question = r.id_question;
