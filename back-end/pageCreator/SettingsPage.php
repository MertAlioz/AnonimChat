<?php

use  real_blog\Settings\page; ?>

<!DOCTYPE html>

<html lang="tr">

<body>
    <?php
    foreach (page::include() as $row) {
        include $row;
    }
    foreach (page::FooterLink() as $row) {
        echo "<script src='$row'></script>";
    }
    ?>
</body>

</html>