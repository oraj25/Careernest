<?php
    if(isset($_SESSION['message'])) :
?>

    <div class="alert custom-alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> <?= $_SESSION['message']; ?>
    </div>

<?php 
    unset($_SESSION['message']);
    endif;
?>
