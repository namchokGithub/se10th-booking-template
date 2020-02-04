<?php
class M_book_table extends CI_Model {
	
	public $tb_id;
	public $tb_ty_id;
	public $tb_name;
	public $tb_code;
	public $tb_occupy;
	public $tb_date;

	function __construct() {
		parent::__construct();
	}	
	
	function add_table() {
		// if there is no auto_increment field, please remove it
		$sql = "INSERT INTO book_table (tb_ty_id, tb_name,tb_code)
				VALUES(?, ? ,?)";
		$this->db->query($sql, array($this->tb_ty_id,$this->tb_name, $this->tb_code));
	}

	function getBookedTable(){
		$sql="	SELECT tb_ty_id AS type,tb_name AS name , tb_code, tb_occupy AS occupy
				FROM `book_table`
				WHERE tb_occupy = 'Y'
				ORDER BY tb_ty_id
				";
		$result = $this->db->query($sql);
		return $result;
	}

	function getTableMember(){
		$sql='	SELECT CONCAT(pf_name," ",gu_fname," ",gu_lname) AS name
				FROM book_table
				LEFT JOIN guest ON gu_tb_id = tb_id
				LEFT JOIN prefix ON gu_pf_id = pf_id
				WHERE tb_code = ? ';
		$result = $this->db->query($sql, array($this->tb_code));
		return $result;
	}
	
	function getTableName(){
		
	}
}
?>