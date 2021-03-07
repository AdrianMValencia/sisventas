/*==========================================
   EDITAR CATEGORIA
==========================================*/
$(document).on("click", ".btnEditCategory", function () {
  var idCategory = $(this).attr("idCategory");
  var data = new FormData();
  data.append("idCategory", idCategory);
  $.ajax({
    url: "ajax/categories.ajax.php",
    method: "POST",
    data: data,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function (response) {
      $("#editCategory").val(response["categoria"]);
      $("#idCategory").val(response["id"]);
    },
  });
});