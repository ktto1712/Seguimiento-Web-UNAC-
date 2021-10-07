<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<div class="p-5 bg-light"> 

<div class="col-md-12"> 

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
        
    <div class = "form-group">
    <label for="txtID">ID</label>
    <input type="text" required readonly class="form-control"  name="txtID"  id="txtID" placeholder="ID">
    </div>

    <div class = "form-group">
    <label for="txtDNI">DNI</label>
    <input type="text" required class="form-control"  name="txtDNI"  id="txtDNI" placeholder="DNI del estudiante" >
    </div>

    <div class = "form-group">
    <label for="txtNombre">Nombre:</label>
    <input type="text" required type="text" class="form-control"  name="txtNombre"  id="txtNombre" placeholder="Nombre" >
    </div>

    <div class = "form-group">
    <label for="txtAP">Apellido Paterno:</label>
    <input type="text" required type="text" class="form-control"  name="txtAP"  id="txtAP" placeholder="Apellido Paterno" >
    </div>

    <div class = "form-group">
    <label for="txtAM">Apellido Materno</label>
    <input type="text" required type="text" class="form-control"  name="txtAM"  id="txtAM" placeholder="Apellido Materno" >
    </div>

      
  

<!-- final de primera columna -->
    </div>
<!-- inicio de segunda columna -->
          

<!-- inicio tercera columna -->
            
<div class="col-md-6">

    


    <div class = "form-group">
    <label for="txtDNI">Horario de Practicas</label>
    <input type="text" class="form-control"  name="txtDNI"  id="txtDNI" placeholder="Horario" >
    </div>


    <div class = "form-group">
    <label for="txtDNI">Duración de Practicas</label>
    <input type="text" class="form-control"  name="txtDNI"  id="txtDNI" placeholder="Duración" >
    </div>


    <label for="txted">Tipo de Practicas: 

</label>
 <div class="form-check">
     <label class="form-check-label">
       <input type="radio" class="form-check-input" name="option1" id="" value="checkedValue" checked>
       Pre Profesional
     </label>
   </div>

   <div class="form-check">
     <label class="form-check-label">
       <input type="radio" class="form-check-input" name="option1" id="" value="checkedValue" checked>
       Profesional
     </label>
   </div>



    <div class="form-check">
      <label class="form-check-label">
       
        
<!-- final tercera columna -->
</div>
 <!-- calendario -->
 <label for="">Fecha de inicio practicas :</label>
        </br>

<!-- cuando muestra fecha formato y cuando seleccionas crud con fecha para cambiar-->
        
<!-- cuando seleccionas un crud con fecha vacia  -->
                      
<input type="date" id="txtfecha" name="txtfecha" value="2021-09-23"
       min="1997-01-01" max="2021-12-31" />
        
<!-- fin calendario -->
</label>


    </br>
<label for="">Fecha de fin practicas :</label>
        </br>

<!-- cuando muestra fecha formato y cuando seleccionas crud con fecha para cambiar-->
        
<!-- cuando seleccionas un crud con fecha vacia  -->
                      
<input type="date" id="txtfecha" name="txtfecha" value="2021-09-23"
       min="1997-01-01" max="2021-12-31" />
        
<!-- fin calendario -->
</label>
 </fieldset>
    </br>
    </br>

 <button href="?controlador=form2&accion=convenio2" type="submit" name="accion" value="Siguiente" class="btn btn-success">Siguiente</button>
            
      </div>
     
      
    </form>
    
    </div>
    </div>
</div>
</div>
  
</div>
</div>

