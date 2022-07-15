<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="libraries/bootstrap-5/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/styles.css">
    <title>Usuarios - Tuatara</title>
</head>
<body>
    <div class="container bg-opacity-10">
        <div class="row text-md-center text-light">
            <div class="col-md-12">
                <h1>Usuarios</h1>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-12">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#agregarUsuario">
                    Agregar usuario
                </button>
                <a href="index.php" type="button" class="btn btn-primary">Regresar</a>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-2"></div>
            <div class="col-md-8 p-4">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Documento</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Email</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="vistaTabla">
                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <!-- Agregar -->
    <div class="modal fade" id="agregarUsuario" tabindex="-1" aria-labelledby="agregarUsuarioLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agregarUsuarioLabel">Registrar usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="frm_registrar" method="post">
                    <div class="mb-3">
                        <label for="documento" class="form-label">Documento</label>
                        <input type="text" class="form-control" name="documento" id="documento">
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="apellido" id="apellido">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success" id="btn_guardar" onclick="agregar();">Guardar</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modificar -->
    <div class="modal fade" id="modificarUsuario" tabindex="-1" aria-labelledby="modificarUsuarioLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modificarUsuarioLabel">Modificar usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="frm_modificar" method="put">
                    <!-- <input type="hidden" name="id" id="id"> -->
                    <div class="mb-3">
                        <label for="docActualizar" class="form-label">Documento</label>
                        <input type="text" class="form-control" name="docActualizar" id="docActualizar">
                    </div>
                    <div class="mb-3">
                        <label for="nomActualizar" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nomActualizar" id="nomActualizar">
                    </div>
                    <div class="mb-3">
                        <label for="apeActualizar" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" name="apeActualizar" id="apeActualizar">
                    </div>
                    <div class="mb-3">
                        <label for="emailActualizar" class="form-label">Email</label>
                        <input type="email" class="form-control" name="emailActualizar" id="emailActualizar" aria-describedby="emailHelp">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-warning" id="btn_modificar">Modificar</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Eliminar -->
    <div class="modal fade" id="eliminarUsuario" tabindex="-1" aria-labelledby="eliminarUsuarioLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eliminarUsuarioLabel">Eliminar usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                ¿Seguro que deseas eliminar este usuario?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger" id="btn_eliminar">Aceptar</button>
            </div>
            </div>
        </div>
    </div>
    
    <script src="libraries/jquery/jquery-3.6.0.min.js"></script>
    <script src="libraries/bootstrap-5/bootstrap.bundle.min.js"></script>
    <script src="libraries/bootstrap-5/bootstrap.min.js"></script>
    <script src="src/js/app.js"></script>
</body>
</html>