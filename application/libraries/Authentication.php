<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Authentication
{
    function Authentication()
    {
        $this->CI =& get_instance();

        log_message('debug', "Authentication Class Initialized");

        $this->CI->load->model("usuario");

        $this->CI->load->library('db_session');
    }

    function check()
    {
        $_who_is = $this->CI->db_session->userdata('nombreusuario');

        if ($this->CI->db_session AND !empty($_who_is))
        {
            if ($_who_is != "lea" && $_who_is != "mponti" && $_who_is != "lgorriz")
            {
                redirect("admin/login");
            }
        }
        else
        {
            redirect("admin/login");
        }
    }

    function login()
    {
        if ($this->CI->db_session)
        {
            $values = $this->getLoginForm();

            $username = (isset($values['user_name']) ? $values['user_name'] : false);
            
            $password = (isset($values['password']) ? $values['password'] : false);

            if (($username != false) && ($password != false))
            {
                $user = $this->CI->usuario->get("idusuario, nombreusuario", NULL, 'ASC', NULL, 0, "nombreusuario = '$username' AND password = '$password'");

                if ($user)
                {
                    $fields = array('idusuario', 'nombreusuario');

                    foreach($fields as $field)
                    {
                        $userdata[$field] = $user->$field;
                    }

                    $this->_set_logindata($userdata);

                    return true;
                }
            }
        }

        return false;
    }

    function logout()
    {		
        if ($this->CI->db_session)
        {
            $_username = $this->CI->db_session->userdata('nombreusuario');

            if ($_username != false)
            	$this->_unset_user($_username);
        }

       redirect("admin/login");
    }

    function _set_logindata($userdata)
    {
    	$this->CI->db_session->set_userdata($userdata);
    }

    function _unset_user($_username)
    {
        $users = $this->CI->db_session->userdata('nombreusuario');
        
        if (isset($users))
        {
            unset($users);

            $this->CI->db_session->unset_userdata('idUsuario');
            $this->CI->db_session->unset_userdata('nombreusuario');
        }
    }

    function getLoginForm()
    {
        $values['user_name'] = $this->CI->input->post('user_login');
        $values['password'] = $this->CI->input->post('user_pass');
        
        return $values;
    }
}