<?php

if (!function_exists('render')) {
    function render(string $view, ?array $data = null): string {
        if ($_SESSION['dir'] === 'backend') {
            $_SESSION['dir'] = 'frontend';
        }
        extract($data);
        ob_start();
        include './nexgensoft/' . $_SESSION['dir'] . '/view/' . $view . '.php';
        return ob_get_clean();
    }
}

if (!function_exists('uri')) {
    function uri(): string {
        return !empty($_SESSION['uri'])
            ? $_SESSION['uri']
            : '/';
    }
}

if (!function_exists('dd')) {
    function dd(array $array): void {
        echo "<pre>";
            print_r($array);
        echo "</pre>";
        die;
    }
}

if (!function_exists('baseUrl')) {
    function baseUrl(string $uri): string {
        return BASE_URL . '/' . $uri;
    }
}

if (!function_exists('redirect')) {
    function redirect(string $uri): void {
        $url = BASE_URL . '/' . $uri;
        header("Location: $url");
        exit;
    }
}

?>
