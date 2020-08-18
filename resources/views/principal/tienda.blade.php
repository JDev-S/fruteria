@extends('welcome')
@section('contenido')
<div id="product-category" class="container cleft">
    <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="/tienda">Tienda</a></li>
    </ul>
    <div class="row">
        <aside id="column-left" class="col-sm-4 col-md-3 col-xs-12 hidden-xs">
            <div class="list-group catlistpage hidden-xs">
                <div class="panel-heading cathed">Categorias</div>
                @foreach($categorias as $cate)
                <a href="/tienda/1/{{$cate->id_categoria}}" class="list-group-item">{{$cate->nombre_categoria}}</a>

                @endforeach
            </div>


            <script type="text/javascript">
                <!--
                $('#button-filter').on('click', function() {
                    filter = [];

                    $('input[name^=\'filter\']:checked').each(function(element) {
                        filter.push(this.value);
                    });

                    location = 'https://madebyhand.in/opencart/FS03/Fashion01/index.php?route=product/category&path=20&filter=' + filter.join(',');
                });
                //

                -->
            </script>

        </aside>

        <div id="content" class="col-sm-8 col-md-9  col-xs-12 colright">


            <div class="appres"></div>

            <div class="row cate-border">
                <div class="col-md-2 col-sm-3 col-xs-4 lgrid">
                    <div class="btn-group-sm">
                        <button type="button" id="list-view" class="btn listgridbtn" data-toggle="tooltip" title="" data-original-title="Lista">
                            <svg width="20px" height="20px">
                                <use xlink:href="#clist"></use>
                            </svg>
                        </button>
                        <button type="button" id="grid-view" class="btn listgridbtn active" data-toggle="tooltip" title="" data-original-title="Cuadricula">
                            <svg width="18px" height="18px">
                                <use xlink:href="#cgrid"></use>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="catesort">
                    <div class="input-group input-group-sm ">
                        <label class="input-group-addon" for="input-sort">Buscar producto:</label>
                        <input type="search" class="form-control " placeholder="Buscar …" value="" id="buscar" name="buscar" onkeypress="pulsar(event)">

                    </div>
                </div>

            </div>
            <div class="row cpagerow">
                @foreach($alimentos as $alimento)
                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="product-thumb transition">
                        <div class="image"><a href="/info_producto?producto={{$alimento->id_alimento}}"><img src="{{$alimento->fotografia_miniatura}}" alt="Healthy Lime" title="Healthy Lime" class="img-responsive center-block"></a>
                            <!-- Webibazaar Images Start -->
                            <!-- Webibazaar Images End -->

                        </div>

                        <div class="caption text-center">
                            <div class="rating">
                                <span class="fa fa-stack">
                                    <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
                                </span>
                                <span class="fa fa-stack">
                                    <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
                                </span>
                                <span class="fa fa-stack">
                                    <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
                                </span>
                                <span class="fa fa-stack">
                                    <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
                                </span>
                                <span class="fa fa-stack">
                                    <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
                                </span>
                            </div>
                            <div class="opbtn">
                                <h4 class="protitle"><a href="/info_producto?producto={{$alimento->id_alimento}}">{{$alimento->nombre_alimento}}</a></h4>
                                <p class="catlist-des">{{$alimento->descripcion}}.</p>
                                <div class="price">
                                    $602.00
                                </div>
                            </div>


                            <div class="button-group">
                                <a type="button" data-toggle="tooltip" title="Agregar a favoritos" href="#" data-original-title="Add to Wish List"><svg>
                                        <use xlink:href="#heart"></use>
                                    </svg></a>
                                <button type="button" data-toggle="tooltip" href="#" title="Agregar al carrito" class="cartb" data-original-title="Add to Cart"><svg>
                                        <use xlink:href="#pcart"></use>
                                    </svg><span></span></button>

                                <div data-toggle="tooltip" title="" class="bquickv" data-original-title="Quickview">
                                    <div class="webi-ownstyle webi-quickview"><a href="{{$alimento->fotografia_miniatura}}"><svg width="18px" height="17px">
                                                <use xlink:href="#bquick"></use>
                                            </svg></a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach

            </div>
            <div class="row pagi">
                <div class="col-sm-6 col-xs-6 text-left">
                    <ul class="pagination">
                    <?php
                       $paginacion= $numero_platillos[0]->numero_platillos/6;
                       $paginacion=ceil($paginacion); 
                    if(empty($buscar))
                    {
                            if(empty($categoria))
                        {

                             if($pagina>1)
                           {
                               if($pagina>$paginacion)
                               {
                                   //echo'<li><a href="/'.$paginacion.'">«</a></li>';
                                   //echo '<a class="next page-numbers" href="/index/'.$paginacion.'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-left"></i></a>';

                                   echo '<li><a href="/tienda/'.$paginacion.'/">&lt;</a></li>';
                                   
                               }
                        else
                               {
                                   //echo'<li><a href="/'.($pagina-1).'">«</a></li>';
                                  // echo '<a class="next page-numbers" href="/index/'.($pagina-1).'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-left"></i></a>';

                                    
                            echo '<li><a href="/tienda/'.($pagina-1).'/">&lt;</a></li>';
                                    
                               }

                           }                

                           for($i=1;$i<=ceil($numero_platillos[0]->numero_platillos/6);$i++)
                           {
                               if($i==$pagina)
                               {
                                   //echo'<li class="active"><a  href="/'.$i.'">'.$i.'</a></li>';
                                  // echo '<span class="page-numbers current"><a  href="/index/'.$i.'/'.$categoria.'/'.$buscar.'">'.$i.'</a></span>';
                                   
                                  echo ' <li class="active"><a href="/tienda/'.$i.'/"> <span>'.$i.'</span> </a></li>';

                               }
                               else
                               {
                                   //echo'<li><a  href="/'.$i.'">'.$i.'</a></li>';
                                    //echo '<a class="page-numbers" href="/index/'.$i.'/'.$categoria.'/'.$buscar.'">'.$i.'</a>';
                                  
                                  echo ' <li><a href="/tienda/'.$i.'/">'
                                            .$i.'</a></li>';
                               }

                           }

                           if($pagina<$paginacion)
                           {
                               //echo'<li><a href="/'.($pagina+1).'">»</a></li>';
                                //echo '<a class="next page-numbers" href="/index/'.($pagina+1).'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-right"></i></a>';
                               
                               echo '<li><a href="/tienda/'.($pagina+1).'/">&gt;</a></li>';
                                      
                           }
                    }
                    else
                        {

                            if($pagina>1)
                           {
                               if($pagina>$paginacion)
                               {
                                   //echo'<li><a href="/'.$paginacion.'">«</a></li>';
                                   //echo '<a class="next page-numbers" href="/index/'.$paginacion.'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-left"></i></a>';

                                   
                                   echo '<li><a href="/tienda/'.$paginacion.'/'.$categoria.'">&lt;</a></li>';
                               }
                        else
                               {
                                   //echo'<li><a href="/'.($pagina-1).'">«</a></li>';
                                  // echo '<a class="next page-numbers" href="/index/'.($pagina-1).'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-left"></i></a>';
                            
                                   echo '<li><a href="/tienda/'.($pagina-1).'/'.$categoria.'">&lt;</a></li>';
                               }

                           }                

                           for($i=1;$i<=ceil($numero_platillos[0]->numero_platillos/6);$i++)
                           {
                               if($i==$pagina)
                               {
                                   //echo'<li class="active"><a  href="/'.$i.'">'.$i.'</a></li>';
                                  // echo '<span class="page-numbers current"><a  href="/index/'.$i.'/'.$categoria.'/'.$buscar.'">'.$i.'</a></span>';

                                   
                                   echo '<li class="active"><a href="/tienda/'.$i.'/'.$categoria.'"><span>'.$i.'</span></a></li>';

                               }
                               else
                               {
                                   //echo'<li><a  href="/'.$i.'">'.$i.'</a></li>';
                                    //echo '<a class="page-numbers" href="/index/'.$i.'/'.$categoria.'/'.$buscar.'">'.$i.'</a>';
                                  
                                   echo '<li><a href="/tienda/'.$i.'/'.$categoria.'">'
                                            .$i.'</a></li>';
                               }

                           }

                           if($pagina<$paginacion)
                           {
                               //echo'<li><a href="/'.($pagina+1).'">»</a></li>';
                                //echo '<a class="next page-numbers" href="/index/'.($pagina+1).'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-right"></i></a>';

                               
                               echo'<li><a href="/tienda/'.($pagina+1).'/'.$categoria.'">&gt;</a></li>';
                                      
                           }
                        }
                        
                    }
                      else
                      {
                           if($pagina>1)
                           {
                               if($pagina>$paginacion)
                               {
                                   //echo'<li><a href="/'.$paginacion.'">«</a></li>';
                                   //echo '<a class="next page-numbers" href="/index/'.$paginacion.'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-left"></i></a>';
                            
                                   
                                  echo' <li><a href="/tienda/'.$paginacion.'/'.$categoria.'/'.$buscar.'">&lt;</a></li>';
                                   
                               }
                        else
                               {
                                   //echo'<li><a href="/'.($pagina-1).'">«</a></li>';
                                  // echo '<a class="next page-numbers" href="/index/'.($pagina-1).'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-left"></i></a>';
                            
                                    echo' <li><a href="/tienda/'.($pagina-1).'/'.$categoria.'/'.$buscar.'">&lt;</a></li>';
                               }

                           }                

                           for($i=1;$i<=ceil($numero_platillos[0]->numero_platillos/6);$i++)
                           {
                               if($i==$pagina)
                               {
                                   //echo'<li class="active"><a  href="/'.$i.'">'.$i.'</a></li>';
                                  // echo '<span class="page-numbers current"><a  href="/index/'.$i.'/'.$categoria.'/'.$buscar.'">'.$i.'</a></span>';
                                   
                                   
                                echo '<li class="active"><a  href="/tienda/'.$i.'/'.$categoria.'/'.$buscar.'"><span>'.$i.'</span></a></li>';
                               }
                               else
                               {
                                   //echo'<li><a  href="/'.$i.'">'.$i.'</a></li>';
                                    //echo '<a class="page-numbers" href="/index/'.$i.'/'.$categoria.'/'.$buscar.'">'.$i.'</a>';
                                   
                                   echo '<li><a href="/tienda/'.$i.'/'.$categoria.'/'.$buscar.'">'
                                            .$i.'</a></li>';
                               }

                           }

                           if($pagina<$paginacion)
                           {
                               //echo'<li><a href="/'.($pagina+1).'">»</a></li>';
                                //echo '<a class="next page-numbers" href="/index/'.($pagina+1).'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-right"></i></a>';

                                      
                               echo '<li><a href="/tienda/'.($pagina+1).'/'.$categoria.'/'.$buscar.'">&gt;</a></li>';
                               
                           }
                      }
                    
                   ?>
                    </ul>
                </div>


                <div class="col-sm-6 col-xs-6 text-right tot">
                    <?php
                                    echo 'Mostrando '. $pagina.' - '.$pagina*6;
                                    echo ' de '.$numero_platillos[0]->numero_platillos.'  Resultado';
                                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')
<script type="text/javascript">
    function pulsar(e) {
        if (e.keyCode === 13 && !e.shiftKey) {
            e.preventDefault();
            var cod = document.getElementById("buscar").value;
            //alert(cod);
            var url = "/tienda/1/''/" + cod;
            //alert(url);
            location.href = url;
            /*$.ajax({
                method: "GET",
                url: url,
                dataType: "json",
                success: function(data) {
                  alert(data);

                }
            });*/

        }
    }

</script>
@stop
@stop
