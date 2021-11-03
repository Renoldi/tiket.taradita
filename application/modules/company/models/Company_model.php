<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_model extends CI_Model {
 
    public function company_view($limit = null, $start = null)
	{
		
  $this->db->select('*');
  $this->db->from('company_info');
  if($this->session->userdata('isAdmin')==0){
 $this->db->where('company_email',$this->session->userdata('email'));
  }
  $this->db->limit($limit, $start);
  $this->db->order_by('company_id', 'desc');
  $query=$this->db->get();
     if($query->num_rows() > 0){
      return $query->result();
     }
     return false;	
			


	}
	public function company_create($data = array())
	{
		return $this->db->insert('company_info', $data);
	}

	public function delete_company($id = null)
	{
	    $email = $this->db->select('*')->from('company_info')->where('company_id',$id)->get()->row();
	    $user_email = $email->company_email;
		$this->db->where('company_id',$id)
			->delete('company_info');

		if ($this->db->affected_rows()) {
		    $this->db->where('email',$user_email)
			->delete('user');
			return true;
		} else {
			return false;
		}
	} 

   public  function get_id($id)
    {
        $query=$this->db->get_where('company_info',array('company_id'=>$id));
        return $query->row_array();
    } 

public function update_company($data = array())
	{
		return $this->db->where('company_id', $data["company_id"])
			->update("company_info", $data);
	}
	public function company_updateForm($id){
        $this->db->where('company_id',$id);
        $query = $this->db->get('company_info');
        return $query->row();
    }


	

public function details($id)
	{
		return $this->db->select('*')	
			->from('company_info')
			->where('company_id',$id)
			->get()
			->result();
	}

	public function company_inf($id)
	{
		return $this->db->select('*')	
			->from('company_info')
			->where('company_id',$id)
			->get()
			->row();
	}
	 public function retrieve_setting_editdata()
    {
        $this->db->select('*');
        $this->db->from('ws_setting');
        $this->db->where('id',1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();  
        }
        return false;
    }

}
