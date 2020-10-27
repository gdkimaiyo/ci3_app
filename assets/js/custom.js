// Custom JS
// bootbox dialog boxes
$(document).on("click", ".delete-alert", function(e) {
  var link = $(this).attr('href');
  e.preventDefault();
  bootbox.confirm({
      title: "Delete record?",
      message: "Do you want to delete this record? This cannot be undone.",
      buttons: {
          cancel: {
              label: '<i class="fa fa-times"></i> Cancel',
              className: "btn-secondary",
          },
          confirm: {
              label: '<i class="fa fa-trash-o"></i> Delete!',
              className: "btn-danger",
          }
      },
      callback: function (result) {
        console.log(result); // true = confirm button clicked, else
        if (result) {
          document.location.href = link;
        }
      }
  });
});
