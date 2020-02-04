<?php
defined('BASEPATH') or exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
// require_once('./ConnectDB.php');

class Party extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
    }

    function output($body='',$data=''){
        $this->load->view('Library/header');
        $this->load->view($body,$data);
        $this->load->view('Library/footer');
    }
    
    public function index() 
    {
        $this->output('home');
    }

    // For schedule
    public function schedule(){
        $this->output('schedule/schedule');
    }

    // For booking
    public function booking(){
        $this->output('table_booking/table_booking');
    }

    // For contact
    public function contact(){
        $this->output('contact/contact');
    }

    // For management
    // public function M74QZYSOUP(){
    //     $data['booking'] = $this->load->view('table_booking/table_booking', '', true);
    //     $data['type_page'] = $this->load->view('manage/table_type_manage', '', true);
    //     $data['table_guest'] = $this->load->view('manage/table_guest', '', true);
    //     $this->output('management', $data);
    //     $this->load->view('manage/script');
    // }

}
