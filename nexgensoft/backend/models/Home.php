<?php

class Home extends BaseModel
{
    public function getSettings(): array {
       $result = $this->db->query('SELECT * FROM settings');
       if ($result && mysqli_num_rows($result)) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
       }

       return [];
    }
};

?>