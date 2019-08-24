<?php

class fotografia extends model {

    public function getTrabalhos($n = '') {

        $sql = "SELECT *FROM fotografias ";
       

        $array = array();
        if (!empty($n)) {
            $sql .= "LIMIT " . $n;
            
        }
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {

            $array = $sql->fetchAll();
        }
        return $array;
    }

}
