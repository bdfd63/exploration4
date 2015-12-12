<?php

class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function validate($username, $password) {


        if ($username == 'test' && $password == 'test'){
		return TRUE;
        }
        return FALSE;
    }

}

?>
