<?php

class PortfolioController extends BaseController
{
    protected object $portfolio;

    public function __construct(){
        parent::__construct();

        $this->portfolio = $this->load->model('PortfolioBackendModel');
    }

    public function index(): void {
        $data = [];
        $data['header'] = $this->load->controller('Header'); 
        $data['footer'] = $this->load->controller('Footer');
        echo $this->render('portfolio', $data);
    }

};

?>