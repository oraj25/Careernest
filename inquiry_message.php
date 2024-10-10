<?php
    if(isset($_SESSION['inquiry_message'])) :
?>

    <div class="alert custom-alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> <?= $_SESSION['inquiry_message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php 
    unset($_SESSION['inquiry_message']);
    endif;
?>
