<?php

$routes = [
    '/' => ['HomeController', 'list'],
    'services' => ['ServicesController', 'index'],
    'portfolio' => ['PortfolioController', 'index'],
    'contactUs' => ['ContactUsController', 'index'],
    'caseStudy' => ['CaseStudyController', 'index'],
    'admin' => ['Dashboard', 'index'],
    'admin/login' => ['Login', 'index'],
    'admin/login/submit' => ['Login', 'submit'],
    'admin/login/logout' => ['Login', 'logout'],
    'admin/settings/add' => ['Setting', 'add'],
    'admin/services' => ['Services', 'index'],
    'admin/services/getForm' => ['Services', 'getForm'],
    'admin/services/delete' => ['Services', 'delete'],

];

function requireController($controllerInfo): void
{
    try {
        [$controllerName, $method] = $controllerInfo;

        require_once ADMIN_PATH . 'library/User.php';

        if ($_SESSION['dir'] === 'admin') {
            $controller = ADMIN_CONTROLLER_PATH . $controllerName . '.php';
            $user = new User();

            // if (!isset($_SESSION['alreayRedirectToLogin'])) {
            //     redirectToLoginPage();
            // } else {
            //     if (!$_SESSION['alreayRedirectToLogin']) {
            //         if (isset($_SESSION['userId']) || !$user->isLogin()) {
            //             redirectToLoginPage();
            //         }
            //     }
            // }            
        } else {
            $controller = CATALOG_CONTROLLER_PATH . $controllerName . '.php';
        }

        require_once $controller;

        $className = $controllerName;
        $obj = new $className();

        if (method_exists($obj, $method)) {
            $obj->$method();
        } else {
            echo "Method '$method' not found in controller '$className'";
            die();
        }
    } catch (Exception $e) {
        echo "Error loading controller: " . $e->getMessage() . "<br>";
        echo "Something went wrong with routes";
        die();
    }
}

function redirectToLoginPage()
{
    $_SESSION['alreayRedirectToLogin'] = true;
    redirect('admin/login');
    return;
}

if (isset($routes[uri()])) {
    $controllerInfo = $routes[uri()];
    requireController($controllerInfo);
} else {
    echo '404 page not found';
    die();
}
