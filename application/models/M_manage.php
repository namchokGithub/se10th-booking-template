<?php
class M_manage extends CI_Model {
	
	public $ty_id;
	public $ty_name;
	public $ty_max;
	public $id_year;
	
	public $gu_id;
	public $gu_pf_id;
	public $gu_fname;
	public $gu_lname;
	public $gu_std_id;


	public $tb_id;
	public $tb_name;
	public $table_type;

	function __construct() {
		parent::__construct();
	}	
	
	function insert() {
		// if there is no auto_increment field, please remove it
		$sql = "INSERT INTO table_type (ty_name, ty_max)
				VALUES(?, ?)";
		$this->db->query($sql, array($this->ty_name, $this->ty_max));
	}
	
	function get_all(){
		$sql = "SELECT ty_id,ty_name
				FROM table_type";
		$result = $this->db->query($sql);
		return $result;
	}

	function get_guest_available()
	{
		$sql = "SELECT gu_id
						,gu_pf_id as prefix
						,CONCAT(pf_name,gu_fname, ' ', gu_lname) as name_guest
						,gu_std_id as std_id
						,gu_ct_id
						,gu_tb_id 
						,gu_ty as guest_type_id
						,gu_ty_name as guest_type_name
						
				FROM guest
				LEFT JOIN prefix on prefix.pf_id = guest.gu_pf_id
				LEFT JOIN guest_type on guest_type.gu_ty_id = guest.gu_ty
				WHERE gu_tb_id IS NULL";
		$result = $this->db->query($sql);
		return $result;
	}

	function get_all_guest()
	{
		$sql = "SELECT gu_id
						,gu_pf_id as prefix
						,CONCAT(pf_name,gu_fname, ' ', gu_lname) as name_guest
						,gu_std_id as std_id
						,gu_ct_id
						,gu_tb_id 
						,tb_name as name_table 
						,gu_ty as guest_type_id
						,gu_ty_name as guest_type_name
						
				FROM guest
				LEFT JOIN prefix on prefix.pf_id = guest.gu_pf_id
				LEFT JOIN guest_type on guest_type.gu_ty_id = guest.gu_ty
				LEFT JOIN book_table on book_table.tb_id = guest.gu_tb_id";
		$result = $this->db->query($sql);
		return $result;
	}

	function get_all_table()
	{
		$sql = "SELECT tb_id
						,tb_ty_id as type_table_id
						,tb_name as name_table
						,tb_code as code_table
						,tb_occupy as status_table
						,tb_date as date_table
						,table_type.ty_name as type_table
						
				FROM book_table
				LEFT JOIN table_type on table_type.ty_id = tb_ty_id";
		$result = $this->db->query($sql);
		return $result;
	}

	function get_table_by_type()
	{
		$sql = "SELECT tb_id
						,tb_ty_id as type_table
						,tb_name as name_table
						,tb_code as code_table
						,tb_occupy as status_table
						,tb_date as date_table
						
				FROM book_table
				WHERE tb_ty_id = ?";
		$result = $this->db->query($sql,array($this->table_type));
		return $result;
	}

	// not complete
	function get_guest_by_year()
	{
		$like = $this->id_year . "%";
		$sql = "SELECT gu_id
						,gu_pf_id as prefix
						,CONCAT(gu_pf_id,gu_fname, ' ', gu_lname) as name_guest
						,gu_std_id as std_id
						,gu_ct_id
						,gu_tb_id 
						
				FROM guest
				WHERE gu_std_id LIKE ?";

		$result = $this->db->query($sql, array($like));
		return $result;
	}

	function name_table_update()
	{
		$sql = "UPDATE book_table SET tb_name = ?
				WHERE tb_id = ?";
		$result = $this->db->query($sql,array($this->tb_name, $this->tb_id));
		return $result;
	}

	function update_table() {
		$sql = "UPDATE book_table SET tb_occupy = 'Y'
				WHERE tb_id = ?";
		$result = $this->db->query($sql,array($this->tb_id));
		return $result;
	}

	function map_guest()
	{
		$sql = "UPDATE guest SET gu_tb_id = ?
				WHERE gu_id = ?";
		$result = $this->db->query($sql,array($this->tb_id, $this->gu_id));
		return $result;
	}

	function get_member_by_table(){
		$sql = "SELECT gu_id
						,gu_pf_id as prefix
						,CONCAT(pf_name,gu_fname, ' ', gu_lname) as name_guest
						,gu_std_id as std_id
						,gu_ct_id
						,gu_tb_id 
						
				FROM guest
				LEFT JOIN prefix on prefix.pf_id = guest.gu_pf_id
				WHERE guest.gu_tb_id = ?";
		$result = $this->db->query($sql, array($this->tb_id));
		return $result;	
	}

	// add new guest
	function add_new_guest()
	{
		$sql = "INSERT INTO guest (gu_pf_id, gu_fname, gu_lname, gu_std_id)
				VALUES(?, ?, ?, ?)";
		$result = $this->db->query($sql,array($this->gu_pf_id, $this->gu_fname, $this->gu_lname, $this->gu_std_id));
		return $result;
	}

	// get prefix
	function get_prefix()
	{
		$sql = "SELECT pf_id ,pf_name 
				
				FROM prefix";
		$result = $this->db->query($sql);
		return $result;
	}
}
?>