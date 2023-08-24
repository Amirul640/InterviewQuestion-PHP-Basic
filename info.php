<?php
if (isset($_POST['username'])) {
    $input_username = $_POST['username'];
    
    // verification 
    if ($input_username === 'abc') {
        echo 'Verified';
    } else {
        echo 'Error';
    }
}
?>
