<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Fleet_registration_model extends CI_Model {
 
	private $table = "fleet_registration";


	public function create($data = [])
	{	 
		return $this->db->insert($this->table,$data);
	}

	public function read()
	{
		return $this->db->select("fr.*, ft.*, fc.*")
			->from("fleet_registration as fr")
			->join("fleet_type as ft", "ft.id = fr.fleet_type_id", "left")
			->join("fleet_category as fc", "fc.id = ft.type", "left")
			->order_by('fr.reg_no','asc')
			->where('fr.company_id', $this->session->userdata('company_id'))
			->get()
			->result();
	} 

	public function findById($id = null)
	{
		return $this->db->select("*")
			->from($this->table)
			->where('id',$id) 
			->get()
			->row();
	} 
 
	public function update($data = [])
	{
		return $this->db->where('id',$data['id'])
			->update($this->table,$data); 
	} 


	public function delete($id = null)
	{
		$this->db->where('id',$id)
			->delete($this->table);

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 

	public function dropdown()
	{
		$data = $this->db->select("*")
			->from($this->table)
			->where('status', 1) 
			->where('company_id', $this->session->userdata('company_id'))
			->get()
			->result();

		$list[''] = display('select_option');
		if (!empty($data)) {
			foreach($data as $value)
				$list[$value->id] = $value->reg_no;
			return $list;
		} else {
			return false; 
		}
	}  
}
