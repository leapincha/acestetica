<?php

class Categorias extends MY_Model
{
    public function  __construct()
    {
        parent::__construct();
        $this->table = "categorias_blog";
    }
}

?>
