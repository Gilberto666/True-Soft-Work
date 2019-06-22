<?php 
	/**
	 * 
	 */
	class Login extends CI_Controller
	{
		
		public function index()
		{
			$email=$this->input->post('email');
			$password=$this->input->post('password');

			$this->load->model('User');
			$fila=$this->User->getUser($email);

			if($fila!=null){
				if($fila->password==$password){
					$data = array(
								'email' => $email,
								'tarea'=>$fila->tarea,
								'login'=> true
							);

					$this->session->set_userdata($data);
					redirect('MuebleriaCasaMorales/index');
				}else{
					redirect('MuebleriaCasaMorales/index');

				}
			}
			else{
				redirect('MuebleriaCasaMorales/index');
			}
		}


	}

?>