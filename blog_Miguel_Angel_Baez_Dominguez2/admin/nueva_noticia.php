          <?php

          session_start();

          if (!(isset($_SESSION['logueado']) && $_SESSION['logueado'])) header('Location: login.php');

          include 'header.php';

          ?>


          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">

              <div class="x_panel">

                <div class="x_content">

                  <form enctype="multipart/form-data" class="form-horizontal form-label-left" action="nueva_noticia.php" method="post" novalidate>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="titulo_id">Título</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="titulo_id" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="titulo" placeholder="Título de la noticia" required="required" type="text">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea_id">Textarea</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea id="textarea_id" required="required" name="descripcion" class="form-control col-md-7 col-xs-12"></textarea>
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto_id">Subir foto</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="foto_id" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="foto" placeholder="Título de la noticia" required="required" type="file">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fecha_id">Fecha</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="fecha_id" class="form-control col-md-7 col-xs-12" name="fecha" required="required" type="datetime-local">
                      </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">                       
                        <button id="send" type="submit" class="btn btn-success">Enviar</button>

                        <br>
                        <br>

                        <?php                        

                        $conexion = new mysqli("localhost", "admin", "jkmmmm77", "blog");

                        if ($conexion->connect_errno!=0)
                        {
                          echo "<p>Error en la conexión: </p>".$conexion->connect_errno;
                          exit();
                        }

                        if (isset($_FILES['foto']))
                        {
                          $carpeta_destino = "../images/";                          
                          $archivo_temporal= $_FILES['foto']['tmp_name'];                          

                          move_uploaded_file($archivo_temporal, $carpeta_destino.$_FILES['foto']['name']);

                          $ruta_definitiva="images/".$_FILES['foto']['name'];

                        }

                        if (isset($_POST['titulo']) && isset($_POST['descripcion']) && isset($_POST['fecha']) && isset($_FILES['foto']))
                        {
                          $consulta="INSERT INTO noticias (titulo, descripcion, imagen, fecha) VALUE ('".$_POST["titulo"]."','".$_POST["descripcion"]."', '".$ruta_definitiva."', '".$_POST["fecha"]."');";

                          $conexion->query($consulta);

                          if ($conexion) echo '<div class="alert alert-success" role="alert">La noticia se ha insertado correctamente</div>';   
                          else echo '<div class="alert alert-danger" role="alert">La consulta ha fallado</div>'; 

                        }                        

                        ?>

                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->

      <?php
      include 'footer.php';
      ?>