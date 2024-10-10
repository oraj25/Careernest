// Logout Button
document.getElementById('logoutBtn').addEventListener('click', function() {
    alert('Logging out...');
    // Here you can add the logic for logging out (redirecting to login page or clearing session)
    window.location.href = 'home.php';  // Assuming there is a login.html page
});