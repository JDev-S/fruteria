@extends('welcome')
@section('contenido')

<div id="account-register" class="container acpage">
        <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="/iniciar_sesion">Cuenta</a></li>
        <li><a href="/registrarse">Registrarse</a></li>
      </ul>
    <div class="row">
                <div id="content" class="col-sm-8 col-md-9 col-xs-12 colright">
<div class="infobg">
      <h1>Formulario para registrarse</h1>
      <p>Si tienes cuenta solo <a href="/iniciar_sesion">Inicia sesión</a>.</p>
      <form action="https://madebyhand.in/opencart/FS03/Fashion01/index.php?route=account/register" method="post" enctype="multipart/form-data" class="form-horizontal">
        <fieldset id="account">
          <legend>Datos personales</legend>
          <div class="form-group required" style="display:  none ;">
            <label class="col-sm-3 col-xs-12 control-label">Customer Group</label>
            <div class="col-sm-9 col-xs-12">                            <div class="radio">
                <label>
                  <input type="radio" name="customer_group_id" value="1" checked="checked">
                  Default</label>
              </div>
                            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-3 col-xs-12 control-label" for="input-firstname">Nombre(s)</label>
            <div class="col-sm-9 col-xs-12">
              <input type="text" name="firstname" value="" placeholder="Nombre(s)" id="input-firstname" class="form-control">
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-3 col-xs-12 control-label" for="input-lastname">Apellidos</label>
            <div class="col-sm-9 col-xs-12">
              <input type="text" name="lastname" value="" placeholder="Apellidos" id="input-lastname" class="form-control">
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-3 col-xs-12 control-label" for="input-email">Correo electronico</label>
            <div class="col-sm-9 col-xs-12">
              <input type="email" name="email" value="" placeholder="Correo" id="input-email" class="form-control">
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-3 col-xs-12 control-label" for="input-telephone">Telefono</label>
            <div class="col-sm-9 col-xs-12">
              <input type="tel" name="telephone" value="" placeholder="Telefono" id="input-telephone" class="form-control">
               </div>
          </div>
                  </fieldset>
        <fieldset>
          <legend>Your Password</legend>
          <div class="form-group required">
            <label class="col-sm-3 col-xs-12 control-label" for="input-password">Contraseña</label>
            <div class="col-sm-9 col-xs-12">
              <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control">
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-3 col-xs-12 control-label" for="input-confirm">Confirmar contraseña</label>
            <div class="col-sm-9 col-xs-12">
              <input type="password" name="confirm" value="" placeholder="Confirmar contraseña" id="input-confirm" class="form-control">
               </div>
          </div>
        </fieldset>

        
                <div class="buttons">
          
                        &nbsp;
            <input type="submit" value="Continue" class="btn btn-primary">
          
        </div>
              </form>
      </div></div>
    <aside id="column-right" class="col-sm-4 col-md-3 col-xs-12 hidden-xs">
    <div class="list-group accolumn">
 

  <h3><svg class="" width="20px" height="20px"> <use xlink:href="#acluser"></use> </svg>Configuraciones</h3>
       <a href="/iniciar_sesion">Iniciar sesión</a> <a href="/registrarse" class="list-group-item">Registrarse</a> <a href="/registrarse">Olvide contraseña</a>
    <!--a href="https://madebyhand.in/opencart/FS03/Fashion01/index.php?route=account/account" class="list-group-item">My Account</a>-->
    
  </div>
  </aside>
</div>
</div>
@stop