<?php include "./header.php"; ?>

<div class="container">
        <div class="row">
            <div class="col">
              <div class="card mt-4">
                <div class="card-body">

                    <a href="index.php" class="btn btn-outline-info">
                        <i class="fa-solid fa-angles-left"></i> Regresar
                    </a>
                    <h2>Actualizar registro</h2>
                    
                    <form action="" method="post">
                        <label for="paterno">Apellido paterno</label>
                        <input type="text" class="form-control" id="paterno" name="paterno">
                        <label for="materno">Apellido materno</label>
                        <input type="text" class="form-control" id="materno" name="materno">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                        <label for="fechaNacimiento">Fecha de nacimiento</label>
                        <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control">
                        <button class="btn btn-warning mt-3" >
                            <i class="fa-solid fa-floppy-disk"></i> Actualizar
                        </button>
                    </form>
                </div>
              </div>
            </div>
        </div>
    </div>

<?php include "./scripts.php"; ?>