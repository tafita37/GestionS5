<?php
class DaoM extends CI_Model
{
    
    /*
    @author mirenty ratsimbazafy mirentybg4@gmail.com
    */
    function insert($table_name, $associative_array)
    {
        $str = $this->db->insert_string($table_name, $associative_array);
        return $this->db->query($str); //retourne 1
        /*
            exemple : 
            $nom ="mimi";
            $age = 666 ;
            $data = array('nom' => $nom, 'age'=>$age);
            echo $this->DaoModel->insert('personne',$data);
         */
    }
    public function getAll($table_name) {
        $query = $this->db->get($table_name);
        
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            echo "La table {$table_name} EST VIDE !!!" ;
            return array();
        }
        /*
            exemple : 
            +   $toutes_les_personne =$this->DaoModel->selectWithCondition("personne");
                for($ligne=0;$i<count($toutes_les_personne);$ligne++)
                {
                    echo $toutes_les_personne[$ligne]['nom'] ."<br>";
                }
        */
    }
    public function selectWithCondition($tableName, $condition="1=1") {
        $query = "SELECT * FROM {$tableName} WHERE {$condition}";
        $result =$this->db->query($query)->result_array();
        return $result;
        /*
            exemple : 
            +   $toutes_les_personne =$this->DaoModel->selectWithCondition("personne");
                $personneRandom = $this->DaoModel->selectWithCondition("personne","nom like '%mi%' and age =18");
                si l'ensemble des personnes est de 1 ou mois alors condition est egale a $personneRandom
                $condition = ( count($toutes_les_personne) > 1 ) ? $toutes_les_personne : $personneRandom
                for($ligne=0;$i<count($condition);$ligne++)
                {
                    echo $condition[$ligne]['nom'] ."<br>";
                }
        */
    }
    public function deleteRows($tableName, $condition) {
        $query = "DELETE FROM {$tableName} WHERE {$condition}";
        $result =$this->db->query($query);
        return $result;
    }
}
?>