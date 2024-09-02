<?php session_start() ?>
<?php include('layouts/header.php') ?>
<div class="container-fluid ">
    <?php include('layouts/navbar.php') ?>
    <div class="row mb-3">
        <div class="col-4">
           
            <form action="code.php" method="post">
                <label for="kategoriya">Kategoriya</label>
                <input id="kategoriya" type="text" name="name" class="form-control">
                <input type="submit" value="Gonder" name="submit">
            </form>
        </div>
    </div>
</div>
<?php include('layouts/footer.php') ?>