<?php
/**
* Página de header
* En esta página contiene el header y menú del sitio
*
* @author Ernesto Rico Gutiérrez
* @package application/views/template/
*
* @version 1.0.0
* Creado ‎‎‎‎‎‎viernes, ‎7‎ de ‎junio‎ de ‎2019, ‏‎01:35 pm
* Última Modificación el 21/06/2019 a las 1:10 pm
*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Casa Morales</title>
	<link rel="shortcut icon" href="<?=base_url();?>images/M_CM_L.ico" />
	 <link rel="stylesheet" type="text/css"href="<?=base_url(); ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>css/diseno_boot.css"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>css/my_style.css"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>css/animacion_style.css"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/grocery_crud/themes/bootstrap-v4/css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/grocery_crud/themes/bootstrap-v4/css/elusive-icons/css/elusive-icons.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/grocery_crud/themes/bootstrap-v4/css/common.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/grocery_crud/themes/bootstrap-v4/css/list.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/grocery_crud/themes/bootstrap-v4/css/general.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/grocery_crud/themes/bootstrap-v4/css/plugins/animate.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/grocery_crud/themes/bootstrap-v4/css/main.css">

</head>
<body>
	<div class="container">
	    <header>
	      	<div class="row">
	      		<div class="col-sm-12 col-md-12">
					<iframe src="<?=base_url();?>media/header/header.html" style="width: 100%; height: 100%; border:solid;border-color:#ffffff;"></iframe>
	      		</div>    
	    	</div>
	 	</header>

			<div class="row">
			<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #B98D35;" sticky-top>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto ml-auto"> 
			      	<li class="nav-item active">
			        	<a style="color:white;" class="nav-link btn-outline-secondary" href="<?=base_url(); ?>index.php/MuebleriaCasaMorales">Inicio </a>
			        </li>
			      	<li class="nav-item active">
			        	<a style="color:white;" class="nav-link btn-outline-secondary" href="<?=base_url(); ?>index.php/MuebleriaCasaMorales/Productos">Productos </a>
			        </li>
			      	<li class="nav-item active">
			        	<a style="color:white;" class="nav-link btn-outline-secondary" href="<?=base_url(); ?>index.php/MuebleriaCasaMorales/Nosotros">Nosotros </a>
			        </li>
			      	<li class="nav-item active">
			        	<a style="color:white;" class="nav-link btn-outline-secondary" href="<?=base_url(); ?>index.php/MuebleriaCasaMorales/Contacto">Contacto </a>
			        </li>
			      	<li class="nav-item active">
			        	<a style="color:white;" class="nav-link btn-outline-secondary" href="<?=base_url(); ?>index.php/MuebleriaCasaMorales/Comentarios">Comentarios </a>
			        </li>
			      	<li class="nav-item active">
			        	<a style="color:white;" class="nav-link btn-outline-secondary" href="<?=base_url(); ?>index.php/Carrito/">Carrito <img src="<?=base_url();?>/images/car.png" style="height: 25px;width: 30px;"></a>
			        </li>			      	
			    <?php if($this->session->userdata('login')){ ?>
            		<li class="nav-item active">
			        	<a style="color:white;" class="nav-link btn-outline-secondary" href="<?=base_url(); ?>index.php/Administrador/">CPanel</a>
			        </li>
            		<li class="nav-item active">
            			<a style="color:white; background-color: red;" href="<?=base_url(); ?>index.php/MuebleriaCasaMorales/logout" class="nav-link btn-outline-secondary">Cerrar Sesión</a>
            		</li>  
            	<?php }else{ ?>
			    	<li class="nav-item active">
			        	<a style="color:black; background-color: skyblue;" class="nav-link btn-outline-secondary" href="<?=base_url(); ?>index.php/MuebleriaCasaMorales/Login"><strong>Login</strong></a>
			        </li>
			        <li class="nav-item active">
			        	<a style="color:black; background-color: silver;" class="nav-link btn-outline-secondary" href="<?=base_url(); ?>index.php/MuebleriaCasaMorales/Registrar"><strong>Registrar</strong></a>
			        </li>  	
			    <?php } ?>			    
			    </ul> 
			</div>
			</nav> 
		</div>
