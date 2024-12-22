<?php

    $currentUrl = $_SERVER['REQUEST_URI'];
    $path = parse_url($currentUrl, PHP_URL_PATH);
    $uri = substr($path, 1);
    $_SESSION['uri'] = $uri;


    if (strpos($uri, 'admin') !== false) {
        $_SESSION['dir'] = 'admin';
    } else {
        $_SESSION['dir'] = 'backend';
    }

    define('MAIN_DIR', './nexgensoft/');
    define('CATALOG_CONTROLLER_PATH', './nexgensoft/backend/controllers/');
    define('ADMIN_PATH', './nexgensoft/admin/');
    define('ADMIN_CONTROLLER_PATH', './nexgensoft/admin/controllers/');
    define('ADMIN_MODEL_PATH', './nexgensoft/admin/models/');
    define('CATALOG_MODEL_PATH', './nexgensoft/backend/models/');   
    // For live environment
    define('BASE_URL', 'https://nexgensoft.io');  // Update to live site URL
    define('DIR_ASSETS', 'https://nexgensoft.io/nexgensoft/frontend/assets/');  // Update to correct live path

    ob_start();
    require_once CATALOG_CONTROLLER_PATH . 'BaseController' . '.php';
    require_once CATALOG_MODEL_PATH . 'BaseModel' . '.php';
        
    require_once './Database.php';
    require_once './Load.php';
    require_once './Session.php';
    require_once './AdminConfig.php';

?>