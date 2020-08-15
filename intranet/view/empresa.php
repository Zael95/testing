<?php require_once '../controller/empresa.controller.php'; ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta lang="ES">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <title>::Módulo de Empresas::</title>
    <link rel="stylesheet" type="text/css" href="app/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app/css/style.css">
    <!-- ESTILOS DEL PLUGIN DEL BOTÓN DE CARGA DE ARCHIVOS -->
    <link rel="stylesheet" type="text/css" href="../lib/fileinput/css/fileinput.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">

    <script src="app/js/jquery.js"></script>
    <script src="app/js/bootstrap.js"></script>
    <script src="https://use.fontawesome.com/07b0ce5d10.js"></script>
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
    <div class="section-float-form section-usuario-form">
      <form action="<?= URL; ?>" method="POST" enctype="multipart/form-data">
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
            
            <div class="col-xs-12 col-md-6 section-input-empresa">
              <label>Orden:</label>
              <input required type="number" class="form-control" name="empresa_orden">
            </div>

            <div class="col-xs-12 col-md-6 section-input-empresa">
              <label>Link de facebook:</label>
              <input required type="text" class="form-control" name="empresa_link_face">
            </div>
           

            <div class="col-xs-12 col-md-6 section-input-empresa">
              <label>Nombre de la Empresa:</label>
              <input type="text" class="form-control" name="empresa_nombre">
            </div>
            <div class="col-xs-12 col-md-6 section-input-empresa">
              <label>Nombre de la Empresa en ingles:</label>
              <input required type="text" class="form-control" name="empresa_nombre_ingles">
            </div>
            
            <div class="col-xs-12 col-sm-6">
              <div class="section-input">
                <label>Descripción 1:</label>
                <textarea required id="emp-descripcion1" type="text" class="form-control prod-txta" name="empresa_descripcion1" value="<?= $empresa_descripcion1 ?>"></textarea>
              </div>     
            </div>
            <div class="col-xs-12 col-sm-6">
              <div class="section-input">
                <label>Descripción 1 en inglés:</label>
                <textarea required id="emp-descripcion1-ingles" type="text" class="form-control prod-txta" name="empresa_descripcion1_ingles" value="<?= $empresa_descripcion1_ingles ?>"></textarea>
              </div>     
            </div>

            <div class="col-xs-12 col-sm-6">
              <div class="section-input">
                <label>Descripción 2:</label>
                <textarea required id="emp-descripcion2" type="text" class="form-control prod-txta" name="empresa_descripcion2" value="<?= $empresa_descripcion2 ?>"></textarea>
              </div>     
            </div>
            <div class="col-xs-12 col-sm-6">
              <div class="section-input">
                <label>Descripción 2 en inglés:</label>
                <textarea required id="emp-descripcion2-ingles" type="text" class="form-control prod-txta" name="empresa_descripcion2_ingles" value="<?= $empresa_descripcion2_ingles ?>" ></textarea>
              </div>     
            </div>
            <div class="col-xs-12 col-sm-6">
              <div class="section-input">
                <label>Descripción 3:</label>
                <textarea id="emp-descripcion3" type="text" class="form-control prod-txta" name="empresa_descripcion3" value="<?= $empresa_descripcion3 ?>"></textarea>
              </div>     
            </div>
            <div class="col-xs-12 col-sm-6">
              <div class="section-input">
                <label>Descripción 3 en inglés:</label>
                <textarea id="emp-descripcion3-ingles" type="text" class="form-control prod-txta" name="empresa_descripcion3_ingles" value="<?= $empresa_descripcion3_ingles ?>"></textarea>
              </div>     
            </div>


            <div class="col-xs-12 section-input-empresa">
                <label>Imagen 1:</label>
                  <input required type="file" class="form-control btn-success" name="empresa_imagen1" id="empresa-imagen-1" accept="image/*" value="">
                  <small><b>Nota:</b> Medidas recomendadas 800 píxeles de ancho por 800 píxeles de alto. Peso máximo de 250KB.</small>
            </div>
            <div class="col-xs-12 section-input-empresa">
                <label>Imagen 2:</label>
                  <input type="file" class="form-control btn-success" name="empresa_imagen2" id="empresa-imagen-2" accept="image/*" value="">
                  <small><b>Nota:</b> Medidas recomendadas 800 píxeles de ancho por 800 píxeles de alto. Peso máximo de 250KB.</small>
            </div>
            <div class="col-xs-12 section-input-empresa">
                <label>Imagen 3:</label>
                  <input type="file" class="form-control btn-success" name="empresa_imagen3" id="empresa-imagen-3" accept="image/*" value="">
                  <small><b>Nota:</b> Medidas recomendadas 800 píxeles de ancho por 800 píxeles de alto. Peso máximo de 250KB.</small>
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

    <!-- PLUGIN PARA EFECTO PARA LA VISTA DE CARGA DE ARCHIVOS -->
    <script type="text/javascript" src="../lib/fileinput/js/plugins/piexif.js"></script>
    <script type="text/javascript" src="../lib/fileinput/js/fileinput.js"></script>
    <script type="text/javascript" src="../lib/fileinput/js/locales/fr.js"></script> 
    <script type="text/javascript" src="../lib/fileinput/js/locales/es.js"></script> 

    <!-- PLUGIN PARA EFECTO PARA LA VISTA DE CARGA DE ARCHIVOS -->
     <script src="app/js/app.js"></script>
  </body>
</html>