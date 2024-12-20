<?php
    class header extends BaseController{
        public function index() {
            $data = array();

            $data['config_email'] = $this->setting->get('config_email');
            $data['config_phone_number'] = $this->setting->get('config_phone_number');

            $data['logoutAction'] = baseUrl('admin/login/logout');
            return $this->render('Header', $data);
        }
    };
?>