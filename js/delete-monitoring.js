$(document).ready(function () {
  // When the modal is shown, set the data-id attribute to the delete button
  $("#deleteModal").on("show.bs.modal", function (e) {
    var button = $(e.relatedTarget);
    var id = button.data("id");
    var modal = $(this);
    modal.find("#confirmDelete").data("id", id);
  });

  // Handle the delete button click
  $("#confirmDelete").click(function () {
    var id = $(this).data("id");

    $.ajax({
      url: "delete-monitoring.php",
      type: "GET",
      data: { id: id },
      success: function (response) {
        alert("Data Berhasil Dihapus");
        $("#deleteModal").modal("hide");
        // Optionally refresh the table or redirect to another page
        window.location.href = "tables-monitoring.php";
      },
      error: function () {
        alert("Data Gagal Dihapus");
        $("#deleteModal").modal("hide");
      },
    });
  });
});
