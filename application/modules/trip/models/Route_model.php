<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Route_model extends CI_Model {
 
	private $table = "trip_route";


	public function create($data = [])
	{	 
		return $this->db->insert($this->table,$data);
	}


	public function read()
	{
		return $this->db->select("
			r.*, l1.name AS start_location, l2.name AS end_location")
		->from("trip_route AS r")
		->join('trip_location AS l1', 'l1.id = r.start_point', 'left')
		->join('trip_location AS l2', 'l2.id = r.end_point', 'left')
		->where('r.company_id', $this->session->userdata('company_id'))
        ->order_by('r.name', 'ASC')
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
			->order_by('name', 'ASC')
			->get()
			->result();

		$list[''] = display('select_option');
		if (!empty($data)) {
			foreach($data as $value)
				$list[$value->id] = $value->name;
			return $list;
		} else {
			return false; 
		}
	}
 


}
