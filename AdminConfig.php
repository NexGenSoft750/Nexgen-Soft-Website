<?php

class ConfigSettings extends BaseModel
{
    public function get(string $key): mixed {
        $result = $this->db->query("SELECT `value` FROM settings WHERE `key` = '$key'");

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['value'];
        }
        
        return null;
    }
}

?>