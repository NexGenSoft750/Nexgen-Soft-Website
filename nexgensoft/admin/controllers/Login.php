<?php

class Login extends BaseController
{
    public function index() {
        $this->session->set('alreayRedirectToLogin', false);
        $data['action'] = baseUrl('admin/login/submit');
        echo $this->render('Login', $data);
    }

    public function submit() {
        $this->session->set('userId', 1);
        redirect('admin');
    }

    public function logout() {
        $this->session->delete('alreayRedirectToLogin');
        $this->session->delete('userId');
        redirect('admin/login');
    }
};

?>