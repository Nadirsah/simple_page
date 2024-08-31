<?php session_start() ?>
<?php include_once('confiq/config.php') ?>
<?php include('layouts/header.php') ?>
<div class="container-fluid ">
    <?php if (isset($_SESSION['message'])) : ?>
        <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
    <?php
        unset($_SESSION['message']);
    endif;
    ?>
    <?php include('layouts/navbar.php') ?>
    <div class="row mb-3">
        <div class="col-4">
            <?php include('layouts/sidebar.php') ?>
        </div>
        <div class="col-8">
            <?php include('layouts/kategoriyalar.php') ?>
        </div>
    </div>
</div>
<?php include('layouts/footer.php') ?>