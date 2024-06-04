// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
    scrollX : true,
  fixedColumns : true,
  responsive: true,
  lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
  pageLength: 102,
  dom: "<'row'<'col-md-3'l><'col-md-7'f><'col-md-2 text-right'B>><'row'<'col-md-12't>><'row'<'col-md-6'i><'col-md-6'p>>",
  autoWidth: false,    
  language: {
      search: "Search",
      emptyTable: "No records found"
     }
  });
});

$.extend($.fn.dataTable.defaults, {
  scrollX : true,
  fixedColumns : true,
  responsive: true,
  lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
  pageLength: 52,
  dom: "<'row'<'col-md-3'l><'col-md-7'f><'col-md-2 text-right'B>><'row'<'col-md-12't>><'row'<'col-md-6'i><'col-md-6'p>>",
  autoWidth: false,    
  language: {
      search: "Search",
      emptyTable: "No records found"
     }
});

