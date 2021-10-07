
<div class="col-md-2">
</div>
<div class="row justify-content-center"> 

<div class="card">

    <div class="card-header">      
      <h1 style = text-align:center> CONVENIOS Y PLANES DE PRACTICAS  </h1> 
    </div>

    <div class="card-header">    
        <a name="" id="" class="btn btn-info" href="?controlador=form2&accion=convenio1" role="button">Datos del Practicante</a>
        <a name="" id="" class="btn btn-info" href="?controlador=form2&accion=convenio2" role="button">Datos de la Empresa</a>
        <a name="" id="" class="btn btn-info" href="?controlador=form2&accion=convenio3" role="button">Datos del Supervisor</a>       
        <a name="" id="" class="btn btn-info" href="?controlador=form2&accion=convenio4" role="button">Archivos Adjuntos</a>         
    </div>


    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" >

            <!-- primera columna -->         
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
                    <label for="txtAP">Telefonos Empresa *</label>
                    <input required type="text" class="form-control"  name="txtTelefonosEmpresa"  id="txtTelefonosEmpresa" placeholder="Telefonos Empresa" >
                </div>

                <div class = "form-group">
                    <label for="txtAM">Representante Empresa *</label>
                    <input required type="text" class="form-control"  name="txtRepresentanteEmpresa"  id="txtRepresentanteEmpresa" placeholder="Representante Empresa" >
                </div>

                <div class = "form-group">
                    <label for="txtAM">Cargo Representante Empresa *</label>
                    <input required type="text" class="form-control"  name="txtCargoRepresentanteEmpresa"  id="txtCargoRepresentanteEmpresa" placeholder="Cargo Representante Empresa" >
                </div>   

                <div class = "form-group">
                    <label for="txtAM">DNI Representante Empresa *</label>
                    <input required type="text" class="form-control"  name="txtDNIRepresentanteEmpresa"  id="txtDNIRepresentanteEmpresa" placeholder="DNI Representante Empresa" >
                </div>

                 
            <button type="submit" name="accion" value="Guardar" class="btn btn-success">Siguiente</button>

        </form>    
    </div>
</div>

  
      