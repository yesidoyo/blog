<?php
$titulo="Abstract";
$pagina_id="inicio";
include 'header.php';
?>
   <!-- masonry
   	================================================== -->
   	<section id="bricks">

   		<div class="row masonry">

   			<!-- brick-wrapper -->
   			<div class="bricks-wrapper">

   				<div class="grid-sizer"></div>

   				<?php

               if (isset($_GET['pagina'])) $pagina=$_GET['pagina'];
               else $pagina=1;

               $numero_de_articulos_por_pagina=5;
               $offset=($pagina-1)*5;

               $conexion = new mysqli("localhost", "admin", "jkmmmm77", "blog");

               $resultado = $conexion->query("SELECT * FROM noticias ORDER BY fecha DESC LIMIT ".$numero_de_articulos_por_pagina." OFFSET ".$offset);           

               if ($conexion->connect_errno!=0)
               {
                 echo "<p>Error en la conexión: </p>".$conexion->connect_errno;
                 exit();
              }

              $numero_de_noticias=$resultado->num_rows;

              $filas=$resultado->fetch_all(MYSQLI_ASSOC);

              for ($cont=0; $cont<$numero_de_noticias; $cont++)
              {
                 $titulo=$filas[$cont]['titulo'];
                 $descripcion=$filas[$cont]['descripcion'];
                 $imagen=$filas[$cont]['imagen'];
                 $fecha=new DateTime($filas[$cont]['fecha']);
                 $fecha_europea=$fecha->format ('d-m-y');
                 $id=$filas[$cont]['id'];
                 include 'articulo.php';
              }   

              ?>

           </div> <!-- end brick-wrapper --> 

        </div> <!-- end row -->

        <div class="row">

         <nav class="pagination">


          <?php

          $pagina_anterior=$pagina-1;
          $pagina_siguiente=$pagina+1;

          $contador = $conexion->query("SELECT COUNT(*) AS numero FROM noticias");

          $fila=$contador->fetch_assoc(); 

          $numero_de_paginas=ceil($fila['numero']/$numero_de_articulos_por_pagina);

          if ($pagina==1) echo '<span class="page-numbers prev inactive">Prev</span>';
          else echo '<a href="index.php?pagina='.$pagina_anterior.'" class="page-numbers prev">Prev</a>'; 

          for ($cont=1;$cont<=$numero_de_paginas;$cont++)
          {
            echo '<a href="index.php?pagina='.$cont.'" class="page-numbers">'.$cont.'</a>';
          }

         if ($pagina==$numero_de_paginas) echo '<span class="page-numbers net inactive">Next</span>';
         else echo '<a href="index.php?pagina='.$pagina_siguiente.'" class="page-numbers next">Next</a>';  

                    

         ?>

      </nav>

   </div>

</section> <!-- end bricks -->

<?php
include 'footer.php';
?>
