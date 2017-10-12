<?php
class Tickets extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('ticket');
    }
    function getclients(){
        echo '{"ji":"jamu iboe","rn":"resto nine","wd":"wismilak diplomat"}';
    }
    function index(){
        $obj = new Ticket();
        $data = array(
            'title'=>'PadiApp:Tickets',
            'breadcrumb'=>array(
                array('title'=>'PadiApp','url'=>'/'),
                array('title'=>'Ticket','url'=>'/tickets'),
            ),
            'currentuser'=>'Puji',
            'objs'=>$obj->gets(),
        );
        $this->load->view("tickets/tickets",$data);
    }
}