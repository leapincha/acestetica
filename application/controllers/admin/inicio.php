<?php

class Inicio extends MY_Controller {

    function __construct()
    {
        parent::__construct();

        $this->output->enable_profiler($this->config->item("profile"));

        $this->authentication->check();
    }

    function index()
    {
        $data['active'] = "Inicio";
        $data['sub_active'] = "";
        
        $this->display("admin/inicio", $data);
    }
}

?>