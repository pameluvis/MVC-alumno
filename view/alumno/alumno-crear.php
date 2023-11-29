<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../recursos/css/css/bootstrap.min.css">
    <script src="../../../recursos/js/bootstrap.bundle.min.js"></script>
    <title>Crear alumno</title>
</head>
<body>
    
<section>
        <div class="container mt-5">
            <h1>Crear Alumno</h1>
            <form id= "frm-alumno" action="?c=Alumno&a=Guardar" method="post">
                <div class="row">
                    <div class="col-md-1">
                        <label for="nombre" class="form-label">Nombre</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="nombre" placeholder="Escribe tu nombre" class="form-control">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-1">
                        <label for="apellidos" class="form-label">Apellido</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="apellidos" placeholder="Escribe tus apellidos" class="form-control">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-1">
                        <label for="carrera" class="form-label">Correo</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="correo" placeholder="Escribe tu correo" class="form-control">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-5">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>    
    </section>
    
</body>
</html>