<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class site extends CI_Controller 
    {
        public function login()
        {
            $this->load->view('admin/home');
		}
		public function berhasil()
		{
			$this->load->view('page');
		}
    }
    
?>
