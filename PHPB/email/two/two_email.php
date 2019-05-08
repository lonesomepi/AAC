<?php
function messageContent($file) {
    ob_start();
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $css = file_get_contents("../../email/two/two_stylesheet.css");
    require($file);
    return ob_get_clean();
}
include("two_engine.php");
?>
