<?php

class CaseStudyController extends BaseController
{
    protected object $caseStudy;

    public function __construct(){
        parent::__construct();

        $this->caseStudy = $this->load->model('CaseStudyBackendModel');
    }

    public function index(): void {
        $data = [];
        $data['header'] = $this->load->controller('Header'); 
        $data['footer'] = $this->load->controller('Footer'); 
        echo $this->render('caseStudy', $data);
    }

};

?>