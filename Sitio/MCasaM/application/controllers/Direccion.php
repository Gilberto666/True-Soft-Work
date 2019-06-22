<?php 

class Direccion extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}
	public function index(){
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('bootstrap-v4');
			$crud->set_table('direccion');
			$crud->columns('idDireccion','calle','numero','colonia','codigo_postal');
			$crud->required_fields('calle','numero','colonia','codigo_postal');
			$crud->display_as('numero','Número');
			$crud->display_as('codigo_postal','Código Postal');

			$output=$crud->render();
			//llama la vista, renderiza el crud y le enviamos a la vista para que lo muestre, eso lo enviamos por medio de casteo
			$this->load->view('admin/direccion.php',(array)$output);
		}catch(Exception $ex){
			show_error($ex->getMessage());
		}
	}
}

?>
