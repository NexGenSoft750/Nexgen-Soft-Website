<?php
    class Header extends BaseController{
        public function index() {
            $data = array();
            return $this->render('Header', $data);
        }
    };
?>