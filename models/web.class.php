<?php 

/**
* Catalogo
*/
class Catalogo_web extends generalQuery
{

        public function noticiasXpagina($inicio,$cantidad){
            $arg=array(

                'tables'=>array(
                    array('noticia','n'),
                ),
                'conditional'=>array(
                    array('','n.noticia_activo','=','1')
                ),
                'order'=>array(
                    array('order by','n.noticia_orden','ASC')
                ),
                'limit'=>array(
                    array($cantidad,$inicio)
                )    

            );

            $this->setSelectArg($arg);
            $result = $this->selectData();
            
            foreach($result as $col){
                $htmlSelect3 .= '

                    <div class="noticias-alto pro-sect2-cuadro pro-sect2-cuadro1 col-xs-12 col-sm-6 col-md-4">
                        <form action="noticiaDetalle.php" method="get">
                            <button style="border: none; padding: 0; outline: none;" type="submit" name="noticia-id" class="btn-prod" value="'.$col['noticia_id'].'">
                                <div class="pro-sect2-img col-xs-12">
                                    <img id="prod1" class="img-responsive" src="intranet/view/app/img/noticias/'.$col['noticia_imagen'].'" alt="">
                                    <div class="img-producto text-center">
                                        <img class="hidden-xs hidden-sm img-detalle" src="app/img/productos/icon.png" alt="">
                                    </div>

                                </div>
                                
                                <div class="pro-sect2-nombre col-xs-12 col-xs-12">
                                    <div class="pro-sect2-titulo col-xs-12 col-xs-12">
                                        '.$col['noticia_titulo'].'
                                    </div>
                                    <div class="pro-sect2-subtitulo col-xs-12 col-xs-12">
                                        '.$col['noticia_subtitulo'].'
                                    </div>
                                </div>
                                
                            </button>
                        </form>
                    </div>
                ';
            }

            if($htmlSelect3!=''){
                return $htmlSelect3;
            }else if($htmlSelect3 == ''){
                return 0;
            }
        }

        public function noticiasXpaginaIngles($inicio,$cantidad){
            $arg=array(

                'tables'=>array(
                    array('noticia','n'),
                ),
                'conditional'=>array(
                    array('','n.noticia_activo','=','1')
                ),
                'order'=>array(
                    array('order by','n.noticia_orden','ASC')
                ),
                'limit'=>array(
                    array($cantidad,$inicio)
                )    

            );

            $this->setSelectArg($arg);
            $result = $this->selectData();
            
            foreach($result as $col){
                $htmlSelect3 .= '

                    <div class="noticias-alto pro-sect2-cuadro pro-sect2-cuadro1 col-xs-12 col-sm-6 col-md-4">
                        <form action="noticiaDetalle.php" method="get">
                            <button style="border: none; padding: 0; outline: none;" type="submit" name="noticia-id" class="btn-prod" value="'.$col['noticia_id'].'">
                                <div class="pro-sect2-img col-xs-12">
                                    <img id="prod1" class="img-responsive" src="intranet/view/app/img/noticias/'.$col['noticia_imagen'].'" alt="">
                                    <div class="img-producto text-center">
                                        <img class="hidden-xs hidden-sm img-detalle" src="app/img/productos/icon.png" alt="">
                                    </div>

                                </div>
                                
                                <div class="pro-sect2-nombre col-xs-12 col-xs-12">
                                    <div class="pro-sect2-titulo col-xs-12 col-xs-12">
                                        '.$col['noticia_titulo_ingles'].'
                                    </div>
                                    <div class="pro-sect2-subtitulo col-xs-12 col-xs-12">
                                        '.$col['noticia_subtitulo_ingles'].'
                                    </div>
                                </div>
                                
                            </button>
                        </form>
                    </div>
                ';
            }

            if($htmlSelect3!=''){
                return $htmlSelect3;
            }else if($htmlSelect3 == ''){
                return 0;
            }
        }


        public function listaNoticias($noticia_id)
        {


            $arg=array(
                'tables'=>array(
                    array('noticia','n')
                ),
                'conditional'=>array(
                    array('','n.noticia_activo','=','1')
                    // ,array('and','p.categoria_id','=',$categoria_id)
                    // ,array($c1,$c2,$c3,$c4)
                    // ,array($p1,$p2,$p3,$p4)
                ),
                'order'=>array(
                    array('order by', 'n.noticia_orden','ASC')
                )
            );

            $this->setSelectArg($arg);
            $result = $this->selectData();

            foreach($result as $col){
                $htmlSelect2 .= '

                    <div class="pro-sect2-cuadro pro-sect2-cuadro1 col-xs-12 col-sm-6">
                        <button style="border: none; padding: 0;" type="submit" formaction="productoDetalle.php" name="producto-id" class="btn-prod" value="'.$col['producto_id'].'">
                            <div class="pro-sect2-img col-xs-12">
                                <img id="prod1" class="img-responsive" src="intranet/view/app/img/productos/'.$col['producto_imagen'].'" alt="">
                                <div class="img-producto text-center">
                                    <img class="hidden-xs hidden-sm img-detalle" src="app/img/productos/icon.png" alt="">
                                </div>

                            </div>
                            
                            <div style="background:'.$categoria_color.'" class="pro-sect2-nombre col-xs-12 col-xs-12">
                                <div class="pro-caja">
                                    '.$col['producto_nombre'].'
                                </div>
                                
                            </div>
                            

                        </button>
                    </div>
                ';
            }

            if($htmlSelect2!=''){
                return $htmlSelect2;
            }else if($htmlSelect2 == ''){
                return 0;
            }

            
        }

        public function detalleNoticia($arg)
        {

            // $categoria_id = $arg[0];
            $noticiaId = $arg[0];

            $arg=array(
                'tables'=>array(
                    array('noticia','n')
                ),
                'conditional'=>array(
                    array('','n.noticia_activo','=','1')
                    ,array('and','n.noticia_id','=',$noticiaId)
                )
            );

            $this->setSelectArg($arg);
            $result = $this->selectData();

            foreach($result as $col);

            $htmlTitulo = $col['noticia_titulo'];
            $htmlTituloIngles = $col['noticia_titulo_ingles'];

            $htmlSubtitulo = $col['noticia_subtitulo'];
            $htmlSubtituloIngles = $col['noticia_subtitulo_ingles'];

            $htmlDescripcion1 = $col['noticia_descripcion'];
            $htmlDescripcion2 = $col['noticia_descripcion2'];
            $htmlDescripcion3 = $col['noticia_descripcion3'];

            $htmlDescripcionIngles1 = $col['noticia_descripcion_ingles'];
            $htmlDescripcionIngles2 = $col['noticia_descripcion2_ingles'];
            $htmlDescripcionIngles3 = $col['noticia_descripcion3_ingles'];
    
            $htmlImgNotNombre1 = $col['noticia_imagen'];
            $htmlImgNotNombre2 = $col['noticia_imagen2'];
            $htmlImgNotNombre3 = $col['noticia_imagen3'];

            $htmlFace = $col['noticia_link_face'];
            $htmlFecha = $col['noticia_fecha'];

            $htmlOrden = $col['noticia_orden'];

            $argReturn = array(
                $htmlTitulo
                ,$htmlTituloIngles
                ,$htmlSubtitulo
                ,$htmlSubtituloIngles
                ,$htmlDescripcion1
                ,$htmlDescripcion2
                ,$htmlDescripcion3
                ,$htmlDescripcionIngles1
                ,$htmlDescripcionIngles2
                ,$htmlDescripcionIngles3
                ,$htmlFace
                ,$htmlFecha
                ,$htmlOrden
                ,$htmlImgNotNombre1
                ,$htmlImgNotNombre2
                ,$htmlImgNotNombre3
            );

            return $argReturn;

        }

        public function dosNoticiasMasRecientes($noticiaActual){

            $arg=array(

                'tables'=>array(
                    array('noticia','n'),
                ),
                /*
                'fields'=>array(
                    array('n.noticia_id')
                    // ,array('min(n.noticia_orden)')
                    ,array('n.noticia_orden')
                ),
                */
                'conditional'=>array(
                    array('','n.noticia_activo','=','1')
                    ,array('and','n.noticia_orden','!=',$noticiaActual)
                ),
                'order'=>array(
                    array('order by','n.noticia_orden','ASC')
                ),
                'limit'=>array(
                    array('2','0')
                )    

            );

            $this->setSelectArg($arg);
            $result = $this->selectData();
            
            foreach($result as $col){
                $htmlSelect2 .= '

                    <div class="notDet-sect3 col-xs-12 col-sm-6">
                        <div class="notDet-sect3-divimg col-xs-12">
                            <form action="noticiaDetalle.php" method="post">
                                <button style="border:none; padding:0; outline: none;" class="notDet-dosRec1" type="submit" name="noticia-id" value="'.$col['noticia_id'].'">
                                <img class="img-responsive" src="intranet/view/app/img/noticias/'.$col['noticia_imagen'].'" alt="">
                                </button>
                            </form>
                        </div>
                        <div class="notDet-sect3-desc col-xs-12">
                            <form action="noticiaDetalle.php" method="post">
                                <button style="border:none; padding:0; background: transparent; outline: none;" class="notDet-dosRec2" type="submit" name="noticia-id" value="'.$col['noticia_id'].'">
                                    '.$col['noticia_titulo'].'
                                </button>
                            </form>
                        </div>
                    </div>
                ';
            }

            if($htmlSelect2!=''){
                return $htmlSelect2;
            }else if($htmlSelect2 == ''){
                return 0;
            }

        }

        public function totalNoticias(){
            $arg=array(

                'tables'=>array(
                    array('noticia','n'),
                ),
                
                'fields'=>array(
                    array('count(n.noticia_id)')
                ),
                
                'conditional'=>array(
                    array('','n.noticia_activo','=','1')
                ),   
            );

            $this->setSelectArg($arg);
            $result = $this->selectData();

            foreach($result as $col);

            $resultado = $col['count(n.noticia_id)'];

            return $resultado;
        }

        

// quejas

        public function listaQuejas($data)
        {

            $noticia_id = $data[0];

            $arg=array(
                'tables'=>array(
                    array('quejas','n')
                ),
                'conditional'=>array(
                    array('','n.quejas_activo','=','1')
                    // ,array('and','p.categoria_id','=',$categoria_id)
                    // ,array($c1,$c2,$c3,$c4)
                    // ,array($p1,$p2,$p3,$p4)
                ),
                'order'=>array(
                    array('order by', 'n.quejas_orden','ASC')
                )
            );

            $this->setSelectArg($arg);
            $result = $this->selectData();

            foreach($result as $col){
                $htmlSelect2 .= '

                    <div class="pro-sect2-cuadro pro-sect2-cuadro1 col-xs-12 col-sm-6">
                        <button style="border: none; padding: 0;" type="submit" formaction="productoDetalle.php" name="producto-id" class="btn-prod" value="'.$col['producto_id'].'">
                            <div class="pro-sect2-img col-xs-12">
                                <img id="prod1" class="img-responsive" src="intranet/view/app/img/productos/'.$col['producto_imagen'].'" alt="">
                                <div class="img-producto text-center">
                                    <img class="hidden-xs hidden-sm img-detalle" src="app/img/productos/icon.png" alt="">
                                </div>

                            </div>
                            
                            <div style="background:'.$categoria_color.'" class="pro-sect2-nombre col-xs-12 col-xs-12">
                                <div class="pro-caja">
                                    '.$col['producto_nombre'].'
                                </div>
                                
                            </div>
                            

                        </button>
                    </div>
                ';
            }

            if($htmlSelect2!=''){
                return $htmlSelect2;
            }else if($htmlSelect2 == ''){
                return 0;
            }

            
        }

        public function detallequejas($arg)
        {

            // $categoria_id = $arg[0];
            $quejasId = $arg[0];

            $arg=array(
                'tables'=>array(
                    array('quejas','n')
                ),
                'conditional'=>array(
                    array('','n.quejas_activo','=','1')
                    ,array('and','n.quejas_id','=',$quejasId)
                )
            );

            $this->setSelectArg($arg);
            $result = $this->selectData();

            foreach($result as $col);

            $htmlTitulo = $col['quejas_titulo'];
            $htmlTituloIngles = $col['quejas_titulo_ingles'];

            $htmlSubtitulo = $col['quejas_subtitulo'];
            $htmlSubtituloIngles = $col['quejas_subtitulo_ingles'];

            $htmlDescripcion1 = $col['quejas_descripcion'];
            $htmlDescripcion2 = $col['quejas_descripcion2'];
            $htmlDescripcion3 = $col['quejas_descripcion3'];

            $htmlDescripcionIngles1 = $col['quejas_descripcion_ingles'];
            $htmlDescripcionIngles2 = $col['quejas_descripcion2_ingles'];
            $htmlDescripcionIngles3 = $col['quejas_descripcion3_ingles'];

            $htmlImg1 = 'intranet/view/app/img/quejas/'.$col['quejas_imagen'].'"';
            $htmlImg2 = 'intranet/view/app/img/quejas/'.$col['quejas_imagen2'].'"';
            $htmlImg3 = 'intranet/view/app/img/quejas/'.$col['quejas_imagen3'].'"';

            // echo '111-->'.$col['quejas_imagen'];
            // echo '222-->'.$col['quejas_imagen2'];
            // echo '333-->'.$col['quejas_imagen3'];

            
            
            $htmlImgNotNombre1 = $col['quejas_imagen'];
            $htmlImgNotNombre2 = $col['quejas_imagen2'];
            $htmlImgNotNombre3 = $col['quejas_imagen3'];

            // echo '011-->'.$htmlImgNotNombre1;
            // echo '222-->'.$htmlImgNotNombre2;
            // echo '333-->'.$htmlImgNotNombre3;

            $htmlFace = $col['quejas_link_face'];
            $htmlFecha = $col['quejas_fecha'];

            $htmlOrden = $col['quejas_orden'];

            $argReturn = array(
                $htmlTitulo
                ,$htmlTituloIngles
                ,$htmlSubtitulo
                ,$htmlSubtituloIngles
                ,$htmlDescripcion1
                ,$htmlDescripcion2
                ,$htmlDescripcion3
                ,$htmlDescripcionIngles1
                ,$htmlDescripcionIngles2
                ,$htmlDescripcionIngles3
                ,$htmlImg1
                ,$htmlImg2
                ,$htmlImg3
                ,$htmlFace
                ,$htmlFecha
                ,$htmlOrden
                ,$htmlImgNotNombre1
                ,$htmlImgNotNombre2
                ,$htmlImgNotNombre3
            );

            return $argReturn;

        }

        public function dosquejasMasRecientes($quejasActual){

            $arg=array(

                'tables'=>array(
                    array('quejas','n'),
                ),
                /*
                'fields'=>array(
                    array('n.quejas_id')
                    // ,array('min(n.quejas_orden)')
                    ,array('n.quejas_orden')
                ),
                */
                'conditional'=>array(
                    array('','n.quejas_activo','=','1')
                    ,array('and','n.quejas_orden','!=',$quejasActual)
                ),
                'order'=>array(
                    array('order by','n.quejas_orden','ASC')
                ),
                'limit'=>array(
                    array('2','0')
                )    

            );

            $this->setSelectArg($arg);
            $result = $this->selectData();
            
            foreach($result as $col){
                $htmlSelect2 .= '

                    <div class="notDet-sect3 col-xs-12 col-sm-6">
                        <div class="notDet-sect3-divimg col-xs-12">
                            <form action="quejasDetalle.php" method="post">
                                <button style="border:none; padding:0; outline: none;" class="notDet-dosRec1" type="submit" name="quejas-id" value="'.$col['quejas_id'].'">
                                <img class="img-responsive" src="intranet/view/app/img/quejas/'.$col['quejas_imagen'].'" alt="">
                                </button>
                            </form>
                        </div>
                        <div class="notDet-sect3-desc col-xs-12">
                            <form action="quejasDetalle.php" method="post">
                                <button style="border:none; padding:0; background: transparent; outline: none;" class="notDet-dosRec2" type="submit" name="quejas-id" value="'.$col['quejas_id'].'">
                                    '.$col['quejas_titulo'].'
                                </button>
                            </form>
                        </div>
                    </div>
                ';
            }

            if($htmlSelect2!=''){
                return $htmlSelect2;
            }else if($htmlSelect2 == ''){
                return 0;
            }

        }

        public function quejasXpagina($inicio,$cantidad){
            $arg=array(

                'tables'=>array(
                    array('quejas','n'),
                ),
                'conditional'=>array(
                    array('','n.quejas_activo','=','1')
                ),
                'order'=>array(
                    array('order by','n.quejas_orden','ASC')
                ),
                'limit'=>array(
                    array($cantidad,$inicio)
                )    

            );

            $this->setSelectArg($arg);
            $result = $this->selectData();
            
            foreach($result as $col){
                $htmlSelect3 .= '

                    <div class="quejas-alto pro-sect2-cuadro pro-sect2-cuadro1 col-xs-12 col-sm-6 col-md-4">
                        <form action="quejasDetalle.php" method="post">
                            <button style="border: none; padding: 0; outline: none;" type="submit" name="quejas-id" class="btn-prod" value="'.$col['quejas_id'].'">
                                <div class="pro-sect2-img col-xs-12">
                                    <img id="prod1" class="img-responsive" src="intranet/view/app/img/quejas/'.$col['quejas_imagen'].'" alt="">
                                    <div class="img-producto text-center">
                                        <img class="hidden-xs hidden-sm img-detalle" src="app/img/productos/icon.png" alt="">
                                    </div>

                                </div>
                                
                                <div class="pro-sect2-nombre col-xs-12 col-xs-12">
                                    <div class="pro-sect2-titulo col-xs-12 col-xs-12">
                                        '.$col['quejas_titulo'].'
                                    </div>
                                    <div class="pro-sect2-subtitulo col-xs-12 col-xs-12">
                                        '.$col['quejas_subtitulo'].'
                                    </div>
                                </div>
                                
                            </button>
                        </form>
                    </div>
                ';
            }

            if($htmlSelect3!=''){
                return $htmlSelect3;
            }else if($htmlSelect3 == ''){
                return 0;
            }
        }

         public function quejaXpagina($inicio,$cantidad){
            $arg=array(

                'tables'=>array(
                    array('quejas','n'),
                ),
                'conditional'=>array(
                    array('','n.quejas_activo','=','1')
                ),
                'order'=>array(
                    array('order by','n.quejas_orden','ASC')
                ),
                'limit'=>array(
                    array($cantidad,$inicio)
                )    

            );

            $this->setSelectArg($arg);
            $result = $this->selectData();
            
            foreach($result as $col){
                $htmlSelect3 .= '

                    <div class="not-sect2-noticia quejas-sect2 col-xs-12">
                        
                        <div class="queja-sect2-contenedor col-xs-12">
                            <div class="not-sect2-tit queja-sect2-tit col-xs-12">
                                '.$col['quejas_titulo'].'
                            </div>
                            <div class="not-sect2-parr col-xs-12">
                                '.$col['quejas_descripcion'].'
                            </div>
                            <div class="not-sect2-fecha col-xs-6">
                                '.$col['quejas_fecha'].'
                            </div>
                            <div class="not-sect2-btn queja-sect2-btn col-xs-6">
                                <form action="quejasDetalle.php" method="post">
                                    <button type="submit" name="quejas-id" class="not-sect2-btnLeer queja-sect2-btnLeer" value="'.$col['quejas_id'].'"><span class="raya-leer">Leer más</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                ';
            }

            if($htmlSelect3!=''){
                return $htmlSelect3;
            }else if($htmlSelect3 == ''){
                return 0;
            }
        }

        public function totalQuejas(){
            $arg=array(

                'tables'=>array(
                    array('quejas','n'),
                ),
                
                'fields'=>array(
                    array('count(n.quejas_id)')
                ),
                
                'conditional'=>array(
                    array('','n.quejas_activo','=','1')
                ),   
            );

            $this->setSelectArg($arg);
            $result = $this->selectData();

            foreach($result as $col);

            $resultado = $col['count(n.quejas_id)'];

            return $resultado;
        }

        public function quejasPublicar($arg)
        {

            // $categoria_id = $arg[0];
            $quejasId = $arg[0];

            $arg=array(
                'tables'=>array(
                    array('quejas','n')
                ),
                'conditional'=>array(
                    array('','n.quejas_activo','=','1')
                    ,array('and','n.quejas_id','=',$quejasId)
                )
            );

            $this->setSelectArg($arg);
            $result = $this->selectData();

            foreach($result as $col);

            $htmlTitulo = $col['quejas_titulo'];
            $htmlTituloIngles = $col['quejas_titulo_ingles'];

            $htmlSubtitulo = $col['quejas_subtitulo'];
            $htmlSubtituloIngles = $col['quejas_subtitulo_ingles'];

            $htmlDescripcion1 = $col['quejas_descripcion'];
            $htmlDescripcion2 = $col['quejas_descripcion2'];
            $htmlDescripcion3 = $col['quejas_descripcion3'];

            $htmlDescripcionIngles1 = $col['quejas_descripcion_ingles'];
            $htmlDescripcionIngles2 = $col['quejas_descripcion2_ingles'];
            $htmlDescripcionIngles3 = $col['quejas_descripcion3_ingles'];

            $htmlImg1 = 'intranet/view/app/img/quejass/'.$col['quejas_imagen'].'"';
            $htmlImg2 = 'intranet/view/app/img/quejass/'.$col['quejas_imagen2'].'"';
            $htmlImg3 = 'intranet/view/app/img/quejass/'.$col['quejas_imagen3'].'"';
         
            $htmlImgNotNombre1 = $col['quejas_imagen'];
            $htmlImgNotNombre2 = $col['quejas_imagen2'];
            $htmlImgNotNombre3 = $col['quejas_imagen3'];

            $htmlFace = $col['quejas_link_face'];
            $htmlFecha = $col['quejas_fecha'];

            $htmlOrden = $col['quejas_orden'];

            $argReturn = array(
                $htmlTitulo
                ,$htmlTituloIngles
                ,$htmlSubtitulo
                ,$htmlSubtituloIngles
                ,$htmlDescripcion1
                ,$htmlDescripcion2
                ,$htmlDescripcion3
                ,$htmlDescripcionIngles1
                ,$htmlDescripcionIngles2
                ,$htmlDescripcionIngles3
                ,$htmlImg1
                ,$htmlImg2
                ,$htmlImg3
                ,$htmlFace
                ,$htmlFecha
                ,$htmlOrden
                ,$htmlImgNotNombre1
                ,$htmlImgNotNombre2
                ,$htmlImgNotNombre3
            );

            return $argReturn;

        }


// empresas

        public function listaEmpresas($data)
        {

            $empresa_id = $data[0];

            $arg=array(
                'tables'=>array(
                    array('empresa','n')
                ),
                'conditional'=>array(
                    array('','n.empresa_activo','=','1')
                    // ,array('and','p.categoria_id','=',$categoria_id)
                    // ,array($c1,$c2,$c3,$c4)
                    // ,array($p1,$p2,$p3,$p4)
                ),
                'order'=>array(
                    array('order by', 'n.empresa_orden','ASC')
                )
            );

            $this->setSelectArg($arg);
            $result = $this->selectData();

            foreach($result as $col){
                $htmlSelect2 .= '

                    <div class="not-sect2-quejas col-xs-12">
                        <div class="col-xs-12 col-sm-12 col-md-7">
                            <img class="img-responsive" src="intranet/view/app/img/empresas/'.$col['empresa_imagen'].'" alt="">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-5">
                            <div class="not-sect2-tit col-xs-12">
                                '.$col['empresa_nombre'].'
                            </div>
                            <div class="not-sect2-parr col-xs-12">
                                '.$col['empresa_descripcion1'].'
                            </div>
                            <div class="not-sect2-fecha col-xs-12">
                                '.$col['empresa_link_face'].'
                            </div>
                            <div class="not-sect2-btn col-xs-12">
                                <form action="empresaDetalle.php" method="post">
                                    <button type="submit" name="empresa-id" class="not-sect2-btnLeer" value="'.$col['empresa_id'].'">Leer más
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                ';
            }

            if($htmlSelect2!=''){
                return $htmlSelect2;
            }else if($htmlSelect2 == ''){
                return 0;
            }

            
        }

        public function detalleEmpresa($arg)
        {

            // $categoria_id = $arg[0];
            $empresaId = $arg[0];

            $arg=array(
                'tables'=>array(
                    array('empresa','n')
                ),
                'conditional'=>array(
                    array('','n.empresa_activo','=','1')
                    ,array('and','n.empresa_id','=',$empresaId)
                )
            );

            $this->setSelectArg($arg);
            $result = $this->selectData();

            foreach($result as $col);

            $htmlOrden = $col['empresa_orden'];
            $htmlNombre = $col['empresa_nombre'];
            $htmlNombreIngles = $col['empresa_nombre_ingles'];

            $htmlDescripcion1 = $col['empresa_descripcion1'];
            $htmlDescripcion2 = $col['empresa_descripcion2'];
            $htmlDescripcion3 = $col['empresa_descripcion3'];

            $htmlDescripcionIngles1 = $col['empresa_descripcion1_ingles'];
            $htmlDescripcionIngles2 = $col['empresa_descripcion2_ingles'];
            $htmlDescripcionIngles3 = $col['empresa_descripcion3_ingles'];

            $htmlImgEmpNombre1 = $col['empresa_imagen1'];
            $htmlImgEmpNombre2 = $col['empresa_imagen2'];
            $htmlImgEmpNombre3 = $col['empresa_imagen3'];

            $htmlFace = $col['empresa_link_face'];

            

            $argReturn = array(
                $htmlOrden
                ,$htmlNombre
                ,$htmlNombreIngles
                ,$htmlDescripcion1
                ,$htmlDescripcionIngles1
                ,$htmlDescripcion2
                ,$htmlDescripcionIngles2
                ,$htmlDescripcion3
                ,$htmlDescripcionIngles3
                ,$htmlImgEmpNombre1
                ,$htmlImgEmpNombre2
                ,$htmlImgEmpNombre3
                ,$htmlFace
            );

            return $argReturn;

        }


        public function totalempresas(){
            $arg=array(

                'tables'=>array(
                    array('empresa','n'),
                ),
                
                'fields'=>array(
                    array('count(n.empresa_id)')
                ),
                
                'conditional'=>array(
                    array('','n.empresa_activo','=','1')
                ),   
            );

            $this->setSelectArg($arg);
            $result = $this->selectData();

            foreach($result as $col);

            $resultado = $col['count(n.empresa_id)'];

            return $resultado;
        }

        public function empresasXpagina($inicio,$cantidad){
            $arg=array(

                'tables'=>array(
                    array('empresa','n'),
                ),
                'conditional'=>array(
                    array('','n.empresa_activo','=','1')
                ),
                'order'=>array(
                    array('order by','n.empresa_orden','ASC')
                ),
                'limit'=>array(
                    array($cantidad,$inicio)
                )    

            );

            $this->setSelectArg($arg);
            $result = $this->selectData();
            
            foreach($result as $col){
                $htmlSelect3 .= '

                    <div class="not-sect2-noticia col-xs-12">
                        <div class="col-xs-12 col-sm-12 col-md-7">
                            <img class="img-responsive" src="intranet/view/app/img/empresas/'.$col['empresa_imagen1'].'" alt="">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-5">
                            <div class="not-sect2-tit col-xs-12">
                                '.$col['empresa_nombre'].'
                            </div>
                            <div class="not-sect2-parr col-xs-12">
                                '.$col['empresa_descripcion1'].'
                            </div>
                            <div class="not-sect2-btn col-xs-12">
                                <form action="empresaDetalle.php" method="post">
                                    <button type="submit" name="empresa-id" class="not-sect2-btnLeer" value="'.$col['empresa_id'].'">Leer más
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                ';
            }

            if($htmlSelect3!=''){
                return $htmlSelect3;
            }else if($htmlSelect3 == ''){
                return 0;
            }
        }

        public function empresasXpaginaIngles($inicio,$cantidad){
            $arg=array(

                'tables'=>array(
                    array('empresa','n'),
                ),
                'conditional'=>array(
                    array('','n.empresa_activo','=','1')
                ),
                'order'=>array(
                    array('order by','n.empresa_orden','ASC')
                ),
                'limit'=>array(
                    array($cantidad,$inicio)
                )    

            );

            $this->setSelectArg($arg);
            $result = $this->selectData();
            
            foreach($result as $col){
                $htmlSelect3 .= '

                    <div class="not-sect2-noticia col-xs-12">
                        <div class="col-xs-12 col-sm-12 col-md-7">
                            <img class="img-responsive" src="intranet/view/app/img/empresas/'.$col['empresa_imagen1'].'" alt="">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-5">
                            <div class="not-sect2-tit col-xs-12">
                                '.$col['empresa_nombre'].'
                            </div>
                            <div class="not-sect2-parr col-xs-12">
                                '.$col['empresa_descripcion1'].'
                            </div>
                            <div class="not-sect2-btn col-xs-12">
                                <form action="empresaDetalle.php" method="post">
                                    <button type="submit" name="empresa-id" class="not-sect2-btnLeer" value="'.$col['empresa_id'].'">Leer más
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                ';
            }

            if($htmlSelect3!=''){
                return $htmlSelect3;
            }else if($htmlSelect3 == ''){
                return 0;
            }
        }

    
    }	

 ?>
