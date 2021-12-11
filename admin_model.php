<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model {

	public function login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query=$this->db->get('login');
		if($query->num_rows()>0)
		{
			return true;
		}
		else
		{
			return redirect('test');
		}
	}
	public function insert_data($table,$data)
	{
		if($this->db->insert('products',$data))
		{
			return redirect('test/select');
		}
		else
		{
			return "failed";
		}
	}
	public function select_data($table,$cols,$where='')
	{
		if(isset($where) && is_array($where))
		{
		 return $this->db->select($cols)->where($where)->get($table)->result();
		}
		else
		{
			return $this->db->select($cols)->get($table)->result();
		}
	}
	public function delete_data($table,$where)
	{
		return $this->db->delete($table,$where);
	}
	public function update_data($table,$data,$where)
	{
		if($this->db->update($table,$data,$where))
		{
			return redirect('test/select');
		}
		else
		{
			return redirect('test/edit');
		}
	}
	public function update_pass($table,$data,$where)
	{
		if($this->db->update($table,$data,$where))
		{
			return redirect('test');
		}
		else
		{
			return redirect('test/forgot');
		}
	}

}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */