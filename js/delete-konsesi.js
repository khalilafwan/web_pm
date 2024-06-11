$(document).ready(function () {
  // When the modal is shown, set the data-id_konsesi attribute to the delete button
  $("#deleteModal").on("show.bs.modal", function (e) {
    var button = $(e.relatedTarget);
    var id_konsesi = button.data("id_konsesi");
    var modal = $(this);
    modal.find("#confirmDelete").data("id_konsesi", id_konsesi);
  });

  // Handle the delete button click
  $("#confirmDelete").click(function () {
    var id_konsesi = $(this).data("id_konsesi");

    $.ajax({
      url: "delete-konsesi.php",
      type: "GET",
      data: { id_konsesi: id_konsesi },
      success: function (response) {
        alert("Data Berhasil Dihapus");
        $("#deleteModal").modal("hide");
        // Optionally refresh the table or redirect to another page
        window.location.href = "tables-konsesi.php";
      },
      error: function () {
        alert("Data Gagal Dihapus");
        $("#deleteModal").modal("hide");
      },
    });
  });
});
