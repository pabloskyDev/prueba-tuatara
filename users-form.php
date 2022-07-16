<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="libraries/bootstrap-5/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/form.css">
    <title>Usuarios - Tuatara</title>
</head>
<body>
    <!-- Consultar -->
    <div class="container-fluid">
        <div class="row text-md-center text-black">
            <div class="col-md-12">
                <h1 class="fw-bold text-uppercase m-3">Usuarios</h1>
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
            <div class="modal-header bg-success">
                <h5 class="modal-title text-white m-auto" id="agregarUsuarioLabel">Registrar usuario</h5>
            </div>
            <div class="modal-body">
                <form id="frm_registrar" method="post" autocomplete="off" class="row g-3 needs-validation" novalidate>
                    <div class="mb-1 col-12">
                        <label for="documento" class="form-label">Documento</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control" name="documento" id="documento" required>
                            <div class="invalid-feedback">
                                Por favor ingresa el documento
                            </div>
                        </div>
                    </div>
                    <div class="mb-1 col-12">
                        <label for="nombre" class="form-label">Nombre</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control" name="nombre" id="nombre" required>
                            <div class="invalid-feedback">
                                Por favor ingresa el nombre
                            </div>
                        </div>
                    </div>
                    <div class="mb-1 col-12">
                        <label for="apellido" class="form-label">Apellido</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control" name="apellido" id="apellido" required>
                            <div class="invalid-feedback">
                                Por favor ingresa los apellidos
                            </div>
                        </div>
                        
                    </div>
                    <div class="mb-1 col-12">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group has-validation">
                            <input type="email" class="form-control" name="email" id="email" placeholder="ejemplo@gmail.com" required>
                            <div class="invalid-feedback">
                                Por favor ingresa bien el correo
                            </div>
                        </div>
                    </div>
                    <div class="buttons-form text-center">
                        <button type="button" class="btn btn-secondary col-md-4" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success col-md-4" id="btn_guardar">Guardar</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>

    <!-- Modificar -->
    <div class="modal fade" id="modificarUsuario" tabindex="-1" aria-labelledby="modificarUsuarioLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title text-white m-auto" id="modificarUsuarioLabel">Modificar usuario</h5>
            </div>
            <div class="modal-body">
                <form id="frm_modificar" method="PUT">
                    <input type="hidden" name="id" id="id">
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
            <div class="modal-footer m-auto">
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
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white m-auto" id="eliminarUsuarioLabel">Eliminar usuario</h5>
            </div>
            <div class="modal-body text-center">
                ¿Seguro que deseas eliminar este usuario?
            </div>
            <div class="modal-footer m-auto">
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