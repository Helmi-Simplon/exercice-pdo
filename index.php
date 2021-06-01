<?php
include('view/header.php');
include('dbConfig/dbconnect.php');
include('controllers/sql.controllers.php');
if ($_GET == null) {

    include("view/home.php");
} else {
    include("view/article.php");
}
include('view/footer.php');
