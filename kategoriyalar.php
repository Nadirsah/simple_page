<?php include('layouts/header.php') ?>
<?php include_once('confiq/config.php') ?>
<?php session_start() ?>
<div class="container-fluid ">
  <?php include('layouts/navbar.php') ?>
  <div class="row mb-3">
    
    <div class="col-8">
      <?php include('layouts/kurslar.php') ?>
    </div>
  </div>
</div>
<?php include('layouts/footer.php') ?>