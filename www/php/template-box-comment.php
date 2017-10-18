<?php

if ($id % 2 == 1) {
    ?>
    <div class="col-12 col-sm-6 col-md-4">
        <div class="col-12  comment-title comment-title-bg-1">
            <p><?php echo $name ?></p>>
        </div>
        <div class="col-12 comment-body comment-body-bg-1">
            <br/>
            <p class=""><?php echo $email ?></p>

            <p class=""><?php echo $comment ?></p>
        </div>
    </div>

    <?php
} else {
    ?>

    <div class="col-12 col-sm-6 col-md-4">
        <div class="col-12  comment-title comment-title-bg-2">
            <p><?php echo $name ?></p>>
        </div>
        <div class="col-12 comment-body comment-body-bg-2">
            <br/>
            <p class="mail-color"><?php echo $email ?></p>

            <p class=""><?php echo $comment ?></p>
        </div>
    </div>

    <?php
}
?>

