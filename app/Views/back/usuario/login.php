<!--mensaje de error-->
<?php if (session()->getFlashdata('msg')): ?>
    <div class="alert alert-danger">
      <?= session()->getFlashdata('msg') ?>
    </div>
<?php endif; ?>
<!-- agrego h1 con titulo -->
<h1 class="text-center fuente2 ">Iniciar Sesión</h1>
<!-- agregue la clase container-md y my-4 -->
<section class="bg-light container-md my-4 ">
<!-- agregue la clase container-md y my-4 -->
<form method="post" action="<?php echo base_url('/enviarlogin') ?>" >
  <div class="mb-3">
    <label for="InputCorreo" class="form-label">Correo Electrónico</label>
    <input type="email" name="email" class="form-control" id="InputCorreo1">
  </div>
  <div class="mb-3">
    <label for="InputContraseña" class="form-label">Contraseña</label>
    <input type="password" name="pass" class="form-control" id="InputContraseña1">
  </div>
  <!-- agrego el link para recuperar contraseña -->
  <div class="mb-3">
    <a href="#">¿Olvidaste tu contraseña?</a>
  </div>
  <!-- fin link para recuperar contraseña -->
  <button type="submit" class="btn btn-primary">Ingresar</button>
  <div class="mb-3">
    <a href="<?php echo base_url('/registro') ?>">¿No tienes cuenta? Registrate</a>
</form>
</section>