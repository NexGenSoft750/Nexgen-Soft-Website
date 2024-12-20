<?php

class Dashboard extends BaseController
{
    public function index(): void {
       $data = array();
       
       $data['header'] = $this->load->controller('Header');
       $data['sideBar'] = $this->load->controller('SideBar');
       $data['footer'] = $this->load->controller('Footer');
       
       echo $this->render('Dashboard', $data);
    }
}
?>