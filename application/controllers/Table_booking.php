<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/Party.php");

class Table_booking extends Party
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_book_table', 'mbt');
    }

    public function index()
    {
        $this->output('table_booking/table_booking');
    }

    public function getBookedTable()
    {
        $mbt = $this->mbt;
        echo json_encode($mbt->getBookedTable()->result());
    }

    public function getTableMember()
    {
        $mbt = $this->mbt;
        $mbt->tb_code = $this->input->post('tb_code');
        // $mbt->tb_code = "VIP1";
        $arr = $mbt->getTableMember()->result();
        if (count($arr) == 1 && $arr[0]->name == null)
                echo json_encode(null);
        else
            echo json_encode($arr);
    }
}
