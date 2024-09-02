<?php session_start() ?>
<?php include_once('confiq/config.php') ?>
<?php include('layouts/header.php') ?>
<div class="container-fluid ">
    <?php include('layouts/navbar.php') ?>
    <div class="row mb-3">
        <div class="col-4">
            

            <form action="code.php" method="POST">
                <input type="hidden" name="kategory_id" class="form-control" value="<?=  $result->id ?>">
                <label for="kategoriya">Kategoriya</label>
                <input id="kategoriya" type="text" name="name" class="form-control" value="<?=  $result->name ?>">
                <input type="submit" value="Update" name="update_kat">
            </form>
        </div>
    </div>
</div>
<?php include('layouts/footer.php') ?>