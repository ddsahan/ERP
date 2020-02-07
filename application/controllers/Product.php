<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function viewAll()
	{
		$results = $this->product_model->view_all_records() ;
		$this->load->view('viewAll',['results' => $results]);
	}

	public function viewSingle($id)
	{
		$results = $this->product_model->view_a_record($id) ;
		$this->load->view('view',['results' => $results]);		
	}

	public function create()
	{
		// Load create page
		$this->load->view('create');
	}

	public function add_photo()
	{
		// Load create page
		$this->load->view('add_p_photo', array('error' => ' ' ));
	}

	public function save()
	{
		$data = [
                'product_name'  => $this->input->post('product_name'),
				'product_code'  => $this->input->post('product_code'),
				'description'   => $this->input->post('description'),
            ];
        // Getting data to $data
		$this->product_model->insert($data);
		// Passing value for db model to save 
		redirect('product/viewAll');
		// Redirecting web page to URL 
	}

	public function edit($id)
	{
		$results = $this->product_model->view_a_record($id) ;
		$this->load->view('edit',['results' => $results, 'id' => $id ]);
		//Load Edit from with particular data set loaded through model's view a record
	}

	public function update($id)
	{
		$data = [
                'product_name'  => $this->input->post('product_name'),
				'product_code'  => $this->input->post('product_code'),
				'description'   => $this->input->post('description'),
            ];
        $this->product_model->update($id) ;
        // Update recode after filling edit form
		redirect('product/viewAll');
		// Redirect web page to viewAll
	}

	public function delete($id)
	{
		$results = $this->product_model->delete($id);
		redirect('product/viewAll');
	}
}
