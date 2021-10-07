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

            <!-- primera columna -->         
            <div class = "">
                <label for="txtImagen">SUBIR CONVENIO:</label>
                <img class="img-thumbnail rounded"  src="../../img/" width="50" alt="" srcset="">
                <input  type="file" class="form-control" name="txtImagen"  id="txtImagen" placeholder="ID">
            </div><br>   

            <div class = "">
                <label for="txtImagen">SUBIR PLAN DE PRACTICAS:</label>
                <img class="img-thumbnail rounded"  src="../../img/" width="50" alt="" srcset="">
                <input  type="file" class="form-control" name="txtImagen"  id="txtImagen" placeholder="ID">
            </div><br>   
            
            <a href="?controlador=form2&accion=convenio2" name="accion" value="Anterior" class="btn btn-success">Anterior</a>
            <button type="submit" name="accion" value="Guardar" class="btn btn-success">Guardar</button>

        </form>    
    </div>
</div>
</div>
  
      