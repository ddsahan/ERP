<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

	public function insert()
	{
		$this->f_name = $_POST['first_name']; 
        $this->l_name = $_POST['last_name'];
        $this->dob  = $_POST['user_dob'];
        $this->gender = $_POST['user_gender']; 
        $this->u_name = $_POST['user_name'];
        $this->password  = $_POST['user_pwd'];
        $this->status       = "Active";
        // Default value for status

        $this->db->insert('user', $this);
        // Predifined insert function in db class
	}

	public function update($id)
	{
		$this->f_name = $_POST['f_name']; 
        $this->l_name = $_POST['l_name'];
        $this->dob  = $_POST['dob'];
        $this->gender = $_POST['gender']; 
        $this->u_name = $_POST['u_name'];
        $this->password  = $_POST['password'];
		return $this->db->where(['user_id' => $id])->update('user', $this);
	}	

	public function delete($id)
	{
		return $this->db->where(['user_id' => $id])->update('user', ['status'=> 'Deleted']);
		// Since system not deleting records,status is updated in to deleted  
	}

	public function view_a_record($id)
	{
		return $this->db->get_where('user', ['user_id' => $id , 'status' => 'Active'])->result();
		// Filter out deleted records and view
	}
	public function view_all_records()
	{
		return $this->db->get_where('user', ['status' => 'Active'])->result();
         
	}

	
}
