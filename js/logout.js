// Add event listener to the logout link
document.getElementById("logoutLink").addEventListener("click", function(event) {
    // Prevent the default link behavior
    event.preventDefault();

    // Display confirmation using SweetAlert
    Swal.fire({
        title: "Are you sure?",
        text: "You will be logged out.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, logout"
    }).then((result) => {
        if (result.isConfirmed) {
            // If confirmed, redirect to logout.php
            window.location.href = 'logout.php';
        }
    });
});