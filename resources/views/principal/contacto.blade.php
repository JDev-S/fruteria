@extends('welcome')
@section('contenido')
<div id="information-contact" class="container">
  <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="/contacto">Contactanos</a></li>
      </ul>
  <div class="row infobg">
                <div id="content" class="col-xs-12">
      <h1 class="heading text-center"><span>Contactanos</span><svg><use xlink:href="#headingsvg"></use></svg></h1>
      <div class="row">
      
      <div class="col-md-4 col-xs-12 infocnt">
      <legend>Nuestra locacion</legend>
      <div class="">
          <!--              <img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/logo-268x50.png" alt="Fruitino Organic" title="Fruitino Organic" class="img-responsive" />
             -->

            <!-- <strong>Fruitino Organic</strong> -->

            
              

              <div class="pull-left"><i class="fa fa-home"></i></div>
              <div class="contsp">Paseo de los volcanes# 127 col. las Reynas</div>

              
              <div class="pull-left"><i class="fa fa-phone"></i></div>
             <div class="contsp"> 464-112-4092</div>

              
                            <div class="pull-left"><i class="fa fa-clock-o"></i></div>
             <div class="contsp">  9:00 AM - 7:00 PM</div>
                            
      </div>
 

          </div>
<div class="col-md-8 col-xs-12">
      <form  method="post" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
          <legend>Formulario de contacto</legend>
          <div class="form-group required">
            <label class="col-sm-3 control-label" for="input-name">Nombre completo</label>
            <div class="col-sm-9">
              <input type="text" name="name" value="" id="input-name" class="form-control">
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-3 control-label" for="input-email">E-mail</label>
            <div class="col-sm-9">
              <input type="text" name="email" value="" id="input-email" class="form-control">
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-3 control-label" for="input-enquiry">Descripción</label>
            <div class="col-sm-9">
              <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control"></textarea>
                          </div>
          </div>
          
        </fieldset>
        <div class="buttons">
          <div class="pull-right">
            <input class="btn btn-primary" type="submit" value="Enviar">
          </div>
        </div>
      </form></div>
      </div></div>
    </div>
</div>
@stop