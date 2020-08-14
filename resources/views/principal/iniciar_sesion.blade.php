@extends('welcome')
@section('contenido')
<div id="account-login" class="container acpage">
        <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="/iniciar_sesion">Cuenta</a></li>
        <li><a href="/inicar_sesion">Iniciar sesión</a></li>
      </ul>
      <div class="row">
                <div id="content" class="col-sm-8 col-md-9 col-xs-12 colright">

      <div class="row">

        <div class="col-sm-12 col-md-6 col-lg-6 col-xs-12">
          <div class="well">
            <h1>Iniciar sesión</h1>
            <p><strong>Logueate para poder comprar</strong></p>
            <form method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label class="control-label" for="input-email">E-Mail</label>
                <input type="text" name="email" value="" placeholder="Correo electronico" id="input-email" class="form-control">
              </div>
              <div class="form-group">
                <label class="control-label" for="input-password">Contraseña</label>
                <input type="password" name="password" value="" placeholder="Contraseña" id="input-password" class="form-control">
                <div class="text-right"><a href="/iniciar_sesion">Olvide contraseña</a></div></div>
              <input type="submit" value="Login" class="btn btn-primary">
                          </form>
          </div>
        </div>
      </div>
      </div>
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