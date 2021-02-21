
<div class="user-content">
        <div class="user-form"  >
            <h4 class='text-center'>Registro de Usuario</h4>
            <form action="index.php?controler=usuario&metodo=save" method='post'>
                <div class="form-group row">
                    <label  class="col-2 col-md-12 col-form-label">Nombre</label>
                    <div class="col-10 col-md-12">
                    <input type="text" class="form-control" name='nombre'>
                    </div>
                </div>
                <div class="form-group row">
                    <label   class="col-2 col-md-12 col-form-label">Apellidos</label>
                    <div class="col-10 col-md-12">
                    <input type="text" class="form-control" name="apellidos">
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-2 col-md-12 col-form-label">Email</label>
                    <div class="col-10 col-md-12">
                    <input type="text" class="form-control" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-2  col-md-12 col-form-label">Password</label>
                    <div class="col-10  col-md-12">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>
                <div class='text-center'>
                <button type="submit" class="btn btn-info">REGISTRARME</button>
                </div>
              </form>
        </div>
</div>
