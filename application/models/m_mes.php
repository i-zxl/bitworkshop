<?php
class M_mes extends CI_Model{
	const table_db = 'bit_message';
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	} 
	function add_message($array){
		if ($this->db->insert(self::table_db,$array) == false) {
			return false;
		}
	}
	function delete_message($id){//删除操作
		$this ->db ->where('id',$id);
		$this ->db ->delete(self::table_db);
	}
	public function getall($num,$offset){//得到数据并分页
		$query = $this ->db ->query("SELECT * FROM bit_message ORDER BY b_time LIMIT $offset,$num");
		return $query->result();
	}
}
 ?>
