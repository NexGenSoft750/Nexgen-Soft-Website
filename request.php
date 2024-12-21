<?php

class Request {
    public function get(string $key): mixed {
        return isset($_GET[$key]) ? $_GET[$key] : null;
    }

    public function post(string $key): mixed {
        return isset($_POST[$key]) ? $_POST[$key] : null;
    }

    public function file(string $key): array | null {
        return isset($_FILES[$key]) ? $_FILES[$key] : null;
    }

    public function isPostRequest(): bool {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }    

    public function all() {
        return array_merge(
            $_GET,
            $_POST,
            $_FILES
        );        
    }
};

?>