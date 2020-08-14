@extends('welcome')
@section('contenido')
<div id="content" class="col-xs-12 acpage">
    <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="/carrito">Carrito</a></li>
    </ul>

    <div class="infobg">

        <h1>Shopping Cart
            &nbsp;(1.00kg)
        </h1>
        <form  method="post" enctype="multipart/form-data">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td class="text-center">Image</td>
                            <td class="text-left">Product Name</td>
                            <td class="text-left">Model</td>
                            <td class="text-left">Quantity</td>
                            <td class="text-right">Unit Price</td>
                            <td class="text-right">Total</td>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td class="text-center"> <a href="https://madebyhand.in/opencart/FS03/Fashion01/index.php?route=product/product&amp;product_id=47"><img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/product/14-60x60.jpg" alt=" Banana - 1 kg " title=" Banana - 1 kg " class="img-thumbnail"></a> </td>
                            <td class="text-left"><a href="https://madebyhand.in/opencart/FS03/Fashion01/index.php?route=product/product&amp;product_id=47"> Banana - 1 kg </a> <br>
                                <small>Delivery Date: 2011-04-22</small> <br>
                                <small>Reward Points: 300</small> </td>
                            <td class="text-left">Product 21</td>
                            <td class="text-left">
                                <div class="input-group btn-block" style="width: 200px;">
                                    <input type="text" name="quantity[89]" value="1" size="1" class="form-control">
                                    <span class="input-group-btn cartpsp">
                                        <button type="submit" data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="Update"><i class="fa fa-refresh"></i></button>
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-danger" onclick="cart.remove('89');" data-original-title="Remove"><i class="fa fa-times-circle"></i></button>
                                    </span></div>
                            </td>
                            <td class="text-right">$122.00</td>
                            <td class="text-right">$122.00</td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </form>
       
       
        <br>
        <div class="row">
            <div class="col-lg-8 col-xs-12 col-md-6"></div>
            <div class="col-lg-4 col-xs-12 col-sm-12 col-md-6">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td class="text-right"><strong>Sub-Total:</strong></td>
                            <td class="text-right">$100.00</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Eco Tax (-2.00):</strong></td>
                            <td class="text-right">$2.00</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>VAT (20%):</strong></td>
                            <td class="text-right">$20.00</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Total:</strong></td>
                            <td class="text-right">$122.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="buttons clearfix">
            <div class="pull-left"><a href="/tienda">Continuar comprando</a></div>
            <div class="pull-right"><a href="/pagar" class="btn btn-primary">Pagar</a></div>
        </div>
    </div>
</div>
@stop
