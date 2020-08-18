@extends('welcome')
@section('contenido')
<div id="information-contact" class="container">
    <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="/contacto">Contactános</a></li>
    </ul>
    <div class="row infobg">
        <div id="content" class="col-xs-12">
            <h1 class="heading text-center"><span>Contactános</span><svg>
                    <use xlink:href="#headingsvg"></use>
                </svg></h1>
            <div class="row">

                <div class="col-md-4 col-xs-12 infocnt">
                    <legend>Nuestra locación</legend>
                    <div class="">
                        <!--              <img src="https://madebyhand.in/opencart/FS03/Fashion01/image/cache/catalog/logo-268x50.png" alt="Fruitino Organic" title="Fruitino Organic" class="img-responsive" />
             -->

                        <!-- <strong>Fruitino Organic</strong> -->




                        <div class="pull-left"><i class="fa fa-home"></i></div>
                        <div class="contsp">Paseo de los volcanes# 127 col. las Reynas</div>


                        <div class="pull-left"><i class="fa fa-phone"></i></div>
                        <div class="contsp"> 464-112-4092</div>


                        <div class="pull-left"><i class="fa fa-clock-o"></i></div>
                        <div class="contsp"> 9:00 AM - 7:00 PM</div>

                    </div>


                </div>
                <div class="col-md-8 col-xs-12">
                    <form enctype="multipart/form-data" class="form-horizontal"method="POST" action={{route('contact')}}>
                            {{ csrf_field() }}
                        <fieldset>
                            <legend>Formulario de contacto</legend>
                            <div class="form-group required">
                                <label class="col-sm-3 control-label" for="input-name">Nombre completo</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nombre" value="" id="nombre" class="form-control">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-3 control-label" for="input-email">E-mail</label>
                                <div class="col-sm-9">
                                    <input type="text" name="correo" value="" id="correo" class="form-control">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-3 control-label" for="input-enquiry">Descripción</label>
                                <div class="col-sm-9">
                                    <textarea name="descripcion" rows="10" id="descripcion" class="form-control"></textarea>
                                </div>
                            </div>

                        </fieldset>
                        <div class="buttons">
                            <div class="pull-right">
                                <input class="btn btn-primary" type="submit" value="Enviar">
                            </div>
                        </div>
                    </form>
                </div>

                <div>
                    <iframe frameborder="0" style="border:0" width="100%" height="400px" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDEdsq6YzeLi6-XTHgI5c5hTkN9C68ZCrc&q=place_id:ChIJH2EDtn26LIQR3C45fMjob7Q" allowfullscreen=""></iframe>

                </div>
            </div>
        </div>
    </div>
</div>
@stop
