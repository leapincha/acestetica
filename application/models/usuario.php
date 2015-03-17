<?php

class Usuario extends MY_Model
{
    public function  __construct()
    {
        parent::__construct();
        $this->table = "usuario";
    }
}

?>
