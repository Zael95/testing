<?php require_once '../controller/contactenos.controller.php'; ?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta lang="ES">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <title>::Módulo de contactenos::</title>
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
                            <small><i>Imágenes actuales en la web.</i></small>
                          </p>
                          <div class="sec-img-actual">
                            <div class="col-xs-12 col-sm-6" style="margin-bottom: 30px;">
                              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">
                                <?php if (isset($contactenos_imagen) and $contactenos_imagen != '') {
                                    $imgcontactenos1 = "app/img/contactenos/$contactenos_imagen";
                                  }else{
                                    $imgcontactenos1 = "app/img/imgDefault2.png";
                                  } ?>
                                <img class="img-responsive" src=<?= $imgcontactenos1; ?>>
                                <br>           
                                <p>Imagen 1</p>
                                <small><?= $contactenos_imagen; ?></small>
                              </button>
                            </div>

                            <div class="col-xs-12 col-sm-6" style="margin-bottom: 30px;">
                              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">
                                <?php if (isset($contactenos_imagen2) and $contactenos_imagen2 != '') {
                                    $imgcontactenos2 = "app/img/contactenos/$contactenos_imagen2";
                                  }else{
                                    $imgcontactenos2 = "app/img/imgDefault2.png";
                                  } ?>
                                <img class="img-responsive" src=<?= $imgcontactenos2; ?>>
                                <br>            
                                <p>Imagen 2</p>
                                <small><?= $contactenos_imagen2; ?></small>
                              </button>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo">
                                <?php if (isset($contactenos_imagen3) and $contactenos_imagen3 != '') {
                                    $imgcontactenos3 = "app/img/contactenos/$contactenos_imagen3";
                                  }else{
                                    $imgcontactenos3 = "app/img/imgDefault2.png";
                                  } ?>
                                <img class="img-responsive" src=<?= $imgcontactenos3; ?>>
                                <br>            
                                <p>Imagen 3</p>
                                <small><?= $contactenos_imagen3; ?></small>
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
                                    <?php if (isset($contactenos_imagen) and $contactenos_imagen != '') {
                                      $imgcontactenosEmergente1 = "app/img/contactenos/$contactenos_imagen";
                                    }else{
                                      $imgcontactenosEmergente1 = "app/img/imgDefault2.png";
                                    } ?>
                                    <img class="img-responsive" src=<?= $imgcontactenosEmergente1; ?>>
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
                                    <h4 class="modal-title" id="exampleModalLabel">Imagen: <?= $contactenos_imagen_2; ?></h4>
                                  </div>
                                  <div class="modal-body">
                                    <?php if (isset($contactenos_imagen2) and $contactenos_imagen2 != '') {
                                      $imgcontactenosEmergente2 = "app/img/contactenos/$contactenos_imagen2";
                                    }else{
                                      $imgcontactenosEmergente2 = "app/img/imgDefault2.png";
                                    } ?>
                                    <img class="img-responsive" src=<?= $imgcontactenosEmergente2; ?>>
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
                                    <h4 class="modal-title" id="exampleModalLabel">Imagen: <?= $contactenos_imagen_3; ?></h4>
                                  </div>
                                  <div class="modal-body">
                                    <?php if (isset($contactenos_imagen3) and $contactenos_imagen3 != '') {
                                      $imgcontactenosEmergente3 = "app/img/contactenos/$contactenos_imagen3";
                                    }else{
                                      $imgcontactenosEmergente3 = "app/img/imgDefault2.png";
                                    } ?>
                                    <img class="img-responsive" src=<?= $imgcontactenosEmergente3; ?>>
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
                                <input required type="number" class="form-control" name="contactenos_orden" value="<?= $contactenos_orden; ?>">
                              </div>                              
                            </div>

                            <div class="col-xs-12 col-sm-6">
                              <div class="section-input">
                                <label>Fecha: </label>
                                <input required type="text" class="form-control" name="contactenos_fecha" value="<?= $contactenos_fecha; ?>">
                              </div>                              
                            </div>
                                                       
                            <div class="col-xs-12 col-sm-6">
                              <div class="section-input">
                                <label>Nombres y Apellidos:</label>
                                <input required type="text" class="form-control" name="contactenos_titulo" value="<?= $contactenos_titulo; ?>">
                              </div>                              
                            </div>               

                            <div class="col-xs-12 col-sm-6">
                              <div class="section-input">
                                <label>Teléfono:</label>
                                <input required type="tel" class="form-control" name="contactenos_subtitulo" value="<?= $contactenos_subtitulo; ?>">
                              </div>                              
                            </div> 

                            <div class="col-xs-12 col-sm-6">
                              <div class="section-input">
                                <label>Correo:</label>
                                <input required type="email" class="form-control" name="contactenos_descripcion" value="<?= $contactenos_descripcion; ?>">
                              </div>                              
                            </div>               

                            <div class="col-xs-12 col-sm-6">
                              <div class="section-input">
                                <label>Celular:</label>
                                <input required type="tel" class="form-control" name="contactenos_descripcion2" value="<?= $ontactenos_descripcion2; ?>">
                              </div>                              
                            </div> 
                        
                            <div class="col-xs-12 col-sm-6">
                              <div class="section-input">
                                <label>Mensaje:</label>
                                <textarea required id="not-descripcion3" type="text" class="form-control prod-txta" name="contactenos_descripcion3" value="<?= $contactenos_descripcion3 ?>"><?= $contactenos_descripcion3; ?></textarea>
                              </div>     
                            </div>
                  

                            <div class="col-xs-12 np">
                              <div class="col-xs-12">
                                <div class="section-input">
                                  <label>Imagen 1:</label>
                                  <input type="file" class="form-control btn-success" name="contactenos_imagen" value="<?= $contactenos_imagen ?>" id="contactenos-imagen-1" accept="image/*">
                                </div>
                              </div>
                              <div class="col-xs-12">
                                <div class="section-input">
                                  <label>Imagen 2:</label>
                                  <input type="file" class="form-control btn-success" name="contactenos_imagen2" value="<?= $contactenos_imagen2 ?>" id="contactenos-imagen-2" accept="image/*">
                                </div>
                              </div>
                              <div class="col-xs-12">
                                <div class="section-input">
                                  <label>Imagen 3:</label>
                                  <input type="file" class="form-control btn-success" name="contactenos_imagen3" value="<?= $contactenos_imagen3 ?>" id="contactenos-imagen-3" accept="image/*">
                                </div>
                              </div>

                            </div>

                            <!-- hidden obj : Usa ese input oculto para enviar el id por post  -->
                            <input type="hidden"  autocomplete="off" name="contactenos_id" value="<?= $contactenos_id; ?>">
                            <input type="hidden"  autocomplete="off" value="<?= $btn_op_text; ?>/<?= $btn_op; ?>/<?= $valor_filtro; ?>/<?= $valor_pagina; ?>">
                            
                            <div class="section-btn text-right">
                              <div class="col-xs-12">
                                <button type="submit" name="btn-op-2" value="<?= $btn_op_text; ?>/<?= $btn_op; ?>/<?= $valor_filtro; ?>/<?= $valor_pagina; ?>" class="btn btn-success">
                                  <span class="glyphicon glyphicon-saved" style="font-size:14px;"></span>
                                  Guardar 
                                </button>     
                                <button type="button" class="btn btn-danger" onclick="document.location=('contactenos.php');">
                                  <span class="glyphicon glyphicon-remove" style="font-size:14px;"></span>
                                  Regresar 
                                </button>                                  
                              </div>   
                            </div>


                            <!-- hidden obj -->
                            <input type="hidden"  autocomplete="off" name="contactenos_id" value="<?= $contactenos_id; ?>">
                            <input type="hidden"  autocomplete="off" name="contactenos_imagen1_c" value="<?= $contactenos_imagen; ?>">
                            <input type="hidden"  autocomplete="off" name="contactenos_imagen2_c" value="<?= $contactenos_imagen2; ?>">
                            <input type="hidden"  autocomplete="off" name="contactenos_imagen3_c" value="<?= $contactenos_imagen3; ?>">  
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