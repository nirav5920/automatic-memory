<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class test extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('upload');
		$this->load->helper('url');
		$this->load->model('admin_model');
	}
	public function index()
	{
		$this->load->view('Login');
	}
	public function register()
	{
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run() == TRUE)
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			if($this->admin_model->login($username,$password))
			{
				$session_data = array('username'=>$username,'password'=>$password);
				$this->session->set_userdata($session_data);
				redirect('test/registration');
			}	
		}
		else
		{
			$this->load->view('Login');
		}
	}
	public function registration()
	{
		$this->load->view('Registration');
	}
	public function forgot()
	{
		$query['pass_info']=$this->admin_model->select_data('login','*');
		$this->load->view('forgotpassword',$query);
	}
	public function enterdata()
	{
		$this->form_validation->set_rules('id','ID','required');
		$this->form_validation->set_rules('name','product name','required');
		$this->form_validation->set_rules('price','product price','required');
		$this->form_validation->set_rules('upc','product code','required');
		$this->form_validation->set_rules('status','product status','required');
		$this->form_validation->set_rules('file','image','required');
		if($this->form_validation->run()==TRUE)
		{
			$data=[
				'id'=>$this->input->post('id'),
				'p_name'=>$this->input->post('name'),
				'p_price'=>$this->input->post('price'),
				'code'=>$this->input->post('upc'),
				'status'=>$this->input->post('status')
					];	
			$this->admin_model->insert_data('products',$data);
		}
		else
		{
			$this->load->view('Registration');
		}
	}
	public function select()
	{
		$table = "products";
		$cols = "*";
		$query['product_info']=$this->admin_model->select_data($table,$cols);		
		$this->load->view("show",$query);
	}
	public function delete($id)
	{
		$where=["id"=>$id];
		if($this->admin_model->delete_data('products',$where))
			redirect(site_url('test/select'));
	}
	public function edit($id)
	{
		$where=["id"=>$id];
		$data['info']=$this->admin_model->select_data('products','*',$where);
		$this->load->view("edit_data",$data);
	}
	public function update()
	{
		$this->form_validation->set_rules('name','product name','required');
		$this->form_validation->set_rules('price','product price','required');
		$this->form_validation->set_rules('upc','product code','required');
		$this->form_validation->set_rules('status','product status','required');
		if($this->form_validation->run()==TRUE)
		{
			$data=[
				'p_name'=>$this->input->post('name'),
				'p_price'=>$this->input->post('price'),
				'code'=>$this->input->post('upc'),
				'status'=>$this->input->post('status')
					];	
			$id=$this->input->post('id');
			$this->admin_model->update_data('products',$data,['id'=>$id]);
		}
		else
		{
			$this->load->view('edit_data');
		}
	}
	public function edit_pass()
	{
		$pass=$this->input->post('pass');
		$new=$this->input->post('new_pass');
		if($pass==$new)
		{
			$data=['password'=>$new];
			$username=$this->input->post('hidden');
			$this->admin_model->update_pass('login',$data,['username'=>$username]);
		}
		else
		{
			$this->load->view('forgotpassword');
		}
	}
}

/* End of file test.php */
/* Location: ./application/controllers/test.php */