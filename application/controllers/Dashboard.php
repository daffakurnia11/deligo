<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    if ($this->session->userdata('roles') != 'admin') {
      redirect('auth');
    }
  }
  public function index()
  {
    $data = [
      'title'     => 'Dashboard',

      'total_pendaftar'   => $this->db->get('pendaftar')->num_rows(),
      'total_question'    => $this->db->get('question')->num_rows(),
      'total_brand'       => $this->db->get('brand')->num_rows()
    ];
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/navbar');
    $this->load->view('admin/dashboard');
    $this->load->view('admin/templates/footer');
  }

  public function pendaftar()
  {
    $data = [
      'title'     => 'Pendaftar',

      'users'     => $this->db->get('pendaftar')->result_array()
    ];
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/navbar');
    $this->load->view('admin/pendaftar', $data);
    $this->load->view('admin/templates/footer');
  }

  public function pertanyaan()
  {
    $data = [
      'title'     => 'Pertanyaan',

      'users'     => $this->db->get('question')->result_array()
    ];
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/navbar');
    $this->load->view('admin/question', $data);
    $this->load->view('admin/templates/footer');
  }

  public function data()
  {
    $id = $this->input->get('id');
    $data_query = $this->input->get('data');

    $data = [
      'title'     => 'Detail Data',

      'data'      => $this->db->get_where($data_query, ['id' => $id])->row_array()
    ];
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/navbar');
    $this->load->view('admin/detail', $data);
    $this->load->view('admin/templates/footer');
  }

  public function delete_data()
  {
    $id = $this->input->get('id');
    $data_query = $this->input->get('data');

    $this->db->delete($data_query, ['id' => $id]);
    $this->session->set_flashdata('flash', 'Deleted');
    redirect('pendaftar');
  }

  public function partner()
  {
    $data = [
      'title'             => 'Partner',
      'total_brand'       => $this->db->get('brand')->num_rows(),
      'brands'            => $this->db->get('brand')->result_array()
    ];
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/navbar');
    $this->load->view('admin/partner', $data);
    $this->load->view('admin/templates/footer');
  }

  public function upload_brand()
  {
    date_default_timezone_set("Asia/Jakarta");
    $brand = $this->input->post('brand');
    $slug = url_title($brand, '-', true);

    $config['upload_path']    = './assets/img/brands/';
    $config['allowed_types']  = 'jpg|png|JPG|jpeg';
    $config['max_size']       = '3000';
    $config['file_name']      = $slug . '.jpg';

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('partner_img')) {
      return redirect('partner');
    } else {
      $file_name = $slug . '.jpg';
    }
    $data = [
      'brand'         => $brand,
      'slug'          => $slug,
      'img'           => $file_name,
      'date_created'  => date("Y-m-d H:i:s")
    ];

    $this->db->insert('brand', $data);
    return redirect('partner');
  }

  public function delete_brand()
  {
    $data = $this->db->get_where('brand', ['id' => $this->input->get('id')])->row_array();
    unlink(FCPATH . 'assets/img/brands/' . $data['img']);

    $this->db->delete('brand', ['id' => $this->input->get('id')]);
    redirect('partner');
  }
}
