<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_controller extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->permission->module('company')->redirect();
        $this->load->model(array(
            'company_model'
        ));      
    }

    public function create_company()
    { 
        $this->permission->method('company','read')->redirect();
        $data['title'] = display('company');//company_picture
        #-------------------------------#
        $this->form_validation->set_rules('company_first_name',display('company_first_name'),'required|max_length[50]');
        $this->form_validation->set_rules('company_second_name',display('company_second_name ')  ,'required|max_length[200]');
        $this->form_validation->set_rules('company_name',display('company_name'),'max_length[50]');
        $this->form_validation->set_rules('company_document_id',display('company_document_id ')  ,'max_length[200]');
            $this->load->library('Fileupload');
          $img = $this->fileupload->do_upload(
            './application/modules/company/assets/images/', 
            'company_pic_document'

        );
        $this->load->library('Fileupload');
          $agpic = $this->fileupload->do_upload(
            './application/modules/company/assets/images/', 
            'company_picture'

        );
        $this->form_validation->set_rules('company_phone',display('company_phone')  ,'required|max_length[200]');
        $this->form_validation->set_rules('company_mobile',display('company_mobile'),'max_length[50]');
        $this->form_validation->set_rules('company_email',display('company_email ')  ,'max_length[200]');
        $this->form_validation->set_rules('company_address_line_1',display('company_address_line_1'),'max_length[50]');
        $this->form_validation->set_rules('company_address_line_2',display('company_address_line_2 ')  ,'max_length[200]');
         $this->form_validation->set_rules('company_address_city',display('company_address_city'),'max_length[50]');
        $this->form_validation->set_rules('company_address_zip_code',display('company_address_zip_code ')  ,'max_length[200]');
         $this->form_validation->set_rules('company_country',display('company_country'),'max_length[50]');
        #-------------------------------#
        if ($this->form_validation->run() === true) {

            $postData = [
            'company_first_name'       => $this->input->post('company_first_name',true),
            'company_second_name'      => $this->input->post('company_second_name',true),
            'company_name'     => $this->input->post('company_name',true),
            'company_document_id'      => $this->input->post('company_document_id',true),
            'company_pic_document'     => $img,
            'company_picture'          => $agpic,
            'company_phone'            => $this->input->post('company_phone',true),
            'company_mobile'           => $this->input->post('company_mobile',true),
            'company_email'            => $this->input->post('company_email',true),
            'company_address_line_1'   => $this->input->post('company_address_line_1',true),
            'company_address_line_2'   => $this->input->post('company_address_line_2',true),
            'company_address_city'     => $this->input->post('company_address_city',true),
            'company_address_zip_code' => $this->input->post('company_address_zip_code',true),
                'company_country'      => $this->input->post('company_country',true),
            ];   
            $user = [
                'firstname' =>  $this->input->post('company_first_name',true),
                'lastname'  =>  $this->input->post('company_second_name',true),
                'email'     =>  $this->input->post('company_email',true),
                'password'  => md5($this->input->post('password',true)),
                'is_admin'  => 0,
                'image'     => $agpic,
                ];

            if ($this->company_model->company_create($postData)) { 
                $this->db->insert('user',$user);
                $this->session->set_flashdata('message', display('successfully_created'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("company/company_controller/create_company"); 

        } else {
        $data['title']  = display('company');
        $data['module'] = "company";
        $config["base_url"] = base_url('company/company_controller/create_company');
        $config["total_rows"] = $this->db->count_all('company_info');
        $config["per_page"] = 25;
        $config["uri_segment"] = 4;
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
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["links"] = $this->pagination->create_links();
        $data['agen']   = $this->company_model->company_view($config["per_page"], $page);
        $data['page']   = "company_form";   
            echo Modules::run('template/layout', $data); 
        }   
    }


    public function company_delete($id = null)
    {
        $this->permission->method('company','delete')->redirect();
        if($this->company_model->delete_company($id)) {
            #set success message
            $this->session->set_flashdata('message',display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('exception',display('please_try_again'));
        }
        redirect('company/company_controller/create_company');
    }

    public function company_update($id = null)
    { 
        $this->permission->method('company','update')->redirect();
        $data['title'] = display('company');
        #-------------------------------#
        $this->form_validation->set_rules('company_id',display('company_id'), 'required');
        $this->form_validation->set_rules('company_first_name',display('company_first_name'),'required|max_length[50]');
        $this->form_validation->set_rules('company_second_name',display('company_second_name ')  ,'required|max_length[200]');
        $this->form_validation->set_rules('company_name',display('company_name'),'max_length[50]');
        $this->form_validation->set_rules('company_document_id',display('company_document_id ')  ,'max_length[200]');
            $this->load->library('Fileupload');
          $img = $this->fileupload->do_upload(
            './application/modules/company/assets/images/', 
            'company_pic_document'

        );
           $this->load->library('Fileupload');
          $agpic = $this->fileupload->do_upload(
            './application/modules/company/assets/images/', 
            'company_picture'

        );
        $this->form_validation->set_rules('company_phone',display('company_phone')  ,'required|max_length[200]');
        $this->form_validation->set_rules('company_mobile',display('company_mobile'),'max_length[50]');
        $this->form_validation->set_rules('company_email',display('company_email')  ,'max_length[200]');
        $this->form_validation->set_rules('company_address_line_1',display('company_address_line_1'),'max_length[250]');
        $this->form_validation->set_rules('company_address_line_2',display('company_address_line_2')  ,'max_length[250]');
         $this->form_validation->set_rules('company_address_city',display('company_address_city'),'max_length[50]');
        $this->form_validation->set_rules('company_address_zip_code',display('company_address_zip_code ')  ,'max_length[200]');
         $this->form_validation->set_rules('company_country',display('company_country'),'max_length[50]');
         $old_email = $this->input->post('old_email');
        #-------------------------------#
        if ($this->form_validation->run() === true) {

            $Data = [    
                'company_id'           =>$this->input->post('company_id',true),
                'company_first_name'   => $this->input->post('company_first_name',true),
                'company_second_name'  => $this->input->post('company_second_name',true),
                'company_name' => $this->input->post('company_name',true),
                'company_document_id'  => $this->input->post('company_document_id',true),
                'company_pic_document' =>(!empty($img) ? $img : $this->input->post('company_pic_document')),
                'company_picture'      =>(!empty($agpic) ? $agpic : $this->input->post('company_picture')),
                'company_phone'         => $this->input->post('company_phone',true),
                'company_mobile'        => $this->input->post('company_mobile',true),
                'company_email'         => $this->input->post('company_email',true),
                'company_address_line_1' => $this->input->post('company_address_line_1',true),
                'company_address_line_2'=> $this->input->post('company_address_line_2',true),
                'company_address_city'=> $this->input->post('company_address_city',true),
                'company_address_zip_code'=> $this->input->post('company_address_zip_code',true),
                'company_country'     => $this->input->post('company_country',true),
            ];   
            
            $user = [
                'firstname' =>  $this->input->post('company_first_name',true),
                'lastname'  =>  $this->input->post('company_second_name',true),
                'email'     =>  $this->input->post('company_email',true),
                'image'     => (!empty($agpic) ? $agpic : $this->input->post('company_picture')),
                ];

            if ($this->company_model->update_company($Data)) { 
                $this->db->where('email', $old_email)
			       ->update("user",$user);
                $this->session->set_flashdata('message', display('successfully_updated'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("company/company_controller/create_company");

        } else {
           $data['title']    = display('update');
            $data['data']    =$this->company_model->company_updateForm($id);
            $data['bb']      =$this->company_model->get_id($id);
            $data['module']  = "company";    
            $data['page']    = "update_company_form";   
            echo Modules::run('template/layout', $data);  
        }   
    }

       public function company_details()
       { 
        $this->permission->method('company','read')->redirect();
        $id = $this->uri->segment(4);
        $data['title']  = display('details');  
        $data['detls']  = $this->company_model->details($id);
        $data['module'] = "company";
        $data['page']   = "company_details";   
        echo Modules::run('template/layout', $data); 

        }

}
