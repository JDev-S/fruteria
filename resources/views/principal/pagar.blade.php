@extends('welcome')
@section('contenido')

<div id="content" class="col-xs-12 acpage">
          <ul class="breadcrumb">
                        <li><a href="/"><i class="fa fa-home"></i></a></li>
                        <li><a href="/carrito"></a></li>Carrito
                        <li><a href="/pagar">Pagar</a></li>
                      </ul>
          <div class="infobg">
      <h1>Checkout</h1>
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a href="#collapse-checkout-option" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle" aria-expanded="true">Step 1: Checkout Options <i class="fa fa-caret-down"></i></a></h4>
          </div>
          <div class="panel-collapse collapse in" id="collapse-checkout-option" aria-expanded="true" style="">
            <div class="panel-body"><div class="row">

  <div class="col-sm-6">
    <h2>Inicia sesion</h2>
    <p>Debes inicar sesion para poder pagar</p>
    <div class="form-group">
      <label class="control-label" for="input-email">Correo</label>
      <input type="text" name="email" value="" placeholder="Correo" id="input-email" class="form-control">
    </div>
    <div class="form-group">
      <label class="control-label" for="input-password">Contrasema</label>
      <input type="password" name="password" value="" placeholder="Contraseña" id="input-password" class="form-control">
      <a href="/pagar">Olvide contraseña</a></div>
    <input type="button" value="Login" id="button-login" data-loading-text="Loading..." class="btn btn-primary">
  </div>
</div>
</div>
          </div>
        </div>


      </div>
      </div></div>
@stop