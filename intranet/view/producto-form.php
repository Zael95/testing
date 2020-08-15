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
                    <?= $htmlMenu;/*$menu;*/ ?>
                </ul>
            </form>
          </div> 
        </div>

      <!-- RIGHT -->
        <div class="right-container <?= $body; ?>" id="right-container" style="padding-bottom:0px;">
          <div class="container-fluid">
            <div class="row">         
              <div class="col-xs-12">
                <center>
                  <h3>
                    <b><?= $htmlTitulo; ?></b>
                  </h3>
                </center>
                <center>
                  <div class="col-xs-12 col-md-6 col-md-offset-3">
                    <?= $msg; ?>
                  </div>
                </center>
                <div class="col-xs-12 section-home" style="padding-bottom:50px;">
                  <center>
                    <form class="" action="<?= URL; ?>" method="post" enctype="multipart/form-data">
                      <div class="container bg-form">

                        <div class="col-xs-12">
                            <div class="text-form text-just">
                              <h4>
                                <b>
                                  <?= $título_form; ?>
                                </b>
                              </h4>
                              <p>
                                Toda transacción que realice es almacenada, 
                                se recomienda verificar los datos antes de ser guardados.
                              </p>
                            </div>
                        </div>
                        <br><br><br><br><br><br>

                        <div class="col-xs-12 col-md-5 vista-archivos-actuales">
                          <p class="text-left">
                            <big>
                              <b>
                                Archivos actuales
                              </b>
                            </big>
                            <br>
                            <small><i>Imágenes actuales en la web.</i></small>
                          </p>
                          <div class="sec-img-actual">
                            <div class="col-xs-12 col-sm-6" style="margin-bottom: 30px;">
                              <?php if (isset($producto_imagen) and $producto_imagen != '') {
                                $imgProducto1 = "app/img/productos/$producto_imagen";
                              }else{
                                $imgProducto1 = "app/img/imgDefault2.png";
                              } ?>
                              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">
                                <img class="img-responsive" src=<?= $imgProducto1; ?>>
                                <br>            
                                <p>Imagen 1</p>
                                <small><?= $producto_imagen; ?></small>
                              </button>
                            </div>

                            <div class="col-xs-12 col-sm-6" style="margin-bottom: 30px;">
                              <?php if (isset($producto_imagen2) and $producto_imagen2 != '') {
                                $imgProducto2 = "app/img/productos/$producto_imagen2";
                              }else{
                                $imgProducto2 = "app/img/imgDefault2.png";
                              } ?>
                              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">
                                <img class="img-responsive" src=<?= $imgProducto2; ?>>
                                <br>            
                                <p>Imagen 2</p>
                                <small><?= $producto_imagen2; ?></small>
                              </button>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                              <?php if (isset($producto_imagen3) and $producto_imagen3 != '') {
                                $imgProducto3 = "app/img/productos/$producto_imagen3";
                              }else{
                                $imgProducto3 = "app/img/imgDefault2.png";
                              } ?>
                              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo">
                                <img class="img-responsive" src=<?= $imgProducto3; ?>>
                                <br>            
                                <p>Imagen 3</p>
                                <small><?= $producto_imagen3; ?></small>
                              </button>
                            </div>

                            <!-- Imagenes Emeregentes -->

                            <!-- Imagen emergente 1 -->
                            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="exampleModalLabel">Imagen 1: <?= $producto_imagen_1; ?></h4>
                                  </div>
                                  <div class="modal-body">
                                    <?php if (isset($producto_imagen) and $producto_imagen != '') {
                                      $imgProductoEmergente1 = "app/img/productos/$producto_imagen";
                                    }else{
                                      $imgProductoEmergente1 = "app/img/imgDefault2.png";
                                    } ?>
                                    <img class="img-responsive" src=<?= $imgProductoEmergente1; ?>>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- Imagen emergente 2 -->
                            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="exampleModalLabel">Imagen 2: <?= $producto_imagen_2; ?></h4>
                                  </div>
                                  <div class="modal-body">
                                    <?php if (isset($producto_imagen2) and $producto_imagen2 != '') {
                                      $imgProductoEmergente2 = "app/img/productos/$producto_imagen2";
                                    }else{
                                      $imgProductoEmergente2 = "app/img/imgDefault2.png";
                                    } ?>
                                    <img class="img-responsive" src=<?= $imgProductoEmergente2; ?>>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                  </div>
                                </div>
                              </div>
                            </div>   

                            <!-- Imagen emergente 3 -->
                            <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="exampleModalLabel">Imagen 3: <?= $producto_imagen_3; ?></h4>
                                  </div>
                                  <div class="modal-body">
                                    <?php if (isset($producto_imagen3) and $producto_imagen3 != '') {
                                    $imgProductoEmergente3 = "app/img/productos/$producto_imagen3";
                                    }else{
                                      $imgProductoEmergente3 = "app/img/imgDefault2.png";
                                    } ?>
                                    <img class="img-responsive" src=<?= $imgProductoEmergente3; ?>>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                  </div>
                                </div>
                              </div>
                            </div>                    
                          </div>
                        </div>

<!-- columna derecha (ingreso de datos) -->
                        <div class="col-xs-12 col-md-7 np">
                          <div class="obj-form2">
                            <!-- inputs form -->
                            <div class="col-xs-12 col-md-12 np">
                              <div class="col-xs-12 col-md-6">
                                <div class="section-input">
                                  <label>Orden:</label>
                                  <input type="text" class="form-control" name="producto_orden" value="<?= $producto_orden ?>">
                                </div>
                              </div>
                        
                              <div class="col-xs-12 col-md-6">
                                <div class="section-input">
                                  <!-- <label>Categoría</label>
                                  <input type="text" class="form-control" name="categoria_id" value="<?= $categoria_id ?>"> -->
                                    <label>Categoría</label>
                                    <select class="form-control" name="categoria_id" id="">
                                        <?= $selectoptions ?>
                                    </select>
                                </div>
                              </div>
                              <div class="col-xs-12 col-md-6">
                                <div class="section-input">
                                  <label>Nombre:</label>
                                  <input type="text" class="form-control" name="producto_nombre" value="<?= $producto_nombre ?>">
                                </div>
                              </div>
                              <div class="col-xs-12 col-md-6">
                                <div class="section-input">
                                  <label>Nombre en inglés:</label>
                                  <input type="text" class="form-control" name="producto_nombre_ingles" value="<?= $producto_nombre_ingles ?>">
                                </div>
                              </div>
                            <!-- </div> -->
                            <div class="col-xs-12 np">
                              <div class="col-xs-12 col-md-6">
                                <div class="section-input">
                                  <label>Descripción en español:</label>
                                  <textarea id="prod-descripcion" type="text" class="form-control prod-txta" name="producto_descripcion" value=""><?= $producto_descripcion; ?></textarea><!--
                                  <b style="font-size: 12px;">Nota: Si va a copiar texto de un word, por favor primero copiar en un block de notas, y de ahi copiar recién al cuadro de texto.</b>-->
                                </div>                                
                              </div>
                              <div class="col-xs-12 col-md-6">
                                <div class="section-input">
                                  <label>Descripción en inglés:</label>
                                  <textarea id="prod-descripcion-ingles" type="text" class="form-control prod-txta" name="producto_descripcion_ingles" value=""><?= $producto_descripcion_ingles; ?></textarea>
                                </div>                                
                              </div>
                            </div>
                              <!-- <div class="col-xs-12 col-md-6">
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
                            </div>
                            <div class="col-xs-12 np">
                              <div class="col-xs-12 col-md-6">
                                <div class="section-input">
                                  <label>Imagen 1:</label>
                                  <input type="file" class="form-control btn-success" name="producto_imagen" value="<?= $producto_imagen ?>" id="producto-imagen-1" accept="image/*">
                                </div>
                              </div>
                              
                              <div class="col-xs-12 col-md-6">
                                <div class="section-input">
                                  <label>Imagen 2:</label>
                                  <input type="file" class="form-control btn-success" name="producto_imagen2" value="<?= $producto_imagen2 ?>" id="producto-imagen-2" accept="image/*">
                                </div>
                              </div>
                              <div class="col-xs-12 col-md-6">
                                <div class="section-input">
                                  <label>Imagen 3:</label>
                                  <input type="file" class="form-control btn-success" name="producto_imagen3" value="<?= $producto_imagen3 ?>" id="producto-imagen-3" accept="image/*">
                                </div>
                              </div>
                            </div>
                            <!-- fin -->


                            <!-- hidden obj -->
                            <input type="hidden"  autocomplete="off" name="producto_id" value="<?= $producto_id; ?>">
                            <input type="hidden"  autocomplete="off" name="producto_imagen1_c" value="<?= $producto_imagen; ?>">
                            <input type="hidden"  autocomplete="off" name="producto_imagen2_c" value="<?= $producto_imagen2; ?>">
                            <input type="hidden"  autocomplete="off" name="producto_imagen3_c" value="<?= $producto_imagen3; ?>">
                            <!-- <input type="hidden"  autocomplete="off" name="producto_archivo_c" value="<?= $producto_archivo; ?>"> -->


                            <input type="hidden"  autocomplete="off" value="<?= $btn_op_text; ?>/<?= $btn_op; ?>/<?= $valor_filtro; ?>/<?= $valor_pagina; ?>">
                            
                              <div class="section-btn text-right">
                                <div class="col-xs-12 sec-btn-add">
                                  <button type="submit" name="btn-op-2" value="<?= $btn_op_text; ?>/<?= $btn_op; ?>/<?= $valor_filtro; ?>/<?= $valor_pagina; ?>" class="btn btn-success">
                                    Guardar <span class="glyphicon glyphicon-saved" style="font-size:14px;"></span>
                                  </button>     

                                  <button type="button" class="btn btn-danger" onclick="document.location=('producto.php');">
                                    Regresar <span class="glyphicon glyphicon-remove" style="font-size:14px;"></span>
                                  </button>                                        
                                </div>
                              </div>                              
  
                          </div>
                        </div>
                      </div>   
                    </form>
                  </center> 
                </div>
              </div>
            </div>          
          </div>
        </div>
    </div>

    <footer></footer>
    <script src="app/js/app.js"></script>
  </body>

</html>