<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class C_front extends CI_Controller {

		public function index()
		{
			$this->load->view('header');
			$this->load->view('konten/home');
			$this->load->view('footer');

			if($this->input->post('username')){
				$pusername = $this->input->post('username');
				$ppassword = $this->input->post('password');

				if($pusername == 'admin' AND $ppassword == 'admin'){
					$data_session = array(
						'status' => "login",
						'username' => $pusername);
					$this->session->set_userdata($data_session);
					redirect(base_url());
				}else{
					echo"<script>alert('Login Gagal...')</script>";
					echo"<script>location='".base_url('home')."'</script>";
				}
			}
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect(base_url());
		}
	}
