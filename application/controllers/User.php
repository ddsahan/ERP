<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function viewAll()
	{
		$results = $this->user_model->view_all_records() ;
		$this->load->view('viewAll_user',['results' => $results]);
	}

	public function viewSingle($id)
	{
		$results = $this->product_model->view_a_record($id) ;
		$this->load->view('view',['results' => $results]);		
	}

	public function create()
	{
		// Load create page
		$this->load->view('create_user');
	}

	public function save()
	{
		$data = [
                'first_name'  => $this->input->post('first_name'),
				'last_name'  => $this->input->post('last_name'),
				'user_dob'   => $this->input->post('dob'),
				'user_gender'  => $this->input->post('gender'),
				'user_name'  => $this->input->post('user_name'),
				'user_pwd'   => $this->input->post('user_pwd'),
            ];

       // $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|xss_clean');
		//$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|xss_clean');
		//$this->form_validation->set_rules('user_dob', 'Date of Birth', 'trim|required|xss_clean');

		//if ($this->form_validation->run() == FALSE) 
		//{
		//	$this->load->view('create_user');
			//redirect('product/create');
//		} else{
			$this->user_model->insert($data);	
			redirect('user/viewAll');
//		}

	}

	public function edit($id)
	{
		$results = $this->user_model->view_a_record($id) ;
		$this->load->view('edit_user',['results' => $results, 'id' => $id ]);
		//Load Edit from with particular data set loaded through model's view a record
	}

	public function update($id)
	{
		$data = [
                'first_name'  => $this->input->post('f_name'),
				'last_name'  => $this->input->post('l_name'),
				'user_dob'   => $this->input->post('dob'),
				'user_gender'  => $this->input->post('gender'),
				'user_name'  => $this->input->post('u_name'),
				'user_pwd'   => $this->input->post('password'),
            ];
        $this->user_model->update($id) ;
        // Update recode after filling edit form
		redirect('user/viewAll');
		// Redirect web page to viewAll
	}

	public function delete($id)
	{
		$results = $this->user_model->delete($id);
		redirect('user/viewAll');
	}
}
