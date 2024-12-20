<?php

class ServicesModel extends BaseModel
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
    
    public function addService(array $service): void
    {
        $tags = json_encode($service['service_tags']);

        $query = "INSERT INTO services
            (`service_name`, service_description, services_tag, services_slug, service_icon, service_img)
            VALUES (
                '" . $service['service_name'] . "',
                '" . $service['service_description'] . "',
                '" . $tags . "',
                '" . $service['service_slug'] . "',
                '" . $service['service_icon']. "',
                '" . $service['service_img']['name'] . "'
            )";

        $this->db->query($query);
    }

    public function updateService(int $serviceId, array $service) {
        $serviceId = (int)$serviceId;

        $serviceName = $service['service_name'];
        $serviceDescription = $service['service_description'];
        $tags = json_encode($service['service_tags']); 
        $serviceSlug = $service['service_slug'];
        $serviceIcon = $service['service_icon']; 
        $serviceImg = $service['service_img']['name'];  
    
        try {
            $query = "UPDATE services SET 
                    service_name = '$serviceName', 
                    service_description = '$serviceDescription', 
                    services_tag = '$tags', 
                    services_slug = '$serviceSlug', 
                    service_icon = '$serviceIcon', 
                    service_img = '$serviceImg' 
                  WHERE service_id = $serviceId";
        
            $this->db->query($query);
        } catch (\Exception $e) {
            throw new Error('Service Id Not Found!');
        }
    }
    
    public function deleteService(int $serviceId): void
    {
        $query = "DELETE FROM services where service_id = '$serviceId'";
        $this->db->query($query);
    }
};
