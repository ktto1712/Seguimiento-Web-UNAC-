<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<div class="p-5 bg-light"> 

<div class="col-md-2">
</div>
<div class="row justify-content-center"> 

<div class="card">

    <div class="card-header">      
      <h1 style = text-align:center> <i class="bi bi-file-earmark-check-fill"></i> CONVENIOS Y PLANES DE PRÁCTICAS  </h1> 
    </div>

    <div class="card-header">    
        <a name="" id="" class="btn btn-info" href="?controlador=form2&accion=convenio1" role="button">Datos del Practicante</a>
        <a name="" id="" class="btn btn-info" href="?controlador=form2&accion=convenio2" role="button">Datos de la Empresa y supervisor</a>
        <a name="" id="" class="btn btn-info" href="?controlador=form2&accion=convenio4" role="button">Archivos Adjuntos</a>         
    </div>


    <div class="card-body">
            <form method="POST" enctype="multipart/form-data" >

                <div class="row mb-5">

                    <!-- primera columna -->
                    <div class="col-md-6">
                        <legend>DATOS DE LA EMPRESA/INSTITUCIÓN</legend>    
                        <div class = "form-group">
                            <label for="txtRS">Razón Social</label>
                            <input type="text" required  class="form-control"  name="txtRS"  id="txtRS" placeholder="Razón Social de la Empresa">
                        </div>

                        <div class = "form-group">
                            <label for="txtDIRECCIONe">Dirección Empresa</label>
                            <input class="form-control"  name="txtDIRECCIONe"  id="txtDIRECCIONe" placeholder="Dirección de la empresa" >
                        </div>

                        <div class = "form-group">
                            <label for="txtAE">Actividad Económica</label>
                            <input class="form-control"  name="txtAE"  id="txtAE" placeholder="Actividad Económica de la empresa" >
                        </div>

                        <div class = "form-group">
                            <label for="RUC">RUC Empresa</label>
                            <input class="form-control" type="tel" name="RUC" id="RUC" placeholder="RUC de la empresa">
                        </div>

                        <div class = "form-group">
                            <label for="phone">Teléfono Empresa</label>
                            <input class="form-control" type="tel" name="phone" id="phone" placeholder="+51900000000">
                        </div>

                        <div class = "form-group">
                            <label for="txtNombresR">Nombres completos del Representante de la Empresa</label>
                            <input required type="text" class="form-control"  name="txtNombresR"  id="txtNombresR" placeholder="Nombres completos" >
                        </div>

                        <div class = "form-group">
                            <label for="txtCargoR">Cargo del Representante Empresa</label>
                            <input required type="text" class="form-control"  name="txtCargoR"  id="txtCargoR" placeholder="Nombre" >
                        </div>

                        <div class = "form-group">
                            <label for="txtDNIrepre">DNI Representante</label>
                            <input required type="text" class="form-control"  name="txtDNIrepre"  id="txtDNIrepre" placeholder="DNI del representante" >
                        </div>

                    </div>

                    <!-- segunda columna -->

                    <div class="col-md-6">
                        <legend>DATOS DE LA EMPRESA/INSTITUCIÓN</legend>
                        <div class = "form-group">
                            <label for="txtAP">Apellido Paterno</label>
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
                            <label for="txtDEPAR">Cargo del supervisor</label>
                            <input class="form-control"  name="txtDEPAR"  id="txtDEPAR" placeholder="Departamento del estudiante" >
                        </div>

                        <div class = "form-group">
                            <label for="txtPROV">Razón social</label>
                            <input class="form-control"  name="txtPROV"  id="txtPROV" placeholder="Provincia del estudiante" >
                        </div>

                        <div class = "form-group">
                            <label for="phone">Teléfono del supervisor</label>
                            <input class="form-control" type="tel" name="phone" id="phone" placeholder="+51999999999">
                        </div>
                        <div class = "form-group">
                                <label for="email">Email del supervisor</label>
                                <input class="form-control" type="email" name="email" id="email" placeholder="ejemplo@unac.edu.pe">
                        </div>

                        <div class = "form-group">
                            <fieldset>
                                <legend>Tipo de Práctica del Convenio</legend>
                                <p><label><input type="radio" name="priority" value="Ad honorem">Ad honorem</label></p>
                                <p><label><input type="radio" name="priority" value="Remunerado">Remunerado</label></p>
                            </fieldset>
                        </div>
                        
                    </div>
                    <div class= "">
                        <a href="?controlador=form2&accion=convenio1" name="accion" value="Anterior" class="btn btn-success">Anterior</a>
                        <button href="?controlador=form2&accion=convenio4" type="submit" name="accion" value="Siguiente" class="btn btn-success">Siguiente</button>
                    </div>
                </div>
            </form>
        </div>        
    </div>
</div>
</div>

  
      