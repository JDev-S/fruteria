@extends('welcome')
@section('contenido')
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
                                            <h4>24 x 7 Free Support</h4>
                                            <p>Online Support 24/7</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 sbr">
                                    <ul class="list-unstyled">
                                        <li><span><svg width="36px" height="36px">
                                                    <use xlink:href="#pay"></use>
                                                </svg></span></li>
                                        <li class="text-left">
                                            <h4>Money Back Guarantee</h4>
                                            <p>100% Secure Payment</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12  sbr">
                                    <ul class="list-unstyled">
                                        <li><span><svg width="36px" height="36px">
                                                    <use xlink:href="#ship"></use>
                                                </svg></span></li>
                                        <li class="text-left">
                                            <h4>Free World Shipping</h4>
                                            <p>On Order Over $99</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12  sbr">
                                    <ul class="list-unstyled">
                                        <li><span><svg width="33px" height="36px">
                                                    <use xlink:href="#gift"></use>
                                                </svg></span></li>
                                        <li class="text-left">
                                            <h4>Special Gift Cards</h4>
                                            <p>Give The Perfect Gift</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
                        <h1 class="heading"><span>trending product</span></h1>

                    </div>
                    <div class="tab-pane active" id="featurep">
                        <div class="row rless">
                            <div id="feature" class="owl-theme owl-carousel">


                                <div class="multi-row">
                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\40-315x360.jpg" alt="Healthy Lime" title="Healthy Lime" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\22-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>




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
                                                    <h4 class="protitle"><a href="/info_producto">Healthy Lime</a></h4>
                                                    <div class="price">
                                                        $602.00
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('43');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('43');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('43');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\19-315x360.jpg" alt="Pineapple-Golden Jumbo" title="Pineapple-Golden Jumbo" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto" class="img-responsive second-img" alt="hover image"></a>




                                                <!-- End -->

                                            </div>

                                            <div class="caption text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Pineapple-Golden Jumbo</a></h4>
                                                    <div class="price">
                                                        $123.20
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('40');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('40');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('40');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>


                                <div class="multi-row">
                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\1-315x360.jpg" alt="Fresh Avocado" title="Fresh Avocado" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\22-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>






                                                <!-- End -->
                                                <span class="sale">10%</span>

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
                                                        <i class="fa fa-star-o fa-stack-2x"></i>
                                                    </span>
                                                    <span class="fa fa-stack">
                                                        <i class="fa fa-star-o fa-stack-2x"></i>
                                                    </span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Fresh Avocado</a></h4>
                                                    <div class="price">
                                                        <span class="price-new">$110.00</span> <span class="price-old">$122.00</span>
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('42');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\10-315x360.jpg" alt="White Button Mushroom" title="White Button Mushroom" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\2-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>




                                                <!-- End -->
                                                <span class="sale">20%</span>

                                            </div>

                                            <div class="caption text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">White Button Mushroom</a></h4>
                                                    <div class="price">
                                                        <span class="price-new">$98.00</span> <span class="price-old">$122.00</span>
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('30');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>


                                <div class="multi-row">
                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\18-315x360.jpg" alt="Grapes - Green Seedless" title="Grapes - Green Seedless" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\6-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>




                                                <!-- End -->

                                            </div>

                                            <div class="caption text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Grapes - Green Seedless</a></h4>
                                                    <div class="price">
                                                        $122.00
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('41');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('41');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('41');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\22-315x360.jpg" alt="Fresh Green Lemon" title="Fresh Green Lemon" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\9-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>




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
                                                        <i class="fa fa-star-o fa-stack-2x"></i>
                                                    </span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Fresh Green Lemon</a></h4>
                                                    <div class="price">
                                                        $122.00
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('48');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('48');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('48');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>


                                <div class="multi-row">
                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\31-315x360.jpg" alt="Natural raspberry" title="Natural raspberry" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\37-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>




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
                                                        <i class="fa fa-star-o fa-stack-2x"></i>
                                                    </span>
                                                    <span class="fa fa-stack">
                                                        <i class="fa fa-star-o fa-stack-2x"></i>
                                                    </span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Natural raspberry</a></h4>
                                                    <div class="price">
                                                        $122.00
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('36');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('36');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('36');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\3-315x360.jpg" alt="Mangosteen (Per 500 Grams)" title="Mangosteen (Per 500 Grams)" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto" class="img-responsive second-img" alt="hover image"></a>




                                                <!-- End -->
                                                <span class="sale">32%</span>

                                            </div>

                                            <div class="caption text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Mangosteen (Per 500 Grams)</a></h4>
                                                    <div class="price">
                                                        <span class="price-new">$66.80</span> <span class="price-old">$98.00</span>
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('31');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('31');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('31');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>


                                <div class="multi-row">
                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\12-315x360.jpg" alt="Kiwi fruit" title="Kiwi fruit" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\13-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>




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
                                                        <i class="fa fa-star-o fa-stack-2x"></i>
                                                    </span>
                                                    <span class="fa fa-stack">
                                                        <i class="fa fa-star-o fa-stack-2x"></i>
                                                    </span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Kiwi fruit</a></h4>
                                                    <div class="price">
                                                        $1,202.00
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('44');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('44');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('44');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\39-315x360.jpg" alt="Capsicum - Mix Color" title="Capsicum - Mix Color" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\35-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>




                                                <!-- End -->

                                            </div>

                                            <div class="caption text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Capsicum - Mix Color</a></h4>
                                                    <h4 class="protitle"><a href="/info_producto">Capsicum - Mix Color</a></h4>
                                                    <div class="price">
                                                        $2,000.00
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('45');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('45');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('45');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>


                                <div class="multi-row">
                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\15-315x360.jpg" alt="Fresh Organic Onion" title="Fresh Organic Onion" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\36-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>




                                                <!-- End -->

                                            </div>

                                            <div class="caption text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Fresh Organic Onion</a></h4>
                                                    <div class="price">
                                                        $122.00
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('28');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('28');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('28');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <!-- <h1>hii</h1> -->
                                </div>

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

                                <div class="multi-row">

                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\18-315x360.jpg" alt="Grapes - Green Seedless" title="Grapes - Green Seedless" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto" class="img-responsive second-img" alt="hover image"></a>
                                                <!-- Webibazaar Images End -->
                                            </div>

                                            <div class="caption text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Grapes - Green Seedless</a></h4>
                                                    <div class="price">
                                                        $122.00
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('41');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('41');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('41');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\19-315x360.jpg" alt="Pineapple-Golden Jumbo" title="Pineapple-Golden Jumbo" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\36-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
                                                <!-- Webibazaar Images End -->
                                            </div>

                                            <div class="caption text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Pineapple-Golden Jumbo</a></h4>
                                                    <div class="price">
                                                        $123.20
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('40');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('40');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('40');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="multi-row">

                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\11-315x360.jpg" alt="Organic Peaches (4 lbs.)" title="Organic Peaches (4 lbs.)" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\23-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
                                                <!-- Webibazaar Images End -->
                                            </div>

                                            <div class="caption text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Organic Peaches (4 lbs.)</a></h4>
                                                    <div class="price">
                                                        $122.00
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('35');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('35');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('35');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\22-315x360.jpg" alt="Fresh Green Lemon" title="Fresh Green Lemon" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\9-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
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
                                                        <i class="fa fa-star-o fa-stack-2x"></i>
                                                    </span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Fresh Green Lemon</a></h4>
                                                    <div class="price">
                                                        $122.00
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('48');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('48');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('48');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="multi-row">

                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\12-315x360.jpg" alt="Kiwi fruit" title="Kiwi fruit" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\13-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
                                                -->
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
                                                        <i class="fa fa-star-o fa-stack-2x"></i>
                                                    </span>
                                                    <span class="fa fa-stack">
                                                        <i class="fa fa-star-o fa-stack-2x"></i>
                                                    </span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Kiwi fruit</a></h4>
                                                    <div class="price">
                                                        $1,202.00
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('44');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('44');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('44');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\14-315x360.jpg" alt=" Banana - 1 kg " title=" Banana - 1 kg " class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\27-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
                                                <!-- Webibazaar Images End -->
                                            </div>

                                            <div class="caption text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto"> Banana - 1 kg </a></h4>
                                                    <div class="price">
                                                        $122.00
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('47');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('47');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('47');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="multi-row">

                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\15-315x360.jpg" alt="Fresh Organic Onion" title="Fresh Organic Onion" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\36-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
                                                <!-- Webibazaar Images End -->
                                            </div>

                                            <div class="caption text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Fresh Organic Onion</a></h4>
                                                    <div class="price">
                                                        $122.00
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('28');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('28');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('28');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\8-315x360.jpg" alt="Garlic - Organically Grown" title="Garlic - Organically Grown" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\16-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
                                                <!-- Webibazaar Images End -->
                                                <span class="sale">87%</span>
                                            </div>

                                            <div class="caption text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Garlic - Organically Grown</a></h4>
                                                    <div class="price">
                                                        <span class="price-new">$44.00</span> <span class="price-old">$337.99</span>
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('29');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('29');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('29');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="multi-row">

                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\31-315x360.jpg" alt="Natural raspberry" title="Natural raspberry" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\37-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
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
                                                        <i class="fa fa-star-o fa-stack-2x"></i>
                                                    </span>
                                                    <span class="fa fa-stack">
                                                        <i class="fa fa-star-o fa-stack-2x"></i>
                                                    </span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Natural raspberry</a></h4>
                                                    <div class="price">
                                                        $122.00
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('36');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('36');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('36');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\10-315x360.jpg" alt="White Button Mushroom" title="White Button Mushroom" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\2-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
                                                <!-- Webibazaar Images End -->
                                                <span class="sale">20%</span>
                                            </div>

                                            <div class="caption text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">White Button Mushroom</a></h4>
                                                    <div class="price">
                                                        <span class="price-new">$98.00</span> <span class="price-old">$122.00</span>
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('30');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="multi-row">

                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\40-315x360.jpg" alt="Healthy Lime" title="Healthy Lime" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\22-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
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
                                                    <h4 class="protitle"><a href="/info_producto">Healthy Lime</a></h4>
                                                    <div class="price">
                                                        $602.00
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('43');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('43');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('43');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\29-315x360.jpg" alt="Feijoa Fruit" title="Feijoa Fruit" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\1-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
                                                <!-- Webibazaar Images End -->
                                                <span class="sale">11%</span>
                                            </div>

                                            <div class="caption text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Feijoa Fruit</a></h4>
                                                    <div class="price">
                                                        <span class="price-new">$108.80</span> <span class="price-old">$122.00</span>
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('34');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('34');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('34');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>



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

                                <div class="multi-row">

                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\26-315x360.jpg" alt="Sweet Pomegranate" title="Sweet Pomegranate" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto" class="img-responsive second-img" alt="hover image"></a>
                                                <!-- Webibazaar Images End -->
                                            </div>
                                            <div class="caption text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Sweet Pomegranate</a></h4>
                                                    <div class="price">
                                                        $241.99
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('49');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('49');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('49');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\22-315x360.jpg" alt="Fresh Green Lemon" title="Fresh Green Lemon" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\9-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
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
                                                        <i class="fa fa-star-o fa-stack-2x"></i>
                                                    </span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Fresh Green Lemon</a></h4>
                                                    <div class="price">
                                                        $122.00
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('48');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('48');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('48');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="multi-row">

                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\14-315x360.jpg" alt=" Banana - 1 kg " title=" Banana - 1 kg " class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\27-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
                                                <!-- Webibazaar Images End -->
                                            </div>
                                            <div class="caption text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto"> Banana - 1 kg </a></h4>
                                                    <div class="price">
                                                        $122.00
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('47');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('47');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('47');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\4-315x360.jpg" alt="Red Barhi dates" title="Red Barhi dates" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\15-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
                                                <!-- Webibazaar Images End -->
                                            </div>
                                            <div class="caption text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Red Barhi dates</a></h4>
                                                    <div class="price">
                                                        $1,202.00
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('46');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('46');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('46');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="multi-row">

                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\39-315x360.jpg" alt="Capsicum - Mix Color" title="Capsicum - Mix Color" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\35-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
                                                <!-- Webibazaar Images End -->
                                            </div>
                                            <div class="caption text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Capsicum - Mix Color</a></h4>
                                                    <div class="price">
                                                        $2,000.00
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('45');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('45');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('45');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\12-315x360.jpg" alt="Kiwi fruit" title="Kiwi fruit" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\13-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
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
                                                        <i class="fa fa-star-o fa-stack-2x"></i>
                                                    </span>
                                                    <span class="fa fa-stack">
                                                        <i class="fa fa-star-o fa-stack-2x"></i>
                                                    </span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Kiwi fruit</a></h4>
                                                    <div class="price">
                                                        $1,202.00
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('44');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('44');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('44');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="multi-row">

                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\40-315x360.jpg" alt="Healthy Lime" title="Healthy Lime" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\22-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
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
                                                    <h4 class="protitle"><a href="/info_producto">Healthy Lime</a></h4>
                                                    <div class="price">
                                                        $602.00
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('43');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('43');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('43');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\1-315x360.jpg" alt="Fresh Avocado" title="Fresh Avocado" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\22-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
                                                <!-- Webibazaar Images End -->
                                                <span class="sale">10%</span>
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
                                                        <i class="fa fa-star-o fa-stack-2x"></i>
                                                    </span>
                                                    <span class="fa fa-stack">
                                                        <i class="fa fa-star-o fa-stack-2x"></i>
                                                    </span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Fresh Avocado</a></h4>
                                                    <div class="price">
                                                        <span class="price-new">$110.00</span> <span class="price-old">$122.00</span>
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('42');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="multi-row">

                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\18-315x360.jpg" alt="Grapes - Green Seedless" title="Grapes - Green Seedless" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\6-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
                                                <!-- Webibazaar Images End -->
                                            </div>
                                            <div class="caption text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Grapes - Green Seedless</a></h4>
                                                    <div class="price">
                                                        $122.00
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('41');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('41');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('41');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\19-315x360.jpg" alt="Pineapple-Golden Jumbo" title="Pineapple-Golden Jumbo" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\36-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
                                                <!-- Webibazaar Images End -->
                                            </div>
                                            <div class="caption text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Pineapple-Golden Jumbo</a></h4>
                                                    <div class="price">
                                                        $123.20
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('40');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('40');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('40');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="multi-row">

                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\31-315x360.jpg" alt="Natural raspberry" title="Natural raspberry" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\37-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
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
                                                        <i class="fa fa-star-o fa-stack-2x"></i>
                                                    </span>
                                                    <span class="fa fa-stack">
                                                        <i class="fa fa-star-o fa-stack-2x"></i>
                                                    </span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Natural raspberry</a></h4>
                                                    <div class="price">
                                                        $122.00
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('36');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('36');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('36');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="product-layout col-xs-12 cless">
                                        <div class="product-thumb transition">
                                            <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\11-315x360.jpg" alt="Organic Peaches (4 lbs.)" title="Organic Peaches (4 lbs.)" class="img-responsive center-block"></a>
                                                <!-- Webibazaar Images Start -->
                                                <a href="/info_producto"><img src="image\cache\catalog\product\23-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
                                                <!-- Webibazaar Images End -->
                                            </div>
                                            <div class="caption text-center">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                                <div class="opbtn">
                                                    <h4 class="protitle"><a href="/info_producto">Organic Peaches (4 lbs.)</a></h4>
                                                    <div class="price">
                                                        $122.00
                                                    </div>
                                                </div>


                                                <div class="button-group">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('35');"><svg>
                                                            <use xlink:href="#heart"></use>
                                                        </svg></button>
                                                    <button type="button" data-toggle="tooltip" onclick="cart.add('35');" title="Add to Cart" class="cartb"><svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg><span></span></button>
                                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('35');"><svg>
                                                            <use xlink:href="#compare"></use>
                                                        </svg></button>
                                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>



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


                <div class="offrow">
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
                    <h1 class="heading text-center"><span>Specials</span></h1>
                    <div class="row rless">
                        <div id="special" class="owl-theme owl-carousel">
                            <div class="product-layout col-xs-12 cless">
                                <div class="product-thumb transition">
                                    <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\29-315x360.jpg" alt="Feijoa Fruit" title="Feijoa Fruit" class="img-responsive center-block"></a>
                                        <!-- Webiarch Images Start -->
                                        <a href="/info_producto"><img src="image\cache\catalog\product\1-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
                                        <!-- Webiarch Images End -->
                                        <span class="sale">11%</span>

                                    </div>
                                    <div class="caption text-center">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <div class="opbtn">
                                            <h4 class="protitle"><a href="/info_producto">Feijoa Fruit</a></h4>
                                            <div class="price">
                                                <span class="price-new">$108.80</span> <span class="price-old">$122.00</span>
                                            </div>
                                        </div>


                                        <div class="button-group">
                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('34');"><svg>
                                                    <use xlink:href="#heart"></use>
                                                </svg></button>
                                            <button type="button" data-toggle="tooltip" onclick="cart.add('34');" title="Add to Cart" class="cartb"><svg>
                                                    <use xlink:href="#pcart"></use>
                                                </svg><span></span></button>
                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('34');"><svg>
                                                    <use xlink:href="#compare"></use>
                                                </svg></button>
                                            <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="product-layout col-xs-12 cless">
                                <div class="product-thumb transition">
                                    <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\25-315x360.jpg" alt="Fresh Apricot" title="Fresh Apricot" class="img-responsive center-block"></a>
                                        <!-- Webiarch Images Start -->
                                        <a href="/info_producto"><img src="image\cache\catalog\product\28-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
                                        <!-- Webiarch Images End -->
                                        <span class="sale">59%</span>

                                    </div>
                                    <div class="caption text-center">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <div class="opbtn">
                                            <h4 class="protitle"><a href="/info_producto">Fresh Apricot</a></h4>
                                            <div class="price">
                                                <span class="price-new">$51.20</span> <span class="price-old">$122.00</span>
                                            </div>
                                        </div>


                                        <div class="button-group">
                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('32');"><svg>
                                                    <use xlink:href="#heart"></use>
                                                </svg></button>
                                            <button type="button" data-toggle="tooltip" onclick="cart.add('32');" title="Add to Cart" class="cartb"><svg>
                                                    <use xlink:href="#pcart"></use>
                                                </svg><span></span></button>
                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('32');"><svg>
                                                    <use xlink:href="#compare"></use>
                                                </svg></button>
                                            <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="product-layout col-xs-12 cless">
                                <div class="product-thumb transition">
                                    <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\1-315x360.jpg" alt="Fresh Avocado" title="Fresh Avocado" class="img-responsive center-block"></a>
                                        <!-- Webiarch Images Start -->
                                        <a href="/info_producto"><img src="image\cache\catalog\product\22-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
                                        <!-- Webiarch Images End -->
                                        <span class="sale">10%</span>

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
                                                <i class="fa fa-star-o fa-stack-2x"></i>
                                            </span>
                                            <span class="fa fa-stack">
                                                <i class="fa fa-star-o fa-stack-2x"></i>
                                            </span>
                                        </div>
                                        <div class="opbtn">
                                            <h4 class="protitle"><a href="/info_producto">Fresh Avocado</a></h4>
                                            <div class="price">
                                                <span class="price-new">$110.00</span> <span class="price-old">$122.00</span>
                                            </div>
                                        </div>


                                        <div class="button-group">
                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><svg>
                                                    <use xlink:href="#heart"></use>
                                                </svg></button>
                                            <button type="button" data-toggle="tooltip" onclick="cart.add('42');" title="Add to Cart" class="cartb"><svg>
                                                    <use xlink:href="#pcart"></use>
                                                </svg><span></span></button>
                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><svg>
                                                    <use xlink:href="#compare"></use>
                                                </svg></button>
                                            <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="product-layout col-xs-12 cless">
                                <div class="product-thumb transition">
                                    <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\8-315x360.jpg" alt="Garlic - Organically Grown" title="Garlic - Organically Grown" class="img-responsive center-block"></a>
                                        <!-- Webiarch Images Start -->
                                        <a href="/info_producto"><img src="image\cache\catalog\product\16-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
                                        <!-- Webiarch Images End -->
                                        <span class="sale">87%</span>

                                    </div>
                                    <div class="caption text-center">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <div class="opbtn">
                                            <h4 class="protitle"><a href="/info_producto">Garlic - Organically Grown</a></h4>
                                            <div class="price">
                                                <span class="price-new">$44.00</span> <span class="price-old">$337.99</span>
                                            </div>
                                        </div>


                                        <div class="button-group">
                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('29');"><svg>
                                                    <use xlink:href="#heart"></use>
                                                </svg></button>
                                            <button type="button" data-toggle="tooltip" onclick="cart.add('29');" title="Add to Cart" class="cartb"><svg>
                                                    <use xlink:href="#pcart"></use>
                                                </svg><span></span></button>
                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('29');"><svg>
                                                    <use xlink:href="#compare"></use>
                                                </svg></button>
                                            <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="product-layout col-xs-12 cless">
                                <div class="product-thumb transition">
                                    <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\5-315x360.jpg" alt="Green Kohlrabi" title="Green Kohlrabi" class="img-responsive center-block"></a>
                                        <!-- Webiarch Images Start -->
                                        <a href="/info_producto"><img src="image\cache\catalog\product\21-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
                                        <!-- Webiarch Images End -->
                                        <span class="sale">79%</span>

                                    </div>
                                    <div class="caption text-center">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <div class="opbtn">
                                            <h4 class="protitle"><a href="/info_producto">Green Kohlrabi</a></h4>
                                            <div class="price">
                                                <span class="price-new">$52.40</span> <span class="price-old">$242.00</span>
                                            </div>
                                        </div>


                                        <div class="button-group">
                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('33');"><svg>
                                                    <use xlink:href="#heart"></use>
                                                </svg></button>
                                            <button type="button" data-toggle="tooltip" onclick="cart.add('33');" title="Add to Cart" class="cartb"><svg>
                                                    <use xlink:href="#pcart"></use>
                                                </svg><span></span></button>
                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('33');"><svg>
                                                    <use xlink:href="#compare"></use>
                                                </svg></button>
                                            <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="product-layout col-xs-12 cless">
                                <div class="product-thumb transition">
                                    <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\3-315x360.jpg" alt="Mangosteen (Per 500 Grams)" title="Mangosteen (Per 500 Grams)" class="img-responsive center-block"></a>
                                        <!-- Webiarch Images Start -->
                                        <a href="/info_producto"><img src="image\cache\catalog\product\29-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
                                        <!-- Webiarch Images End -->
                                        <span class="sale">32%</span>

                                    </div>
                                    <div class="caption text-center">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <div class="opbtn">
                                            <h4 class="protitle"><a href="/info_producto">Mangosteen (Per 500 Grams)</a></h4>
                                            <div class="price">
                                                <span class="price-new">$66.80</span> <span class="price-old">$98.00</span>
                                            </div>
                                        </div>


                                        <div class="button-group">
                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('31');"><svg>
                                                    <use xlink:href="#heart"></use>
                                                </svg></button>
                                            <button type="button" data-toggle="tooltip" onclick="cart.add('31');" title="Add to Cart" class="cartb"><svg>
                                                    <use xlink:href="#pcart"></use>
                                                </svg><span></span></button>
                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('31');"><svg>
                                                    <use xlink:href="#compare"></use>
                                                </svg></button>
                                            <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="product-layout col-xs-12 cless">
                                <div class="product-thumb transition">
                                    <div class="image"><a href="/info_producto"><img src="image\cache\catalog\product\10-315x360.jpg" alt="White Button Mushroom" title="White Button Mushroom" class="img-responsive center-block"></a>
                                        <!-- Webiarch Images Start -->
                                        <a href="/info_producto"><img src="image\cache\catalog\product\2-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
                                        <!-- Webiarch Images End -->
                                        <span class="sale">20%</span>

                                    </div>
                                    <div class="caption text-center">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <div class="opbtn">
                                            <h4 class="protitle"><a href="/info_producto">White Button Mushroom</a></h4>
                                            <div class="price">
                                                <span class="price-new">$98.00</span> <span class="price-old">$122.00</span>
                                            </div>
                                        </div>


                                        <div class="button-group">
                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><svg>
                                                    <use xlink:href="#heart"></use>
                                                </svg></button>
                                            <button type="button" data-toggle="tooltip" onclick="cart.add('30');" title="Add to Cart" class="cartb"><svg>
                                                    <use xlink:href="#pcart"></use>
                                                </svg><span></span></button>
                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><svg>
                                                    <use xlink:href="#compare"></use>
                                                </svg></button>
                                            <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
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