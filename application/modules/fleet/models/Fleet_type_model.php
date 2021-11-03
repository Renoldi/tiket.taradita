<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Fleet_type_model extends CI_Model {
 
	private $table = "fleet_type";


	public function create($data = [])
	{	 
		return $this->db->insert($this->table,$data);
	}

	public function read()
	{
		return $this->db->select("ft.*, fc.type AS type")
			->join('fleet_category AS fc', 'fc.id = ft.type')
			->from('fleet_type AS ft')
			->order_by('ft.type','asc')
			->where('ft.company_id', $this->session->userdata('company_id'))
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
		$data = $this->db->select("ft.*, fc.type AS type")
			->join('fleet_category AS fc', 'fc.id = ft.type')
			->from('fleet_type AS ft')
			->where('ft.status', 1)
			->where('ft.company_id', $this->session->userdata('company_id'))
			->get()
			->result();

		$list[''] = display('select_option');
		if (!empty($data)) {
			foreach($data as $value)
				$list[$value->id] = $value->type.' ('.$value->total_seat.' Bangku)';
			return $list;
		} else {
			return false; 
		}
	}
 
public function facilites(){
	return $facilities =  $this->db->select('name')->from('fleet_facilities')->get()->result();
}

public function fleetcat()
	{
		$data = $this->db->select("*")
			->from('fleet_category')
			->get()
			->result();

		$list[''] = display('select_option');
		if (!empty($data)) {
			foreach($data as $value)
				$list[$value->id] = $value->type;
			return $list;
		} else {
			return false; 
		}
	}

}
