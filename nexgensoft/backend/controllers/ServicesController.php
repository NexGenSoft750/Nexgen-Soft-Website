<?php

class ServicesController extends BaseController
{
    protected object $service;

    public function __construct(){
        parent::__construct();

        $this->service = $this->load->model('ServicesBackendModel');
    }

    public function index(): void {
        $data = [];
        $data['header'] = $this->load->controller('Header'); 

        $data['services'] = $this->getServices();

        $data['footer'] = $this->load->controller('Footer');
        echo $this->render('services', $data);
    }

    protected function getServices(): array {
        $results = $this->service->getServices();

        $services = [];
        if ($results) {
            $services = array_map(function (array $result): array {
                $tags = json_decode($result['services_tag']);

                return [
                    'service_id'          => $result['service_id'],
                    'service_name'        => $result['service_name'],
                    'service_description' => $result['service_description'],
                    'service_slug'        => $result['services_slug'],
                    'service_icon'        => $result['service_icon'],
                    'service_img'         => $result['service_img'],
                    'services_tags'       => $tags,  
                ];
            }, $results);
        }

        return $services;
    }
};

?>