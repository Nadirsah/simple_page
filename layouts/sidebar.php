<ul class="list-group">
    <?php if ($result_kategoriya) {
        foreach ($result_kategoriya as $data) { ?>
            <li class="list-group-item"><?php echo $data->name ?> </br>
        <a href="edit.php?id=<?php echo $data->id ?>" class="btn btn-info">Edit kategory</a>
        </br>
        <div>
            <form action="code.php" method="post">
                <button class="btn btn-danger" type="submit" name="del_kat" value="<?= $data->id ?>">Delete</button>
            </form>
        </div>
        </li>
            
        <?php
        }
    } else { ?>
        <li class="list-group-item"> No data</li>
    <?php
    }
    ?>

</ul>