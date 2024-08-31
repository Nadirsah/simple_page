<ul class="list-group">
    <?php if ($result_kategoriya) {
        foreach ($result_kategoriya as $data) { ?>
            <li class="list-group-item"><?php echo $data->name ?></li>
        <?php
        }
    } else { ?>
        <li class="list-group-item"> No data</li>
    <?php
    }
    ?>

</ul>