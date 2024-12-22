<?php

class Database {
    private $connection;

    public function __construct()
    {
        // Replace environment variables with actual values
        $host = 'localhost';  // Use 'localhost' or your actual MySQL host
        $user = 'u743791645_root';  // Your database username
        $password = 'Nexgensoft12@.';  // Your database password
        $database = 'u743791645_nexgensoft';  // Your database name

        // Establish the database connection
        $this->connection = mysqli_connect($host, $user, $password, $database);

        // Check if the connection was successful
        if (mysqli_connect_errno()) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function query($sql) {
        return mysqli_query($this->connection, $sql);
    }
};

?>
