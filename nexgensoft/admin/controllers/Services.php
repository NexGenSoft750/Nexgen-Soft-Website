<?php

class Services extends BaseController
{
    protected $service;

    protected $error = array();


    public function __construct()
    {
        parent::__construct();
        $this->service = $this->load->model('ServicesModel');
    }

    public function index(): void
    {
        if (!$this->user->isLogin()) {
            $this->redirect('admin/login');
        }

        $services = $this->service->getServices();

        $data['services'] = array();

        if ($services) {
            $data['services'] = array_map(function (array $service): array {
                return [
                    'service_id'          => $service['service_id'],
                    'service_name'        => $service['service_name'],
                    'service_description' => $service['service_description'],
                    'services_slug'       => $service['services_slug'],
                    'update_action'       => $this->baseUrl('admin/services/getForm?service_id=' . $service['service_id']),
                    'delete_action'       => $this->baseUrl('admin/services/delete?service_id=' . $service['service_id']),
                ];
            }, $services);
        }

        if ($this->session->get('imagesQueue')) {
            $data['images_queue'] = $this->session->get('imagesQueue');
            $this->session->delete('imagesQueue');
        } else {
            $data['images_queue'] = [];
        }

        if ($this->session->get('success')) {
            $data['success'] = $this->session->get('success');
            $this->session->delete('success');
        } else {
            $data['success'] = '';
        }

        if ($this->session->get('error')) {
            $data['error'] = $this->session->get('error');
            $this->session->delete('error');
        } else {
            $data['error'] = '';
        }

        $data['action'] = $this->baseUrl('admin/services/getForm');

        $data['header'] = $this->load->controller('Header');
        $data['sideBar'] = $this->load->controller('SideBar');
        $data['footer'] = $this->load->controller('Footer');

        echo $this->render('Services', $data);
    }

    public function getForm(): void
    {
        if (!$this->user->isLogin()) {
            $this->redirect('admin/login');
        }

        $serviceId = $this->request->get('service_id') ?? $this->request->post('service_id') ?? null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $this->validate()) {
            [$imgName, $imgUploaded] = $this->upload($this->request->file('service_img'));

            if (!$imgUploaded) {
                $this->session->set('message', 'Error Occur while uploading file!');
                $this->redirect('admin/services/getForm');
                return;
            }

            $newService = $this->request->all();
            $newService['service_tags'] = array_filter($newService['service_tags']);

            if (!$serviceId) {
                $this->session->set('imagesQueue', [$imgName]);
                $this->service->addService($newService);
                $this->session->set('success', 'New Service is Created Successfully');
            } else {
                $this->service->updateService($serviceId, $newService);
                $this->session->set('success', 'Service Updated Successfully');
            }

            $this->redirect('admin/services');
        }

        $data = array();

        if ($this->session->get('message')) {
            $data['message'] = $this->session->get('message');
            $this->session->delete('message');
        } else {
            $data['message'] = '';
        }

        $service = [];

        if ($serviceId) {
            $service = $this->service->getService($serviceId);
        }

        $data['service_id'] = $this->request->post('service_id') ?? $service['service_id'] ?? '';
        $data['service_name'] = $this->request->post('service_name') ?? $service['service_name'] ?? '';
        $data['service_description'] = $this->request->post('service_description') ?? $service['service_description'] ?? '';
        $data['service_slug'] = $this->request->post('service_slug') ?? $service['services_slug'] ?? '';
        $data['service_icon'] = $this->request->post('service_icon') ?? $service['service_icon'] ?? '';
        $data['service_img'] = $this->request->file('service_img')['name'] ?? $service['service_img'] ?? '';

        if ($this->request->post('service_tags')) {
            $data['service_tags'] = $this->request->post('service_tags');
        } elseif (isset($service['services_tag'])) {
            $data['service_tags'] = json_decode($service['services_tag']);
        } else {
            $data['service_tags'] = [];
        }

        $data['service_name_error'] = $this->error['service_name_error'] ?? '';
        $data['service_description_error'] = $this->error['service_description_error'] ?? '';
        $data['service_slug_error'] = $this->error['service_slug_error'] ?? '';
        $data['service_icon_error'] =  $this->error['service_icon_error'] ?? '';
        $data['service_img_error'] =  $this->error['service_img_error'] ?? '';
        $data['service_tags_error'] = $this->error['service_tags_error'] ?? '';

        $data['action'] = $this->baseUrl('admin/services/getForm');

        $data['header'] = $this->load->controller('Header');
        $data['sideBar'] = $this->load->controller('SideBar');
        $data['footer'] = $this->load->controller('Footer');

        echo $this->render('services_form', $data);
    }

    public function delete(): void
    {
        if (!$this->user->isLogin()) {
            $this->redirect('admin/login');
        }

        $serviceId = $this->request->get('service_id') ?? null;

        if (!$serviceId) {
            $this->session->set('error', 'The Service Id is Required!');
            $this->redirect('admin/services');
            return;
        }

        $this->service->deleteService($serviceId);

        $this->session->set('success', 'Service Deleted Successfully');

        $this->redirect('admin/services');
    }

    public function validate(): bool
    {
        if (!$this->user->isLogin()) {
            $this->redirect('admin/login');
        }

        if (empty($this->request->post('service_name')) || strlen($this->request->post('service_name')) <= 3) {
            $this->error['service_name_error'] = 'The Service Name is Required!';
        }

        if (empty($this->request->post('service_description')) || strlen($this->request->post('service_description')) <= 3) {
            $this->error['service_description_error'] = 'The Service Description is Required!';
        }

        if (empty($this->request->post('service_slug')) || strlen($this->request->post('service_slug')) <= 3) {
            $this->error['service_slug_error'] = 'The Service Slug is Required!';
        }

        if (empty($this->request->post('service_icon'))) {
            $this->error['service_icon_error'] = 'The Service Icon is Required!';
        }

        if ($this->request->file('service_img')['error']) {
            $this->error['service_img_error'] = 'The Service Img is Required!';
        }

        if (!$this->request->post('service_tags')[0]) {
            $this->error['service_tags_error'] = 'At Least 1 tag is required!';
        }

        return !$this->error;
    }
};
