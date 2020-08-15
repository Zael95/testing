<?php 
session_start();

// Obligatorios
include '../common/config.php';
include '../functions/functions.php';
require '../post/post.php';//Si se va a trabajar con envio de datos.
require_once '../models/general.class.php';// clases general query
$gen = new generalQuery(); 
require_once '../models/view.class.php';// clase que genera las vistas 
require_once '../models/modules.class.php';// 
require '../models/login.class.php';// clases login
include '../common/login_validate.php';// archivo que valida la sesion de usuario
include '../common/theme.php';// archivo que actualiza el tema.


// Inicia objeto de clase
$obj = new Producto(); 

//Datos Generales x Archivo
$type_sys = SYS;
$htmlTitulo = 'Módulo de Productos';


// Inicializa variable.
$hidden = '';
$block = '';
$visible = '';
$msg = '';
$htmlOptionsCategoria = '';




//Cantidad de registros por página
    $limit = 15;

##########################  MENU  ######################################

    $arg_btn_home = array(
        //array('icono','titulo','link','hidden/block')
         array('th-large'  ,'<br>Módulo de<br> Categorías'   ,'categoria.php'    , "block")
        ,array('list-alt'  ,'<br>Módulo de<br> Productos'    ,'producto.php'    , "block")
        ,array('th'  ,'<br>Módulo de<br> Noticias'   ,'noticia.php'    , "block")
    );

    $htmlBtnHome = btn_link_home($arg_btn_home);
    $htmlMenu = menu_view($arg_btn_home);

##########################  FIN-MENU  ##################################




// @Section-1 :> Eventos de BD: update,delete,insert | todas las vistas

    #Funcionalidades de botón
    if($btn_op_2!=''){
        switch($btn_op_2){
            case 'activar-exe':
                for($i=0;$i<$count_check;$i++){
                    $result = $obj->cambiarEstado(1,$check_selected[$i]);
                }

                if($result == 1){
                    $msg = time_alert_text('success',4000,'Se han activado <b>'.$count_check.'</b> registros.');
                }else{
                    $msg = alert_text('danger','Hubo un error, informar a los encargados.');
                }
            break;
            
            case 'desactivar-exe':
                for($i=0;$i<$count_check;$i++){
                    $result = $obj->cambiarEstado(2,$check_selected[$i]);
                }

                if($result == 1){
                    $msg = time_alert_text('success',4000,'Se han desactivado <b>'.$count_check.'</b> registros.');
                }else{
                    $msg = alert_text('danger','Hubo un error, informar a los encargados.');
                }
            break;
                
            case 'eliminar-exe':
                for($i=0;$i<$count_check;$i++){
                    $result = $obj->eliminar($check_selected[$i]);
                }

                if($result == 1){
                    $msg = time_alert_text('success',4000,'Se han eliminado <b>'.$count_check.'</b> registros.');
                }else{
                    $msg = alert_text('danger','Hubo un error, informar a los encargados.');
                }
            break;

            case 'listar-exe':
            /*** Agregado ******/
                // echo '<br><br><br><br>';
                // echo $limit.' - '.$page.' - '.$btn_op;
            /*** Fin de Agregado ******/
            break;
            
            case 'agregar-exe':

                $arg = array(   
                         $producto_orden
                        ,$producto_nombre
                        ,$producto_descripcion
                        ,$producto_imagen
                        ,$producto_imagen2
                        ,$producto_imagen3
                        ,$producto_nombre_ingles
                        ,$producto_descripcion_ingles
                        ,$categoria_id
                    );

                $result = $obj->agregar($arg);

                if($result == 1){
                    $msg = time_alert_text('success',4000,'Se guardaron los datos correctamente.');
                }else{
                    $msg = alert_text('danger','Hubo un error, informar a los encargados.');
                }
            break;

            case 'modificar-exe':
                // echo '-->' . $producto_descripcion;
                $arg = array(
                        'id' => $producto_id
                        ,'fields' => array(
                                 $producto_orden
                                ,$producto_nombre
                                ,$producto_descripcion
                                ,$producto_imagen
                                ,$producto_imagen2
                                ,$producto_imagen3
                                ,$producto_nombre_ingles
                                ,$producto_descripcion_ingles
                                ,$categoria_id
                        )
                    );
                $result = $obj->editar($arg);

                if($result == 1){
                    $msg = time_alert_text('success',3000,'Se guardaron los datos correctamente.En breve será redireccionado...');
                    $msg.= script_redirect('producto.php',3000);
                }else{
                    $msg = alert_text('danger','Hubo un error, informar a los encargados.');
                }
            break;
        }      
    }

// @Fin-Section


// @Section-2 :> Eventos de BD: select y otros | vistas externa

    #Funcionalidades de botón/redirección
    if($btn_op_form!=''){      
        switch($btn_op_form){
            case 'agregar-form':
                $btn_op_text = 'agregar-exe';
                $título_form = 'Agregar nuevo';

            break;
            case 'modificar-form':
                $btn_op_text = 'modificar-exe';

                //obtenemos datos actuales para modificar:
                $producto_id = $btn_id;
                $result = $obj->listarxId($btn_id);
                foreach($result as $col){
                    $producto_id = $col['producto_id'];
                    $categoria_id2 = $col['categoria_id'];
                    // $subcategoria_id2 = $col['subcategoria_id'];
                    $producto_orden = $col['producto_orden'];
                    $producto_nombre = $col['producto_nombre'];
                    $producto_descripcion = $col['producto_descripcion'];
                    $producto_imagen = $col['producto_imagen'];
                    $producto_imagen2 = $col['producto_imagen2'];
                    $producto_imagen3 = $col['producto_imagen3'];
                    $producto_nombre_ingles = $col['producto_nombre_ingles'];
                    $producto_descripcion_ingles = $col['producto_descripcion_ingles'];
                    $categoria_id = $col['categoria_id'];
                }
                $título_form = 'Modificar: <b style="color: #EB2929;">'.$producto_nombre.'</b>';
            break;
        }    
    }

// @Fin-Section


// @Section-3 :> Eventos de BD: select y otros casos generales/globales | todas las vistas
    
    //Listado de categorías
    // $selectCategoria = $obj->listaCategoria($tipo_id,$categoria_id2);
    //Listado de subcategorías
    // $selectSubcategoria = $obj->listaSubcategoria($categoria_id2,$subcategoria_id2);
    //Listado de tipos
    $selectTipo = $obj->listaTipo($tipo_id);

    //Listado de activos 
    $htmlDinamicList_1 = $obj->listaActivos($limit,$page,$btn_op);

    //Listado de no activos 
    $htmlDinamicList_2 = $obj->listaDesactivados();

    // Select de categorías para agregar y modificar en la vista producto:
    $selectoptions = $obj->listaCategoria(0);

/************************ Subcategorias (FILTRO) *****************************/

    // Select de categorías para agregar y modificar en la vista producto:

    $selectFiltro = array(
        'option'            => 'group'
        ,'select-name'      => 'categoria_filtro'
        ,'select-required'  => ''
        ,'selected-value'   => $categoria_id
        ,'btn-name'         => 'btn-op'
        ,'btn-value'        => 'filtrar-exe'
        ,'btn-text'         => 'Filtrar'
        ,'btn-type'         => 'success'
    );

    $filtroCategorias = $obj->filtroListaCategoria($selectFiltro);

    //Listado de activos 
    // $htmlDinamicList_filtro1 = $obj->listaFiltroxCategorias($limit,$page,$btn_op);

    //Listado de no-activos   
    
    // $htmlDinamicList_filtro2 = $obj->listaDesactivadosxCategoria($limit,$page,$btn_op);

    //Listado de tipos de usuario simple[html: select]
    $selectOptionSimple = array(
        'option'            => 'simple'
        ,'select-name'      => 'categoria'
        ,'select-required'  => '1'
        ,'selected-value'   => $categoria_id
        ,'btn-name'         => ''
        ,'btn-value'        => ''
        ,'btn-text'         => ''
        ,'btn-type'         => ''
    );

/************************ FIN de Subcategorias (FILTRO) *****************************/

// @Fin-Section


// @Section-4 :>  Eventos de BD: select y otros que ejecutan por encima de otros($btn_op_2) | todas las vistas

    #Funcionalidades de listado (Búsqueda y Filtrado)
    if($btn_op!=''){
        switch($btn_op){   
            // Opciones de ejecucion  
            case 'buscar-exe':
                    $htmlDinamicList_1 = $obj->buscar($txt_search,$btn_op);
            break;
                
            case 'filtrar-exe':
                if($data_post==1){
                    // Listado de usuarios activos       
                    $htmlDinamicList_1 = $obj->listaFiltroxCategoria($categoria_id,$limit,$page,$btn_op);
                    
                }else{
                    // $msg = time_alert_text('danger',3000,'Tiene que seleccionar una opción para filtrar.');
                }

            break;       
        }

    }

// agregado

    // if($btn_op!=''){
    //     switch($btn_op){   
    //         // Opciones de ejecucion  
    //         case 'buscar-exe':
    //                 $htmlDinamicList_1 = $obj->buscar($txt_search,$btn_op);
    //         break;      
    //     }

    // }

// @Fin-Section




?>