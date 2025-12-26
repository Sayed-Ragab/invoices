<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

// Add Alert
if(isset($_SESSION['add'])) {
    $msg = $_SESSION['add'];
    echo "<script>
        $(document).ready(function(){
            notif({ msg: '$msg', type: 'success' });
        });
    </script>";
    unset($_SESSION['add']);
}

// Edit Alert
if(isset($_SESSION['edit'])) {
    $msg = $_SESSION['edit'];
    echo "<script>
        $(document).ready(function(){
            notif({ msg: '$msg', type: 'success' });
        });
    </script>";
    unset($_SESSION['edit']);
}

// Delete Alert
if(isset($_SESSION['delete'])) {
    $msg = $_SESSION['delete'];
    echo "<script>
        $(document).ready(function(){
            notif({ msg: '$msg', type: 'error' });
        });
    </script>";
    unset($_SESSION['delete']);
}

// Errors
if(isset($_SESSION['errors']) && count($_SESSION['errors']) > 0){
    echo '<div class="alert alert-danger">';
    echo '<button aria-label="Close" class="Close" data-dismiss="alert" type="button">
            <span aria-hidden="true">&times;</span>
          </button>';
    echo '<ul>';
    foreach($_SESSION['errors'] as $error){
        echo "<li>$error</li>";
    }
    echo '</ul></div>';
    unset($_SESSION['errors']);
}
?>
