<?php
$session = session();
$nombre = $session->get('nombre');
$perfil= $session->get('perfil_id');
?>
<!-- NavBar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary container-md">
  <div class="container-fluid">
    <a class="navbar-brand" href="principal"><img width="50px" src="assets/img/logo_corrientes.jpg" alt="El logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!--agrego el if para que se muestre el boton de admin-->
    <?php if(session()->perfil_id==1) : ?>
      <div class="btn btn-secondary active btnUser btn-sm">
        <a href="">Admin: <?php echo session('nombre'); ?></a>
      </div>
      <a class ="navbar-brand" href="#"></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- <li class="nav-item"> -->
            <!--   <a href="registro" class="btn btn-secondary active btnUser btn-sm">Registrarse</a> -->
            <!-- </li> -->
            <!-- <li class="nav-item"> -->
            <!--   <a href="login" class="btn btn-secondary active btnUser btn-sm">Login</a> -->
            <!-- </li> -->
            <li class="nav-item">
              <a href="<?php echo base_url('/logout');?>" class="btn btn-secondary active btnUser btn-sm">Logout</a>
          </ul>

        </div>
        <!-- pongo else if para clientes -->
    <?php elseif(session()->perfil_id==2) : ?>
      <div class="btn btn-info active btnUser btn-sm">
        <a href="">Cliente: <?php echo session('nombre'); ?></a>
      </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active"  href="principal">Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="quienes_somos">Quienes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="acerca_de">acerca de ...</a>
        </li>
        <!-- <li class="nav-item"> -->
        <!--   <a class="nav-link active" aria-current="page" href="registro">Registrarse</a> -->
        <!-- </li> -->
        <!-- <li class="nav-item"> -->
        <!--   <a class="nav-link active" aria-current="page" href="login">Login</a> -->
        <!-- </li> -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('/logout');?>">Logout</a>
    
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
  <!--pongo else para usuarios no registrados-->
    <?php else: ?>
      <div class="btn btn-info active btnUser btn-sm">
      <a href="">Cliente: <?php echo session('nombre'); ?></a>
    </div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active"  href="principal">Principal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="quienes_somos">Quienes somos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="acerca_de">acerca de ...</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="registro">Registrarse</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="<?php echo base_url('/logout');?>">Logout</a>
  
    </ul>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
  <?php endif ?>
</div>
    
</nav>

<!-- fin NavBar -->