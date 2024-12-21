<?php

class HomeController extends BaseController
{
    protected object $home;
    protected object $service;

    protected array $error = []; 

    public function __construct(){
        parent::__construct();

        $this->home = $this->load->model('home');
        $this->service = $this->load->model('ServicesBackendModel');
    }

    public function list(): void {
        $data = [];
        $data['header'] = $this->load->controller('Header'); 
        
        $data['services'] = $this->getServices();

        $data['company_email'] = $this->setting->get('config_email');

        $data['sendEnqueryAction'] = $this->baseUrl('home/sendEnquiry');
      
        $data['footer'] = $this->load->controller('Footer');
        echo $this->render('index', $data);
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

    public function sendEnquiry(): void {
        if (!$this->request->isPostRequest()) {
            $this->outputError('Invalid Request!');
        }

        $agree = $this->request->post('agree');
      
        if ($agree === 'off') {
            $this->error['error_agree'] = 'You Must Have to Agrre The terms and conditions';
            $this->redirect('');
            return;     
        }

        if (!$this->validate()) {
            $this->redirect(''); 
            return;
        }
        
        $enquiry = $this->request->all();

        $this->home->saveEnquiry($enquiry);

        $this->redirect('');
    }

    protected function validate(): bool {
        $firstName = $this->request->post('first_name');
        $lastName = $this->request->post('last_name');
        $companyName = $this->request->post('company_name');
        $email = $this->request->post('email');
        $phoneNumber = $this->request->post('phone_number');
        $message = $this->request->post('message');

        if (!$firstName || strlen($firstName) <= 3 ) {
            $this->error['error_first_name'] = 'First Name is Required!';
        }

        if (!$lastName || strlen($lastName) <= 3 ) {
            $this->error['error_last_name'] = 'Last Number is required! and must be at least 4 characters long.';
        }

        if (!$companyName || strlen($companyName) <= 3 ) {
            $this->error['error_company_name'] = 'Company Number is required! and must be at least 4 characters long.';
        }

        if (!$email) {
            $this->error['error_email'] = 'Email is Required!';
        }

        if (!$phoneNumber || strlen($phoneNumber) <= 3 ) {
            $this->error['error_first_name'] = 'Phone Number is required! and must be at least 4 characters long.';
        }

        if (!$message || strlen($message) <= 5 ) {
            $this->error['error_first_name'] = 'Describe Message is required! and must be at least 6 characters long.';
        }

        return !$this->error;
    }

    protected function outputError(string $errorMessage, $code = 400): Error {
        http_response_code($code);
        return throw new Error($errorMessage);
    }
}

?>