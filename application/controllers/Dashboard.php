<?php
class Dashboard extends CI_Controller{
    
    
    function index(){
        chek_session();
        $this->template->load('template','v_dashboard');
    }
}