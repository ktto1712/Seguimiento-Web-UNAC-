<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<div class="p-5 bg-light"> 

<div class="col-md-3">
</div>

<div class="row justify-content-center">

    <div class="card">
        <div class="card-header">
            <h1 style = text-align:center>  <i class="bi bi-file-earmark-pdf-fill"> </i>  CARTA DE PRESENTACIÓN</h1> 
        </div>

        <div class="card-header">
            <a name="" id="" class="btn btn-success" href="?controlador=form1&accion=carta1" role="button">Datos de la Empresa</a>
            <a name="" id="" class="btn btn-success" href="?controlador=form1&accion=carta2"" role="button">Datos del Practicante</a>
            <a name="" id="" class="btn btn-success" href="?controlador=form1&accion=carta3"" role="button">Archivos Adjuntos</a>
        </div>

        <div class="card-body">
            <form action="" method="post">
            <!--<form method="POST" enctype="multipart/form-data" >-->

                <div class = "">
                    <label for="txtImagen" >Subir Record Academico *</label> 
                    <img class="img-thumbnail rounded"  src="../../img/" width="50" alt="" srcset="">
                    <input  type="file" required class="form-control" name="txtImagen"  id="txtImagen" placeholder="RecordAcademico">
                </div>   
                <br>

                <div class = "">
                    <label for="txtImagen">Subir Consulta RUC *</label>
                    <img class="img-thumbnail rounded"  src="../../img/" width="50" alt="" srcset="">
                    <input  type="file" required class="form-control" name="txtImagen"  id="txtImagen" placeholder="ConsultaRuc">
                </div>  
                <br> 


                <div class = "">
                <!-- calendario -->
                    <label for="">Fecha voucher * :</label>
                    </br>
                    <!-- cuando muestra fecha formato y cuando seleccionas crud con fecha para cambiar-->              
                    <!-- cuando seleccionas un crud con fecha vacia  -->                     
                    <input type="date" id="txtfecha" name="txtfecha" value="2021-09-23" min="1997-01-01" max="2021-12-31" />        
                <!-- fin calendario -->
                </div>


                <div class = "">
                    <label for="txtID">Número Voucher *</label>
                    <input type="text" required  class="form-control"  name="txtNúmeroVoucher"  id="txtNúmeroVoucher" placeholder="Número Voucher">
                </div>


                <div class = "">
                    <label for="txtImagen">Subir Voucher *</label>
                    <img class="img-thumbnail rounded"  src="../../img/" width="50" alt="" srcset="">
                    <input  type="file" required class="form-control" name="txtImagen"  id="txtImagen" placeholder="ID">
                </div><br>

                
                <div class="">
                    <label for="txted"> Nuevo Trámite * 
                    </label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="option1" id="" value="checkedValue" checked>
                                Regularización
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="option1" id="" value="checkedValue" checked>
                                Nueva Carta de Presentación
                        </label>
                    </div>
                    <br>

                </div>
                
                <a href="?controlador=form1&accion=carta2" name="accion" value="Anterior" class="btn btn-info">Anterior</a>
                <button type="submit" name="accion" value="Guardar" class="btn btn-info">Guardar</button>
            </form>   
        </div>
    </div>
</div>
</div>

  
      