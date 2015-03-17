<?php

class Login extends MY_Controller {

    function __construct()
    {
        parent::__construct();

        $this->output->enable_profiler($this->config->item("profile"));

        $this->load->model("usuario");
    }

    function index()
    {
        $this->load->view("admin/login");
    }

    function signin()
    {
        $data = array();

        if(!$this->authentication->login())
            $data['error'] = true;
        else
            redirect("admin/inicio");

        $this->load->view("admin/login", $data);
    }

    function signout()
    {
        session_unset();
        
        $this->authentication->logout();
    }
}