<?php
function messageContent($file) {
    ob_start();
    $name  = $_GET['name'];
    $css = file_get_contents("../../email/thankyou/thankyou_stylesheet.css");
    require($file);
    return ob_get_clean();
}
include("thankyou_engine.php");
?>
