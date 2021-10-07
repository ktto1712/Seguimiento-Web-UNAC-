<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<div class="p-5 bg-light"> 

<div class="col-md-12">

    <div class="card">
        <div class="card-header">
            <h1 style = text-align:center> <i class="bi bi-file-earmark-pdf-fill"> </i> CARTA DE PRESENTACIÓN</h1> 
        </div>

        <div class="card-header">
            <a name="" id="" class="btn btn-success" href="?controlador=form1&accion=carta1" role="button">Datos de la Empresa</a>
            <a name="" id="" class="btn btn-success" href="?controlador=form1&accion=carta2"" role="button">Datos del Practicante</a>
            <a name="" id="" class="btn btn-success" href="?controlador=form1&accion=carta3"" role="button">Archivos Adjuntos</a>
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" >

                <div class="row mb-5">

                    <!-- primera columna -->
                    <div class="col-md-4">
                            
                        <div class = "form-group">
                            <label for="txtDNI">DNI estudiante:</label>
                            <input type="text" required  class="form-control"  name="txtDNI"  id="txtDNI" placeholder="DNI del estudiante">
                        </div>

                        <div class = "form-group">
                            <label for="txtAP">Apellido Paterno:</label>
                            <input required type="text" class="form-control"  name="txtAP"  id="txtAP" placeholder="Apellido Paterno" >
                        </div>

                        <div class = "form-group">
                            <label for="txtAM">Apellido Materno:</label>
                            <input required type="text" class="form-control"  name="txtAM"  id="txtAM" placeholder="Apellido Materno" >
                        </div>

                        <div class = "form-group">
                            <label for="txtNombres">Nombres:</label>
                            <input required type="text" class="form-control"  name="txtNombres"  id="txtNombres" placeholder="Nombre" >
                        </div>

                        <div class = "form-group">
                            <label for="txtDIRECCION">Dirección estudiante</label>
                            <input class="form-control"  name="txtDIRECCION"  id="txtDIRECCION" placeholder="Dirección del estudiante" >
                        </div>

                        <div class = "form-group">
                            <label for="txtDIST">Referencia</label>
                            <input class="form-control"  name="txtREF"  id="txtREF" placeholder="Referencia del estudiante" >
                        </div>

                    </div>

                    <!-- segunda columna -->

                    <div class="col-md-4">
                       
                        <div class = "form-group">
                            <label for="txtDEPAR">Departamento</label>
                            <input class="form-control"  name="txtDEPAR"  id="txtDEPAR" placeholder="Departamento del estudiante" >
                        </div>

                        <div class = "form-group">
                            <label for="txtPROV">Provincia</label>
                            <input class="form-control"  name="txtPROV"  id="txtPROV" placeholder="Provincia del estudiante" >
                        </div>

                        <div class = "form-group">
                            <label for="txtDIST">Distrito</label>
                            <input class="form-control"  name="txtDIST"  id="txtDIST" placeholder="Distrito del estudiante" >
                        </div>
                        <div class = "form-group">
                            <!-- calendario -->
                            <label for="">Fecha de nacimiento:</label>
                                    </br>
                            <!-- cuando muestra fecha formato y cuando seleccionas crud con fecha para cambiar-->     
                            <!-- cuando seleccionas un crud con fecha vacia  -->                   
                            <input class="form-control" type="date" id="txtfecha" name="txtfecha" value="2021-09-23"
                                min="1997-01-01" max="2021-12-31" />
                                    
                            <!-- fin calendario -->
                            </label>
                        </div>

                        <div class = "form-group">
                            <label for="phone">Teléfono</label>
                            <input class="form-control" type="tel" name="phone" id="phone" placeholder="+51999999999">
                        </div>
                        <div class = "form-group">
                                <label for="email">Email institucional</label>
                                <input class="form-control" type="email" name="email" id="email" placeholder="ejemplo@unac.edu.pe">
                        </div>

                        
                    </div>
                    <!-- tercera columna -->

                    <div class="col-md-4">


                        <div class = "form-group">
                                <label for="emailPer">Email personal</label>
                                <input class="form-control" type="email" name="emailPer" id="emailPer" placeholder="ejemplo@ejemplo.com">
                        </div>
                        <div class = "form-group">
                            <select class="form-control form-control-sm">
                                <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option>
                                <option>7</option><option>8</option><option>9</option><option>10</option>
                            </select>
                        </div>
                        
                        <label for="txted"> Facultad*: 
                        <div class = "form-group">
                            <select class="custom-select custom-select-sm">
                                <option selected>Open this select menu</option>
                                <option value="1">Ingeniería Industrial</option>
                                <option value="2">Ingeniería de Sistemas</option>
                            </select>
                        </div>
                            <!--<fieldset>
                                <legend>Escuela Profesional</legend>
                                <p><input class="form-check-input" type="radio" name="priority" value="Ingeniería Industrial"><label class="form-check-label" for="exampleRadios1">Ingeniería Industrial</label></p>
                                <p><input class="form-check-input" type="radio" name="priority" value="Ingeniería de Sistemas"><label class="form-check-label" for="exampleRadios1">Ingeniería de Sistemas</label></p>
                            </fieldset>
                            -->
                        <label for="txted"> Tiene datos del supervisor *: 
                        </label>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="option1" id="" value="checkedValue" checked>
                                        Si               
                            </label>
                        </div>                   
                        <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="option1" id="" value="checkedValue" checked>
                                No
                        </label>
                        </div><br>

                                              
                        <a href="?controlador=form1&accion=carta1" name="accion" value="Anterior" class="btn btn-info">Anterior</a>                        
                        <button  href="?controlador=form1&accion=carta3" type="submit" name="accion" value="Siguiente" class="btn btn-info" >Siguiente</button>

                        
        
                    </div>

                </div>
            </form>
        </div>        
    </div>

</div>
</div>
