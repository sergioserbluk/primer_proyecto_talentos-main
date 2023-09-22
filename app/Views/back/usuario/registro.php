<!-- agrego h1 con titulo -->
<h1 class="text-center fuente2">Registro de Usuario</h1>
<?php $validation = \Config\Services::validation(); ?>


<!-- agregue la clase container-md y my-4 -->
<section class="bg-light container-md y my-4" >
<!-- agregue la clase container-md y my-4 -->
<form method="post" action="<?php echo base_url('/enviar-form') ?>">
  <?= csrf_field(); ?>
  <?= csrf_field(); ?>
  <?php if(!empty(session()->getFlashdata('fail'))) : ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('fail');?></div>
  <?php endif ?>
  <?php if(!empty(session()->getFlashdata('success'))) : ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success');?></div>
  <?php endif ?>

  <div class="mb-3">
    <label for="InputNombres" class="form-label">Nombres</label>
    <input type="text" name="nombre" class="form-control" id="InputNombres">
    <!--Error-->
      <?php if($validation->getError('nombre')) {?>
        <div class='alert alert-danger mt-2'>
          <?= $error = $validation->getError('nombre'); ?>
         </div>
      <?php }?>
  </div>
  <div class="mb-3">
    <label for="InputApellido" class="form-label">Apellido</label>
    <input type="apellido" name="apellido" class="form-control" id="InputApellido">
    <!--Error-->
      <?php if($validation->getError('apellido')) {?>
        <div class='alert alert-danger mt-2'>
          <?= $error = $validation->getError('apellido'); ?>
         </div>
      <?php }?>
  </div>
  <div class="mb-3">
    <label for="InputCorreo" class="form-label">Correo electrónico</label>
    <input type="email" name="email" class="form-control" id="InputCorreo">
    <!--Error-->
      <?php if($validation->getError('email')) {?>
        <div class='alert alert-danger mt-2'>
          <?= $error = $validation->getError('email'); ?>
         </div>
      <?php }?>
  </div>
  <div class="mb-3">
    <label for="InputUsuario" class="form-label">usuario</label>
    <input type="text" name="usuario" class="form-control" id="Inputusuario">
    <!--Error-->
      <?php if($validation->getError('usuario')) {?>
        <div class='alert alert-danger mt-2'>
          <?= $error = $validation->getError('usuario'); ?>
         </div>
      <?php }?>
  </div>
  <div class="mb-3">
    <label for="InputContraseña" class="form-label">Contraseña</label>
    <input type="password" name="pass" class="form-control" id="InputContraseña">
    <!--Error-->
      <?php if($validation->getError('pass')) {?>
        <div class='alert alert-danger mt-2'>
          <?= $error = $validation->getError('pass'); ?>
         </div>
      <?php }?>
  </div>
  <input type="submit" class="btn btn-primary">Enviar</button>
  <input type="reset" class="btn btn-primary">Limpiar</button>

</form>
</section> 