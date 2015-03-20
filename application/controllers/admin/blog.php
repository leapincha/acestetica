<?php

class Blog extends MY_Controller {

    function __construct()
    {
        parent::__construct();

        $this->output->enable_profiler($this->config->item("profile"));

        $this->authentication->check();

        $this->load->model("categorias");
        $this->load->model("autor");
        $this->load->model("tags");
        $this->load->model("tipo_nota");

        $this->load->library('upload');


    }

    function index()
    {
        $data['active'] = "Blog";
        $data['sub_active'] = "Blog_list";

        
        
        $this->display("admin/inicio", $data);
    }

    function agregar(){

    	 $data['active'] = "Blog";
         $data['sub_active'] = "Blog_add";

         $data['categorias'] = $this->categorias->read("id_categoria, categoria", "categoria");
         $data['autores'] = $this->autor->read("id_autor, autor, autor_img");
         $data['tags'] = $this->tags->read("id_tag, tag");
         $data['tipo_nota'] = $this->tipo_nota->read("id_nota, nota, url_img","id_nota");


        
         $this->display("admin/blog_add", $data);

    }

    function prueba(){
        $this->load->view("admin/prueba");
    }
}

?>
