<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$data = [
			'brands'		=> $this->db->get('brand')->result_array()
		];
		$this->load->view('home/index', $data);
	}

	public function submit()
	{
		date_default_timezone_set("Asia/Jakarta");
		$data = [
			'name'					=> htmlspecialchars($this->input->post('name')),
			'contact'				=> htmlspecialchars($this->input->post('contact')),
			'email'					=> htmlspecialchars($this->input->post('email')),
			'brand'					=> htmlspecialchars($this->input->post('brand')),
			'instagram'			=> htmlspecialchars($this->input->post('instagram')),
			'location'			=> htmlspecialchars($this->input->post('location')),
			'registered'		=> htmlspecialchars($this->input->post('registered')),
			'sales'					=> htmlspecialchars($this->input->post('sales')),
			'message'				=> htmlspecialchars($this->input->post('message')),
			'date_created'  => date("Y-m-d H:i:s")
		];
		$this->db->insert('pendaftar', $data);
		$this->session->set_flashdata('flash', 'Submitted');
		redirect(base_url());
	}

	public function ask_question()
	{
		date_default_timezone_set("Asia/Jakarta");
		$data = [
			'name'					=> htmlspecialchars($this->input->post('name')),
			'contact'				=> htmlspecialchars($this->input->post('contact')),
			'email'					=> htmlspecialchars($this->input->post('email')),
			'message'				=> htmlspecialchars($this->input->post('message')),
			'date_created'  => date("Y-m-d H:i:s")
		];
		$this->db->insert('question', $data);
		$this->session->set_flashdata('flash', 'Asked');
		redirect(base_url());
	}
}
