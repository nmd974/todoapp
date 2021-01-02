<?php
    $titlePage = "Mes notes";
    require_once(dirname(__DIR__).'/includes/Layout/header.php'); 
?>

<div class="container-fluid" id="page-content">
    <h1 class="mb-5">Mes notes</h1>

    <?php
        require_once(__ROOT__.'/src/includes/noteItem.php');
    ?>

    <button class="add bg-dark">
        <i class="fa fa-plus" aria-hidden="true"></i>
        <div class="btnAdd">Ajouter une note</div>
    </button>
</div>


<?php
    require_once(__ROOT__.'/src/includes/Layout/footer.php');
?>