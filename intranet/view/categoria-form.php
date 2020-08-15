<?php require_once '../controller/categoria.controller.php'; ?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta lang="ES">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <title>::Módulo de Categoría::</title>
    <link rel="stylesheet" type="text/css" href="app/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app/css/style.css">
    <script src="app/js/jquery.js"></script>
    <script src="app/js/bootstrap.js"></script>
    <script src="app/js/app.js"></script>
    <script src="https://use.fontawesome.com/07b0ce5d10.js"></script>
    
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
      .form-g{
        color: #333;
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
                <center class="title-pag">
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
                    <form class="form-g" action="<?= URL; ?>" method="post">
                      <div class="section-general-form-2 bg-form">
                        <div class="col-xs-12 col-md-6 col-md-offset-3">
                          <div class="text-form text-just">
                            <h4>
                              <b>
                                <?= $título_form; ?>
                              </b>
                            </h4>
                            <br>
                            <p>
                              Toda transacción que realice es almacenada, 
                              se recomienda verificar los datos antes de ser guardados.
                            </p>
                          </div>

                          <div class="obj-form">
                            <div class="col-xs-12 col-sm-6 col-md-4">
                              <div class="section-input">
                                <label>Orden:</label>
                                <input type="number" class="form-control" name="categoria_orden" value="<?= $categoria_orden; ?>">
                              </div>                              
                            </div>
                                                       
                            <div class="col-xs-12 col-sm-6 col-md-4">
                              <div class="section-input">
                                <label>Nombre:</label>
                                <input type="text" class="form-control" name="categoria_nombre" value="<?= $categoria_nombre; ?>">
                              </div>                              
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4">
                              <div class="section-input">
                                <label>Nombre en ingles:</label>
                                <input type="text" class="form-control" name="categoria_nombre_ingles" value="<?= $categoria_nombre_ingles; ?>">
                              </div>                              
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                              <div class="section-input">
                                <label>Color</label>
                                <input type="color" class="form-control" name="categoria_color" value="<?= $categoria_color; ?>">
                              </div>                              
                            </div>


                            <!-- hidden obj -->
                            <input type="hidden"  autocomplete="off" name="categoria_id" value="<?= $categoria_id; ?>">
                            <input type="hidden"  autocomplete="off" value="<?= $btn_op_text; ?>/<?= $btn_op; ?>/<?= $valor_filtro; ?>/<?= $valor_pagina; ?>">
                            
                            <div class="section-btn text-right">
                              <div class="col-xs-12">
                                <button type="submit" name="btn-op-2" value="<?= $btn_op_text; ?>/<?= $btn_op; ?>/<?= $valor_filtro; ?>/<?= $valor_pagina; ?>" class="btn btn-success">
                                  <span class="glyphicon glyphicon-saved" style="font-size:14px;"></span>
                                  Guardar 
                                </button>     
                                <button type="button" class="btn btn-danger" onclick="document.location=('categoria.php');">
                                  <span class="glyphicon glyphicon-remove" style="font-size:14px;"></span>
                                  Regresar 
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

  </body>

</html>