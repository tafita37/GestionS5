<?php
class CRUD_Model extends CI_Model
{
    function getFiche($condition = "1=1")
    {
        return $this->DaoM->selectWithCondition("v_fiche_question_reponse", $condition);
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