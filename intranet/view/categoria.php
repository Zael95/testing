<?php require_once '../controller/categoria.controller.php'; ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta lang="ES">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <title>::Módulo de Categorías::</title>
    <link rel="stylesheet" type="text/css" href="app/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app/css/style.css">
    <!-- <link rel="shortcut icon" href="app/img/favicon.png" type="image/x-icon"> -->
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
                    <?= $htmlMenu; ?> <!-- esta variable contiene la tabla de categorias activados -->
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
                        <form id="principal-form" class="form-g" action="<?= URL; ?>" method="post">
                          <center>
                            <div class="col-xs-12 col-md-6 col-md-offset-3">
                              <?= $msg; ?>
                            </div>
                          </center>
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
    <div class="section-float-form section-usuario-form menulateral-categoria">
      <form action="<?= URL; ?>" method="POST">
        <div class="col-xs-12">
          <div class="text-form text-just">
            <h4>
              <b>
                Agregar nuevo registro
              </b>
            </h4>

            <p>
              Toda transacción que realice es almacenada, 
              se recomienda verificar los datos antes de ser guardados. <span class="glyphicon glyphicon-thumbs-up" style="color:blue;"></span>
            </p>
          </div>

          <div class="obj-form">
            <div class="section-input">
              <label>Orden:</label>
              <input required type="number" class="form-control" name="categoria_orden">
            </div>
            <div class="section-input">
              <label>Nombre:</label>
              <input required type="text" class="form-control" name="categoria_nombre">
            </div>
            <div class="section-input">
              <label>Nombre en ingles</label>
              <input required type="text" class="form-control" name="categoria_nombre_ingles">
            </div>
            <div class="section-input">
              <label>Color de Categoría:</label>
              <input required type="color" class="form-control" name="categoria_color">
            </div>
         
            <!-- hidden obj -->
            <div class="section-input">
              <button type="submit" name="btn-op-2" value="agregar-exe/<?= $btn_op; ?>/<?= $valor_filtro; ?>/<?= $valor_pagina; ?>" class="btn btn-success btn-save">
                Guardar <span class="glyphicon glyphicon-saved"></span>
              </button>
              <br><br><br>
              <button type="button" class="btn btn-danger btn-close-form" id="closeFormRight">
                Ocultar <span class="glyphicon glyphicon-chevron-right"></span>
              </button>
            </div>  
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
                        <button type="submit" class="btn btn-success" name="btn-op-2" value="activar-exe/<?= $btn_op; ?>/<?= $tipo_usuario_id; ?>/<?= $page; ?>">
                          <span class="glyphicon glyphicon-ok" aria-hidden="true" style="font-size:14px;"></span>
                          Activar
                        </button>
                        <button type="button" class="btn btn-danger" id="close-view-des">
                          <span class="glyphicon glyphicon-remove" aria-hidden="true" style="font-size:14px;"></span>
                          Cerrar
                        </button>
                    </div> 
                </form>
            </div>   
        </section>
    </footer>
  </body>
</html>