<?php require_once '../controller/producto.controller.php'; ?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta lang="ES">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <title>::Módulo de Productos::</title>
    <link rel="stylesheet" type="text/css" href="app/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app/css/style.css">
    <link rel="stylesheet" type="text/css" href="../lib/fileinput/css/fileinput.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
    

    <script src="app/js/jquery.js"></script>
    <script src="https://use.fontawesome.com/07b0ce5d10.js"></script>
    <script type="text/javascript" src="../lib/fileinput/js/plugins/piexif.js"></script>
    <script type="text/javascript" src="../lib/fileinput/js/fileinput.js"></script>
    <script type="text/javascript" src="../lib/fileinput/js/locales/fr.js"></script> 
    <script type="text/javascript" src="../lib/fileinput/js/locales/es.js"></script>   
    <script src="app/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
    
    <style type="text/css">
      /* TEMA */
      <?= $styleMask; ?>
        
        body{
            background: url(app/img/fondo-home.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;        
        }  
    </style>
  </head>

  <body>

    <?php include 'tpl/header.php'; ?>

    <div class="wrapper" id="wrapper">
      <!-- LEFT -->
        <div class="left-container" id="left-container">
          <div class="hide-sidebar" id="show-nav">
            <form method="POST">       
                <ul id="side" class="side-nav">
                    <?= $htmlMenu; ?>
                </ul>
            </form>
          </div> 
        </div>

      <!-- RIGHT -->
        <div class="right-container <?= $body; ?>" id="right-container">
          <div class="container-fluid">
            <div class="row">         
                <div class="col-xs-12">
                  <center class="title-pag">
                    <h3>
                      <b><?= $htmlTitulo; ?></b>
                    </h3>
                    <?= $vf; ?>
                  </center>
                  <div class="col-xs-12 section-home">
                    <center>
                        <form class="" id="principal-form" action="<?= URL; ?>" method="post">

                          <div class="form-options">
                            <div class="col-sm-4 col-md-4 hidden-xs">
                              <div class="sec-form-options form-g col-xs-12">
                                <label>Filtro</label>
                                <?= $filtroCategorias; ?> 
                              </div>
                            </div>
                          </div>
                          
                          <center>
                            <div class="col-xs-12 col-md-6 col-md-offset-3">
                              <?= $msg; ?>
                            </div>
                          </center>

                          <!-- <div class="text-left hidden">
                            <select  name="producto_categoria_select" id="producto_categoria_select">
                              <option selected disabled>Seleccionar</option>
                              <?= $htmlOptionsCategoria; ?>
                            </select>

                            <select  name="producto_subcategoria_select" id="producto_subcategoria_select">
                              
                            </select>

                            <button class="btn btn-success">
                              Filtrar
                            </button>
                          </div>
 -->
                          <div class="form-conten">
                            <?= $htmlDinamicList_1; ?>
                          </div>
                        </form>
                    </center> 
                  </div>
                </div>
            </div>          
          </div>
        </div>
    </div>

    <!-- Formulario para agregar/modificar -->
    <div class="section-float-form section-usuario-form-2">
      <form action="<?= URL; ?>" method="POST" enctype='multipart/form-data'>
        <div class="col-xs-12">
          <div class="text-form text-just">
            <h4>
              <b>
                Agregar nuevo producto
              </b>
            </h4>
            <p>
              Toda transacción que realice es almacenada, 
              se recomienda verificar los datos antes de ser guardados.
            </p>
          </div>

          <div class="obj-form">

            <div class="col-xs-12 col-sm-12">

              <div class="col-sm-6">
                <div class="section-input">
                  <label>Orden:</label>
                  <input required type="number" class="form-control" name="producto_orden">
                </div>              
              </div>

              <div class="col-xs-12 col-sm-6">
                <div class="section-input">
                  <label>Categoría</label>
                  <select required class="form-control" name="categoria_id" id="">
                    <?= $selectoptions ?>
                  </select>
                </div>
              </div>

              <div class="col-xs-12 col-sm-6">
                <div class="section-input">
                  <label>Nombre:</label>
                  <input required type="text" class="form-control" name="producto_nombre">
                </div>              
              </div>  

              <div class="col-xs-12 col-sm-6">
                <div class="section-input">
                  <label>Nombre en Inglés:</label>
                  <input required type="text" class="form-control" name="producto_nombre_ingles">
                </div>              
              </div>             
            
            <div class="col-xs-12 col-sm-6">
              <div class="section-input">
                <label>Descripción:</label>
                <textarea required id="prod-descripcion" type="text" class="form-control prod-txta" name="producto_descripcion" value="<?= $producto_descripcion ?>"></textarea><!--
                <b style="font-size: 12px;"> Nota: Si va a copiar texto de un word, por favor primero copiar en un block de notas, y de ahi copiar recién al cuadro de texto.</b>-->
              </div>     
            </div>

            <div class="col-xs-12 col-sm-6">
              <div class="section-input">
                <label>Descripción en Inglés:</label>
                <textarea required id="prod-descripcion-ingles" type="text" class="form-control prod-txta" name="producto_descripcion_ingles" value="<?= $producto_descripcion_ingles ?>"></textarea>
              </div>     
            </div>

           <!--  <div class="col-xs-12 col-md-6">
              <div class="section-input">
                <label>Descripción:</label>
                <input type="text" class="form-control" name="producto_descripcion" value="<?= $producto_descripcion ?>">
                  </div>
                </div>
                <div class="col-xs-12 col-md-6">
                  <div class="section-input">
                    <label>Descripción en inglés:</label>
                    <input type="text" class="form-control" name="producto_descripcion_ingles" value="<?= $producto_descripcion_ingles ?>">
                  </div>
                </div> -->

              <div class="col-xs-12 col-sm-6">
                <div class="section-input">
                  <label>Imagen 1:</label>
                  <input required type="file" class="form-control btn-success" name="producto_imagen" id="producto-imagen-1" accept="image/*" value="">
                  <small><b>Nota:</b> Medidas recomendadas 800 píxeles de ancho por 800 píxeles de alto. Peso máximo de 250KB.</small>
                </div>                         
            </div>

            <div class="col-xs-12 col-sm-6">
                <div class="section-input">
                  <label>Imagen 2:</label>
                  <input type="file" class="form-control btn-success" name="producto_imagen2" id="producto-imagen-2" accept="image/*" value="">
                  <small><b>Nota:</b> Medidas recomendadas 800 píxeles de ancho por 800 píxeles de alto. Peso máximo de 250KB.</small>
                </div>                        
            </div>

            <div class="col-xs-12 col-sm-6">
                <div class="section-input">
                  <label>Imagen 3:</label>
                  <input type="file" class="form-control btn-success" name="producto_imagen3" id="producto-imagen-3" accept="image/*" value="">
                  <small><b>Nota:</b> Medidas recomendadas 800 píxeles de ancho por 800 píxeles de alto. Peso máximo de 250KB.</small>
                </div>                          
            </div>



          </div>
      <div class="section-input">
        <div class="col-xs-12">
          <div class="col-xs-12 col-sm-6">
            <button type="submit" name="btn-op-2" value="agregar-exe/<?= $btn_op; ?>/<?= $valor_filtro; ?>/<?= $valor_pagina; ?>" class="btn btn-success btn-save">
              Guardar <span class="glyphicon glyphicon-saved"></span>
            </button>                  
          </div>
          <div class="col-xs-12 col-sm-6">
            <button type="button" class="btn btn-danger btn-close-form" id="closeFormRight-2">
              Ocultar <span class="glyphicon glyphicon-chevron-right"></span>
            </button>                  
          </div>
        </div>
      </div> 



            <!-- hidden obj -->
            <input type="hidden" autocomplete="off" name="tipo_usuario_id" value="<?= $tipo_usuario_id; ?>">
 
          </div>
        </div>
      </form>
    </div>

    <footer>
        <section class="view-desactivados" id="view-desactivados">
            <div class="container table-des">
                <form action="<?= URL; ?>" method="post">
                    <div class="section-table">
                      <?= $htmlDinamicList_2; ?>
                    </div>
                    
                    <div class="btn-section text-right">
                        <button type="submit" class="btn btn-success" name="btn-op-2" value="activar-exe/<?= $btn_op; ?>/<?= $subcategoria_id; ?>/<?= $page; ?>">
                          <span class="glyphicon glyphicon-ok" aria-hidden="true" style="font-size:14px;"></span>
                          Activar
                        </button>

                        <button type="button" class="btn btn-danger" id="close-view-des">
                          Cerrar
                        </button>
                    </div> 
                </form>
            </div>   
        </section>
    </footer>
    <script src="app/js/app.js"></script>
  </body>

</html>



