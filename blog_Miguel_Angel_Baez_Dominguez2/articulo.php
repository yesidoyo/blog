         	<article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a href="noticia.php?id=<?php echo $id;?>" class="thumb-link">
	                  <img src="<?php echo $imagen;?>" alt="building">             
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Design</a> 
               				<a href="#">Photography</a>               				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="noticia.php?id=<?php echo $id;?>"><?php echo $titulo;?></a></h1>
               		
               	</div>
						<div class="entry-excerpt">
                     <?php echo $descripcion;?>							
						</div>
                  <h2> Fecha: <?php echo $fecha_europea;?> </h2>
               </div>

        		</article> <!-- end article -->