<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function index()
  {
    if ($this->session->userdata('roles') == 'admin') {
      return redirect('dashboard');
    }
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/login');
    } else {
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      if ($email === 'admin@admin.com') {
        if ($password === 'admin') {
          $data = [
            'username'    => $email,
            'roles'       => 'admin'
          ];
          $this->session->set_userdata($data);
          redirect('dashboard');
        } else {
          $this->session->set_flashdata('flash', 'Access Denied');
          redirect('auth');
        }
      } else {
        $this->session->set_flashdata('flash', 'Access Denied');
        redirect('auth');
      }
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('roles');
    $this->session->sess_destroy();
    redirect('auth');
  }
}
