<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(dirname(__FILE__) . "/Party.php");

class Table_manage extends Party
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_book_table', 'mbt');
    }
    
    public function index() 
    {
        $data['booking'] = $this->load->view('table_booking/table_booking', '', true);
        $this->output('management', $data);
        $this->load->view('manage/script');
    }

    // ------------------------------------------// Table type //-------------------------------------------------- //
    
    /**
     * insert_type
     */
    public function insert_type() {
        $mty = $this->mty;
        $mty->ty_name = $this->input->post('type-name');
        $mty->ty_max = $this->input->post('type-max');
        $mty->insert();
    }

    // --------------------------------------------------------------------------------------------------------- //

    public function get_guest_available()
    {
        $this->load->model('M_manage', 'mm');
        $guest = $this->mm->get_guest_available()->result();

        echo json_encode($guest);
    }

    public function get_all_guest()
    {
        $this->load->model('M_manage', 'mm');
        $guest = $this->mm->get_all_guest()->result();

        echo json_encode($guest);
    }

    public function get_all_table_code()
    {
        $this->load->model('M_manage', 'mm');
        $code = $this->mm->get_all_table()->result();

        echo json_encode($code);
    }

    public function get_table_code()
    {
        $this->load->model('M_manage', 'mm');
        $this->mm->table_type = $this->input->post('type');
        $code = $this->mm->get_table_by_type()->result();

        echo json_encode($code);
    }

    public function add_guest()
    {
        $this->load->model('M_manage', 'mm');
        $this->mm->tb_name = $this->input->post('name_table');
        $this->mm->tb_id = $this->input->post('id_table');        
        $this->mm->name_table_update();
        $this->mm->update_table();

        // print_r($this->mm->tb_name);
        print_r("TB_ID " . $this->mm->tb_id);

        $guest = $this->input->post('guest');  
        var_dump($guest);
        foreach($guest as $key => $value){
            $this->mm->gu_id = $value;
            print_r($this->mm->gu_id);
            $this->mm->map_guest();
        }

        // echo json_encode(true);
    }

    public function get_member_by_table(){
        $this->load->model('M_manage', 'mm');

        $this->mm->tb_id = $this->input->post('id_table');        
        $member = $this->mm->get_member_by_table()->result();

        echo json_encode($member);
    }

    public function add_new_guest()
    {
        $this->load->model('M_manage', 'mm');

        $this->mm->gu_fname = $this->input->post('name');        
        $this->mm->gu_lname = $this->input->post('lname');        
        $this->mm->gu_std_id = $this->input->post('id');        
        $this->mm->gu_pf_id = $this->input->post('prefix');

        $this->mm->add_new_guest();

        echo json_encode(true);
    }

    public function get_prefix()
    {
        $this->load->model('M_manage', 'mm');
        $prefix = $this->mm->get_prefix()->result();

        echo json_encode($prefix);
    }

    // insert()
    // ทำงานได้ 2019-12-10 12:43 AM
    // Athiruj 
    // public function insert(){
    //     $mbt = $this->mbt;
    //     $mbt->tb_ty_id = 1;
    //     $mbt->tb_name = 'athiruj';
    //     $mbt->tb_code = 'A01';
    //     $mbt->tb_occupy = 'Y';
    //     $mbt->insert();
    //     /*  public $tb_id;
    //         public $tb_ty_id;
    //         public $tb_name;
    //         public $tb_code;
    //         public $tb_occupy; */
    // }

}
