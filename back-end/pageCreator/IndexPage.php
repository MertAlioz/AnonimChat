<?php

use  real_blog\index\page; ?>
<!DOCTYPE html>

<html lang="tr">

<head>
<?php

foreach (page::Head() as $row) {
    include $row;
}
?>
</head>

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