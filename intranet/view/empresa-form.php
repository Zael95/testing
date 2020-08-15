<?php require_once '../controller/empresa.controller.php'; ?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta lang="ES">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <title>::Módulo de Empresas::</title>
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

<!-- columna izquierda -->
                        <div class="col-xs-12 col-md-5 vista-archivos-actuales">
                          <p class="text-left">
                            <big>
                              <b>
                                Archivos actuales
                              </b>
                            </big>
                            <br>
                            <small><i>Imágenes actuales de las Empresas en la web.</i></small>
                          </p>
                          <div class="sec-img-actual">
                            <div class="col-xs-12 col-sm-6" style="margin-bottom: 30px;">
                              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">
                                <?php if (isset($empresa_imagen1) and $empresa_imagen1 != '') {
                                    $imgEmpresa1 = "app/img/empresas/$empresa_imagen1";
                                  }else{
                                    $imgEmpresa1 = "app/img/imgDefault2.png";
                                  } ?>
                                <img class="img-responsive" src=<?= $imgEmpresa1; ?>>
                                <br>           
                                <p>Imagen 1</p>
                                <small><?= $empresa_imagen1; ?></small>
                              </button>
                            </div>

                            <div class="col-xs-12 col-sm-6" style="margin-bottom: 30px;">
                              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">
                                <?php if (isset($empresa_imagen2) and $empresa_imagen2 != '') {
                                    $imgEmpresa2 = "app/img/empresas/$empresa_imagen2";
                                  }else{
                                    $imgEmpresa2 = "app/img/imgDefault2.png";
                                  } ?>
                                <img class="img-responsive" src=<?= $imgEmpresa2; ?>>
                                <br>            
                                <p>Imagen 2</p>
                                <small><?= $empresa_imagen2; ?></small>
                              </button>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo">
                                <?php if (isset($empresa_imagen3) and $empresa_imagen3 != '') {
                                    $imgEmpresa3 = "app/img/empresas/$empresa_imagen3";
                                  }else{
                                    $imgEmpresa3 = "app/img/imgDefault2.png";
                                  } ?>
                                <img class="img-responsive" src=<?= $imgEmpresa3; ?>>
                                <br>            
                                <p>Imagen 3</p>
                                <small><?= $empresa_imagen3; ?></small>
                              </button>
                            </div>

                            <!-- Imagenes Emeregentes -->
                            <!-- OBS: Sin esto no modifica cuando agregamos nuevas imágenes. El emergente sale de la 1ra imagen en las 3 imágenes, falta corregir eso -->

                            <!-- Imagen emergente 1 -->
                            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="exampleModalLabel"></h4>
                                  </div>
                                  <div class="modal-body">
                                    <?php if (isset($empresa_imagen1) and $empresa_imagen1 != '') {
                                      $imgEmpresaEmergente1 = "app/img/empresas/$empresa_imagen";
                                    }else{
                                      $imgEmpresaEmergente1 = "app/img/imgDefault2.png";
                                    } ?>
                                    <img class="img-responsive" src=<?= $imgEmpresaEmergente1; ?>>
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
                                    <h4 class="modal-title" id="exampleModalLabel">Imagen: <?= $empresa_imagen_2; ?></h4>
                                  </div>
                                  <div class="modal-body">
                                    <?php if (isset($empresa_imagen2) and $empresa_imagen2 != '') {
                                      $imgEmpresaEmergente2 = "app/img/empresas/$empresa_imagen2";
                                    }else{
                                      $imgEmpresaEmergente2 = "app/img/imgDefault2.png";
                                    } ?>
                                    <img class="img-responsive" src=<?= $imgEmpresaEmergente2; ?>>
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
                                    <h4 class="modal-title" id="exampleModalLabel">Imagen: <?= $empresa_imagen_3; ?></h4>
                                  </div>
                                  <div class="modal-body">
                                    <?php if (isset($empresa_imagen3) and $empresa_imagen3 != '') {
                                      $imgEmpresaEmergente3 = "app/img/empresas/$empresa_imagen3";
                                    }else{
                                      $imgEmpresaEmergente3 = "app/img/imgDefault2.png";
                                    } ?>
                                    <img class="img-responsive" src=<?= $imgEmpresaEmergente3; ?>>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                  </div>
                                </div>
                              </div>
                            </div>                    
                          </div>
                        </div>


<!-- columna derecha -->
                        <div class="col-xs-12 col-md-7 np">
                          <div class="obj-form2">
                              <div class="obj-form">
                            <div class="col-xs-12 col-sm-6">
                              <div class="section-input">
                                <label>Orden:</label>
                                <input type="number" class="form-control" name="empresa_orden" value="<?= $empresa_orden; ?>">
                              </div>                              
                            </div>

                            <div class="col-xs-12 col-sm-6">
                              <div class="section-input">
                                <label>Link de facebook:</label>
                                <input type="text" class="form-control" name="empresa_link_face" value="<?= $empresa_link_face; ?>">
                              </div>                              
                            </div>
                                                       
                            <div class="col-xs-12 col-sm-6">
                              <div class="section-input">
                                <label>Nombre de la Empresa:</label>
                                <input type="text" class="form-control" name="empresa_nombre" value="<?= $empresa_nombre; ?>">
                              </div>                              
                            </div>
                            <div class="col-xs-12 col-sm-6">
                              <div class="section-input">
                                <label>Nombre de la Empresa en inglés:</label>
                                <input type="text" class="form-control" name="empresa_nombre_ingles" value="<?= $empresa_nombre_ingles; ?>">
                              </div>                              
                            </div>

                            <div class="col-xs-12 col-sm-6">
                              <div class="section-input">
                                <label>Descripción 1:</label>
                                <textarea id="emp-descripcion1" type="text" class="form-control prod-txta" name="empresa_descripcion1" value="<?= $empresa_descripcion1 ?>"><?= $empresa_descripcion1; ?></textarea>
                              </div>     
                            </div>
                            <div class="col-xs-12 col-sm-6">
                              <div class="section-input">
                                <label>Descripción 1 en inglés:</label>
                                <textarea id="emp-descripcion1-ingles" type="text" class="form-control prod-txta" name="empresa_descripcion1_ingles" value="<?= $empresa_descripcion1_ingles ?>"><?= $empresa_descripcion1_ingles; ?></textarea>
                              </div>     
                            </div>

                            <div class="col-xs-12 col-sm-6">
                              <div class="section-input">
                                <label>Descripción 2:</label>
                                <textarea id="emp-descripcion2" type="text" class="form-control prod-txta" name="empresa_descripcion2" value="<?= $empresa_descripcion2 ?>"><?= $empresa_descripcion2; ?></textarea>
                              </div>     
                            </div>
                            <div class="col-xs-12 col-sm-6">
                              <div class="section-input">
                                <label>Descripción 2 en inglés:</label>
                                <textarea id="emp-descripcion2-ingles" type="text" class="form-control prod-txta" name="empresa_descripcion2_ingles" value="<?= $empresa_descripcion2_ingles ?>"><?= $empresa_descripcion2_ingles; ?></textarea>
                              </div>     
                            </div>

                            <div class="col-xs-12 col-sm-6">
                              <div class="section-input">
                                <label>Descripción 3:</label>
                                <textarea id="emp-descripcion3" type="text" class="form-control prod-txta" name="empresa_descripcion3" value="<?= $empresa_descripcion3 ?>"><?= $empresa_descripcion3; ?></textarea>
                              </div>     
                            </div>
                            <div class="col-xs-12 col-sm-6">
                              <div class="section-input">
                                <label>Descripción 3 en inglés:</label>
                                <textarea id="emp-descripcion3-ingles" type="text" class="form-control prod-txta" name="empresa_descripcion3_ingles" value="<?= $empresa_descripcion3_ingles ?>"><?= $empresa_descripcion3_ingles; ?></textarea>
                              </div>     
                            </div>

                            <div class="col-xs-12 np">
                              <div class="col-xs-12">
                                <div class="section-input">
                                  <label>Imagen 1:</label>
                                  <input type="file" class="form-control btn-success" name="empresa_imagen1" value="<?= $empresa_imagen1 ?>" id="empresa-imagen-1" accept="image/*">
                                </div>
                              </div>
                              <div class="col-xs-12">
                                <div class="section-input">
                                  <label>Imagen 2:</label>
                                  <input type="file" class="form-control btn-success" name="empresa_imagen2" value="<?= $empresa_imagen2 ?>" id="empresa-imagen-2" accept="image/*">
                                </div>
                              </div>
                              <div class="col-xs-12">
                                <div class="section-input">
                                  <label>Imagen 3:</label>
                                  <input type="file" class="form-control btn-success" name="empresa_imagen3" value="<?= $empresa_imagen3 ?>" id="empresa-imagen-3" accept="image/*">
                                </div>
                              </div>

                              <div class="col-xs-12 col-sm-6">
                              <!-- <div class="section-input">
                                <label>Link de facebook:</label>
                                <input type="text" class="form-control" name="empresa_link_face" value="<?= $empresa_link_face; ?>">
                              </div>  -->                          
                            </div>

                            </div>

                            

                            

                            
                            


                            <!-- hidden obj : Usa ese input oculto para enviar el id por post  -->
                            <input type="hidden"  autocomplete="off" name="empresa_id" value="<?= $empresa_id; ?>">
                            <input type="hidden"  autocomplete="off" value="<?= $btn_op_text; ?>/<?= $btn_op; ?>/<?= $valor_filtro; ?>/<?= $valor_pagina; ?>">
                            
                            <div class="section-btn text-right">
                              <div class="col-xs-12">
                                <button type="submit" name="btn-op-2" value="<?= $btn_op_text; ?>/<?= $btn_op; ?>/<?= $valor_filtro; ?>/<?= $valor_pagina; ?>" class="btn btn-success">
                                  <span class="glyphicon glyphicon-saved" style="font-size:14px;"></span>
                                  Guardar 
                                </button>     
                                <button type="button" class="btn btn-danger" onclick="document.location=('empresa.php');">
                                  <span class="glyphicon glyphicon-remove" style="font-size:14px;"></span>
                                  Regresar 
                                </button>                                  
                              </div>   
                            </div>


                            <!-- hidden obj -->
                            <input type="hidden"  autocomplete="off" name="empresa_id" value="<?= $empresa_id; ?>">
                            <input type="hidden"  autocomplete="off" name="empresa_imagen1_c" value="<?= $empresa_imagen1; ?>">
                            <input type="hidden"  autocomplete="off" name="empresa_imagen2_c" value="<?= $empresa_imagen2; ?>">
                            <input type="hidden"  autocomplete="off" name="empresa_imagen3_c" value="<?= $empresa_imagen3; ?>">  
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