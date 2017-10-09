<?php
class Ticket extends CI_Model{
    var $tablename;
    function __construct(){
        parent::__construct();
        $this->tablename = 'tickets';
    }
    function gets(){
        $sql = "select id,kdticket,clientname,create_date,service,reporter,createuser,ticketstart,";
        $sql.= "case status when '0' then 'Open' when '1' then 'Closed' end status, ";
        $sql.= "case status ";
        $sql.= " when '0' then 'label-important' ";
        $sql.= " when '1' then 'label-success' ";
        $sql.= "end statuscolor ";
        $sql.= "from " . $this->tablename . " A ";
        $sql.= "limit 1,40";
        $que = $this->db->query($sql);
        return $que->result();
    }
}