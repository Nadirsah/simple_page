<?php if ($result_kategoriya_detail) {
    foreach ($result_kategoriya_detail as $item) { ?>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/<?php echo $item->img ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <a href="./kategoriya_detail.php?id=<?php echo $item->id ?>" class="card-title"><?php echo $item->title ?></a>
                        <p class="card-text"><?php echo $item->description ?></p>

                    </div>
                </div>
            </div>
        </div>
    <?php
    }
} else { ?>
    <a href="./kategoriya_detail.php" class="card-title">Melumat yoxdur</a>
<?php
}
?>