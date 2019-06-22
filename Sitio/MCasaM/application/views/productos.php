<?php
/**
* Página de productos
* En esta página se muestrá un catalógo de los productos que estan almacenados en la base de datos
*
* @author Ernesto Rico Gutiérrez
* @package application/views/
*
* @version 1.0.0
* Creado ‎‎viernes, ‎7‎ de ‎junio‎ de ‎2019, ‏‎01:37 pm
* Última Modificación el 21/06/2019 a las 12:33 pm
*/
?>
<div class="row">
	<!--Se obtinen todos los productos por medio del foreach-->
    <?php foreach ($producto as $item) {?>
    	<!--Si el producto tiene un estatus 1 que significa activo se mostrará-->
    	<?php if ($item->estatus==1) { ?>		
	        <div class="col-md-3 " align="center" style="margin-left: 70px;"><br>
			   	<img class="card-img-top" src='<?=base_url();?>/assets/uploads/files/producto/<?=$item->imagen_producto;?>' width="50%" height="35%" style="box-shadow: 7px 7px 10px black;">
			   	<div class="card-body">
			   		<h5 class="card-title"><strong>Producto: </strong><?=$item->nombre_producto?></h5><br>
			   		<h5 class="card-title"><strong>Descripción: </strong><?=$item->detalles?></h5>	   		
			   	</div>
			    <div class="card-footer" style="background-color: #B98D35; color: white;">
			   		<small><h6><strong>Precio: $ </strong><?=$item->precio?></h6></small>
			 	</div><br>
			 	<div align="center">
			 		<!--Se enviará el idProducto por medio de la url para que en la página vistaprevia muestre más detallada la información del producto-->
			 		<button type="button" class="btn btn-success"><a href="<?=base_url(); ?>index.php/MuebleriaCasaMorales/vistaprevia/<?php echo $item->idProducto; ?>" style="color:white;">Vista Previa</a></button>
			 	</div><br><br><br>
			</div>
		<!--Fin del if-->
		<?php } ?>
	<!--Fin del foreach-->	
	<?php } ?>
</div>