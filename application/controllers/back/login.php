<?php 
// if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){


            if ($this->session->userdata('login_state') == TRUE) {
                  redirect('/back/main/', 'refresh');
            } else {
                  $this->load->view('backend/login');
            }


		
	}
	public function verificate()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('inputUsername', 'Username', 'required');
      	$this->form_validation->set_rules('inputPassword', 'Password', 'required');

      	if ( $this->form_validation->run() !== false ) {
      		$id=$this->input->post('inputUsername');
      		$password=$this->input->post('inputPassword');
      		$masuk=User::validasi_username($id,$password);
      		if ($masuk) {
      			 $this->session->set_userdata('login_state', TRUE);
                         redirect('/back/main/', 'refresh');
      		} else {
      			redirect('/back/login/', 'refresh');
      		}

      	} else {
      		$this->load->view('backend/login');
      	}
	}

      public function logout()
      {
            $this->session->unset_userdata('login_state');
            redirect('/back/login/', 'refresh');
      }
}

/* End of file login.php */
/* Location: ./application/controllers/back/login.php */