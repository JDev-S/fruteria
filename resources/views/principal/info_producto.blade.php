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
                        <ul class="thumbnails" >

                            <li><a class="thumbnail" href="{{$info[0]->fotografia_miniatura}}"  title="Fresh Avocado">
                                    <img data-zoom-image="{{$info[0]->fotografia_miniatura}}" src="{{$info[0]->fotografia_miniatura}}" style="height:450px;" id="zoom_03" class="img-responsive center-block" alt="image">
                                </a>
                               
                            </li>
                           

                            <div class="row" >
                                <li id="gallery_01" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                                    <div class="owl-wrapper-outer">
                                        <div class="owl-wrapper" style="width: 600px; left: 0px; display: block; transform: translate3d(0px, 0px, 0px); transition: all 1000ms ease 0s;">
                                            <?php
                                             $query = 'SELECT * FROM imagenes_de_muestra WHERE id_alimento='.$info[0]->id_alimento;
                                            $imagenes=DB::select($query);
                                            $i=1;
                                           foreach($imagenes as $imagen)
                                            {
                                            echo'<div class="owl-item" style="width: 75px;"><a data-zoom-image="'.$imagen->imagen_muestra.'" data-image="'.$imagen->imagen_muestra.'" href="'.$imagen->imagen_muestra.'" class="col-xs-12">
                                                    <img src="'.$imagen->imagen_muestra.'" class="img-responsive center-block" alt="additional image">
                                                </a></div>';
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
                            <ul class="list-inline">
                                <li class="text-decor-bold">
                                    <h2>Precio: ${{$info[0]->precio}}</h2>
                                </li>

                            </ul>



                        </ul>
                        <div id="product">
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

                        </div>
                        <div class="rating">
                            <h3>Formas de pago</h3>
                            <img src="/images/paypalmercado.png" width="200px">
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
                                <a class="a2a_dd" href="https://www.addtoany.com/share#url=https%3A%2F%2Fmadebyhand.in%2Fopencart%2FFS03%2FFashion01%2Findex.php%3Froute%3Dproduct%2Fproduct%26path%3D20%26product_id%3D42&amp;title=Fresh%20Avocado"><span class="a2a_svg a2a_s__default a2a_s_a2a" style="background-color: rgb(1, 102, 255);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
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
                        <li class="active"><a href="#tab-description" data-toggle="tab">Descripción</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-description">

                            <p> {{$info[0]->descripcion}}.</p>

                        </div>


                    </div>
                </div>
                <!-- relatedproduct -->

            </div>
        </div>
    </div>
</div>
@section('scripts')


<script type="text/javascript"><!--
$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    $('#review').fadeOut('slow');

    $('#review').load(this.href);

    $('#review').fadeIn('slow');
});

$('#review').load('index.php?route=product/product/review&product_id=42');

$('#button-review').on('click', function() {
  $.ajax({
    url: 'index.php?route=product/product/write&product_id=42',
    type: 'post',
    dataType: 'json',
    data: $("#form-review").serialize(),
    beforeSend: function() {
      $('#button-review').button('loading');
    },
    complete: function() {
      $('#button-review').button('reset');
    },
    success: function(json) {
      $('.alert-dismissible').remove();

      if (json['error']) {
        $('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
      }

      if (json['success']) {
        $('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

        $('input[name=\'name\']').val('');
        $('textarea[name=\'text\']').val('');
        $('input[name=\'rating\']:checked').prop('checked', false);
      }
    }
  });
});

$(document).ready(function() {
  $('.thumbnails').magnificPopup({
    type:'image',
    delegate: 'a',
    gallery: {
      enabled: true
    }
  });
});
//--></script>

<script type="text/javascript">
    $(document).ready(function() {
    $("#related").owlCarousel({
    itemsCustom : [
    [0, 1],
    [320, 2],
    [600, 3],
    [992, 4],
    [1200, 4],
    [1410, 5]
    ],
      // autoPlay: 1000,
      navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
      navigation : true,
      pagination:false
    });
    });
</script>


<script type="text/javascript"><!--
$('#gallery_01').owlCarousel({
  itemsCustom : [
        [0, 2],
        [320, 3],
        [600, 5],
        [768, 4],
        [992, 4],
        [1200, 4],
        [1410, 4]
        ],
   autoPlay: 1000,
  autoPlay: true,
  navigation: false,
  navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
  pagination: false
});

<script type="text/javascript">
$(document).ready(function() {
    $("#owl-testi").owlCarousel({
    itemsCustom : [
    [0, 1]
    ],
      autoPlay: false,
      navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
      navigation : false,
      pagination:true
    });
    });

  </script>

<script type="text/javascript">
$(document).ready(function() {
    $("#owl-testi").owlCarousel({
    itemsCustom : [
    [0, 1]
    ],
      autoPlay: false,
      navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
      navigation : false,
      pagination:true
    });
    });

  </script>

<script type="text/javascript">
$(document).ready(function() {
    $("#owl-testi").owlCarousel({
    itemsCustom : [
    [0, 1]
    ],
      autoPlay: false,
      navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
      navigation : false,
      pagination:true
    });
    });

  </script>
@stop
@stop
