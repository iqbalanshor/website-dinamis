<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'home':
            include "includes/home.php";
            break;

        case 'portofolio':
            include "includes/portofolio.php";
            break;

        case 'contact':
            include "includes/contact.php";
            break;

        case 'table':
            include "includes/datatables.php";
            break;

        case 'form':
            include "includes/form.php";
            break;
    }
} else {
    include "includes/home.php";
}

?>