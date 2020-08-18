@extends('welcome')
@section('contenido')


<div id="product-product" class="container">
    <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="/tienda/1/{{$info[0]->id_categoria}}">{{$info[0]->nombre_categoria}}</a></li>
        <li><a href="/info_producto?producto={{$info[0]->id_alimento}}"> {{$info[0]->nombre_alimento}} </a></li>
    </ul>
    <div class="row">

        <div id="content" class="col-xs-12">
            <div class="productbg">
                <div class="row">
                    <div class="col-sm-6 col-lg-5 col-md-6 col-xs-12 proimg sticky">
                        <ul class="thumbnails">
                            <li><a class="thumbnail" href="{{$info[0]->fotografia_miniatura}}">
                                    <div style="height:300px;width:455px;" class="zoomWrapper"><img data-zoom-image="{{$info[0]->fotografia_miniatura}}" src="{{$info[0]->fotografia_miniatura}}" id="zoom_03" class="img-responsive center-block" alt="image" style="position: absolute;"></div>
                                </a>
                            </li>
                            <div class="row">
                                <li id="gallery_01" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                                    <div class="owl-wrapper-outer">
                                        <div class="owl-wrapper" style="width: 944px; left: 0px; display: block; transition: all 1000ms ease 0s; transform: translate3d(0px, 0px, 0px);">
                                            <?php
                                            $query = 'SELECT * FROM imagenes_de_muestra WHERE id_alimento='.$info[0]->id_alimento;
                                            $imagenes=DB::select($query);
                                            $i=1;
                                           foreach($imagenes as $imagen)
                                            {
                                            if($i==1)
                                            {
                                        echo
                                            '<div class="owl-item" style="width: 118px;">
                                                <a data-zoom-image="'.$imagen->imagen_muestra.'" data-image="'.$imagen->imagen_muestra.'" href="'.$imagen->imagen_muestra.'" class="col-xs-12">
                                                    <img src="'.$imagen->imagen_muestra.'" class="img-responsive center-block" alt="additional image">
                                                </a>';
                                                $i++;
                                            }else
                                            if($i>1 && $i<4)
                                            {
                                                echo
                                            '
                                                <a data-zoom-image="'.$imagen->imagen_muestra.'" data-image="'.$imagen->imagen_muestra.'" href="'.$imagen->imagen_muestra.'" class="col-xs-12">
                                                    <img src="'.$imagen->imagen_muestra.'" class="img-responsive center-block" alt="additional image">
                                                </a>';
                                                $i++;
                                            }
                                                 else
                                                     if($i==4)
                    
                                                 {
                                                     echo'  <a data-zoom-image="'.$imagen->imagen_muestra.'" data-image="'.$imagen->imagen_muestra.'" href="'.$imagen->imagen_muestra.'" class="col-xs-12">
                                                    <img src="'.$imagen->imagen_muestra.'" class="img-responsive center-block" alt="additional image">
                                                </a>
                                                </div>';
                                                $i=1;
                                                 }
                                            
                                            }
                                        ?>
                                        </div>
                                    </div>



                                </li>
                            </div>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-md-6 col-xs-12 col-sm-6 pro-content">
                        <h1> {{$info[0]->nombre_alimento}} </h1>
                        <hr class="producthr">
                        <ul class="list-unstyled">
                            <li><span class="text-decor">Categoría:</span><a href="/tienda/1/{{$info[0]->id_categoria}}" class="textdeb">{{$info[0]->nombre_categoria}}</a></li>
                            <li><span class="text-decor">Disponibilidad:</span>
                                <?php 
                                if($info[0]->disponible==1)
                                {
                                    echo'Hay disponible';
                                }else
                                {
                                    echo 'No esta disponible';
                                }
                                
                                ?></li>
                            <hr class="producthr">
                        </ul>
                        <ul class="list-unstyled">
                            <li class="text-decor-bold">
                                <h2 class="pro-price">${{$info[0]->precio}}</h2>
                            </li>
                            <!--             <li>Ex Tax: $100.00</li>-->
                        </ul>
                        <div id="product">
                            <hr class="producthr">
                            <h3>Available Options</h3>
                            <div class="form-group required ">
                                <label class="control-label text-decorop" for="input-option225">Delivery Date</label>
                                <div class="input-group date">
                                    <input type="text" name="option[225]" value="2011-04-22" data-date-format="YYYY-MM-DD" id="input-option225" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn datebtn" type="button"><i class="fa fa-calendar"></i></button>
                                    </span></div>
                            </div>

                            <hr class="producthr">
                            <!-- Quantity option -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-3 col-md-3 col-xs-3 col-lg-2 op-box qtlabel">
                                        <label class="control-label text-decorop" for="input-quantity">Cantidad :</label>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-9 col-lg-10 op-box qty-plus-minus">
                                        <button type="button" class="form-control pull-left btn-number btnminus" disabled="disabled" data-type="minus" data-field="quantity">
                                            <span class="glyphicon glyphicon-minus"></span>
                                        </button>
                                        <input id="input-quantity" type="text" name="quantity" value="1" size="2" class="form-control input-number pull-left">
                                        <input type="hidden" name="product_id" value="47">
                                        <button type="button" class="form-control pull-left btn-number btnplus" data-type="plus" data-field="quantity">
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </button>
                                    </div>
                                </div>
                                <hr class="producthr">
                                <button type="button" id="button-cart" data-loading-text="Loading..." class="btn pcrt add-to-cart btn-primary">Añadir al carrito</button>
                                <button type="button" data-toggle="tooltip" title="" class="btn pcrt btn-primary" onclick="wishlist.add('47');" data-original-title="Añadir a favoritos"><svg width="18px" height="17px">
                                        <use xlink:href="#heart"></use>
                                    </svg></button>
                                <hr class="producthr">
                            </div>
                            <!-- Quantity option end -->
                        </div>
                        <div class="rating">
                            <li> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> </li>
                            <hr class="producthr">
                            <!-- AddToAny BEGIN -->
                            <div class="a2a_kit a2a_kit_size_32 a2a_default_style" style="line-height: 32px;">
                                <a class="a2a_button_facebook" target="_blank" href="/#facebook" rel="nofollow noopener"><span class="a2a_svg a2a_s__default a2a_s_facebook" style="background-color: rgb(24, 119, 242);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                            <path fill="#FFF" d="M17.78 27.5V17.008h3.522l.527-4.09h-4.05v-2.61c0-1.182.33-1.99 2.023-1.99h2.166V4.66c-.375-.05-1.66-.16-3.155-.16-3.123 0-5.26 1.905-5.26 5.405v3.016h-3.53v4.09h3.53V27.5h4.223z"></path>
                                        </svg></span><span class="a2a_label">Facebook</span></a>
                                <a class="a2a_button_twitter" target="_blank" href="/#twitter" rel="nofollow noopener"><span class="a2a_svg a2a_s__default a2a_s_twitter" style="background-color: rgb(85, 172, 238);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                            <path fill="#FFF" d="M28 8.557a9.913 9.913 0 0 1-2.828.775 4.93 4.93 0 0 0 2.166-2.725 9.738 9.738 0 0 1-3.13 1.194 4.92 4.92 0 0 0-3.593-1.55 4.924 4.924 0 0 0-4.794 6.049c-4.09-.21-7.72-2.17-10.15-5.15a4.942 4.942 0 0 0-.665 2.477c0 1.71.87 3.214 2.19 4.1a4.968 4.968 0 0 1-2.23-.616v.06c0 2.39 1.7 4.38 3.952 4.83-.414.115-.85.174-1.297.174-.318 0-.626-.03-.928-.086a4.935 4.935 0 0 0 4.6 3.42 9.893 9.893 0 0 1-6.114 2.107c-.398 0-.79-.023-1.175-.068a13.953 13.953 0 0 0 7.55 2.213c9.056 0 14.01-7.507 14.01-14.013 0-.213-.005-.426-.015-.637.96-.695 1.795-1.56 2.455-2.55z"></path>
                                        </svg></span><span class="a2a_label">Twitter</span></a>
                                <a class="a2a_button_google_plus"></a>
                                <a class="a2a_button_pinterest" target="_blank" href="/#pinterest" rel="nofollow noopener"><span class="a2a_svg a2a_s__default a2a_s_pinterest" style="background-color: rgb(189, 8, 28);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                            <path fill="#FFF" d="M16.539 4.5c-6.277 0-9.442 4.5-9.442 8.253 0 2.272.86 4.293 2.705 5.046.303.125.574.005.662-.33.061-.231.205-.816.27-1.06.088-.331.053-.447-.191-.736-.532-.627-.873-1.439-.873-2.591 0-3.338 2.498-6.327 6.505-6.327 3.548 0 5.497 2.168 5.497 5.062 0 3.81-1.686 7.025-4.188 7.025-1.382 0-2.416-1.142-2.085-2.545.397-1.674 1.166-3.48 1.166-4.689 0-1.081-.581-1.983-1.782-1.983-1.413 0-2.548 1.462-2.548 3.419 0 1.247.421 2.091.421 2.091l-1.699 7.199c-.505 2.137-.076 4.755-.039 5.019.021.158.223.196.314.077.13-.17 1.813-2.247 2.384-4.324.162-.587.929-3.631.929-3.631.46.876 1.801 1.646 3.227 1.646 4.247 0 7.128-3.871 7.128-9.053.003-3.918-3.317-7.568-8.361-7.568z"></path>
                                        </svg></span><span class="a2a_label">Pinterest</span></a>
                                <a class="a2a_button_linkedin" target="_blank" href="/#linkedin" rel="nofollow noopener"><span class="a2a_svg a2a_s__default a2a_s_linkedin" style="background-color: rgb(0, 123, 181);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                            <path d="M6.227 12.61h4.19v13.48h-4.19V12.61zm2.095-6.7a2.43 2.43 0 0 1 0 4.86c-1.344 0-2.428-1.09-2.428-2.43s1.084-2.43 2.428-2.43m4.72 6.7h4.02v1.84h.058c.56-1.058 1.927-2.176 3.965-2.176 4.238 0 5.02 2.792 5.02 6.42v7.395h-4.183v-6.56c0-1.564-.03-3.574-2.178-3.574-2.18 0-2.514 1.7-2.514 3.46v6.668h-4.187V12.61z" fill="#FFF"></path>
                                        </svg></span><span class="a2a_label">LinkedIn</span></a>
                                <a class="a2a_dd" href="https://www.addtoany.com/share#url=https%3A%2F%2Fmadebyhand.in%2Fopencart%2FFS03%2FFashion01%2Findex.php%3Froute%3Dproduct%2Fproduct%26path%3D20%26product_id%3D47&amp;title=Banana%20-%201%20kg"><span class="a2a_svg a2a_s__default a2a_s_a2a" style="background-color: rgb(1, 102, 255);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                            <g fill="#FFF">
                                                <path d="M14 7h4v18h-4z"></path>
                                                <path d="M7 14h18v4H7z"></path>
                                            </g>
                                        </svg></span><span class="a2a_label a2a_localize" data-a2a-localize="inner,Share">Compartir</span></a>
                                <div style="clear: both;"></div>
                            </div>
                            <script async="" src="https://static.addtoany.com/menu/page.js"></script>
                            <!-- AddToAny END -->
                        </div>
                    </div>
                </div>
                <div class="product-tab">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-description" data-toggle="tab" aria-expanded="true">Descripcion</a></li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-description">
                            <p>
                                {{$info[0]->descripcion}}</p>
                        </div>
                        <div class="tab-pane" id="tab-specification">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2"><strong>Memory</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>test 1</td>
                                        <td>16GB</td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td colspan="2"><strong>Processor</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>No. of Cores</td>
                                        <td>4</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="tab-review">
                            <form class="" id="form-review">
                                <div id="review">
                                    <p>There are no reviews for this product.</p>
                                </div>
                                <h2 class="co-heading">Write a review</h2>
                                <div class="form-group required row">
                                    <div class="col-sm-12">
                                        <label class="control-label" for="input-name">Your Name</label>
                                        <input type="text" name="name" value="" id="input-name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group required row">
                                    <div class="col-sm-12">
                                        <label class="control-label" for="input-review">Your Review</label>
                                        <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                        <!-- <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div> -->
                                    </div>
                                </div>
                                <div class="form-group required">

                                    <div class="radi">
                                        <label class="control-label" for="input-review">Rating</label>
                                        <div class="form-rating">

                                            <div class="form-rating-container pull-left">
                                                <input id="rating-5" type="radio" name="rating" value="5">
                                                <label class="fa fa-stack pull-right" for="rating-5">
                                                    <i class="fa fa-star fa-stack-5x"></i>
                                                    <i class="fa fa-star-o fa-stack-5x"></i>
                                                </label>
                                                <input id="rating-4" type="radio" name="rating" value="4">
                                                <label class="fa fa-stack pull-right" for="rating-4">
                                                    <i class="fa fa-star fa-stack-5x"></i>
                                                    <i class="fa fa-star-o fa-stack-5x"></i>
                                                </label>
                                                <input id="rating-3" type="radio" name="rating" value="3">
                                                <label class="fa fa-stack pull-right" for="rating-3">
                                                    <i class="fa fa-star fa-stack-5x"></i>
                                                    <i class="fa fa-star-o fa-stack-5x"></i>
                                                </label>
                                                <input id="rating-2" type="radio" name="rating" value="2">
                                                <label class="fa fa-stack pull-right" for="rating-2">
                                                    <i class="fa fa-star fa-stack-5x"></i>
                                                    <i class="fa fa-star-o fa-stack-5x"></i>
                                                </label>
                                                <input id="rating-1" type="radio" name="rating" value="1">
                                                <label class="fa fa-stack pull-right" for="rating-1">
                                                    <i class="fa fa-star fa-stack-5x"></i>
                                                    <i class="fa fa-star-o fa-stack-5x"></i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="buttons clearfix">
                                    <div class="pull-right">
                                        <button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Continue</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- relatedproduct -->
            </div>
        </div>
    </div>
</div>
@stop
