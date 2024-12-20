<?php

class ServicesBackendModel extends BaseModel
{
    public function getServices(): array | null
    {
        $results = $this->db->query("SELECT * FROM services");

        if ($results->num_rows) {
            $rows = $results->fetch_all(MYSQLI_ASSOC);
            return $rows;
        }

        return null;
    }

    public function getService(int $serviceId): array {
        $query = "SELECT * FROM services WHERE service_id = " . $serviceId;
    
        $result = $this->db->query($query);
        
        if ($result && $result->num_rows > 0) {
            return $result->fetch_assoc();
        }
        
        return [];
    }
};
