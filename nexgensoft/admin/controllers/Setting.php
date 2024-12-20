<?php

class Setting extends BaseController
{
    protected $error = array();

    public function add() {
        $data = array();

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $this->validate()) {
            $setting = $this->load->model('SettingModel');

            $settings = $this->request->all();
            $setting->addSettings($settings);

            $this->redirect('admin');
        }

        if ($this->request->post('config_email')) {
            $data['config_email'] = $this->request->post('config_email');
        } elseif($this->setting->get('config_email')) {
            $data['config_email'] = $this->setting->get('config_email');
        } else {
            $data['config_email'] = '';
        }

        if ($this->request->post('config_phone_number')) {
            $data['config_phone_number'] = $this->request->post('config_phone_number');
        } elseif($this->setting->get('config_phone_number')) {
            $data['config_phone_number'] = $this->setting->get('config_phone_number');
        } else {
            $data['config_phone_number'] = '';
        }


        if (isset($this->error['email_error'])) {
            $data['email_error'] = $this->error['email_error'];
        } else {
            $data['email_error'] = '';
        }


        if (isset($this->error['phone_number_error'])) {
            $data['phone_number_error'] = $this->error['phone_number_error'];
        } else {
            $data['phone_number_error'] = '';
        }

        $data['action'] = baseUrl('admin/settings/add');

        $data['header'] = $this->load->controller('Header');
        $data['sideBar'] = $this->load->controller('SideBar');
        $data['footer'] = $this->load->controller('Footer');
        
        echo $this->render('Setting', $data);
    }

    public function validate() {
        if(empty($this->request->post('config_email'))) {
            $this->error['email_error'] = 'Email feild is required!';
        }

        if(empty($this->request->post('config_phone_number'))) {
            $this->error['phone_number_error'] = 'Phone Number is required!';
        }
        
        return !$this->error;
    }
};

?>