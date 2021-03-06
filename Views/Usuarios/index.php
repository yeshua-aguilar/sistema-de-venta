<?php include "Views/Templates/header.php"; ?>
<ol class="breadcrumb mb-4">
    <!-- <li class="breadcrumb-item active">Usuarios</li> NO BORRAR -->
    <div class="alert alert-primary" role="alert">
        Usuarios
    </div>
</ol>
<!-- boton de crear nuevos usuarios -->
<button type="button" class="btn btn-primary mb-2" onclick="frmUsuario()"><i class="fa fa-plus"></i></button>
<!-- Vista de las tablas -->
<table class="table" id="tblUsuarios">
  <thead class="table-dark">
      <tr>
          <th>Id</th>
          <th>Usuario</th>
          <th>Nombre</th>
          <th>Caja</th>
          <th>Estado</th>
          <th></th>
      </tr>
  </thead>
  <tbody>
  </tbody>
</table>
<!-- Funcion de crear nuevos usuarios -->
<div class="modal fade" id="nuevo_usuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white" id="title">Nuevo Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" id="frmUsuarios">
          <div class="form-group">
            <label for="usuario">Usuario</label>
            <input type="hidden" id="id" name="id">
            <input id="usuario" class="form-control" type="text" name="usuario" placeholder="Usuario">
          </div>
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre del usuario">
          </div>
          <div class="row" id="claves">
             <div class="col-md-6">
                 <div class="form-group">
                      <label for="clave">Comtraseña</label>
                      <input id="clave" class="form-control" type="password" name="clave" placeholder="Contraseña">
                 </div>
             </div>
             <div class="col-md-6">
                   <div class="form-group">
                        <label for="confirmar">Confirmar Contraseña</label>
                        <input id="confirmar" class="form-control" type="password" name="confirmar" placeholder="Confirmar contraseña">
                   </div> 
             </div>
          </div>
          <div class="form-group">
            <label for="caja">Caja</label>
            <select id="caja" class="form-control" name="caja">
                <?php foreach ($data['cajas'] as $row) { ?>
                     <option value="<?php echo $row['id']; ?>"><?php echo $row['caja']; ?></option>
                <?php } ?>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="registrarUser(event)" id="btnAccion">Registrar</button>
      </div>
    </div>
  </div>
</div>
<!-- para que visualise el footer -->
<?php include "Views/Templates/footer.php"; ?>