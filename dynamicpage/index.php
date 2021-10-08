<?php
    $page = (isset($_GET['page']) &&  !empty($_GET['page']) ? $_GET['page'] : '');
    $file = "";
    if ($page == 'about'){
        $file = "pages/about.php";
    }

    else if ($page == 'contact'){
        $file = "pages/contact.php";
    }

    else if ($page == 'services'){
        $file = "pages/services.php";
    }

    else {
        $file = "pages/home.php";
    }
    
    include "templates/content.php"; //content
?>