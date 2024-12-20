<?php
class BaseController
{
    protected $request;
    protected $load;
    protected $session;
    protected $setting;
    protected $user;

    public function __construct()
    {
        $this->request = new Request();
        $this->load = new Load();
        $this->session = new Session();
        $this->setting = new ConfigSettings();
        $this->user = new User();
    }

    protected function render(string $view, ?array $data = null): string
    {
        if ($_SESSION['dir'] === 'backend') {
            $_SESSION['dir'] = 'frontend';
        }
        extract($data);
        ob_start();
        include './nexgensoft/' . $_SESSION['dir'] . '/view/' . $view . '.php';
        return ob_get_clean();
    }

    protected function redirect(string $uri): void
    {
        $url = BASE_URL . '/' . $uri;
        header("Location: $url");
        exit;
    }

    protected function baseUrl(string $uri): string
    {
        return BASE_URL . '/' . $uri;
    }

    protected function upload(array $file): array
    {
        $name = $file['name'];
        $tmp_name = $file['tmp_name'];
        $error = $file['error'];

        if ($error === UPLOAD_ERR_OK) {
            $upload_dir = 'uploads/';

            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0755, true);
            }

            $upload_path = $upload_dir . basename($name);

            if (move_uploaded_file($tmp_name, $upload_path)) {
                return [$name, true];
            } else {
                return [$name, false];
            }
        } else {
            return [$name, false];
        }
    }
}
