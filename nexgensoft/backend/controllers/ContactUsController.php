<?php

class ContactUSController extends BaseController
{
    protected object $contactUs;

    public function __construct(){
        parent::__construct();

        $this->contactUs = $this->load->model('ContactUsBackendModel');
    }

    public function index(): void {
        $data = [];
        $data['header'] = $this->load->controller('Header'); 
        $data['footer'] = $this->load->controller('Footer');
        echo $this->render('contactUs', $data);
    }

};

?>