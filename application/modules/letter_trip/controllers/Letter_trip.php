<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Letter_trip extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
            'letter_trip_model','trip/price_model' 
		));		 
	}
 
	public function index()
	{   
        $this->permission->method('letter_trip','read')->redirect();
		$data['title']    = display('letter_trip');  
        #-------------------------------#
        $config["base_url"]   = base_url('letter_trip/index');
        $config['suffix'] = '?'.http_build_query($_GET, '', "&"); 
        $config['first_url'] = $config['base_url'].$config['suffix'];
        $config["per_page"] = 100;
        $config["uri_segment"] = 4;
         $currency_details = $this->price_model->retrieve_setting_editdata();
        foreach ($currency_details as $price) {
        }
        $currency=$price['currency'];
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        #-------------------------------#
        $start_date = $this->input->get('start_date');
        $end_date   = $this->input->get('end_date');
        $data['search'] = (object)array(
            'limit'  => $config["per_page"],
            'offset' => $page,
            'filter'     => trim($this->input->get('filter')),
            'trip'       => trim($this->input->get('trip')),
            'start_date' => (!empty($start_date)?trim($start_date):date('d-m-Y')),
            'end_date'   => (!empty($end_date)?trim($end_date):date('d-m-Y')),
        );
        #-------------------------------#
        #
        #pagination starts
        #
        $config["total_rows"] = $this->letter_trip_model->countRecord($data['search']);
        $config["last_link"] = "Last"; 
        $config["first_link"] = "First"; 
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';  
        $config['full_tag_open'] = "<ul class='pagination col-xs pull-right'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tag_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /* ends of bootstrap */
        $this->pagination->initialize($config);
        $data["bookings"] = $this->letter_trip_model->read($data['search']);
        $data["bookingss"] = $this->letter_trip_model->read1($data['search']);
        $data["links"] = $this->pagination->create_links();
        #
        #pagination ends
        #   
        $data['routeList']  = $this->letter_trip_model->routeList();
        $data['tripList']   = $this->letter_trip_model->tripList();
        $data['driverList'] = $this->letter_trip_model->driverList();
         $data['currency']   = $currency;
		$data['module'] = "letter_trip";
		$data['page']   = "index";   
		echo Modules::run('template/layout', $data); 
	}  
}
