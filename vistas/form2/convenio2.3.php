


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
                    <label for="txtID">Nombres y Apellidos del Supervisor *</label>
                    <input type="text" required  class="form-control"  name="txtNASupervisor"  id="txtNASupervisor" placeholder="Nombres y Apellidos del Supervisor">
                </div>

                <div class = "form-group">
                    <label for="txtDNI">Cargo del Supervisor *</label>
                    <input  type="text" required class="form-control"  name="txtCargoSupervisor"  id="txtCargoSupervisor" placeholder="Cargo del Supervisor" >
                </div>

                <div class = "form-group">
                    <label for="txtNombre">Telefono del Supervisor *</label>
                    <input required type="text" class="form-control"  name="txtTelefonoSupervisor"  id="txtTelefonoSupervisor" placeholder="Telefono del Supervisor" >
                </div>


                <label for="txted">Tipo de Practica Convenio 
                </label>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="option1" id="" value="checkedValue" checked>
                            Ad honorem
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="option1" id="" value="checkedValue" checked>
                            Remunerado
                    </label>
                </div><br>

               
                <button type="submit" name="accion" value="Guardar" class="btn btn-success">Siguiente</button>

        </form>    
    </div>
</div>