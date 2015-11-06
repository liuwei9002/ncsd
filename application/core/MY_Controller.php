<?php
class MY_Controller extends CI_Controller
{
    protected $request;
    function __construct()
    {
        parent::__construct();
        if(!empty($_GET)){
            $this->request = $_GET;
        }elseif(!empty($_POST)){
            $this->request = $_POST;
        }else{
            $this->request = $_REQUEST;
        }
    }
}
?>