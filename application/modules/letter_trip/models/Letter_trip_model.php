<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Letter_trip_model extends CI_Model {

	public function read($data= array())
	{
		$start_date = date('Y-m-d', strtotime($data->start_date));
		$end_date   = date('Y-m-d', strtotime($data->end_date));


		$this->db->select("
				tb.*, 
				tr.name AS route_name, 
				eh.id AS driver_id,
				CONCAT_WS(' ', eh.first_name, eh.second_name) AS driver_name,
				trp.trip_title,
				ta.*,
				fr.reg_no
			")
			->from("tkt_booking AS tb")
			->join("trip_route AS tr", "tr.id = tb.trip_route_id", "left") 
			->join("trip_assign AS ta", "ta.trip = tb.trip_id_no", "left")
			->join("fleet_registration AS fr", "fr.id =ta.fleet_registration_id", "left")
			->join("trip AS trp", "trp.trip_id = tb.trip_id_no", "left") 
			->join("employee_history AS eh", "eh.id = ta.driver_id", "left") 
            ->group_start()
                ->where("tb.tkt_refund_id IS NULL", null, false)
                ->or_where("tb.tkt_refund_id", 0)
                ->or_where("tb.tkt_refund_id", null)
            ->group_end();
 
		switch ($data->filter) 
		{
    		case 'trip':
    			$this->db->where('tb.trip_id_no', $data->trip);
    			break; 
    		case 'route':
    			$this->db->where('tb.trip_route_id', $data->route);
    			break; 
    		case 'driver':
    			$this->db->where('eh.id', $data->driver);
    			break; 
    	} 
        $this->db->where("DATE(tb.booking_date) BETWEEN '$start_date' AND '$end_date'", null, false);
		$this->db->where('tb.company_id', $this->session->userdata('company_id'));


        return $this->db->limit($data->limit, $data->offset)
        	->order_by('booking_date', 'desc')
			->get()
			->result(); 
	}

	public function read1($data= array())
	{
		$start_date = date('Y-m-d', strtotime($data->start_date));
		$end_date   = date('Y-m-d', strtotime($data->end_date));


		$this->db->select("
				tb.*, 
				tr.name AS route_name,
				tr.start_point,
				tr.end_point,
				tl1.name AS start_point,
				tl2.name AS end_point,
				eh.id AS driver_id,
				CONCAT_WS(' ', eh.first_name, eh.second_name) AS driver_name,
				eh.phone_no AS phone,
				trp.trip_title,
				ta.*,
				fr.reg_no
			")
			->from("tkt_booking AS tb")
			->join("trip_route AS tr", "tr.id = tb.trip_route_id", "left") 
			->join("trip_assign AS ta", "ta.trip = tb.trip_id_no", "left")
			->join("fleet_registration AS fr", "fr.id =ta.fleet_registration_id", "left")
			->join("trip AS trp", "trp.trip_id = tb.trip_id_no", "left") 
			->join("employee_history AS eh", "eh.id = ta.driver_id", "left") 
			->join("trip_location AS tl1", "tl1.id = tr.start_point", "left")
			->join("trip_location AS tl2", "tl2.id = tr.end_point", "left")
            ->group_start()
                ->where("tb.tkt_refund_id IS NULL", null, false)
                ->or_where("tb.tkt_refund_id", 0)
                ->or_where("tb.tkt_refund_id", null)
            ->group_end();
 
		switch ($data->filter) 
		{
    		case 'trip':
    			$this->db->where('tb.trip_id_no', $data->trip);
    			break;
    	} 
        $this->db->where("DATE(tb.booking_date) BETWEEN '$start_date' AND '$end_date'", null, false);
		$this->db->where('tb.company_id', $this->session->userdata('company_id'));


        return $this->db->limit($data->limit, $data->offset)
        	->order_by('booking_date', 'desc')
			->get()
			->row(); 
	}

	public function countRecord($data= array())
	{
		$start_date = date('Y-m-d', strtotime($data->start_date));
		$end_date   = date('Y-m-d', strtotime($data->end_date));


		$this->db->select("
				tb.*, 
				tr.name AS route_name, 
				eh.id AS driver_id,
				CONCAT_WS(' ', eh.first_name, eh.second_name) AS driver_name
			")
			->from("tkt_booking AS tb")
			->join("trip_route AS tr", "tr.id = tb.trip_route_id", "left") 
			->join("trip_assign AS ta", "ta.id_no = tb.trip_id_no", "left") 
			->join("employee_history AS eh", "eh.id = ta.driver_id", "left") 
            ->group_start()
                ->where("tb.tkt_refund_id IS NULL", null, false)
                ->or_where("tb.tkt_refund_id", 0)
                ->or_where("tb.tkt_refund_id", null)
            ->group_end();
 
		switch ($data->filter) 
		{
    		case 'trip':
    			$this->db->where('tb.trip_id_no', $data->trip);
    			break; 
    		case 'route':
    			$this->db->where('tb.trip_route_id', $data->route);
    			break; 
    		case 'driver':
    			$this->db->where('eh.id', $data->driver);
    			break; 
    	} 
        $this->db->where("DATE(tb.booking_date) BETWEEN '$start_date' AND '$end_date'", null, false);
		$this->db->where('tb.company_id', $this->session->userdata('company_id'));


        return $this->db->get()->num_rows();
	} 


	public function routeList()
	{
		$data = $this->db->select("*")
			->from('trip_route')
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

// trip list
	public function tripList()
	{
		$data = $this->db->select("*")
			->from('trip')
			->where('status', 1) 
			->where('company_id', $this->session->userdata('company_id'))
			->order_by('trip_id', 'desc')
			->get()
			->result();

		$list[''] = display('select_option');
		if (!empty($data)) {
			foreach($data as $value)
				$list[$value->trip_id] = $value->trip_title;
			return $list;
		} else {
			return false; 
		}
	}
	public function driverList()
	{
		$data = $this->db->select("id, CONCAT_WS(' ', first_name, second_name) AS name")
			->from("employee_history")
			->like('position','driver', 'both')
			->where('company_id', $this->session->userdata('company_id'))
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

 