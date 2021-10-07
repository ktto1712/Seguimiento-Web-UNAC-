<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<div class="p-5 bg-light"> 

<div class="col-md-12"> 

<div class="card">

    <div class="card-header">
        <h1 style = text-align:center> <i class="bi bi-file-earmark-pdf-fill"> </i> CARTA DE PRESENTACIÓN</h1> 
    </div>

 

    <div class="card-header">    

        <a name="" id="" class="btn btn-success" href="?controlador=form1&accion=carta1" role="button">Datos de la Empresa</a>
        <a name="" id="" class="btn btn-success" href="?controlador=form1&accion=carta2" role="button">Datos del Practicante</a>
        <a name="" id="" class="btn btn-success" href="?controlador=form1&accion=carta3" role="button">Archivos Adjuntos</a>

        
    </div>

    <div class="card-body">
    
        <form method="POST" enctype="multipart/form-data" >

        <div class="row mb-5">
       
            <!-- primera columna -->
            <div class="col-md-6">
        
                <div class = "form-group">
                    <label for="txtID">Razón Social *</label>
                    <input type="text" required  class="form-control"  name="txtRazónSocial"  id="txtRazónSocial" placeholder="Razón Social">
                </div>

                <div class = "form-group">
                    <label for="txtDNI">Dirección Empresa *</label>
                    <input  type="text" required class="form-control"  name="txtDirecciónEmpresa"  id="txtDirecciónEmpresa" placeholder="Dirección Empresa" >
                </div>

                <div class = "form-group">
                    <label for="txtNombre">Actividad Economica *</label>
                    <input required type="text" class="form-control"  name="txtActividadEconomica "  id="txtActividadEconomica " placeholder="Actividad economica " >
                </div>

                <div class = "form-group">
                    <label for="txtAP">RUC Empresa *</label>
                    <input required type="text" class="form-control"  name="txtRUC"  id="txtRUC" placeholder="RUC empresa" >
                </div>

                <div class = "form-group">
                    <label for="txtAM">Representante Empresa *</label>
                    <input required type="text" class="form-control"  name="txtRepresentanteEmpresa"  id="txtRepresentanteEmpresa" placeholder="Representante Empresa" >
                    </div>


                <div class = "form-group">
                    <label for="txtAM">Cargo Representante Empresa *</label>
                    <input required type="text" class="form-control"  name="txtCargoRepresentanteEmpresa"  id="txtCargoRepresentanteEmpresa" placeholder="CargoRepresentante Empresa" >
                </div>

            <!-- final de primera columna -->
            </div>
        
            <!-- inicio segunda columna -->
            
            <div class="col-md-6">

                <label for="txted">Tipo de Practicas: 
                </label>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="option1" id="" value="Pre Profesional">
                            Pre Profesional
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="option1" id="" value="Pre profesional para su currícula">
                            Pre profesional para su currícula
                    </label>
                </div>

                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="option1" id="" value="Profesional">
                            Profesional
                    </label>
                </div>
                <br>


                <label for="txted"> Remunerada: 
                </label>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="option2" id="" value="Ad-honorem">
                            Ad-honorem
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="option2" id="" value="Remunerada">
                            Remunerada
                    </label>
                </div>
                <br>
 

                <label for="txted"> Tipo de Empresa - Institucion *: 
                </label>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="option3" id="" value="Público">
                            Público - práctica normado por D.L. 1401
                    </label>
                </div>                   
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="option3" id="" value="Privado" >
                            Privado - práctica normado por Ley 28518
                    </label>
                </div>
                <br>

                <!-- calendario -->
                <label for="">Fecha de inicio practicas :
                </label>
                </br>
                <!-- cuando muestra fecha formato y cuando seleccionas crud con fecha para cambiar-->              
                <!-- cuando seleccionas un crud con fecha vacia  -->                     
                <input type="date" id="txtfecha" name="txtfecha" value="2021-09-23"
                    min="1997-01-01" max="2021-12-31" />        
                <!-- fin calendario -->
                <br><br>


                <!-- calendario -->
                <label for="">Fecha de fin practicas :
                </label>
                </br>
                <!-- cuando muestra fecha formato y cuando seleccionas crud con fecha para cambiar-->        
                <!-- cuando seleccionas un crud con fecha vacia  -->
                <input type="date" id="txtfecha" name="txtfecha" value="2021-09-23"
                    min="1997-01-01" max="2021-12-31" />        
                <!-- fin calendario -->

                </fieldset>
                <br><br>                
            </div>
        </div>  
        <button href="?controlador=form1&accion=carta2" type="submit" name="accion" value="Siguiente" class="btn btn-info" position="center">Siguiente</button>
        </form>
    </div>
    
</div>
</div> 
</div> 


