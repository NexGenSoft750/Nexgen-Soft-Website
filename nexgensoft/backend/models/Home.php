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

    public function saveEnquiry(array $enquiry): void {
        $query = "INSERT INTO enquiry
                    (
                        first_name,
                        last_name,
                        company_name,
                        email,
                        phone_number,
                        `message`
                    )
                VALUES
                    (
                        '" . $enquiry['first_name'] . "',
                        '" . $enquiry['last_name'] . "',
                        '" . $enquiry['company_name'] . "',
                        '" . $enquiry['email'] . "',
                        '" . $enquiry['phone_number'] . "',
                        '" . $enquiry['message'] . "'
                    )";


        $this->db->query($query);
    }
};

?>