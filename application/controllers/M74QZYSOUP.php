<?php
defined('BASEPATH') or exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
// require_once('./ConnectDB.php');

class M74QZYSOUP extends CI_Controller
{
    function output($body='',$data=''){
        $this->load->view('Library/header');
        $this->load->view($body,$data);
        $this->load->view('Library/footer');
    }

    // For management
    public function index(){
        $data['booking'] = $this->load->view('table_booking/table_booking', '', true);
        $data['table_guest'] = $this->load->view('manage/table_guest', '', true);
        $this->output('management', $data);
        $this->load->view('manage/script');
    }

}
