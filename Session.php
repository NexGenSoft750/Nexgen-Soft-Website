<?php
 
class Session 
{
    public function set(string $key , mixed $value): void {
        $_SESSION[$key] = $value;
    }

    public function get(string $key): mixed {
        return isset($_SESSION[$key])
            ? $_SESSION[$key]
            : null;
    }

    public function all(): array{
        return $_SESSION;
    }

    public function delete(string $key): void {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        } else {
            throw new Error('SESSION Key: ' . $key . 'not found!' );
            return;
        }
    }

    public function unset(): void {
        session_unset();
    }

    public function destory(): void {
        session_destroy();
    }
};

?>