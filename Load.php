<?php

class Load {
    public function model(string $model): object {
        try {
            require_once  MAIN_DIR . $_SESSION['dir'] . '/models' . '/' . ucfirst($model) . '.php';
            return new $model();
        } catch(\Exception $e) {
            echo "Error while loading model: " . $e->getMessage() . "<br>";
            echo "Somthing went worong while loading model";
            die();
        }
    }

    public function controller(string $controller) {
        require_once ADMIN_CONTROLLER_PATH  . $controller . '.php';
        $obj = new $controller();
        return $obj->index();
    }
};

?>