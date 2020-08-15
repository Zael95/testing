<?php 

    class Categoria extends View
    {

        //TABLAS
        private function table_config($estado)
        {


            if($estado=='activo'){
                $check_all = '
                    <div class="checkbox checkbox-info">
                      <input id="check-all" type="checkbox" class="check_id">
                      <label for="check-all" title="Seleccionar todos" class="chk-all"></label>
                    </div>
                '; 
                
                $estado='<span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:green;font-size:20px;"></span>';

            }else if($estado=='no-activo'){
                $check_all="#";
                $estado = '<span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:red;font-size:20px;"></span>';
            }

            $table = array(
                "col-0"=>array(
                    "head"=>$check_all
                    ,"body"=>array(
                            "type"=>"element-form"
                            ,"data"=>array(
                                    "element"=>"checkbox"
                                    ,"row"=>"categoria_id"
                                    ,"id"=>"user-check-"
                                    ,"name"=>"check-id[]"
                                )
                        )
                    )
                ,
                "col-1"=>array(
                    "head"=>"Orden"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("categoria_orden")
                                )
                        )
                    )
                ,
                "col-2"=>array(
                    "head"=>"Nombre español"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("categoria_nombre")
                                )
                        )
                    )
                ,
                "col-3"=>array(
                "head"=>"Nombre ingles"
                ,"body"=>array(
                        "type"=>"text"
                        ,"data"=>array(
                                "row"=>array("categoria_nombre_ingles")
                            ) 
                    )
                ),
                "col-4"=>array(
                "head"=>"Color"
                ,"body"=>array(
                        // "type"=>"text"
                        // ,"data"=>array(
                        //         "row"=>array("categoria_color")
                        //     ) 
                        // ,"style"=>array(
                        //         "body"=>array("color","red")
                        //     )

                        "type"=>"element-form"
                        ,"data"=>array(
                                    "element"=>"div"
                                    ,"type"=>""
                                    ,"row"=>"categoria_color"
                                    ,"btn-op"=>""
                                    ,"class"=>"cuadrocategoriacolor"
                                    ,"formaction"=>""
                                    ,"name"=>""
                                    ,"icon"=>""
                                    ,"text"=>""
                                )
                    )

                        // "type"=>"text"
                        // ,"data"=>array(
                        //         "row"=>array("categoria_color")
                        //     )
                        // ,"style"=>"color:red"
                        // ) 
                ),
                "col-5"=>array(
                    "head"=>"Modificar"
                    ,"body"=>array(
                            "type"=>"element-form"
                            ,"data"=>array(
                                    "element"=>"button"
                                    ,"type"=>"submit"
                                    ,"row"=>"categoria_id"
                                    ,"btn-op"=>"modificar-form"
                                    ,"class"=>"success btn-sm"
                                    ,"formaction"=>"categoria-form.php"
                                    ,"name"=>"btn-op-form"
                                    ,"icon"=>"pencil"
                                    ,"text"=>""
                                )
                        )
                    )
            );


            return $table;

        }



        //Métodos de clase Categoría

        #1
        public function listaActivos($limit,$page,$btn_op)
        {
            # Inicia variables
            $lista = '';

            # Datos Paginador
            $offset = $page*$limit;

            #Table Config
            $config=array(
                    "title"=>"Listado de Categorías"
                    ,"icon"=>"th-list"
                    ,"visible"=>"block"
                    ,"btn-op"=>$btn_op
            );

            #Query
            $query = array(
                "consult"=>array(
                    'tables'=>array(
                        array('categoria','c')
                    ),
                    'conditional'=>array(
                        array('','c.categoria_activo','=','1')
                    ),
                    'order'=>array(
                        array('order by','c.categoria_orden','ASC')
                    ),
                    'limit'=>array(
                        array($limit,$offset)
                    )
                )
                ,"count"=>array(
                    'tables'=>array(
                        array('categoria','c')
                        ),
                    'operation'=>array(
                        array('COUNT','c.categoria_id','paginator_count')
                        ),
                    'conditional'=>array(
                        array('','c.categoria_activo','=','1')
                    )
                )
                ,"limit"=>$limit
                ,"offset"=>$offset
                ,"page"=>$page           
            );

            #Table
            $table = $this->table_config('activo');


            // Empleamos el metodo dinamicTable
            $lista = $this->dinamicTable($config,$table,$query); 
            return $lista;
        }

        #2
        public function listaDesactivados()
        {
            # Inicia variables
            $lista = '';

            # Datos Paginador
            $offset = $page*$limit;

            #Table Config
            $config=array(
                    "title"=>"Listado de Categorías Desactivadas"
                    ,"icon"=>"th-list"
                    ,"visible"=>"block"
                    ,"btn-op"=>$btn_op
            );

            #Query
            $query = array(
                "consult"=>array(
                    'tables'=>array(
                        array('categoria','c')
                    ),
                    'conditional'=>array(
                        array('','c.categoria_activo','=','2')
                    ),
                    'order'=>array(
                        array('order by','c.categoria_orden','ASC')
                    )
                )          
            );

            #Table
            $table = $this->table_config('no-activo');


            // Empleamos el metodo dinamicTable
            $lista = $this->dinamicTable($config,$table,$query); 
            return $lista;
        }

        #6
        public function buscar($value,$btn_op)
        {
            # Inicia variables
            $lista = '';

            # Datos Paginador
            $offset = $page*$limit;

            #Table Config
            $config=array(
                    "title"=>'Lista de Categorías <a class="btn-danger" href="categoria.php" style="float:right;"><span class="glyphicon glyphicon-remove"></span> Cancelar Búsqueda</a>'
                    ,"icon"=>"th-list"
                    ,"visible"=>"block"
                    ,"btn-op"=>$btn_op
            );

            #Query
            $query = array(
                "consult"=>array(
                    'tables'=>array(
                        array('categoria','c')
                    ),
                    'conditional'=>array(
                        array('','c.categoria_activo','=','1')
                        ,array('and','c.categoria_nombre','like','CONCAT("%","'.$value.'","%")')
                    )
                )         
            );

            #Table
            $table = $this->table_config('activo');


            // Empleamos el metodo dinamicTable
            $lista = $this->dinamicTable($config,$table,$query); 
            return $lista;        
        }

        #7
        public function cambiarEstado($value,$id)
        {
            #Query
            $arg = array(
                'tables'=>array(
                    //array('tabla')
                    array('categoria')
                ),
                'fields'=>array(
                    //array('campo','valor')
                    array('categoria_activo',$value)
                ),
                'conditional'=>array(
                    //array('operador: VACIO, AND ó OR','campo','valor')
                    array('','categoria_id',$id)
                )
            );

            $update=$this->editRegister($arg);

            return $update;
        }

        #8
        public function eliminar($id)
        {
            #Query
            $arg = array(
                'tables'=>array(
                    array('categoria')
                ),
                'conditional'=>array(
                    array('','categoria_id',$id)
                )
            );

            $update=$this->deleteRegister($arg);

            return $update;
        }

         #9
        public function agregar($value)
        {
            $categoria_orden = $value[0];
            $categoria_nombre = $value[1];
            $categoria_nombre_ingles = $value[2];
            $categoria_color = $value[3];
            $arg = array(
                    'tables'=>array(
                            array('categoria')
                        ),
                    'fields'=>array(
                            array('categoria_orden',$categoria_orden)
                            ,array('categoria_nombre',$categoria_nombre)
                            ,array('categoria_activo','1')
                            ,array('categoria_nombre_ingles',$categoria_nombre_ingles)
                            ,array('categoria_color',$categoria_color)
                        )
                );
            $add = $this->addRegister($arg);

            return $add;
        }       

        #10
        public function listarxId($id)
        {

            $arg = array(
                'tables'=>array(
                    array('categoria','c')
                    ),
                'conditional' => array(
                    array('','c.categoria_id','=',$id)
                    )
                );

            $this->setSelectArg($arg);
            $result = $this->selectData();
            
            return $result;
        }

        #11
        public function editar($arg)
        {

            $categoria_id = $arg['id'];
            $categoria_orden = $arg['fields'][0];
            $categoria_nombre = $arg['fields'][1];
            $categoria_nombre_ingles = $arg['fields'][2];
            $categoria_color = $arg['fields'][3];

            // echo '<br>----> '.$categoria_id;

            #Query
            $arg = array(
                'tables'=>array(
                    //array('tabla')
                    array('categoria')
                ),
                'fields'=>array(
                    //array('campo','valor')
                    array('categoria_orden',$categoria_orden)
                    ,array('categoria_nombre',$categoria_nombre)
                    ,array('categoria_nombre_ingles',$categoria_nombre_ingles)
                    ,array('categoria_color',$categoria_color)
                ),
                'conditional'=>array(
                    //array('operador: VACIO, AND ó OR','campo','valor')
                    array('','categoria_id',$categoria_id)
                )
            );

            $update=$this->editRegister($arg);

            return $update;
        }


        public function listaTipo($tipo_id)
        {

            if($tipo_id==1){
                $selected1 = 'selected';
                $selected2 = '';
            }else if($tipo_id == 2){
                $selected1 = '';
                $selected2 = 'selected';
            }else{
                $selected1 = '';
                $selected2 = '';
            }


            $htmlSelect = '
                <option '.$selected1.' value="1">Máquina</option>
                <option '.$selected2.' value="2">Insumo</option>
            ';

            return $htmlSelect;
        }

    }


    class Producto extends View
    {

        //Métodos de clase Productos

        //TABLA
        private function table_config($estado)
        {
            if($estado=='activo'){
                $check_all = '
                    <div class="checkbox checkbox-info">
                      <input id="check-all" type="checkbox" class="check_id">
                      <label for="check-all" title="Seleccionar todos" class="chk-all"></label>
                    </div>
                '; 
                
                $estado='<span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:green;font-size:20px;"></span>';

            }else if($estado=='no-activo'){
                $check_all="#";
                $estado = '<span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:red;font-size:20px;"></span>';
            }

            $table = array(
                "col-0"=>array(
                    "head"=>$check_all
                    ,"body"=>array(
                        "type"=>"element-form"
                        ,"data"=>array(
                            "element"=>"checkbox"
                            ,"row"=>"producto_id"
                            ,"id"=>"user-check-"
                            ,"name"=>"check-id[]"
                        )
                    )
                )
                ,
                "col-1"=>array(
                    "head"=>"Orden"
                    ,"body"=>array(
                        "type"=>"text"
                        ,"data"=>array(
                            "row"=>array("producto_orden")
                        )
                    )
                )
                ,
                "col-2"=>array(
                    "head"=>"Nombre"
                    ,"body"=>array(
                        "type"=>"text"
                        ,"data"=>array(
                            "row"=>array("producto_nombre")
                        )
                    )
                )
                ,
                "col-3"=>array(
                    "head"=>"Descripción"
                    ,"body"=>array(
                        "type"=>"text"
                        ,"data"=>array(
                            "row"=>array("producto_descripcion")
                        )
                    )
                )
                ,
                "col-4"=>array(
                   "head"=>"Imágenes"
                   ,"body"=>array(
                       "type"=>"image"
                       ,"style"=>array(
                           array("width","50px")
                       )
                       ,"data"=>array(
                           "row"=>array(
                               "producto_imagen" // obligatoria
                               ,"producto_imagen2" // no obligatoria
                               ,"producto_imagen3" // no obligatoria
                               )
                           ,"modal"=>'1' // 1 o 0 --> "fancybox"
                           ,"url"=>'app/img/productos/'
                           ,"url-no-image"=>'app/img/imgDefault2.png' // imagen por defecto
                       )
                   )
                )
                ,
                "col-5"=>array(
                    "head"=>"Nombre ingles"
                    ,"body"=>array(
                        "type"=>"text"
                        ,"data"=>array(
                            "row"=>array("producto_nombre_ingles")
                        )
                    )
                )
                ,
                "col-6"=>array(
                    "head"=>"Descripción ingles"
                    ,"body"=>array(
                        "type"=>"text"
                        ,"data"=>array(
                            "row"=>array("producto_descripcion_ingles")
                        )
                    )
                )

                ,
                "col-7"=>array(
                    "head"=>"Categoría"
                    ,"body"=>array(
                        "type"=>"text"
                        ,"data"=>array(
                            "row"=>array("categoria_nombre")
                        )
                    )
                )
                ,
                "col-8"=>array(
                    "head"=>"Modificar"
                    ,"body"=>array(
                        "type"=>"element-form"
                        ,"data"=>array(
                            "element"=>"button"
                            ,"type"=>"submit"
                            ,"row"=>"producto_id"
                            ,"btn-op"=>"modificar-form"
                            ,"class"=>"success btn-sm"
                            ,"formaction"=>"producto-form.php"
                            ,"name"=>"btn-op-form"
                            ,"icon"=>"pencil"
                            ,"text"=>""
                        )
                    )
                )
            );

            return $table;

        }

        //METODOS PARA LISTA SIMPLE

        #1
        public function listaActivos($limit,$page,$btn_op)
        {
            # Inicia variables
            $lista = '';

            # Datos Paginador
            $offset = $page*$limit;

            #Table Config
            $config=array(
                     "title"=>"Listado de Productos"
                    ,"icon"=>"th-list"
                    ,"visible"=>"block"
                    ,"btn-op"=>$btn_op
            );

            #Query
            $query = array(
                "consult"=>array(
                    'tables'=>array(
                        array('producto','p')
                        ,array('categoria','c')
                        // ,array('subcategoria','sc')
                    ),
                    'relation'=>array(
                        array('p.categoria_id','c.categoria_id')
                        ,array('p.subcategoria_id','sc.subcategoria_id')
                    ),
                    'conditional'=>array(
                        array('','p.producto_activo','=','1')
                        ,array('and','p.categoria_id','<>','0')
                        // ,array('and','p.subcategoria_id','<>','0')
                    ),
                    'order'=>array(
                        array('order by','p.producto_orden','DESC')
                    ),
                    'limit'=>array(
                        array($limit,$offset)
                    )
                )
                ,"count"=>array(
                    'tables'=>array(
                        array('producto','p')
                        ),
                    'operation'=>array(
                        array('COUNT','p.producto_id','paginator_count')
                        ),
                    'conditional'=>array(
                        array('','p.producto_activo','=','1')
                        ,array('and','p.categoria_id','<>','0')
                        // ,array('and','p.subcategoria_id','<>','0')
                    )
                )
                ,"limit"=>$limit
                ,"offset"=>$offset
                ,"page"=>$page        
            );

            #Table
            $table = $this->table_config('activo');


            // Empleamos el metodo dinamicTable
            $lista = $this->dinamicTable($config,$table,$query); 
            return $lista;
        }



        #2
        public function listaDesactivados()
        {
            # Inicia variables
            $lista = '';

            # Offset-Paginador
            $offset = $page*$limit;

            #Table Datos Generales
            $config=array(
                "title"=>"Listado de Productos Desactivados"
                ,"icon"=>"th-list"
                ,"visible"=>"block"
                ,"btn-op"=>$btn_op
            );

            #Query
            $query = array(
                "consult"=>array(
                    'tables'=>array(
                        array('producto','p')
                        ,array('categoria','c')
                        // ,array('subcategoria','sc')
                    ),
                    'relation'=>array(
                        array('p.categoria_id','c.categoria_id')
                        // ,array('p.subcategoria_id','sc.subcategoria_id')
                    ),
                    'conditional'=>array(
                        array('','p.producto_activo','=','2')
                        ,array('and','p.categoria_id','<>','0')
                        // ,array('and','p.subcategoria_id','<>','0')
                    ),
                    'order'=>array(
                        array('order by','p.producto_orden','DESC')
                    )
                )         
            );

            #Table
            $table = $this->table_config('no-activo');

            // Empleamos el metodo dinamicTable
            $lista = $this->dinamicTable($config,$table,$query); 
            return $lista;
        }


        //OTROS METODOS
        #6
        public function buscar($value,$btn_op)
        {
            # Inicia variables
            $lista = '';

            # Datos Paginador
            $offset = $page*$limit;

            #Table Config
            $config=array(
                    "title"=> 'Listado de Productos <a class="btn-danger" href="producto.php" style="float:right;"><span class="glyphicon glyphicon-remove"></span> Cancelar Búsqueda</a>'
                    ,"icon"=>"th-list"
                    ,"visible"=>"block"
                    ,"btn-op"=>$btn_op
            );

            #Query
            $query = array(
                "consult"=>array(
                    'tables'=>array(
                        array('producto','p')
                        ,array('categoria','c')
                        ,array('subcategoria','sc')
                    ),
                    'relation'=>array(
                        array('p.categoria_id','c.categoria_id')
                        ,array('p.subcategoria_id','sc.subcategoria_id')
                    ),
                    'conditional'=>array(
                        array('','p.producto_activo','=','1')
                        ,array('and','p.producto_nombre','like','CONCAT("%","'.$value.'","%")')
                    )
                )         
            );

            #Table
            $table = $this->table_config('activo');


            // Empleamos el metodo dinamicTable
            $lista = $this->dinamicTable($config,$table,$query); 
            return $lista;        
        }

        #7
        public function cambiarEstado($value,$id)
        {
            #Query
            $arg = array(
                'tables'=>array(
                    //array('tabla')
                    array('producto')
                ),
                'fields'=>array(
                    //array('campo','valor')
                    array('producto_activo',$value)
                ),
                'conditional'=>array(
                    //array('operador: VACIO, AND ó OR','campo','valor')
                    array('','producto_id',$id)
                )
            );

            $update=$this->editRegister($arg);

            return $update;
        }

        #8
        public function eliminar($id)
        {
            #Query
            $arg = array(
                'tables'=>array(
                    array('producto')
                ),
                'conditional'=>array(
                    array('','producto_id',$id)
                )
            );

            $update=$this->deleteRegister($arg);

            return $update;
        }
        #9
        public function agregar($value)
        {      
            $producto_orden  = $value[0];
            $producto_nombre  = $value[1];
            $producto_descripcion  = $value[2];
            $producto_imagen  = $value[3];
            $producto_imagen2  = $value[4];
            $producto_imagen3  = $value[5];
            $producto_nombre_ingles  = $value[6];
            $producto_descripcion_ingles  = $value[7];
            $categoria_id = $value[8];

            $arg = array(
                    'tables'=>array(
                        array('producto')
                    ),
                    'fields'=>array(
                        array('producto_orden',$producto_orden)
                        ,array('producto_nombre',$producto_nombre)
                        ,array('producto_descripcion',$producto_descripcion)
                        ,array('producto_imagen',$producto_imagen)
                        ,array('producto_imagen2',$producto_imagen2)
                        ,array('producto_imagen3',$producto_imagen3)
                        ,array('producto_activo','1')
                        ,array('producto_nombre_ingles',$producto_nombre_ingles)
                        ,array('producto_descripcion_ingles',$producto_descripcion_ingles)
                        // ,array('categoria_id',$categoria_id)
                        // ,array('tipo_id',$tipo_id)
                        ,array('categoria_id',$categoria_id)
                    )
                );
            $add = $this->addRegister($arg);

            return $add;
        }

        #10
        public function listarxId($id)
        {
            $arg = array(
                    'tables'=>array(
                        array('producto','p')
                    ),
                'conditional' => array(
                    array('','p.producto_id','=',$id)
                    )
                );

            $this->setSelectArg($arg);
            $result = $this->selectData();
            
            return $result;
        }

        #11
        public function editar($arg)
        {

            $producto_id = $arg['id'];

            // $categoria_id = $arg['fields'][0];
            // $subcategoria_id = $arg['fields'][1];

            $producto_orden  = $arg['fields'][0];
            $producto_nombre  = $arg['fields'][1];
            $producto_descripcion  = $arg['fields'][2];
            $producto_imagen  = $arg['fields'][3];
            $producto_imagen2  = $arg['fields'][4];
            $producto_imagen3  = $arg['fields'][5];
            $producto_nombre_ingles  = $arg['fields'][6];
            $producto_descripcion_ingles  = $arg['fields'][7];
            $categoria_id = $arg['fields'][8];
            // $categoria_id = $arg['fields'][0];
            

            // $tipo_id = $arg['fields'][9];

            #Query
            $arg = array(
                'tables'=>array(
                    //array('tabla')
                    array('producto')
                ),
                'fields'=>array(
                    //array('campo','valor')
                    array('producto_orden',$producto_orden)
                    ,array('producto_nombre',$producto_nombre)
                    ,array('producto_descripcion',$producto_descripcion)
                    ,array('producto_imagen',$producto_imagen)
                    ,array('producto_imagen2',$producto_imagen2)
                    ,array('producto_imagen3',$producto_imagen3)
                    ,array('producto_activo','1')
                    ,array('producto_nombre_ingles',$producto_nombre_ingles)
                    ,array('producto_descripcion_ingles',$producto_descripcion_ingles)
                    ,array('categoria_id',$categoria_id)
                    // ,array('tipo_id',$tipo_id)
                ),
                'conditional'=>array(
                    //array('operador: VACIO, AND ó OR','campo','valor')
                    array('','producto_id',$producto_id)
                )
            );

            $update=$this->editRegister($arg);

            return $update;
        }



        //METODOs EXTERNO
        public function listaCategoria($idCategoria)
        {

            $arg = array(
                    'tables'=>array(
                        array('categoria','c')
                    )
                    ,'conditional' => array(
                        array('','c.categoria_activo','=','1')
                        // ,array($t1,$t2,$t3,$t4)
                    )
                    ,'order'=>array(
                        array('order by','c.categoria_id','DESC')
                    )
                );

            $this->setSelectArg($arg);
            $result = $this->selectData();
            
            $htmlSelect = '';

            foreach($result as $col){

                if($idCategoria==$col['categoria_id']){
                    $selected = "selected";
                }else{
                    $selected = "";
                }

                $htmlSelect .= '
                    <option '.$selected.' value="'.$col['categoria_id'].'">'.$col['categoria_nombre'].'</option>
                ';
            }

            return '<option value="" disabled selected>Elegir</option>'.$htmlSelect;

        }

        public function filtroListaCategoria($options)
        {
            $arg = array(
                    'tables'=>array(
                            array('categoria','c')
                        )
                );

            $fields = array(
                    array('categoria_id','categoria_nombre')
                ); 

            $lista = $this->htmlListOption($options,$arg,$fields);

            return $lista;
        }

        // FILTRO DE PRODUCTOS:
        public function listaFiltroxCategoria($value,$limit,$page,$btn_op)
        {
            # Inicia variables
            $lista = '';

            # Datos Paginador
            $offset = $page*$limit;

            #Table Config
            $config=array(
                    "title"=>'Listado de Subcategorías <a class="btn-danger" href="categoria.php" style="float:right;"><span class="glyphicon glyphicon-remove"></span> Cancelar Filtro</a>'
                    ,"icon"=>"th-list"
                    ,"visible"=>"block"
                    ,"btn-op"=>$btn_op
            );

            #Query
            $query = array(
                "consult"=>array(
                    'tables'=>array(
                        array('producto','p')
                        ,array('categoria','c')
                        
                    ),
                    'relation'=>array(
                        array('p.categoria_id','c.categoria_id'),
                    ),
                
                    'conditional'=>array(
                        array('','p.producto_activo','=','1')
                        ,array('and','p.categoria_id','=',$value)
                    ),
                    'order'=>array(
                        array('order by','p.producto_id','DESC')
                    ),
                    'limit'=>array(
                        array($limit,$offset)
                    )
                )
                ,"count"=>array(
                    'tables'=>array(
                        array('producto','p')
                        ,array('categoria','c')
                    ),
                    'relation'=>array(
                        array('p.categoria_id','c.categoria_id'),

                    ),
                    'operation'=>array(
                        array('COUNT','p.producto_id','paginator_count')
                    ),
                    'conditional'=>array(
                        array('','p.producto_activo','=','1')
                        ,array('and','p.categoria_id','=',$value)
                    )
                )
                ,"limit"=>$limit
                ,"offset"=>$offset
                ,"page"=>$page           
            );

            #Table
            $table = $this->table_config('activo');


            // Empleamos el metodo dinamicTable
            $lista = $this->dinamicTable($config,$table,$query); 
            return $lista;         
        }

        public function listaDesactivadosxCategoria($value,$limit,$page,$btn_op)
        {
            # Inicia variables
            $lista = '';

            # Datos Paginador
            $offset = $page*$limit;

            #Table Config
            $config=array(
                    "title"=>"Listado de Subcategorías"
                    ,"icon"=>"th-list"
                    ,"visible"=>"block"
                    ,"btn-op"=>$btn_op
            );

            #Query
            $query = array(
                "consult"=>array(
                    'tables'=>array(
                        array('subcategoria','sc')
                        ,array('categoria','c')
                    ),
                    'relation'=>array(
                        array('sc.categoria_id','c.categoria_id')
                    ),
                    'conditional'=>array(
                        array('','sc.subcategoria_activo','=','2')
                        ,array('and','c.categoria_id','=',$value)
                    )
                )          
            );

            #Table
            $table = $this->table_config('no-activo');


            // Empleamos el metodo dinamicTable
            $lista = $this->dinamicTable($config,$table,$query); 
            return $lista;
        }


        public function listaSubcategoria($idCategoria,$idSubcategoria)
        {

            if($idCategoria!=''){
                $c1 = "and";
                $c2 = "sc.categoria_id";
                $c3 = "=";
                $c4 = $idCategoria;
            }else{
                $c1 = "";
                $c2 = "";
                $c3 = "";
                $c4 = "";
            }

            $arg = array(
                    'tables'=>array(
                        array('subcategoria','sc')
                    )
                    ,'conditional' => array(
                        array('','sc.subcategoria_activo','=','1')
                        ,array($c1,$c2,$c3,$c4)
                    )
                    ,'order'=>array(
                        array('order by','sc.subcategoria_id','DESC')
                    )
                );

            $this->setSelectArg($arg);
            $result = $this->selectData();
            
            $htmlSelect = '';

            foreach($result as $col){

                if($idSubcategoria==$col['subcategoria_id']){
                    $selected = "selected";
                }else{
                    $selected = "";
                }

                $htmlSelect .= '
                    <option '.$selected.' value="'.$col['subcategoria_id'].'">'.$col['subcategoria_nombre'].'</option>
                ';
            }

            return '<option value="" disabled selected>Elegir</option>'.$htmlSelect;
        }


        public function listaTipo($tipo_id)
        {

            if($tipo_id==1){
                $selected1 = 'selected';
                $selected2 = '';
            }else if($tipo_id == 2){
                $selected1 = '';
                $selected2 = 'selected';
            }else{
                $selected1 = '';
                $selected2 = '';
            }


            $htmlSelect = '
                <option '.$selected1.' value="1">Máquina</option>
                <option '.$selected2.' value="2">Insumo</option>
            ';

            return $htmlSelect;
        }

    }

    class Noticia extends View
    {
     private function table_config($estado)
        {


            if($estado=='activo'){
                $check_all = '
                    <div class="checkbox checkbox-info">
                      <input id="check-all" type="checkbox" class="check_id">
                      <label for="check-all" title="Seleccionar todos" class="chk-all"></label>
                    </div>
                '; 
                
                $estado='<span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:green;font-size:20px;"></span>';

            }else if($estado=='no-activo'){
                $check_all="#";
                $estado = '<span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:red;font-size:20px;"></span>';
            }

            $table = array(
                "col-0"=>array(
                    "head"=>$check_all
                    ,"body"=>array(
                            "type"=>"element-form"
                            ,"data"=>array(
                                    "element"=>"checkbox"
                                    ,"row"=>"noticia_id"
                                    ,"id"=>"user-check-"
                                    ,"name"=>"check-id[]"
                                )
                        )
                    )
                ,
                "col-1"=>array(
                    "head"=>"Orden"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("noticia_orden")
                                )
                        )
                    )
                ,
                "col-2"=>array(
                    "head"=>"Título español"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("noticia_titulo")
                                )
                        )
                    )
                ,
                "col-3"=>array(
                    "head"=>"Subtitulo español"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"style"=>array(
                                array("height","200px")
                                ,array("overflow-y","auto")
                            )
                            ,"data"=>array(
                                    "row"=>array("noticia_subtitulo")
                                )
                        )
                    )
                ,
                "col-4"=>array(
                    "head"=>"Descripción 1 español"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"style"=>array(
                                array("height","200px")
                                ,array("overflow-y","auto")
                            )
                            ,"data"=>array(
                                    "row"=>array("noticia_descripcion")
                            )
                        )
                    )
                ,
                "col-5"=>array(
                    "head"=>"Descripción 2 español"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"style"=>array(
                                array("height","200px")
                                ,array("overflow-y","auto")
                            )
                            ,"data"=>array(
                                    "row"=>array("noticia_descripcion2")
                                )
                        )
                    )
                ,
                "col-6"=>array(
                    "head"=>"Descipción 3 español"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"style"=>array(
                                array("height","200px")
                                ,array("overflow-y","auto")
                            )
                            ,"data"=>array(
                                    "row"=>array("noticia_descripcion3")
                                )
                        )
                    )
                ,
                "col-7"=>array(
                   "head"=>"Imágenes"
                   ,"body"=>array(
                       "type"=>"image"
                       ,"style"=>array(
                           array("width","50px")
                       )
                       ,"data"=>array(
                           "row"=>array(
                               "noticia_imagen" // obligatoria
                               ,"noticia_imagen2" // no obligatoria
                               ,"noticia_imagen3" // no obligatoria
                               )
                           ,"modal"=>'1' // 1 o 0 --> "fancybox"
                           ,"url"=>'app/img/noticias/'
                           ,"url-no-image"=>'app/img/imgDefault2.png' // imagen por defecto
                       )
                   )
                ),
                // "col-8"=>array(
                //     "head"=>"Link de facebook"
                //     ,"body"=>array(
                //             "type"=>"text"
                //             ,"data"=>array(
                //                     "row"=>array("noticia_link_face")
                //                 )
                //         )
                //     )
                // ,
                "col-8"=>array(
                "head"=>"Título ingles"
                ,"body"=>array(
                        "type"=>"text"
                        ,"data"=>array(
                                "row"=>array("noticia_titulo_ingles")
                            ) 
                    )
                ),
                "col-9"=>array(
                    "head"=>"Subtítulo ingles"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("noticia_subtitulo_ingles")
                                )
                        )
                    )
                ,
                "col-10"=>array(
                    "head"=>"Descripción 1 ingles"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"style"=>array(
                                array("height","200px")
                                ,array("overflow-y","auto")
                            )
                            ,"data"=>array(
                                    "row"=>array("noticia_descripcion_ingles")
                                )
                        )
                    )
                ,
                "col-11"=>array(
                    "head"=>"Descripción 2 ingles"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"style"=>array(
                                array("height","200px")
                                ,array("overflow-y","auto")
                            )
                            ,"data"=>array(
                                    "row"=>array("noticia_descripcion2_ingles")
                                )
                        )
                    )
                ,
                "col-12"=>array(
                    "head"=>"Descripción 3 ingles"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"style"=>array(
                                array("height","200px")
                                ,array("overflow-y","auto")
                            )
                            ,"data"=>array(
                                    "row"=>array("noticia_descripcion3_ingles")
                                )
                        )
                    )
                ,
                "col-13"=>array(
                    "head"=>"Fecha"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("noticia_fecha")
                                )
                        )
                    )
                ,



                "col-14"=>array(
                    "head"=>"Modificar"
                    ,"body"=>array(
                            "type"=>"element-form"
                            ,"data"=>array(
                                    "element"=>"button"
                                    ,"type"=>"submit"
                                    ,"row"=>"noticia_id"
                                    ,"btn-op"=>"modificar-form"
                                    ,"class"=>"success btn-sm"
                                    ,"formaction"=>"noticia-form.php"
                                    ,"name"=>"btn-op-form"
                                    ,"icon"=>"pencil"
                                    ,"text"=>""
                                )
                        )
                    )
            );


            return $table;

        }

         //Métodos de clase Categoría

        #1
        public function listaActivos($limit,$page,$btn_op)
        {
            # Inicia variables
            $lista = '';

            # Datos Paginador
            $offset = $page*$limit;

            #Table Config
            $config=array(
                    "title"=>"Listado de Noticias"
                    ,"icon"=>"th-list"
                    ,"visible"=>"block"
                    ,"btn-op"=>$btn_op
            );

            #Query
            $query = array(
                "consult"=>array(
                    'tables'=>array(
                        array('noticia','c')
                    ),
                    'conditional'=>array(
                        array('','c.noticia_activo','=','1')
                    ),
                    'order'=>array(
                        array('order by','c.noticia_orden','ASC')
                    ),
                    'limit'=>array(
                        array($limit,$offset)
                    )
                )
                ,"count"=>array(
                    'tables'=>array(
                        array('noticia','c')
                        ),
                    'operation'=>array(
                        array('COUNT','c.noticia_id','paginator_count')
                        ),
                    'conditional'=>array(
                        array('','c.noticia_activo','=','1')
                    )
                )
                ,"limit"=>$limit
                ,"offset"=>$offset
                ,"page"=>$page           
            );

            #Table
            $table = $this->table_config('activo');


            // Empleamos el metodo dinamicTable
            $lista = $this->dinamicTable($config,$table,$query); 
            return $lista;
        }

        #2
        public function listaDesactivados()
        {
            # Inicia variables
            $lista = '';

            # Datos Paginador
            $offset = $page*$limit;

            #Table Config
            $config=array(
                    "title"=>"Listado de Categorías Desactivadas"
                    ,"icon"=>"th-list"
                    ,"visible"=>"block"
                    ,"btn-op"=>$btn_op
            );

            #Query
            $query = array(
                "consult"=>array(
                    'tables'=>array(
                        array('noticia','c')
                    ),
                    'conditional'=>array(
                        array('','c.noticia_activo','=','2')
                    ),
                    'order'=>array(
                        array('order by','c.noticia_orden','ASC')
                    )
                )          
            );

            #Table
            $table = $this->table_config('no-activo');


            // Empleamos el metodo dinamicTable
            $lista = $this->dinamicTable($config,$table,$query); 
            return $lista;
        }

        #6
        public function buscar($value,$btn_op)
        {
            # Inicia variables
            $lista = '';

            # Datos Paginador
            $offset = $page*$limit;

            #Table Config
            $config=array(
                    "title"=>'Lista de Categorías <a class="btn-danger" href="categoria.php" style="float:right;"><span class="glyphicon glyphicon-remove"></span> Cancelar Búsqueda</a>'
                    ,"icon"=>"th-list"
                    ,"visible"=>"block"
                    ,"btn-op"=>$btn_op
            );

            #Query
            $query = array(
                "consult"=>array(
                    'tables'=>array(
                        array('noticia','c')
                    ),
                    'conditional'=>array(
                        array('','c.noticia_activo','=','1')
                        ,array('and','c.noticia_nombre','like','CONCAT("%","'.$value.'","%")')
                    )
                )         
            );

            #Table
            $table = $this->table_config('activo');


            // Empleamos el metodo dinamicTable
            $lista = $this->dinamicTable($config,$table,$query); 
            return $lista;        
        }

        #7
        public function cambiarEstado($value,$id)
        {
            #Query
            $arg = array(
                'tables'=>array(
                    //array('tabla')
                    array('noticia')
                ),
                'fields'=>array(
                    //array('campo','valor')
                    array('noticia_activo',$value)
                ),
                'conditional'=>array(
                    //array('operador: VACIO, AND ó OR','campo','valor')
                    array('','noticia_id',$id)
                )
            );

            $update=$this->editRegister($arg);

            return $update;
        }

        #8
        public function eliminar($id)
        {
            #Query
            $arg = array(
                'tables'=>array(
                    array('noticia')
                ),
                'conditional'=>array(
                    array('','noticia_id',$id)
                )
            );

            $update=$this->deleteRegister($arg);

            return $update;
        }

         #9
        public function agregar($value)
        {
            $noticia_orden = $value[0];
            $noticia_titulo = $value[1];
            $noticia_subtitulo = $value[2];
            $noticia_descripcion = $value[3];
            $noticia_descripcion2 = $value[4];
            $noticia_descripcion3 = $value[5];
            $noticia_imagen = $value[6];
            $noticia_imagen2 = $value[7];
            $noticia_imagen3 = $value[8];
            $noticia_link_face = $value[9];
            $noticia_titulo_ingles = $value[10];
            $noticia_subtitulo_ingles = $value[11];
            $noticia_descripcion_ingles = $value[12];
            $noticia_descripcion2_ingles = $value[13];
            $noticia_descripcion3_ingles = $value[14];
            $noticia_fecha = $value[15];
            $arg = array(
                    'tables'=>array(
                            array('noticia')
                        ),
                    'fields'=>array(
                            array('noticia_orden',$noticia_orden)
                            ,array('noticia_titulo',$noticia_titulo)
                            ,array('noticia_subtitulo',$noticia_subtitulo)
                            ,array('noticia_descripcion',$noticia_descripcion)
                            ,array('noticia_descripcion2',$noticia_descripcion2)
                            ,array('noticia_descripcion3',$noticia_descripcion3)
                            ,array('noticia_imagen',$noticia_imagen)
                            ,array('noticia_imagen2',$noticia_imagen2)
                            ,array('noticia_imagen3',$noticia_imagen3)
                            ,array('noticia_link_face',$noticia_link_face)
                            ,array('noticia_activo','1')
                            ,array('noticia_titulo_ingles',$noticia_titulo_ingles)
                            ,array('noticia_subtitulo_ingles',$noticia_subtitulo_ingles)
                            ,array('noticia_descripcion_ingles',$noticia_descripcion_ingles)
                            ,array('noticia_descripcion2_ingles',$noticia_descripcion2_ingles)
                            ,array('noticia_descripcion3_ingles',$noticia_descripcion3_ingles)
                            ,array('noticia_fecha',$noticia_fecha)
                        )
                );
            $add = $this->addRegister($arg);

            return $add;
        }       

        #10
        public function listarxId($id)
        {

            $arg = array(
                'tables'=>array(
                    array('noticia','c')
                    ),
                'conditional' => array(
                    array('','c.noticia_id','=',$id)
                    )
                );

            $this->setSelectArg($arg);
            $result = $this->selectData();
            
            return $result;
        }

        #11
        public function editar($arg)
        {

            $noticia_id = $arg['id'];
            $noticia_orden = $arg['fields'][0];
            $noticia_titulo = $arg['fields'][1];
            $noticia_subtitulo = $arg['fields'][2];
            $noticia_descripcion = $arg['fields'][3];
            $noticia_descripcion2 = $arg['fields'][4];
            $noticia_descripcion3 = $arg['fields'][5];
            $noticia_imagen = $arg['fields'][6];
            $noticia_imagen2 = $arg['fields'][7];
            $noticia_imagen3 = $arg['fields'][8];
            $noticia_link_face = $arg['fields'][9];
            $noticia_titulo_ingles = $arg['fields'][10];
            $noticia_subtitulo_ingles = $arg['fields'][11];
            $noticia_descripcion_ingles = $arg['fields'][12];
            $noticia_descripcion2_ingles = $arg['fields'][13];
            $noticia_descripcion3_ingles = $arg['fields'][14];
            $noticia_fecha = $arg['fields'][15];

            // echo '<br><br><br><br><br>----> '.$noticia_id;
            // echo '<br><br><br><br><br>----> '.$noticia_imagen;
            // echo '<br><br><br><br><br>----> '.$noticia_imagen2;
            // echo '<br><br><br><br><br>----> '.$noticia_imagen3;
            // echo '<br><br><br><br><br>----> '.$arg['fields'][6];

            #Query
            $arg = array(
                'tables'=>array(
                    //array('tabla')
                    array('noticia')
                ),
                'fields'=>array(
                    //array('campo','valor')
                    array('noticia_orden',$noticia_orden)
                    ,array('noticia_titulo',$noticia_titulo)
                    ,array('noticia_subtitulo',$noticia_subtitulo)
                    ,array('noticia_descripcion',$noticia_descripcion)
                    ,array('noticia_descripcion2',$noticia_descripcion2)
                    ,array('noticia_descripcion3',$noticia_descripcion3)
                    ,array('noticia_imagen',$noticia_imagen)
                    ,array('noticia_imagen2',$noticia_imagen2)
                    ,array('noticia_imagen3',$noticia_imagen3)
                    ,array('noticia_link_face',$noticia_link_face)
                    ,array('noticia_titulo_ingles',$noticia_titulo_ingles)
                    ,array('noticia_subtitulo_ingles',$noticia_subtitulo_ingles)
                    ,array('noticia_descripcion_ingles',$noticia_descripcion_ingles)
                    ,array('noticia_descripcion2_ingles',$noticia_descripcion2_ingles)
                    ,array('noticia_descripcion3_ingles',$noticia_descripcion3_ingles)
                    ,array('noticia_fecha',$noticia_fecha)
                ),
                'conditional'=>array(
                    //array('operador: VACIO, AND ó OR','campo','valor')
                    array('','noticia_id',$noticia_id)
                )
            );

            $update=$this->editRegister($arg);

            return $update;
        }


        public function listaTipo($tipo_id)
        {

            if($tipo_id==1){
                $selected1 = 'selected';
                $selected2 = '';
            }else if($tipo_id == 2){
                $selected1 = '';
                $selected2 = 'selected';
            }else{
                $selected1 = '';
                $selected2 = '';
            }


            $htmlSelect = '
                <option '.$selected1.' value="1">Máquina</option>
                <option '.$selected2.' value="2">Insumo</option>
            ';

            return $htmlSelect;
        }

    }

    class Empresa extends View
    {
     private function table_config($estado)
        {


            if($estado=='activo'){
                $check_all = '
                    <div class="checkbox checkbox-info">
                      <input id="check-all" type="checkbox" class="check_id">
                      <label for="check-all" title="Seleccionar todos" class="chk-all"></label>
                    </div>
                '; 
                
                $estado='<span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:green;font-size:20px;"></span>';

            }else if($estado=='no-activo'){
                $check_all="#";
                $estado = '<span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:red;font-size:20px;"></span>';
            }

            $table = array(
                "col-0"=>array(
                    "head"=>$check_all
                    ,"body"=>array(
                            "type"=>"element-form"
                            ,"data"=>array(
                                    "element"=>"checkbox"
                                    ,"row"=>"empresa_id"
                                    ,"id"=>"user-check-"
                                    ,"name"=>"check-id[]"
                                )
                        )
                    )
                ,
                "col-1"=>array(
                    "head"=>"Orden"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("empresa_orden")
                                )
                        )
                    )
                ,
                "col-2"=>array(
                    "head"=>"Nombre de Empresa en Español"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("empresa_nombre")
                                )
                        )
                    )
                ,

                 "col-3"=>array(
                    "head"=>"Nombre de Empresa en Ingles"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("empresa_nombre_ingles")
                                ) 
                        )
                    )
                 ,
                
                "col-4"=>array(
                    "head"=>"Descripción 1 español"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"style"=>array(
                                array("height","200px")
                                ,array("overflow-y","auto")
                            )
                            ,"data"=>array(
                                    "row"=>array("empresa_descripcion1")
                            )
                        )
                    )
                ,
                "col-5"=>array(
                    "head"=>"Descripción 1 ingles"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"style"=>array(
                                array("height","200px")
                                ,array("overflow-y","auto")
                            )
                            ,"data"=>array(
                                    "row"=>array("empresa_descripcion1_ingles")
                                )
                        )
                    )
                ,
                "col-6"=>array(
                    "head"=>"Descripción 2 español"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"style"=>array(
                                array("height","200px")
                                ,array("overflow-y","auto")
                            )
                            ,"data"=>array(
                                    "row"=>array("empresa_descripcion2")
                                )
                        )
                    )
                ,

                "col-7"=>array(
                    "head"=>"Descripción 2 ingles"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"style"=>array(
                                array("height","200px")
                                ,array("overflow-y","auto")
                            )
                            ,"data"=>array(
                                    "row"=>array("empresa_descripcion2_ingles")
                                )
                        )
                    )
                ,
                "col-8"=>array(
                    "head"=>"Descripción 3 español"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"style"=>array(
                                array("height","200px")
                                ,array("overflow-y","auto")
                            )
                            ,"data"=>array(
                                    "row"=>array("empresa_descripcion3")
                                )
                        )
                    )
                ,
                "col-9"=>array(
                    "head"=>"Descripción 3 ingles"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"style"=>array(
                                array("height","200px")
                                ,array("overflow-y","auto")
                            )
                            ,"data"=>array(
                                    "row"=>array("empresa_descripcion3_ingles")
                                )
                        )
                    )
                ,
                "col-10"=>array(
                   "head"=>"Imágenes"
                   ,"body"=>array(
                       "type"=>"image"
                       ,"style"=>array(
                           array("width","50px")
                       )
                       ,"data"=>array(
                           "row"=>array(
                               "empresa_imagen1" // obligatoria
                               ,"empresa_imagen2" // no obligatoria
                               ,"empresa_imagen3" // no obligatoria
                               )
                           ,"modal"=>'1' // 1 o 0 --> "fancybox"
                           ,"url"=>'app/img/empresas/'
                           ,"url-no-image"=>'app/img/imgDefault2.png' // imagen por defecto
                       )
                   )
                ),

               
                
               
                
                "col-11"=>array(
                    "head"=>"Link de facebook de la empresa"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("empresa_link_face")
                                )
                        )
                    )
                ,

                "col-12"=>array(
                    "head"=>"Modificar"
                    ,"body"=>array(
                            "type"=>"element-form"
                            ,"data"=>array(
                                    "element"=>"button"
                                    ,"type"=>"submit"
                                    ,"row"=>"empresa_id"
                                    ,"btn-op"=>"modificar-form"
                                    ,"class"=>"success btn-sm"
                                    ,"formaction"=>"empresa-form.php"
                                    ,"name"=>"btn-op-form"
                                    ,"icon"=>"pencil"
                                    ,"text"=>""
                                )
                        )
                    )
            );


            return $table;

        }

         //Métodos de clase Categoría

        #1
        public function listaActivos($limit,$page,$btn_op)
        {
            # Inicia variables
            $lista = '';

            # Datos Paginador
            $offset = $page*$limit;

            #Table Config
            $config=array(
                    "title"=>"Listado de Empresas"
                    ,"icon"=>"th-list"
                    ,"visible"=>"block"
                    ,"btn-op"=>$btn_op
            );

            #Query
            $query = array(
                "consult"=>array(
                    'tables'=>array(
                        array('empresa','c')
                    ),
                    'conditional'=>array(
                        array('','c.empresa_activo','=','1')
                    ),
                    'order'=>array(
                        array('order by','c.empresa_orden','ASC')
                    ),
                    'limit'=>array(
                        array($limit,$offset)
                    )
                )
                ,"count"=>array(
                    'tables'=>array(
                        array('empresa','c')
                        ),
                    'operation'=>array(
                        array('COUNT','c.empresa_id','paginator_count')
                        ),
                    'conditional'=>array(
                        array('','c.empresa_activo','=','1')
                    )
                )
                ,"limit"=>$limit
                ,"offset"=>$offset
                ,"page"=>$page           
            );

            #Table
            $table = $this->table_config('activo');


            // Empleamos el metodo dinamicTable
            $lista = $this->dinamicTable($config,$table,$query); 
            return $lista;
        }

        #2
        public function listaDesactivados()
        {
            # Inicia variables
            $lista = '';

            # Datos Paginador
            $offset = $page*$limit;

            #Table Config
            $config=array(
                    "title"=>"Listado de Categorías Desactivadas"
                    ,"icon"=>"th-list"
                    ,"visible"=>"block"
                    ,"btn-op"=>$btn_op
            );

            #Query
            $query = array(
                "consult"=>array(
                    'tables'=>array(
                        array('empresa','c')
                    ),
                    'conditional'=>array(
                        array('','c.empresa_activo','=','2')
                    ),
                    'order'=>array(
                        array('order by','c.empresa_orden','ASC')
                    )
                )          
            );

            #Table
            $table = $this->table_config('no-activo');


            // Empleamos el metodo dinamicTable
            $lista = $this->dinamicTable($config,$table,$query); 
            return $lista;
        }

        #6
        public function buscar($value,$btn_op)
        {
            # Inicia variables
            $lista = '';

            # Datos Paginador
            $offset = $page*$limit;

            #Table Config
            $config=array(
                    "title"=>'Lista de Categorías <a class="btn-danger" href="categoria.php" style="float:right;"><span class="glyphicon glyphicon-remove"></span> Cancelar Búsqueda</a>'
                    ,"icon"=>"th-list"
                    ,"visible"=>"block"
                    ,"btn-op"=>$btn_op
            );

            #Query
            $query = array(
                "consult"=>array(
                    'tables'=>array(
                        array('empresa','c')
                    ),
                    'conditional'=>array(
                        array('','c.empresa_activo','=','1')
                        ,array('and','c.empresa_nombre','like','CONCAT("%","'.$value.'","%")')
                    )
                )         
            );

            #Table
            $table = $this->table_config('activo');


            // Empleamos el metodo dinamicTable
            $lista = $this->dinamicTable($config,$table,$query); 
            return $lista;        
        }

        #7
        public function cambiarEstado($value,$id)
        {
            #Query
            $arg = array(
                'tables'=>array(
                    //array('tabla')
                    array('empresa')
                ),
                'fields'=>array(
                    //array('campo','valor')
                    array('empresa_activo',$value)
                ),
                'conditional'=>array(
                    //array('operador: VACIO, AND ó OR','campo','valor')
                    array('','empresa_id',$id)
                )
            );

            $update=$this->editRegister($arg);

            return $update;
        }

        #8
        public function eliminar($id)
        {
            #Query
            $arg = array(
                'tables'=>array(
                    array('empresa')
                ),
                'conditional'=>array(
                    array('','empresa_id',$id)
                )
            );

            $update=$this->deleteRegister($arg);

            return $update;
        }

         #9
        public function agregar($value)
        {
            $empresa_orden = $value[0];
            $empresa_nombre = $value[1];
            $empresa_nombre_ingles = $value[2];
            $empresa_descripcion1 = $value[3];
            $empresa_descripcion1_ingles = $value[4];
            $empresa_descripcion2 = $value[5];
            $empresa_descripcion2_ingles = $value[6];
            $empresa_descripcion3 = $value[7];
            $empresa_descripcion3_ingles = $value[8];
            $empresa_imagen1 = $value[9];
            $empresa_imagen2 = $value[10];
            $empresa_imagen3 = $value[11];
            $empresa_link_face = $value[12];

            $arg = array(
                    'tables'=>array(
                            array('empresa')
                        ),
                    'fields'=>array(
                            array('empresa_orden',$empresa_orden)
                            ,array('empresa_activo','1')
                            ,array('empresa_nombre',$empresa_nombre)
                            ,array('empresa_nombre_ingles',$empresa_nombre_ingles)
                            ,array('empresa_descripcion1',$empresa_descripcion1)
                            ,array('empresa_descripcion1_ingles',$empresa_descripcion1_ingles)
                            ,array('empresa_descripcion2',$empresa_descripcion2)
                            ,array('empresa_descripcion2_ingles',$empresa_descripcion2_ingles)
                            ,array('empresa_descripcion3',$empresa_descripcion3)
                            ,array('empresa_descripcion3_ingles',$empresa_descripcion3_ingles)
                            ,array('empresa_imagen1',$empresa_imagen1)
                            ,array('empresa_imagen2',$empresa_imagen2)
                            ,array('empresa_imagen3',$empresa_imagen3)
                            ,array('empresa_link_face',$empresa_link_face)
                        )
                );
            $add = $this->addRegister($arg);

            return $add;
        }       

        #10
        public function listarxId($id)
        {

            $arg = array(
                'tables'=>array(
                    array('empresa','c')
                    ),
                'conditional' => array(
                    array('','c.empresa_id','=',$id)
                    )
                );

            $this->setSelectArg($arg);
            $result = $this->selectData();
            
            return $result;
        }

        #11
        public function editar($arg)
        {

            $empresa_id = $arg['id'];
            $empresa_orden = $arg['fields'][0];
            $empresa_nombre = $arg['fields'][1];
            $empresa_nombre_ingles = $arg['fields'][2];
            $empresa_descripcion1 = $arg['fields'][3];
            $empresa_descripcion1_ingles = $arg['fields'][4];
            $empresa_descripcion2 = $arg['fields'][5];
            $empresa_descripcion2_ingles = $arg['fields'][6];
            $empresa_descripcion3 = $arg['fields'][7];
            $empresa_descripcion3_ingles = $arg['fields'][8];
            $empresa_imagen1 = $arg['fields'][9];
            $empresa_imagen2 = $arg['fields'][10];
            $empresa_imagen3 = $arg['fields'][11];
            $empresa_link_face = $arg['fields'][12];

            #Query
            $arg = array(
                'tables'=>array(
                    //array('tabla')
                    array('empresa')
                ),
                'fields'=>array(
                    //array('campo','valor')
                    array('empresa_orden',$empresa_orden)
                    ,array('empresa_nombre',$empresa_nombre)
                    ,array('empresa_nombre_ingles',$empresa_nombre_ingles)
                    ,array('empresa_descripcion1',$empresa_descripcion1)
                    ,array('empresa_descripcion1_ingles',$empresa_descripcion1_ingles)
                    ,array('empresa_descripcion2',$empresa_descripcion2)
                    ,array('empresa_descripcion2_ingles',$empresa_descripcion2_ingles)
                    ,array('empresa_descripcion3',$empresa_descripcion3)
                    ,array('empresa_descripcion3_ingles',$empresa_descripcion3_ingles)
                    ,array('empresa_imagen1',$empresa_imagen1)
                    ,array('empresa_imagen2',$empresa_imagen2)
                    ,array('empresa_imagen3',$empresa_imagen3)
                    ,array('empresa_link_face',$empresa_link_face)

                ),
                'conditional'=>array(
                    //array('operador: VACIO, AND ó OR','campo','valor')
                    array('','empresa_id',$empresa_id)
                )
            );

            $update=$this->editRegister($arg);

            return $update;
        }


        public function listaTipo($tipo_id)
        {

            if($tipo_id==1){
                $selected1 = 'selected';
                $selected2 = '';
            }else if($tipo_id == 2){
                $selected1 = '';
                $selected2 = 'selected';
            }else{
                $selected1 = '';
                $selected2 = '';
            }


            $htmlSelect = '
                <option '.$selected1.' value="1">Máquina</option>
                <option '.$selected2.' value="2">Insumo</option>
            ';

            return $htmlSelect;
        }

    }

    class Quejas extends View
    {
     private function table_config($estado)
        {


            if($estado=='activo'){
                $check_all = '
                    <div class="checkbox checkbox-info">
                      <input id="check-all" type="checkbox" class="check_id">
                      <label for="check-all" title="Seleccionar todos" class="chk-all"></label>
                    </div>
                '; 
                
                $estado='<span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:green;font-size:20px;"></span>';

            }else if($estado=='no-activo'){
                $check_all="#";
                $estado = '<span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:red;font-size:20px;"></span>';
            }

            $table = array(
                "col-0"=>array(
                    "head"=>$check_all
                    ,"body"=>array(
                            "type"=>"element-form"
                            ,"data"=>array(
                                    "element"=>"checkbox"
                                    ,"row"=>"quejas_id"
                                    ,"id"=>"user-check-"
                                    ,"name"=>"check-id[]"
                                )
                        )
                    )
                ,
                "col-1"=>array(
                    "head"=>"Orden"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("quejas_orden")
                                )
                        )
                    )
                ,
                "col-2"=>array(
                    "head"=>"Título español"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("quejas_titulo")
                                )
                        )
                    )
                ,
                "col-3"=>array(
                    "head"=>"Subtitulo español"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("quejas_subtitulo")
                                )
                        )
                    )
                ,
                "col-4"=>array(
                    "head"=>"Descripcion español"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("quejas_descripcion")
                                )
                        )
                    )
                ,
                "col-5"=>array(
                    "head"=>"Descripcion2 español"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("quejas_descripcion2")
                                )
                        )
                    )
                ,
                "col-6"=>array(
                    "head"=>"Descipcion3 español"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("quejas_descripcion3")
                                )
                        )
                    )
                ,
                "col-7"=>array(
                   "head"=>"Imagenes"
                   ,"body"=>array(
                       "type"=>"image"
                       ,"style"=>array(
                           array("width","50px")
                       )
                       ,"data"=>array(
                           "row"=>array(
                               "quejas_imagen" // obligatoria
                               ,"quejas_imagen2" // no obligatoria
                               ,"quejas_imagen3" // no obligatoria
                               )
                           ,"modal"=>'1' // 1 o 0 --> "fancybox"
                           ,"url"=>'app/img/quejas/'
                           ,"url-no-image"=>'app/img/imgDefault2.png' // imagen por defecto
                       )
                   )
                ),
                "col-8"=>array(
                    "head"=>"Link de facebook"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("quejas_link_face")
                                )
                        )
                    )
                ,
                "col-9"=>array(
                "head"=>"Título ingles"
                ,"body"=>array(
                        "type"=>"text"
                        ,"data"=>array(
                                "row"=>array("quejas_titulo_ingles")
                            ) 
                    )
                ),
                "col-10"=>array(
                    "head"=>"Subtítulo ingles"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("quejas_subtitulo_ingles")
                                )
                        )
                    )
                ,
                "col-11"=>array(
                    "head"=>"Descripción 1 ingles"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("quejas_descripcion_ingles")
                                )
                        )
                    )
                ,
                "col-12"=>array(
                    "head"=>"Descripción 2 ingles"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("quejas_descripcion2_ingles")
                                )
                        )
                    )
                ,
                "col-13"=>array(
                    "head"=>"Descripción 3 ingles"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("quejas_descripcion3_ingles")
                                )
                        )
                    )
                ,
                "col-14"=>array(
                    "head"=>"Fecha"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("quejas_fecha")
                                )
                        )
                    )
                ,



                "col-15"=>array(
                    "head"=>"Modificar"
                    ,"body"=>array(
                            "type"=>"element-form"
                            ,"data"=>array(
                                    "element"=>"button"
                                    ,"type"=>"submit"
                                    ,"row"=>"quejas_id"
                                    ,"btn-op"=>"modificar-form"
                                    ,"class"=>"success btn-sm"
                                    ,"formaction"=>"quejas-form.php"
                                    ,"name"=>"btn-op-form"
                                    ,"icon"=>"pencil"
                                    ,"text"=>""
                                )
                        )
                    )
            );


            return $table;

        }

         //Métodos de clase Categoría

        #1
        public function listaActivos($limit,$page,$btn_op)
        {
            # Inicia variables
            $lista = '';

            # Datos Paginador
            $offset = $page*$limit;

            #Table Config
            $config=array(
                    "title"=>"Listado de quejas"
                    ,"icon"=>"th-list"
                    ,"visible"=>"block"
                    ,"btn-op"=>$btn_op
            );

            #Query
            $query = array(
                "consult"=>array(
                    'tables'=>array(
                        array('quejas','c')
                    ),
                    'conditional'=>array(
                        array('','c.quejas_activo','=','1')
                    ),
                    'order'=>array(
                        array('order by','c.quejas_orden','ASC')
                    ),
                    'limit'=>array(
                        array($limit,$offset)
                    )
                )
                ,"count"=>array(
                    'tables'=>array(
                        array('quejas','c')
                        ),
                    'operation'=>array(
                        array('COUNT','c.quejas_id','paginator_count')
                        ),
                    'conditional'=>array(
                        array('','c.quejas_activo','=','1')
                    )
                )
                ,"limit"=>$limit
                ,"offset"=>$offset
                ,"page"=>$page           
            );

            #Table
            $table = $this->table_config('activo');


            // Empleamos el metodo dinamicTable
            $lista = $this->dinamicTable($config,$table,$query); 
            return $lista;
        }

        #2
        public function listaDesactivados()
        {
            # Inicia variables
            $lista = '';

            # Datos Paginador
            $offset = $page*$limit;

            #Table Config
            $config=array(
                    "title"=>"Listado de Categorías Desactivadas"
                    ,"icon"=>"th-list"
                    ,"visible"=>"block"
                    ,"btn-op"=>$btn_op
            );

            #Query
            $query = array(
                "consult"=>array(
                    'tables'=>array(
                        array('quejas','c')
                    ),
                    'conditional'=>array(
                        array('','c.quejas_activo','=','2')
                    ),
                    'order'=>array(
                        array('order by','c.quejas_orden','ASC')
                    )
                )          
            );

            #Table
            $table = $this->table_config('no-activo');


            // Empleamos el metodo dinamicTable
            $lista = $this->dinamicTable($config,$table,$query); 
            return $lista;
        }

        #6
        public function buscar($value,$btn_op)
        {
            # Inicia variables
            $lista = '';

            # Datos Paginador
            $offset = $page*$limit;

            #Table Config
            $config=array(
                    "title"=>'Lista de Categorías <a class="btn-danger" href="categoria.php" style="float:right;"><span class="glyphicon glyphicon-remove"></span> Cancelar Búsqueda</a>'
                    ,"icon"=>"th-list"
                    ,"visible"=>"block"
                    ,"btn-op"=>$btn_op
            );

            #Query
            $query = array(
                "consult"=>array(
                    'tables'=>array(
                        array('quejas','c')
                    ),
                    'conditional'=>array(
                        array('','c.quejas_activo','=','1')
                        ,array('and','c.quejas_nombre','like','CONCAT("%","'.$value.'","%")')
                    )
                )         
            );

            #Table
            $table = $this->table_config('activo');


            // Empleamos el metodo dinamicTable
            $lista = $this->dinamicTable($config,$table,$query); 
            return $lista;        
        }

        #7
        public function cambiarEstado($value,$id)
        {
            #Query
            $arg = array(
                'tables'=>array(
                    //array('tabla')
                    array('quejas')
                ),
                'fields'=>array(
                    //array('campo','valor')
                    array('quejas_activo',$value)
                ),
                'conditional'=>array(
                    //array('operador: VACIO, AND ó OR','campo','valor')
                    array('','quejas_id',$id)
                )
            );

            $update=$this->editRegister($arg);

            return $update;
        }

        #8
        public function eliminar($id)
        {
            #Query
            $arg = array(
                'tables'=>array(
                    array('quejas')
                ),
                'conditional'=>array(
                    array('','quejas_id',$id)
                )
            );

            $update=$this->deleteRegister($arg);

            return $update;
        }

         #9
        public function agregar($value)
        {
            $quejas_orden = $value[0];
            $quejas_titulo = $value[1];
            $quejas_subtitulo = $value[2];
            $quejas_descripcion = $value[3];
            $quejas_descripcion2 = $value[4];
            $quejas_descripcion3 = $value[5];
            $quejas_imagen = $value[6];
            $quejas_imagen2 = $value[7];
            $quejas_imagen3 = $value[8];
            $quejas_link_face = $value[9];
            $quejas_titulo_ingles = $value[10];
            $quejas_subtitulo_ingles = $value[11];
            $quejas_descripcion_ingles = $value[12];
            $quejas_descripcion2_ingles = $value[13];
            $quejas_descripcion3_ingles = $value[14];
            $quejas_fecha = $value[15];
            $arg = array(
                    'tables'=>array(
                            array('quejas')
                        ),
                    'fields'=>array(
                            array('quejas_orden',$quejas_orden)
                            ,array('quejas_titulo',$quejas_titulo)
                            ,array('quejas_subtitulo',$quejas_subtitulo)
                            ,array('quejas_descripcion',$quejas_descripcion)
                            ,array('quejas_descripcion2',$quejas_descripcion2)
                            ,array('quejas_descripcion3',$quejas_descripcion3)
                            ,array('quejas_imagen',$quejas_imagen)
                            ,array('quejas_imagen2',$quejas_imagen2)
                            ,array('quejas_imagen3',$quejas_imagen3)
                            ,array('quejas_link_face',$quejas_link_face)
                            ,array('quejas_activo','1')
                            ,array('quejas_titulo_ingles',$quejas_titulo_ingles)
                            ,array('quejas_subtitulo_ingles',$quejas_subtitulo_ingles)
                            ,array('quejas_descripcion_ingles',$quejas_descripcion_ingles)
                            ,array('quejas_descripcion2_ingles',$quejas_descripcion2_ingles)
                            ,array('quejas_descripcion3_ingles',$quejas_descripcion3_ingles)
                            ,array('quejas_fecha',$quejas_fecha)
                        )
                );
            $add = $this->addRegister($arg);

            return $add;
        }       

        #10
        public function listarxId($id)
        {

            $arg = array(
                'tables'=>array(
                    array('quejas','c')
                    ),
                'conditional' => array(
                    array('','c.quejas_id','=',$id)
                    )
                );

            $this->setSelectArg($arg);
            $result = $this->selectData();
            
            return $result;
        }

        #11
        public function editar($arg)
        {

            $quejas_id = $arg['id'];
            $quejas_orden = $arg['fields'][0];
            $quejas_titulo = $arg['fields'][1];
            $quejas_subtitulo = $arg['fields'][2];
            $quejas_descripcion = $arg['fields'][3];
            $quejas_descripcion2 = $arg['fields'][4];
            $quejas_descripcion3 = $arg['fields'][5];
            $quejas_imagen = $arg['fields'][6];
            $quejas_imagen2 = $arg['fields'][7];
            $quejas_imagen3 = $arg['fields'][8];
            $quejas_link_face = $arg['fields'][9];
            $quejas_titulo_ingles = $arg['fields'][10];
            $quejas_subtitulo_ingles = $arg['fields'][11];
            $quejas_descripcion_ingles = $arg['fields'][12];
            $quejas_descripcion2_ingles = $arg['fields'][13];
            $quejas_descripcion3_ingles = $arg['fields'][14];
            $quejas_fecha = $arg['fields'][15];

            // echo '<br><br><br><br><br>----> '.$quejas_id;
            // echo '<br><br><br><br><br>----> '.$quejas_imagen;
            // echo '<br><br><br><br><br>----> '.$quejas_imagen2;
            // echo '<br><br><br><br><br>----> '.$quejas_imagen3;
            // echo '<br><br><br><br><br>----> '.$arg['fields'][6];

            #Query
            $arg = array(
                'tables'=>array(
                    //array('tabla')
                    array('quejas')
                ),
                'fields'=>array(
                    //array('campo','valor')
                    array('quejas_orden',$quejas_orden)
                    ,array('quejas_titulo',$quejas_titulo)
                    ,array('quejas_subtitulo',$quejas_subtitulo)
                    ,array('quejas_descripcion',$quejas_descripcion)
                    ,array('quejas_descripcion2',$quejas_descripcion2)
                    ,array('quejas_descripcion3',$quejas_descripcion3)
                    ,array('quejas_imagen',$quejas_imagen)
                    ,array('quejas_imagen2',$quejas_imagen2)
                    ,array('quejas_imagen3',$quejas_imagen3)
                    ,array('quejas_link_face',$quejas_link_face)
                    ,array('quejas_titulo_ingles',$quejas_titulo_ingles)
                    ,array('quejas_subtitulo_ingles',$quejas_subtitulo_ingles)
                    ,array('quejas_descripcion_ingles',$quejas_descripcion_ingles)
                    ,array('quejas_descripcion2_ingles',$quejas_descripcion2_ingles)
                    ,array('quejas_descripcion3_ingles',$quejas_descripcion3_ingles)
                    ,array('quejas_fecha',$quejas_fecha)
                ),
                'conditional'=>array(
                    //array('operador: VACIO, AND ó OR','campo','valor')
                    array('','quejas_id',$quejas_id)
                )
            );

            $update=$this->editRegister($arg);

            return $update;
        }


        public function listaTipo($tipo_id)
        {

            if($tipo_id==1){
                $selected1 = 'selected';
                $selected2 = '';
            }else if($tipo_id == 2){
                $selected1 = '';
                $selected2 = 'selected';
            }else{
                $selected1 = '';
                $selected2 = '';
            }


            $htmlSelect = '
                <option '.$selected1.' value="1">Máquina</option>
                <option '.$selected2.' value="2">Insumo</option>
            ';

            return $htmlSelect;
        }

    }

    class Contactenos extends View
    {
     private function table_config($estado)
        {


            if($estado=='activo'){
                $check_all = '
                    <div class="checkbox checkbox-info">
                      <input id="check-all" type="checkbox" class="check_id">
                      <label for="check-all" title="Seleccionar todos" class="chk-all"></label>
                    </div>
                '; 
                
                $estado='<span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:green;font-size:20px;"></span>';

            }else if($estado=='no-activo'){
                $check_all="#";
                $estado = '<span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:red;font-size:20px;"></span>';
            }

            $table = array(
                "col-0"=>array(
                    "head"=>$check_all
                    ,"body"=>array(
                            "type"=>"element-form"
                            ,"data"=>array(
                                    "element"=>"checkbox"
                                    ,"row"=>"contactenos_id"
                                    ,"id"=>"user-check-"
                                    ,"name"=>"check-id[]"
                                )
                        )
                    )
                ,
                "col-1"=>array(
                    "head"=>"Orden"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("contactenos_orden")
                                )
                        )
                    )
                ,
                "col-2"=>array(
                    "head"=>"Nombres y Apellidos"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("contactenos_nomAp")
                                )
                        )
                    )
                ,
                "col-3"=>array(
                    "head"=>"Teléfono"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("contactenos_telefono")
                                )
                        )
                    )
                ,
                "col-4"=>array(
                    "head"=>"Correo"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("contactenos_correo")
                                )
                        )
                    )
                ,
                "col-5"=>array(
                    "head"=>"Celular"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("contactenos_celular")
                                )
                        )
                    )
                ,
                "col-6"=>array(
                    "head"=>"Mensaje"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("contactenos_mensaje")
                                )
                        )
                    )
                ,
                "col-7"=>array(
                   "head"=>"Imagenes"
                   ,"body"=>array(
                       "type"=>"image"
                       ,"style"=>array(
                           array("width","50px")
                       )
                       ,"data"=>array(
                           "row"=>array(
                               "contactenos_imagen" // obligatoria
                               ,"contactenos_imagen2" // no obligatoria
                               ,"contactenos_imagen3" // no obligatoria
                               )
                           ,"modal"=>'1' // 1 o 0 --> "fancybox"
                           ,"url"=>'app/img/contactenos/'
                           ,"url-no-image"=>'app/img/imgDefault2.png' // imagen por defecto
                       )
                   )
                ),
                
                "col-8"=>array(
                    "head"=>"Fecha"
                    ,"body"=>array(
                            "type"=>"text"
                            ,"data"=>array(
                                    "row"=>array("contactenos_fecha")
                                )
                        )
                    )
                ,



                "col-9"=>array(
                    "head"=>"Modificar"
                    ,"body"=>array(
                            "type"=>"element-form"
                            ,"data"=>array(
                                    "element"=>"button"
                                    ,"type"=>"submit"
                                    ,"row"=>"contactenos_id"
                                    ,"btn-op"=>"modificar-form"
                                    ,"class"=>"success btn-sm"
                                    ,"formaction"=>"contactenos-form.php"
                                    ,"name"=>"btn-op-form"
                                    ,"icon"=>"pencil"
                                    ,"text"=>""
                                )
                        )
                    )
                ,

                "col-10"=>array(
                    "head"=>"Enviar"
                    ,"body"=>array(
                            "type"=>"element-form"
                            ,"data"=>array(
                                    "element"=>"button"
                                    ,"type"=>"submit"
                                    ,"row"=>"contactenos_id"
                                    ,"btn-op"=>"modificar-form"
                                    ,"class"=>"success btn-sm"
                                    ,"formaction"=>"contactenos.php"
                                    ,"name"=>"btn-op-form"
                                    ,"icon"=>"envelope"
                                    ,"text"=>""
                                )
                        )
                    )
            );


            return $table;

        }

         //Métodos de clase Categoría

        #1
        public function listaActivos($limit,$page,$btn_op)
        {
            # Inicia variables
            $lista = '';

            # Datos Paginador
            $offset = $page*$limit;

            #Table Config
            $config=array(
                    "title"=>"Listado de contactenos"
                    ,"icon"=>"th-list"
                    ,"visible"=>"block"
                    ,"btn-op"=>$btn_op
            );

            #Query
            $query = array(
                "consult"=>array(
                    'tables'=>array(
                        array('contactenos','c')
                    ),
                    'conditional'=>array(
                        array('','c.contactenos_activo','=','1')
                    ),
                    'order'=>array(
                        array('order by','c.contactenos_orden','ASC')
                    ),
                    'limit'=>array(
                        array($limit,$offset)
                    )
                )
                ,"count"=>array(
                    'tables'=>array(
                        array('contactenos','c')
                        ),
                    'operation'=>array(
                        array('COUNT','c.contactenos_id','paginator_count')
                        ),
                    'conditional'=>array(
                        array('','c.contactenos_activo','=','1')
                    )
                )
                ,"limit"=>$limit
                ,"offset"=>$offset
                ,"page"=>$page           
            );

            #Table
            $table = $this->table_config('activo');


            // Empleamos el metodo dinamicTable
            $lista = $this->dinamicTable($config,$table,$query); 
            return $lista;
        }

        #2
        public function listaDesactivados()
        {
            # Inicia variables
            $lista = '';

            # Datos Paginador
            $offset = $page*$limit;

            #Table Config
            $config=array(
                    "title"=>"Listado de Categorías Desactivadas"
                    ,"icon"=>"th-list"
                    ,"visible"=>"block"
                    ,"btn-op"=>$btn_op
            );

            #Query
            $query = array(
                "consult"=>array(
                    'tables'=>array(
                        array('contactenos','c')
                    ),
                    'conditional'=>array(
                        array('','c.contactenos_activo','=','2')
                    ),
                    'order'=>array(
                        array('order by','c.contactenos_orden','ASC')
                    )
                )          
            );

            #Table
            $table = $this->table_config('no-activo');


            // Empleamos el metodo dinamicTable
            $lista = $this->dinamicTable($config,$table,$query); 
            return $lista;
        }

        #6
        public function buscar($value,$btn_op)
        {
            # Inicia variables
            $lista = '';

            # Datos Paginador
            $offset = $page*$limit;

            #Table Config
            $config=array(
                    "title"=>'Lista de Categorías <a class="btn-danger" href="categoria.php" style="float:right;"><span class="glyphicon glyphicon-remove"></span> Cancelar Búsqueda</a>'
                    ,"icon"=>"th-list"
                    ,"visible"=>"block"
                    ,"btn-op"=>$btn_op
            );

            #Query
            $query = array(
                "consult"=>array(
                    'tables'=>array(
                        array('contactenos','c')
                    ),
                    'conditional'=>array(
                        array('','c.contactenos_activo','=','1')
                        ,array('and','c.contactenos_nombre','like','CONCAT("%","'.$value.'","%")')
                    )
                )         
            );

            #Table
            $table = $this->table_config('activo');


            // Empleamos el metodo dinamicTable
            $lista = $this->dinamicTable($config,$table,$query); 
            return $lista;        
        }

        #7
        public function cambiarEstado($value,$id)
        {
            #Query
            $arg = array(
                'tables'=>array(
                    //array('tabla')
                    array('contactenos')
                ),
                'fields'=>array(
                    //array('campo','valor')
                    array('contactenos_activo',$value)
                ),
                'conditional'=>array(
                    //array('operador: VACIO, AND ó OR','campo','valor')
                    array('','contactenos_id',$id)
                )
            );

            $update=$this->editRegister($arg);

            return $update;
        }

        #8
        public function eliminar($id)
        {
            #Query
            $arg = array(
                'tables'=>array(
                    array('contactenos')
                ),
                'conditional'=>array(
                    array('','contactenos_id',$id)
                )
            );

            $update=$this->deleteRegister($arg);

            return $update;
        }

         #9
        public function agregar($value)
        {
            $contactenos_orden = $value[0];
            $contactenos_titulo = $value[1];
            $contactenos_subtitulo = $value[2];
            $contactenos_descripcion = $value[3];
            $contactenos_descripcion2 = $value[4];
            $contactenos_descripcion3 = $value[5];
            $contactenos_imagen = $value[6];
            $contactenos_imagen2 = $value[7];
            $contactenos_imagen3 = $value[8];
            // $contactenos_link_face = $value[9];
            $contactenos_titulo_ingles = $value[9];
            // $contactenos_subtitulo_ingles = $value[11];
            // $contactenos_descripcion_ingles = $value[12];
            // $contactenos_descripcion2_ingles = $value[13];
            // $contactenos_descripcion3_ingles = $value[14];
            $contactenos_fecha = $value[10];
            $arg = array(
                    'tables'=>array(
                            array('contactenos')
                        ),
                    'fields'=>array(
                            array('contactenos_orden',$contactenos_orden)
                            ,array('contactenos_nomAp',$contactenos_titulo)
                            ,array('contactenos_telefono',$contactenos_subtitulo)
                            ,array('contactenos_correo',$contactenos_descripcion)
                            ,array('contactenos_celular',$contactenos_descripcion2)
                            ,array('contactenos_mensaje',$contactenos_descripcion3)
                            ,array('contactenos_imagen',$contactenos_imagen)
                            ,array('contactenos_imagen2',$contactenos_imagen2)
                            ,array('contactenos_imagen3',$contactenos_imagen3)
                            // ,array('contactenos_link_face',$contactenos_link_face)
                            ,array('contactenos_activo','1')
                            // ,array('contactenos_titulo_ingles',$contactenos_titulo_ingles)
                            // ,array('contactenos_subtitulo_ingles',$contactenos_subtitulo_ingles)
                            // ,array('contactenos_descripcion_ingles',$contactenos_descripcion_ingles)
                            // ,array('contactenos_descripcion2_ingles',$contactenos_descripcion2_ingles)
                            // ,array('contactenos_descripcion3_ingles',$contactenos_descripcion3_ingles)
                            ,array('contactenos_fecha',$contactenos_fecha)
                        )
                );
            $add = $this->addRegister($arg);

            return $add;
        }       

        #10
        public function listarxId($id)
        {

            $arg = array(
                'tables'=>array(
                    array('contactenos','c')
                    ),
                'conditional' => array(
                    array('','c.contactenos_id','=',$id)
                    )
                );

            $this->setSelectArg($arg);
            $result = $this->selectData();
            
            return $result;
        }

        #11
        public function editar($arg)
        {

            $contactenos_id = $arg['id'];
            $contactenos_orden = $arg['fields'][0];
            $contactenos_titulo = $arg['fields'][1];
            $contactenos_subtitulo = $arg['fields'][2];
            $contactenos_descripcion = $arg['fields'][3];
            $contactenos_descripcion2 = $arg['fields'][4];
            $contactenos_descripcion3 = $arg['fields'][5];
            $contactenos_imagen = $arg['fields'][6];
            $contactenos_imagen2 = $arg['fields'][7];
            $contactenos_imagen3 = $arg['fields'][8];
            // $contactenos_link_face = $arg['fields'][9];
            $contactenos_titulo_ingles = $arg['fields'][9];
            // $contactenos_subtitulo_ingles = $arg['fields'][11];
            // $contactenos_descripcion_ingles = $arg['fields'][12];
            // $contactenos_descripcion2_ingles = $arg['fields'][13];
            // $contactenos_descripcion3_ingles = $arg['fields'][14];
            $contactenos_fecha = $arg['fields'][10];

            // echo '<br><br><br><br><br>----> '.$contactenos_id;
            // echo '<br><br><br><br><br>----> '.$contactenos_imagen;
            // echo '<br><br><br><br><br>----> '.$contactenos_imagen2;
            // echo '<br><br><br><br><br>----> '.$contactenos_imagen3;
            // echo '<br><br><br><br><br>----> '.$arg['fields'][6];

            #Query
            $arg = array(
                'tables'=>array(
                    //array('tabla')
                    array('contactenos')
                ),
                'fields'=>array(
                    //array('campo','valor')
                    array('contactenos_orden',$contactenos_orden)
                    ,array('contactenos_nomAp',$contactenos_titulo)
                    ,array('contactenos_telefono',$contactenos_subtitulo)
                    ,array('contactenos_correo',$contactenos_descripcion)
                    ,array('contactenos_celular',$contactenos_descripcion2)
                    ,array('contactenos_mensaje',$contactenos_descripcion3)
                    ,array('contactenos_imagen',$contactenos_imagen)
                    ,array('contactenos_imagen2',$contactenos_imagen2)
                    ,array('contactenos_imagen3',$contactenos_imagen3)
                    // ,array('contactenos_link_face',$contactenos_link_face)
                    // ,array('contactenos_titulo_ingles',$contactenos_titulo_ingles)
                    // ,array('contactenos_subtitulo_ingles',$contactenos_subtitulo_ingles)
                    // ,array('contactenos_descripcion_ingles',$contactenos_descripcion_ingles)
                    // ,array('contactenos_descripcion2_ingles',$contactenos_descripcion2_ingles)
                    // ,array('contactenos_descripcion3_ingles',$contactenos_descripcion3_ingles)
                    ,array('contactenos_fecha',$contactenos_fecha)
                ),
                'conditional'=>array(
                    //array('operador: VACIO, AND ó OR','campo','valor')
                    array('','contactenos_id',$contactenos_id)
                )
            );

            $update=$this->editRegister($arg);

            return $update;
        }


        public function listaTipo($tipo_id)
        {

            if($tipo_id==1){
                $selected1 = 'selected';
                $selected2 = '';
            }else if($tipo_id == 2){
                $selected1 = '';
                $selected2 = 'selected';
            }else{
                $selected1 = '';
                $selected2 = '';
            }


            $htmlSelect = '
                <option '.$selected1.' value="1">Máquina</option>
                <option '.$selected2.' value="2">Insumo</option>
            ';

            return $htmlSelect;
        }

    }



?>