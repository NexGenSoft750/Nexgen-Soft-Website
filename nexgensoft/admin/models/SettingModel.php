<?php

class SettingModel extends BaseModel
{
    public function addSettings(array $settings, ?string $code = 'config') {
        $this->db->query("DELETE FROM settings where `code` = '$code'");

        foreach($settings as $key => $value) {
            $this->db->query("
                INSERT INTO settings (`code`, `key`, `value`) 
                VALUES ('$code', '$key', '$value')
            ");
        }
    }
};

?>