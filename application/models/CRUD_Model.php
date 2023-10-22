<?php
class CRUD_Model extends CI_Model
{
    function getFiche($condition = "1=1")
    {
        return $this->DaoM->selectWithCondition("fiche_qcm", $condition);
    }
    function getFicheView($condition = "1=1")
    {
        return $this->DaoM->selectWithCondition("v_fiche_qestion_reponse", $condition);
    }
    function getQuestion($condition = "1=1")
    {
        return $this->DaoM->selectWithCondition("question", $condition);
    }
    function getReponse($condition = "1=1")
    {
        return $this->DaoM->selectWithCondition("reponse", $condition);
    }
    function insertFiche($associative_array)
    {
        return $this->DaoM->insert("fiche_qcm", $associative_array);

    }
    function insertQuestion($associative_array)
    {
        return $str = $this->DaoM->insert("question", $associative_array);

    }
    function insertReponse($associative_array)
    {
        return $str = $this->DaoM->insert("reponse", $associative_array);

    }
    public function insertResultatTestPersonne($data)
    {
        $this->db->insert('resultat_test_personne', $data);
        return $this->db->insert_id(); // Retourne l'ID de l'insertion (si nécessaire)
    }

    public function getReponsesCorrectesPourQuestion($id_question)
    {
        $this->db->select('reponse');
        $this->db->from('reponse');
        $this->db->where('id_question', $id_question);
        $this->db->where('valeur_verite', 1); // Assurez-vous que 1 représente les réponses correctes dans votre base de données
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array(); // Aucune réponse correcte trouvée
        }
    }
    public function getNombreReponseParQuestion($id_question)
    {
        $this->db->where('id_question', $id_question);
        return $this->db->count_all_results('reponse');
    }

    public function getidquestion($question)
    {
        $this->db->select('id_question');
        $this->db->from('question');
        $this->db->where('question', $question);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result->id_question;
        } else {
            return null; // Aucune question correspondante trouvée
        }
    }

    function transformArray($originalArray)
    {
        $result = [];
        $currentQuestion = '';

        foreach ($originalArray as $key => $value) {
            if (strpos($key, 'question') === 0) {
                $currentQuestion = $key;
                $result[$currentQuestion]['question'] = $value;
                $result[$currentQuestion]['reponses'] = [];
            } elseif (strpos($key, 'nbpoint') === 0) {
                $result[$currentQuestion]['nbpoint'] = $value;
            } elseif (strpos($key, 'reponse') === 0) {
                $reponseNumber = substr($key, 7); // Extrait le numéro de réponse
                $result[$currentQuestion]['reponses'][$key]['reponse'] = $value;
                $result[$currentQuestion]['reponses'][$key]['radio'] = $originalArray['radio' . $reponseNumber];
            }
        }

        return $result;
    }
}
?>