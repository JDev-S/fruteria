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
                <a href="/tienda" class="list-group-item">Frutas</a>
                <a href="/tienda" class="list-group-item">Chiles</a>

                <a href="/tienda" class="list-group-item active">Verduras</a>
                 <a href="/tienda" class="list-group-item active">Granos y otros</a>
                
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
                        <button type="button" id="list-view" class="btn listgridbtn" data-toggle="tooltip" title="" data-original-title="List">
                            <svg width="20px" height="20px">
                                <use xlink:href="#clist"></use>
                            </svg>
                        </button>
                        <button type="button" id="grid-view" class="btn listgridbtn active" data-toggle="tooltip" title="" data-original-title="Grid">
                            <svg width="18px" height="18px">
                                <use xlink:href="#cgrid"></use>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5 col-xs-4 col-sm-5 catesort">
                    <div class="input-group input-group-sm select-input">
                        <label class="input-group-addon" for="input-sort">Sort By:</label>

                        <select id="input-sort" class="form-control" onchange="location = this.value;">
                            <option value="/tienda">Default</option>
                            <option value="/tienda">Name (A - Z)</option>
                            <option value="/tienda">Name (Z - A)</option>
                            <option value="/tienda">Price (Low &gt; High)</option>
                            <option value="/tienda">Price (High &gt; Low)</option>
                            <option value="/tienda">Rating (Highest)</option>
                            <option value="/tienda">Rating (Lowest)</option>
                            <option value="/tienda">Model (A - Z)</option>
                            <option value="/tienda">Model (Z - A)</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-xs-4 col-sm-4 catesort">
                    <div class="input-group input-group-sm select-input">
                        <label class="input-group-addon" for="input-limit">Show:</label>
                        <select id="input-limit" class="form-control" onchange="location = this.value;">
                            <option value="/tienda" selected="selected">12</option>
                            <option value="/tienda">25</option>
                            <option value="/tienda">50</option>
                            <option value="/tienda">75</option>
                            <option value="/tienda">100</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row cpagerow">
                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="product-thumb transition">
                        <div class="image"><a href="/info_producto"><img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/product/14-315x360.jpg" alt=" Banana - 1 kg " title=" Banana - 1 kg " class="img-responsive center-block"></a>
                            <!-- Webibazaar Images Start -->
                            <a href="/info_producto"><img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/product/27-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
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
                                <p class="catlist-des">Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel Monitor. This flagship monitor features best-in-class performance and presentation features on a huge wide-aspect screen while lettin..</p>
                                <div class="price">
                                    $122.00
                                </div>
                            </div>


                            <div class="button-group">
                                <button type="button" data-toggle="tooltip" title="" onclick="wishlist.add('47');" data-original-title="Add to Wish List"><svg>
                                        <use xlink:href="#heart"></use>
                                    </svg></button>
                                <button type="button" data-toggle="tooltip" onclick="cart.add('47');" title="" class="cartb" data-original-title="Add to Cart"><svg>
                                        <use xlink:href="#pcart"></use>
                                    </svg><span></span></button>
                                <button type="button" data-toggle="tooltip" title="" onclick="compare.add('47');" data-original-title="Compare this Product"><svg>
                                        <use xlink:href="#compare"></use>
                                    </svg></button>
                                <div data-toggle="tooltip" title="" class="bquickv" data-original-title="Quickview">
                                    <div class="webi-ownstyle webi-quickview"><a href="#"><svg width="18px" height="17px">
                                                <use xlink:href="#bquick"></use>
                                            </svg></a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="product-thumb transition">
                        <div class="image"><a href="/info_producto"><img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/product/1-315x360.jpg" alt="Fresh Avocado" title="Fresh Avocado" class="img-responsive center-block"></a>
                            <!-- Webibazaar Images Start -->
                            <a href="/info_producto"><img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/product/22-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
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
                                <p class="catlist-des">FCC Part 15 Class B

                                    EN55022 Class B

                                    EN55024

                                    VCCI Class B

                                    AS/NZS 3548 Class B

                                    CNS 13438 Class B

                                    ICES-003 Class B

                                    ISO 13406 part 2

                                    MPR II

                                    IEC 60950

                                    UL 60950

                                    CSA 60950..</p>
                                <div class="price">
                                    <span class="price-new">$110.00</span> <span class="price-old">$122.00</span>
                                </div>
                            </div>


                            <div class="button-group">
                                <button type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><svg>
                                        <use xlink:href="#heart"></use>
                                    </svg></button>
                                <button type="button" data-toggle="tooltip" onclick="cart.add('42');" title="" class="cartb" data-original-title="Add to Cart"><svg>
                                        <use xlink:href="#pcart"></use>
                                    </svg><span></span></button>
                                <button type="button" data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><svg>
                                        <use xlink:href="#compare"></use>
                                    </svg></button>
                                <div data-toggle="tooltip" title="" class="bquickv" data-original-title="Quickview">
                                    <div class="webi-ownstyle webi-quickview"><a href="#"><svg width="18px" height="17px">
                                                <use xlink:href="#bquick"></use>
                                            </svg></a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="product-thumb transition">
                        <div class="image"><a href="/info_producto"><img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/product/22-315x360.jpg" alt="Fresh Green Lemon" title="Fresh Green Lemon" class="img-responsive center-block"></a>
                            <!-- Webibazaar Images Start -->
                            <a href="/info_producto"><img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/product/9-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
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
                                <p class="catlist-des">More room to move.

                                    With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

                                    Cover Flow..</p>
                                <div class="price">
                                    $122.00
                                </div>
                            </div>


                            <div class="button-group">
                                <button type="button" data-toggle="tooltip" title="" onclick="wishlist.add('48');" data-original-title="Add to Wish List"><svg>
                                        <use xlink:href="#heart"></use>
                                    </svg></button>
                                <button type="button" data-toggle="tooltip" onclick="cart.add('48');" title="" class="cartb" data-original-title="Add to Cart"><svg>
                                        <use xlink:href="#pcart"></use>
                                    </svg><span></span></button>
                                <button type="button" data-toggle="tooltip" title="" onclick="compare.add('48');" data-original-title="Compare this Product"><svg>
                                        <use xlink:href="#compare"></use>
                                    </svg></button>
                                <div data-toggle="tooltip" title="" class="bquickv" data-original-title="Quickview">
                                    <div class="webi-ownstyle webi-quickview"><a href="#"><svg width="18px" height="17px">
                                                <use xlink:href="#bquick"></use>
                                            </svg></a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="product-thumb transition">
                        <div class="image"><a href="/info_producto"><img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/product/15-315x360.jpg" alt="Fresh Organic Onion" title="Fresh Organic Onion" class="img-responsive center-block"></a>
                            <!-- Webibazaar Images Start -->
                            <a href="/info_producto"><img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/product/36-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
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
                                <p class="catlist-des">HTC Touch - in High Definition. Watch music videos and streaming content in awe-inspiring high definition clarity for a mobile experience you never thought possible. Seductively sleek, the HTC Touch HD provides the next generation..</p>
                                <div class="price">
                                    $122.00
                                </div>
                            </div>


                            <div class="button-group">
                                <button type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List"><svg>
                                        <use xlink:href="#heart"></use>
                                    </svg></button>
                                <button type="button" data-toggle="tooltip" onclick="cart.add('28');" title="" class="cartb" data-original-title="Add to Cart"><svg>
                                        <use xlink:href="#pcart"></use>
                                    </svg><span></span></button>
                                <button type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare this Product"><svg>
                                        <use xlink:href="#compare"></use>
                                    </svg></button>
                                <div data-toggle="tooltip" title="" class="bquickv" data-original-title="Quickview">
                                    <div class="webi-ownstyle webi-quickview"><a href="#"><svg width="18px" height="17px">
                                                <use xlink:href="#bquick"></use>
                                            </svg></a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="product-thumb transition">
                        <div class="image"><a href="/info_producto"><img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/product/8-315x360.jpg" alt="Garlic - Organically Grown" title="Garlic - Organically Grown" class="img-responsive center-block"></a>
                            <!-- Webibazaar Images Start -->
                            <a href="/info_producto"><img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/product/16-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
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
                                <p class="catlist-des">Redefine your workday with the Palm Treo Pro smartphone. Perfectly balanced, you can respond to business and personal email, stay on top of appointments and contacts, and use Wi-Fi or GPS when you’re out and about. Then watc..</p>
                                <div class="price">
                                    <span class="price-new">$44.00</span> <span class="price-old">$337.99</span>
                                </div>
                            </div>


                            <div class="button-group">
                                <button type="button" data-toggle="tooltip" title="" onclick="wishlist.add('29');" data-original-title="Add to Wish List"><svg>
                                        <use xlink:href="#heart"></use>
                                    </svg></button>
                                <button type="button" data-toggle="tooltip" onclick="cart.add('29');" title="" class="cartb" data-original-title="Add to Cart"><svg>
                                        <use xlink:href="#pcart"></use>
                                    </svg><span></span></button>
                                <button type="button" data-toggle="tooltip" title="" onclick="compare.add('29');" data-original-title="Compare this Product"><svg>
                                        <use xlink:href="#compare"></use>
                                    </svg></button>
                                <div data-toggle="tooltip" title="" class="bquickv" data-original-title="Quickview">
                                    <div class="webi-ownstyle webi-quickview"><a href="#"><svg width="18px" height="17px">
                                                <use xlink:href="#bquick"></use>
                                            </svg></a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="product-thumb transition">
                        <div class="image"><a href="/info_producto"><img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/product/5-315x360.jpg" alt="Green Kohlrabi" title="Green Kohlrabi" class="img-responsive center-block"></a>
                            <!-- Webibazaar Images Start -->
                            <a href="/info_producto"><img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/product/21-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
                            <!-- Webibazaar Images End -->
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
                                <p class="catlist-des">Imagine the advantages of going big without slowing down. The big 19" 941BW monitor combines wide aspect ratio with fast pixel response time, for bigger images, more room to work and crisp motion. In addition, the exclusive M..</p>
                                <div class="price">
                                    <span class="price-new">$52.40</span> <span class="price-old">$242.00</span>
                                </div>
                            </div>


                            <div class="button-group">
                                <button type="button" data-toggle="tooltip" title="" onclick="wishlist.add('33');" data-original-title="Add to Wish List"><svg>
                                        <use xlink:href="#heart"></use>
                                    </svg></button>
                                <button type="button" data-toggle="tooltip" onclick="cart.add('33');" title="" class="cartb" data-original-title="Add to Cart"><svg>
                                        <use xlink:href="#pcart"></use>
                                    </svg><span></span></button>
                                <button type="button" data-toggle="tooltip" title="" onclick="compare.add('33');" data-original-title="Compare this Product"><svg>
                                        <use xlink:href="#compare"></use>
                                    </svg></button>
                                <div data-toggle="tooltip" title="" class="bquickv" data-original-title="Quickview">
                                    <div class="webi-ownstyle webi-quickview"><a href="#"><svg width="18px" height="17px">
                                                <use xlink:href="#bquick"></use>
                                            </svg></a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="product-thumb transition">
                        <div class="image"><a href="/info_producto"><img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/product/40-315x360.jpg" alt="Healthy Lime" title="Healthy Lime" class="img-responsive center-block"></a>
                            <!-- Webibazaar Images Start -->
                            <a href="/info_producto"><img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/product/22-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
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
                                <p class="catlist-des">Intel Core 2 Duo processor

                                    Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever.

                                    1GB memory, larger hard drives

                                    The new MacBook now comes with 1GB of memory standa..</p>
                                <div class="price">
                                    $602.00
                                </div>
                            </div>


                            <div class="button-group">
                                <button type="button" data-toggle="tooltip" title="" onclick="wishlist.add('43');" data-original-title="Add to Wish List"><svg>
                                        <use xlink:href="#heart"></use>
                                    </svg></button>
                                <button type="button" data-toggle="tooltip" onclick="cart.add('43');" title="" class="cartb" data-original-title="Add to Cart"><svg>
                                        <use xlink:href="#pcart"></use>
                                    </svg><span></span></button>
                                <button type="button" data-toggle="tooltip" title="" onclick="compare.add('43');" data-original-title="Compare this Product"><svg>
                                        <use xlink:href="#compare"></use>
                                    </svg></button>
                                <div data-toggle="tooltip" title="" class="bquickv" data-original-title="Quickview">
                                    <div class="webi-ownstyle webi-quickview"><a href="#"><svg width="18px" height="17px">
                                                <use xlink:href="#bquick"></use>
                                            </svg></a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="product-thumb transition">
                        <div class="image"><a href="/info_producto"><img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/product/12-315x360.jpg" alt="Kiwi fruit" title="Kiwi fruit" class="img-responsive center-block"></a>
                            <!-- Webibazaar Images Start -->
                            <a href="/info_producto"><img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/product/13-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
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
                                <p class="catlist-des">MacBook Air is ultrathin, ultraportable, and ultra unlike anything else. But you don’t lose inches and pounds overnight. It’s the result of rethinking conventions. Of multiple wireless innovations. And of breakthrough ..</p>
                                <div class="price">
                                    $1,202.00
                                </div>
                            </div>


                            <div class="button-group">
                                <button type="button" data-toggle="tooltip" title="" onclick="wishlist.add('44');" data-original-title="Add to Wish List"><svg>
                                        <use xlink:href="#heart"></use>
                                    </svg></button>
                                <button type="button" data-toggle="tooltip" onclick="cart.add('44');" title="" class="cartb" data-original-title="Add to Cart"><svg>
                                        <use xlink:href="#pcart"></use>
                                    </svg><span></span></button>
                                <button type="button" data-toggle="tooltip" title="" onclick="compare.add('44');" data-original-title="Compare this Product"><svg>
                                        <use xlink:href="#compare"></use>
                                    </svg></button>
                                <div data-toggle="tooltip" title="" class="bquickv" data-original-title="Quickview">
                                    <div class="webi-ownstyle webi-quickview"><a href="#"><svg width="18px" height="17px">
                                                <use xlink:href="#bquick"></use>
                                            </svg></a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="product-thumb transition">
                        <div class="image"><a href="/info_producto"><img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/product/3-315x360.jpg" alt="Mangosteen (Per 500 Grams)" title="Mangosteen (Per 500 Grams)" class="img-responsive center-block"></a>
                            <!-- Webibazaar Images Start -->
                            <a href="/info_producto"><img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/product/29-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
                            <!-- Webibazaar Images End -->
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
                                <p class="catlist-des">Engineered with pro-level features and performance, the 12.3-effective-megapixel D300 combines brand new technologies with advanced features inherited from Nikon's newly announced D3 professional digital SLR camera to offer se..</p>
                                <div class="price">
                                    <span class="price-new">$66.80</span> <span class="price-old">$98.00</span>
                                </div>
                            </div>


                            <div class="button-group">
                                <button type="button" data-toggle="tooltip" title="" onclick="wishlist.add('31');" data-original-title="Add to Wish List"><svg>
                                        <use xlink:href="#heart"></use>
                                    </svg></button>
                                <button type="button" data-toggle="tooltip" onclick="cart.add('31');" title="" class="cartb" data-original-title="Add to Cart"><svg>
                                        <use xlink:href="#pcart"></use>
                                    </svg><span></span></button>
                                <button type="button" data-toggle="tooltip" title="" onclick="compare.add('31');" data-original-title="Compare this Product"><svg>
                                        <use xlink:href="#compare"></use>
                                    </svg></button>
                                <div data-toggle="tooltip" title="" class="bquickv" data-original-title="Quickview">
                                    <div class="webi-ownstyle webi-quickview"><a href="#"><svg width="18px" height="17px">
                                                <use xlink:href="#bquick"></use>
                                            </svg></a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="product-thumb transition">
                        <div class="image"><a href="/info_producto"><img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/product/11-315x360.jpg" alt="Organic Peaches (4 lbs.)" title="Organic Peaches (4 lbs.)" class="img-responsive center-block"></a>
                            <!-- Webibazaar Images Start -->
                            <a href="/info_producto"><img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/product/23-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
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
                                <p class="catlist-des">Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean leo nulla, viverra at felis at, tincidunt lacinia leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque non ef..</p>
                                <div class="price">
                                    $122.00
                                </div>
                            </div>


                            <div class="button-group">
                                <button type="button" data-toggle="tooltip" title="" onclick="wishlist.add('35');" data-original-title="Add to Wish List"><svg>
                                        <use xlink:href="#heart"></use>
                                    </svg></button>
                                <button type="button" data-toggle="tooltip" onclick="cart.add('35');" title="" class="cartb" data-original-title="Add to Cart"><svg>
                                        <use xlink:href="#pcart"></use>
                                    </svg><span></span></button>
                                <button type="button" data-toggle="tooltip" title="" onclick="compare.add('35');" data-original-title="Compare this Product"><svg>
                                        <use xlink:href="#compare"></use>
                                    </svg></button>
                                <div data-toggle="tooltip" title="" class="bquickv" data-original-title="Quickview">
                                    <div class="webi-ownstyle webi-quickview"><a href="#"><svg width="18px" height="17px">
                                                <use xlink:href="#bquick"></use>
                                            </svg></a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="product-thumb transition">
                        <div class="image"><a href="/info_producto"><img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/product/19-315x360.jpg" alt="Pineapple-Golden Jumbo" title="Pineapple-Golden Jumbo" class="img-responsive center-block"></a>
                            <!-- Webibazaar Images Start -->
                            <a href="/info_producto"><img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/product/36-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
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
                                <h4 class="protitle"><a href="https://madebyhand.in/opencart/FS03/Fashion01/index.php?route=product/product&amp;path=20&amp;product_id=40">Pineapple-Golden Jumbo</a></h4>
                                <p class="catlist-des">iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a name or number in your address book, a favorites list, or a call log. It also automatically syncs all your contacts from a PC, Mac, or I..</p>
                                <div class="price">
                                    $123.20
                                </div>
                            </div>


                            <div class="button-group">
                                <button type="button" data-toggle="tooltip" title="" onclick="wishlist.add('40');" data-original-title="Add to Wish List"><svg>
                                        <use xlink:href="#heart"></use>
                                    </svg></button>
                                <button type="button" data-toggle="tooltip" onclick="cart.add('40');" title="" class="cartb" data-original-title="Add to Cart"><svg>
                                        <use xlink:href="#pcart"></use>
                                    </svg><span></span></button>
                                <button type="button" data-toggle="tooltip" title="" onclick="compare.add('40');" data-original-title="Compare this Product"><svg>
                                        <use xlink:href="#compare"></use>
                                    </svg></button>
                                <div data-toggle="tooltip" title="" class="bquickv" data-original-title="Quickview">
                                    <div class="webi-ownstyle webi-quickview"><a href="#"><svg width="18px" height="17px">
                                                <use xlink:href="#bquick"></use>
                                            </svg></a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="product-thumb transition">
                        <div class="image"><a href="/info_producto"><img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/product/4-315x360.jpg" alt="Red Barhi dates" title="Red Barhi dates" class="img-responsive center-block"></a>
                            <!-- Webibazaar Images Start -->
                            <a href="/info_producto"><img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/product/15-315x360.jpg" class="img-responsive second-img" alt="hover image"></a>
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
                                <p class="catlist-des">Unprecedented power. The next generation of processing technology has arrived. Built into the newest VAIO notebooks lies Intel's latest, most powerful innovation yet: Intel® Centrino® 2 processor technology. Boasting i..</p>
                                <div class="price">
                                    $1,202.00
                                </div>
                            </div>


                            <div class="button-group">
                                <button type="button" data-toggle="tooltip" title="" onclick="wishlist.add('46');" data-original-title="Add to Wish List"><svg>
                                        <use xlink:href="#heart"></use>
                                    </svg></button>
                                <button type="button" data-toggle="tooltip" onclick="cart.add('46');" title="" class="cartb" data-original-title="Add to Cart"><svg>
                                        <use xlink:href="#pcart"></use>
                                    </svg><span></span></button>
                                <button type="button" data-toggle="tooltip" title="" onclick="compare.add('46');" data-original-title="Compare this Product"><svg>
                                        <use xlink:href="#compare"></use>
                                    </svg></button>
                                <div data-toggle="tooltip" title="" class="bquickv" data-original-title="Quickview">
                                    <div class="webi-ownstyle webi-quickview"><a href="#"><svg width="18px" height="17px">
                                                <use xlink:href="#bquick"></use>
                                            </svg></a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row pagi">
                <div class="col-sm-6 col-xs-6 text-left">
                    <ul class="pagination">
                        <li class="active"><span>1</span></li>
                        <li><a href="/tienda">2</a></li>
                        <li><a href="/tienda">&gt;</a></li>
                        <li><a href="/tienda">&gt;|</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-xs-6 text-right tot">Showing 1 to 12 of 13 (2 Pages)</div>
            </div>
        </div>
    </div>
</div>
@stop
