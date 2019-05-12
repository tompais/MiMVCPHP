<h1 class="text-center my-5 text-danger">Hello World</h1>

<div class="d-flex justify-content-center align-items-center w-100">
    <form action="<?php echo getBaseAddress() . "Usuario/usuario/1" ?>" method="post">
        <div class="form-group">
          <label for="inputNombre">Nombre</label>
          <input type="text" class="form-control" name="nombre" id="inputNombre" placeholder="Ingrese su nombre">
        </div>
        <div class="form-group">
          <label for="inputApellido">Apellido</label>
          <input type="text" class="form-control" name="apellido" id="inputApellido" placeholder="Ingrese su apellido">
        </div>
        <button type="submit" class="btn btn-outline-primary">Redirigir</button>
    </form>
</div>
