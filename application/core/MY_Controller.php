<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class MY_Controller extends CI_Controller
{
    public function __construct()
    {
	parent::__construct();
        log_message('debug', 'MY_Controller Initialized');
    }

    public function index()
    {
    }

    protected function display($pagina, $data = array(), $web = false, $dataHeader = array(), $dataSidebar = array()) {
        if($web)
        {
            $this->load->view('web/includes/header', $dataHeader);
                
            $this->load->view($pagina, $data);
            
            $this->load->view('web/includes/sidebar', $dataSidebar);

            $this->load->view('web/includes/footer');
        }
        else
        {
            $this->load->view('admin/includes/header');

            $this->load->view('admin/includes/sidebar', $data);

            $this->load->view($pagina, $data);
            
            $this->load->view('admin/includes/footer');
        }
    }

}
?>
