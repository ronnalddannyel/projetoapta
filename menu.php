<? include ('config.php'); ?>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="index.html" class="logo d-flex align-items-center">
    <img src="#" alt="">
    <span class="d-none d-lg-block">APTA</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->
<a class="btn btn-outline-success" href="<?php echo $url ?>logout.php"><strong>Logout</strong></a>
<div class="search-bar">
  <form class="search-form d-flex align-items-center" method="POST" action="#">

  </form>
</div><!-- End Search Bar -->



  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar - menu ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  
<!-- Início Item MinhaConta-->
<li class="nav-item">
    <a class="nav-link " href="<?php echo $url ?>/PainelAptaInterno/index.php">
      <i class="bi bi-grid"></i>
      <span>Minha Conta</span>
    </a>
  </li>
<!-- Final Item MinhaConta-->

<!-- Início Item MinhaConta-->
<li class="nav-item">
    <a class="nav-link " href="<?php echo $url ?>/PainelAptaInterno/index.php">
      <i class="bi bi-grid"></i>
      <span>Aulas</span>
    </a>
  </li>
<!-- Final Item MinhaConta-->



  
    

</ul>
</aside><!-- End Sidebar-->
