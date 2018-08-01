<?php
$titulo="Standard Format Post - Abstract";
$pagina_id="";
include 'header.php';

$conexion = new mysqli("localhost", "admin", "jkmmmm77", "blog");

if (isset($_GET['id'])) $indent=$_GET['id'];
else
{
	$indent=1;
	echo "<h1>Falta dato id<h1>";
}

$resultado = $conexion->query("SELECT * FROM noticias WHERE id=".$indent);

if ($conexion->connect_errno!=0)
{
	echo "<p>Error en la conexión: </p>".$conexion->connect_errno;
	exit();
}

$fila=$resultado->fetch_assoc();
$titulo=$fila['titulo'];
$descripcion=$fila['descripcion'];
$imagen=$fila['imagen'];
$fecha=new DateTime($fila['fecha']);
$fecha_europea=$fecha->format ('d-m-y');

?>
   <!-- content
   	================================================== -->
   	<section id="content-wrap" class="blog-single">
   		<div class="row">
   			<div class="col-twelve">

   				<article class="format-standard">  

   					<div class="content-media">
   						<div class="post-thumb">
   							<img src="<?php echo $imagen;?>">
   						</div>  
   					</div>

   					<div class="primary-content">

   						<h1 class="page-title"><?php echo $titulo;?></h1>	

   						<ul class="entry-meta">
   							<li class="date"><?php echo $fecha_europea;?></li>						
   							<li class="cat"><a href="">Wordpress</a><a href="">Design</a></li>				
   						</ul>						

   						<p class="lead"><?php echo $descripcion;?></p> 

   					

   			</article>


   		</div> <!-- end col-twelve -->
   	</div> <!-- end row -->



   </section> <!-- end content -->

   <?php
   include 'footer.php';
   ?>