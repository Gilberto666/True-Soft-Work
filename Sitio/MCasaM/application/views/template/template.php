<?php
/**
* Página de template
* En esta página contiene la estructura del sitio web
* @author Ernesto Rico Gutiérrez
* @package application/views/template/
*
* @version 1.0.0
* Creado ‎‎‎‎‎‎viernes, ‎7‎ de ‎junio‎ de ‎2019, ‏‎01:36 pm
* Última Modificación el 21/06/2019 a las 1:10 pm
*/
?>
<?php 
	$this->load->view('template/header');	
	$this->load->view($contenido);
	$this->load->view('template/footer');
?>