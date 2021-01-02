$(document).ready(() => {

    //Par défaut ne pas afficher le titre de la sidebar
    $(".nav-title").toggleClass("close");

    //Gestion du clic
    $("#menu-toggle").click((e) => {
      e.preventDefault();
      $(".nav-title").toggleClass("close");
      $("#sidebar-wrapper").toggleClass("close-sidebar");

      if($("#btn-sidebar").attr("class") === "fa fa-bars fa-2x"){
        $("#btn-sidebar").removeClass("fa-bars fa-2x");
        $("#btn-sidebar").addClass("fa-times fa-2x");
        $(".btnAdd").hide();
        $(".add").css("width", "0");
        $(".add").css("justify-content", "center");
        $(".add").css("border-radius", "100%");
      }else{
        $("#btn-sidebar").removeClass("fa-times fa-2x");
        $("#btn-sidebar").addClass("fa-bars fa-2x");
        $(".btnAdd").show();
        $(".add").css("width", "200px");
        $(".add").css("justify-content", "space-between");
        $(".add").css("border-radius", "10px");
      }

    });

})