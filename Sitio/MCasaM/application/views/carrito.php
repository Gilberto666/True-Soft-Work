<?php
/**
* Pagina de carrito
* En esta pagina se presenta un lista de productos y una plantilla proporcionada y explicada por el profesor en la hora de clase de la librería cart de Codeigniter, además de venir comentada en inglés.
*
* @author Ernesto Rico Gutiérrez
* @package application/views/
*
* @version 1.0.0
* Creado ‎viernes, ‎7‎ de ‎junio‎ de ‎2019, ‏‎01:38 pm
* Última Modificación el 21/06/2019 a las 11:58 am
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
    <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>js/jquery.js">
    <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/grocery_crud/themes/bootstrap-v4/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/grocery_crud/themes/bootstrap-v4/css/elusive-icons/css/elusive-icons.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/grocery_crud/themes/bootstrap-v4/css/common.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/grocery_crud/themes/bootstrap-v4/css/list.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/grocery_crud/themes/bootstrap-v4/css/general.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/grocery_crud/themes/bootstrap-v4/css/plugins/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/grocery_crud/themes/bootstrap-v4/css/main.css">
    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    <script type="text/javascript">
        function clear_cart() {
        var result = confirm('¿Deseas quitar todos los productos de tu carrito?');
            if (result) {
                window.location = "<?php echo base_url(); ?>index.php/carrito/remove/all";
            } else {
                return false; // cancel button
            }
        }
    </script>
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
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
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
                                <a style="color:white;" class="nav-link btn-outline-secondary" href="<?=base_url(); ?>index.php/Administrador">CPanel</a>
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
            </div><br>
            <div class="row">
                <div class="col-md-12">
                    <div id="cart" >
                        <div id = "heading">
                            <h2 align="center">Productos en tu carrito</h2>
                        </div>
                        <div id="text">
                            <?php $cart_check = $this->cart->contents();
                            // If cart is empty, this will show below message.
                            if(empty($cart_check)) {
                                echo 'Para agregar productos en tu carrito haz clic en el botón "Agregar al carrito"';
                            } ?>
                        </div>
                    </div>            
                </div>
                <div class="col-md-12">
                    <table id="table" border="0" cellpadding="5px" cellspacing="1px" align='center'>
                        <?php
                        // All values of cart store in "$cart".
                            if ($cart = $this->cart->contents()): ?>
                                <tr id= "main_heading">
                                <td>Serial</td>
                                <td>Nombre</td>
                                <td>Precio</td>
                                <td>Cantidad</td>
                                <td>Existencia</td>
                                <td>Quitar Producto</td>
                                </tr>
                        <?php
                        // Create form and send all values in "carrito/update_cart" function.
                            echo form_open('carrito/update_cart');
                            $grand_total = 0;
                            $i = 1;
                            foreach ($cart as $item):
                            // echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                            // Will produce the following output.
                            // <input type="hidden" name="cart[1][id]" value="1" />

                            echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                            echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                            echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                            echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                            echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                        ?>
                        <tr>
                            <td>
                                <?php echo $i++; ?>
                            </td>
                            <td>
                                <?php echo $item['name']; ?>
                            </td>
                            <td>
                                $ <?php echo number_format($item['price'], 2); ?>
                            </td>
                            <td>
                                <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
                            </td>
                                <?php $grand_total = $grand_total + $item['subtotal']; ?>
                            <td>
                                $ <?php echo number_format($item['subtotal'], 2) ?>
                            </td>                        
                            <td>
                                <?php
                                // cancle image.
                                $path = "<img src='".base_url()."assets/images/quitar.png' width='35px' height='35px'>";
                                echo anchor('carrito/remove/' . $item['rowid'], $path); ?>
                            </td>
                            <?php endforeach; ?>
                        </tr>
                        <tr>                    
                        <td></td>                    
                        <td colspan="5">
                            <hr class="my-4">
                            <b align="center">Order Total: $<?php
                            //Grand Total.
                            echo number_format($grand_total, 2); ?></b>
                            <?php // "clear cart" button call javascript confirmation message ?>
                            <input align="center" class ='fg-button teal' type="button" value="Limpiar carrito" onclick="clear_cart()">
                            <?php //submit button. ?>
                            <input class ='fg-button teal'  type="submit" value="Actualizar Carrito">
                            <?php echo form_close(); ?>

                            <!-- "Place order button" on click send "billing" controller -->
                            <input class ='fg-button teal' type="button" value="Ordenar" onclick="window.location = '#'">
                        </td>
                        </tr>


                        <?php endif; ?>
                    </table>
                </div>        
                <div id="products_e" align="center">
                    <h2 id="head" align="center">Productos</h2>
                    <?php
                        // "$producto" send from "shopping" controller,its stores all product which available in database.
                        foreach ($products as $product) {
                            $id = $product['idProducto'];
                            $name = $product['nombre_producto'];
                            $description = $product['detalles'];
                            $price = $product['precio'];
                            $img = $product['imagen_producto'];
                        ?>
                        <div id='product_div'>
                            <div id='image_div'>
                                <img class='imgP' src="<?php echo base_url() . 'assets/uploads/files/producto/'.$img ?>"/>
                            </div>
                            <div id='info_product'>
                                <div id='name'><?php echo $name; ?></div>
                                <div id='desc'> <?php echo $description; ?></div>
                                <div id='rs'><b>Price</b>:<big>$<?php echo $price; ?></big></div>
                                <?php
                                    echo form_open('carrito/add');
                                    echo form_hidden('id', $id);
                                    echo form_hidden('name', $name);
                                    echo form_hidden('price', $price);
                                    echo form_hidden('img', $img);
                                ?> 
                            </div>
                            <div id='add_button'>
                                <?php
                                $btn = array(
                                'class' => 'fg-button teal',
                                'value' => 'Agregar al carrito',
                                'name' => 'action'
                                );
                                echo form_submit($btn);
                                echo form_close();
                                ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <footer>
                <br>   
                <p align="center">TrueWorkSoft. <br> Copyright &copy; 2019 <br>Todos los derechos reservados.</p>
            </footer> 
        </div>
    </body>
</html>