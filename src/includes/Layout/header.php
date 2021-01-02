<?php
    define('__ROOT__', dirname(dirname(dirname(__DIR__)))); 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <!-- CSS style -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- MARKDOWN SCRIPT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/marked/1.2.7/marked.min.js" integrity="sha512-Sl04EWeJ0QgILm83WoubQbZqh71aWLJP8xnswnKSBI37S+ZtrWVtSHmd1YaYYdC1g9PWN1siY7KO2jU3HtCVHA==" crossorigin="anonymous"></script>

    <!--Ici on indique si sur la page avant l'appel du header si le nom est défini alors on met le nom sinon on met le nom de l'app-->
    <title>
        <?php 
            if(isset($titlePage)){
                echo $titlePage;
            }else{
                echo "Nom de l'app";
            } 
        ?>
    </title>

</head>
<body class="d-flex">

    <!-- Sidebar -->
    <div class="bg-dark border-right d-flex flex-column justify-content-between align-items-center" id="sidebar-wrapper">

      <div class="list-group list-group-flush w-100">
        <a href="#" class="list-group-item list-group-item-action bg-dark d-flex justify-content-start align-items-start mb-5">
            <i class="fa fa-user fa-2x" aria-hidden="true"></i>
            <div class="nav-title">Login</div>
        </a>
        <a href="#" class="list-group-item list-group-item-action bg-dark d-flex justify-content-start align-items-center">
            <i class="fa fa-sticky-note fa-2x" aria-hidden="true"></i>
            <div class="nav-title">Mes notes</div>
        </a>
        <a href="#" class="list-group-item list-group-item-action bg-dark d-flex justify-content-start align-items-center">
            <i class="fa fa-tasks fa-2x" aria-hidden="true"></i>
            <div class="nav-title">Mes tâches</div>
        </a>
        <a href="#" class="list-group-item list-group-item-action bg-dark d-flex justify-content-start align-items-center">
            <i class="fa fa-star fa-2x" aria-hidden="true"></i>
            <div class="nav-title">Importants</div>
        </a>
        <a href="#" class="list-group-item list-group-item-action bg-dark d-flex justify-content-start align-items-center">
            <i class="fa fa-calendar fa-2x" aria-hidden="true"></i>
            <div class="nav-title">Ma journée</div>
        </a>
        <a href="#" class="list-group-item list-group-item-action bg-dark d-flex justify-content-start align-items-center">
            <i class="fa fa-archive fa-2x" aria-hidden="true"></i>
            <div class="nav-title">Archives</div>
        </a>
      </div>
      <button class="btn btn-dark" id="menu-toggle"><i class="fa fa-bars fa-2x" id="btn-sidebar" aria-hidden="true"></i></button>
    </div>
    <!-- /#sidebar-wrapper -->



