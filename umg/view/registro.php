<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="includes/css/bootstrap.css">
    <link rel="stylesheet" href="includes/css/registro.css">
    <link rel="stylesheet" href="includes/css/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <title>Registrar Persona</title>
</head>
<body>
   
<form id="registro">  

     <div class="board">
        <div class="board-inner">
            <ul class="nav nav-tabs" id="myTab">
                <div class="liner"></div>
                <li  id="Persona" class="active">
                    <a href="#persona" data-toggle="tab" title="Datos Personales">
                        <span class="round-tabs one">
                            <i class="fas fa-user"></i>
                        </span> 
                    </a>
                </li>
                <li id="Direccion">
                    <a href="#direccion" data-toggle="tab" title="Dirección">
                     <span class="round-tabs two">
                            <i class="fas fa-home"></i>
                     </span> 
                    </a>
                 </li>
                 <li id="Telefono">
                     <a href="#tel" data-toggle="tab" title="Teléfono">
                     <span class="round-tabs three">
                        <i class="fas fa-phone-volume"></i>
                     </span> </a>
                </li>
                <li id="Otros">
                    <a href="#otros" data-toggle="tab" title="Otros">
                         <span class="round-tabs four">
                            <i class="fas fa-plus"></i>
                         </span> 
                     </a>
                </li>     
                <li id="Completo">
                    <a href="#completo" data-toggle="tab" title="completed">
                         <span class="round-tabs five">
                            <i class="fas fa-check"></i>
                         </span> </a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade in active " id="persona">
                <div class="row"> 
                    <div class="col-sm-5"> 
                        <div class="card"> 
                            <div class="card-body"> 
                                <div class="user">
                                    <img class="img" src="includes/img/user.png"  title="Fotografia">
                                </div>
                            </div> 
                        </div> 
                    </div> 
                    <div class="col-sm-7"> 
                        <div class="card"> 
                            <div class="card-body"> 
                                <div class="col-sm-12">
                                    <h2>Datos de Usuario:</h2>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="Pnombre">Primer Nombre: </label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" id="Pnombre" placeholder="Primer Nombre">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="Snombre">Segundo Nombre: </label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" id="Snombre" placeholder="Segundo Nombre">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="Papellido">Primer Apellido: </label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" id="Papellido" placeholder="Primer Apellido">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="Sapellido">Segundo Apellido: </label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" id="Sapellido" placeholder="Segundo Apellido">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="Acasado">Apellidos Casado/a: </label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" id="Acasado" placeholder="Apellidos Casado/a">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="Fnacimiento">Fecha Nacimiento: </label>
                                        <div class="col-sm-10">
                                        <input type="date" class="form-control" id="Fnacimiento" placeholder="Fecha Nacimiento">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="Tdoc">Tipo Doc.: </label>
                                        <div class="col-sm-4">
                                            <select name="Sgenero" id="Sgenero" class="form-control">
                                                <option value="">DPI</option>
                                                <option value="">Pasaporte</option>
                                            </select>
                                        </div>
                                        <label class="control-label col-sm-2" for="Ndoc">Número: </label>
                                        <div class="col-sm-4">
                                        <input type="text" class="form-control" id="Ndoc" placeholder="Número">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="Sgenero">Genero: </label>
                                        <div class="col-sm-10">
                                            <select name="Sgenero" id="Sgenero" class="form-control">
                                                <option value="M">Masculino</option>
                                                <option value="F">Femenino</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                        </div> 
                    </div> 
                </div>
                <div class="row controles">
                    <a href="#direccion" data-toggle="tab"><input type="button" class="btn btn-success" name="adelantar"  id="adelantar" value="Siguiente"></a>
                </div>
            </div>
            <div class="tab-pane fade in " id="direccion">
                <div class="row">
                    <div class="col-sm-6"> 
                        <div class="card"> 
                            <div class="card-body"> 
                                    <h2>Dirección de Usuario:</h2>
                                    <div class="form-group ">
                                        <label class=" col-sm-5" for="pais">Pais: </label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="pais" id="pais"></select>
                                        </div>
                                    </div>
                                    <div class="form-group otro">
                                        <label class="input col-sm-5" for="departamento">Departamento: </label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="departamento" id="departamento"></select>
                                        </div>
                                    </div>
                                    <div class="form-group otro">
                                        <label class=" input col-sm-5" for="municipio">Municipio: </label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="municipio" id="numicipio"></select>
                                        </div>
                                    </div>
                                    <div class="form-group otro">
                                        <label class=" input col-sm-5" for="Colonia">Colonia: </label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" class="form-control " id="Colonia" name="Colonia" placeholder="Colonia">
                                        </div>
                                    </div>
                            </div> 
                        </div> 
                    </div>
                    <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                <h2>&nbsp</h2>
                                    <div class="form-group otro">
                                        <label class=" input col-sm-5" for="Calle">Calle: </label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" class="form-control " id="Calle" name="Calle" placeholder="Calle">
                                        </div>
                                    </div>
                                    <div class="form-group otro">
                                        <label class=" input col-sm-5" for="Edificio">Edificio: </label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" class="form-control " id="Edificio" name="Edificio" placeholder="Edificio">
                                        </div>
                                    </div>
                                    <div class="form-group otro">
                                        <label class=" input col-sm-5" for="Zona">Zona: </label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="Zona" id="Zona"></select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="row controles">
                    <a href="#persona" data-toggle="tab"><input type="button" class="btn btn-success" name="DAnterior"  id="DAnterior" value="Anterior"></a>
                    <a href="#tel" data-toggle="tab"><input type="button" class="btn btn-success" name="Dadelantar"  id="Dadelantar" value="Siguiente"></a>
                </div>
             </div>
            <div class="tab-pane fade in" id="tel">

            </div>
            <div class="tab-pane fade in" id="otros">

            </div>
            <div class="tab-pane fade in" id="completo">
            <div class="row controles">
                    <a href="#persona" data-toggle="tab"><input type="button" class="btn btn-success" name="DAnterior"  id="DAnterior" value="Anterior"></a>
                    <input type="submit" class="btn btn-success" name="enviar"  id="enviar" value="enviar"></a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</form>


<script src="includes/js/comandos.js"></script>
</body>
</html>