@extends('welcome')
@section('contenido')
<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-Type: text/html');
?>
<div id="common-home" class="container-fluid">
    <div class="row">
        <div id="content" class="col-xs-12">
            <div class="slidebg s-panel">
                <div class="loader wrloader"></div>
                <div class="sliderow homeslider-container">
                    <div id="slideshow0" class="slider-for">
                        <div>
                            <div class="slideimg">
                                <div class="text-center"><a href="/info_producto"><img src="image\cache\catalog\slider\slider-1-1920x700.jpg" alt="iPhone 6" class="img-responsive"></a></div>
                            </div>
                            <div class="slidecap">
                                <div class="slidedes">
                                    <div class="slidesmall">
                                        <h3>trending</h3>
                                        <h2>Naturally Fruit juice</h2>
                                        <hr>
                                        <p>100% Naturally Fruit juice</p>
                                    </div><a href="#" tabindex="-1">shop now</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slideimg">
                                <div class="text-center"><a href="#"><img src="image\cache\catalog\slider\slider-2-1920x700.jpg" alt="MacBookAir" class="img-responsive"></a></div>
                            </div>
                            <div class="slidecap">
                                <div class="slidebig">
                                    <h1>plant</h1>
                                </div>
                                <div class="slidedes">
                                    <div class="slidesmall">
                                        <h3>trending</h3>
                                        <h2>Fruit collection</h2>
                                        <hr>
                                        <p>100% Naturally Fruit juice </p>
                                    </div><a href="#" tabindex="-1">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('.slider-for').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        dots: true,
                        autoplay: false,
                        autoplaySpeed: 3000,
                        fade: true
                    });

                });

            </script>

            <script type="text/javascript">
                $(document).ready(function() {
                    $("#owl-testi").owlCarousel({
                        itemsCustom: [
                            [0, 1]
                        ],
                        autoPlay: false,
                        navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                        navigation: false,
                        pagination: true
                    });
                });

            </script>
            <div class="tab-content container protabcont next-prevb">
                <div class="tab-head text-center">
                    <h1 class="heading"><span>Productos iniciales</span></h1>

                </div>
                <div class="tab-pane active" id="featurep">
                    <div class="row rless">
                        <div id="feature" class="owl-theme owl-carousel">

                            @foreach($principales as $principal)
                            <div class="multi-row">
                                <div class="product-layout col-xs-12 cless">
                                    <div class="product-thumb transition">
                                        <div class="image"><a href="/info_producto?producto={{$principal->id_alimento}}"><img src="{{$principal->fotografia_miniatura}}" alt="{{$principal->nombre_alimento}}" title="{{$principal->nombre_alimento}}" class="img-responsive center-block" style="height:250px; "></a>
                                            <!-- Webibazaar Images Start -->

                                            <!-- End -->

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
                                                <h4 class="protitle"><a href="/info_producto?producto={{$principal->id_alimento}}">{{$principal->nombre_alimento}}</a></h4>
                                                <div class="price">
                                                    ${{$principal->precio}}
                                                </div>
                                            </div>


                                            <div class="button-group">
                                                <a type="button" data-toggle="tooltip" title="Agregar a favoritos" href="/info_producto?producto={{$principal->id_alimento}}"><svg>
                                                        <use xlink:href="#heart"></use>
                                                    </svg></a>
                                                <a type="button" data-toggle="tooltip" href="/info_producto?producto={{$principal->id_alimento}}" title="Agregar al carrito de compras" class="cartb"><svg>
                                                        <use xlink:href="#pcart"></use>
                                                    </svg><span></span></a>

                                                <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $("#feature").owlCarousel({
                            itemsCustom: [
                                [0, 1],
                                [320, 2],
                                [600, 3],
                                [992, 4],
                                [1200, 4],
                                [1410, 5]
                            ],
                            // autoPlay: 1000,
                            navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                            navigation: true,
                            pagination: false
                        });
                    });

                </script>
                <div class="tab-pane" id="bestseller">
                    <div class="row rless">
                        <div id="best" class="owl-theme owl-carousel">





                        </div>
                    </div>
                </div>

                <script type="text/javascript">
                    $(document).ready(function() {
                        $("#best").owlCarousel({
                            itemsCustom: [
                                [0, 1],
                                [320, 2],
                                [600, 3],
                                [992, 4],
                                [1200, 4],
                                [1410, 5]
                            ],
                            // autoPlay: 1000,
                            navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                            navigation: true,
                            pagination: false
                        });
                    });

                </script>
                <div class="tab-pane" id="latestp">
                    <div class="row rless">
                        <div id="latest" class="owl-theme owl-carousel">


                        </div>
                    </div>

                </div>

            </div>

            <script type="text/javascript">
                $(document).ready(function() {
                    $("#latest").owlCarousel({
                        itemsCustom: [
                            [0, 1],
                            [320, 2],
                            [600, 3],
                            [992, 4],
                            [1200, 4],
                            [1410, 5]
                        ],
                        // autoPlay: 1000,
                        navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                        navigation: true,
                        pagination: false
                    });
                });

            </script>


            <!--<div class="offrow">
                    <div class="offerbanner">

                        <div class="beffect-o">
                            <a href="#">
                                <img src="image\cache\catalog\Offerbanner\banner-1920x350.jpg" alt="offerbanner-2" class="img-responsive">
                            </a>
                        </div>

                        <div class="beffect-o">
                            <a href="#">
                                <img src="image\cache\catalog\Offerbanner\offer-2-1920x350.jpg" alt="Offer banner" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>-->

            <div>
                <div class="deliveryinfo text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <ul class="list-unstyled">
                                    <li><span><svg width="36px" height="36px">
                                                <use xlink:href="#support"></use>
                                            </svg></span></li>
                                    <li class="text-left">
                                        <h4>24 x 7 Soporte gratuito</h4>
                                        <p>Soporte técnico</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 sbr">
                                <ul class="list-unstyled">
                                    <li><span><svg width="36px" height="36px">
                                                <use xlink:href="#pay"></use>
                                            </svg></span></li>
                                    <li class="text-left">
                                        <h4>Pagos seguros</h4>
                                        <p>Pagos por paypal y mercado pago</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12  sbr">
                                <ul class="list-unstyled">
                                    <li><span><svg width="36px" height="36px">
                                                <use xlink:href="#ship"></use>
                                            </svg></span></li>
                                    <li class="text-left">
                                        <h4>Entregas</h4>
                                        <p>Entregas a domicilio</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12  sbr">
                                <ul class="list-unstyled">
                                    <li><span><svg width="33px" height="36px">
                                                <use xlink:href="#gift"></use>
                                            </svg></span></li>
                                    <li class="text-left">
                                        <h4>Precios especiales</h4>
                                        <p>Nuestros precios son como regalos</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <script type="text/javascript">
                $(document).ready(function() {
                    $("#cat-img").owlCarousel({
                        itemsCustom: [
                            [0, 1],
                            [320, 2],
                            [400, 2],
                            [600, 3],
                            [768, 3],
                            [992, 5],
                            [1200, 6],
                            [1410, 7]
                        ],
                        //autoPlay: 6000,
                        navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                        navigation: true,
                        pagination: false
                    });
                });

            </script>



            <script type="text/javascript">
                $(document).ready(function() {
                    $("#onsale").owlCarousel({
                        itemsCustom: [
                            [0, 1],
                            [320, 1],
                            [600, 2],
                            [768, 1],
                            [992, 2],
                            [1200, 2],
                            [1410, 2]
                        ],
                        // autoPlay: 1000,
                        navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                        navigation: true,
                        pagination: false
                    });
                });

            </script>



            <script type="text/javascript">
                $(document).ready(function() {
                    $("#owl-testi").owlCarousel({
                        itemsCustom: [
                            [0, 1]
                        ],
                        autoPlay: false,
                        navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                        navigation: false,
                        pagination: true
                    });
                });

            </script>
            <div class="container spepro next-prevb">
                <h1 class="heading text-center"><span>Ultimos productos</span></h1>
                <div class="row rless">
                    <div id="special" class="owl-theme owl-carousel">
                        @foreach($ultimos as $ultimo)
                        <div class="product-layout col-xs-12 cless">
                            <div class="product-thumb transition">
                                <div class="image"><a href="/info_producto?producto={{$ultimo->id_alimento}}"><img src="{{$ultimo->fotografia_miniatura}}" alt="{{$ultimo->nombre_alimento}}" title="{{$ultimo->nombre_alimento}}" class="img-responsive center-block" style="height:250px;"></a>
                                    <!-- Webiarch Images Start -->

                                    <!-- Webiarch Images End -->
                                </div>
                                <div class="caption text-center">
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>
                                    <div class="opbtn">
                                        <h4 class="protitle"><a href="/info_producto">{{$ultimo->nombre_alimento}}</a></h4>
                                        <div class="price">
                                            <span class="price-new">${{$ultimo->precio}}</span>
                                        </div>
                                    </div>


                                    <div class="button-group">
                                        <a type="button" data-toggle="tooltip" title="Agregar a favoritos" href="/info_producto?producto={{$ultimo->id_alimento}}"><svg>
                                                <use xlink:href="#heart"></use>
                                            </svg></a>
                                        <a type="button" data-toggle="tooltip" href="/info_producto?producto={{$ultimo->id_alimento}}" title="Agregar al carrito de compras" class="cartb"><svg>
                                                <use xlink:href="#pcart"></use>
                                            </svg><span></span></a>

                                        <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>


            <script type="text/javascript">
                $(document).ready(function() {
                    $("#special").owlCarousel({
                        itemsCustom: [
                            [0, 1],
                            [320, 2],
                            [600, 3],
                            [992, 4],
                            [1200, 4],
                            [1410, 5]
                        ],
                        // autoPlay: 1000,
                        navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                        navigation: true,
                        pagination: false
                    });
                });

            </script>

            <div class="logo-slider">
                <div class="container">
                    <div class="row rless">
                        <div id="carousel0" class="owl-carousel owl-theme">
                            <div class="text-center col-xs-12 cless"><a href="#"><img src="image\cache\catalog\logoslider\menufacture-9-225x150.png" alt="NFL" class="img-responsive center-block"></a></div>
                            <div class="text-center col-xs-12 cless"><a href="#"><img src="image\cache\catalog\logoslider\menufacture-7-225x150.png" alt="Sony" class="img-responsive center-block"></a></div>
                            <div class="text-center col-xs-12 cless"><a href="#"><img src="image\cache\catalog\logoslider\menufacture-3-225x150.png" alt="RedBull" class="img-responsive center-block"></a></div>
                            <div class="text-center col-xs-12 cless"><a href="#"><img src="image\cache\catalog\logoslider\menufacture-6-225x150.png" alt="Burger King" class="img-responsive center-block"></a></div>
                            <div class="text-center col-xs-12 cless"><a href="#"><img src="image\cache\catalog\logoslider\menufacture-5-225x150.png" alt="Coca Cola" class="img-responsive center-block"></a></div>
                            <div class="text-center col-xs-12 cless"><a href="#"><img src="image\cache\catalog\logoslider\menufacture-4-225x150.png" alt="Canon" class="img-responsive center-block"></a></div>
                            <div class="text-center col-xs-12 cless"><a href="#"><img src="image\cache\catalog\logoslider\menufacture-3-225x150.png" alt="Dell" class="img-responsive center-block"></a></div>
                            <div class="text-center col-xs-12 cless"><a href="#"><img src="image\cache\catalog\logoslider\menufacture-2-225x150.png" alt="Harley Davidson" class="img-responsive center-block"></a></div>
                            <div class="text-center col-xs-12 cless"><a href="#"><img src="image\cache\catalog\logoslider\menufacture-12-225x150.png" alt="Disney" class="img-responsive center-block"></a></div>
                            <div class="text-center col-xs-12 cless"><a href="#"><img src="image\cache\catalog\logoslider\menufacture-1-225x150.png" alt="brand" class="img-responsive center-block"></a></div>
                            <div class="text-center col-xs-12 cless"><a href="#"><img src="image\cache\catalog\logoslider\menufacture-10-225x150.png" alt="Nintendo" class="img-responsive center-block"></a></div>
                            <div class="text-center col-xs-12 cless"><a href="#"><img src="image\cache\catalog\logoslider\menufacture-11-225x150.png" alt="Starbucks" class="img-responsive center-block"></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#carousel0").owlCarousel({
                        itemsCustom: [
                            [0, 2],
                            [320, 2],
                            [600, 3],
                            [768, 4],
                            [992, 6],
                            [1200, 7],
                            [1410, 7]
                        ],
                        autoPlay: 6000,
                        loop: true,
                        navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                        navigation: false,
                        pagination: false
                    });
                });

            </script>



            <script type="text/javascript">
                $(document).ready(function() {
                    $("#blog").owlCarousel({
                        itemsCustom: [
                            [0, 1],
                            [600, 2],
                            [768, 2],
                            [992, 2],
                            [1200, 3],
                            [1410, 3]
                        ],
                        // autoPlay: 1000,
                        navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                        navigation: true,
                        pagination: false
                    });
                });

            </script>


            <script type="text/javascript">
                <!--
                $("#newsletter_5f2456087342b").webiNewsletter().work('Email is not valid!');

                -->
            </script>

            <script type="text/javascript">
                <!--
                $("#newsletter_5f24560874834").webiNewsletter().work('Email is not valid!');

                -->
            </script>
        </div>
    </div>
</div>
@stop
