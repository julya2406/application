<?php
    require("constants.php");

    $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die("ERROR!");
