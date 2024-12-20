<?php

class User {
    public function isLogin(): bool {
        return true;
        return isset($_SESSION['userId']) ? true : false;
    }
};

?>