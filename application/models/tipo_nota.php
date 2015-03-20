<?php

class Tipo_Nota extends MY_Model
{
    public function  __construct()
    {
        parent::__construct();
        $this->table = "tipo_nota";
    }
}

?>
