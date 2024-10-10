// script.js

// Confirmation dialog for delete operation
document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('button[name="delete_employer_profile"]');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            const confirmDelete = confirm("Are you sure you want to delete this record?");
            if (!confirmDelete) {
                event.preventDefault(); // Stop form submission if user cancels
            }
        });
    });
});
